@extends('moduls.konseling.layouts.main', [
'title' => 'Daftar Konseling',
'active' => 'Register',
])

@section('content')
<section>
    <div id="layanan">
        <div class="flex items-center justify-center w-screen lg:w-screen h-full">
            <div class="flex flex-col w-full h-screen sm:flex-row">
                <div class="w-full pl-4 lg:pl-7 lg:ml-0 md:pt-5 md:pl-5 items-center">

                    <div class="-ml-5 sm:ml-0">
                        <a href="{{ route('counseling') }}">
                            <i class='bx bx-arrow-back text-[35px] text-primary ml-5 mt-2 lg:mt-0'></i>
                        </a>
                    </div>

                    <div class="flex flex-col gap-3 mr-5 z-40 relative justify-self-center">
                        <img src="{{ asset('assets/images/logo-berbinar.png') }}"
                            alt="Logo Berbinar Insightful Indonesia" title="Logo Berbinar Insightful Indonesia"
                            class="w-16 mx-auto">
                        <h2 class="text-black text-center mt-4 text-4xl font-semibold">Jenis Layanan konseling <br>
                            bersama
                            Berbinar
                        </h2>
                        <p class="text-center">Tentukan pilihanmu untuk melakukan sesi konseling</p>
                    </div>

                    <div class="flex m-5">
                        <div class="flex flex-col sm:flex-row option items-center mx-auto gap-1 sm:gap-5 text-center">
                            <button onclick="selectOption('psikolog')" id="psikologButton"
                                class="option-button w-64 h-[19rem] items-center rounded-xl font-semibold bg-[#4C4C4C] text-white hover:bg-primary me-2 my-3 p-4"><img
                                    src="{{ asset('assets/images/Psychologist.png') }}" alt=""
                                    class="items-center mx-auto -mt-7 -mb-5 text-center w-40">Psikolog
                                <p class="font-light text-sm text-left pt-3">Konseling bersama Psikolog berizin
                                    praktek aktif (SIPP) dan berpengalaman dalam menghadapi berbagai permasalahan
                                    yang berkaitan
                                    dengan konseling</p>
                            </button>

                            <button onclick="selectOption('peer')" id="peerButton"
                                class="option-button w-64 h-[19rem] items-center rounded-xl font-semibold bg-[#4C4C4C] text-white hover:bg-primary me-2 my-3 p-4"><img
                                    src="{{ asset('assets/images/PeerCounselor.png') }}" alt=""
                                    class="items-center mx-auto -mt-6 -mb-5 text-center w-36">Peer Counselor
                                <p class="font-light text-sm text-left pt-3">Konseling bersama Peer Conselor
                                    yang dilatih secara langsung oleh Psikolog Berbinar dan
                                    merupakan mahasiswa yang telah lulus mata kuliah konseling</p>
                            </button>
                        </div>
                    </div>

                    <div class="text-center pb-5">
                        <button id="startBtn" onclick="redirect()"
                            class="button-next inline-block rounded-lg w-fit px-5 py-3 text-base font-medium text-white">
                            Selanjutnya
                        </button>
                    </div>
                </div>

                <div class="w-screen h-auto hidden lg:block decoration__conreg">
                    <div class="flex mx-auto justify-center align-items-center">
                        <img src="{{ asset('assets/images/konseling/regist/Ilustrasi2.png') }}" alt="Ilustrasi-Test"
                            class="absolute mx-auto mt-14 w-[550px] z-10">
                        <div
                            class="decoration__img__conreg mx-auto rounded-3xl mt-[24rem] w-[500px] h-[200px] border-4 bg-white z-0">
                        </div>
                    </div>
                    <p class="text-center my-14 text-white">Copyright © PT Berbinar Insightful Indonesia.
                        2023</p>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
let selectedOption = "";

function selectOption(option) {
    if (selectedOption) {
        document.getElementById(selectedOption + 'Button').classList.remove('selected');
    }
    selectedOption = option;
    document.getElementById(option + 'Button').classList.add('selected');
    document.getElementById('mulaiButton').classList.remove('hidden');
}

function redirect() {
    if (selectedOption === 'psikolog') {
        window.location.href = "/counseling/reg/psikolog/pilihjadwal";
    } else if (selectedOption === 'peer') {
        window.location.href = "/counseling/reg/peer/pilihjadwal";
    }
}
</script>

@endsection