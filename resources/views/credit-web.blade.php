@extends('layouts.main', [
    'title' => 'Credit Web - Berbinar Insightful Indonesia',
    'active' => 'Credit Web',
    'page' => 'Credit Web',
])

@section('content')
    {{-- HERO SECTION --}}
        <div class="new-div flex items-start justify-star" style="margin-top: 125px; margin-bottom: 25px; margin-left: 20px;">
            <h2 class="text-4xl font-bold text-primary">Web & Mobile Apps Developer Staff</h2>
        </div>

    {{-- <div class="max-w-6xl mx-auto md:h-screen flex flex-col md:flex-row items-center justify-center relative px-5 md:px-0" style="margin-top: 50px; "> --}}

        {{-- HERO CONTENT --}}
        <div class="flex item-center justify-center min-h-screen container mx-auto">
            <!--Start Grid-->
            <div class="grid grid-cols-l md:grid-cols-2 lg:grid-cols-3 w-full">

        <!-- Start Card -->
        <div class="rounded-xl shadow-lg mr-4">
                <div class="p-5 flex flex-row items-left ">
                    <!-- Gambar berada di sebelah kiri -->
                    <div class="rounded-xl overflow-hidden">
                    <img src="{{ asset('assets/images/credit-card/Barita-MD.png') }}" alt="Foto Profil" class="w-40 h-40 object-cover rounded-md md:w-40 md:h-40 md:rounded-md sm:w-20 sm:h-20 sm:rounded-lg">
                    </div>
                    <!-- Teks berada di sebelah kanan -->
                    <div class="ml-5 flex flex-col">
                        <h5 class="text-xl md:text-xl font-medium">Barita Davitya <br> Setiawati</h5>
                        <h4 class="text-sm md:text-base lg:text-lg font-medium mt-3">Manager Divisi</h4>
                        <h1 class="text-xs md:text-sm lg:text-base italic font-medium mt-1 text-gray-700">Jan 2024 - Sekarang</h1>
                        <!--Start Icon-->
                        <div class="flex flew-row gap-5 flex-wrap mt-5">
                            <a href="mailto:bdavitya@gmail.com" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxs-envelope text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.linkedin.com/in/bdavitya/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-linkedin text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.instagram.com/bdavitya/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-instagram-alt text-slate-500 text-[20px]'></i>
                            </a>
                        </div>
                        <!--End Icon-->
                    </div>
                </div>
            </div>
            <!-- End Card -->

        <!-- Start Card -->
        <div class="rounded-xl shadow-lg mr-4">
                <div class="p-5 flex flex-row items-left ">
                    <!-- Gambar berada di sebelah kiri -->
                    <div class="rounded-xl overflow-hidden">
                    <img src="{{ asset('assets/images/credit-card/Anggi-FE.jpg') }}" alt="Foto Profil" class="w-40 h-40 object-cover rounded-md md:w-40 md:h-40 md:rounded-md sm:w-20 sm:h-20 sm:rounded-lg">
                    </div>
                    <!-- Teks berada di sebelah kanan -->
                    <div class="ml-5 flex flex-col">
                        <h5 class="text-xl md:text-xl font-medium">Frenchyani Anggi</h5>
                        <h4 class="text-sm md:text-base lg:text-lg font-medium mt-3">Front-End <br> Web Developer</h4>
                        <h1 class="text-xs md:text-sm lg:text-base italic font-medium mt-1 text-gray-700">Feb 2024 - Sekarang</h1>
                        <!--Start Icon-->
                        <div class="flex flew-row gap-5 flex-wrap mt-5">
                            <a href="mailto:frenchyaanianggi2@gmail.com" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxs-envelope text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.linkedin.com/in/frenchyani-anggi-shaktyanti-420851254/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-linkedin text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.instagram.com/frnchyn_shktynt/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-instagram-alt text-slate-500 text-[20px]'></i>
                            </a>
                        </div>
                        <!--End Icon-->
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Start Card -->
            <div class="rounded-xl shadow-lg mr-4">
                <div class="p-5 flex flex-row items-left ">
                    <!-- Gambar berada di sebelah kiri -->
                    <div class="rounded-xl overflow-hidden">
                    <img src="{{ asset('assets/images/credit-card/fathiyyah2-FE.png') }}" alt="Foto Profil" class="w-40 h-40 object-cover rounded-md md:w-40 md:h-40 md:rounded-md sm:w-20 sm:h-20 sm:rounded-lg">
                    </div>
                    <!-- Teks berada di sebelah kanan -->
                    <div class="ml-5 flex flex-col">
                        <h5 class="text-xl md:text-xl font-medium">Nur Fathiyyah</h5>
                        <h4 class="text-sm md:text-base lg:text-lg font-medium mt-3">Front-End <br> Web Developer</h4>
                        <h1 class="text-xs md:text-sm lg:text-base italic font-medium mt-1 text-gray-700">Feb 2024 - Sekarang</h1>
                        <!--Start Icon-->
                        <div class="flex flew-row gap-5 flex-wrap mt-5">
                            <a href="mailto:inifathiyyah@gmail.com" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxs-envelope text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.linkedin.com/in/fathiyarn/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-linkedin text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.instagram.com/fathiyarn/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-instagram-alt text-slate-500 text-[20px]'></i>
                            </a>
                        </div>
                        <!--End Icon-->
                    </div>
                </div>
            </div>
            <!-- End Card -->
             
            <!-- Start Card -->
            <div class="rounded-xl shadow-lg mr-4">
                <div class="p-5 flex flex-row items-left ">
                    <!-- Gambar berada di sebelah kiri -->
                    <div class="rounded-xl overflow-hidden">
                    <img src="{{ asset('assets/images/credit-card/Latief-FE.jpg') }}" alt="Foto Profil" class="w-40 h-40 object-cover rounded-md md:w-40 md:h-40 md:rounded-md sm:w-20 sm:h-20 sm:rounded-lg">
                    </div>
                    <!-- Teks berada di sebelah kanan -->
                    <div class="ml-5 flex flex-col">
                        <h5 class="text-xl md:text-xl font-medium">Latief Ghilfawan</h5>
                        <h4 class="text-sm md:text-base lg:text-lg font-medium mt-3">Front-End <br> Web Developer</h4>
                        <h1 class="text-xs md:text-sm lg:text-base italic font-medium mt-1 text-gray-700">Jul 2024 - Sekarang</h1>
                        <!--Start Icon-->
                        <div class="flex flew-row gap-5 flex-wrap mt-5">
                            <a href="mailto:latief050505@gmail.com" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxs-envelope text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.linkedin.com/in/latief-ghilfawan-8690b5208" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-linkedin text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.instagram.com/latief.g" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-instagram-alt text-slate-500 text-[20px]'></i>
                            </a>
                        </div>
                        <!--End Icon-->
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Start Card -->
            <div class="rounded-xl shadow-lg mr-4">
                <div class="p-5 flex flex-row items-left ">
                    <!-- Gambar berada di sebelah kiri -->
                    <div class="rounded-xl overflow-hidden">
                    <img src="{{ asset('assets/images/credit-card/AdamWisnu-BE.jpg') }}" alt="Foto Profil" class="w-40 h-40 object-cover rounded-md md:w-40 md:h-40 md:rounded-md sm:w-20 sm:h-20 sm:rounded-lg">
                    </div>
                    <!-- Teks berada di sebelah kanan -->
                    <div class="ml-5 flex flex-col">
                        <h5 class="text-xl md:text-xl font-medium">Adam Wisnu</h4>
                        <h4 class="text-sm md:text-base lg:text-lg font-medium mt-3">Back-End <br> Web Developer</h4>
                        <h1 class="text-xs md:text-sm lg:text-base italic font-medium mt-1 text-gray-700">Apr 2024 - Sekarang</h1>
                        <!--Start Icon-->
                        <div class="flex flew-row gap-5 flex-wrap mt-5">
                            <a href="mailto:wisnuadam21@gmail.com" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxs-envelope text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.linkedin.com/in/adamwisnup/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-linkedin text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.instagram.com/adam_wisnup/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-instagram-alt text-slate-500 text-[20px]'></i>
                            </a>
                        </div>
                        <!--End Icon-->
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Start Card -->
            <div class="rounded-xl shadow-lg mr-4">
                <div class="p-5 flex flex-row items-left ">
                    <!-- Gambar berada di sebelah kiri -->
                    <div class="rounded-xl overflow-hidden">
                    <img src="{{ asset('assets/images/credit-card/Ridho-BE.jpg') }}" alt="Foto Profil" class="w-40 h-40 object-cover rounded-md md:w-40 md:h-40 md:rounded-md sm:w-20 sm:h-20 sm:rounded-lg">
                    </div>
                    <!-- Teks berada di sebelah kanan -->
                    <div class="ml-5 flex flex-col">
                        <h5 class="text-xl md:text-xl font-medium">Ridho Aditya </h5>
                        <h4 class="text-sm md:text-base lg:text-lg font-medium mt-3">Back-End <br> Web Developer</h4>
                        <h1 class="text-xs md:text-sm lg:text-base italic font-medium mt-1 text-gray-700">Apr 2024 - Sekarang</h1>
                        <!--Start Icon-->
                        <div class="flex flew-row gap-5 flex-wrap mt-5">
                            <a href="mailto:ridhoaditya925@gmail.com" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxs-envelope text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.linkedin.com/in/ridho-aditya-rosman-eka-putra/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-linkedin text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.instagram.com/ido.adtya?igsh=c3QzMGxjOGJ0bzM1" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-instagram-alt text-slate-500 text-[20px]'></i>
                            </a>
                        </div>
                        <!--End Icon-->
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Start Card -->
            <div class="rounded-xl shadow-lg mr-4">
                <div class="p-5 flex flex-row items-left ">
                    <!-- Gambar berada di sebelah kiri -->
                    <div class="rounded-xl overflow-hidden">
                    <img src="{{ asset('assets/images/credit-card/MuhammadAdam-UIUX.jpg') }}" alt="Foto Profil" class="w-40 h-40 object-cover rounded-md md:w-40 md:h-40 md:rounded-md sm:w-20 sm:h-20 sm:rounded-lg">
                    </div>
                    <!-- Teks berada di sebelah kanan -->
                    <div class="ml-5 flex flex-col">
                        <h5 class="text-xl md:text-xl font-medium">Muhammad <br>Adam</h5>
                        <h4 class="text-sm md:text-base lg:text-lg font-medium mt-3">UI/UX Designer</h4>
                        <h1 class="text-xs md:text-sm lg:text-base italic font-medium mt-1 text-gray-700">Feb 2024 - Sekarang</h1>
                        <!--Start Icon-->
                        <div class="flex flew-row gap-5 flex-wrap mt-5">
                            <a href="mailto:muhadamibrahim1873@gmail.com" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxs-envelope text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.linkedin.com/in/adamibrahim18/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-linkedin text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.instagram.com/dammm_zx/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-instagram-alt text-slate-500 text-[20px]'></i>
                            </a>
                        </div>
                        <!--End Icon-->
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Start Card -->
            <div class="rounded-xl shadow-lg mr-4">
                <div class="p-5 flex flex-row items-left ">
                    <!-- Gambar berada di sebelah kiri -->
                    <div class="rounded-xl overflow-hidden">
                    <img src="{{ asset('assets/images/credit-card/AlfianPutra-UIUX.jpg') }}" alt="Foto Profil" class="w-40 h-40 object-cover rounded-md md:w-40 md:h-40 md:rounded-md sm:w-20 sm:h-20 sm:rounded-lg">
                    </div>
                    <!-- Teks berada di sebelah kanan -->
                    <div class="ml-5 flex flex-col">
                        <h5 class="text-xl md:text-xl font-medium">Alifian Putra <br> Darmawan</h5>
                        <h4 class="text-sm md:text-base lg:text-lg font-medium mt-3">UI/UX Designer</h4>
                        <h1 class="text-xs md:text-sm lg:text-base italic font-medium mt-1 text-gray-700">Mar 2024 - Sekarang</h1>
                        <!--Start Icon-->
                        <div class="flex flew-row gap-5 flex-wrap mt-5">
                            <a href="mailto:alifianputra2123@gmail.com" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxs-envelope text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.linkedin.com/in/muhammad-alifian-putra-darmawan/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-linkedin text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.instagram.com/malifianpd/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-instagram-alt text-slate-500 text-[20px]'></i>
                            </a>
                        </div>
                        <!--End Icon-->
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Start Card -->
            <div class="rounded-xl shadow-lg mr-4">
                <div class="p-5 flex flex-row items-left ">
                    <!-- Gambar berada di sebelah kiri -->
                    <div class="rounded-xl overflow-hidden">
                    <img src="{{ asset('assets/images/credit-card/Briska-ex-UIUX.jpg') }}" alt="Foto Profil" class="w-40 h-40 object-cover rounded-md md:w-40 md:h-40 md:rounded-md sm:w-20 sm:h-20 sm:rounded-lg">
                    </div>
                    <!-- Teks berada di sebelah kanan -->
                    <div class="ml-5 flex flex-col">
                        <h5 class="text-xl md:text-xl font-medium">Briska Putra <br> Ananda</h5>
                        <h4 class="text-sm md:text-base lg:text-lg font-medium mt-3">UI/UX Designer</h4>
                        <h1 class="text-xs md:text-sm lg:text-base italic font-medium mt-1 text-gray-400">Okt 2023 - Apr 2024</h1>
                        <!--Start Icon-->
                        <div class="flex flew-row gap-5 flex-wrap mt-5">
                            <a href="mailto:briskaananda103@gmail.com" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxs-envelope text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.linkedin.com/in/briskaananda/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-linkedin text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.instagram.com/briskaanandaa/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-instagram-alt text-slate-500 text-[20px]'></i>
                            </a>
                        </div>
                        <!--End Icon-->
                    </div>
                </div>
            </div>
            <!-- End Card -->

        <!-- Start Card -->
        <div class="rounded-xl shadow-lg mr-4">
                <div class="p-5 flex flex-row items-left ">
                    <!-- Gambar berada di sebelah kiri -->
                    <div class="rounded-xl overflow-hidden">
                    <img src="{{ asset('assets/images/credit-card/farhan-ex-FS.jpg') }}" alt="Foto Profil" class="w-40 h-40 object-cover rounded-md md:w-40 md:h-40 md:rounded-md sm:w-20 sm:h-20 sm:rounded-lg">
                    </div>
                    <!-- Teks berada di sebelah kanan -->
                    <div class="ml-5 flex flex-col">
                        <h5 class="text-xl md:text-xl font-medium">Farhan</h5>
                        <h4 class="text-sm md:text-base lg:text-lg font-medium mt-3">Full-Stack <br> Web Developer</h4>
                        <h1 class="text-xs md:text-sm lg:text-base italic font-medium mt-1 text-gray-400">Mar 2023 - Des 2023</h1>
                        <!--Start Icon-->
                        <div class="flex flew-row gap-5 flex-wrap mt-5">
                            <a href="mailto:augusf24@gmail.com" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxs-envelope text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://linkedin.com/in/farhantsyh" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-linkedin text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://instagram.com/farhantsyh" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-instagram-alt text-slate-500 text-[20px]'></i>
                            </a>
                        </div>
                        <!--End Icon-->
                    </div>
                </div>
            </div>
            <!-- End Card -->

        <!-- Start Card -->
        <div class="rounded-xl shadow-lg mr-4">
                <div class="p-5 flex flex-row items-left ">
                    <!-- Gambar berada di sebelah kiri -->
                    <div class="rounded-xl overflow-hidden">
                    <img src="{{ asset('assets/images/credit-card/Wawa-ex-FE.jpg') }}" alt="Foto Profil" class="w-40 h-40 object-cover rounded-md md:w-40 md:h-40 md:rounded-md sm:w-20 sm:h-20 sm:rounded-lg">
                    </div>
                    <!-- Teks berada di sebelah kanan -->
                    <div class="ml-5 flex flex-col">
                        <h5 class="text-xl md:text-xl font-medium">Firdausi Baiq</h5>
                        <h4 class="text-sm md:text-base lg:text-lg font-medium mt-3">Front-End <br> Web Developer</h4>
                        <h1 class="text-xs md:text-sm lg:text-base italic font-medium mt-1 text-gray-400">Agu 2023 - Feb 2024</h1>
                        <!--Start Icon-->
                        <div class="flex flew-row gap-5 flex-wrap mt-5">
                            <a href="mailto:firdaardana0111@gmail.com" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxs-envelope text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.linkedin.com/in/firdaardana/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-linkedin text-slate-500 text-[20px]'></i>
                            </a>
                            <a href="https://www.instagram.com/waawaaa_/" class="flex items-center justify-center" target="_blank">
                                <i class='bx bxl-instagram-alt text-slate-500 text-[20px]'></i>
                            </a>
                        </div>
                        <!--End Icon-->
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!--End Grid-->
        </div>
@endsection