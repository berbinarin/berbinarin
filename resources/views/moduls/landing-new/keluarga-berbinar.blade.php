@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Karir',
    'page' => 'keluarga-berbinar',
])


@section('content')

    {{--header & selection menu--}}
    <section class=" mt-32 mb-12 w-full mx-auto ">
        <div class=" container w-full mx-auto">
            {{--heading--}}
            <h1 class="font-semibold text-4xl text-center text-slate-900 py-2 mb-4">Keluarga <span
                    class="text-white bg-primary p-2">Berbinar</span></h1>
            {{--menu tahun--}}
            <div class=" w-full mx-auto flex-col justify-center items-center sm:bg-red-500 md:bg-blue-500 mb-4 relative z-10">
                <div class="w-full flex justify-between mb-4 px-2">
                    <div class="p-1 bg-primary rounded-md">
                        <button
                            class="font-semibold text-lg text-center tracking-wide px-4 w-36 text-white bg-primary rounded-sm hover:text-primary hover:bg-white hover:ring-2 hover:ring-primary hover:shadow-lg">
                            2022
                        </button>
                    </div>
                    <div class="p-1 bg-primary rounded-md">
                        <button
                            class="font-semibold text-lg text-center tracking-wide px-4 w-36 text-white bg-primary rounded-sm hover:text-primary hover:bg-white hover:ring-2 hover:ring-primary hover:shadow-lg">
                            2025
                        </button>
                    </div>
                </div>
                <div class="flex justify-around items-center mb-4 sm:px-10">
                    <div class="p-1 bg-primary rounded-md">
                        <button
                            class="font-semibold text-lg text-center tracking-wide px-4 w-36 text-white bg-primary rounded-sm hover:text-primary hover:bg-white hover:ring-2 hover:ring-primary hover:shadow-lg">
                            2023
                        </button>
                    </div>
                    <div class="p-1 bg-primary rounded-md">
                        <button
                            class="font-semibold text-lg text-center tracking-wide px-4 w-36 text-white bg-primary rounded-sm hover:text-primary hover:bg-white hover:ring-2 hover:ring-primary hover:shadow-lg">
                            2024
                        </button>
                    </div>
                </div>
            </div>
            {{--menu tahun--}}
        </div>
        {{--divider path--}}
        <div class=" w-full h-20 relative z-0">
            <img src="{{asset("assets/images/landing/keluarga-berbinar/path2.png")}}" alt="divider"
                 class="object-cover -translate-y-36">
        </div>
    </section>
    {{--header & selection menu--}}

@endsection
