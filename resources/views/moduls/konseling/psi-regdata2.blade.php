@extends('moduls.konseling.layouts.main', [
    'title' => 'Daftar Konseling',
    'active' => 'Register',
])

@section('content')
    <div class="flex w-screen mt-10">   
        <div class="w-2/5 mx-auto items-center">
            <a href="{{ route('psi-regData1') }}">
                <i class='bx bx-arrow-back text-[35px] text-primary ml-6 mt-8 text-left'></i>
            </a>
            <h2 class="text-black text-center mt-4 text-4xl font-semibold">Data Diri</h2>
            <p class="text-center mt-2">Isilah formulir berikut ini dengan benar dan lengkap</p>
            <div class="mt-6">
                <div class="placebirth mt-4 text-center">
                    <p class="text-left ml-24 text-[#555555]">Tempat Lahir</p>
                    <input type="text" placeholder="Masukkan Tempat Lahir" class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-[420px] rounded-lg p-4 mt-3">
                </div>
                <div class="datebirth mt-4 text-center">
                    <p class="text-left ml-24 text-[#555555]">Tanggal Lahir</p>
                    <input type="date" placeholder="" class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-[420px] rounded-lg p-4 mt-3">
                </div>
                <div class="suku mt-4 text-center">
                    <p class="text-left ml-24 text-[#555555]">Suku Bangsa</p>
                    <input type="text" placeholder="Jawa" class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-[420px] rounded-lg p-4 mt-3">
                </div>
                <div class="maritalstat mt-4 text-center">
                    <p class="text-left ml-24 text-[#555555]">Status Pernikahan</p>
                    <input type="text" placeholder="Belum Menikah" class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-[420px] rounded-lg p-4 mt-3">
                </div>
                <div class="dom mt-4 text-center">
                    <p class="text-left ml-24 text-[#555555]">Alamat Domisili</p>
                    <input type="text" placeholder="Masukkan Alamat Domisili" class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-[420px] rounded-lg p-4 mt-3">
                </div>
            </div>     
            <div class="text-center">
                <button onclick="window.location.href='{{ route('psi-regData3') }}'" class="button-con-reg inline-block rounded-lg w-[420px] my-6 px-5 py-3 text-base font-medium text-white">
                    Selanjutnya
                </button>  
            </div>     
        </div>

        <div class="w-3/5 decoration__conreg">
            <div class="flex mx-auto justify-center align-items-center">
                <img src="{{ asset('assets/images/konseling/regist/Ilustrasi1.png') }}" alt="Ilustrasi-Test" class=" absolute m-auto mt-36 w-[540px] z-10">
                <div class="decoration__img__conreg  mx-auto rounded-3xl mt-[30rem] w-[560px] h-[200px] border-4 bg-white z-0"></div>
            </div>
            <p class="text-center mt-12 mb-6 text-white">Copyright © PT Berbinar Insightful Indonesia. 2023</p>
        </div>
    </div>
@endsection