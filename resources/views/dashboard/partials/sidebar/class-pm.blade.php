@php
    if (! function_exists("isRouteNameStartWith")) {
        function isRouteNameStartWith($routeName)
        {
            return Str::startsWith(Route::currentRouteName(), $routeName) ? "text-prirmary" : "";
        }
    }
@endphp
<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.berbinar-plus.index") }}" class="{{ isRouteNameStartWith("dashboard.berbinar-plus") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bx bx-tab {{ isRouteNameStartWith("dashboard.berbinar-plus") }} mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Daftar <span class="italic">Class</span></span>
    </a>
</li>
<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.berbinar-plus-users") }}" class="{{ isRouteNameStartWith("dashboard.berbinar-plus") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bx bx-user {{ isRouteNameStartWith("dashboard.berbinar-plus") }} mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Data Pendaftar</span>
    </a>
</li>
