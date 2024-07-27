<!-- resources/views/moduls/psikotes-paid/papi-kostick/complete.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papi Kostick Test Complete</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Test Complete</h1>
        <p>Thank you for completing the Papi Kostick test. Your responses have been recorded.</p>

        <h2>Your Answers:</h2>
        <ul>
            @foreach ($answers as $answer)
                <li>Question {{ $answer->question_papi_kostick_id }}: {{ $answer->answer == 1 ? 'a' : 'b' }}</li>
            @endforeach
        </ul>

        <a href="{{ route('home') }}" class="btn btn-primary">Return to Home</a>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
