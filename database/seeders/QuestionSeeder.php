<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            [
                'quiz_id' => 1,
                'question' => 'What is the capital of France?',
                'options' => json_encode(['Paris', 'London', 'Berlin', 'Rome']),
                'answer' => 'Paris',
                'difficulty' => 'easy',
                'topic' => 'Geography',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'quiz_id' => 1,
                'question' => 'Which planet is known as the Red Planet?',
                'options' => json_encode(['Earth', 'Mars', 'Jupiter', 'Venus']),
                'answer' => 'Mars',
                'difficulty' => 'easy',
                'topic' => 'Astronomy',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'quiz_id' => 1,
                'question' => 'Who developed the theory of relativity?',
                'options' => json_encode(['Isaac Newton', 'Albert Einstein', 'Nikola Tesla', 'Galileo Galilei']),
                'answer' => 'Albert Einstein',
                'difficulty' => 'medium',
                'topic' => 'Physics',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'quiz_id' => 1,
                'question' => 'What is the largest organ in the human body?',
                'options' => json_encode(['Heart', 'Liver', 'Skin', 'Lungs']),
                'answer' => 'Skin',
                'difficulty' => 'medium',
                'topic' => 'Biology',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'quiz_id' => 1,
                'question' => 'In which year did World War II end?',
                'options' => json_encode(['1945', '1939', '1918', '1950']),
                'answer' => '1945',
                'difficulty' => 'hard',
                'topic' => 'History',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}