<?php
namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show(Quiz $quiz)
    {
        $questions = Question::where('quiz_id', $quiz->id)
            ->inRandomOrder()
            ->limit(10)
            ->get();

        session(['quiz_start_time' => now()]);

        return view('quizzes.play', [
            'quiz' => $quiz,
            'questions' => $questions,
            'topic' => $quiz->topic,
            'difficulty' => $quiz->difficulty
        ]);
    }

    public function play(Request $request)
    {
        $topic = $request->query('topic');
        $difficulty = $request->query('difficulty');

        session(['quiz_start_time' => now()]);

        $questions = Question::query()
            ->when($topic, function ($query, $topic) {
                return $query->where('topic', $topic);
            })
            ->when($difficulty, function ($query, $difficulty) {
                return $query->where('difficulty', $difficulty);
            })
            ->inRandomOrder()
            ->limit(10)
            ->get();

        return view('quizzes.play', compact('questions', 'topic', 'difficulty'));
    }

    public function result()
    {
        return view('quizzes.result');
    }
}