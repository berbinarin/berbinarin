<div class="lg:flex justify-around relative">
    {{--background image--}}
    <div class="hidden lg:block absolute inset-0 z-0 xl:-translate-y-3">
        <img src="{{ asset("assets/images/landing/karir/garis.png") }}" alt="garis"
             class="object-cover">
    </div>

    {{--mencari--}}
    <div
        class="flex items-center justify-around mx-auto mb-4 relative z-20 lg:flex-col lg:items-center lg:justify-center lg:pb-60">
        {{--masking biru halus --}}
        <div class="hidden lg:flex lg:items-center lg:justify-center absolute z-10 -bottom-20 -left-8">
            <img src="{{ asset('assets/images/landing/karir/Ellipse1.png') }}" alt="ellipse 3"
                 class="translate-x-4">
        </div>

        {{--image & image caption--}}
        <div class="flex-col items-center justify-center shrink-0 gap-1 lg:mb-4">
            <img src="{{ asset('assets/images/landing/karir/mencari.png') }}" alt="icon mencari"
                 class="size-28">
            <h4 class="text-center font-semibold text-lg text-black">Mencari</h4>
        </div>
        {{--description--}}
        <div class="flex items-center justify-center w-64 ps-4 lg:flex-col lg:text-center lg:p-0">
            <p class="font-semibold text-wrap">Kandidat mencari informasi posisi yang diminati</p>
        </div>

    </div>

    {{--administrasi--}}
    <div
        class="flex items-center justify-around mx-auto mb-4 relative z-20 lg:flex-col lg:items-center lg:justify-center xl:pt-60 lg:pt-32">

        {{--masking biru halus --}}
        <div class="hidden lg:block absolute z-10 -top-20 -left-8 ">
            <img src="{{ asset('assets/images/landing/karir/Ellipse2.png') }}" alt="ellipse 1"
                 class="object-cover">
        </div>

        {{--description--}}
        <div
            class="flex items-center justify-center w-64 ps-4 lg:p-0 lg:flex-col lg:text-center lg:order-last">
            <p class="font-semibold text-wrap">Pendaftaran data diri pada Google Form yang tersedia</p>
        </div>

        {{--image & image caption--}}
        <div class="flex-col items-center justify-center shrink-0 gap-1 lg:mb-4">
            <img src="{{ asset('assets/images/landing/karir/administrasi.png') }}"
                 alt="icon administrasi"
                 class="size-28">
            <h4 class="text-center font-semibold text-lg text-black">Administrasi</h4>
        </div>

    </div>

    {{--Pengiriman berkas--}}
    <div
        class="flex items-center justify-around mx-auto mb-4 relative z-20 lg:flex-col lg:items-center lg:justify-center lg:pb-60">

        {{--masking biru halus --}}
        <div class="hidden lg:block absolute z-10 -bottom-20 -left-8">
            <img src="{{ asset('assets/images/landing/karir/Ellipse3.png') }}" alt="ellipse 3"
                 class="object-cover">
        </div>

        {{--image & image caption--}}
        <div class="flex-col items-center justify-center shrink-0 gap-1 lg:mb-4">
            <img src="{{ asset('assets/images/landing/karir/pengiriman berkas.png') }}"
                 alt="icon mengirim berkas"
                 class="size-28 mx-auto">
            <h4 class="text-center font-semibold text-lg text-black">Pengiriman <span
                    class="block lg:inline-block"></span>Berkas</h4>
        </div>
        {{--description--}}
        <div class="flex items-center justify-center w-64 ps-4 lg:flex-col lg:text-center lg:p-0">
            <p class="font-semibold text-wrap">Mengirim berkas wajib seperti CV, Resume, Portfolio,dll</p>
        </div>

    </div>

    {{--selesai--}}
    <div
        class="flex items-center justify-around mx-auto mb-4 relative z-20 lg:flex-col lg:items-center lg:justify-center xl:pt-60 lg:pt-32">

        {{--masking biru halus --}}
        <div class="hidden lg:block absolute z-10 -top-20 -left-8 ">
            <img src="{{ asset('assets/images/landing/karir/Ellipse2.png') }}" alt="ellipse 1"
                 class="object-cover">
        </div>

        {{--description--}}
        <div
            class="flex items-center justify-center w-64 ps-4 lg:p-0 lg:flex-col lg:text-center lg:order-last">
            <p class="font-semibold text-wrap">Menunggu pengumuman melalui E-mail / Whatsapp</p>
        </div>

        {{--image & image caption--}}
        <div class="flex-col items-center justify-center shrink-0 gap-1 lg:mb-4">
            <img src="{{ asset('assets/images/landing/karir/selesai.png') }}" alt="icon selesai"
                 class="size-28">
            <h4 class="text-center font-semibold text-lg text-black">Selesai</h4>
        </div>

    </div>
</div>
