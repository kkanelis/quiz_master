{{-- filepath: resources/views/quizzes/play.blade.php --}}
<x-layout>
    <div class="quiz-container">
        <h1 class="quiz-title">
            {{ $quiz->title ?? 'Quiz' }}
            @if($topic) (Tēma: {{ ucfirst($topic) }}) @endif
            @if($difficulty) - Grūtība: {{ ucfirst($difficulty) }} @endif
        </h1>

        <form method="POST" action="{{ route('quiz.submit') }}" id="quizForm">
            @csrf
            <input type="hidden" name="quiz_id" value="{{ $quiz_id }}">
            <input type="hidden" name="topic" value="{{ $topic }}">
            <input type="hidden" name="difficulty" value="{{ $difficulty }}">

            @foreach($questions as $index => $question)
                <div class="question-card">
                    <h3 class="question-text">{{ $index + 1 }}. {{ $question->question }}</h3>
                    <div class="options-list">
                        @foreach(json_decode($question->options) as $option)
                            <label class="option-label">
                                <input type="radio" 
                                       name="answers[{{ $question->id }}]" 
                                       value="{{ $option }}" 
                                       required>
                                <span>{{ $option }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <button type="submit" class="btn btn-primary">Iesniegt viktorīnu</button>
        </form>
    </div>
</x-layout>
