@extends('moduls.psikotes.layouts.main', [
    'title' => 'Psikotest Berbinar',
    'active' => 'Home',
])

@section('content')

    <section
        class="max-w-6xl mx-auto h-screen flex flex-col gap-8 md:flex-row items-center justify-center relative px-5 md:px-0 mt-12 md:mt-0">
        {{-- HERO IMG MOBILE --}}
        <img src="{{ asset('assets/images/ilustrasi-logo-berbinar.png') }}" alt="Ilustrasi Logo Berbinar"
            title="Ilustrasi Logo Berbinar" class="w-full block md:hidden" data-aos="fade-up" data-aos-duration="1500">

        {{-- HERO CONTENT --}}
        <div class="relative flex items-center">
            <div class="rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
            </div>
            <div class="flex flex-col gap-5 z-40 relative">
                <h1 class="font-medium text-black text-[40px] md:text-[64px] leading-[100%] md:leading-[120%]">
                    Tingkatkan <br> potensi dengan <br> psikotes <span class="text-primary font-semibold">Berbinar</span>
                </h1>
                <p class="text-lg text-disabled">Berbinar hadir untuk kamu yang ingin meningkatkan potensi diri melalui layanan tes psikotes individu dan perusahaan.</p>
                <div class="flex gap-4">
                    <button
                        class="text-lg text-[#70787D] bg-[#C1C1C1] rounded-md hover:bg-primary hover:text-white duration-700 px-5 py-2 w-fit showModal">Ikuti Tes Gratis</button>
                    <a href=""
                        class="text-lg text-white bg-primary rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Daftar Tes Berbayar</a>
                </div>
            </div>
        </div>

        {{-- HERO IMG DESKTOP --}}
        <div class="flex mx-auto justify-center align-items-center w-1/2 md:block" data-aos="fade-left" data-aos-duration="1500">
            <img src="{{ asset('assets/images/konseling/regist/Ilustrasi1.png') }}" alt="Ilustrasi-Test" class=" absolute m-auto mt-20 w-[540px] z-10">
            <div class="decoration__psiko mx-auto rounded-2xl mt-[400px] w-[540px] h-[200px] z-0"></div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto">
        <div class="items-center align-items-center justify-center text-center mx-auto">
            <p class="-mt-10 text-lg">Telah dipercaya oleh : </p>
            <div class="flex mx-auto justify-center align-items-center gap-10 mt-6">
                <img src="{{ asset('assets/images/Microsoft.png') }}" alt="Company1" class=" m-auto w-[150px]">
                <img src="{{ asset('assets/images/Google.png') }}" alt="Company2" class="m-auto w-[110px]">
                <img src="{{ asset('assets/images/Stripe.png') }}" alt="Company3" class="m-auto w-[100px]">
                <img src="{{ asset('assets/images/Entrepreneur.png') }}" alt="Company4" class="m-auto w-[180px]">
                <img src="{{ asset('assets/images/Uber.png') }}" alt="Company5" class=" m-auto w-[80px]">
                <img src="{{ asset('assets/images/Forbes.png') }}" alt="Company6" class="m-auto w-[110px]">
            </div>
        </div>
    </section>

    <section>
        <div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 z-40 hidden">
            <div class="bg-white rounded-xl shadow-lg w-[560px]">
                <div class="text-right p-3 closeModal">
                    <i class='bx bxs-x-circle text-[48px] text-[#F34949]'></i>
                </div>
                <div class="text-center">
                    <h1 class="text-primary text-center text-3xl mb-8 -mt-10">Isi Data Diri</h1>
                    <input type="text" placeholder="Nama Lengkap" class="items-center justify-center rounded-md bg-[#F3F4F6] text-[#9B9B9B] w-[480px] h-12 p-4 my-1">
                    <input type="email" placeholder="Email" class="items-center justify-center rounded-md bg-[#F3F4F6] text-[#9B9B9B] w-[480px] h-12 p-4 my-1">
                    <input type="number" placeholder="Umur" class="items-center justify-center rounded-md bg-[#F3F4F6] text-[#9B9B9B] w-[480px] h-12 p-4 my-1">
                    <textarea name="alasan" placeholder="Alasan Mengikuti Tes" cols="30" rows="10" class="items-center justify-center rounded-md bg-[#F3F4F6] text-[#9B9B9B] w-[480px] h-60 p-4 my-1"></textarea>
                </div>
                <div class="flex justify-center items-center w-100 p-3 my-4 ">
                    <a href="{{ route('psikotestFreeStart') }}"
                        class="text-lg text-white bg-green-500 rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Simpan</a>
                </div>
            </div>
        </div>
    </section>

    <script>
        const modal = document.querySelector('.modal');

        const showModal = document.querySelector('.showModal');
        const closeModal = document.querySelector('.closeModal');

        showModal.addEventListener('click', function(){
            modal.classList.remove('hidden')
        });

        closeModal.addEventListener('click', function(){
            modal.classList.add('hidden')
        });
    </script>
    
@endsection