{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg text-center">
        <h1 class="text-2xl font-bold mb-4">Halo bro {{ $user->fullname }}, ini adalah landing page untuk test
            {{ $tool->name }}</h1>
        <div class="space-x-4">
            <button onclick="window.history.back();"
                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Kembali
            </button>
            <form action="{{ route('psikotest-paid.papi-kostick.start') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Start Test</button>
            </form>
        </div>
    </div>
</body>

</html>
@include('sweetalert::alert') --}}

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
    </div>
</body>
@include('sweetalert::alert')

</html>
