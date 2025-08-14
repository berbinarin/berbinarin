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

<li class="my-5 rounded-lg p-2 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.arteri.authors') ? 'bg-[#3986A3] rounded-xl' : '' }}">
    <a href="{{ route('dashboard.arteri.authors.index') }}"
       class="flex flex-row items-center duration-700 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.arteri.authors') ? 'text-white' : 'text-gray-700 hover:text-primary' }}">
        <i class="bx bxs-user-pin mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.arteri.authors') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Penulis</span>
    </a>
</li>

<li class="my-5 rounded-lg p-2 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.arteri.categories') ? 'bg-[#3986A3] rounded-xl' : '' }}">
    <a href="{{ route('dashboard.arteri.categories.index') }}"
       class="flex flex-row items-center duration-700 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.arteri.categories') ? 'text-white' : 'text-gray-700 hover:text-primary' }}">
        <i class="bx bxs-category-alt mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.arteri.categories') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Kategori</span>
    </a>
</li>

<li class="my-5 rounded-lg p-2 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.arteri.articles') ? 'bg-[#3986A3] rounded-xl' : '' }}">
    <a href="{{ route('dashboard.arteri.articles.index') }}"
       class="flex flex-row items-center duration-700 {{ Str::startsWith(Route::currentRouteName(), 'dashboard.arteri.articles') ? 'text-white' : 'text-gray-700 hover:text-primary' }}">
        <i class="bx bx-cloud-upload mr-2 text-lg {{ Str::startsWith(Route::currentRouteName(), 'dashboard.arteri.articles') ? 'text-white' : 'text-gray-700' }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Artikel</span>
    </a>
</li>
