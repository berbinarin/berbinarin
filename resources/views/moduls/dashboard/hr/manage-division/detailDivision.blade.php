@extends('moduls.dashboard.layouts.main', [
    'title' => 'Manage Division',
    'active' => 'Dashboard',
    'modul' => 'Manage Division',
])

@section('content-dashboard')

<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="py-4 md:pt-12 md:pb-7">
            <div class="">
                <div class="flex items-center mb-2 gap-2">
                    <a href="{{ route('dashboard.berbinarFamily') }}">
                        <img src="{{ asset('assets/images/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                    </a>
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 ">
                        Detail Division Data</p>
                </div>
                <p class="w-3/4 text-disabled">Dalam halaman ini terdapat informasi detail mengenai data divisi dalam
                    Keluarga Berbinar. Data tersebut meliputi nama divisi dan subdivisi jika ada.</p>
            </div>
            <div class="flex items-center gap-5 pb-8">
                <a href="#">
                    <button type="button"
                        class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg">
                        <p class=" font-medium leading-none text-dark">Edit</p>
                    </button>
                </a>
                <a href="#">
                    <button type="button"
                        class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-red-400 focus:outline-none rounded-lg">
                        <p class=" font-medium leading-none text-dark">Hapus</p>
                    </button>
                </a>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md shadow-gray-400 shadow-lg">
                <div class="mt-4 mb-4 overflow-x-auto">
                    <div class="flex flex-col gap-10">
                        <div>
                            <h1 class="text-2xl font-bold ">Divisi</h1>
                            <ul class="font-semibold pt-3 grid grid-cols-3 gap-x-10 gap-y-5">
                                <li>
                                    <p class="text-gray-400">Nama Divisi</p>
                                    <p class="text-black">John Doe</p>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold ">Sub Divisi</h1>
                            <ul class="font-semibold pt-3 grid grid-cols-3 gap-x-10 gap-y-5">
                                <li class="flex items-center gap-3">
                                    <div class="px-2 py-1 rounded-full bg-primary">
                                        <h1 class="text-white text-sm">1.</h1>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-400">Nama Sub Divisi</p>
                                        <p class="text-black">John Doe</p>
                                    </div>
                                </li>
                                <li class="flex items-center gap-3">
                                    <div class="px-2 py-1 rounded-full bg-primary">
                                        <h1 class="text-white text-sm">1.</h1>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-400">Nama Sub Divisi</p>
                                        <p class="text-black">John Doe</p>
                                    </div>
                                </li>
                                <li class="flex items-center gap-3">
                                    <div class="px-2 py-1 rounded-full bg-primary">
                                        <h1 class="text-white text-sm">1.</h1>
                                    </div>
                                    <div class="">
                                        <p class="text-gray-400">Nama Sub Divisi</p>
                                        <p class="text-black">John Doe</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection