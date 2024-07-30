<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>{{ $tool->name }} Test</h1>
        <p>Welcome, {{ $user->name }}!</p>
        <form action="{{ route('psikotest-paid.papi-kostick.start') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Start Test</button>
        </form>
        <a href="{{ route('psikotest-paid.showLanding') }}" class="btn btn-secondary mt-3">Back to Home</a>
    </div>
</body>
@include('sweetalert::alert')

</html>
