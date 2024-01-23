@extends('moduls.konseling.layouts.main', [
    'title' => 'Daftar Konseling',
    'active' => 'Register',
])

@section('content')
    <section>
        <div class="flex w-screen mt-10">   
            <div class="w-2/5 mx-auto items-center">
                <a href="">
                    <i class='bx bx-arrow-back text-[35px] text-primary ml-6 mt-8 text-left'></i>
                </a>
                <img src="{{ asset('assets/images/logo-berbinar.png') }}" alt="Logo Berbinar Insightful Indonesia" title="Logo Berbinar Insightful Indonesia" class="w-16 mx-auto mt-20">
                <h2 class="text-black text-center mt-4 text-4xl font-semibold">Jenis Layanan konseling <br> bersama Berbinar</h2>
                <p class="text-center mt-4">Tentukan pilihanmu untuk melakukan sesi konseling</p>
                <div class="flex mt-6">
                    <div class="option items-center mx-auto text-center">
                        <button onclick="selectOption('psikolog')" id="psikologButton" class="option-button w-36 h-36 items-center rounded-xl text-bold bg-[#4C4C4C] text-white hover:bg-primary"><img src="{{ asset('assets/images/konseling/regist/icon.png') }}" alt="" class="items-center mx-auto text-center">Psikolog</button> 
                        <button onclick="selectOption('peer')" id="peerButton" class="option-button w-36 h-36 items-center rounded-xl bg-[#4C4C4C] text-white hover:bg-primary ml-6"><img src="{{ asset('assets/images/konseling/regist/icon.png') }}" alt="" class="items-center mx-auto text-center">Peer Counselor</button> 
                    </div>
                </div>     
                <div class="text-center">
                    <button id="startBtn" onclick="redirect()" class="button-con-reg inline-block rounded-lg w-[420px] my-8 px-5 py-3 text-base font-medium text-white">
                        Selanjutnya
                    </button>  
                </div>     
            </div>

            <div class="w-3/5 decoration__conreg">
                <div class="flex mx-auto justify-center align-items-center">
                    <img src="{{ asset('assets/images/konseling/regist/Ilustrasi2.png') }}" alt="Ilustrasi-Test" class=" absolute m-auto mt-32 w-[540px] z-10">
                    <div class="decoration__img__conreg  mx-auto rounded-3xl mt-[30rem] w-[560px] h-[200px] border-4 bg-white z-0"></div>
                </div>
                <p class="text-center mt-12 mb-6 text-white">Copyright © PT Berbinar Insightful Indonesia. 2023</p>
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
                window.location.href = "/counseling/reg/pilihjadwal";
            } else if (selectedOption === 'peer') {
                window.location.href = "/counseling/reg/data";
            }
    }
    </script>

@endsection