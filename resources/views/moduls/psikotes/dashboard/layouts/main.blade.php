<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Berbinar Insightful Indonesia</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-berbinar.png') }}" type="image/x-icon">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <!--Replace with your tailwind.css once created-->
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    @vite('resources/css/app.css')
    <!-- <style>
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }
    </style> -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/dataTables.tailwindcss.min.css') }}"> -->
</head>

<body class="font-plusJakartaSans">

    @if ($active === 'Dashboard Psikotest')
        <div class="h-screen w-full flex select-none">
            @include('moduls.psikotes.dashboard.layouts.sidebar')
            <main class="my-1 pt-2 pb-2 px-10 flex-1 bg-gray-200 transition duration-500 ease-in-out overflow-y-auto">
                @yield('content-dashboard')
            </main>
        </div>
    @endif

    @if ($active === 'Login')
        <main class="bg-gray-100 w-full flex items-center justify-center pt-36">
            @yield('content')
        </main>
    @endif

    @include('sweetalert::alert')

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.datables.min.js') }}"></script>
    <script>
        new DataTable('#example');
    </script>


</body>

<!-- resources/views/layouts/app.blade.php atau file lainnya -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
