<!-- resources/views/moduls/psikotes-paid/papi-kostick/question.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papi Kostick Question</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Papi Kostick Test - Question {{ $question_order }} of {{ $totalQuestions }}</h1>

        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{ $progress }}%;"
                aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <p>{{ $question->question_text }}</p>

        <form
            action="{{ route('psikotest-paid.papi-kostick.answer', ['test_id' => $test_id, 'question_order' => $question_order]) }}"
            method="POST">
            @csrf
            <div class="form-group">
                <label>
                    <input type="radio" name="answer" value="a" required> {{ $question->option_a }}
                </label>
            </div>
            <div class="form-group">
                <label>
                    <input type="radio" name="answer" value="b" required> {{ $question->option_b }}
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
