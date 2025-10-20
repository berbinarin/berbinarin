<nav class="flex w-56 flex-col items-center bg-white py-8 pl-10 pr-6">
    {{-- LOGO BERBINAR --}}
    <div>
        <img src="{{ asset('assets/images/old/logo-berbinar.png') }}" alt="Logo Berbinar Insightful Indonesia"
            title="Logo Berbinar Insightful Indonesia" class="w-12" />
    </div>

    @php
        $role = Auth()->user()->getRoleNames()->first();
    @endphp

    {{-- LIST MENU --}}
    <ul class="mt-10 overflow-y-auto overflow-x-hidden text-gray-700 dark:text-gray-400">
        <!-- Links -->
        <li class="{{ Request::is('dashboard') ? 'rounded-xl bg-[#3986A3]' : '' }} mt-1 rounded-lg p-2">
            <a href="{{ route('dashboard.index') }}"
                class="{{ Request::is('dashboard') ? 'text-white' : 'text-gray-700 hover:text-primary' }} flex flex-row items-center duration-700">
                <img src="{{ asset('assets/images/dashboard/Category.png') }}" alt="Dashboard Icon"
                    class="mr-2 h-[21px] w-[21px] object-contain transition duration-300 {{ Request::is('dashboard') ? 'brightness-0 invert' : 'brightness-100' }}" />
                <span class="ml-4 text-xs lg:text-base font-normal leading-5">Dashboard</span>
            </a>
        </li>


        @if (View::exists('dashboard.partials.sidebar.' . $role))
            @include('dashboard.partials.sidebar.' . $role)
        @else
            <p>Menu belum tersedia untuk role ini.</p>
        @endif

        <li class="dark-hover:text-blue-300 mt-20 rounded-lg p-2">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit"
                    class="fixed bottom-5 left-5 flex items-center justify-start gap-2 rounded-full bg-none px-4 py-2 text-[#C14B45] hover:opacity-80 focus:outline-none transition">
                    <img src="{{ asset('assets/images/dashboard/Logout.png') }}" alt="Logout Icon"
                        class="h-7 w-7 object-contain p-1 rounded-md" />
                    <span class="text-sm font-normal">Logout</span>
                </button>
            </form>
        </li>

    </ul>
</nav>
