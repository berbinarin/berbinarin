<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - @yield('title', 'Artikel')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow-md">
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold">Landing Page</h1>
        </div>
    </header>
    <main class="py-6">
        @yield('content')
    </main>
</body>
</html>