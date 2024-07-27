<!-- resources/views/moduls/psikotes-paid/papi-kostick/instruksi.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papi Kostick Instructions</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Instructions for Papi Kostick Test</h1>
        <p>Welcome to the Papi Kostick test. Please read the following instructions carefully before starting the test.
        </p>

        <!-- Add the specific instructions for the Papi Kostick test here -->
        <ul>
            <li>Instruction 1: Description of the first instruction.</li>
            <li>Instruction 2: Description of the second instruction.</li>
            <li>Instruction 3: Description of the third instruction.</li>
            <!-- Add more instructions as needed -->
        </ul>

        <form action="{{ route('psikotest-paid.papi-kostick.store') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Start Test</button>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
