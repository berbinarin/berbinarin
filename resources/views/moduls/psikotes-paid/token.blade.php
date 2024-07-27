<!-- resources/views/moduls/psikotes-paid/psikotest-tools/token.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Token</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Enter Token for {{ $tool->name }}</h1>

        @if ($errors->has('token'))
            <div class="alert alert-danger">
                {{ $errors->first('token') }}
            </div>
        @endif

        <form action="{{ route('psikotest-tools.validate', $tool->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="token">Token</label>
                <input type="text" name="token" id="token" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
