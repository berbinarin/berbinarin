<!-- resources/views/questions/show.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pertanyaan</title>
</head>

<body>
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
