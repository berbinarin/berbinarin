@extends('dashboard.layouts.app', [
    'title' => 'Konselling Psikolog Data',
    'active' => 'Dashboard',
    'modul' => 'Psikolog Data',
])

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="">
                        <div class="flex flex-row gap-2">
                            <a href="{{ route("dashboard.data.index") }}">
                                <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.png") }}" alt="Back Btn" />
                            </a>
                            <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Data Konseling Psikolog</p>
                        </div>
                        <p class="w-full text-disabled">Fitur ini digunakan untuk menampilkan data pendaftar konseling yang
                            mendaftar melalui situs web Berbinar.</p>
                        <a href="{{ route('dashboard.psychologists.create') }}" type="button"
                            class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class=" font-medium leading-none text-dark">Tambah Data</p>
                        </a>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 mb-7 rounded-md">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Nama Lengkap</th>
                                    <th style="text-align: center">Tanggal Counseling</th>
                                    <th style="text-align: center">Pukul</th>
                                    <th style="text-align: center">Tanggal Pendaftaran</th>
                                    <th style="text-align: center">Metode</th>
                                    <th style="text-align: center">Sesi</th>
                                    <th style="text-align: center">Daerah</th>
                                    <th style="text-align: center">Harga</th>
                                    <th style="text-align: center">Nomor WhatsApp</th>
                                    <th style="text-align: center">Aksi</th>
                                </tr>

                            </thead>
                            <tbody>
                                @forelse ($PsikologData as $key=>$item)
                                    <tr class="data-consume">
                                        <td class="text-center"style="height: 40px">{{ $key + 1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->jadwal_tanggal)->format('d-m-Y') }}</td>
                                        <td class="text-center">{{ $item->jadwal_pukul }}</td>
                                        <td class="text-center">{{ \Carbon\Carbon::parse($item->created_at)->format("d-m-Y") }}</td>
                                        <td style="text-transform: capitalize;">{{ $item->metode }}</td>
                                        <td style="text-transform: capitalize;">{{ $item->sesi }} Jam</td>
                                        <td style="text-transform: capitalize;">{{ $item->daerah }}</td>
                                        <td style="text-transform: capitalize;">Rp. {{ $item->harga }}</td>
                                        <td class="text-center">
                                            <a href="https://wa.me/62{{ ltrim($item->no_wa, '0') }}" target="_blank" class="text-blue-500 hover:text-blue-700 underline">{{ $item->no_wa }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('dashboard.psychologists.show', $item->id) }}"
                                                class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-3 bg-gray-500 hover:bg-gray-600 focus:outline-none rounded">
                                                <i class='bx bx-show text-white'></i>
                                            </a>
                                        </td>

                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
