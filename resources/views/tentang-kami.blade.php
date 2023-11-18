@extends('layouts.main', [
    'title' => 'Tentang Kami | Berbinar Insightful Indonesia',
    'active' => 'Tentang Kami',
    'page' => 'Tentang Kami'
])

@section('content')
<!--========== HOME ==========-->
<section class="w-full mt-[20vh]" id="home">
    <div class="max-w-7xl mx-auto">
        <div class="home__data flex flex-col items-center">
            <h1 class="about__title text-center md:w-full w-[90%]">Tentang Berbinar Insightful Indonesia</h1>
            <p class="home__description md:w-[70%] w-[85%] text-center">
                Setiap individu mengalami episode yang sama di tahap kehidupannya. Inilah pentingnya seseorang memiliki pengetahuan seputar psikologi dan memahami dirinya sendiri. Berbinar hadir menawarkan layanan konseling bersama psikolog partner dan peer counselor untuk setiap individu yang sedang berjuang. Kami juga menawarkan layanan online yang bisa diakses dengan fleksibel, di mana pun Anda berada, karena apa yang Anda rasakan dan alami itu penting dan Anda berhak menjadi lebih baik lagi.
            </p>
            <a href="#share" class="button">Kenali Lebih Jauh</a>
        </div>   
    </div>
</section>

<!--========== SHARE ==========-->
<section class="w-full mt-[16vh]" id="share">
    <div class="max-w-5xl mx-auto flex gap-16 md:flex-row flex-col-reverse">
        <div class="share__data flex-1 md:px-0 px-5">
            <h2 class="text-[1.25rem] mb-[1.5rem] font-[600] text-left md:text-center">Visi & Misi<br> Berbinar Insightful Indonesia</h2>
            <div class="share__img flex-2 mx-auto md:hidden block">
                <img src="assets/img/vision-mision.svg" alt="">
            </div>
            <p class="share__description font-[600] text-[20px] text-left md:text-center">Visi</p>
            <p class="share__description text-left md:text-center">Terdepan dalam menyediakan fasilitas psikologi yang berkualitas, berintegritas, dan mudah diakses oleh seluruh kalangan masyarakat.</p>
            <p class="share__description font-[600] text-[20px] text-left md:text-center">Misi</p>
            <p class="share__description">
                <ul class="list-disc text-left ml-[2rem] md:ml-0">
                    <li>Memberikan layanan terstandar dan berkualitas tinggi yang sesuai dengan kebutuhan customer</li>
                    <li>Mengembangkan produk psikologi yang berlandaskan Kode Etik Psikologi Indonesia dan dijalankan oleh sumber daya manusia yang berintegritas</li>
                    <li>Menciptakan akses layanan yang mudah dijangkau oleh seluruh lapisan masyarakat dengan harga yang bersaing</li>
                </ul>
            </p>
        </div>

        <div class="share__img flex-2 mx-auto md:block hidden">
            <img src="{{ asset('assets/images/vision-mision.svg') }}" alt="">
        </div>
    </div>
</section>

