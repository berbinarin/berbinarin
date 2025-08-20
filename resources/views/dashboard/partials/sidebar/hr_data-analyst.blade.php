@php
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\Route;

    if (! function_exists("isRouteNameStartWith")) {
        function isRouteNameStartWith($routeName)
        {
            return Str::startsWith(Route::currentRouteName(), $routeName)
                ? "rounded-xl bg-[#3986A3] text-white"
                : "text-gray-700 hover:text-primary";
        }
    }
@endphp

<!-- sidebar keluarga berbinar -->
<li class="my-5 rounded-lg p-2 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.keluarga-berbinar') ? 'bg-[#3986A3] rounded-xl' : '' }}">
    <a href="{{ route('dashboard.keluarga-berbinar.index') }}"
       class="flex flex-row items-center duration-700 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.keluarga-berbinar') ? 'text-white' : 'text-gray-700 hover:text-primary' }}">
        <i class="bx bx-group mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.keluarga-berbinar') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Keluarga Berbinar</span>
    </a>
</li>

<!-- sidebar manage division -->
<li class="my-5 rounded-lg p-2 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.divisions') ? 'bg-[#3986A3] rounded-xl' : '' }}">
    <a href="{{ route('dashboard.divisions.index') }}"
       class="flex flex-row items-center duration-700 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.divisions') ? 'text-white' : 'text-gray-700 hover:text-primary' }}">
        <i class="bi bi-files mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.divisions') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Kelola Divisi</span>
    </a>
</li>
