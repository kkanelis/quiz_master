<x-layout>

<div class="dashboard-container">
    <h1 class="dashboard-title">Izvelne</h1>

    <div class="quiz-selector">
        <h2 class="section-title">Izvēlies tēmu un grūtības pakāpi</h2>
        <form action="/quizzes/play" method="GET" class="quiz-form">
            <div class="form-controls">
                <div class="form-group">
                    <label for="topic" class="form-label">Tēmas:</label>
                    <select name="topic" id="topic" class="form-select">
                        <option value="">Izvēlies tēmu</option>
                        <option value="math">Matemātika</option>
                        <option value="geography">Ģeogrāfija</option>
                        <option value="sport">Sports</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="difficulty" class="form-label">Grūtība:</label>
                    <select name="difficulty" id="difficulty" class="form-select">
                        <option value="">Izvēlies grūtības pakāpi</option>
                        <option value="easy">Viegls</option>
                        <option value="medium">Vidējs</option>
                        <option value="hard">Grūts</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Sākt viktorīnu
                </button>
            </div>
        </form>
    </div>

    <div class="quiz-list">
        <h2 class="section-title">Pieejamās viktorīnas</h2>
        <div class="quiz-grid">
            @foreach($quizzes as $quiz)
                <div class="quiz-card">
                    <h3 class="quiz-card-title">{{ $quiz->title }}</h3>
                    <a href="{{ route('quizzes.play', ['topic' => $topic, 'difficulty' => $difficulty]) }}" class="btn btn-secondary">
                        Spēlēt tagad
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

</x-layout>
