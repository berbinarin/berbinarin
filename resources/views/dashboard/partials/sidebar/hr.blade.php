@php
    if (! function_exists("isRouteNameStartWith")) {
        function isRouteNameStartWith($routeName)
        {
            return Str::startsWith(Route::currentRouteName(), $routeName) ? "text-primary" : "";
        }
    }
@endphp

<li class="my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.positions.index") }}" class="{{ isRouteNameStartWith("dashboard.positions") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bx bx-briefcase-alt-2 mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Positions</span>
    </a>
</li>

<li class="my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.position-descriptions.index") }}" class="{{ isRouteNameStartWith("dashboard.position-descriptions") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bx bxl-upwork mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Position Descriptions</span>
    </a>
</li>

<li class="my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.position-requirements.index") }}" class="{{ isRouteNameStartWith("dashboard.position-requirements") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bx bx-file mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Position Requirements</span>
    </a>
</li>

<!-- sidebar intenship  -->
<li class="my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.internships.index") }}" class="{{ isRouteNameStartWith("dashboard.internships") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bx bx-book mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Internship</span>
    </a>
</li>

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
