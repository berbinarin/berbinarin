@extends('moduls.berbinar-plus.layouts.main',[
    'title' => 'Registrasi Success Berbinar+',
    'active' => 'Success',
    'page' => 'Success',
])

@section('content')
<div class="mx-4 md:mx-0">
    <img src="{{ asset('assets/images/products/berbinar-plus/dekorasi.png') }}" alt="" class="ml-4 md:ml-16 -mb-16">
    <div class="mt-8 py-40 md:py-0 md:mt-0">
        <img src="{{ asset('assets/images/products/berbinar-plus/success.png') }}" alt="" class="mx-auto max-w-full h-auto md:max-w-3xl md:max-h-screen block mb-4">
        <h1 class="text-center text-2xl md:text-3xl font-plusJakartaSans font-bold font-extrabold leading-tight mb-4">Congratulations! Your account has been successfully created</h1>
        <p class="text-center mb-4">Team Berbinar akan menghubungi kamu dalam waktu dekat. Stay Tune!</p>
        <div class="flex justify-center items-center">
            <button id="openModal" type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 transition duration-300 h-14 md:w-52 md:flex md:justify-center md:items-center">
                <a href="{{ route('berbinarplus.login') }}">
                    <span class="mr-2">Back To Homepage</span>
                </a>    
            </button>
        </div>
    </div>
</div>
@endsection