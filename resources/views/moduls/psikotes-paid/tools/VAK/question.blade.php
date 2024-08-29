<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Psikotes VAK</h1>

    <p>Pertanyaan {{ $question_order }}</p>
    <p>Progress: {{ $progress }}%</p>

    <form action="{{ route('psikotest-paid.VAK.submit', ['id' => $id, 'question_order' => $question_order]) }}"
        method="POST">
        @csrf

        <div>
            <p>{{ $question->question_text }}</p>
            <label>
                <input type="radio" name="answer" value="1" required>
                TIDAK SESUAI
            </label>
            <label>
                <input type="radio" name="answer" value="2">
                CUKUP SESUAI
            </label>
            <label>
                <input type="radio" name="answer" value="3">
                SANGAT SESUAI
            </label>
        </div>

        <button type="submit">Lanjut</button>
    </form>

</body>

</html>
