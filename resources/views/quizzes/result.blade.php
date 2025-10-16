<x-layout>
    <div class="result-container">
        <div class="result-card">
            <h1 class="result-title">Rezultāti</h1>
            <div class="score-info">
                <div class="percentage">
                    Rezultāts: <strong>{{ $score }}</strong> no <strong>{{ $total }}</strong> ({{ round($percentage, 2) }}%)
                </div>
                <div class="time">
                    Laiks: 
                    @if(isset($timeSpent))
                        <strong>{{ gmdate('i:s', $timeSpent) }}</strong> (minūtes:sekundes)
                    @else
                        -
                    @endif
                </div>
            </div>
        </div>

        <h2 class="result-title" style="margin-top:2rem;">Atbildes</h2>
        @foreach ($results as $result)
            <div class="question-result">
                <p class="question-text"><strong>Jautājums:</strong> {{ $result['question'] }}</p>
                <p><strong>Tava atbilde:</strong> {{ $result['user_answer'] ?? 'Nav atbildes' }}</p>
                <p><strong>Pareizā atbilde:</strong> {{ $result['correct_answer'] }}</p>
                <p>
                    <strong>Statuss:</strong>
                    @if($result['is_correct'])
                        <span style="color: var(--success-color); font-weight: bold;">✅ Pareizi</span>
                    @else
                        <span style="color: var(--error-color); font-weight: bold;">❌ Nepareizi</span>
                    @endif
                </p>
                <hr>
            </div>
        @endforeach

        <div class="result-actions" style="margin-top:2rem;">
            <a href="/" class="btn btn-secondary">Atpakaļ uz sākumu</a>
        </div>
    </div>
</x-layout>