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
    $isActivePsikolog = Str::startsWith(Route::currentRouteName(), 'dashboard.psychologists-staff');
    $isActivePeer = Str::startsWith(Route::currentRouteName(), 'dashboard.peer-staff');
@endphp

<li class="my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.psychologists-staff', 'bg') }}">
    <a href="{{ route('dashboard.psychologists-staff.index') }}"
        class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.psychologists-staff') }}">
        <img src="{{ asset('assets/images/dashboard/psikolog-dashboard.png') }}" alt="Psikolog Icon"
            class="mr-2 h-[21px] w-[21px] object-contain transition duration-300 {{ $isActivePsikolog ? 'brightness-0 invert' : 'brightness-100' }} {{ isRouteNameStartWith('dashboard.psychologists-staff') }}" />

        <span class="ml-4 text-xs lg:text-base font-normal leading-5">Psikolog</span>
    </a>
</li>

<li class="my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.peer-staff', 'bg') }}">
    <a href="{{ route('dashboard.peer-staff.index') }}"
        class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.peer-staff') }}">
        <img src="{{ asset('assets/images/dashboard/people-dashboard.png') }}" alt="Peer Counselor Icon"
            class="mr-2 h-[24px] w-[24px] object-contain transition duration-300 {{ $isActivePeer ? 'brightness-0 invert' : 'brightness-100' }} {{ isRouteNameStartWith('dashboard.peer-staff') }}" />

        <span class="ml-4 text-xs lg:text-base font-normal leading-5">Peer Counselor</span>
    </a>
</li>
