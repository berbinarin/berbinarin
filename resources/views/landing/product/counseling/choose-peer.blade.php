@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Daftar Peer Counseling',
])

@section('style')
    <style>
        .text-gradient {
            background: linear-gradient(to right, #f7b23b, #916823);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .text-gradient-blue {
            background: linear-gradient(to right, #3986a3, #15323d);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .group {
            transition:
                transform 0.3s ease-in-out,
                border 0.3s;
            transform-origin: center;
            overflow: hidden;
            border: 2px solid transparent;
        }

        .group:hover {
            transform: scaleY(1.2);
            border: 5px solid #3986A3;
            height: 340px;
        }

        .group:hover .transform {
            transform: scaleY(0.83);
        }
    </style>
@endsection

@section('content')
    <div class="mt-28 sm:mt-32 leading-snug">
        <a href="{{ route('product.counseling.registration') }}">
            <div class="flex items-center justify-end space-x-2 cursor-pointer w-1/5 max-sm:w-1/4">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow"
                    class="h-3 w-auto">
                <p class="text-[15px] flex font-semibold text-[#3986A3]">Kembali <span class="sm:block hidden ml-0.5">pilih
                        konseling</span></p>
            </div>
        </a>
        <h1
            class="font text-gradient text-center text-4xl font-semibold text-black pb-1 max-md:mx-10 max-sm:mx-2 max-sm:text-[29px]">
            Tentukan Jenis Layanan Peer Counselormu</h1>
    </div>

    <div class="mx-20 my-12 hidden items-center justify-center space-x-5 md:flex">
        @foreach ($konselings as $konseling)
            <div class="flex items-stretch" style="height: 330px">
                <div
                    class="group relative h-auto w-[505px] origin-center transform items-center overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-300 before:absolute before:inset-0 before:scale-0 before:rounded-full before:bg-[#FFEACE] before:transition-transform before:duration-300 hover:before:scale-150">
                    <div
                        class="flex transform flex-col justify-center space-y-5 p-4 text-center transition-transform duration-300 group-hover:-mt-10 group-hover:scale-y-[0.83]">
                        <h1
                            class="font text-gradient-blue text-3xl font-semibold leading-relaxed text-black transition-all duration-300 group-hover:text-4xl group-hover:leading-normal max-sm:text-[29px]">
                            {!! italic_en($konseling['nama']) !!}</h1>
                        <img src="{{ asset($konseling['image']) }}" alt="{{ $konseling['nama'] }}"
                            class="h-[140px] w-auto object-contain transition-all duration-300 group-hover:-my-1 group-hover:h-52" />
                        <p class="text-base font-semibold leading-tight text-black">{!! italic_en($konseling['deskripsi']) !!}</p>
                    </div>

                    <div
                        class="absolute bottom-0 left-1/2 flex -translate-x-1/2 translate-y-20 justify-center transition-all duration-300 group-hover:-translate-y-0.5 group-hover:scale-y-[0.83] group-hover:mb-1.5">
                        @if ($konseling['nama'] === 'Berbinar For U')
                            <a href="{{ route('product.counseling.berbinar-for-u.index') }}">
                                <button
                                    class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:rounded-md max-sm:px-6 max-sm:text-[15px]">Daftar
                                    {!! italic_en($konseling['nama']) !!}</button>
                            </a>
                        @else
                            <a href="{{ route('product.counseling.peer-counselor.index') }}">
                                <button
                                    class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:rounded-md max-sm:px-6 max-sm:text-[15px]">Daftar
                                    {!! italic_en($konseling['nama']) !!}</button>
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            @if ($loop->iteration == 1)
                <img src="{{ asset('assets/images/landing/logo/logo-berbinar.png') }}" alt="Berbinar"
                    class="h-20 w-auto object-contain" />
            @endif
        @endforeach
    </div>
    <div class="hidden md:block text-center font-semibold text-black text-base">
        <span>
            Kamu staf aktif Berbinar? Klaim konseling gratismu
            <a href="{{ route('product.counseling.registration-staff') }}"
                class="text-[#3986A3] hover:underline">disini!</a>
        </span>
    </div>

    <div class="mx-4 my-12 flex flex-col items-center justify-center space-y-4 md:hidden">
        @foreach ($konselings as $konseling)
            <div class="relative w-full max-w-[350px] items-center rounded-2xl border bg-white shadow-md">
                <div class="flex flex-col justify-center space-y-3 p-3 text-center">
                    <h1 class="font text-gradient-blue text-2xl font-semibold text-black max-sm:text-[29px]">
                        {{ $konseling['nama'] }}</h1>
                    <img src="{{ asset($konseling['image']) }}" alt="{{ $konseling['nama'] }}"
                        class="h-36 w-auto object-contain" />
                    <div class="flex justify-center">
                        @if ($konseling['nama'] === 'Berbinar For U')
                            <a href="{{ route('product.counseling.berbinar-for-u.index') }}">
                                <button
                                    class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:px-6 max-sm:text-[15px]">Daftar
                                    {{ $konseling['nama'] }}</button>
                            </a>
                        @else
                            <a href="{{ route('product.counseling.peer-counselor.index') }}">
                                <button
                                    class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:px-6 max-sm:text-[15px]">Daftar
                                    {{ $konseling['nama'] }}</button>
                            </a>
                        @endif
                    </div>
                    <p class="text-[13px] font-semibold leading-tight text-black">{{ $konseling['deskripsi'] }}</p>
                </div>
            </div>

            @if ($loop->iteration == 1)
                <img src="{{ asset('assets/images/landing/logo/logo-berbinar.png') }}" alt="Berbinar"
                    class="h-14 w-auto object-contain" />
            @endif
        @endforeach
    </div>
@endsection
