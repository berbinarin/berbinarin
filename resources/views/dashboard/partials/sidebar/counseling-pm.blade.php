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

<li class="my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.peer-counselor-schedules', 'bg') }}">
    <a href="{{ route('dashboard.peer-counselor-schedules.index') }}"
       class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.peer-counselor-schedules') }}">
        <i class="bx bx-calendar mr-2 text-lg {{ isRouteNameStartWith('dashboard.peer-counselor-schedules') }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Peer Counselor Schedule</span>
    </a>
</li>

<li class="my-5 rounded-lg p-2 {{ request()->is('dashboard/data*') ? 'bg-[#3986A3] text-white' : 'text-gray-700' }}">
    <a href="{{ route('dashboard.data.index') }}"
       class="flex items-center rounded-lg {{ request()->is('dashboard/data*') ? 'bg-[#3986A3] text-white p-2' : 'text-gray-700 hover:text-primary transition duration-500 ease-in-out' }}">
        <i class="bx bx-user mr-2 text-lg {{ request()->is('dashboard/data*') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Data</span>
    </a>
</li>

<li class="my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.code-voucher', 'bg') }}">
    <a href="{{ route('dashboard.code-voucher.index') }}"
       class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.code-voucher') }}">
        <i class="bx bx-credit-card mr-2 text-lg {{ isRouteNameStartWith('dashboard.code-voucher') }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Kode Voucher</span>
    </a>
</li>