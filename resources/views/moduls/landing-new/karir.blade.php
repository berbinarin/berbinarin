@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Karir',
    'page' => 'Karir',
])


@php
    $arr = array('1', '2', '3', '4', '5');
    $duplicated = array_merge($arr, $arr);
@endphp

@section('content')
    <section class="mt-32 w-full">
        <div class="container mx-auto">
            <div class="px-4">
                <div class="w-full mx-auto text-center">
                    <div class="w-full mb-4">
                        <img src="{{ asset("assets/images/landing/vector-wave2.png") }}" alt="wave2"
                             class="translate-x-4">
                    </div>
                    <div class=" mb-4">

                        <h1 class="font-semibold text-4xl bg-clip-text text-transparent bg-gradient-to-r from-[#1C4352] to-[#3986A3] font-[inter] mb-4 tracking-wide ">
                            Join Berbinar & <span
                                class="block"></span> Be Part of Our Journey</h1>
                    </div>
                    <button
                        class="py-2 px-4 rounded-md text-white bg-gradient-to-tr from-[#F7B23B] to-[#AD7D29] hover:opacity-80 hover:shadow-lg transition duration-300 mb-4">
                        Lihat
                        Posisi Tersedia
                    </button>
                    <div class="w-full mb-4">
                        <img src="{{ asset("assets/images/landing/vector-wave2.png") }}" alt="wave2"
                             class=" -translate-x-4">
                    </div>
                </div>
                <div class="w-full py-2 bg-red-500 mx-auto flex items-center justify-center overflow-hidden">
                    <div class="flex gap-2 justify-center items-center animate-infinity-horizontal">
                        <div
                            class="w-[50px] h-[50px] rounded-full bg-primary flex items-center justify-center">1
                        </div>
                        <div
                            class="w-[50px] h-[50px] rounded-full bg-primary flex items-center justify-center">2
                        </div>
                        <div
                            class="w-[50px] h-[50px] rounded-full bg-primary flex items-center justify-center">3
                        </div>
                        <div
                            class="w-[50px] h-[50px] rounded-full bg-primary flex items-center justify-center">4
                        </div>
                        <div
                            class="w-[50px] h-[50px] rounded-full bg-primary flex items-center justify-center">5
                        </div>
                        <div
                            class="w-[50px] h-[50px] rounded-full bg-primary flex items-center justify-center">6
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
