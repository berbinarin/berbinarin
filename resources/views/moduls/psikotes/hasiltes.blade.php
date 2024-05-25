@extends('moduls.psikotes.layouts.main', [
    'title' => 'Psikotest Berbinar',
    'active' => 'Test',
    'page' => 'Hasil Tes',
])

@section('content')

<sections>
    <div class="flex justify-center">
        <div class="bg-primary items-center t-container z-38 w-full p-[30px]">
            <div class="quest-container w-full bg-white justify-center rounded-3xl p-5">
                    <div class="flex flex-row justify-center items-center">
                        {{-- HERO IMG DESKTOP --}}
                        <!-- <img src="{{ asset('assets/images/psikotes/result.png') }}" alt="Ilustrasi-Test" class="w-[335px] h-[335px] hidden lg:block -
                    mt-5" data-aos="fade-left" data-aos-duration="1500"> -->

                        <div class="bg-white rounded-3xl p-5 mx-5">
                            <!-- Judul "Hasil Psikotes" -->
                            <h2 class="text-center text-4xl text-black font-bold mb-1">Hasil Tes</h2>
                            <!-- Paragraf -->
                            <p class="text-center text-disabled text-base mt-3">Hasil tes dibawah ini berdasarkan
                                jawaban
                                <br> dari pertanyaan yang telah SobatBinar jawab
                            </p>
                        </div>
                    </div>

                <div class="flex flex-col md:flex-row w-full h-full mb-5 gap-5">
                    <!-- Container untuk diagram -->
                    <div class="float-left md:w-3/5 h-fit p-5 md:p-7 m-0 md:m-5 bg-sky-100 rounded-3xl font-semibold">
                        <!-- <canvas id="chart" style="width:100%;max-width:700px"></canvas> -->
                        <div class="progress mb-4 flex flex-col md:flex-row">
                            <div class="my-2 w-48">Agreeableness</div>
                            <div class="progress-bar w-[20px] h-5 my-3 bg-[#FA933C] rounded-full text-[13px] text-end" role="progressbar" style="width: {{ $result->agreeableness }}%;" aria-valuenow="{{ $result->agreeableness }}" aria-valuemin="0" aria-valuemax="100"><span class="mr-3">
                                    {{ round($result->agreeableness) }}%</span>
                            </div>
                        </div>
                        <div class="progress mb-4 flex flex-col md:flex-row">
                            <div class="my-2 w-48">Conscientiousness</div>
                            <div class="progress-bar w-[20px] h-5 my-3 bg-[#FBB03B] rounded-full text-[13px] text-end" role="progressbar" style="width: {{ $result->conscientiousness }}%;" aria-valuenow="{{ $result->conscientiousness }}" aria-valuemin="0" aria-valuemax="100">
                                <span class="mr-3">
                                    {{ round($result->conscientiousness) }}%</span>

                            </div>
                            <div class="progress mb-4 flex flex-col md:flex-row">


                            <div class="my-2 w-48">Extraversion</div>
                            <div class="progress-bar w-[20px] h-5 my-3 bg-[#FADF3C] rounded-full text-[13px] text-end" role="progressbar" style="width: {{ $result->extraversion }}%;" aria-valuenow="{{ $result->extraversion }}" aria-valuemin="0" aria-valuemax="100"><span class="mr-3">
                                    {{ round($result->extraversion) }}%</span>
                            </div>
                        </div>
                        <div class="progress mb-4 flex flex-col md:flex-row">
                            <div class="my-2 w-48">Neuroticism</div>
                            <div class="progress-bar w-[20px] h-5 my-3 bg-[#FAD18F] rounded-full text-[13px] text-end" role="progressbar" style="width: {{ $result->neuroticism }}%;" aria-valuenow="{{ $result->neuroticism }}" aria-valuemin="0" aria-valuemax="100"><span class="mr-3">
                                    {{ round($result->neuroticism) }}%</span>
                            </div>
                        </div>
                        <div class="progress mb-0 md:mb-4 flex flex-col md:flex-row">
                            <div class="my-2 w-48">Openness</div>
                            <div class="progress-bar w-[20px] h-5 my-3 bg-[#FA713C] rounded-full text-[13px] text-end" role="progressbar" style="width: {{ $result->openness }}%;" aria-valuenow="{{ $result->openness }}" aria-valuemin="0" aria-valuemax="100"><span class="mr-3">
                                    {{ round($result->openness) }}%</span>
                            </div>

                        </div>

                    <!-- Konten Hasil Psikotes -->
                    <div id="indicators-carousel" class="relative h-fit md:h-full bg-sky-100 rounded-3xl md:w-2/5 m-0 md:m-5 px-5 pt-5 pb-12 md:p-5" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 mb-3 overflow-hidden rounded-lg md:h-[19rem]">
                            <!-- item 1 -->
                            <div class="hidden duration-700 ease-in-out overflow-auto" data-carousel-item="active">
                                <h2 class="text-xl font-bold mt-2 mb-5 text-center">Uraian Hasil Tes</h2>
                                <p class="text-center text-base font-semibold mt-6 mb-5">
                                    <span class="italic">Openness </span><br />(Terbuka terhadap hal-hal baru)
                                </p>
                                <p class="text-justify text-base leading-relaxed mt-5 mx-4">
                                    Dimensi kepribadian <span class="italic">Openness to Experience</span> ini
                                    mengkategorikan individu berdasarkan
                                    ketertarikannya terhadap hal-hal baru dan keinginan untuk mengetahui clas serta
                                    mempelajari sesuatu yang baru.
                                </p>

                                </div>
                                <!-- item 2 -->
                                <div class="hidden duration-700 ease-in-out overflow-auto" data-carousel-item>
                                    <h2 class="text-xl font-bold mt-2 mb-5 text-center">Uraian Hasil Tes</h2>
                                    <p class="text-center text-base font-semibold mt-6 mb-5">
                                        <span class="italic">Conscientiousness </span><br />(Sifat berhati-hati)
                                    </p>
                                    <p class="text-justify text-base leading-relaxed mt-5 mx-4">
                                        Dimensi kepribadian <span class="italic">Conscientiousness</span> cenderung
                                        lebih berhati-hati dalam melakukan suatu
                                        tindakan ataupun penuh pertimbangan dalam mengambil sebuah keputusan, mereka
                                        juga memiliki disiplin diri yang tinggi dan
                                        dapat dipercaya.
                                    </p>
                                </div>
                                <!-- item 3 -->
                                <div class="hidden duration-700 ease-in-out overflow-auto" data-carousel-item>
                                    <h2 class="text-xl font-bold mt-2 mb-5 text-center">Uraian Hasil Tes</h2>
                                    <p class="text-center text-base font-semibold mt-6 mb-5"><span
                                            class="italic">Extraversion
                                        </span><br />(Ekstraversi)</p>
                                    <p class="text-justify text-base leading-relaxed mt-5 mx-4">
                                        Dimensi kepribadian <span class="italic">Extraversion</span> ini berkaitan
                                        dengan tingkat kenyamanan seseorang dalam
                                        berinteraksi dengan orang lain.
                                    </p>
                                </div>
                                <!--item 4 -->
                                <div class="hidden duration-700 ease-in-out overflow-auto" data-carousel-item>
                                    <h2 class="text-xl font-bold mt-2 mb-5 text-center">Uraian Hasil Tes</h2>
                                    <p class="text-center text-base font-semibold mt-6 mb-5">
                                        <span class="italic">Agreeableness </span><br />(Mudah akur atau mudah
                                        bersepakat)
                                    </p>
                                    <p class="text-justify text-base leading-relaxed mt-5 mx-4">
                                        Individu yang berdimensi <span class="italic">Agreeableness</span> ini cenderung
                                        lebih patuh dengan individu lainya dan
                                        memiliki kepribadian yang ingin menghindari konflik.
                                    </p>
                                </div>
                                <!-- item 5 -->
                                <div class="hidden duration-700 ease-in-out overflow-auto" data-carousel-item>
                                    <h2 class="text-xl font-bold mt-2 mb-5 text-center">Uraian Hasil Tes</h2>
                                    <p class="text-center text-base font-semibold mt-6 mb-5"><span
                                            class="italic">Neuroticism
                                        </span><br />(Neurotisme)</p>
                                    <p class="text-justify text-base leading-relaxed mt-5 mx-4">
                                        <span class="italic">Neuroticism</span> adalah dimensi kepribadian yang menilai
                                        kemampuan seseorang dalam menahan tekanan
                                        atau stress.
                                    </p>
                                </div>
                            </div>

                            <!-- item 2 -->
                            <div class="hidden duration-700 ease-in-out overflow-auto" data-carousel-item>
                                <h2 class="text-xl font-bold mt-2 mb-5 text-center">Uraian Hasil Tes</h2>
                                <p class="text-center text-base font-semibold mt-6 mb-5">
                                    <span class="italic">Conscientiousness </span><br />(Sifat berhati-hati)
                                </p>
                                <p class="text-justify text-base leading-relaxed mt-5 mx-4">
                                    Dimensi kepribadian <span class="italic">Conscientiousness</span> cenderung
                                    lebih berhati-hati dalam melakukan suatu
                                    tindakan ataupun penuh pertimbangan dalam mengambil sebuah keputusan, mereka
                                    juga memiliki disiplin diri yang tinggi dan
                                    dapat dipercaya.
                                </p>
                            </div>
                            <!-- item 3 -->
                            <div class="hidden duration-700 ease-in-out overflow-auto" data-carousel-item>
                                <h2 class="text-xl font-bold mt-2 mb-5 text-center">Uraian Hasil Tes</h2>
                                <p class="text-center text-base font-semibold mt-6 mb-5"><span class="italic">Extraversion
                                    </span><br />(Ekstraversi)</p>
                                <p class="text-justify text-base leading-relaxed mt-5 mx-4">
                                    Dimensi kepribadian <span class="italic">Extraversion</span> ini berkaitan
                                    dengan tingkat kenyamanan seseorang dalam
                                    berinteraksi dengan orang lain.
                                </p>
                            </div>
                            <!--item 4 -->
                            <div class="hidden duration-700 ease-in-out overflow-auto" data-carousel-item>
                                <h2 class="text-xl font-bold mt-2 mb-5 text-center">Uraian Hasil Tes</h2>
                                <p class="text-center text-base font-semibold mt-6 mb-5">
                                    <span class="italic">Agreeableness </span><br />(Mudah akur atau mudah
                                    bersepakat)
                                </p>
                                <p class="text-justify text-base leading-relaxed mt-5 mx-4">
                                    Individu yang berdimensi <span class="italic">Agreeableness</span> ini cenderung
                                    lebih patuh dengan individu lainya dan
                                    memiliki kepribadian yang ingin menghindari konflik.
                                </p>
                            </div>
                            <!-- item 5 -->
                            <div class="hidden duration-700 ease-in-out overflow-auto" data-carousel-item>
                                <h2 class="text-xl font-bold mt-2 mb-5 text-center">Uraian Hasil Tes</h2>
                                <p class="text-center text-base font-semibold mt-6 mb-5"><span class="italic">Neuroticism
                                    </span><br />(Neurotisme)</p>
                                <p class="text-justify text-base leading-relaxed mt-5 mx-4">
                                    <span class="italic">Neuroticism</span> adalah dimensi kepribadian yang menilai
                                    kemampuan seseorang dalam menahan tekanan
                                    atau stress.
                                </p>
                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                class="absolute top-0 start-0 z-30 flex items-end justify-center h-full pb-4 pl-7 cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex items-center justify-center w-7 h-7 rounded-full dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-amber-300 group-focus:ring-2 group-focus:ring-primary group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="absolute top-0 end-0 z-30 flex items-end justify-center h-full pb-4 pr-7 cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="inline-flex items-center justify-center w-7 h-7 rounded-full dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-amber-300 group-focus:ring-2 group-focus:ring-primary group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>
                        
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full bg-white/50" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 start-0 z-30 flex items-end justify-center h-full pb-4 pl-7 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-7 h-7 rounded-full dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-amber-300 group-focus:ring-2 group-focus:ring-primary group-focus:outline-none">
                                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-30 flex items-end justify-center h-full pb-4 pr-7 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-7 h-7 rounded-full dark:bg-gray-800/30 group-hover:bg-amber-300/50 dark:group-hover:bg-amber-300 group-focus:ring-2 group-focus:ring-primary group-focus:outline-none">
                                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col w-full md:flex-row gap-5 justify-end items-end">
                    <form action="{{ route('result.finishTest', ['test_id' => $test->id, 'user_id' => $user->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="mr-3 md:mr-5 text-xl text-white bg-primary rounded-full font-semibold border-3 border-white hover:border-amber-300 hover:bg-amber-300 hover:text-primary hover:font-semibold duration-500 px-10 py-2.5 w-fit">Beranda</button>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </sections>
@endsection
