@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Karir',
    'page' => 'card-flip',
])

@section('content')

    {{--header & selection menu--}}
    <section class="mt-32 w-full mx-auto min-w-96 bg-[#F7F9FA] lg:mt-44">
        {{--filter tahun--}}
        <div class="w-full mx-auto">
            {{--heading--}}
            <h1 class="font-semibold text-4xl text-center text-slate-900 py-2 mb-8 md:text-5xl lg:mb-16">Keluarga <span
                    class="text-white bg-primary p-2">Berbinar</span></h1>
            {{--menu tahun--}}
            <div class=" w-full mx-auto flex-col justify-center items-center mb-4 relative z-10     px-4 sm:px-14">
                <div class="w-full flex justify-between mb-4 px-2 lg:space-x-4">
                    <button
                        class="block font-semibold text-lg md:text-xl text-center tracking-wide px-4 py-1 w-36 md:w-44 md:px-5 xl:py-2 border-3 border-transparent text-white bg-primary rounded-md hover:text-primary hover:bg-white hover:border-3 hover:border-primary hover:shadow-lg lg:w-full">
                        2022
                    </button>
                    {{--button in lg screen--}}
                    <button
                        class="hidden lg:block font-semibold text-lg md:text-xl text-center tracking-wide px-4 py-1 w-36 md:w-44 md:px-5 xl:py-2 border-3 border-transparent text-white bg-primary rounded-md hover:text-primary hover:bg-white hover:border-3 hover:border-primary hover:shadow-lg lg:w-full">
                        2023
                    </button>
                    <button
                        class="hidden lg:block font-semibold text-lg md:text-xl text-center tracking-wide px-4 py-1 w-36 md:w-44 md:px-5 xl:py-2 border-3 border-transparent text-white bg-primary rounded-md hover:text-primary hover:bg-white hover:border-3 hover:border-primary hover:shadow-lg lg:w-full">
                        2024
                    </button>
                    {{--button in lg screen--}}
                    <button
                        class="block font-semibold text-lg md:text-xl text-center tracking-wide px-4 py-1 w-36 md:w-44 md:px-5 xl:py-2 border-3 border-transparent text-white bg-primary rounded-md hover:text-primary hover:bg-white hover:border-3 hover:border-primary hover:shadow-lg lg:w-full">
                        2025
                    </button>
                </div>
                <div class="flex justify-around items-center mb-4 sm:px-14 lg:hidden">
                    <button
                        class="block font-semibold text-lg md:text-xl text-center tracking-wide px-4 py-1 w-36 md:w-44 md:px-5 border-3 border-transparent text-white bg-primary rounded-md hover:text-primary hover:bg-white hover:border-3 hover:border-primary hover:shadow-lg">
                        2023
                    </button>
                    <button
                        class="block font-semibold text-lg md:text-xl text-center tracking-wide px-4 py-1 w-36 md:w-44 md:px-5 border-3 border-transparent text-white bg-primary rounded-md hover:text-primary hover:bg-white hover:border-3 hover:border-primary hover:shadow-lg">
                        2024
                    </button>
                </div>
            </div>
            {{--menu tahun--}}
        </div>
        {{--divider path--}}
        <div class="mx-auto h-20 relative md:mb-5 xl:mb-7">
            <img src="{{asset("assets/images/landing/keluarga-berbinar/path.png")}}" alt="divider"
                 class="object-cover h-auto min-w-96 w-screen -translate-y-16 sm:-translate-y-24 md:-translate-y-28 lg:-translate-y-20 xl:-translate-y-32 2xl:scale-y-75 2xl:-translate-y-52 3xl:scale-y-75 3xl:-translate-y-54">
        </div>

        {{--[MOBILE] drop down menu-divisi--}}
        <div class="w-full px-4 sm:px-14 mb-4 lg:hidden">
            <button
                onclick="handleToggleDropdownDivision()"
                class="mb-4 font-normal text-base text-white bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] rounded-md text-center h-14 px-8 w-full mx-auto hover:shadow-lg hover:bg-opacity-80">
                <span id="selected-division">select division</span>
            </button>

            {{-- Dropdown menu for selecting a division --}}
            <div id="division-dropdown"
                 class="hidden w-full mx-auto flex-col items-center justify-start gap-4 py-2 px-4 bg-gradient-to-b from-transparent to-[#F7B23B33]">
                @foreach($divisi as $key => $division)
                    <div
                        onclick="handleSelectDivision('{{ $division['name'] }}', {{ $key }})"
                        id="division-{{ $key }}"
                        class="division-item w-full mx-auto px-4 py-4 font-normal bg-transparent text-base text-[#F7B23B] text-center h-14 mb-4 flex items-center justify-center rounded-md border-2 border-[#916823] cursor-pointer">
                        <span>{{ $division['name'] }}</span>
                    </div>
                @endforeach
            </div>

        </div>

        {{--[MOBILE] drop down menu-subdivisi--}}
        <div id="subdivision-menu" class="hidden w-full px-4 mb-4 mx-auto flex-col lg:hidden">
            <button
                id="subdivision-button"
                onclick="handleToggleDropdownSubdivision()"
                class="mb-4 font-normal text-base text-[#15323D] bg-[#3986A340] rounded-md text-center h-12 px-8 w-3/4 sm:w-1/2 mx-auto hover:shadow-lg hover:bg-opacity-80 block border-2 border-[#15323D] shadow-md">
                <span id="selected-subdivision">Select Subdivision</span>
            </button>

            {{--Dropdown menu for selecting a division--}}
            <div id="subdivision-dropdown"
                 class="hidden w-full mx-auto flex-col items-center justify-start gap-4 py-2 px-4 bg-gradient-to-b from-white from-20% to-[#3986A333]">
                {{--dynamic--}}
            </div>

        </div>

        <div
            class="lg:mx-auto lg:flex lg:justify-start lg:items-start lg:space-x-12 xl:pe-14 lg:bg-gradient-to-r lg:from-[#DDEAF0] lg:to-[#F7F9FA] lg:pt-16">

            {{--divisi menu divisi desktop--}}
            <div class="hidden lg:block w-3/5 max-w-96 pt-4 ps-2">
                <div
                    class="w-full h-14 mx-auto font-semibold py-2 ps-4 text-sm text-slate-900 text-start bg-white rounded-full mb-4 flex justify-start items-center hover:text-white hover:bg-gradient-to-r hover:from-[#F7B23B] hover:to-[#916823]">
                    Class Product Management
                </div>
                <div
                    class="w-full h-14 mx-auto font-semibold py-2 ps-4 text-sm text-slate-900 text-start bg-white rounded-full mb-4 flex justify-start items-center hover:text-white hover:bg-gradient-to-r hover:from-[#F7B23B] hover:to-[#916823]">
                    Psychological Testing Product Management
                </div>
                <div
                    class="w-full h-14 mx-auto font-semibold py-2 ps-4 text-sm text-slate-900 text-start bg-white rounded-full mb-4 flex justify-start items-center hover:text-white hover:bg-gradient-to-r hover:from-[#F7B23B] hover:to-[#916823]">
                    Counseling Product Managment
                </div>
                <div
                    class="w-full h-14 mx-auto font-semibold py-2 ps-4 text-sm text-slate-900 text-start bg-white rounded-full mb-4 flex justify-start items-center hover:text-white hover:bg-gradient-to-r hover:from-[#F7B23B] hover:to-[#916823]">
                    Web & Mobile App Developer
                </div>
                <div
                    class="w-full h-14 mx-auto font-semibold py-2 ps-4 text-sm text-slate-900 text-start bg-white rounded-full mb-4 flex justify-start items-center hover:text-white hover:bg-gradient-to-r hover:from-[#F7B23B] hover:to-[#916823]">
                    Secretary & Finance
                </div>
                <div
                    class="w-full h-14 mx-auto font-semibold py-2 ps-4 text-sm text-slate-900 text-start bg-white rounded-full mb-4 flex justify-start items-center hover:text-white hover:bg-gradient-to-r hover:from-[#F7B23B] hover:to-[#916823]">
                    Marketing Strategy & Sales
                </div>
                <div
                    class="w-full h-14 mx-auto font-semibold py-2 ps-4 text-sm text-slate-900 text-start bg-white rounded-full mb-4 flex justify-start items-center hover:text-white hover:bg-gradient-to-r hover:from-[#F7B23B] hover:to-[#916823]">
                    Instagram Creator
                </div>
                <div
                    class="w-full h-14 mx-auto font-semibold py-2 ps-4 text-sm text-slate-900 text-start bg-white rounded-full mb-4 flex justify-start items-center hover:text-white hover:bg-gradient-to-r hover:from-[#F7B23B] hover:to-[#916823]">
                    Tiktok Creator
                </div>
                <div
                    class="w-full h-14 mx-auto font-semibold py-2 ps-4 text-sm text-slate-900 text-start bg-white rounded-full mb-4 flex justify-start items-center hover:text-white hover:bg-gradient-to-r hover:from-[#F7B23B] hover:to-[#916823]">
                    Graphic Designer
                </div>
                <div
                    class="w-full h-14 mx-auto font-semibold py-2 ps-4 text-sm text-slate-900 text-start bg-white rounded-full mb-4 flex justify-start items-center hover:text-white hover:bg-gradient-to-r hover:from-[#F7B23B] hover:to-[#916823]">
                    Human Resource
                </div>
            </div>
            {{--list staff--}}
            <div id="list-staff" class="w-full px-4 sm:px-14 lg:py-4 lg:px-0">
                {{--menu subdivisi dekstop--}}
                <div class="hidden lg:block lg:w-full lg:mb-4">
                    <div class="w-full mx-auto flex justify-start space-x-4 items-center mb-8">
                        <button
                            class="font-semibold tracking-wide text-nowrap text-white bg-primary text-center px-4 py-1 border-2 border-transparent hover:text-primary hover:bg-white hover:border-primary">
                            UI/UX Designer
                        </button>
                        <button
                            class="font-semibold tracking-wide text-nowrap text-white bg-primary text-center px-4 py-1 border-2 border-transparent hover:text-primary hover:bg-white hover:border-primary">
                            Front-End
                        </button>
                        <button
                            class="font-semibold tracking-wide text-nowrap text-white bg-primary text-center px-4 py-1 border-2 border-transparent hover:text-primary hover:bg-white hover:border-primary">
                            Back-End
                        </button>
                        <button
                            class="font-semibold tracking-wide text-nowrap text-white bg-primary text-center px-4 py-1 border-2 border-transparent hover:text-primary hover:bg-white hover:border-primary">
                            Full-Stack
                        </button>
                    </div>
                    <div
                        class="w-full mx-auto flex justify-center items-center py-2 bg-primary font-semibold tracking-wide text-base text-white">
                        UI/UX Designer
                    </div>
                </div>

                {{--grid--}}
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 lg:gap-4 ">


                    @for($i = 1; $i <= 5; $i++)
                        {{--LIST FOR SM - MD START--}}
                        {{--CARD CONTAINER--}}
                        <div class="w-full bg-transparent perspective flex items-center odd:justify-start even:justify-end mb-4 group lg:hidden">
                            {{--CARD--}}
                            <div id="card-{{$i}}" class="preserve-3d duration-1000 bg-transparent w-[350px] md:w-[400px]">
                                {{--FRONT CARD--}}
                                <div onclick="handleMobileFlip({{$i}})" id="front-{{$i}}" class="relative h-40 md:h-48 rounded-lg bg-gradient-to-b from-[#3986A3] to-[#15323D] pt-2 pb-3 px-4 cursor-pointer hover:shadow-lg">
                                    {{--status--}}
                                    <span class="absolute top-2 font-semibold text-xs text-white bg-[#04CA00] rounded-full py-1 px-3 group-odd:right-2 group-even:left-2">Aktif</span>

                                    {{--content--}}
                                    <div class="w-full h-full flex items-center justify-between md:justify-start md:space-x-4">
                                        {{--image--}}
                                        <div class="relative h-full w-32 md:w-36 overflow-hidden group-even:order-last md:flex md:items-end">
                                            <img
                                                src="{{asset('assets/images/landing/keluarga-berbinar/image-example.png')}}"
                                                alt="image-example" class="object-cover">
                                            <span
                                                class="absolute w-auto py-1 px-2 z-10 bottom-0 left-1/2 -translate-x-1/2 font-semibold text-nowrap tracking-wide text-xs text-white text-center bg-[#654064] rounded-lg shadow-lg">Manajer Divisi</span>
                                        </div>
                                        {{--info--}}
                                        <div class="h-full py-1 content-end space-y-2">
                                            <h3 class="font-semibold text-xl text-start md:text-2xl text-white">Barita
                                                Davitya S.</h3>
                                            <p class="block font-thin text-sm text-white md:text-base text-start">As
                                                UI/UX
                                                Designer</p>
                                            <p class="block font-thin text-sm text-white md:text-base text-start mb-2">
                                                Agu
                                                2024 -
                                                Sekarang</p>
                                        </div>
                                    </div>
                                </div>

                                {{--BACK CARD--}}
                                <div onclick="handleMobileFlip({{$i}})" id="back-{{$i}}" class="relative hidden min-h-40 md:min-h-48 rounded-lg bg-gradient-to-b from-[#3986A3] to-[#15323D] pt-2 pb-3 px-4 cursor-pointer hover:shadow-lg my-rotate-y-180">
                                    {{--lini masa--}}
                                    <span
                                        class="absolute top-2 font-semibold text-xs text-white bg-[#FF8364] rounded-full py-1 px-3 right-2">Lini Masa</span>
                                    {{--linkedin--}}
                                    <a href="#" class="absolute bottom-2 right-3">
                                        <img
                                            src="{{ asset('assets/images/landing/keluarga-berbinar/linkedin-fill.png') }}"
                                            alt="linkedin" class="size-6">
                                    </a>
                                    {{--content--}}
                                    <div class="">
                                        <h3 class="font-semibold text-xl text-white w-3/4 mb-4">Barita Davitya Suryawati
                                            Makmur Jaya</h3>
                                        <div class="w-full grid grid-cols-1 justify-items-start">
                                            @for($j = 1; $j <= 5; $j++)
                                                <div class="mb-2 last:mb-0">
                                                    <h4 class="font-semibold text-lg text-white text-start">As UI/UX
                                                        Designer</h4>
                                                    <p class="font-thin text-base text-white">Jan 2024 - Feb 2024</p>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{--LIST FOR SM - MD END--}}
                    @endfor

                    @for($h = 1; $h <= 5; $h++)
                        {{--LIST FOR DESKTOP START--}}
                        {{--CARD CONTAINER--}}
                        <div class="hidden w-full bg-transparent lg:flex items-center p-2 perspective">
                            {{--CARD--}}
                            <div id="card-{{$h}}" class="preserve-3d duration-1000 bg-transparent w-full">

                                {{--FRONT CARD--}}
                                <div id="front-{{$h}}" class="relative h-60 w-full rounded-lg bg-gradient-to-b from-[#3986A3] to-[#15323D] hover:shadow-lg p-4">
                                    {{--texture--}}
                                    <img src="{{asset('assets/images/landing/keluarga-berbinar/texture-card.png')}}"
                                         alt="texture"
                                         class="block absolute z-10 scale-y-75 -bottom-8 left-0 ">
                                    {{--status--}}
                                    <span class="absolute top-2 right-2 font-semibold text-sm text-white bg-[#04CA00] rounded-full py-1 px-4">Aktif</span>
                                    {{--lini masa button--}}
                                    <button
                                        onclick="handleDesktopFlip({{$h}})"
                                        class="absolute bottom-2 right-2 block z-30">
                                        <img src="{{asset("assets/images/landing/keluarga-berbinar/lini-masa.png")}}"
                                             alt=""
                                             class="size-5 mx-auto">
                                        <p class="text-center text-white font-semibold text-xs">Lini masa</p>
                                    </button>
                                    {{--content--}}
                                    <div class="w-full h-full flex items-center space-x-4 relative z-20">
                                        {{--image--}}
                                        <div class="relative h-full w-48 py-1 overflow-hidden">
                                            <img
                                                src="{{asset('assets/images/landing/keluarga-berbinar/image-example.png')}}"
                                                alt="image-example" class="object-cover">
                                            <span
                                                class="absolute w-auto py-1 px-2 z-10 bottom-2 left-1/2 -translate-x-1/2 font-semibold text-nowrap tracking-wide text-xs text-white text-center bg-[#654064] rounded-lg shadow-lg">Manajer Divisi</span>
                                        </div>
                                        {{--info--}}
                                        <div class="h-full py-1 content-start pt-8 space-y-2">
                                            <h3 class="font-semibold text-2xl text-white">Barita
                                                Davitya S.</h3>
                                            <p class="block font-normal text-base text-white">As
                                                UI/UX
                                                Designer</p>
                                            <p class="block font-normal text-base text-white">
                                                Agu
                                                2024 -
                                                Sekarang</p>
                                            <a href="#" class=" xl:block"> <img
                                                    src="{{ asset('assets/images/landing/keluarga-berbinar/linkedin-fill.png') }}"
                                                    alt="linkedin" class="size-6"></a>
                                        </div>
                                    </div>
                                </div>

                                {{--BACK CARD--}}
                                <div id="back-{{$h}}" onclick="handleDesktopFlip({{$h}})" class="hidden relative min-h-60 w-full rounded-lg bg-gradient-to-b from-[#3986A3] to-[#15323D] hover:shadow-lg p-4 my-rotate-y-180 cursor-pointer">
                                    {{--texture--}}
                                    <img src="{{asset('assets/images/landing/keluarga-berbinar/texture-card.png')}}"
                                         alt="texture"
                                         class="block absolute z-10 scale-y-75 -bottom-8 left-0 ">

                                    {{--lini masa--}}
                                    <span class="absolute top-2 font-semibold text-xs text-white bg-[#FF8364] rounded-full py-1 px-3 right-2">Lini Masa</span>

                                    {{--content--}}
                                    <div class="relative z-20">
                                        <h3 class="font-semibold text-2xl text-white w-3/4 mb-4">Barita Davitya Suryawati
                                            Makmur Jaya</h3>
                                        <div class="w-full grid grid-cols-2 justify-items-start">
                                            @for($j = 1; $j <= 5; $j++)
                                                <div class="mb-2 last:mb-0">
                                                    <h4 class="font-semibold text-lg text-white text-start">As UI/UX
                                                        Designer</h4>
                                                    <p class="font-thin text-base text-white">Jan 2024 - Feb 2024</p>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--LIST FOR DESKTOP END--}}
                    @endfor

                </div>
            </div>
        </div>
    </section>


    <script>
    function handleFlipLG(id) {
            const card = document.getElementById(`card-${id}`);
            const back = document.getElementById(`back-${id}`);
            const front = document.getElementById(`front-${id}`);

            if (!card || !back || !front) {
                console.error(`Card elements not found for ID: ${id}`);
                return;
            }

            card.classList.toggle("my-rotate-y-180");

            if (card.classList.contains("my-rotate-y-180")) {
                // Show back side after a slight delay
                setTimeout(() => {
                    front.classList.add('hidden');
                }, 300)
                setTimeout(() => {
                    back.classList.remove("hidden");
                }, 300); // Delay to allow rotation to start
            } else {
                // Hide back side AFTER animation completes (matching duration: 1000ms)
                setTimeout(() => {
                    front.classList.remove('hidden');
                }, 300)
                setTimeout(() => {
                    back.classList.add("hidden");
                }, 300);

                // setTimeout(() => {
                //     front.classList.remove("hidden");
                // }, 100);
            }
        }
    function handleFlip(id) {
            const card = document.getElementById(`card-${id}`);
            const back = document.getElementById(`back-${id}`);
            const front = document.getElementById(`front-${id}`);

            // Ensure elements exist before proceeding
            if (!card || !back || !front) {
                console.error(`Card elements not found for ID: ${id}`);
                return;
            }

            // Toggle rotation
            card.classList.toggle("my-rotate-y-180");
            // front.classList.toggle('hidden');

            if (card.classList.contains("my-rotate-y-180")) {
                // Show back side after a slight delay
                setTimeout(() => {
                    front.classList.add('hidden');
                }, 300)
                setTimeout(() => {
                    back.classList.remove("hidden");
                }, 300); // Delay to allow rotation to start
            } else {
                // Hide back side AFTER animation completes (matching duration: 1000ms)
                setTimeout(() => {
                    front.classList.remove('hidden');
                }, 300)
                setTimeout(() => {
                    back.classList.add("hidden");
                }, 300);

                // setTimeout(() => {
                //     front.classList.remove("hidden");
                // }, 100);
            }
        }


    function handleMobileFlip(id) {
        const card = document.getElementById(`card-${id}`);
        const back = document.getElementById(`back-${id}`);
        const front = document.getElementById(`front-${id}`);

        if (!card || !front || !back) {
            console.error(`Elements for card ${id} not found`);
            return;
        }

        card.classList.toggle("my-rotate-y-180");

        if (card.classList.contains("my-rotate-y-180")) {
            setTimeout(() => {
                front.classList.add("hidden");
                back.classList.remove("hidden");
            }, 300);
        } else {
            setTimeout(() => {
                back.classList.add("hidden");
                front.classList.remove("hidden");
            }, 300);
        }
    }

    function handleDesktopFlip(id) {
        const card = document.getElementById(`card-${id}`);
        const back = document.getElementById(`back-${id}`);
        const front = document.getElementById(`front-${id}`);

        if (!card || !front || !back) {
            console.error(`Elements for card ${id} not found`);
            return;
        }

        card.classList.toggle("my-rotate-y-180");

        if (card.classList.contains("my-rotate-y-180")) {
            setTimeout(() => {
                front.classList.add("opacity-0", "absolute");
                back.classList.remove("opacity-0", "absolute");
            }, 300);
        } else {
            setTimeout(() => {
                back.classList.add("opacity-0", "absolute");
                front.classList.remove("opacity-0", "absolute");
            }, 300);
        }
    }

    </script>

    <script>
        const listDivisi = @json($divisi);
        const divisionDropdown = document.querySelector('#division-dropdown');
        const selectedDivision = document.querySelector('#selected-division');

        const subdivisionMenu = document.querySelector(`#subdivision-menu`);
        const subdivisionDropdown = document.querySelector(`#subdivision-dropdown`);
        const selectedSubdivision = document.querySelector('#selected-subdivision');
        const subdivisionButton = document.querySelector('#subdivision-button');

        let previousSelectedKey = null;

        let previousSelectedIdex = null;


        function handleShowSubdivisionMenu(key) {
            const subdivisions = listDivisi[key].subdivision;

            if (subdivisions.length > 0) {
                // Populate the subdivision dropdown dynamically
                subdivisionDropdown.innerHTML = ''; // Clear previous subdivisions
                subdivisions.forEach((subdivision, index) => {
                    const subdivisionDiv = document.createElement('div');
                    subdivisionDiv.classList.add(
                        'w-3/4',
                        'mx-auto',
                        'px-4',
                        'py-4',
                        'font-normal',
                        'bg-transparent',
                        'text-base',
                        'text-[#15323D]',
                        'text-center',
                        'h-14',
                        'mb-4',
                        'flex',
                        'items-center',
                        'justify-center',
                        'rounded-md',
                        'border-2',
                        'border-[#15323D]',
                        'cursor-pointer'
                    );
                    subdivisionDiv.textContent = subdivision;
                    subdivisionDiv.id = `subdivision-${index}`;

                    subdivisionDiv.addEventListener('click', () => {
                        handleSelectSubdivision(subdivision, index);
                    });

                    subdivisionDropdown.appendChild(subdivisionDiv);
                });

                // Show the subdivision menu
                subdivisionMenu.classList.remove('hidden');
            } else {
                console.log('No subdivisions available for this division.');
                subdivisionMenu.classList.add('hidden');
            }
        }


        function handleSelectSubdivision(subdivisionName, index) {
            // Unhide the previously selected subdivision, if any
            if (previousSelectedIdex !== null) {
                const previousSubDiv = document.querySelector(`#subdivision-${previousSelectedIdex}`);
                if (previousSubDiv) {
                    previousSubDiv.classList.remove('hidden');
                }
            }

            // Update the button with the selected subdivision
            selectedSubdivision.textContent = subdivisionName;

            // Hide the currently selected subdivision
            const selectedDiv = document.querySelector(`#subdivision-${index}`);
            if (selectedDiv) {
                selectedDiv.classList.add('hidden');
            }

            // Update the previous selected index
            previousSelectedIdex = index;

            // Hide the subdivision dropdown
            handleToggleDropdownSubdivision();
        }


        function handleToggleDropdownSubdivision() {
            subdivisionDropdown.classList.toggle('hidden');
            subdivisionButton.classList.toggle('text-white');
            subdivisionButton.classList.toggle('bg-gradient-to-r');
            subdivisionButton.classList.toggle('from-[#74AABF]');
            subdivisionButton.classList.toggle('to-[#15323D]');

        }

        function handleToggleDropdownDivision() {
            // Toggle visibility of the dropdown menu
            divisionDropdown.classList.toggle('hidden');
        }

        function handleSelectDivision(divisionName, divisionKey) {
            // Show the previously selected division (if any)
            if (previousSelectedKey !== null) {
                const previousDiv = document.querySelector(`#division-${previousSelectedKey}`);
                if (previousDiv) {
                    previousDiv.classList.remove('hidden');
                }
            }

            // Update the button with the selected division
            selectedDivision.textContent = divisionName;

            // Hide the currently selected division in the dropdown
            const selectedDiv = document.querySelector(`#division-${divisionKey}`);
            if (selectedDiv) {
                selectedDiv.classList.add('hidden');
            }

            // Update the previous selected key
            previousSelectedKey = divisionKey;

            // Hide the dropdown menu
            handleToggleDropdownDivision();
            handleShowSubdivisionMenu(divisionKey);
        }
    </script>

@endsection
