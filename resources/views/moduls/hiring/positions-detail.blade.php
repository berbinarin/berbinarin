@extends('layouts.main', [
'title' => 'Position Detail - Berbinar Insightful Indonesia',
'active' => 'Hiring',
'page' => 'Position Detail',
])

@section('content')
<section class="max-w-6xl bg-white mx-auto flex flex-col gap-8 z-40 items-center justify-center mt-28">
    <div class="-pt-2 -mt-3 md:m-5 md:p-5">

        {{-- masih nampilin semua position --}}

        <div class="">
            {{-- header desktop --}}
            <div class="header hidden md:block rounded-lg z-0">
                <img src="{{ asset($imagePath) }}" alt="PT Berbinar Insightful Indonesia" title="" class="max-w-full md:h-[320px] md:w-[1280px] rounded-[20px] z-0">
                <div class="relative">
                    <img src="{{ asset('assets/images/logo-bg.png') }}" alt="PT Berbinar Insightful Indonesia" title="" class="absolute -top-10 left-10 h-20 w-20 z-20">
                </div>
            </div>

            {{-- header mobile --}}
            <div class="header block md:hidden rounded-lg">
                <img src="{{ asset($imagePathMobile) }}" alt="PT Berbinar Insightful Indonesia" title="" class="max-w-full md:h-[270px] md:w-[1100px]">
                <div class="relative flex justify-center items-center">
                    <img src="{{ asset('assets/images/logo-bg.png') }}" alt="PT Berbinar Insightful Indonesia" title="" class="absolute -top-10 left-36 h-20 w-20 z-20 object-center">
                </div>
            </div>

            <div class="card-job py-0 md:py-5 z-20">
                <div class="bg-white -mt-5 md:pt-5 rounded-t-3xl rounded-tr-3xl z-20">
                    <div>
                        <div class="job-detail pt-5 mx-5">

                            {{-- title desktop --}}
                            <div class="hidden md:block head mt-10 md:mt-0 py-5">
                                <h3 class="text-3xl font-bold">{{ $position->name }}</h3>
                                <div class="title-job py-3">
                                    <p class="font-semibold">PT. Berbinar Insightful Indonesia</p>
                                </div>
                            </div>
                            {{-- title mobile --}}
                            <div class="head block md:hidden mt-10 md:mt-0 py-5 justify-items-center text-center">
                                <h3 class="text-2xl text-center font-bold">{{ $position->name }}</h3>
                                <div class="title-job py-3">
                                    <p class="font-semibold text-center">PT. Berbinar Insightful Indonesia</p>
                                    <p class="text-disabled text-xs mt-3">1 Juni 2024</p>
                                </div>

                                <div class="flex flex-row gap-4 mt-3 md:hidden items-center justify-center">
                                    <div class="flex flex-row bg-primary-alt gap-2 px-2 py-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" class="my-0.5">
                                            <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="M12 7v3.764a2 2 0 0 0 1.106 1.789L16 14" />
                                            </g>
                                        </svg>
                                        <h4 class="text-xs text-white rounded-full">Remote</h4>
                                    </div>

                                    <div class="flex flex-row bg-primary-alt gap-2 px-2 py-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 48 48" class="my-0.5">
                                            <g fill="none">
                                                <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M25 40H7a3 3 0 0 1-3-3V11a3 3 0 0 1 3-3h34a3 3 0 0 1 3 3v13.941" />
                                                <path stroke="white" stroke-width="3" d="M4 11a3 3 0 0 1 3-3h34a3 3 0 0 1 3 3v9H4z" />
                                                <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M32 35h12m-6-6v12" />
                                                <circle r="2" fill="white" transform="matrix(0 -1 -1 0 10 14)" />
                                                <circle r="2" fill="white" transform="matrix(0 -1 -1 0 16 14)" />
                                            </g>
                                        </svg>
                                        <h4 class="text-xs text-white rounded-full">{{$position->name}}
                                        </h4>
                                    </div>
                                </div>
                            </div>


                            <div class="flex flex-col md:flex-row">

                                <div class="flex flex-col pt-0 md:pt-9">
                                    <div class="about-us py-5">
                                        <h4 class="text-xl md:text-2xl font-bold">Tentang Kami</h4>
                                        <p class="mr-5 mt-3 font-medium">Berbinar bergerak dalam edukasi dan layanan
                                            psikologi yang
                                            memberikan
                                            jasa
                                            dalam kelas seminar, workshop, training secara daring, serta konseling, dan
                                            psikotes.</p>
                                    </div>
                                    <div class="responsibility py-5">
                                        <h4 class="text-xl md:text-2xl font-bold">Deskripsi Pekerjaan</h4>

                                        <ul class="list-decimal mx-7 mt-3 font-medium">
                                            @foreach ($position -> HiringPositionsJobDescription as $responsibility)
                                            <li>{{ $responsibility->job_description}}</li>
                                            @endforeach
                                        </ul>

                                    </div>
                                    <div class="requirement  py-5">
                                        <h4 class="text-xl md:text-2xl font-bold">Persyaratan</h4>
                                        <ul class="list-decimal mx-7 mt-3 font-medium">
                                            @foreach ($position -> Hiring_Positions_Requirement as $requirement)
                                            <li>{{ $requirement->requirement}}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>


                                <div class="hidden md:flex card-right w-full h-full justify-center items-right pt-16 pl-10 my-5">
                                    <div class="flex flex-col bg-gray-100 w-[400px] h-[600px] rounded-[20px] px-5 pt-5 pb-10">
                                        <div class="mt-2">
                                            <div class="flex flex-row mt-2">
                                                <div class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                            <circle cx="12" cy="10" r="3" />
                                                            <path d="M12 2a8 8 0 0 0-8 8c0 1.892.402 3.13 1.5 4.5L12 22l6.5-7.5c1.098-1.37 1.5-2.608 1.5-4.5a8 8 0 0 0-8-8" />
                                                        </g>
                                                    </svg>
                                                </div>
                                                <p class="font-semibold pt-2">Surabaya, Indonesia</p>
                                            </div>
                                            <p class="text-sm text-disabled mt-3">Silakan kirim CV lengkap anda
                                                kepada kami untuk melamar posisi ini</p>
                                        </div>
                                        <div class="my-10">
                                            <h4 class="text-2xl font-bold">Unpaid</h4>
                                        </div>
                                        <div class="mb-5">
                                            <div class="flex flex-row">
                                                <div class="flex mr-4 justify-items-center items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                            <rect width="20" height="16" x="2" y="4" rx="2" />
                                                            <path d="m22 7l-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                                        </g>
                                                    </svg>
                                                </div>

                                                <div>
                                                    <p class="text-base font-semibold">
                                                        humanresource2.berbinar.in@gmail.com
                                                    </p>
                                                    <p class="text-sm text-disabled">Kontak Email</p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="my-5">
                                            <div class="flex flex-row">
                                                <div class="flex mr-3 justify-items-center items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                                                        <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                            <circle cx="12" cy="12" r="9" />
                                                            <path d="M12 7v3.764a2 2 0 0 0 1.106 1.789L16 14" />
                                                        </g>
                                                    </svg>
                                                </div>

                                                <div>
                                                    <p class="text-base font-semibold">Remote</p>
                                                    <p class="text-sm text-disabled">Tipe Pekerjaan</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="my-5">
                                            <div class="flex flex-row">
                                                <div class="flex mr-3 justify-items-center items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                                        <g fill="none">
                                                            <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M25 40H7a3 3 0 0 1-3-3V11a3 3 0 0 1 3-3h34a3 3 0 0 1 3 3v13.941" />
                                                            <path stroke="black" stroke-width="4" d="M4 11a3 3 0 0 1 3-3h34a3 3 0 0 1 3 3v9H4z" />
                                                            <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M32 35h12m-6-6v12" />
                                                            <circle r="2" fill="black" transform="matrix(0 -1 -1 0 10 14)" />
                                                            <circle r="2" fill="black" transform="matrix(0 -1 -1 0 16 14)" />
                                                        </g>
                                                    </svg>
                                                </div>

                                                <div>
                                                    <p class="text-base font-semibold">
                                                        {{$position->name}}
                                                    </p>
                                                    <p class="text-sm text-disabled">Posisi Pekerjaan</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="my-5">
                                            <div class="flex flex-row">
                                                <div class="flex mr-3 justify-items-center items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                                                        <path fill="black" d="M19 4h-1V3c0-.55-.45-1-1-1s-1 .45-1 1v1H8V3c0-.55-.45-1-1-1s-1 .45-1 1v1H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 15c0 .55-.45 1-1 1H6c-.55 0-1-.45-1-1V9h14zM7 11h2v2H7zm4 0h2v2h-2zm4 0h2v2h-2z" />
                                                    </svg>
                                                </div>

                                                <div>
                                                    <p class="text-base font-semibold">
                                                        1 Juni 2024
                                                    </p>
                                                    <p class="text-sm text-disabled">Tanggal Posting</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="text-center mt-10">
                                            <a href="{{ route('hiring.position.detail', $position->id) }}">
                                                <button
                                                    class="bg-black text-center text-white font-semibold py-2 px-7 rounded-full">
                                                    Apply for this job
                                                </button>
                                            </a>
                                        </div> -->


                                    </div>

                                </div>


                            </div>



                        </div>
                        <div class="text-center mt-10">
                            <a href="{{ route('hiring.position.detail', $position->id) }}">
                                <button class="bg-black text-center text-white font-semibold py-3 px-7 rounded-full">
                                    Daftar Sekarang
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection