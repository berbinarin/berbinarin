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

<li class="my-5 rounded-lg p-2 {{ isRouteNameStartWith('dashboard.psychologists-staff', 'bg') }}">
    <a href="{{ route('dashboard.psychologists-staff.index') }}"
       class="flex flex-row items-center duration-700 {{ isRouteNameStartWith('dashboard.psychologists-staff') }}">
        <i class="bx bx-calendar mr-2 text-lg {{ isRouteNameStartWith('dashboard.psychologists-staff') }}"></i>
        <span class="ml-4 text-base font-bold leading-5">Data Psikolog Staff</span>
    </a>
</li>



