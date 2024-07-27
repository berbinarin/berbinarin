@extends('moduls.psikotes.layouts.main', [
'title' => 'Psikotest Berbinar',
'active' => 'Registrasi',
'page' => 'Sign Up Success'])

@section('content')
<section class="w-screen">
    <div class="flex max-w-6xl bg-[#F5F7F9]">
        <div class="flex flex-col w-screen justify-center items-center">
            <div class="flex justify-center">
                <img src="{{ asset('assets/images/logo-psikotes.png') }}" alt="" title="" class="w-fit absolute top-5">
            </div>

            <div class="flex flex-col w-screen justify-center items-center">
                <img src="{{ asset('assets/images/psikotes/backtohome.png') }}" class="w-[800px] mt-5">
                <div>
                    <h4 class="w-[850px] text-black text-lg font-semibold text-center">Terima kasih telah mendaftar
                        layanan psikotes!<br>
                        Setelah SobatBinar
                        melakukan
                        submit, SobatBinar akan dihubungi oleh Berbinar terkait pembayaran dan informasi lebih lanjut
                        mengenai
                        pelaksanaan
                        psikotes.</h4>
                </div>
            </div>
            <!-- <div class="flex w-screen">
                <div>
                    <h4 class="w-[900px] text-black text-lg font-semibold text-center">Terima kasih telah memilih
                        Berbinar!
                        Setelah Anda
                        melakukan
                        submit, Anda akan dihubungi oleh Admin terkait pembayaran dan informasi lanjutan mengenai
                        pelaksanaan
                        psikotes.</h4>
                </div>

            </div> -->
            <div class="flex flex-row mt-10">
                <a href="{{ route('psikotestHome') }}" class="flex flex-row px-5 py-2 text-base text-white font-semibold bg-primary hover:text-primary hover:bg-amber-300 rounded-full duration-500">Beranda
                </a>
            </div>
        </div>
    </div>
</section>

@endsection