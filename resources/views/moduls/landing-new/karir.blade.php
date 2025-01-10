@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Karir',
    'page' => 'Karir',
])

@section('content')
    <section class="mt-32 w-full overflow-hidden">
        <div class="container mx-auto">
            <div class="">  {{--px-4--}}
                <div class="w-full mx-auto text-center mb-12">
                    <div class="w-full mb-12 relative">
                        <img src="{{ asset("assets/images/landing/vector-wave2.png") }}" alt="wave2"
                             class="translate-x-4">
                        <img src="{{ asset("assets/images/landing/karir-dummy/hexagon-picture-left.png") }}"
                             alt="hexagon-topleft" class="absolute -top-1 left-1 w-20 h-25 scale-150">
                    </div>
                    <div class=" mb-4">

                        <h1 class="font-semibold text-4xl bg-clip-text text-transparent bg-gradient-to-r from-[#1C4352] to-[#3986A3] font-[inter] mb-4 tracking-wide ">
                            Join Berbinar & <span
                                class="block"></span> Be Part of Our Journey</h1>
                    </div>
                    <button
                        class="py-2 px-4 rounded-md text-white bg-gradient-to-tr from-[#F7B23B] to-[#AD7D29] hover:opacity-80 hover:shadow-lg transition duration-300 mb-12">
                        Lihat
                        Posisi Tersedia
                    </button>
                    <div class="w-full mb-4 relative">
                        <img src="{{ asset("assets/images/landing/vector-wave2.png") }}" alt="wave2"
                             class=" -translate-x-4">
                        <img src="{{ asset("assets/images/landing/karir-dummy/hexagon-picture-right.png") }}"
                             alt="hexagon-bottomright" class="absolute -bottom-0 right-1 w-20 h-25 scale-150">
                    </div>
                </div>

                {{--infinite horizontal scroll--}}
                <div class="w-full mx-auto">
                    <div class="flex gap-1">
                        <div class="flex gap-4 profile-slide">
                            @for($i = 1; $i <= 35; $i++)
                                <div class="bg-primary rounded-full w-14 h-14 overflow-hidden"><img
                                        src="{{ asset("assets/images/landing/karir-dummy/profile-dummy.jpeg") }}"
                                        alt="profile dummy" class="object-cover">
                                </div>
                            @endfor
                            @for($i = 1; $i <= 35; $i++)
                                <div class="bg-primary rounded-full w-14 h-14 overflow-hidden">
                                    <img
                                        src="{{ asset("assets/images/landing/karir-dummy/profile-dummy.jpeg") }}"
                                        alt="profile dummy" class="object-cover">
                                </div>
                            @endfor
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
