@extends('layouts.main', [
    'title' => 'Kelas | Berbinar Insightful Indonesia',
    'active' => 'Kelas',
    'page' => 'Kelas',
])

@section('content')
<!--========== HOME ==========-->
<section class="w-full mt-[20vh]" id="home">
    <div class="max-w-7xl mx-auto">
        <div class="home__data flex flex-col items-center">
            <div class="mb-12">
                <h1 class="about__title text-center">Kelas Berbinar</h1>
                <div class="share__img flex-2 mx-auto w-full flex items-center my-10 justify-center">
                    <img src="{{ asset('assets/images/kelas.svg') }}" alt="" class="w-[20rem]">
                </div>
            </div>
            
            <p class="home__description md:w-[70%] w-[92%] text-center -mt-10">
                Dengan mengikuti kelas dari Berbinar, Anda dapat meningkatkan soft skill dan hard skill yang dimiliki untuk meningkatkan kemampuan bersaing. Webinar dapat memperluas wawasan keilmuan dan keterampilan yang berasal dari ahli yang sudah
                berpengalaman di bidangnya.
            </p>

            <a href="#" class="button">Lihat Produk</a>
        </div>   
    </div>
</section>

<section class="accessory section bd-container mb-8" id="accessory">
    <h2 class="section-title font-semibold">Produk Pilihan Terbaik<br>Kelas Berbinar</h2>

    <div class="accessory__container bd-grid">
        <div data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="accessory__content hover:cursor-pointer flex flex-col gap-3 justify-center py-8 pt-12 text-center" style="padding-top: 1.5rem !important;">
            <!-- <img src="assets/img/accessory1.png" alt="" class="accessory__img"> -->
            <h3 class="accessory__title w-[10rem] font-[600] mt-5">Webinar</h3>
            <span class="accessory__category">Memperluas wawasan keilmuan dan keterampilan yang berasal dari ahli.</span>
            
            <a href="#" class="button accessory__button"><i class='bx bx-right-arrow-alt'></i></a>
        </div>

        <div class="accessory__content hover:cursor-pointer flex flex-col gap-3 justify-center py-8 pt-12 text-center">
            <!-- <img src="assets/img/accessory5.png" alt="" class="accessory__img"> -->
            <h3 class="accessory__title w-[10rem] font-[600]">Bisikan (Live Instagram)</h3>
            <span class="accessory__category">Sharing session terkait psikologi lewat instagram Berbinar.</span>
            
            <a href="#" class="button accessory__button"><i class='bx bx-right-arrow-alt'></i></a>
        </div>

        <div class="accessory__content hover:cursor-pointer flex flex-col gap-3 justify-center py-8 pt-12 text-center">
            <!-- <img src="assets/img/accessory2.png" alt="" class="accessory__img"> -->
            <h3 class="accessory__title w-[10rem] font-[600]">Berbinar+</h3>
            <span class="accessory__category">Bundling package dimana customer bisa menggunakan produk kelas, konseling, dan psikotes.</span>
            
            <a href="#" class="button accessory__button"><i class='bx bx-right-arrow-alt'></i></a>
        </div>
    </div>
</section>

