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

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.psikolog-staff', 'bg') }}">
    <a href="{{ route('dashboard.psikolog-staff.index') }}" class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.psikolog-staff') }}">
        <i class="bx bx-table mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.psikolog-staff') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Psikolog Staff</span>
    </a>
</li>

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.code-voucher', 'bg') }}">
    <a href="{{ route('dashboard.code-voucher.index') }}" class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.code-voucher') }}">
        <i class="bx bx-credit-card mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.code-voucher') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Kode Voucher</span>
    </a>
</li>
