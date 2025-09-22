@extends('dashboard.layouts.app', [
    'title' => 'Detail Psikolog Staff',
    'active' => 'Dashboard',
])

@section('content')
<section class="flex w-full bg-gray-100">
    <div class="flex flex-col w-full">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div class="mb-2 flex items-center gap-2">
                    <a href="{{ route('dashboard.psychologists-staff.index') }}">
                        <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                    </a>
                    <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">
                        Detail Data Psikolog Staff
                    </p>
                </div>
                <p class="w-3/4 text-disabled">
                    Halaman dashboard ini menampilkan jawaban yang telah dikumpulkan dari pengguna.
                </p>
            </div>

            <div class="rounded-3xl bg-white mb-7 px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">

                {{-- Data Diri --}}
                <div class="mb-10">
                    <h1 class="mb-6 text-3xl text-primary-alt font-bold">Data Diri</h1>
                    <div class="grid grid-cols-3 gap-6">
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Nama Lengkap</p>
                            <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->nama }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Nomor Whatsapp</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->no_wa }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Email</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->email }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Tempat Lahir</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->tempat_lahir }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Tanggal Lahir</p>
                            <p class="font-semibold text-lg mb-6">{{ \Carbon\Carbon::parse($PsikologDataDetails->tanggal_Lahir)->format('d-m-Y') }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Umur</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->umur }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Agama</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->agama }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Suku Bangsa</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->suku }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Status Pernikahan</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->status_pernikahan }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Alamat Domisili</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->alamat }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Anak ke-</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->posisi_anak }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Pendidikan Saat Ini</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->pendidikan }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Hobi</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->hobi }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Riwayat Pekerjaan</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->riwayat_pekerjaan }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Kegiatan Sosial yang Diikuti</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->kegiatan_sosial }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Divisi</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->divisi }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Posisi</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->posisi }}</p>
                        </div>
                    </div>
                </div>

                {{-- Data Konseling --}}
                <div class="mb-10">
                    <h1 class="mb-6 text-3xl text-primary-alt font-bold">Data Konseling</h1>
                    <div class="grid grid-cols-3 gap-6">
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Tanggal Konseling</p>
                            <p class="font-semibold text-lg mb-6 capitalize">{{ \Carbon\Carbon::parse($PsikologDataDetails->jadwal_tanggal)->format('d-m-Y') }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Jam Konseling</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->jadwal_pukul }}</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Topik Pengajuan</p>
                            <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->topik_pengajuan }}</p>
                        </div>
                    </div>
                </div>

                {{-- Cerita Konseling --}}
                <div>
                    <h1 class="mb-6 text-3xl text-primary-alt font-bold">Cerita Konseling</h1>
                    <h2 class="mb-3 text-xl text-disabled font-semibold">Cerita Tentang Hal yang Ingin Dikonsultasikan</h2>
                    <p class="font-semibold text-lg mb-1">
                        {{ $PsikologDataDetails->cerita }}
                    </p>
                </div>

            </div>
        </div>
</section>
@endsection