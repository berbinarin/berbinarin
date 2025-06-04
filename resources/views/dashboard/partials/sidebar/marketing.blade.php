@php
    if (! function_exists("isRouteNameStartWith")) {
        function isRouteNameStartWith($routeName)
        {
            return Str::startsWith(Route::currentRouteName(), $routeName) ? "text-primary" : "";
        }
    }
@endphp

<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.arteri.authors.index") }}" class="flex flex-row items-center duration-700 text-gray-700 hover:text-primary {{ isRouteNameStartWith('dashboard.arteri.authors') }}">
        <i class="bx bxs-user-pin mr-2 text-lg text-gray-700 {{ isRouteNameStartWith('dashboard.arteri.authors') }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Penulis</span>
    </a>
</li>
<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.arteri.categories.index") }}" class="flex flex-row items-center duration-700 text-gray-700 hover:text-primary {{ isRouteNameStartWith('dashboard.arteri.categories') }}">
        <i class="bx bxs-category-alt mr-2 text-lg text-gray-700 {{ isRouteNameStartWith('dashboard.arteri.categories') }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Kategori</span>
    </a>
</li>
<li class="dark-hover:text-blue-300 my-5 rounded-lg p-2">
    <a href="{{ route("dashboard.arteri.articles.index") }}" class="flex flex-row items-center duration-700 text-gray-700 hover:text-primary {{ isRouteNameStartWith('dashboard.arteri.articles') }}">
        <i class="bx bx-cloud-upload mr-2 text-lg text-gray-700 {{ isRouteNameStartWith('dashboard.arteri.articles') }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Artikel</span>
    </a>
</li>
