@extends('moduls.psikotes-paid.layouts.main', [
'title' => 'Psikotest Berbinar',
'active' => 'Registrasi',
'page' => 'Sign Up Success'])

@section('content')
<section class="">
    <div class="flex bg-[#F5F7F9]">
        <div class="flex flex-col justify-center items-center">
            <div class="flex justify-center">
                <img src="{{ asset('assets/images/old/logo-psikotes.png') }}" alt="" title="" class="w-[160px] md:w-fit ml-0 md:-ml-10 absolute top-5">
            </div>

            <div class="flex flex-col md:w-screen justify-center items-center">
                <img src="{{ asset('assets/images/psikotes/backtohome.png') }}" class="object-cover h-[300px] md:h-[400px] md:w-[500px] mt-16 md:mt-10 mb-3">
                <div class="flex flex-col">
                    <h4 class="text-black text-sm md:text-lg font-semibold text-center leading-relaxed">
                        Terima kasih
                        telah
                        mendaftar
                        layanan psikotes!</h4>

                    <h4 class="w-[300px] md:w-[790px] text-black text-sm md:text-lg font-semibold text-center mx-5 leading-relaxed">
                        Setelah
                        melakukan
                        submit,
                        SobatBinar akan dihubungi oleh Berbinar terkait pembayaran dan informasi lebih lanjut
                        mengenai
                        pelaksanaan psikotes.</h4>
                </div>
            </div>

            <div class="flex flex-row my-10 md:mt-7 md:mb-0">
                <a href="{{ route('psikotestHome') }}" class="flex flex-row px-5 py-2 text-base text-white font-semibold bg-primary hover:text-primary hover:bg-amber-300 rounded-full duration-500">Beranda
                </a>
            </div>
        </div>
    </div>
</section>

@endsection