<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */

 public function play(Request $request)
    {
        $difficulty = $request->query('difficulty');
        $topic = $request->query('topic');
        $questions = [
            [
                'question' => 'What is 2 + 2?',
                'options'  => ['3', '4', '5', '6'],
                'answer'   => '4',
            ],
            [
                'question' => 'Which planet is known as the Red Planet?',
                'options'  => ['Earth', 'Venus', 'Mars', 'Jupiter'],
                'answer'   => 'Mars',
            ],
            [
                'question' => 'Who was the first President of the USA?',
                'options'  => ['Abraham Lincoln', 'George Washington', 'John Adams', 'Thomas Jefferson'],
                'answer'   => 'George Washington',
            ],
        ];

        return view('quizzes.play', compact('questions'));
    }
    public function start(Request $request)
    {
        $difficulty = $request->input('difficulty');
        $topic = $request->input('topic');

        return view('quizzes.play', compact('difficulty', 'topic'));
    }


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
}