<section class="w-full mb-[6rem]" id="home">
    <div class="max-w-3xl mx-auto">
        <div class="home__data flex flex-col items-center">
            <div class="">
                <h2 class="section-title-center font-semibold">Frequently Asked Question (FAQ)</h2>
            </div>
            
            <ul class="flex flex-col">
                <li class="border rounded-lg my-2" x-data="accordion(1)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Durasi kelasnya berapa lama?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3aadcb] text-[#3aadcb] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    x-ref="tab"
                    :style="handleToggle()"
                    class="border-l-2 border-[#3aadcb] overflow-hidden max-h-0 duration-500 transition-all"
                  >
                    <p class="p-3 text-gray-900">
                      Peserta diberikan waktu sekitar ± 7 hari untuk menyelesaikan seluruh rangkaian kelas BERBINAR+. Apabila peserta melanjutkan ke layanan konseling dan psikotes, akan ada informasi lebih lanjut.
                    </p>
                  </div>
                </li>

                <li class="border border-[#3aadcb] rounded-lg my-2" x-data="accordion(2)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Apakah boleh ikut lebih dari satu kelas?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3aadcb] text-[#3aadcb] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3aadcb] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                      Boleh banget! Setiap peserta diperbolehkan untuk memilih lebih dari satu kelas sesuai dengan bidang yang menjadi ketertarikan untuk dipelajari.
                    </p>
                  </div>
                </li>

                <li class="border rounded-lg my-2" x-data="accordion(3)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Apakah nanti akan mendapatkan sertifikat?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3aadcb] text-[#3aadcb] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3aadcb] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                      Pasti! Peserta dapat melakukan klaim sertifikat setelah menyelesaikan rangkaian kelas BERBINAR+. Sertifikat ini dapat digunakan sebagai dokumen pendukung CV sekaligus menjadi portofolio building.
                    </p>
                  </div>
                </li>

                <li class="border border-[#3aadcb] rounded-lg my-2" x-data="accordion(4)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Apakah bisa terhubung dengan narasumbernya juga?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3aadcb] text-[#3aadcb] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3aadcb] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                      Bisa, dong. BERBINAR+ menyediakan wadah personal mentoring dimana peserta mendapatkan kesempatan untuk melakukan sesi tanya jawab bersama mentor sesuai dengan bidang kelas yang diambil.
                    </p>
                  </div>
                </li>

                <li class="border rounded-lg my-2" x-data="accordion(5)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Proses pembelajarannya ribet gak, ya?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3aadcb] text-[#3aadcb] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3aadcb] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                      Mudah, kok! Peserta bisa akses video pembelajarannya kapanpun dan dimanapun. Peserta hanya perlu melalui proses berikut:<br>
                      1. Selesaikan video pembelajaran dan mengisi post-test.<br>
                      2. Melakukan personal mentoring bersama mentor.<br>
                      3. Klaim sertifikat dan peserta dapat memilih untuk lanjut ke layanan konseling dan psikotes.                                  
                    </p>
                  </div>
                </li>

                <li class="border rounded-lg my-2" x-data="accordion(6)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span> Kalau mau upgrade ke konseling dan psikotes gimana ya?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3aadcb] text-[#3aadcb] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3aadcb] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                      Peserta dapat berkomunikasi dengan narahubung untuk proses upgrade layanan. Setelah itu, akan ada arahan dan informasi lebih lanjut.                               
                    </p>
                  </div>
                </li>

                <li class="border rounded-lg my-2" x-data="accordion(7)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Kalau mau mengetahui informasi lebih lanjut secara lebih rincinya gimana ya?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3aadcb] text-[#3aadcb] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3aadcb] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                      Peserta dapat mengunjungi linktr.ee/BerbinarPlus atau menghubungi narahubung melalui whatsapp dengan nomor 0813-1435-4623 (Wulan).                                
                    </p>
                  </div>
                </li>
              </ul>
        </div>   
    </div>
</section>

<!--========== SEND GIFT ==========-->
<section class="send section">
    <div class="send__container bd-container bd-grid">
        <div class="send__content">
            <h2 class="section-title-center send__title font-[600]">Hubungi Kami Sekarang</h2>
            <p class="send__description">Buat janji dan lakukan konseling dengan tim Berbinar Insightful Indonesia untuk layanan konseling online ataupun offline.</p>
            <form action="">
                <div class="send__direction">
                    <input type="text" placeholder="Email address" class="send__input">
                    <a href="#" class="button">Kirim</a>
                </div>
            </form>
        </div>

        <!-- <div class="send__img w-[20rem]">
            <img src="assets/img/chatting.svg" class="w-[20rem]" alt="">
        </div> -->
    </div>
</section>
@endsection