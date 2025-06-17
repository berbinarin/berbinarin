@php
    if (! function_exists("isRouteNameStartWith")) {
        function isRouteNameStartWith($routeName)
        {
            return Str::startsWith(Route::currentRouteName(), $routeName) ? "text-primary" : "";
        }
    }
@endphp

<!-- sidebar keluarga berbinar  -->
<li class="my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.keluarga-berbinar.index") }}" class="{{ isRouteNameStartWith("dashboard.keluarga-berbinar") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bx bx-group mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Keluarga Berbinar</span>
    </a>
</li>

<!-- sidebar manage division  -->
<li class="my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.divisions.index") }}" class="{{ isRouteNameStartWith("dashboard.divisions") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bi bi-files mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Manage Division</span>
    </a>
</li>
