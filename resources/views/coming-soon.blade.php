@extends('layouts.main', [
    'title' => 'Coming Soon - Berbinar Insightful Indonesia',
    'active' => 'Coming Soon',
    'page' => 'Coming Soon',
])

@section('content')
    {{-- HERO SECTION --}}
    <section
        class="max-w-6xl mx-auto md:h-screen flex flex-col md:flex-row items-center justify-center relative px-5 md:px-0 mt-40 md:mt-10">
        {{-- HERO CONTENT --}}
        <div class="relative flex items-center">
            <div class="bg-blur-bg rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
            </div>
            <div class="flex flex-col gap-5 z-40 relative items-center">
                <h1 class="font-semibold text-black text-[40px] md:text-[64px] leading-[100%] md:leading-[120%] text-center">
                    Coming Soon Layanan<br class="hidden md:block"> <span class="text-primary font-bold">Berbinar
                        Insightful Indonesia</span>
                </h1>
                <p class="text-lg text-disabled text-center md:w-1/2">Sekarang layanan dan halaman sedang Berada pada tahap
                    development, mohon maaf dan mohon tunggu!</p>
                <a href="{{ route('products') }}"
                    class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Explore
                    Layanan Lainnya</a>
            </div>
        </div>
    </section>
@endsection
