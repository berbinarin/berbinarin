@extends('landing.layouts.app',[
'title' => 'Registration Success Berbinar+',
'active' => 'Berbinar+',
'page' => 'Berbinar+',
])

@section('content')
<div class="row">
    <div class="flex flex-no-wrap pt-8">
        <div class="w-full mt-14 md:mt-28 justify-center items-center">
            <div class="bg-white rounded-3xl p-5 md:px-12 xl:px-16 w-full shadow-xl" style="max-width: 80%; margin: auto;">
                <h1 class="text-4xl font-bold text-center mb-8 mt-1 bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text text-transparent">Selamat</h1>
                <img class="justify-self-center" src="{{ asset('assets/images/landing/produk/emo/cheer.png') }}" alt="">
                <h1 class="text-xl font-semibold text-center mb-8 mt-1 bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text text-transparent">Akun anda berhasil terdaftar pada kelas BERBINAR+. Nantikan informasi selanjutnya yang akan diumumkan melalui WhatsApp/Email</h1>
                <div class="flex justify-center mb-4">
                    <a href="{{ route('home.index') }}" class="w-full md:w-1/3 md:text-xl bg-gradient-to-r from-[#3986A3] to-[#15323D] text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary text-center">Beranda</a>
                </div>
         </div>
        </div>
    </div>
</div>
@endsection
