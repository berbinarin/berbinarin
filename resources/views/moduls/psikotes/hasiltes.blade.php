@extends('landing.layouts.app', [
'title' => 'Psikotest Berbinar',
'active' => 'Test',
'page' => 'Hasil Tes',
])
@section('content')
<sections>
    <div class="flex justify-center">
        <div class="flex flex-col mt-28 lg:mt-36 items-center justify-center t-container z-38 w-full p-[22px]">
            <div class="quest-container w-full lg:w-[95%] shadow-xl bg-white justify-center rounded-3xl mb-6 lg:mb-12 p-5 lg:px-16">
                <div class="flex flex-row justify-center items-center">
                    {{-- HERO IMG DESKTOP --}}
                    <!-- <img src="{{ asset('assets/images/psikotes/result.png') }}" alt="Ilustrasi-Test" class="w-[335px] h-[335px] hidden lg:block -
                    mt-5" data-aos="fade-left" data-aos-duration="1500"> -->

                    <div class="bg-white rounded-3xl p-5 mx-5">
                        <!-- Judul "Hasil Psikotes" -->
                        <h2 class="text-center text-4xl bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text text-transparent font-bold mb-1">Hasil Test</h2>
                        <!-- Paragraf -->
                    </div>
                </div>

                <div>
                    <p class="text-black font-semibold text-base lg:text-lg mt-3 lg:mb-12">
                        Hasil tes dibawah ini berdasarkan jawaban dari pernyataan yang telah SobatBinar jawab
                    </p>

                    <div class="w-full h-full mb-5 gap-5">
                        <!-- Container untuk diagram -->
                        <!-- <canvas id="chart" style="width:100%;max-width:700px"></canvas> -->
                        <div class="progress mb-1 flex flex-col">
                            <div class="lg:text-lg w-48">Extraversion</div>
                            <div class="flex flex-row">
                                <div class="progress-bar w-[20px] h-5 my-3 bg-[#163641] rounded-full text-[13px] text-end" role="progressbar" style="width: {{ 78 }}%;" aria-valuenow="{{ 78 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                <p class="mt-2 ml-10 lg:text-lg"> {{ round(78) }}%</p>
                            </div>
                        </div>
                        <div class="progress mb-1 flex flex-col">
                            <div class="lg:text-lg w-48">Conscientiousness</div>
                            <div class="flex flex-row">
                                <div class="progress-bar w-[20px] h-5 my-3 bg-[#225062] rounded-full text-[13px] text-end" role="progressbar" style="width: {{ 87 }}%;" aria-valuenow="{{ 87 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                <p class="mt-2 ml-10 lg:text-lg"> {{ round(87) }}%</p>
                            </div>
                        </div>
                        <div class="progress mb-1 flex flex-col">
                            <div class="lg:text-lg w-48">Agreeableness</div>
                            <div class="flex flex-row">
                                <div div class="progress-bar w-[20px] h-5 my-3 bg-[#3986A3] rounded-full text-[13px] text-end" role="progressbar" style="width: {{ 50 }}%;" aria-valuenow="{{ 50 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                <p class="mt-2 ml-10 lg:text-lg"> {{ round(50) }}%</p>
                            </div>
                        </div>
                        <div class="progress mb-1 flex flex-col">
                            <div class="lg:text-lg w-48">Openness</div>
                            <div class="flex flex-row">
                                <div class="progress-bar w-[20px] h-5 my-3 bg-[#76BBD5] rounded-full text-[13px] text-end" role="progressbar" style="width: {{ 76 }}%;" aria-valuenow="{{ 76 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                <p class="mt-2 ml-10 lg:text-lg"> {{ round(76) }}%</p>
                            </div>
                        </div>
                        <div class="progress mb-1 flex flex-col">
                            <div class="lg:text-lg w-48">Neuroticism</div>
                            <div class="flex flex-row">
                                <div class="progress-bar w-[20px] h-5 my-3 bg-[#97CBDF] rounded-full text-[13px] text-end" role="progressbar" style="width: {{ 87 }}%;" aria-valuenow="{{ 87 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                <p class="mt-2 ml-10 lg:text-lg"> {{ round(87) }}%</p>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="flex flex-col w-full md:flex-row gap-5 justify-end items-end">
                        <form action="{{ route('product.psikotest.index') }}" method="GET">
                            @csrf
                            <button type="submit" class="mr-3 md:mr-5 text-xl text-white bg-primary rounded-full font-semibold border-3 border-white hover:border-amber-300 hover:bg-amber-300 hover:text-primary hover:font-semibold duration-500 px-10 py-2.5 w-fit">
                                Beranda
                            </button>
                        </form>
                    </div> -->

                </div>
            </div>


            <div class="w-[95%] flex justify-between gap-[3%] mb-12 max-sm:hidden">

                <div class="bg-white rounded-3xl shadow-xl px-8 pb-8">
                    <p class="text-center text-base lg:text-2xl font-semibold mt-8 mb-1"><span class="">Extraversion </span></p>
                    <p class="text-center text-[#333333] mb-2">Terbuka Terhadap Hal-hal Baru</p>
                    <hr class="w-full justify-self-center">
                    <p class="text-justify text-base lg:text-lg leading-relaxed mt-4">
                        Dimensi Kepribadian Openness to Experience ini mengkategorikan individu
                        berdasarkan ketertarikannya terhadap hal-hal baru dan keinginan
                        untuk mengetahui serta mempelajari sesuatu yang baru.
                    </p>
                </div>

                <div class="bg-white rounded-3xl shadow-xl px-8 pb-8">
                    <p class="text-center text-base lg:text-2xl font-semibold mt-8 mb-1"><span class="">Conscientiousness </span></p>
                    <p class="text-center text-[#333333] mb-2">Terbuka Terhadap Hal-hal Baru</p>
                    <hr class="w-full justify-self-center">
                    <p class="text-justify text-base lg:text-lg leading-relaxed mt-4">
                        Dimensi Kepribadian Openness to Experience ini mengkategorikan individu
                        berdasarkan ketertarikannya terhadap hal-hal baru dan keinginan
                        untuk mengetahui serta mempelajari sesuatu yang baru.
                    </p>
                </div>

            </div>


            <div class="w-[95%] flex justify-between gap-[3%] mb-12 max-sm:hidden">

                <div class="bg-white rounded-3xl shadow-xl px-8 pb-8">
                    <p class="text-center text-base lg:text-2xl font-semibold mt-8 mb-1"><span class="">Agreeableness </span></p>
                    <p class="text-center text-[#333333] mb-2">Terbuka Terhadap Hal-hal Baru</p>
                    <hr class="w-full justify-self-center">
                    <p class="text-justify text-base lg:text-lg leading-relaxed mt-4">
                        Dimensi Kepribadian Openness to Experience ini mengkategorikan individu
                        berdasarkan ketertarikannya terhadap hal-hal baru dan keinginan
                        untuk mengetahui serta mempelajari sesuatu yang baru.
                    </p>
                </div>

                <div class="bg-white rounded-3xl shadow-xl px-8 pb-8">
                    <p class="text-center text-base lg:text-2xl font-semibold mt-8 mb-1"><span class="">Openness </span></p>
                    <p class="text-center text-[#333333] mb-2">Terbuka Terhadap Hal-hal Baru</p>
                    <hr class="w-full justify-self-center">
                    <p class="text-justify text-base lg:text-lg leading-relaxed mt-4">
                        Dimensi Kepribadian Openness to Experience ini mengkategorikan individu
                        berdasarkan ketertarikannya terhadap hal-hal baru dan keinginan
                        untuk mengetahui serta mempelajari sesuatu yang baru.
                    </p>
                </div>

                <div class="bg-white rounded-3xl shadow-xl px-8 pb-8">
                    <p class="text-center text-base lg:text-2xl font-semibold mt-8 mb-1"><span class="">Neuroticism </span></p>
                    <p class="text-center text-[#333333] mb-2">Terbuka Terhadap Hal-hal Baru</p>
                    <hr class="w-full justify-self-center">
                    <p class="text-justify text-base lg:text-lg leading-relaxed mt-4">
                        Dimensi Kepribadian Openness to Experience ini mengkategorikan individu
                        berdasarkan ketertarikannya terhadap hal-hal baru dan keinginan
                        untuk mengetahui serta mempelajari sesuatu yang baru.
                    </p>
                </div>

            </div>




            <div class="w-full hidden max-w-md mx-auto max-sm:flex">
                <div class="relative bg-white rounded-3xl shadow-xl overflow-hidden">

                    <!-- Panel Container (Slider Track) -->
                    <div id="slider-panels" class="flex transition-transform duration-300 ease-in-out touch-pan-x no-scroll-bounce">
                        <!-- Panel 1 -->
                        <div class="min-w-full flex flex-col items-center px-4 justify-center text-xl bg-white">
                            <p class="text-center text-xl font-semibold mt-8 mb-1">Extraversion</p>
                            <p class="text-center text-[#333333] mb-2">Terbuka Terhadap Hal-hal Baru</p>
                            <hr class="w-full justify-self-center">
                            <p class="text-justify text-base leading-relaxed mt-4">
                                Dimensi Kepribadian Openness to Experience ini mengkategorikan individu
                                berdasarkan ketertarikannya terhadap hal-hal baru dan keinginan
                                untuk mengetahui serta mempelajari sesuatu yang baru.
                            </p>

                        </div>

                        <!-- Panel 2 -->
                        <div class="min-w-full flex flex-col items-center px-4 justify-center text-xl bg-white">
                            <p class="text-center text-xl font-semibold mt-8 mb-1">Conscientiousness</p>
                            <p class="text-center text-[#333333] mb-2">Terbuka Terhadap Hal-hal Baru</p>
                            <hr class="w-full justify-self-center">
                            <p class="text-justify text-base leading-relaxed mt-4">
                                Dimensi Kepribadian Openness to Experience ini mengkategorikan individu
                                berdasarkan ketertarikannya terhadap hal-hal baru dan keinginan
                                untuk mengetahui serta mempelajari sesuatu yang baru.
                            </p>

                        </div>

                        <!-- Panel 3 -->
                        <div class="min-w-full flex flex-col items-center px-4 justify-center text-xl bg-white">
                            <p class="text-center text-xl font-semibold mt-8 mb-1">Agreeableness</p>
                            <p class="text-center text-[#333333] mb-2">Terbuka Terhadap Hal-hal Baru</p>
                            <hr class="w-full justify-self-center">
                            <p class="text-justify text-base leading-relaxed mt-4">
                                Dimensi Kepribadian Openness to Experience ini mengkategorikan individu
                                berdasarkan ketertarikannya terhadap hal-hal baru dan keinginan
                                untuk mengetahui serta mempelajari sesuatu yang baru.
                            </p>

                        </div>

                        <!-- Panel 4 -->
                        <div class="min-w-full flex flex-col items-center px-4 justify-center text-xl bg-white">
                            <p class="text-center text-xl font-semibold mt-8 mb-1">Openness</p>
                            <p class="text-center text-[#333333] mb-2">Terbuka Terhadap Hal-hal Baru</p>
                            <hr class="w-full justify-self-center">
                            <p class="text-justify text-base leading-relaxed mt-4">
                                Dimensi Kepribadian Openness to Experience ini mengkategorikan individu
                                berdasarkan ketertarikannya terhadap hal-hal baru dan keinginan
                                untuk mengetahui serta mempelajari sesuatu yang baru.
                            </p>

                        </div>

                        <!-- Panel 5 -->
                        <div class="min-w-full flex flex-col items-center px-4 justify-center text-xl bg-white">
                            <p class="text-center text-xl font-semibold mt-8 mb-1">Neuroticism</p>
                            <p class="text-center text-[#333333] mb-2">Terbuka Terhadap Hal-hal Baru</p>
                            <hr class="w-full justify-self-center">
                            <p class="text-justify text-base leading-relaxed mt-4">
                                Dimensi Kepribadian Openness to Experience ini mengkategorikan individu
                                berdasarkan ketertarikannya terhadap hal-hal baru dan keinginan
                                untuk mengetahui serta mempelajari sesuatu yang baru.
                            </p>

                        </div>
                    </div>

                    <!-- Tombol Navigasi -->
                    <div class="flex justify-between mt-4 p-4">
                        <button id="prevBtn" class="bg-primary text-white px-4 py-2 rounded hover:bg-primary-alt transition">
                        ←
                        </button>
                        <button id="nextBtn" class="bg-primary text-white px-4 py-2 rounded hover:bg-primary-alt transition">
                        →
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</sections>

<script>
        const slider = document.getElementById('slider-panels');
    const panels = slider.children;
    const totalPanels = panels.length;
    let currentIndex = 0;

    function updateSlider() {
      slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    document.getElementById('prevBtn').addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + totalPanels) % totalPanels;
      updateSlider();
    });

    document.getElementById('nextBtn').addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % totalPanels;
      updateSlider();
    });

    // Swipe gesture
    let startX = 0;
    let endX = 0;

    slider.addEventListener('touchstart', (e) => {
      startX = e.touches[0].clientX;
    });

    slider.addEventListener('touchmove', (e) => {
      endX = e.touches[0].clientX;
    });

    slider.addEventListener('touchend', () => {
      const diffX = startX - endX;
      if (Math.abs(diffX) > 50) { // minimal swipe distance
        if (diffX > 0) {
          // Swipe left → next
          currentIndex = (currentIndex + 1) % totalPanels;
        } else {
          // Swipe right → prev
          currentIndex = (currentIndex - 1 + totalPanels) % totalPanels;
        }
        updateSlider();
      }
      startX = 0;
      endX = 0;
    });

    updateSlider(); // Initialize position
</script>
@endsection
