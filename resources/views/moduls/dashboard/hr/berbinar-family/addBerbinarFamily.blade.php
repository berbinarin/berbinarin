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
                <form class="pt-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 w-full">
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
                    <div class="flex flex-col gap-2 w-full">
                        <p class="text-lg font-semibold flex gap-1">
                            LinkedIn<i class="bx bxs-star text-xs text-red-600 "></i></p>
                        <input type="text" name="name"
                            class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm "
                            placeholder="linkedin.com/in/johndoe/" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection