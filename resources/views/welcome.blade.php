<!DOCTYPE html>
<html>
<head>
    <title>Quiz Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

    <h1 class="mb-4">Quiz Dashboard</h1>

    <!-- Forma grūtības pakāpes un tēmas izvēlei -->
    <form method="GET" action="{{ route('quizzes.play') }}">
        @csrf
        <div class="mb-3">
            <label for="difficulty" class="form-label">Difficulty:</label>
            <select class="form-select" id="difficulty" name="difficulty">
                <option value="easy">Easy</option>
                <option value="medium">Medium</option>
                <option value="hard">Hard</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="topic" class="form-label">Topic:</label>
            <select class="form-select" id="topic" name="topic">
                <option value="math">Math</option>
                <option value="geography">Geography</option>
                <option value="general">General</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Play</button>
    </form>

</body>
</html>
