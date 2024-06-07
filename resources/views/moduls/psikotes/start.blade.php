@extends('moduls.psikotes.layouts.main', [
'title' => 'Psikotest Berbinar',
'active' => 'Intro',
])

@section('content')
<section>
    <div class="max-w-6xl mx-auto my-0 md:mb-2 p-4 h-fit flex relative items-center overflow-x-hidden overflow-y-auto">
        <div class="flex relative h-fit">
            <div class="flex relative bg-primary rounded-[30px] items-center mt-2">
                <div class="relative flex flex-col items-center">
                    <h2 class="intro_title md:w-full text-center text-white font-medium text-5xl my-7 mx-7 leading-tight ">
                        Tes Kepribadian Gratis
                    </h2>
                    <p class="intro_description md:w-[70%] w-[85%] text-white font-normal mt-2 m-4 text-justify leading-loose">
                        Tes ini merupakan model dari
                        tes kepribadian lima dimensi yang dapat mengungkapkan potensi karir yang sesuai dengan
                        kepribadian SobatBinar.
                        Tes Kepribadian Lima Dimensi secara luas dianggap sebagai cara paling kuat untuk menggambarkan
                        perbedaan
                        kepribadian yang SobatBinar miliki. Ini adalah dasar penelitian kepribadian paling modern.
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
                        <button class="text-base text-white font-bold bg-primary border-white border-2 rounded-full hover:bg-amber-300 hover:text-primary hover:border-amber-300 duration-700 px-6 py-2 w-fit showModal">
                            Mulai Tes
                        </button>
                        <a href="{{ route('psikotestHome') }}" class="text-white font-medium bg-primary border-white border-2 rounded-full hover:bg-white hover:text-primary duration-700 hover:cursor-pointer px-6 py-2 w-fit block">
                            Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--========== POP UP ==========-->
<section class="relactive flex">
    <div class="modal fixed bg-black/54 size-full start-0 overflow-x-hidden overflow-y-auto top-0 left-0 right-0 z-50 hidden justify-center items-center">
        <div class="modal-dialog max-w-lg m-7 mx-2 sm:mx-auto pb-4 bg-white rounded-xl shadow-lg">
            <div class="text-right p-3 closeModal">
                <i class='bx bxs-x-circle text-[48px] text-[#F34949]'></i>
            </div>
            <div>
                <div class="text-center">
                    <h1 class="text-primary text-center text-3xl mb-5 -mt-5 md:-mt-10">Instruksi Pengisian</h1>
                    <p class="font-bold px-10">Perhatikan dengan seksama instruksi pengisian berikut untuk
                        mengisi tes kepribadian gratis berbinar</p>
                </div>
                <div class="px-16 pt-10 pb-2">
                    <p class="text-justify">Pada tes ini, setiap nomor berisikan satu pernyataan beserta lima pilihan
                        skor jawaban. Tugas SobatBinar adalah menentukan <span class="font-bold">skor kesesuaian</span>
                        setiap
                        pernyataan dengan keadaan diri SobatBinar yang sebenarnya. Tiap pilihan skor kesesuaian yang
                        SobatBinar
                        pilih memiliki kriterianya masing-masing.</p>
                    <p class="font-bold"><br>Keterangan Skor:</p>
                    <ul class="pl-[2rem]">
                        <li>Sangat tidak sesuai</li>
                        <li>Tidak sesuai</li>
                        <li>Ragu-ragu</li>
                        <li>Sesuai</li>
                        <li>Sangat sesuai</li>
                    </ul>
                </div>
            </div>
            <div class="flex justify-center items-center w-100 p-5">

                <form action="{{ route('test.store') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-lg text-white bg-primary font-medium rounded-full hover:text-primary hover:bg-amber-300 duration-700 px-8 mt-0 mb-4 py-2 w-fit">
                        Mulai</button>
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