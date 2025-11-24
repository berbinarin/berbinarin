@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Beranda',
    'page' => 'Syarat Ketentuan',
])

@section('content')
<div class="sm:mx-20 mx-4">
    <div>
        <h1 class="max-sm:text-[29px] text-4xl font font-semibold text-black text-center mt-28 sm:mt-36">Syarat dan Ketentuan</h1>
        <p class="text-[#C4C4C4] sm:text-[15px] text-[13px] text-center mt-2">Telah diperbarui 27 Januari 2025</p>
        <p class="text-[#767676] sm:text-[16px] text-[15px] mt-6 text-justify max-sm:leading-normal">Selamat Datang di Berbinar, tempat dimana kamu tumbuh bersama Berbinar karena Berbinar #SelaluAdaBuatKamu</p>
    </div>

    <div class="sm:mt-6 mt-4">
        <div class="flex items-center gap-x-2">
            <p class="text-[#3986A3] font-bold sm:text-2xl text-xl">Umum</p>
            <div class="bg-[#E3E3E3] h-[1px] flex-grow"></div>
        </div>

        <p class="text-[#767676] sm:text-[16px] text-[15px] mt-2 leading-loose text-justify max-sm:leading-normal">
            Sebagai pengguna Berbinar ("SobatBinar") dan PT Berbinar Insightful Indonesia ("Berbinar" atau "Kami") sehubungan dengan penggunaan layanan Kami pada situs web,
            serta setiap dan seluruh layanan, fitur, dan konten yang tersedia di dalamnya. Mohon membaca Syarat & Ketentuan Layanan Kami dengan seksama sehingga SobatBinar dapat memahami seluruhnya.
            Dengan mengunjungi, mendaftar, maupun menggunakan Website, maka jika SobatBinar telah membaca, memahami, dan menyetujui untuk tunduk pada Ketentuan Layanan ini dan
            seluruh ketentuan terkait lainnya yang menjadi bagian yang tidak terpisahkan dari Ketentuan Layanan ini, termasuk namun tidak terbatas pada Ketentuan Privasi dan Kebijakan Refund; beserta setiap dan seluruh perubahan, penambahan, dan/atau pembaruan dari waktu ke waktu.
        </p>
    </div>

    <div class="sm:mt-6 mt-4">
        <div class="flex items-center gap-x-2">
            <p class="text-[#3986A3] font-bold sm:text-2xl text-xl">Syarat & Ketentuan Layanan</p>
            <div class="bg-[#E3E3E3] h-[1px] flex-grow"></div>
        </div>

        <ul class="list-disc mt-2 pl-7 sm:pl-10 text-[15px] sm:text-[16px] leading-relaxed text-justify text-[#767676] marker:text-[#3986A3]">
            @foreach ($term_conditions as $term_condition)
            <li class="max-sm:leading-normal">
                {{ $term_condition['description'] }}
            </li>
            @endforeach
        </ul>
    </div>

    <div class="sm:mt-6 mt-4 mb-10">
        <div class="flex items-center gap-x-2">
            <p class="text-[#3986A3] font-bold sm:text-2xl text-xl">Lokasi yang Bisa Dikunjungi</p>
            <div class="bg-[#E3E3E3] h-[1px] flex-grow"></div>
        </div>

        @foreach ($locations as $location)
        <div class="flex flex-col pl-2.5 sm:pl-6 leading-loose mt-2">
            <div class="flex gap-x-2 items-center">
                <img src="{{ asset('assets/images/landing/asset-beranda/term-point.webp') }}" alt="Vector" class="h-3.5 w-auto">
                <p class="text-[#636363] font-semibold sm:text-[16px] text-[15px] text-justify max-sm:leading-normal">{{ $location['address'] }}</p>
            </div>
            @foreach ($location['address_detail'] as $detail)
            <p class="text-[#636363] sm:text-[16px] text-[15px] leading-relaxed text-justify pl-5 max-sm:leading-normal">
                {{ $detail }}
            </p>
            @endforeach
        </div>
        @endforeach
    </div>
</div>
@endsection
