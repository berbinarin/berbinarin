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
                        Add Division Data</p>
                </div>
                <p class="w-3/4 text-disabled">Admin dapat menambahkan data divisi dengan menyertakan input yang sesuai
                    untuk setiap form. Data tersebut meliputi nama divisi dan subdivisi jika ada.</p>
            </div>
        </div>
        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md shadow-gray-400 shadow-lg">
            {{-- div bawah ini ganti form tar --}}
            <div class="mt-4 mb-4 overflow-x-auto">
                <div class="flex pb-5">
                    {{-- ini semua input fieldnya klo focus masih ada warna biru --}}
                    <div class="w-1/2 flex flex-col gap-10">
                        <div>
                            <h1 class="text-2xl font-bold">Divisi</h1>
                            <div class="flex flex-col gap-2 w-full pt-5">
                                <p class="text-lg font-semibold flex gap-1">
                                    Nama Divisi<i class="bx bxs-star text-xs text-red-600 "></i></p>
                                <input type="text" name="divisi"
                                    class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm "
                                    placeholder="John Doe" />
                            </div>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold">Sub Divisi</h1>
                            <div class="flex flex-col gap-2 w-full pt-5">
                                <p class="text-lg font-semibold flex gap-1">
                                    Nama Sub Divisi<i class="bx bxs-star text-xs text-red-600 "></i></p>
                                <div class="flex items-center w-full">
                                    <input type="text" name="subdivisi"
                                        class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm w-full mr-3"
                                        placeholder="John Doe" />
                                    <button>
                                        <i
                                            class="bx bxs-trash-alt text-lg px-2 py-1 border border-red-700 text-red-700 rounded-lg"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2"></div>
                </div>
                {{-- Ini nanti bikin logic klo diklik nanti div yg classnya flex pb-5 nambah lagi kebawah --}}
                <div
                    class="py-2 flex items-center justify-center border border-dashed rounded-lg border-blue-500 text-blue-500">
                    <h1 class="">
                        <i class="bx bx-plus-circle"></i>
                        Tambahkan Sub Divisi
                    </h1>
                </div>
                <div class="flex justify-end pt-5 border-t-2 border-t-gray-400 mt-8">
                    <button
                        class="flex items-center gap-2 bg-blue-500 text-white rounded-xl px-3 py-2 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        Unggah Data
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection