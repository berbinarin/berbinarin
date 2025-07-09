@extends('dashboard.layouts.app', [
    'title' => 'Detail Berbinar For U',
    'active' => 'Dashboard',
    'modul' => 'Berbinar For U',
])

@section('content')
    <section class="flex w-full p-6 bg-gray-100">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route('dashboard.berbinar-for-u.index') }}" >
                            <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                        </a>
                        <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">
                            Berbinar For U Data
                        </p>
                    </div>
                    <p class="w-3/4 text-disabled">
                        Halaman ini menampilkan detail data peserta Berbinar For U.
                    </p>
                    <div class="mt-8 sm:mt-3 flex space-x-4">
                        <a href="{{ route('dashboard.berbinar-for-u.edit', 1) }}" type="button"
                            class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class="font-medium leading-none text-dark">Edit Data</p>
                        </a>
                        <form action="#" method="POST">
                            <button type="submit"
                                class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                                <p class="font-medium leading-none text-dark">Delete Data</p>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md shadow-lg">
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
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Budi Santoso</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Nomor WhatsApp</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <a href="https://wa.me/6281234567890" class="text-blue-500">0812-3456-7890</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Email</td>
                                    <td class="border border-gray-300 px-4 py-2">budi.santoso@email.com</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Jenis Kelamin</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Laki-laki</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Tanggal Lahir</td>
                                    <td class="border border-gray-300 px-4 py-2">12-05-2000</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Status Pernikahan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Belum Menikah</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Kota Domisili</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Bandung</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Alamat Domisili</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Jl. Merdeka No. 10</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Agama</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Islam</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Suku Bangsa</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Sunda</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Anak ke-</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">2 dari 3 bersaudara</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Hobi</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Membaca, Sepak Bola</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Pendidikan Terakhir</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">S1 Psikologi</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Asal Sekolah/Universitas</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Universitas Indonesia</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Pekerjaan Saat Ini</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Mahasiswa</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Kegiatan Sosial yang Pernah/Sedang Diikuti</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Volunteer Berbinar, OSIS</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Hal yang Ingin Diceritakan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Ingin konsultasi tentang manajemen waktu kuliah dan organisasi.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection