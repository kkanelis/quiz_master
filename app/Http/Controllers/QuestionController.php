<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function submitQuiz(Request $request)
    {
        $startTime = session('quiz_start_time');
        $endTime = now();
        $timeSpent = $endTime->diffInSeconds($startTime);
        
        $score = 0;
        $totalQuestions = count($request->answers);
        
        foreach ($request->answers as $questionId => $answer) {
            $question = Question::find($questionId);
            if ($question && $question->answer === $answer) {
                $score++;
            }
        }

        // Calculate percentage
        $percentage = ($score / $totalQuestions) * 100;

        // Save result
        Result::create([
            'user_id' => Auth::id(),
            'quiz_id' => $request->quiz_id,
            'score' => $score,
            'total_questions' => $totalQuestions,
            'percentage' => $percentage,
            'time_spent' => $timeSpent,
            'topic' => $request->topic,
            'difficulty' => $request->difficulty
        ]);

        return redirect()->route('quiz.result')->with([
            'score' => $score,
            'total' => $totalQuestions,
            'time' => $timeSpent,
            'percentage' => $percentage
        ]);
    }
}
