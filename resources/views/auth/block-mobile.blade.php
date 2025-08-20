<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Akses Dibatasi</title>
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>

        {{-- Link ke CSS kamu --}}
        <link rel="stylesheet" href="{{ asset("css/app.css") }}" />
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet" />

        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }
        </style>
    </head>
    <body class="bg-white">
        <div class="flex min-h-screen items-center justify-center">
            <div class="flex flex-col items-center justify-center text-center">
                <h1 class="mb-2 bg-gradient-to-r from-[#AD7D29] to-[#473311] bg-clip-text text-6xl font-bold text-transparent">Oops!</h1>
                <img src="{{ asset("assets/images/dashboard/oops.png") }}" alt="Akses Dibatasi" class="h-[272px] w-[245px]" />
                <h1 class="text-lg font-semibold text-[#3F3F3F]">
                    Terjadi kesalahan,
                    <br />
                    Dashboard hanya bisa diakses
                    <br />
                    melalui perangkat desktop.
                </h1>
            </div>
        </div>
    </body>
</html>
