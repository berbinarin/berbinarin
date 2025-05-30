@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Arteri',
    'active' => 'Dashboard',
    'modul' => 'Main Dashboard',
])

@section('content')
<section class="flex w-full h-full">
    <div class="flex flex-col w-full h-full">
        <div class="py-4 md:pt-12 md:pb-7">
            <div>
                <p 
                    class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                    Dashboard ArteRi</p>
                <p class="w-2/4 text-disabled">Dashboard ini menampilkan ringkasan statistik, daftar artikel, penulis, dan kategori.</p>
            </div>
        </div>  

        <div class="rounded-lg shadow-md w-full p-10 bg-white box-border overflow-hidden" style="height:65%">
            <div class="grid grid-cols-3 gap-5 h-full">
                <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #48576A;">
                    <h3 class="block text-2xl font-bold">Artikel</h3>
                    <div class="absolute p-6 bottom-2 right-2 flex flex-col gap-4 font-semibold">
                        <p class="text-end text-5xl">{{ $articleCount }}</p>
                        <p>Postingan Artikel</p>
                    </div>
                </div>
                <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #A2ACBD;">
                    <h3 class="block text-2xl font-bold">Penulis Artikel</h3>
                    <div class="absolute p-6 bottom-2 right-2 flex flex-col gap-4 font-semibold">
                        <p class="text-end text-5xl">{{ $authorCount }}</p>
                        <p>Penulis</p>
                    </div>
                </div>
                <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #9E866A;">
                    <h3 class="block text-2xl font-bold">Kategori Artikel</h3>
                    <div class="absolute p-6 bottom-2 right-2 flex flex-col gap-4 font-semibold">
                        <p class="text-end text-5xl">{{ $categoryCount }}</p>
                        <p>Kategori</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection