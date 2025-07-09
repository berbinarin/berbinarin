@extends('dashboard.layouts.app', [
    'title' => 'Dashboard',
])

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-10">
                    <div class="">
                        <!-- <p tabindex="0" class="focus:outline-none text-5xl font-bold leading-normal text-gray-800 mb-2">
                                                                                        Dashboard</p> -->
                        @role('hr_recruitment')
                            <p tabindex="0" class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard</p>
                            <p class="w-2/4 text-disabled">Fitur ini digunakan untuk menampilkan jumlah data posisi hiring,
                                job
                                description, serta requirments
                                yang sedang
                                atau akan
                                dibukan atau telah dibuka yang ditampilkan pada website careers Berbinarin.</p>
                        @endrole

                        @role('hr_data-analyst')
                            <p tabindex="0" class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard Keluarga Berbinar</p>
                            <p class="w-full text-disabled">Ringkasan real-time status staf, divisi, dan aktivitas keluarga Berbinar dalam satu tampilan.</p>
                        @endrole

                        @role ('counseling-pm')
                            <p tabindex="0"
                                class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard</p>
                            <p class="w-2/4 text-disabled">Fitur ini digunakan untuk menampilkan data pendaftar konseling
                                yang mendaftar melalui situs web Berbinar</p>
                        @endrole

                        @role ('class-pm')
                            <p tabindex="0"
                                class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard</p>
                            <p class="w-2/4 text-disabled">
                                Fitur ini menampilkan jumlah user yang sedang mendaftar pada Berbinar Plus
                            </p>
                        @endrole
                        @role('marketing')
                            <p tabindex="0"
                                class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard ArteRi</p>
                            <p class="text-base text-disabled">Dashboard ini menampilkan ringkasan statistik, daftar artikel, penulis, dan kategori.</p>
                        @endrole






                        @if (Auth::user()->role == 'PsikotestFree')
                            <p tabindex="0"
                                class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard</p>
                            <p class="w-2/4 text-disabled">Fitur ini menampilkan jumlah
                                pendaftar Tes Psikotes Berbinar dan jumlah soal yang ditampilkan pada website Tes Psikotes
                                Berbinar</p>
                        @else
                            <p class="w-2/4 text-disabled"></p>
                        @endif
                        @if (Auth::user()->role == 'PsikotestPaid')
                        <p 
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Dashboard PsikotestPaid</p>
                    <p class="w-2/4 text-disabled">Dashboard </p>
                        @else
                            <p class="text-disabled"></p>
                        @endif
                        
                    </div>
                </div>
            </div>


            @role ('hr_recruitment')
                <div class="flex flex-row w-full gap-6">
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-briefcase-alt-2  text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $HiringPosisitons }}</span>
                            <span class="block text-gray-500">Positions</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bxl-upwork  text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $HiringPosisitonsJobDescriptionment }}</span>
                            <span class="block text-gray-500">Job Descriptions</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-file text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $HiringPosisitonsRequirement }}</span>
                            <span class="block text-gray-500">Requirements</span>
                        </div>
                    </div>
                </div>
            @endrole

            @role ('hr_data-analyst')
                    <div class="w-full">
                        <div class="rounded-md bg-white px-4 py-8 md:px-8 md:py-10 xl:px-10 w-full max-w-[1230px] mx-auto">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                                <div class="text-white rounded-lg flex flex-col justify-between p-4 sm:p-6 relative" style="background-color: #6B82A7; min-height: 150px;">
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm sm:text-lg font-semibold">Staff Aktif</span>
                                        <i class='bx bx-user text-xl sm:text-2xl'></i>
                                    </div>
                                    <div class="mt-4 sm:mt-8">
                                        <p class="text-3xl sm:text-4xl md:text-5xl font-bold">{{ $staff->where('status', true)->count() }}</p>
                                        <p class="mt-1 text-sm sm:text-base">Staff</p>
                                    </div>
                                </div>
                                <div class="text-white rounded-lg flex flex-col justify-between p-4 sm:p-6 relative" style="background-color: #8BA9C7; min-height: 150px;">
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm sm:text-lg font-semibold">Staff Tidak Aktif</span>
                                        <i class='bx bxs-graduation text-xl sm:text-2xl'></i>
                                    </div>
                                    <div class="mt-4 sm:mt-8">
                                        <p class="text-3xl sm:text-4xl md:text-5xl font-bold">{{ $staff->where('status', false)->count() }}</p>
                                        <p class="mt-1 text-sm sm:text-base">Staff</p>
                                    </div>
                                </div>
                                <div class="text-white rounded-lg flex flex-col justify-between p-4 sm:p-6 relative sm:col-span-2 md:col-span-1" style="background-color: #8DB8E2; min-height: 150px;">
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm sm:text-lg font-semibold">Jumlah Sub Divisi</span>
                                        <i class='bx bxs-buildings text-xl sm:text-2xl'></i>
                                    </div>
                                    <div class="mt-4 sm:mt-8">
                                        <p class="text-3xl sm:text-4xl md:text-5xl font-bold">{{ $subDivisions }}</p>
                                        <p class="mt-1 text-sm sm:text-base">Sub Divisi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endrole
            
            @role ('counseling-pm')
                <div class="flex flex-row w-full gap-6">
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-calendar text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $PeerConsellorSchedule }}</span>
                            <span class="block text-gray-500">Peer Counselor Schedule</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-user text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $PeerConsellorData }}</span>
                            <span class="block text-gray-500">Peer Counselor Data</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-user text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $PsikologData }}</span>
                            <span class="block text-gray-500">Psikolog Data</span>
                        </div>
                    </div>
                </div>
            @endrole

            @role('class-pm')
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-user text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $totalBerbinarPlusUser }}</span>
                            <span class="block text-gray-500">Total Users</span>
                        </div>
                    </div>
                </div>
            @endrole

            @role('marketing')
                <div class="relative flex-grow bg-white shadow-md p-10 overflow-hidden" style="width: 1150px; height: 470px">
                    <div class="grid grid-cols-3 gap-5 h-full">
                        <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #48576A;">
                            <h3 class="block text-2xl font-bold">Buat Artikel</h3>
                            <div class="absolute p-6 bottom-2 right-2 flex flex-col gap-4 font-semibold">
                                <p class="text-end text-5xl">{{ $articleCount}}</p>
                                <p>Postingan Artikel</p>
                            </div>
                        </div>
                        <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #6482AD;">
                            <h3 class="block text-2xl font-bold">Draft Arteri</h3>
                            <div class="absolute p-6 bottom-2 right-2 flex flex-col gap-4 font-semibold">
                                <p class="text-end text-5xl">{{ $authorCount }}</p>
                                <p>Postingan Artikel</p>
                            </div>
                        </div>
                        <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #9E866A;">
                            <h3 class="block text-2xl font-bold">Terupload</h3>
                            <div class="absolute p-6 bottom-2 right-2 flex flex-col gap-4 font-semibold">
                                <p class="text-end text-5xl">{{ $categoryCount }}</p>
                                <p>Postingan Artikel</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endrole
                
            @if (Auth::user()->role == 'PsikotestFree')
                <div class="flex flex-row w-full gap-6">
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-user text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $totalUserPsikotest }}</span>
                            <span class="block text-gray-500">Total Users</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-message-rounded-dots text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $totalQuestion }}</span>
                            <span class="block text-gray-500">Total Questions</span>
                        </div>
                    </div>

            @elseif (Auth::user()->role == 'PsikotestPaid')
                <div class="grid grid-cols-2 gap-8 p-8 bg-gray-100 rounded-lg shadow-lg w-full ml-20 md-20 ">
                    <div class="w-full flex flex-col justify-between items-center p-10 bg-[#6482AD] shadow-lg rounded-lg">
                        <div class="w-full flex flex-row justify-between">
                            <div class="block text-white text-2xl font-semibold">Individu</div>
                            <i class='bx bxs-user text-3xl text-white'></i>
                        </div>
                        <div class="w-full flex flex-col justify-start items-start mt-4">
                            <span class="block text-white text-4xl font-bold">{{ $individu }}</span>
                            <span class="block text-white text-2xl font-semibold">Pendaftar</span>
                        </div>
                    </div>

                    <div class="w-full flex flex-col justify-between items-center p-10 bg-[#7FA1C3] shadow-lg rounded-lg">
                        <div class="w-full flex flex-row justify-between">
                            <div class="block text-white text-2xl font-semibold">Instansi Pendidikan</div>
                            <i class='bx bxs-graduation text-3xl text-white'></i>
                        </div>
                        <div class="w-full flex flex-col justify-start items-start mt-4">
                            <span class="block text-white text-4xl font-bold">{{ $educationalInstitution }}</span>
                            <span class="block text-white text-2xl font-semibold">Pendaftar</span>
                        </div>
                    </div>

                    <div class="w-full flex flex-col justify-between items-center p-10 bg-[#85B3E2] shadow-lg rounded-lg">
                        <div class="w-full flex flex-row justify-between">
                            <div class="block text-white text-2xl font-semibold">Perusahaan</div>
                            <i class='bx bxs-business text-3xl text-white'></i>
                        </div>
                        <div class="w-full flex flex-col justify-start items-start mt-4">
                            <span class="block text-white text-4xl font-bold">{{ $corporate }}</span>
                            <span class="block text-white text-2xl font-semibold">Pendaftar</span>
                        </div>
                    </div>

                    <div class="w-full flex flex-col justify-between items-center p-10 bg-[#94c8fb] shadow-lg rounded-lg">
                        <div class="w-full flex flex-row justify-between">
                            <div class="block text-white text-2xl font-semibold">Komunitas</div>
                            <i class='bx bxs-group text-3xl text-white'></i>
                        </div>
                        <div class="w-full flex flex-col justify-start items-start mt-4">
                            <span class="block text-white text-4xl font-bold">{{ $community }}</span>
                            <span class="block text-white text-2xl font-semibold">Pendaftar</span>
                        </div>
                    </div>
                </div>
                @elseif (Auth::user()->role == 'BerbinarSatu')
                <div class="relative flex-grow bg-white shadow-md p-10 overflow-hidden" style="width: 1150px; height: 470px">
                    <div class="grid grid-cols-3 gap-5 h-full">
                        <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #48576A;">
                            <h3 class="block text-2xl font-bold">Buat Artikel</h3>
                            <div class="absolute p-6 bottom-2 right-2 flex flex-col gap-4 font-semibold">
                                <p class="text-end text-5xl">{{ $articleCount}}</p>
                                <p>Postingan Artikel</p>
                            </div>
                        </div>
                        <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #6482AD;">
                            <h3 class="block text-2xl font-bold">Draft Arteri</h3>
                            <div class="absolute p-6 bottom-2 right-2 flex flex-col gap-4 font-semibold">
                                <p class="text-end text-5xl">{{ $authorCount }}</p>
                                <p>Postingan Artikel</p>
                            </div>
                        </div>
                        <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #9E866A;">
                            <h3 class="block text-2xl font-bold">Terupload</h3>
                            <div class="absolute p-6 bottom-2 right-2 flex flex-col gap-4 font-semibold">
                                <p class="text-end text-5xl">{{ $categoryCount }}</p>
                                <p>Postingan Artikel</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            

        </div>
    </section>
@endsection
