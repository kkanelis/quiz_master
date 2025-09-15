<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');              // jautājuma teksts
            $table->json('options');                 // atbilžu varianti (JSON masīvs)
            $table->string('answer');                // pareizā atbilde
            $table->enum('difficulty', ['easy', 'medium', 'hard']); // grūtības pakāpe
            $table->string('topic');                 // tēma, piem. math, geography utt.
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};