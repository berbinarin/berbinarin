@extends('moduls.konseling.layouts.main', [
    'title' => 'Daftar Konseling',
    'active' => 'Register',
])

@section('content')
    <div class="flex w-screen mt-10">   
        <div class="w-2/5 mx-auto items-center">
            <a href="{{ route('psi-regData3') }}">
                <i class='bx bx-arrow-back text-[35px] text-primary ml-6 mt-8 text-left'></i>
            </a>
            <h2 class="text-black text-center mt-4 text-4xl font-semibold">Mari Cerita</h2>
            <p class="text-center mt-2">Ceritakan hal yang ingin Anda konsultasikan</p>
            <div class="mt-6">
                <div class="anak-ke mt-4 text-center">
                    <textarea placeholder="Tulislah hal yang ingin anda konsultasikan" class="bg-[#F1F3F6] text-[#555555] border-2 w-[420px] h-64 rounded-lg p-4 mt-3"></textarea>
                </div>
            </div>     
            <div id="submit-konseling" class="text-center">
                <button type="submit" class="button-con-reg inline-block rounded-lg w-[420px] my-6 px-5 py-3 text-base font-medium text-white">
                    Kirim
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