@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Tentang Kami',
    'page' => 'Tentang Kami',
])

@section('content')
<p class="max-sm:text-[29px] max-sm:mt-28 mt-36 text-4xl font font-semibold text-black text-center my-8 max-sm:mx-2 mx-20 relative z-10">Tentang <span class="bg-primary text-white px-2 ">Berbinar</span></p>

<div class="relative w-full z-30" style="padding-top: 56.25%; position: relative;">
    <iframe
        class="absolute top-0 left-0 w-full h-full"
        src="https://www.youtube.com/embed/fpjr6pazye4?autoplay=1&loop=1&mute=1&rel=0&modestbranding=1&controls=0"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>
</div>

<div class="flex justify-center max-md:mt-64 max-lg:mt-72 mt-16 mx-20 max-sm:mx-4">
    <div class="bg-white shadow-md flex flex-row max-lg:flex-col items-center max-sm:p-4 max-lg:p-5 pt-8 pr-8 pb-8 rounded-2xl max-sm:rounded-3xl gap-6 max-md:gap-y-8 w-full">
        <div class="relative w-1/3 max-sm:w-[85%] max-md:w-[80%] max-lg:w-[75%] max-sm:-top-52 max-lg:-top-56 flex items-center justify-center">
            <div class="absolute bg-[#AFCFDA] w-56 h-56 rounded-full top-3"></div>
            <img src="{{ asset('assets/images/landing/asset-tentang/image/pakdanny.png') }}" alt="Danny Sanjaya Arfensia, M.Psi., Psikolog" class="relative -top-6 z-10 h-56 w-auto">
            <div class="absolute bg-gradient-to-r from-[#3986A3] to-[#225062] text-white text-left max-lg:text-center max-sm:px-6 max-sm:py-3 px-4 py-2 gap-y-3 max-lg:rounded-full rounded-e-full -bottom-6 w-full z-20">
                <p class="text-[16px] font-semibold leading-tight">Danny Sanjaya Arfensia, M.Psi., Psikolog</p>
                <p class="text-[14px] font-light mt-1">Chief Executive Officer</p>
                <p class="text-[14px] font-light">PT Berbinar Insightful Indonesia</p>
            </div>
        </div>

        <div class="flex-1 max-sm:-mt-52 max-md:-mt-56 max-lg:-mt-52">
            <p class="text-justify text-[16px] max-sm:text-[15px] text-[#3F3F3F] leading-relaxed">
                Berbinar yang diambil dari kata bercahaya, dibangun untuk menerangi masyarakat dengan layanan psikologi yang kredibel dan sesuai dengan apa yang dibutuhkan oleh masyarakat. 
                Berbinar dengan logo bola mata yang bersinar, bersemangat dalam memberikan layanan psikologi terbaik untuk masyarakat, menggunakan warna biru yang dikaitkan dengan langit dan laut, 
                yang merupakan ruang terbuka dapat menginspirasi manusia untuk menciptakan lingkungan yang sehat secara fisik dan psikologis. 
                Pemilihan kata Insightful Indonesia dalam nama perusahaan menggambarkan bahwa perusahaan melihat masyarakat Indonesia yang mudah terpapar oleh pengetahuan dari internet, tanpa mengetahui kredibilitasnya, 
                dapat menggunakan produk yang ditawarkan untuk memperluas wawasan mereka. Harapan saya selaku CEO PT Berbinar Insightful Indonesia dengan menawarkan proposal penawaran kerjasama ini kepada 
                perusahaan, sekolah, atau komunitas di berbagai wilayah Indonesia agar dapat mengenalkan produk kami kepada masyarakat dan menjalin kerjasama yang dapat menguntungkan kedua belah pihak.
            </p>
        </div>
    </div>
</div>


<section class="relative my-36 max-sm:my-32">
    <div class="bg-gradient-to-r from-[#1C4352] to-[#3F96B8] w-full h-60 max-sm:h-72">
        <div class="visi absolute bg-white shadow-md w-[80%] max-sm:w-[94%] left-1/2 max-sm:-top-20 -top-14 transform -translate-x-1/2 p-5 flex-col flex gap-3 rounded-xl">
            <div class="flex flex-row items-center gap-2">
                <img src="{{ asset('assets/images/landing/asset-tentang/vector-pin.svg') }}" alt="Vector" class="h-8 w-auto bg-[#EAF3F6] p-2 rounded-lg">
                <p class="text-[#3986A3] font-bold text-2xl max-sm:text-xl">Visi</p>
            </div>
            <p class="text-[#3F3F3F] text-[16px] max-sm:text-[15px] max-md:text-justify">Terdepan dalam menyediakan layanan psikologi yang berkualitas, berintegritas, dan mudah diakses oleh seluruh kalangan masyarakat.</p>
        </div>
        
        <div class="misi absolute bg-white shadow-md w-[80%] max-sm:w-[94%] left-1/2 max-sm:top-[90px] top-24 transform -translate-x-1/2 p-5 flex-col flex gap-3 rounded-xl">
            <div class="flex flex-row items-center gap-2">
                <img src="{{ asset('assets/images/landing/asset-tentang/vector-pin.svg') }}" alt="Vector" class="h-8 w-auto bg-[#EAF3F6] p-2 rounded-lg">
                <p class="text-[#3986A3] font-bold text-2xl max-sm:text-xl">Misi</p>
            </div>
            <ul class="list-disc pl-5 text-[16px] max-sm:text-[15px] max-md:text-justify text-[#3F3F3F] marker:text-[#3986A3]">
                <li class="pl-2">
                    Memberikan layanan terstandar berkualitas tinggi yang sesuai dengan kebutuhan customer.
                </li>
                <li class="pl-2">
                    Mengembangkan produk psikologi yang berlandaskan Kode Etik Psikologi Indonesia dan dijalankan oleh sumber daya manusia yang berintegritas.
                </li>
                <li class="pl-2">
                    Menciptakan akses layanan yang mudah dijangkau oleh seluruh lapisan masyarakat dengan harga yang bersaing.
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="mx-20 max-sm:mx-4 my-10 max-sm:mt-0 -mt-10">
    <p class="nilai max-sm:text-[29px] text-4xl font font-semibold text-black text-center my-8 max-sm:my-4 max-sm:mx-2 mx-20 relative z-10">Nilai <span class="bg-primary text-white px-2 ">Berbinar</span></p>
    <div class="grid grid-cols-4 max-sm:grid-cols-1 max-md:grid-cols-2 max-xl:grid-cols-3 gap-4">
        @foreach ($values as $index => $value)
            <div class="bg-white p-5 max-sm:p-4 shadow-md rounded-xl flex flex-col gap-y-1.5">
                <div class="flex flex-col {{ $index % 2 === 0 ? 'max-sm:flex-row' : 'max-sm:flex-row-reverse' }} items-center sm:text-center gap-2">
                    <img src="{{ asset($value['vector']) }}" alt="Vector" class="h-12 w-12 max-sm:h-10 max-sm:w-10 bg-[#EAF3F6] p-2 max-sm:p-1.5 rounded-lg">
                    <p class="text-[#3986A3] font-bold text-lg min-h-[36px] {{ $index % 2 === 0 ? 'max-sm:text-left' : 'max-sm:text-right' }} leading-tight max-sm:min-h-0">{{ $value['nilai'] }}</p>
                </div>
                <p class="text-[#3F3F3F] max-sm:text-[14px] text-[15px] text-justify min-h-[90px] max-sm:min-h-0">{{ $value['deskripsi'] }}</p>
            </div>
        @endforeach
    </div>
</section>

<section id="mitra">
    <p class="max-sm:text-[29px] text-4xl font font-semibold text-black text-center my-6 max-sm:my-4 max-sm:mx-2 mx-20 relative z-10">Mitra Afiliasi</p>
      <div class="wrapper">
        <div class="item" style="--i: 1; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra1.png') }}');"></div>
        <div class="item" style="--i: 2; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra2.png') }}');"></div>
        <div class="item" style="--i: 3; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra3.png') }}');"></div>
        <div class="item" style="--i: 4; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra4.png') }}');"></div>
        <div class="item" style="--i: 5; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra5.png') }}');"></div>
        <div class="item" style="--i: 6; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra6.png') }}');"></div>
        <div class="item" style="--i: 7; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra7.png') }}');"></div>
        <div class="item" style="--i: 8; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra8.png') }}');"></div>
        <div class="item" style="--i: 9; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra9.png') }}');"></div>
        <div class="item" style="--i: 10; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra10.png') }}');"></div>
        <div class="item" style="--i: 11; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra11.png') }}');"></div>
        <div class="item" style="--i: 12; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra12.png') }}');"></div>
        <div class="item" style="--i: 13; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra13.png') }}');"></div>
        <div class="item" style="--i: 14; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra14.png') }}');"></div>
        <div class="item" style="--i: 15; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra15.png') }}');"></div>
        <div class="item" style="--i: 16; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra16.png') }}');"></div>
        <div class="item" style="--i: 17; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra17.png') }}');"></div>
        <div class="item" style="--i: 18; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra18.png') }}');"></div>
        <div class="item" style="--i: 19; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra19.png') }}');"></div>
        <div class="item" style="--i: 20; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra20.png') }}');"></div>
        <div class="item" style="--i: 21; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra21.png') }}');"></div>
        <div class="item" style="--i: 22; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra22.png') }}');"></div>
        <div class="item" style="--i: 23; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra23.png') }}');"></div>
        <div class="item" style="--i: 24; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra24.png') }}');"></div>
        <div class="item" style="--i: 25; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra25.png') }}');"></div>
        <div class="item" style="--i: 26; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra26.png') }}');"></div>
        <div class="item" style="--i: 27; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra27.png') }}');"></div>
        <div class="item" style="--i: 28; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra28.png') }}');"></div>
        <div class="item" style="--i: 29; background-image: url('{{ asset('assets/images/landing/asset-tentang/mitra-afiliasi/mitra29.png') }}');"></div>
      </div>
</section>

{{-- CONTACT --}}
<div class="bg-wave relative my-20 max-sm:my-10 mx-20 max-sm:mx-4 rounded-3xl p-7 max-sm:p-5 bg-cover h-auto">
    <div class="absolute inset-0 bg-gradient-to-b from-[#609EB5] to-[#15323D] rounded-3xl mix-blend-multiply"></div>

    <div class="relative flex flex-col text-center gap-y-3 max-sm:gap-y-3 justify-center items-center h-full">
        <h1 class="text-3xl max-sm:text-2xl text-white font-semibold ">Hubungi Kami</h1>
        <p class="text-lg max-sm:text-[15px] text-white font-light max-sm:leading-snug">Yuk, hubungi kami sekarang untuk mendaftarkan diri dalam layanan Berbinar!</p>
        <div class="flex justify-center mt-6 max-sm:mt-3">
            <a href="https://linktr.ee/berbinarinsight" target="_blank">
                <button class="text-black max-sm:text-[15px] font-semibold bg-white py-2 px-5 rounded-xl">Hubungi Sekarang</button>
            </a>
        </div>
    </div>
</div>
@endsection