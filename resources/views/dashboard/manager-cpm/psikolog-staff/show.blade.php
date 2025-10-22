@extends('dashboard.layouts.app', [
    'title' => 'Detail Psikolog Staff',
    'active' => 'Dashboard',
])

@section('content')
    <section class="flex flex-col h-full w-full overflow-y-hidden bg-gray-100">

        <!-- Header + Tabs (tidak ikut scroll) -->
        <div class="flex-shrink-0 px-4 md:px-9 xl:px-10 py-4 md:pt-5 md:pb-5 -ml-9 bg-gray-100">
            <!-- Header -->
            <div class="mb-4 flex items-center gap-2">
                <a href="{{ route('dashboard.psychologists-staff.index') }}">
                    <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                </a>
                <p class="xl:text-3xl lg:text-xl md:text-lg sm:text-base font-bold leading-normal text-gray-800">
                    Detail Data Psikolog Staff
                </p>
            </div>
            <p class="w-full text-disabled text-sm xl:text-base font-normal">
                Halaman dashboard ini menampilkan jawaban yang telah dikumpulkan dari pengguna.
            </p>
            <a href="{{ route('dashboard.psychologists-staff.edit', $PsikologDataDetails->id) }}" type="button" class="focus:ring-2 focus:ring-offset-2 mt-2 sm:mt-3 inline-flex items-center justify-center px-4 py-2 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg">
                <p class="text-xs xl:text-sm font-medium">Edit Data</p>
            </a>
        </div>
        <!-- Wrapper bg-white + rounded-3xl -->
        <div class="flex flex-col w-full bg-white rounded-[18px] drop-shadow-lg h-screen overflow-hidden">
            <div class="flex-shrink-0 px-4 md:px-9 xl:px-10 pt-3 pb-5 bg-white sticky -top-8 z-10">
                <div class="flex space-x-10 border-b border-gray-200 mt-6 sm:text-md md:text-base lg:text-lg font-bold">
                    <a href="#data-diri"
                        class="tab-link text-[#75BADB] font-semibold border-b border-[#75BADB] pb-2 transition-all duration-300">
                        Data Diri
                    </a>
                    <a href="#data-konseling"
                        class="tab-link text-gray-800 hover:text-[#75BADB] pb-2 transition-all duration-300">
                        Data Konseling
                    </a>
                    <a href="#topik-konseling"
                        class="tab-link text-gray-800 hover:text-[#75BADB] pb-2 transition-all duration-300">
                        Topik Konseling
                    </a>
                </div>
            </div>

            <!-- Scrollable content -->
            <div class="flex-1 overflow-y-auto px-4 md:px-9 xl:px-10 pb-5 space-y-10">
                <!-- Data Diri -->
                <div id="data-diri" class="scroll-mt-24 mb-10">
                    <h1 class="mb-8 md:text-2xl sm:text-xl lg:text-3xl text-primary-alt font-bold">Data Diri</h1>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-6 text-left">
                        <div class="col-span-1 col-start-1">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Nama Lengkap</p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->nama }}</p>
                        </div>
                        <div class="col-span-1 col-start-2">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Nomor WhatsApp
                            </p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->no_wa }}</p>
                        </div>
                        <div class="col-span-1 col-start-1">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Email</p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->email }}</p>
                        </div>
                        <div class="col-span-1 col-start-2">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Tempat Lahir</p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->tempat_lahir }}</p>
                        </div>
                        <div class="col-span-1 col-start-1">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Tanggal Lahir
                            </p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ \Carbon\Carbon::parse($PsikologDataDetails->tanggal_lahir)->format("d-m-Y") }}</p>
                        </div>
                        <div class="col-span-1 col-start-2">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Umur</p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->umur }} Tahun</p>
                        </div>
                        <div class="col-span-1 col-start-1">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Anak ke-</p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->posisi_anak }}</p>
                        </div>
                        <div class="col-span-1 col-start-2">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Pendidikan Saat
                                Ini</p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->pendidikan }}</p>
                        </div>
                        <div class="col-span-1 col-start-1">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Agama</p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->agama }}</p>
                        </div>
                        <div class="col-span-1 col-start-2">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Alamat Domisili
                            </p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->alamat }}
                            </p>
                        </div>
                        <div class="col-span-1 col-start-1">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Status
                                Pernikahan</p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->status_pernikahan }}</p>
                        </div>
                        <div class="col-span-1 col-start-2">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Suku Bangsa</p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->suku }}</p>
                        </div>

                        <!-- Tambahan: baris terakhir 2 kolom -->
                        <div class="col-span-1 col-start-1">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Riwayat
                                Pekerjaan</p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->riwayat_pekerjaan }}</p>
                        </div>
                        <div class="col-span-1 col-start-2">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Divisi dan
                                Posisi</p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->divisi }} ({{ $PsikologDataDetails->posisi }})</p>
                        </div>
                        <div class="col-span-1 col-start-3">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Hobi atau
                                Kegiatan Sosial yang diikuti
                            </p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->hobi }} atau {{ $PsikologDataDetails->kegiatan_sosial }}</p>
                        </div>
                    </div>
                </div>

                <!-- Data Konseling -->
                <div id="data-konseling" class="scroll-mt-24 mb-10">
                    <h1 class="mb-8 md:text-2xl sm:text-xl lg:text-3xl text-primary-alt font-bold">Data Konseling</h1>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-6 text-left">
                        <div class="col-span-1 col-start-1">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Tanggal
                                Konseling</p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ \Carbon\Carbon::parse($PsikologDataDetails->jadwal_tanggal)->format("d-m-Y") }}</p>
                        </div>
                        <div class="col-span-1 col-start-2">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Jam Konseling
                            </p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->jadwal_pukul }}</p>
                        </div>
                        <div class="col-span-1 col-start-1">
                            <p class="text-[#9e9e9e] sm:text-xs md:text-sm lg:text-base mb-1 font-semibold">Topik Pengajuan
                            </p>
                            <p class="font-semibold sm:text-xs md:text-sm lg:text-base text-black">{{ $PsikologDataDetails->topik_pengajuan }}</p>
                        </div>
                    </div>
                </div>

                <!-- Topik Konseling -->
                <div id="topik-konseling" class="scroll-mt-24 mb-10">
                    <h1 class="md:text-2xl sm:text-xl lg:text-3xl text-primary-alt font-bold mb-2">Topik Konseling</h1>
                    <h2 class="mb-3 text-xs lg:text-md  text-disabled font-normal">
                        Cerita Tentang Hal yang Ingin Dikonsultasikan
                    </h2>
                    <p class="font-semibold sm:text-xs md:text-sm lg:text-base mb-1">
                        {{ $PsikologDataDetails->cerita }}
                    </p>
                </div>
            </div>
        </div>
        <div class="pt-2"></div>

    </section>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const links = document.querySelectorAll('.tab-link');

            links.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();

                    // hapus style aktif semua tab
                    links.forEach(l => {
                        l.classList.remove('text-[#75BADB]', 'border-b-2',
                            'border-[#75BADB]');
                        l.classList.add('text-gray-800');
                    });

                    // tambah style aktif
                    link.classList.remove('text-gray-800');
                    link.classList.add('text-[#75BADB]', 'border-b-2', 'border-[#75BADB]');

                    // scroll ke target
                    const targetId = link.getAttribute('href');
                    const targetEl = document.querySelector(targetId);
                    if (targetEl) {
                        targetEl.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
@endsection
