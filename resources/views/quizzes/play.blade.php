<!DOCTYPE html>
<html>
<head>
    <title>Play Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

    <h1 class="mb-4">Quiz Time!</h1>
    <p><strong>Difficulty:</strong> {{ $difficulty }}</p>
    <p><strong>Topic:</strong> {{ $topic }}</p>

    @if($questions->isEmpty())
        <div class="alert alert-warning">Nav atrasti jautājumi šai tēmai/grūtības pakāpei.</div>
    @else
        <form method="POST" action="#">
            @csrf
            @foreach($questions as $index => $q)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5>{{ $index+1 }}. {{ $q->question }}</h5>

                        @foreach($q->options as $option)
                            <div class="form-check">
                                <input class="form-check-input"
                                       type="radio"
                                       name="answers[{{ $q->id }}]"
                                       id="q{{ $q->id }}_{{ $loop->index }}"
                                       value="{{ $option }}">
                                <label class="form-check-label" for="q{{ $q->id }}_{{ $loop->index }}">
                                    {{ $option }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <button type="submit" class="btn btn-success">Submit Answers</button>
        </form>
    @endif

    <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">Back to Dashboard</a>

</body>
</html>
