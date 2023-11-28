<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Berbinar Insightful Indonesia</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
</head>

<body class="font-plusJakartaSans">

    <!-- component -->
    <div class="h-screen w-full flex overflow-hidden select-none">

        @include('moduls.dashboard.layouts.sidebar')

        <main
            class="my-1 pt-2 pb-2 px-10 flex-1 bg-gray-100 rounded-l-lg
		transition duration-500 ease-in-out overflow-y-auto">
        </main>

    </div>

</body>

</html>
