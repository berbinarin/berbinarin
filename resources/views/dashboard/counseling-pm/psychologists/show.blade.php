@extends('dashboard.layouts.app', [
    'title' => 'Konselling Psikolog Data',
    'active' => 'Dashboard',
    'modul' => 'Psikolog Data',
])

@section('content')
    <section class="flex w-full p-6 bg-gray-100">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route('dashboard.psychologists.index') }}">
                            <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                        </a>
                        <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">
                            Konseling Psikolog Data
                        </p>
                    </div>
                    <p class="w-3/4 text-disabled">
                        Fitur ini digunakan untuk menampilkan data pendaftar konseling yang
                        mendaftar melalui situs web Berbinar.
                    </p>
                    <div class="mt-8 sm:mt-3 flex space-x-4">
                        <a href="{{ route('dashboard.psychologists.edit', $PsikologDataDetails[0]->id) }}" type="button"
                            class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class="font-medium leading-none text-dark">Edit Data</p>
                        </a>
                        <form action="{{ route('dashboard.psychologists.destroy', $PsikologDataDetails[0]->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
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
                                    <td class="border border-gray-300 px-4 py-2">Nama</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PsikologDataDetails[0]->nama }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Jadwal Tanggal</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        {{ \Carbon\Carbon::parse($PsikologDataDetails[0]->jadwal_tanggal)->format('d-m-Y') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Jadwal Pukul</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $PsikologDataDetails[0]->jadwal_pukul }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Metode</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PsikologDataDetails[0]->metode }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Sesi</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PsikologDataDetails[0]->sesi }} Jam</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Daerah</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PsikologDataDetails[0]->daerah }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Harga</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Rp.
                                        {{ $PsikologDataDetails[0]->harga }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Nomor WhatsApp</td>
                                    <td class="border border-gray-300 px-4 py-2"><a
                                            href="https://wa.me/{{ $PsikologDataDetails[0]->no_wa }}"
                                            class="text-blue-500">{{ $PsikologDataDetails[0]->no_wa }}</a></td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Email</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $PsikologDataDetails[0]->email }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Jenis Kelamin</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PsikologDataDetails[0]->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Agama</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PsikologDataDetails[0]->agama }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Tempat Lahir</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PsikologDataDetails[0]->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Tanggal Lahir</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        {{ \Carbon\Carbon::parse($PsikologDataDetails[0]->tanggal_Lahir)->format('d-m-Y') }}
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Suku</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PsikologDataDetails[0]->suku }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Status Pernikahan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PsikologDataDetails[0]->status_pernikahan }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Alamat</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PsikologDataDetails[0]->alamat }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Posisi Anak</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PsikologDataDetails[0]->posisi_anak }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Pendidikan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PsikologDataDetails[0]->pendidikan }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Riwayat Pekerjaan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PsikologDataDetails[0]->riwayat_pekerjaan }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Hobi</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PsikologDataDetails[0]->hobi }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Kegiatan Sosial</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PsikologDataDetails[0]->kegiatan_sosial }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Hal yang Ingin Diceritakan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PsikologDataDetails[0]->cerita }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection