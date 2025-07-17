@extends('landing.layouts.app', [
'title' => 'Psikotest Berbinar',
'active' => 'Intro',
'page' => 'Tes Kepribadian Gratis',
])

@section('content')
<section class="">
    <h2 class=" md:w-full text-center text-[#333333] font-bold text-5xl mt-28 lg:mt-36 my-7 mx-7 leading-tight ">
        Tes Kepribadian <br> <span class="bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text text-transparent">Gratis</span>
    </h2>
    <div class="max-w-6xl mx-auto my-0 md:mb-2 p-4 h-fit flex flex-col relative items-center">
        <div class="flex relative h-fit">
            <div class="flex relative bg-white rounded-[30px] items-center mt-2 lg:pt-10 lg:pb-10 shadow-2xl" style="box-shadow: 0 0 25px rgba(0,0,0,0.25);">
                <div class="relative flex flex-col items-center">
                    <p class="intro_description md:w-[85%] w-[85%] lg:text-lg/8 text-[#515151] font-normal mt-2 m-4 text-center leading-loose">
                        Tes ini merupakan model dari Tes Kepribadian Lima Dimensi yang dapat mengungkapkan
                        potensi karir yang sesuai dengan kepribadian SobatBinar.
                        Tes Kepribadian Lima Dimensi secara luas dianggap sebagai cara paling kuat untuk menggambarkan
                        perbedaan kepribadian yang SobatBinar miliki.
                        <br><br>
                        Tes Kepribadian Lima Dimensi adalah salah satu alat tes untuk mengungkap kepribadian berdasarkan
                        teori
                        <span class="italic">Big
                            Five
                            Personality </span> yang dikemukakan oleh seorang psikolog terkenal, yaitu Lewis Goldberg.
                        Dalam teori
                        sifat
                        kepribadian <span class="italic"> "The Big Five Personality Traits Model" </span> tersebut
                        terdiri dari lima dimensi kunci
                        diantaranya
                        seperti, <span class="italic">Openness (O), Conscientiousness (C), Extraversion (E),
                            Agreeableness (A)</span> dan
                        <span class="italic">Neuroticism
                            (N)</span>.
                    </p>
                    <div class="flex flex-col md:flex-row gap-4 my-5 items-center">
                        <button class="rounded-md bg-gradient-to-r from-[#3986A3] to-[#225062] px-20 lg:px-28 py-1.5 font-medium text-white max-sm:text-[15px] showModal">
                            Mulai Tes
                        </button>
                        <!-- <a href="{{ route('product.psikotest.registration') }}" class="text-white font-medium bg-primary border-white border-2 rounded-full hover:bg-white hover:text-primary duration-700 hover:cursor-pointer px-6 py-2 w-fit block">
                            Kembali ke Beranda
                        </a> -->
                    </div>
                </div>
            </div>

        </div>
        <img src="{{ asset('assets/images/psikotes/singa1.png') }}" alt="Ilustrasi Singa" title="Ilustrasi Singa" class="w-48 h-48 absolute hidden lg:block -top-12 -left-12 z-20 -translate-y-6" data-aos="fade-up" data-aos-duration="1500">
        <img src="{{ asset('assets/images/psikotes/singa2.png') }}" alt="Ilustrasi Singa" title="Ilustrasi Singa" class="w-48 h-48 absolute hidden lg:block -bottom-12 left-12 z-30 translate-y-6" data-aos="fade-up" data-aos-duration="1500">
        <img src="{{ asset('assets/images/psikotes/singa3.png') }}" alt="Ilustrasi Singa" title="Ilustrasi Singa" class="w-56 h-56 absolute hidden lg:block -bottom-12 -right-12 z-50 -mr-5" data-aos="fade-up" data-aos-duration="1500">
    </div>
</section>

<!--========== POP UP ==========-->
<section class="relactive flex">
    <div class="modal fixed bg-black/54 size-full start-0 overflow-x-hidden overflow-y-auto top-0 left-0 right-0 z-50 hidden justify-center items-center">
        <div class="modal-dialog max-sm:max-w-lg m-7 lg:mt-20 lg:w-[60%] mx-2 sm:mx-auto p-4 lg:pt-8 bg-white rounded-xl shadow-lg">
            <!-- <div class="text-right p-3 closeModal">
                <i class='bx bxs-x-circle text-[48px] text-[#F34949]'></i>
            </div> -->
            <div>
                <div class="text-center">
                    <h1 class="bg-gradient-to-r from-[#F3AF3A] to-[#966C24] bg-clip-text text-transparent font-semibold text-center text-3xl">Instruksi Pengisian</h1>
                </div>
                <div class="px-16 pt-10 pb-2">
                    <p class="text-justify lg:text-xl/8 text-[#333333]">Pada tes ini, setiap nomor berisikan satu pernyataan beserta lima pilihan
                        skor jawaban. Tugas SobatBinar adalah menentukan <span class="">skor kesesuaian</span>
                        setiap
                        pernyataan dengan keadaan diri SobatBinar yang sebenarnya. Tiap pilihan skor kesesuaian yang
                        SobatBinar
                        pilih memiliki kriterianya masing-masing.</p>
                    <p class="lg:text-xl/8 text-[#333333]"><br>Keterangan Skor:</p>
                    <ul class="pl-[2rem] lg:text-xl/8 text-[#333333]">
                        <li>1=Sangat tidak sesuai</li>
                        <li>2=Tidak sesuai</li>
                        <li>3=Ragu-ragu</li>
                        <li>4=Sesuai</li>
                        <li>5=Sangat sesuai</li>
                    </ul>
                </div>
            </div>
            <div class="flex justify-center items-center w-100 p-5">
                <form action="{{ route('psikotest-free.question.show') }}" method="GET">
                    @csrf
                    <button type="submit" class="rounded-md bg-gradient-to-r from-[#3986A3] to-[#225062] lg:text-xl px-20 lg:px-28 py-1.5 font-medium text-white max-sm:text-[15px]">
                        Mulai Tes
                    </button>
                </form>

            </div>
        </div>
    </div>
</section>

<script>
    const modal = document.querySelector('.modal');
    const showModal = document.querySelector('.showModal');
    const closeModal = document.querySelector('.closeModal');

    showModal.addEventListener('click', function() {
        modal.classList.remove('hidden')
    });

    closeModal.addEventListener('click', function() {
        modal.classList.add('hidden')
    });
</script>

@endsection
