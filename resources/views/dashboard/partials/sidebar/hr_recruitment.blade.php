@php
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\Route;

    if (! function_exists("isRouteNameStartWith")) {
        function isRouteNameStartWith($routeName)
        {
            return Str::startsWith(Route::currentRouteName(), $routeName)
                ? "bg-[#3986A3] rounded-xl text-white"
                : "text-gray-700 hover:text-primary";
        }
    }
@endphp

<li class="my-5 rounded-lg p-2 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.positions') ? 'bg-[#3986A3] rounded-xl' : '' }}">
    <a href="{{ route('dashboard.positions.index') }}"
       class="flex flex-row items-center duration-700 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.positions') ? 'text-white' : 'text-gray-700 hover:text-primary' }}">
        <i class="bx bx-briefcase-alt-2 mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.positions') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Posisi</span>
    </a>
</li>

<li class="my-5 rounded-lg p-2 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.position-descriptions') ? 'bg-[#3986A3] rounded-xl' : '' }}">
    <a href="{{ route('dashboard.position-descriptions.index') }}"
       class="flex flex-row items-center duration-700 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.position-descriptions') ? 'text-white' : 'text-gray-700 hover:text-primary' }}">
        <i class="bx bxl-upwork mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.position-descriptions') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Deskripsi Posisi</span>
    </a>
</li>

<li class="my-5 rounded-lg p-2 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.position-requirements') ? 'bg-[#3986A3] rounded-xl' : '' }}">
    <a href="{{ route('dashboard.position-requirements.index') }}"
       class="flex flex-row items-center duration-700 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.position-requirements') ? 'text-white' : 'text-gray-700 hover:text-primary' }}">
        <i class="bx bx-file mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.position-requirements') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Persyaratan Posisi</span>
    </a>
</li>

<li class="my-5 rounded-lg p-2 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.internships') ? 'bg-[#3986A3] rounded-xl' : '' }}">
    <a href="{{ route('dashboard.internships.index') }}"
       class="flex flex-row items-center duration-700 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.internships') ? 'text-white' : 'text-gray-700 hover:text-primary' }}">
        <i class="bx bx-book mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.internships') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Magang</span>
    </a>
</li>
