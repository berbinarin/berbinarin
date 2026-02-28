@php
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\Route;

    if (!function_exists('isRouteNameStartWith')) {
        function isRouteNameStartWith($routeName, $type = 'text')
        {
            $isActive = Str::startsWith(Route::currentRouteName(), $routeName);

            if ($type === 'bg') {
                return $isActive ? 'bg-[#3986A3] rounded-xl' : '';
            }

            return $isActive ? 'text-white' : 'text-gray-700 hover:text-primary';
        }
    }
@endphp

@php
    $isSmc = Str::startsWith(Route::currentRouteName(), 'dashboard.smc');
@endphp

<li class="my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.smc', 'bg') }}">
    <a href="{{ route('dashboard.smc.index') }}"
        class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.smc') }}">
        <img src="{{ asset('assets/images/dashboard/psikolog-dashboard.webp') }}" alt="Psikolog Icon"
            class="mr-2 h-[21px] w-[21px] object-contain transition duration-300 {{ $isSmc ? 'brightness-0 invert' : 'brightness-100' }} {{ isRouteNameStartWith('dashboard.smc') }}" />

        <span class="ml-4 text-xs lg:text-base font-normal leading-5">Smc</span>
    </a>
</li>

