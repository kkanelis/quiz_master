<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    // Rāda viktorīnas jautājumus
    public function play(Quiz $quiz, Request $request)
    {
        $topic = $request->query('topic');
        $difficulty = $request->query('difficulty');

        $questions = Question::query()
            ->where('quiz_id', $quiz->id)
            ->when($topic, fn($query) => $query->where('topic', $topic))
            ->when($difficulty, fn($query) => $query->where('difficulty', $difficulty))
            ->inRandomOrder()
            ->limit(10)
            ->get();

        // Saglabā nepieciešamo sesijā
        session([
            'quiz_id' => $quiz->id,
            'quiz_start_time' => now(),
            'question_ids' => $questions->pluck('id')->toArray(),
        ]);

        return view('quizzes.play', [
            'quiz' => $quiz,
            'quiz_id' => $quiz->id,
            'topic' => $topic,
            'difficulty' => $difficulty,
            'questions' => $questions,
        ]);
    }

    // Apstrādā iesniegtās atbildes
    public function submit(Request $request)
{
    $quizId = session('quiz_id');
    $questionIds = session('question_ids', []);
    $userAnswers = $request->input('answers', []);

    $questions = Question::whereIn('id', $questionIds)->get();

    $score = 0;
    $results = [];

    foreach ($questions as $question) {
        $userAnswer = $userAnswers[$question->id] ?? null;
        // mainām correct_answer → answer
        $correct = trim($userAnswer) == trim($question->answer);

        if ($correct) {
            $score++;
        }

        $results[] = [
            'question' => $question->question,
            'user_answer' => $userAnswer,
            'correct_answer' => $question->answer, // arī šeit
            'is_correct' => $correct,
        ];
    }

    session([
        'quiz_score' => $score,
        'quiz_total' => count($questions),
        'quiz_results' => $results,
    ]);

    return redirect()->route('quiz.result');
}
    // Rāda rezultātu lapu
    public function result()
    {
        $score = session('quiz_score');
        $total = session('quiz_total');
        $results = session('quiz_results');

        if ($score === null || $total === null || $results === null) {
            return redirect('/')->withErrors('Rezultāti nav pieejami vai sesija ir beigusies.');
        }

        $percentage = ($score / $total) * 100;

        return view('quizzes.result', compact('score', 'total', 'percentage', 'results'));
    }
}