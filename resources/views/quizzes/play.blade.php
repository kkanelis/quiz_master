<x-layout>
    @section('content')
    <div class="quiz-container">
        <h1 class="quiz-title">
            Quiz
            @if($topic) (Topic: {{ ucfirst($topic) }}) @endif
            @if($difficulty) - Difficulty: {{ ucfirst($difficulty) }} @endif
        </h1>

        <form method="POST" action="{{ route('quiz.submit') }}" id="quizForm">
            @csrf
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

            <button type="submit" class="btn btn-primary">Submit Quiz</button>
        </form>
    </div>
    @endsection
</x-layout>
