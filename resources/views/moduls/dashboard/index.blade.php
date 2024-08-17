@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard',
    'active' => 'Dashboard',
    'modul' => 'Dashboard',
])

@section('content-dashboard')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:py-12">
                    <div class="">
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Dashboard</p>
                        @if (Auth::user()->role == 'HR')
                            <p class="w-2/4 text-disabled">Fitur ini digunakan untuk menampilkan jumlah data posisi hiring,
                                job
                                description, serta requirments
                                yang sedang
                                atau akan
                                dibukan atau telah dibuka yang ditampilkan pada website careers Berbinarin.</p>
                        @endif
                        @if (Auth::user()->role == 'Konselling')
                            <p class="w-2/4 text-disabled">Fitur ini digunakan untuk menampilkan data pendaftar konseling
                                yang mendaftar melalui situs web Berbinar</p>
                        @else
                            <p class="w-2/4 text-disabled"></p>
                        @endif
                        @if (Auth::user()->role == 'PsikotestFree')
                            <p class="w-2/4 text-disabled">Fitur ini menampilkan jumlah
                                pendaftar Tes Psikotes Berbinar dan jumlah soal yang ditampilkan pada website Tes Psikotes
                                Berbinar</p>
                        @else
                            <p class="w-2/4 text-disabled"></p>
                        @endif
                        @if (Auth::user()->role == 'BerbinarPlus')
                            <p class="w-2/4 text-disabled">
                                Fitur ini menampilkan jumlah user yang sedang mendaftar pada Berbinar Plus
                            </p>
                        @else
                            <p class="w-2/4 text-disabled"></p>
                        @endif
                        @if (Auth::user()->role == 'PsikotestPaid')
                            <p class="w-2/4 text-disabled">Dashboard ini memberikan informasi mengenai jumlah pengguna yang
                                telah mendaftar psikotes.</p>
                        @else
                            <p class="w-2/4 text-disabled"></p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row w-full gap-6">
                @if (Auth::user()->role == 'HR')
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
                @elseif (Auth::user()->role == 'Konselling')
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
                @elseif (Auth::user()->role == 'PsikotestFree')
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
                @elseif (Auth::user()->role == 'BerbinarPlus')
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
                @elseif (Auth::user()->role == 'PsikotestPaid')
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bxs-user text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-gray-500">Individu</span>
                            <span class="block text-2xl font-bold">{{ $individu }}</span>
                            <span class="block text-gray-500">Pendaftar</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bxs-graduation text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-gray-500">Instansi Pendidikan</span>
                            <span class="block text-2xl font-bold">{{ $educationalInstitution }}</span>
                            <span class="block text-gray-500">Pendaftar</span>
                        </div>
                    </div>
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bxs-business text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-gray-500">Perusahaan</span>
                            <span class="block text-2xl font-bold">{{ $corporate }}</span>
                            <span class="block text-gray-500">Pendaftar</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bxs-group text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-gray-500">Komunitas</span>
                            <span class="block text-2xl font-bold">{{ $community }}</span>
                            <span class="block text-gray-500">Pendaftar</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
