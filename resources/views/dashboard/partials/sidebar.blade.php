<nav class="flex w-56 flex-col items-center bg-white py-8 pl-10 pr-6">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-thin-rounded/css/uicons-thin-rounded.css" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-straight/css/uicons-bold-straight.css" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    {{-- LOGO BERBINAR --}}
    <div>
        <img src="{{ asset("assets/images/old/logo-berbinar.png") }}" alt="Logo Berbinar Insightful Indonesia" title="Logo Berbinar Insightful Indonesia" class="w-14" />
    </div>

    @php
        $role = Auth()
            ->user()
            ->getRoleNames()
            ->first();
    @endphp

    {{-- LIST MENU --}}
    <ul class="mt-10 overflow-y-auto overflow-x-hidden text-gray-700 dark:text-gray-400">
        <!-- Links -->
        <li class="{{ Request::is("dashboard") ? "rounded-xl bg-[#3986A3]" : "" }} mt-1 rounded-lg p-2">
            <a href="{{ route("dashboard.index") }}" class="{{ Request::is("dashboard") ? "text-white" : "text-gray-700 hover:text-primary" }} flex flex-row items-center duration-700">
                <i class="i fi-tr-chart-line-up {{ Request::is("dashboard") ? "text-white" : "text-gray-700" }} mr-2 text-xl"></i>
                <span class="ml-4 text-lg font-bold leading-5">Dashboard</span>
            </a>
        </li>

        @if (View::exists("dashboard.partials.sidebar." . $role))
            @include("dashboard.partials.sidebar." . $role)
        @else
            <p>Menu belum tersedia untuk role ini.</p>
        @endif

        <li class="dark-hover:text-blue-300 mt-20 rounded-lg p-2">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="fixed bottom-5 left-14 items-center gap-2 rounded-full bg-blue-500 px-6 py-2 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <i class="bx bx-log-out text-lg"></i>
                    <span class="text-center text-base">Logout</span>
                </button>
            </form>
        </li>
    </ul>
</nav>
