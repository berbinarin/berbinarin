@php
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\Route;

    if (! function_exists("isRouteNameStartWith")) {
        function isRouteNameStartWith($routeName, $type = 'text') {
            $isActive = Str::startsWith(Route::currentRouteName(), $routeName);

            if ($type === 'bg') {
                return $isActive ? 'bg-[#3986A3] rounded-xl' : '';
            }

            return $isActive ? 'text-white' : 'text-gray-700 hover:text-primary';
        }
    }
@endphp

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.peer-counselor-schedules', 'bg') }}">
    <a href="{{ route('dashboard.peer-counselor-schedules.index') }}" class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.peer-counselor-schedules') }}">
        <i class="bx bx-calendar mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.peer-counselor-schedules') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Peer Counselor Schedule</span>
    </a>
</li>

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.peer-counselors', 'bg') }}">
    <a href="{{ route('dashboard.peer-counselors.index') }}" class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.peer-counselors') }}">
        <i class="bx bx-user mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.peer-counselors') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Peer Counselor Data</span>
    </a>
</li>

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.psychologists', 'bg') }}">
    <a href="{{ route('dashboard.psychologists.index') }}" class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.psychologists') }}">
        <i class="bx bx-user mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.psychologists') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Psikolog Data</span>
    </a>
</li>

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.berbinar-for-u', 'bg') }}">
    <a href="{{ route('dashboard.berbinar-for-u.index') }}" class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.berbinar-for-u') }}">
        <i class="bx bx-user mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.berbinar-for-u') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Berbinar For U Data</span>
    </a>
</li>

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.vouchers', 'bg') }}">
    <a href="{{ route('dashboard.vouchers.index') }}" class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.vouchers') }}">
        <i class="bx bx-credit-card mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.vouchers') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Kode Voucher</span>
    </a>
</li>

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.psikolog-staff', 'bg') }}">
    <a href="{{ route('dashboard.psikolog-staff.index') }}" class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.psikolog-staff') }}">
        <i class="bx bx-table mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.psikolog-staff') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Psikolog Staff</span>
    </a>
</li>
