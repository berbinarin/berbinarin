@extends('layouts.main', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Home',
    'page' => 'Home',
])

@section('content')
<!--========== HOME ==========-->
<section class="home md:mt-0 mt-15" id="home">
    <div class="home__container bd-container flex flex-col md:flex-row items-center md:items-start justify-center md:justify-start">
        <div class="home__img w-full md:w-fit" data-aos="fade-left" data-aos-duration="1500">
            <img src="{{ asset('assets/images/logo-berbinar.png') }}" alt="Logo Berbinar Insightful Indonesia" title="Logo Berbinar Insightful Indonesia" class="md:w-[500px]">
        </div>

        <div class="home__data flex flex-col items-center justify-center md:items-start md:justify-start md:flex-1" data-aos="fade-right" data-aos-duration="1500">
            <h1 class="home__title md:w-full w-[25rem] md:text-[2.5rem] text-[2.3rem] text-center md:text-left">Edukasi & Layanan Psikologi</h1>
            <p class="home__description text-center md:text-left">Berbinar hadir menawarkan layanan konseling bersama psikolog partner dan peer counselor untuk setiap individu yang sedang berjuang.</p>
            <a href="https://bit.ly/CounselingWithBerbinar" target="_blank" class="button">Lakukan Konseling</a>
        </div>   
    </div>
</section>

<!--========== ABOUT BERBINAR ==========-->
<section class="flex flex-col md:flex-row gap-5 px-5 py-16 relative md:max-w-6xl md:mx-auto mt-16">
    <div class="flex flex-col gap-5 md:items-center md:justify-center">
      <h2 class="text-4xl md:text-[30px] md:text-center md:leading-[60px] font-semibold">{{ $whySection["title"] }}</h2>
      <p class="home__description text-center">{{ $whySection["description"] }}</p>
      <a href="/produk-berbinar" target="_blank" class="button">Lihat Produk Berbinar</a>

      <div class="flex flex-row gap-6 mt-8">
        @foreach ($whySection["achievements"] as $achievement)
        <div class='text-center flex flex-col gap-3 items-center justify-center'>
            <h3 class='text-4xl font-semibold flex items-center justify-center'>{{ $achievement["count"] }}<span class='text-3xl text-primary-yellow'></h3>
            <p class='text-base font-medium'>{{ $achievement["name"] }}</p>
          </div>
        @endforeach
      </div>

      <a href="https://youtu.be/UlPJY2q4m1g" class="w-full h-full mt-10 block">
        <img 
        src="{{ asset('assets/images/why-section.png') }}"
        alt="Kenapa Harus Memilih Berbinar Insightful Indonesia"
        title="Kenapa Harus Memilih Berbinar Insightful Indonesia"
        class="w-full h-full cursor-pointer object-cover z-0 block
        "
      /></a>
    </div>

    <img 
        src="{{ asset('assets/images/why-section.png') }}"
        alt="Kenapa Harus Memilih Berbinar Insightful Indonesia"
        title="Kenapa Harus Memilih Berbinar Insightful Indonesia"
        class="w-24 h-24 object-cover absolute animate-pulse z-0 -top-8 right-5 hidden"
    />
</section>

<!--========== PRODUK BERBINAR ==========-->
<section class="accessory section bd-container" id="accessory">
    <h2 class="section-title font-semibold">Produk Berbinar Insighful <br> Indonesia Lainnya</h2>

    <div class="accessory__container bd-grid items-center">
        @foreach ($products as $product)
            <div class="accessory__content hover:cursor-pointer flex flex-col gap-3 justify-center py-8 pt-16 h-full" style="padding-top: 1.5rem !important;">
                <h3 class="accessory__title w-[10rem] font-[600] mt-5">{{ $product["name"] }}</h3>
                <span class="accessory__category">{{ $product["description"] }}</span>
                
                <a href="{{ route($product['route']) }}" class="button accessory__button"><i class='bx bx-right-arrow-alt'></i></a>
            </div>
        @endforeach
    </div>
</section>

<!--========== CALL TO ACTION ==========-->
<section class="send section">
    <div class="send__container bd-container bd-grid">
        <div class="send__content">
            <h2 class="section-title-center send__title font-semibold">Hubungi Kami Sekarang</h2>
            <p class="send__description">Buat janji dan lakukan konseling dengan tim Berbinar Insightful Indonesia untuk layanan konseling online ataupun offline.</p>
            <form action="">
                <div class="send__direction">
                    <input type="text" placeholder="Email address" class="send__input">
                    <a href="#" class="button">Send</a>
                </div>
            </form>
        </div>

        <div class="send__img">
            <!-- <img src="assets/img/send.png" alt=""> -->
        </div>
    </div>
</section>
@endsection