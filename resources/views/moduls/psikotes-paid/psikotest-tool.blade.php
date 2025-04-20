<!-- resources/views/moduls/psikotes-paid/psikotest-tools/arteri.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psikotest Tools</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>List of Psikotest Tools</h1>

        <ul>
            @foreach ($psikotestTools as $tool)
                <li>
                    {{ $tool->name }}
                    <a href="{{ route('psikotest-tools.token', $tool->id) }}" class="btn btn-primary">Select</a>
                </li>
            @endforeach
        </ul>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
