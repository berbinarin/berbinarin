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
                        <a href="{{ route('dashboard.psikolog-staff.index') }}" >
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

                <div class="mb-10">
                    <h1 class="mb-6 text-3xl text-primary-alt font-bold">Data Diri</h1>
                    <div class="grid grid-cols-3 gap-6">
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Nama Lengkap</p>
                            <p class="font-semibold text-lg mb-6 capitalize">Morgan Vero</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Nomor Whatsapp</p>
                            <p class="font-semibold text-lg mb-6">081234567890</p>
                        </div>
                        <div></div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Jenis Kelamin</p>
                            <p class="font-semibold text-lg mb-6">Laki-laki</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Email</p>
                            <p class="font-semibold text-lg mb-6">berbinar@gmail.com</p>
                        </div>
                        <div></div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Tempat Lahir</p>
                            <p class="font-semibold text-lg mb-6">Jombang</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Tanggal Lahir</p>
                            <p class="font-semibold text-lg mb-6">01/01/2000</p>
                        </div>
                        <div></div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Agama</p>
                            <p class="font-semibold text-lg mb-6">Islam</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Suku Bangsa</p>
                            <p class="font-semibold text-lg mb-6">Jawa</p>
                        </div>
                        <div></div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Status Pernikahan</p>
                            <p class="font-semibold text-lg mb-6">Menikah</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Alamat Domisili</p>
                            <p class="font-semibold text-lg mb-6">Jl. Tata Surya No. 123</p>
                        </div>
                        <div></div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Anak ke-</p>
                            <p class="font-semibold text-lg mb-6">6</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Pendidikan Saat Ini</p>
                            <p class="font-semibold text-lg mb-6">SMK</p>
                        </div>
                        <div></div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Hobi</p>
                            <p class="font-semibold text-lg mb-6">Journaling</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Riwayat Pekerjaan</p>
                            <p class="font-semibold text-lg mb-6">PT Berbinar Insightful Indonesia</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Kegiatan Sosial yang Diikuti</p>
                            <p class="font-semibold text-lg mb-6">Kerja Bakti</p>
                        </div>
                    </div>
                </div>

                <div class="mb-10">
                    <h1 class="mb-6 text-3xl text-primary-alt font-bold">Data Konseling</h1>

                    <div class="grid grid-cols-3 gap-6">
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Tanggal Konseling</p>
                            <p class="font-semibold text-lg mb-6 capitalize">01/01/2026</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Hari Konseling</p>
                            <p class="font-semibold text-lg mb-6">Jumat</p>
                        </div>
                        <div></div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Jam Konseling</p>
                            <p class="font-semibold text-lg mb-6">09.00 WIB</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Metode Konseling</p>
                            <p class="font-semibold text-lg mb-6">Metode Konseling</p>
                        </div>
                        <div></div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Sesi Konseling</p>
                            <p class="font-semibold text-lg mb-6">Offline</p>
                        </div>
                        <div>
                            <p class="font-semibold text-lg text-disabled mb-1">Daerah Konseling</p>
                            <p class="font-semibold text-lg mb-6">Jombang</p>
                        </div>
                        <div></div>
                    </div>
                </div>

                <div>
                    <h1 class="mb-6 text-3xl text-primary-alt font-bold">Topik Konseling</h1>
                    <h2 class="mb-3 tet-xl text-disabled font-semibold">Cerita Tentang Hal yang Ingin Dikonsultasikan</h2>
                    <p class="font-semibold text-lg mb-1">
                        Lorem ipsum dolor sit amet consectetur.
                        Facilisis lobortis neque augue pellentesque sem id scelerisque tristique.
                        Aenean massa augue euismod ante blandit viverra lectus nisi facilisis.
                        Egestas fermentum tincidunt integer eget amet nam ut maecenas.
                        Neque vulputate parturient adipiscing ultrices vehicula.
                        Lorem ipsum dolor sit amet consectetur. Facilisis lobortis neque augue pellentesque sem id scelerisque tristique.
                        Aenean massa augue euismod ante blandit viverra lectus nisi facilisis.
                        Egestas fermentum tincidunt integer eget amet nam ut maecenas.
                        Neque vulputate parturient adipiscing ultrices vehicula. Lorem ipsum dolor sit amet consectetur.
                        Facilisis lobortis neque augue pellentesque sem id scelerisque tristique.
                        Aenean massa augue euismod ante blandit viverra lectus nisi facilisis.
                        Egestas fermentum tincidunt integer eget amet nam ut maecenas. Neque vulputate parturient adipiscing ultrices vehicula.
                        Lorem ipsum dolor sit amet consectetur. Facilisis lobortis neque augue pellentesque sem id scelerisque tristique.
                        Aenean massa augue euismod ante blandit viverra lectus nisi facilisis. Egestas fermentum tincidunt integer eget amet nam ut maecenas.
                        Neque vulputate parturient adipiscing ultrices vehicula.
                    </p>
                </div>

            </div>

                {{-- <div class="bg-white py-4 mb-7 md:py-7 px-4 md:px-8 xl:px-10 rounded-md shadow-lg">
                    <div class="mt-4 overflow-x-auto">
                        <table class="w-full table-auto border-collapse border border-gray-300">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Field</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Nama Lengkap</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Morgan Vero</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Tanggal Counseling</td>
                                    <td class="border border-gray-300 px-4 py-2">01/01/2026</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Jadwal Pukul</td>
                                    <td class="border border-gray-300 px-4 py-2">09.00 WIB</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Tanggal Pendaftaran</td>
                                    <td class="border border-gray-300 px-4 py-2">01/12/2025</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Metode</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Metode Konseling</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Sesi</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Offline</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Daerah</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Jombang</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Harga</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Rp. Dummy price</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Nomor WhatsApp</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <a href="Dummy number" target="_blank" class="text-blue-500 hover:text-blue-700 underline">Dummy number</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Email</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <a href="Dummy email" class="text-blue-500 hover:text-blue-700 underline">Dummy email</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Jenis Kelamin</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Dummy gender</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Agama</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Dummy religion</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Tempat Lahir</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Dummy birthplace</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Tanggal Lahir</td>
                                    <td class="border border-gray-300 px-4 py-2">Dummy birthdate</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Suku</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Dummy ethnicity</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Status Pernikahan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Dummy marital status</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Alamat Domisili</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Dummy domicile</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Posisi Anak</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Dummy order-of-birth</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Pendidikan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Dummy education</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Asal Sekolah/Universitas</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Dummy school/university</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Riwayat Pekerjaan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Dummy job</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Hobi</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Dummy hobby</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Kegiatan Sosial</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Dummy social activity</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Hal yang Ingin Diceritakan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Dummy story</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>

@endsection
