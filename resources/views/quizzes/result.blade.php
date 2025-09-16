<x-layout>
    <div class="result-container">
        <h1 class="result-title">Quiz Results</h1>
        
        <div class="result-card">
            <div class="score-info">
                <h2>Your Score: {{ session('score') }}/{{ session('total') }}</h2>
                <p class="percentage">Percentage: {{ session('percentage') }}%</p>
                <p class="time">Time taken: {{ gmdate('i:s', session('time')) }}</p>
            </div>

            <div class="result-actions">
                <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
                <a href="{{ route('quizzes.play') }}" class="btn btn-secondary">Try Another Quiz</a>
            </div>
        </div>
    </div>
</x-layout>