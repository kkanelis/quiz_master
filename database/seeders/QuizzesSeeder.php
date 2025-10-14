<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuizzesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('quizzes')->insert([
            'id' => 1,
            'title' => 'General Knowledge Quiz',
            'description' => 'A simple quiz to test basic knowledge.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}