<!--========== ACCESSORIES ==========-->
<section class="accessory section bd-container flex flex-col items-center" id="accessory">
   
    <div class="share__img my-10">
        <h2 class="section-title font-[600]">Nilai Berbinar Insighful Indonesia</h2>

        <img src="{{ asset('assets/images/values.svg') }}" class="my-8" alt="">
    </div>

    <div class="accessory__container bd-grid">
        <div class="accessory__content flex flex-col gap-3 justify-center py-4">
            <!-- <img src="assets/img/accessory1.png" alt="" class="accessory__img"> -->
            <h3 class="accessory__title w-[10rem] font-[600]">Honest</h3>
            <span class="accessory__category">Membangun kepercayaan dengan mengembangkan komunikasi dan hubungan yang jujur.</span>

            <a href="#" class="button accessory__button"><i class='bx bxs-leaf'></i></a>
        </div>

        <div class="accessory__content flex flex-col gap-3 justify-center py-4">
            <!-- <img src="assets/img/accessory5.png" alt="" class="accessory__img"> -->
            <h3 class="accessory__title w-[10rem] font-[600]">Empathetic</h3>
            <span class="accessory__category">Memahami orang lain, melihat sudut pandang orang tersebut, dan membayangkan berada di posisi orang tersebut.</span>
            
            <a href="#" class="button accessory__button"><i class='bx bxs-leaf'></i></a>
        </div>

        <div class="accessory__content flex flex-col gap-3 justify-center py-4">
            <!-- <img src="assets/img/accessory2.png" alt="" class="accessory__img"> -->
            <h3 class="accessory__title w-[10rem] font-[600]">Innovative</h3>
            <span class="accessory__category">Menciptakan ide, pemikiran, dan cara baru untuk diterapkan dalam pelaksanaan dan penyelesaian pekerjaan.</span>
            
            <a href="#" class="button accessory__button"><i class='bx bxs-leaf'></i></a>
        </div>

        <div class="accessory__content flex flex-col gap-3 justify-center py-4">
            <!-- <img src="assets/img/accessory3.png" alt="" class="accessory__img"> -->
            <h3 class="accessory__title w-[10rem] font-[600]">Learn and be Curious</h3>
            <span class="accessory__category">Mau untuk terus belajar untuk berkembang jadi lebih baik, dilandasi rasa ingin tahu yang tinggi.</span>
            
            <a href="#" class="button accessory__button"><i class='bx bxs-leaf'></i></a>
        </div>

        <div class="accessory__content flex flex-col gap-3 justify-center py-4">
            <!-- <img src="assets/img/accessory4.png" alt="" class="accessory__img"> -->
            <h3 class="accessory__title w-[10rem] font-[600]">Impactful</h3>
            <span class="accessory__category">Memberikan pengaruh positif untuk lingkungan sekitar dan tetap berlandaskan pada kode etik yang berlaku.</span>
           
            <a href="#" class="button accessory__button"><i class='bx bxs-leaf'></i></a>
        </div>

        <div class="accessory__content flex flex-col gap-3 justify-center py-4">
            <!-- <img src="assets/img/accessory4.png" alt="" class="accessory__img"> -->
            <h3 class="accessory__title w-[10rem] font-[600]">Initiative</h3>
            <span class="accessory__category">Memulai suatu tindakan yang selaras dengan tujuan organisasi, namun tetap sesuai dengan fungsi dan wewenangnya.</span>
           
            <a href="#" class="button accessory__button"><i class='bx bxs-leaf'></i></a>
        </div>

        <div class="accessory__content flex flex-col gap-3 justify-center py-4">
            <!-- <img src="assets/img/accessory4.png" alt="" class="accessory__img"> -->
            <h3 class="accessory__title w-[10rem] font-[600]">Collaborative</h3>
            <span class="accessory__category">Melakukan interaksi, komunikasi, dan diskusi dengan setiap individu dan kelompok, baik yang terlibat secara langsung maupun tidak langsung.</span>
           
            <a href="#" class="button accessory__button"><i class='bx bxs-leaf'></i></a>
        </div>

        <div class="accessory__content flex flex-col gap-3 justify-center py-4">
            <!-- <img src="assets/img/accessory4.png" alt="" class="accessory__img"> -->
            <h3 class="accessory__title w-[10rem] font-[600]">Customer Oriented</h3>
            <span class="accessory__category">Menjadikan kebutuhan konsumen sebagai dasar untuk merencanakan dan mendesain strategi bisnis.</span>
           
            <a href="#" class="button accessory__button"><i class='bx bxs-leaf'></i></a>
        </div>
    </div>
</section>

<section class="flex flex-col items-center" id="accessory">
   
    <div class="share__img">
        <h2 class="section-title font-[600]">Testimonial</h2>
    </div>

    <div class="flex-1 xl:mx-8 swiper mySwiper max-w-7xl md:w-full w-full mx-auto flex items-center justify-center">
        <div class="swiper-wrapper">
            @foreach($testimonials as $testimonial)
            <section class="p-6 swiper-slide">
                <div class="container max-w-xl mx-auto">
                    <div class="flex flex-col items-center w-full p-6 space-y-8 rounded-md lg:h-full lg:p-8 shadow-md">
                        <img src={{ $testimonial["image"] }} alt="" class="w-20 h-20 rounded-full dark:bg-gray-500 object-cover">
                        <blockquote class="max-w-lg text-lg italic font-medium text-center">"{{ $testimonial["testimonial"] }}"</blockquote>
                        <div class="text-center dark:text-gray-400">
                            <p>{{ $testimonial["name"] }}</p>
                            <p>{{ $testimonial["jabatan"] }} - {{ $testimonial["divisi"] }}</p>
                        </div>
                        <div class="flex space-x-2">
                            <button type="button" aria-label="Page 1" class="w-2 h-2 rounded-full dark:bg-gray-50"></button>
                            <button type="button" aria-label="Page 2" class="w-2 h-2 rounded-full dark:bg-gray-600"></button>
                            <button type="button" aria-label="Page 3" class="w-2 h-2 rounded-full dark:bg-gray-600"></button>
                            <button type="button" aria-label="Page 4" class="w-2 h-2 rounded-full dark:bg-gray-600"></button>
                        </div>
                    </div>
                </div>
            </section>
            @endforeach
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<!--========== SEND GIFT ==========-->
<section class="send section">
    <div class="send__container bd-container bd-grid">
        <div class="send__content">
            <h2 class="section-title-center send__title font-semibold">Hubungi Kami Sekarang</h2>
            <p class="send__description">Buat janji dan lakukan konseling dengan tim Berbinar Insightful Indonesia untuk layanan konseling online ataupun offline.</p>
            <form action="">
                <div class="send__direction">
                    <input type="text" placeholder="Email address" class="send__input">
                    <a href="#" class="button">Kirim</a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection