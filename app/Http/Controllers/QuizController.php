<?php
namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
public function play(Request $request)
{
$topic = $request->query('topic');
$difficulty = $request->query('difficulty');

// atlasām jautājumus pēc nosacījumiem
$questions = Question::query()
->when($topic, function ($query, $topic) {
return $query->where('topic', $topic);
})
->when($difficulty, function ($query, $difficulty) {
return $query->where('difficulty', $difficulty);
})
->get();

return view('quizzes.play', compact('questions', 'topic', 'difficulty'));
}
}