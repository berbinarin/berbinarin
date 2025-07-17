@extends('landing.layouts.app', [
'title' => 'Psikotest Berbinar',
'active' => 'Test',
'page' => 'Tes',
])

@section('content')
<section>
    <h2 class="text-[#333333] text-center font-bold text-5xl mt-28 mb-10 lg:mt-36 lg:mb-14">Psikotes <span class="bg-gradient-to-r from-[#3986A3] to-[#25586A] bg-clip-text text-transparent">Berbinar</span></h2>
    <div class="rounded-3xl justify-center flex relative lg:mb-20">
        <div class="rounded-3xl overflow-hidden flex flex-row justify-center items-left lg:shadow-2xl" style="box-shadow: 0 0 25px rgba(0,0,0,0.25);">


            <div class="flex flex-col md:flex-row w-full items-left">
                <div class="t-container bg-white px-4 lg:px-14 z-38 lg:w-2/3 max-sm:max-w-3xl rounded-3xl z-10">
                    <div class="progress w-full h-3 my-10 bg-gray-200 rounded-full overflow-hidden">
                        <div class="progress-bar w-[20px] h-3 bg-gradient-to-r from-[#3B88A4] to-[#72A9BE] ml-[1px] md:ml-0 rounded-full text-[13px] text-end" role="progressbar" style="width: {{ 60 }}%;" aria-valuenow="{{ 60 }}" aria-valuemin="0" aria-valuemax="100"><span class="font-semibold ml-1 mr-2 text-white"></span>
                        </div>
                    </div>
                    <!-- <div class="quest-container w-full bg-white rounded-3xl p-10"> -->

                        <form action="{{ route('psikotest-free.feedback.show') }}" method="GET" class="flex flex-col">
                            @csrf
                            <!-- <p class="question text-lg md:text-2xl text-[#70787D]">
                                Pertanyaan 02
                            </p> -->

                            <p class="question text-lg md:text-2xl mt-4 lg:mt-6 font-bold text-[#333333]">
                                Lorem ipsum dolor sit amet consectetur adipisicing*
                            </p>

                            <p class="question text-lg md:text-2xl mt-4 lg:mt-6 lg:mb-10 text-[#70787D]">
                                Pilih satu jawaban :
                            </p>

                            <div class="flex flex-row md:flex-col">
                                <div class="radio flex flex-col lg:flex-row md:flex-row w-full justify-between inline-box gap-5 md:gap-10 mt-6">

                                    <div class="radio-tab flex flex-row lg:flex-col md:items-center">
                                        <div class="text-center flex items-center justify-center lg:mb-5">
                                            <label class="flex items-center cursor-pointer">
                                                <input type="radio" name="answer" value="1" class="peer hidden" />
                                                <div class="w-16 h-16 lg:w-16 lg:h-16 rounded-full border border-gray-300
                                                peer-checked:bg-primary peer-checked:text-white peer-checked:border-primary-alt
                                                transition flex items-center justify-center font-bold lg:text-2xl
                                                shadow-[0_0_10px_0_#3986A380]">
                                                1
                                            </div>
                                            </label>
                                        </div>
                                        <div class="my-2 md:my-0 max-sm:mx-4 flex flex-col items-center justify-center">
                                            <p class="text-sm text-center lg:text-lg radio-label" data-value="1">Sangat Tidak <span class="md:hidden">Sesuai</span></p>
                                            <p class="text-sm text-center hidden md:block lg:text-lg radio-label" data-value="1">Sesuai</p>
                                        </div>
                                    </div>


                                    <div class="radio-tab flex flex-row lg:flex-col md:items-center">
                                        <div class="text-center flex items-center justify-center lg:mb-5">
                                            <label class="flex items-center cursor-pointer">
                                                <input type="radio" name="answer" value="2" class="peer hidden" />
                                                <div class="w-16 h-16 lg:w-16 lg:h-16 rounded-full border border-gray-300
                                                peer-checked:bg-primary peer-checked:text-white peer-checked:border-primary-alt
                                                transition flex items-center justify-center font-bold lg:text-2xl
                                                shadow-[0_0_10px_0_#3986A380]">
                                                2
                                            </div>
                                            </label>
                                        </div>
                                        <div class="my-2 md:my-0 max-sm:mx-4 flex flex-col items-center justify-center">
                                            <p class="text-sm text-center lg:text-lg radio-label" data-value="2">Tidak Sesuai</p>
                                        </div>
                                    </div>

                                    <div class="radio-tab flex flex-row lg:flex-col md:items-center">
                                        <div class="text-center flex items-center justify-center lg:mb-5">
                                            <label class="flex items-center cursor-pointer">
                                                <input type="radio" name="answer" value="3" class="peer hidden" />
                                                <div class="w-16 h-16 lg:w-16 lg:h-16 rounded-full border border-gray-300
                                                peer-checked:bg-primary peer-checked:text-white peer-checked:border-primary-alt
                                                transition flex items-center justify-center font-bold lg:text-2xl
                                                shadow-[0_0_10px_0_#3986A380]">
                                                3
                                            </div>
                                            </label>
                                        </div>
                                        <div class="my-2 md:my-0 max-sm:mx-4 flex flex-col items-center justify-center">
                                            <p class="text-sm text-center lg:text-lg radio-label" data-value="3">Ragu-ragu</p>
                                        </div>
                                    </div>

                                    <div class="radio-tab flex flex-row lg:flex-col md:items-center">
                                        <div class="text-center flex items-center justify-center lg:mb-5">
                                            <label class="flex items-center cursor-pointer">
                                                <input type="radio" name="answer" value="4" class="peer hidden" />
                                                <div class="w-16 h-16 lg:w-16 lg:h-16 rounded-full border border-gray-300
                                                peer-checked:bg-primary peer-checked:text-white peer-checked:border-primary-alt
                                                transition flex items-center justify-center font-bold lg:text-2xl
                                                shadow-[0_0_10px_0_#3986A380]">
                                                4
                                            </div>
                                            </label>
                                        </div>
                                        <div class="my-2 md:my-0 max-sm:mx-4 flex flex-col items-center justify-center">
                                            <p class="text-sm text-center lg:text-lg radio-label" data-value="4">Sesuai</p>
                                        </div>
                                    </div>

                                    <div class="radio-tab flex flex-row lg:flex-col md:items-center">
                                        <div class="text-center flex items-center justify-center lg:mb-5">
                                            <label class="flex items-center cursor-pointer">
                                                <input type="radio" name="answer" value="5" class="peer hidden" />
                                                <div class="w-16 h-16 lg:w-16 lg:h-16 rounded-full border border-gray-300
                                                peer-checked:bg-primary peer-checked:text-white peer-checked:border-primary-alt
                                                transition flex items-center justify-center font-bold lg:text-2xl
                                                shadow-[0_0_10px_0_#3986A380]">
                                                5
                                            </div>
                                            </label>
                                        </div>
                                        <div class="my-2 md:my-0 max-sm:mx-4 flex flex-col items-center justify-center">
                                            <p class="text-sm text-center lg:text-lg radio-label" data-value="5">Sangat Sesuai</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="flex flex-col sm:flex-row text-sm justify-between mt-2 pl-10 sm:pl-0 md:max-w-[32rem]">
                                    <p>Sangat <br>tidak sesuai </p>
                                    <p>Sangat sesuai</p>
                                </div> -->
                            </div>
                            <div class="button-test flex flex-col-reverse md:flex-row justify-center mt-10 lg:mb-10">
                                <!-- <button class="rounded-xl border-primary border-3 mb-5 lg:mx-2 bg-gradient-to-tr from-[#3986A3] to-[#225062] bg-clip-text text-transparent px-10 lg:px-14 py-1.5 font-medium text-lg max-sm:text-[15px]">Kembali</button> -->
                                <button type="submit" class="rounded-xl bg-gradient-to-r mb-5 lg:mx-2 from-[#3986A3] to-[#225062] px-10 lg:px-14 py-1.5 font-medium text-white text-lg max-sm:text-[15px]">Selanjutnya</button>
                            </div>
                        </form>
                    <!-- </div> -->
                </div>
                <div class="1/3 lg:flex">
                    <div class="bg-white">
                        {{-- HERO IMG DESKTOP --}}
                        <div
                            class="absolute right-44 top-1/2 -translate-y-1/2"
                            style="width: 300px; height: 300px; border-radius: 50%; background: #A2D7F0CC; filter: blur(60px); opacity: 1; z-index: 0;"
                        ></div>
                        <img src="{{ asset('assets/images/psikotes/progress4.png') }}" alt="Ilustrasi-Test" class="w-[500px] h-[400px] hidden lg:block mt-24 scale-75" data-aos="fade-left" data-aos-duration="1500">
                        {{--  @if ($progress < 14) <img src="{{ asset('assets/images/psikotes/progress1.png') }}" alt="Ilustrasi-Test" class="w-[500px] h-[400px] hidden lg:block mt-24 scale-50" data-aos="fade-left" data-aos-duration="1500">
                            @elseif ($progress >= 14 && $progress < 34) <img src="{{ asset('assets/images/psikotes/progress2.png') }}" alt="Ilustrasi-Test" class="w-[500px] h-[400px] hidden lg:block mt-24 scale-50" data-aos="fade-left" data-aos-duration="1500">
                                @elseif ($progress >= 34 && $progress < 55) <img src="{{ asset('assets/images/psikotes/progress3.png') }}" alt="Ilustrasi-Test" class="w-[500px] h-[400px] hidden lg:block mt-24 scale-50" data-aos="fade-left" data-aos-duration="1500">
                                    @elseif ($progress >= 55 && $progress < 77) <img src="{{ asset('assets/images/psikotes/progress4.png') }}" alt="Ilustrasi-Test" class="w-[500px] h-[400px] hidden lg:block mt-24 scale-50" data-aos="fade-left" data-aos-duration="1500">
                                        @elseif ($progress >= 77 && $progress < 100) <img src="{{ asset('assets/images/psikotes/progress5.png') }}" alt="Ilustrasi-Test" class="w-[500px] h-[400px] hidden lg:block mt-24 scale-50" data-aos="fade-left" data-aos-duration="1500">
                                            @else
                                            <img src="{{ asset('assets/images/psikotes/progress6.png') }}" alt="Ilustrasi-Test" class="w-[500px] h-[400px] hidden lg:block mt-24 scale-50" data-aos="fade-left" data-aos-duration="1500">
                                            @endif --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.querySelectorAll('input[name="answer"]').forEach(radio => {
    radio.addEventListener('change', function() {
        // Reset semua label warna
        document.querySelectorAll('.radio-label').forEach(p => {
            p.classList.remove('text-primary');
        });

        // Cari SEMUA label dengan data-value sesuai value radio yang dipilih
        document.querySelectorAll('.radio-label[data-value="' + this.value + '"]').forEach(function(label) {
            label.classList.add('text-primary');
        });
    });
});
</script>
@endsection
