@php
    if (! function_exists("isRouteNameStartWith")) {
        function isRouteNameStartWith($routeName)
        {
            return Str::startsWith(Route::currentRouteName(), $routeName) ? "text-primary" : "";
        }
    }
@endphp

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.peer-counselor-schedules.index") }}" class="{{ isRouteNameStartWith("dashboard.peer-counselor-schedules") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bx bx-calendar {{ isRouteNameStartWith("dashboard.peer-counselor-schedules") }} mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Peer Counselor Schedule</span>
    </a>
</li>

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.peer-counselors.index") }}" class="{{ isRouteNameStartWith("dashboard.peer-counselors") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bx bx-user {{ isRouteNameStartWith("dashboard.peer-counselors") }} mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Peer Counselor Data</span>
    </a>
</li>

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.psychologists.index") }}" class="{{ isRouteNameStartWith("dashboard.psychologists") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bx bx-user {{ isRouteNameStartWith("dashboard.psychologists") }} mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Psikolog Data</span>
    </a>
</li>

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.berbinar-for-u.index") }}" class="{{ isRouteNameStartWith("dashboard.berbinar-for-u") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bx bx-user {{ isRouteNameStartWith("dashboard.berbinar-for-u") }} mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Berbinar For U Data</span>
    </a>
</li>

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.vouchers.index") }}" class="{{ isRouteNameStartWith("dashboard.vouchers") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bx bx-credit-card {{ isRouteNameStartWith("dashboard.vouchers") }} mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Kode Voucher</span>
    </a>
</li>
