<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>{{ $title }} - Berbinar Insightful Indonesia</title>
        <link rel="shortcut icon" href="{{ asset("assets/images/old/logo-berbinar.webp") }}" type="image/x-icon" />
        <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        <!--Replace with your tailwind.css once created-->
        <!--Regular Datatables CSS-->
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
        <!--Responsive Extension Datatables CSS-->
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet" />
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}"> --}}
        @vite("resources/css/app.css")
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
        <!-- <link rel="stylesheet" href="{{ asset("assets/css/dataTables.tailwindcss.min.css") }}"> -->
    </head>

    <body class="font-plusJakartaSans">
        @if ($active === "Dashboard")
            <div class="flex h-screen w-full select-none">
                @include("moduls.dashboard.layouts.sidebar")
                <main class="my-1 flex-1 overflow-y-auto rounded-l-lg bg-gray-100 px-10 pb-2 pt-2 transition duration-500 ease-in-out">
                    @yield("content-dashboard")
                </main>
            </div>
        @endif

        @if ($active === "Login")
            <main class="flex w-full items-center justify-center bg-gray-100 pt-36">
                @yield("content")
            </main>
        @endif

        {{-- @include("sweetalert::alert") --}}
        @include("sweetalert::alert")
        @include("components.alert")

        <script src="{{ asset("assets/js/jquery.js") }}"></script>
        <script src="{{ asset("assets/js/jquery.datables.min.js") }}"></script>
        <script>
            new DataTable('#example');
        </script>
    </body>
    @include('sweetalert::alert')

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script>
        new DataTable('#example');
    </script>


</body>

<!-- resources/views/layouts/app.blade.php atau file lainnya -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- resources/views/layouts/app.blade.php atau file lainnya -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>
