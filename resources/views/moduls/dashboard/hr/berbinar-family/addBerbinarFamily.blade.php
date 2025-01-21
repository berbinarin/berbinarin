@extends('moduls.dashboard.layouts.main', [
    'title' => 'BerbinarFamily',
    'active' => 'Dashboard',
    'modul' => 'BerbinarFamily',
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
                        Add Staff Data</p>
                </div>
                <p class="w-3/4 text-disabled">Admin dapat menambahkan data staff dengan menyertakan input yang sesuai
                    untuk setiap form. <br /> Data tersebut meliputi informasi data diri dan riwayat jabatan.</p>
            </div>
        </div>
        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md shadow-gray-400 shadow-lg">
            {{-- div bawah ini ganti form tar --}}
            <div class="mt-4 mb-4 overflow-x-auto">
                <h1 class="text-2xl font-bold">Data Diri</h1>
                <p class="text-lg font-semibold flex gap-1 pt-5">
                    Foto Pribadi<i class="bx bxs-star text-xs text-red-600"></i></p>
                <p class="text-lg text-gray-400 pb-3">Ukuran foto maksimal 1 MB dengan resolusi minimal 300x300 piksel.
                    Format file yang diperbolehkan: JPG, PNG.</p>
                <button
                    class="flex items-center gap-2 bg-blue-500 text-white rounded-xl px-3 py-2 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <i class="bx bx-upload text-2xl"></i>
                    Unggah Foto
                </button>
                <form class="pt-5 flex gap-10 w-full">
                    {{-- focus waarna birunya masih ada --}}
                    <div class="flex flex-col gap-2 w-full">
                        <p class="text-lg font-semibold flex gap-1">
                            Nama Lengkap<i class="bx bxs-star text-xs text-red-600 "></i></p>
                        <input type="text" name="name"
                            class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm "
                            placeholder="John Doe" />
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <p class="text-lg font-semibold flex gap-1">
                            LinkedIn<i class="bx bxs-star text-xs text-red-600 "></i></p>
                        <input type="text" name="name"
                            class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm "
                            placeholder="linkedin.com/in/johndoe/" />
                    </div>
                    <div class="w-1/4"></div>
                </form>
                <h1 class="text-2xl font-bold pt-10">Riwayat Jabatan</h1>
                <div class="flex pb-5">
                    <form class="pt-5 grid grid-cols-2 lg:grid-cols-2 gap-x-10 gap-y-5 w-full">
                        {{-- focus waarna birunya masih ada --}}
                        <div class="flex flex-col gap-2 w-full">
                            <p class="text-lg font-semibold flex gap-1">
                                Posisi<i class="bx bxs-star text-xs text-red-600"></i>
                            </p>
                            <select name="position" 
                                class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-blue-500 shadow-sm text-gray-500">
                                <option value="" disabled selected class="text-black">Pilih posisi jabatan</option>
                                <option value="frontend" class="text-black">Frontend</option>
                                <option value="backend" class="text-black">Backend</option>
                                <option value="fullstack" class="text-black">Fullstack</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2 w-full">
                            <p class="text-lg font-semibold flex gap-1">
                                Divisi<i class="bx bxs-star text-xs text-red-600"></i>
                            </p>
                            <select name="position" 
                                class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-blue-500 shadow-sm text-gray-500">
                                <option value="" disabled selected class="text-black">Pilih divisi</option>
                                <option value="frontend" class="text-black">Frontend</option>
                                <option value="backend" class="text-black">Backend</option>
                                <option value="fullstack" class="text-black">Fullstack</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2 w-full">
                            <p class="text-lg font-semibold flex gap-1">
                                Sub divisi<i class="bx bxs-star text-xs text-red-600"></i>
                            </p>
                            <select name="position" 
                                class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-blue-500 shadow-sm text-gray-500">
                                <option value="" disabled selected class="text-black">Pilih subdivisi</option>
                                <option value="frontend" class="text-black">Frontend</option>
                                <option value="backend" class="text-black">Backend</option>
                                <option value="fullstack" class="text-black">Fullstack</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2 w-full">
                            <p class="text-lg font-semibold flex gap-1">
                                Awal Menjabat<i class="bx bxs-star text-xs text-red-600"></i>
                            </p>
                            <div class="flex items-center w-full">
                                <div class="rounded-lg border border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm flex justify-between w-full mr-3">
                                    <input type="date" class="border-none rounded-lg text-gray-500 w-full"/>
                                </div>
                                <button>
                                    <i class="bx bxs-trash-alt text-lg px-2 py-1 border border-red-700 text-red-700 rounded-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 w-full">
                            <p class="text-lg font-semibold flex gap-1">
                                Akhir Menjabat<i class="bx bxs-star text-xs text-red-600"></i>
                            </p>
                            <div class=" rounded-lg border border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm flex justify-between">
                                <input type="date" class="border-none rounded-lg text-gray-500 w-full"/>
                            </div>
                        </div>
                    </form>
                    <div class="w-1/6"></div>
                </div>
                {{-- Ini nanti bikin logic klo diklik nanti div yg classnya flex pb-5 nambah lagi kebawah --}}
                <button class="py-2 flex items-center justify-center border border-dashed rounded-lg border-blue-500 text-blue-500">
                    <h1 class="">
                        <i class="bx bx-plus-circle"></i>
                        Tambahkan Riwayat Jabatan
                    </h1>
                </button>
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