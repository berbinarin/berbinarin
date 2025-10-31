@php
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\Route;

    if (! function_exists("isRouteNameStartWith")) {
        function isRouteNameStartWith($routeName, $return = 'text') {
            $isActive = Str::startsWith(Route::currentRouteName(), $routeName);
            if ($return === 'bg') {
                return $isActive ? 'bg-[#3986A3] rounded-xl' : '';
            }
            return $isActive ? 'text-white' : 'text-gray-700 hover:text-primary';
        }
    }
@endphp

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.berbinar-class', 'bg') }}">
    <a href="{{ route('dashboard.berbinar-class.index') }}" class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.berbinar-class') }}">
        <i class="bx bx-tab mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.berbinar-class') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Daftar Kelas</span>
    </a>
</li>

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.berbinar-plus', 'bg') }}">
    <a href="{{ route('dashboard.berbinar-plus.index') }}" class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.berbinar-plus') }}">
        <i class="bx bx-user mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.berbinar-plus') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Data Pendaftar</span>
    </a>
</li>
