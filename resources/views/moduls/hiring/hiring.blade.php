@extends('layouts.main', [
    'title' => 'Berbinar Careers - Berbinar Insightful Indonesia',
    'active' => 'Hiring',
    'page' => 'Hiring',
])

@section('content')
    {{-- HERO SECTION --}}
    <section
        class="max-w-6xl mx-auto h-screen flex flex-col md:flex-row items-center justify-center relative px-5 md:px-0 mt-28 md:mt-10">
        {{-- HERO IMG MOBILE --}}
        <img src="{{ asset('assets/images/ilustrasi-hiring.png') }}" alt="Ilustrasi Logo Berbinar"
            title="Ilustrasi Logo Berbinar" class="w-full block md:hidden" data-aos="fade-up" data-aos-duration="1500">

        {{-- HERO CONTENT --}}
        <div class="relative flex items-center">
            <div class="bg-blur-bg rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
            </div>
            <div class="flex flex-col gap-5 z-40 relative">
                <h1 class="font-semibold text-black text-[40px] md:text-[64px] leading-[100%] md:leading-[120%]">
                    Temukan Potensi <br> Anda di <span class="text-primary font-bold">Berbinar Careers</span>
                </h1>
                <p class="text-lg text-disabled">Berbinar careers hadir untuk memberikan informasi mengenai lowongan
                    pekerjaan yang tersedia untuk anda tempati. Pilih posisi yang anda inginkan dan bergabung untuk menjadi
                    bagian dari kami</p>
                <a href="{{ route('hiringPositions') }}"
                    class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Lihat
                    Posisi Tersedia</a>
            </div>
        </div>

        {{-- HERO IMG DESKTOP --}}
        <img src="{{ asset('assets/images/ilustrasi-hiring.png') }}" alt="Ilustrasi Logo Berbinar"
            title="Ilustrasi Logo Berbinar" class="w-1/2 hidden md:block" data-aos="fade-left" data-aos-duration="1500">
    </section>

    {{-- TIMELINE SECTION --}}
    <section
        class="max-w-6xl mx-5 md:mx-auto md:px-0 flex flex-col md:flex-row gap-6 md:gap-2 md:items-center md:-mt-36 z-40">
        <div
            class="flex flex-col gap-3 flex-1 items-center justify-center hover:bg-white hover:shadow-md rounded-xl duration-700 px-3 h-[300px] group py-8">
            <div class="flex items-center justify-center bg-white p-5 rounded-full group-hover:bg-blur-bg duration-700">

                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <g clip-path="url(#clip0_352_267)">
                        <path opacity="0.2"
                            d="M14.4993 24.9995C20.2983 24.9995 24.9993 20.2985 24.9993 14.4995C24.9993 8.70052 20.2983 3.99951 14.4993 3.99951C8.70028 3.99951 3.99927 8.70052 3.99927 14.4995C3.99927 20.2985 8.70028 24.9995 14.4993 24.9995Z"
                            fill="#3986A3" />
                        <path d="M10.4993 14.5H18.4993" stroke="#3986A3" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M14.4993 10.5V18.5" stroke="#3986A3" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M14.4993 24.9995C20.2983 24.9995 24.9993 20.2985 24.9993 14.4995C24.9993 8.70052 20.2983 3.99951 14.4993 3.99951C8.70028 3.99951 3.99927 8.70052 3.99927 14.4995C3.99927 20.2985 8.70028 24.9995 14.4993 24.9995Z"
                            stroke="#3986A3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21.9236 21.9246L27.9987 27.9996" stroke="#3986A3" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_352_267">
                            <rect width="32" height="32" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <h6 class="text-black font-medium text-lg text-center">Cari Lowongan</h6>
            <p class="text-base text-disabled  text-center">Cari lowongan yang sesuai dengan keinginan anda.</p>
        </div>

        <div
            class="flex flex-col gap-3 flex-1 items-center justify-center hover:bg-white hover:shadow-md rounded-xl duration-700 px-3 h-[300px] group py-8">
            <div class="flex items-center justify-center bg-white p-5 rounded-full group-hover:bg-blur-bg duration-700">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                    <g clip-path="url(#clip0_263_108)">
                        <path opacity="0.2"
                            d="M16.7273 20C21.1456 20 24.7273 16.4183 24.7273 12C24.7273 7.58172 21.1456 4 16.7273 4C12.309 4 8.72729 7.58172 8.72729 12C8.72729 16.4183 12.309 20 16.7273 20Z"
                            fill="#3986A3" />
                        <path d="M22.7273 7H28.7273" stroke="#3986A3" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M25.7273 4V10" stroke="#3986A3" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M4.60107 26.9988C5.83052 24.8708 7.59834 23.1037 9.72693 21.8752C11.8555 20.6467 14.2699 20 16.7276 20C19.1853 20 21.5996 20.6468 23.7282 21.8754C25.8568 23.1039 27.6246 24.871 28.854 26.9991"
                            stroke="#3986A3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M24.2336 14.7728C23.6989 16.2167 22.7586 17.4754 21.5258 18.3979C20.293 19.3203 18.8201 19.8672 17.2841 19.9728C15.748 20.0784 14.2141 19.7383 12.8667 18.9933C11.5192 18.2483 10.4155 17.1301 9.68817 15.773C8.96082 14.416 8.64076 12.8778 8.76643 11.3432C8.8921 9.80864 9.45815 8.34301 10.3966 7.12236C11.335 5.90172 12.6059 4.97798 14.0567 4.46212C15.5074 3.94627 17.0761 3.86023 18.5746 4.21436"
                            stroke="#3986A3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_263_108">
                            <rect width="32" height="32" fill="white" transform="translate(0.727295)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <h6 class="text-black font-medium text-lg text-center">Pengisian Form</h6>
            <p class="text-base text-disabled  text-center">Lakukan pengisian dan pendaftaran diri pada Google Form
                pada link berikut</p>
        </div>

        <div
            class="flex flex-col gap-3 flex-1 items-center justify-center hover:bg-white hover:shadow-md rounded-xl duration-700 px-3 h-[300px] group py-8">
            <div class="flex items-center justify-center bg-white p-5 rounded-full group-hover:bg-blur-bg duration-700">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                    <g clip-path="url(#clip0_263_120)">
                        <path opacity="0.2"
                            d="M10.0909 15.9981C10.0909 14.0202 10.6773 12.0868 11.7762 10.4423C12.875 8.79786 14.4368 7.51613 16.264 6.75926C18.0913 6.00238 20.1019 5.80435 22.0418 6.1902C23.9816 6.57605 25.7634 7.52846 27.1619 8.92698C28.5604 10.3255 29.5129 12.1073 29.8987 14.0471C30.2846 15.987 30.0865 17.9976 29.3296 19.8249C28.5728 21.6521 27.291 23.2139 25.6466 24.3127C24.0021 25.4116 22.0687 25.9981 20.0909 25.9981H9.09085C8.09815 25.9971 7.117 25.785 6.21254 25.3758C5.30807 24.9667 4.50098 24.3698 3.84482 23.6249C3.18867 22.88 2.69846 22.004 2.40674 21.0551C2.11501 20.1063 2.02844 19.1062 2.15278 18.1213C2.27712 17.1364 2.60951 16.1892 3.1279 15.3426C3.6463 14.496 4.33883 13.7694 5.15953 13.2109C5.98024 12.6524 6.91034 12.2749 7.88811 12.1033C8.86589 11.9318 9.86896 11.9702 10.8308 12.216"
                            fill="#3986A3" />
                        <path
                            d="M12.0901 25.998H9.09012C8.09742 25.9971 7.11627 25.785 6.21181 25.3758C5.30734 24.9667 4.50025 24.3698 3.84409 23.6249C3.18794 22.88 2.69773 22.004 2.406 21.0551C2.11428 20.1063 2.02771 19.1062 2.15205 18.1213C2.27638 17.1364 2.60878 16.1892 3.12717 15.3426C3.64556 14.496 4.33809 13.7694 5.1588 13.2109C5.9795 12.6524 6.90961 12.2749 7.88738 12.1033C8.86515 11.9318 9.86823 11.9702 10.83 12.216"
                            stroke="#3986A3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M10.0901 15.998C10.0902 14.4136 10.4669 12.8518 11.189 11.4415C11.9111 10.0312 12.958 8.81262 14.2435 7.88625C15.5289 6.95988 17.0161 6.35221 18.5824 6.11333C20.1488 5.87445 21.7495 6.01118 23.2526 6.51227C24.7557 7.01335 26.1183 7.86445 27.228 8.99541C28.3377 10.1264 29.1627 11.5048 29.6352 13.0172C30.1076 14.5296 30.214 16.1326 29.9454 17.6941C29.6768 19.2557 29.041 20.731 28.0904 21.9986"
                            stroke="#3986A3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.8474 20.2408L19.09 15.998L23.3327 20.2408" stroke="#3986A3" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19.0901 25.998V15.998" stroke="#3986A3" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_263_120">
                            <rect width="32" height="32" fill="white" transform="translate(0.0908203)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <h6 class="text-black font-medium text-lg text-center">Kirim Berkas</h6>
            <p class="text-base text-disabled  text-center">Kirim berkas seperti CV atau Resume sesuai dengan
                persyaratan</p>
        </div>

        <div
            class="flex flex-col gap-3 flex-1 items-center justify-center hover:bg-white hover:shadow-md rounded-xl duration-700 px-3 h-[300px] group py-8">
            <div class="flex items-center justify-center bg-white p-5 rounded-full group-hover:bg-blur-bg duration-700">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                    fill="none">
                    <g clip-path="url(#clip0_263_144)">
                        <path opacity="0.2"
                            d="M7.08032 25.1924C5.92982 24.0419 6.6929 21.6265 6.1073 20.2111C5.50025 18.744 3.27271 17.5631 3.27271 16C3.27271 14.4368 5.50026 13.256 6.10731 11.7888C6.69291 10.3735 5.92982 7.95811 7.08032 6.80761C8.23082 5.65711 10.6462 6.42019 12.0616 5.8346C13.5287 5.22755 14.7096 3 16.2728 3C17.8359 3 19.0167 5.22756 20.4839 5.8346C21.8992 6.4202 24.3146 5.65711 25.4651 6.80761C26.6156 7.95811 25.8525 10.3735 26.4381 11.7889C27.0452 13.256 29.2727 14.4369 29.2727 16C29.2727 17.5632 27.0451 18.744 26.4381 20.2112C25.8525 21.6265 26.6156 24.0419 25.4651 25.1924C24.3146 26.3429 21.8992 25.5798 20.4838 26.1654C19.0167 26.7725 17.8358 29 16.2727 29C14.7095 29 13.5287 26.7724 12.0616 26.1654C10.6462 25.5798 8.23082 26.3429 7.08032 25.1924Z"
                            fill="#3986A3" />
                        <path
                            d="M7.08032 25.1924C5.92982 24.0419 6.6929 21.6265 6.1073 20.2111C5.50025 18.744 3.27271 17.5631 3.27271 16C3.27271 14.4368 5.50026 13.256 6.10731 11.7888C6.69291 10.3735 5.92982 7.95811 7.08032 6.80761C8.23082 5.65711 10.6462 6.42019 12.0616 5.8346C13.5287 5.22755 14.7096 3 16.2728 3C17.8359 3 19.0167 5.22756 20.4839 5.8346C21.8992 6.4202 24.3146 5.65711 25.4651 6.80761C26.6156 7.95811 25.8525 10.3735 26.4381 11.7889C27.0452 13.256 29.2727 14.4369 29.2727 16C29.2727 17.5632 27.0451 18.744 26.4381 20.2112C25.8525 21.6265 26.6156 24.0419 25.4651 25.1924C24.3146 26.3429 21.8992 25.5798 20.4838 26.1654C19.0167 26.7725 17.8358 29 16.2727 29C14.7095 29 13.5287 26.7724 12.0616 26.1654C10.6462 25.5798 8.23082 26.3429 7.08032 25.1924Z"
                            stroke="#3986A3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21.7727 13L14.4393 20L10.7727 16.5" stroke="#3986A3" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_263_144">
                            <rect width="32" height="32" fill="white" transform="translate(0.272705)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <h6 class="text-black font-medium text-lg text-center">Pendaftaran Selesai</h6>
            <p class="text-base text-disabled  text-center">Menunggu pengumuman
                melalui email terkait kelulusan dan interview</p>
        </div>
    </section>

    {{-- GENERAL REQUIREMENTS & BENEFIT SECTION --}}
    <section class="max-w-6xl mx-auto flex flex-col gap-8 z-40 items-center justify-center">
        <div class="flex flex-col gap-2">
            <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
                General Requirements dan Benefit
            </h1>
            <p class="text-disabled text-lg text-center px-5 md:px-0">
                Perhatikan syarat dan ketentuan umum dan manfaat internship di Berbinar
            </p>
        </div>

        <div class="flex flex-col mt-3 md:flex-row gap-5 w-full md:justify-between items-center">
            <div class="flex-col gap-1 flex flex-1">
                <h5 class="text-black text-lg font-medium text-center mb-3">General Requirements</h5>
                @foreach ($generalRequirements as $generalRequirement)
                    <div class="flex flex-col bg-white shadow-md rounded-md gap-5 px-5 py-5 w-full" data-aos="fade-right"
                        data-aos-duration="1000">
                        <p class="text-disabled text-base">
                            {{ $generalRequirement }}
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="flex-col gap-1 flex flex-1">
                <h5 class="text-black text-lg font-medium text-center mb-3">Benefits</h5>
                @foreach ($benefits as $benefit)
                    <div class="flex flex-col bg-white shadow-md rounded-md gap-5 px-5 py-5 w-full" data-aos="fade-right"
                        data-aos-duration="1000">
                        <p class="text-disabled text-base">
                            {{ $benefit }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- POSITIONS SECTION --}}
    <section class="max-w-6xl mx-auto flex flex-col mt-8 gap-8 z-40 items-center justify-center">
        <div class="flex flex-col gap-2">
            <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
                Posisi Yang Tersedia
            </h1>
            <p class="text-disabled text-lg text-center px-5 md:px-0">
                Berikut adalah posisi yang sedang dibuka
            </p>
        </div>

        <div class="flex flex-row flex-wrap items-center justify-center gap-5 mx-5 md:mx-0">
            @forelse ($positions->take($positions->count()/2)->chunk(ceil($positions->count() / 2)) as $chunk)
                @foreach ($chunk as $position)
                        <div class="flex flex-col bg-white shadow-md rounded-md gap-5 px-5 py-5 w-full md:w-[250px]"
                            data-aos="fade-right" data-aos-duration="1000">
                            <div class="flex flex-col gap-1">
                                <h5 class="text-black text-lg">{{ $position->name }}</h5>
                                <div class="flex flex-row items-center gap-2 text-base">
                                    <span class="text-primary bg-blur-bg px-2 py-1 rounded-md uppercase">{{ $position->type }}</span>
                                    <span class="text-disabled">{{ $position->positions }}</span>
                                </div>
                            </div>
                            <div class="flex flex-row gap-2">
                                <img src="{{ asset('assets/images/logo-berbinar.png') }}" alt="Logo Berbinar Insightful Indonesia"
                                    title="Logo Berbinar Insightful Indonesia" class="w-[50px] block">
                                <div class="flex flex-col">
                                    <h6 class="text-black text-base">Berbinar</h6>
                                    <p class="text-disabled text-sm">{{ $position->location }}</p>
                                </div>
                            </div>
                            <button class="text-center text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-full showModal"
                                data-name="{{ $position->name }}" data-type="{{ $position->type }}"
                                data-positions="{{ $position->positions }}"
                                data-location="{{ $position->location }}"
                                @if($position->HiringPositionsJobDescription->isNotEmpty())
                                    data-jobDescription="{{$position->HiringPositionsJobDescription->pluck('job_description')->toJson()}}"
                                @endif
                                @if($position->Hiring_Positions_Requirement->isNotEmpty())
                                    data-requirements="{{ $position->Hiring_Positions_Requirement->pluck('requirement')->toJson() }}"
                                @endif
                                >Lihat Selengkapnya</button>
                        </div>
                @endforeach
            @empty
                <!-- Handle empty positions -->
            @endforelse
        </div>
        
        
        

        <a href="{{ route('hiringPositions') }}"
            class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit text-center">Lihat
            Posisi Lainnya</a>
    </section>

    {{-- TESTIMONIALS SECTION --}}
    <section class="max-w-6xl mx-auto flex-col gap-10 z-40 mt-12">
        <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
            Apa kata mereka Internship di <span class="text-primary font-bold">Berbinar Careers</span>
        </h1>

        <div class="flex-1 max-w-6xl md:w-full mx-auto flex items-center justify-centerå z-40 pb-12">
            <div class="w-full flex flex-col md:flex-row mt-16 md:mt-8">
                @foreach ($testimonials as $testimonial)
                    <div class="p-6 mb-10 md:mb-0 w-full md:w-full h-full">
                        <div class="container max-w-xl mx-auto w-[350px]">
                            <div
                                class="flex flex-col items-center w-full p-6 space-y-8  lg:h-full lg:p-8 shadow-lg rounded-xl pb-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="38"
                                    viewBox="0 0 50 38" fill="none">
                                    <path
                                        d="M15.625 6.25L18.75 0H12.5C5.59375 0 0 8.71875 0 15.625V37.5H21.875V15.625H9.375C9.375 6.25 15.625 6.25 15.625 6.25ZM37.5 15.625C37.5 6.25 43.75 6.25 43.75 6.25L46.875 0H40.625C33.7188 0 28.125 8.71875 28.125 15.625V37.5H50V15.625H37.5Z"
                                        fill="#3986A3" />
                                </svg>
                                <blockquote
                                    class="max-w-lg text-lg italic text-center border-b-2 pb-5 text-black border-b-[#70787D]">
                                    "{{ $testimonial['testimonial'] }}"</blockquote>
                                <div class="text-center dark:text-gray-400 flex flex-col items-center">
                                    <img src="{{ $testimonial['image'] }}" alt=""
                                        class="w-20 h-20 rounded-full dark:bg-gray-500 object-cover">
                                    <p class="text-black text-lg font-medium mt-2">{{ $testimonial['name'] }}</p>
                                    <p>{{ $testimonial['divisi'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FAQ SECTION --}}
    <section class="max-w-6xl z-40 mx-5 md:mx-auto">
        <ul class="flex flex-col">
            @php
                $index = 0;
            @endphp
            @foreach ($faqs as $faq)
                <li class="border bg-white py-2 shadow-sm rounded-lg my-2" x-data="accordion({{ $index }})">
                    <h2 @click="handleClick()"
                        class="flex flex-row justify-between items-center font-medium p-3 cursor-pointer text-lg">
                        <span>{{ $faq['question'] }}</span>
                        <svg :class="handleRotate()"
                            class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20">
                            <path
                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                            </path>
                        </svg>
                    </h2>
                    <div x-ref="tab" :style="handleToggle()"
                        class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all">
                        <p class="p-3 text-gray-900">
                            {{ $faq['answer'] }}
                        </p>
                    </div>
                </li>
                @php
                    $index++;
                @endphp
            @endforeach
        </ul>
    </section>

    <div id="modal" class="absolute md:fixed">
        <div class="modal-content md:w-[900px] flex flex-col gap-3 top-0">
            <div class="flex flex-col gap-1">
                <h5 class="text-black text-2xl" id="modal-name"></h5>
                <div class="flex flex-row items-center gap-2 text-base">
                    <span id="modal-type" class="text-primary bg-blur-bg px-2 py-1 rounded-md uppercase"></span>
                    <span class="text-disabled" id="modal-positions"></span>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-3">
                <div class="flex flex-col gap-2 flex-1">
                    <p class="text-disabled">Job Descriptions : </p>
                    <div class="flex flex-col text-disabled gap-1" id="modal-jobDescriptions">
                    </div>
                </div>
                <div class="flex flex-col gap-2 flex-1">
                    <p class="text-disabled">Requirements : </p>
                    <div class="flex flex-col text-disabled gap-1" id="modal-requirements"></div>
                </div>
            </div>

            <a href="#"
                class="text-center text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 closeModal mt-5">Daftar</a>
            <button
                class="text-center text-base text-white bg-disabled rounded-md duration-700 px-5 py-2 closeModal">Close</button>
        </div>
    </div>

    <script>
        const showModalButtons = document.querySelectorAll('.showModal');
        const closeModalButtons = document.querySelectorAll('.closeModal');
        const modal = document.getElementById('modal');
    
        showModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                const name = button.getAttribute('data-name');
                const type = button.getAttribute('data-type');
                const positions = button.getAttribute('data-positions');
                const location = button.getAttribute('data-location');
                const jobDescription = button.getAttribute('data-jobDescription');
                const requirements = button.getAttribute('data-requirements');
    
                document.getElementById('modal-name').textContent = name;
                document.getElementById('modal-type').textContent = type;
                document.getElementById('modal-positions').textContent = positions;
    
                const jobDescriptionContainer = document.getElementById('modal-jobDescriptions');
                jobDescriptionContainer.innerHTML = '';
                if (jobDescription) {
                    const parsedJobDescription = JSON.parse(jobDescription);
                    parsedJobDescription.forEach((job, index) => {
                        const jobElement = document.createElement('p');
                        let number = index + 1;
                        jobElement.textContent = number + '. ' + job;
                        jobDescriptionContainer.appendChild(jobElement);
                    });
                }
    
                const requirementsContainer = document.getElementById('modal-requirements');
                requirementsContainer.innerHTML = '';
                if (requirements) {
                    const parsedRequirements = JSON.parse(requirements);
                    parsedRequirements.forEach((requirement, index) => {
                        const requirementElement = document.createElement('p');
                        let number = index + 1;
                        requirementElement.textContent = number + '. ' + requirement;
                        requirementsContainer.appendChild(requirementElement);
                    });
                }
    
                modal.style.display = 'flex';
            });
        });
    
        closeModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                modal.style.display = 'none';
            });
        });
    </script>
    

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0
            });

            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>
@endsection
