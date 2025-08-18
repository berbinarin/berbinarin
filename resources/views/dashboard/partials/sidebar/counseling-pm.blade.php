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

<li class="{{ request()->is('dashboard/data*') ? 'bg-[#3986A3] text-white my-5 rounded-lg' : 'text-gray-700 p-2' }}">
    <a href="{{ route('dashboard.data.index') }}" class="flex items-center rounded-lg {{ request()->is('dashboard/data*') ? 'bg-[#3986A3] text-white my-5 p-2' : 'text-gray-700 hover:text-primary transition duration-500 ease-in-out' }}">
        <i class="bx bx-user mr-2 text-lg {{ request()->is('dashboard/data*') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Data</span>
    </a>
</li>

{{-- <li class="dark-hover:text-blue-300 my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.peer-counselors', 'bg') }}">
    <a href="{{ route('dashboard.peer-counselors.index') }}" class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.peer-counselors') }}">
        <i class="bx bx-user mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.peer-counselors') ? 'text-white' : 'text-gray-700' }}"></i>
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
</li> --}}

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.code-voucher.index") }}" class="{{ isRouteNameStartWith("dashboard.code-voucher") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bx bx-credit-card {{ isRouteNameStartWith("dashboard.code-voucher") }} mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Kode Voucher</span>
    </a>
</li>
{{-- 
<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.psikolog-staff.index") }}" class="{{ isRouteNameStartWith("dashboard.psikolog-staff") }} flex flex-row items-center text-gray-700 duration-700 hover:text-primary">
        <i class="bx bx-table {{ isRouteNameStartWith("dashboard.psikolog-staff") }} mr-2 text-lg text-gray-700"></i>
        <span class="ml-4 text-base font-bold leading-5">Psikolog Staff</span>
    </a>
</li> --}}
