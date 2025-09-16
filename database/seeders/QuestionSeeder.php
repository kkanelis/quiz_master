<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Quiz;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'Matemātikas un ģeogrāfijas tests',
        ]);

        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik ir 2 + 2?',
            'options' => json_encode(['3','4','5','6']),
            'answer' => '4',
            'difficulty' => 'easy',
            'topic' => 'math',
        ]);

        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura ir Latvijas galvaspilsēta?',
            'options' => json_encode(['Tallina','Viļņa','Rīga','Helsinki']),
            'answer' => 'Rīga',
            'difficulty' => 'easy',
            'topic' => 'geography',
        ]);

        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik ir √144?',
            'options' => json_encode(['10','11','12','13']),
            'answer' => '12',
            'difficulty' => 'hard',
            'topic' => 'math',
        ]);
    }
}