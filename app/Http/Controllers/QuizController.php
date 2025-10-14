<?php
namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
public function play(Request $request)
{
$topic = $request->query('topic');
$difficulty = $request->query('difficulty');

$questions = Question::query()
->when($topic, fn($q) => $q->where('topic', $topic))
->when($difficulty, fn($q) => $q->where('difficulty', $difficulty))
->get();

return view('quizzes.play', compact('questions', 'topic', 'difficulty'));
}

public function show(Quiz $quiz, Request $request)
{
// pāradresējam uz play ar quiz_id, topic un difficulty
return redirect()->route('quizzes.play', [
'quiz_id' => $quiz->id,
'topic' => $request->query('topic'),
'difficulty' => $request->query('difficulty'),
]);
}
}