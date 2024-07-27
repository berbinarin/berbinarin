<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg text-center">
        <h1 class="text-2xl font-bold mb-4">Halo bro {{ $user->fullname }}, ini adalah landing page untuk test {{ $tool->name }}</h1>
        <div class="space-x-4">
            <button onclick="window.history.back();" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Kembali
            </button>
            <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Memulai Test
            </a>
        </div>
    </div>
</body>
</html>
@include('sweetalert::alert')