<!-- resources/views/questions/show.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <title>Pertanyaan</title>
</head>

<body>
    <div class="progress mb-4">
        <div class="progress-bar" role="progressbar" style="width: {{ $progress }}%;"
            aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">
            {{ round($progress) }}%
        </div>
    </div>

    <h1>Pertanyaan {{ $question_order }}</h1>

    <p>{{ $question->question_text }}</p>

    <form action="{{ route('question.storeAnswer', ['test_id' => $test_id, 'question_order' => $question_order]) }}"
        method="POST">
        @csrf
        <label for="answer">Jawaban (1-5):</label>
        <input type="number" name="answer" min="1" max="5" required>
        <button type="submit">Jawab</button>
    </form>
</body>

</html>
