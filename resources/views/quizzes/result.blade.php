<h1>Rezultāti</h1>
<p>Rezultāts: {{ $score }} no {{ $total }} ({{ round($percentage, 2) }}%)</p>

<h2>Atbildes:</h2>
@foreach ($results as $result)
    <div class="question-result">
        <p><strong>Jautājums:</strong> {{ $result['question'] }}</p>
        <p><strong>Tava atbilde:</strong> {{ $result['user_answer'] ?? 'Nav atbildes' }}</p>
        <p><strong>Pareizā atbilde:</strong> {{ $result['correct_answer'] }}</p>
        <p>
            <strong>Statuss:</strong>
            @if($result['is_correct'])
                <span style="color: green;">✅ Pareizi</span>
            @else
                <span style="color: red;">❌ Nepareizi</span>
            @endif
        </p>
        <hr>
    </div>
@endforeach
