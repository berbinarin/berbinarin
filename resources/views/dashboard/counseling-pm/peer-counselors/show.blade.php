@extends('dashboard.layouts.app', [
    'title' => 'Detail Peer Counselor',
    'active' => 'Dashboard',
    'modul' => 'Peer Counselor Data',
])

@section('content')
    <section class="flex w-full bg-gray-100">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route('dashboard.peer-counselors.index') }}">
                            <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.webp') }}" alt="Back Btn" />
                        </a>
                        <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">
                            Data Konseling Peer Counselor
                        </p>
                    </div>
                    <p class="w-full text-disabled">
                        Halaman ini menampilkan detail data peserta Peer Counselor.
                    </p>
                    <div class="mt-8 sm:mt-3 flex space-x-4">
                        <a href="{{ route('dashboard.peer-counselors.edit', $PeerConsellorDataDetails->id) }}" type="button"
                            class="mt-8 inline-flex items-start justify-start rounded-lg border-2 border-primary bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="font-medium leading-none text-dark">Ubah Data</p>
                        </a>
                        <button type="button" id="deleteButton" data-id="{{ $PeerConsellorDataDetails->id }}"
                            class="mt-8 inline-flex items-start justify-start rounded-lg border-2 border-primary px-6 py-3 text-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="font-medium leading-none">Hapus Data</p>
                        </button>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 mb-7 rounded-xl shadow-lg">
                    <div class="overflow-x-auto flex flex-col gap-6">

                        <div class="flex flex-row gap-4">
                            <button type="button" class="section-nav-button font-semibold text-lg text-primary-alt border-b-2 border-primary-alt mb-1" data-target="data-konseling">Data Konseling</button>
                            <button type="button" class="section-nav-button font-semibold text-lg text-disabled mb-1" data-target="data-diri">Data Diri</button>
                            <button type="button" class="section-nav-button font-semibold text-lg text-disabled mb-1" data-target="topik-konseling">Topik Konseling</button>
                            <button type="button" class="section-nav-button font-semibold text-lg text-disabled mb-1" data-target="informasi-konseling">Informasi Konseling</button>
                        </div>

                        {{-- Data Konseling --}}
                        <div id="data-konseling" class="mb-10" tabindex="-1">
                            <h1 class="mb-6 text-3xl text-primary-alt font-bold">Data Konseling</h1>
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Tanggal Konseling</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ \Carbon\Carbon::parse($PeerConsellorDataDetails->jadwal_tanggal)->format('d-m-Y') }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Tanggal Pendaftaran</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ \Carbon\Carbon::parse($PeerConsellorDataDetails->created_at)->format('d-m-Y') }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Waktu</p>
                                    <p class="font-semibold text-lg mb-6">{{ $PeerConsellorDataDetails->jadwal_pukul }} &nbsp;WIB</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Metode</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->metode }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Sesi</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->sesi }} &nbsp;Jam</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Daerah</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->daerah }}</p>
                                </div>
                                <div></div>
                            </div>
                        </div>

                        {{-- Data Diri --}}
                        <div id="data-diri" class="mb-10" tabindex="-1">
                            <h1 class="mb-6 text-3xl text-primary-alt font-bold">Data Diri</h1>
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Nama Lengkap</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->nama }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Jenis Kelamin</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->jenis_kelamin }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Nomor Whatsapp</p>
                                    <p class="font-semibold text-lg mb-6 capitalize"><a href="https://wa.me/62{{ ltrim($PeerConsellorDataDetails->no_wa, '0') }}" target="_blank" class="text-blue-500 hover:text-blue-700 underline">{{ $PeerConsellorDataDetails->no_wa }}</a></p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Email</p>
                                    <p class="font-semibold text-lg mb-6"><a href="mailto:{{ $PeerConsellorDataDetails->email }}" class="text-blue-500 hover:text-blue-700 underline">{{ $PeerConsellorDataDetails->email }}</a></p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Tempat Lahir</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->tempat_lahir }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Posisi Anak</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->posisi_anak }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Alamat Domisili</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->alamat }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Pendidikan</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->pendidikan }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Asal Sekolah/Universitas</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->asal_sekolah }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Agama</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->agama }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Suku Bangsa</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->suku }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Status Pernikahan</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->status_pernikahan }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Pekerjaan</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->riwayat_pekerjaan }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Hobi</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->hobi }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Kegiatan Sosial yang Diikuti</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PeerConsellorDataDetails->kegiatan_sosial }}</p>
                                </div>
                            </div>
                        </div>

                        {{-- Topik Konseling --}}
                        <div id="topik-konseling" class="mb-10" tabindex="-1">
                            <h1 class="mb-6 text-3xl text-primary-alt font-bold">Topik Konseling</h1>
                            <h2 class="mb-3 text-xl text-disabled font-semibold">Cerita Tentang Hal yang Ingin Dikonsultasikan</h2>
                            <p class="font-semibold text-lg mb-1">
                                {{ $PeerConsellorDataDetails->cerita }}
                            </p>
                        </div>

                        {{-- Informasi Konseling --}}
                        <div id="informasi-konseling" tabindex="-1">
                            <h1 class="mb-6 text-3xl text-primary-alt font-bold">Informasi Konseling</h1>
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Kategori Voucher</p>
                                    <p class="font-semibold text-lg mb-6">{{ $PeerConsellorDataDetails->kategori_voucher ?? '-' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Kode Voucher</p>
                                    <p class="font-semibold text-lg mb-6">{{ $PeerConsellorDataDetails->code_voucher ?? '-' }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Persentasi Diskon</p>
                                    <p class="font-semibold text-lg mb-6">{{ $PeerConsellorDataDetails->presentase_diskon ? $PeerConsellorDataDetails->presentase_diskon . '%' : '-' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Bukti Kartu Pelajar</p>
                                    <p class="font-semibold text-lg mb-6">
                                        @if($PeerConsellorDataDetails->bukti_kartu_pelajar)
                                            <a href="{{ asset('storage/' . $PeerConsellorDataDetails->bukti_kartu_pelajar) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $PeerConsellorDataDetails->bukti_kartu_pelajar) }}"
                                                    alt="Bukti Kartu Pelajar"
                                                    style="max-width:120px;max-height:120px;border-radius:8px;border:1px solid #ccc;">
                                            </a>
                                        @else
                                            <span>-</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="border border-gray-500 rounded-3xl overflow-hidden">
                            <div class="bg-[#3986A380] py-3 px-6">Informasi Konseling</div>
                            <div class="w-full flex flex-row">
                                <div class="w-2/3 flex flex-col gap-4 py-4">
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Nama</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->nama }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Tanggal Konseling</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ \Carbon\Carbon::parse($PeerConsellorDataDetails->jadwal_tanggal)->format('d-m-Y') }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Waktu</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->jadwal_pukul }} &nbsp;WIB</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Metode</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->metode }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Sesi</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->sesi }} &nbsp;Jam</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Daerah</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->daerah }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Harga</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">Rp. &nbsp;{{ $PeerConsellorDataDetails->harga }}</div>
                                    </div>
                                </div>

                                <div class="py-4 flex flex-row gap-3 italic w-1/3">
                                    <div class="">Tanggal Pendaftaran</div>
                                    <div class="capitalize">{{ \Carbon\Carbon::parse($PeerConsellorDataDetails->created_at)->format('d-m-Y') }}</div>
                                </div>
                            </div>


                        </div>


                        <div class="border border-gray-500 rounded-3xl overflow-hidden">
                            <div class="bg-[#3986A380] py-3 px-6">Informasi Konseling</div>
                            <div class="w-full flex flex-row">
                                <div class="w-full flex flex-col gap-4 py-4">
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Nomor WhatsApp</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize"><a href="https://wa.me/62{{ ltrim($PeerConsellorDataDetails->no_wa, '0') }}" target="_blank" class="text-blue-500 hover:text-blue-700 underline">{{ $PeerConsellorDataDetails->no_wa }}</a></div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Email</div>
                                        <div>:</div>
                                        <div class="pl-4"><a href="mailto:{{ $PeerConsellorDataDetails->email }}" class="text-blue-500 hover:text-blue-700 underline">{{ $PeerConsellorDataDetails->email }}</a></div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Jenis Kelamin</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->jenis_kelamin }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Agama</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->agama }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Tempat Lahir</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->tempat_lahir }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Suku</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->suku }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Status Pernikahan</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->status_pernikahan }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Alamat Domisili</div>
                                        <div>:</div>
                                        <div class="pl-4">{{ $PeerConsellorDataDetails->alamat }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Posisi Anak</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->posisi_anak }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Pendidikan</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->pendidikan }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Asal Sekolah/Universitas</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->asal_sekolah }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Pekerjaan</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->riwayat_pekerjaan }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Hobi</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->hobi }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Kegiatan Sosial</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->kegiatan_sosial }}</div>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="border border-gray-500 rounded-3xl overflow-hidden">
                            <div class="bg-[#3986A380] py-3 px-6">Informasi Konseling</div>
                            <div class="w-full flex flex-row">
                                <div class="w-full flex flex-col gap-4 py-4">
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Hal yang ingin diceritakan</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PeerConsellorDataDetails->cerita }}</div>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="border border-gray-500 rounded-3xl overflow-hidden">
                            <div class="bg-[#3986A380] py-3 px-6">Informasi Konseling</div>
                            <div class="w-full flex flex-row">
                                <div class="w-full flex flex-col gap-4 py-4">
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Kategori Voucher</div>
                                        <div>:</div>
                                        <div class="pl-4">{{ $PeerConsellorDataDetails->kategori_voucher ?? '-' }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Kode Voucher</div>
                                        <div>:</div>
                                        <div class="pl-4">{{ $PeerConsellorDataDetails->code_voucher ?? '-' }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Persentase Diskon</div>
                                        <div>:</div>
                                        <div class="pl-4">{{ $PeerConsellorDataDetails->presentase_diskon ? $PeerConsellorDataDetails->presentase_diskon . '%' : '-' }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Bukti Kartu Pelajar</div>
                                        <div>:</div>
                                        <div class="pl-4">
                                            @if($PeerConsellorDataDetails->bukti_kartu_pelajar)
                                                <a href="{{ asset('storage/' . $PeerConsellorDataDetails->bukti_kartu_pelajar) }}" target="_blank">
                                                    <img src="{{ asset('storage/' . $PeerConsellorDataDetails->bukti_kartu_pelajar) }}"
                                                        alt="Bukti Kartu Pelajar"
                                                        style="max-width:120px;max-height:120px;border-radius:8px;border:1px solid #ccc;">
                                                </a>
                                            @else
                                                <span>-</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div> --}}

                        {{-- <table class="w-full table-auto border-collapse border border-gray-300">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Field</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Nama Lengkap</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->nama }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Tanggal Counseling</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ \Carbon\Carbon::parse($PeerConsellorDataDetails->jadwal_tanggal)->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Jadwal Pukul</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $PeerConsellorDataDetails->jadwal_pukul }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Tanggal Pendaftaran</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ \Carbon\Carbon::parse($PeerConsellorDataDetails->created_at)->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Metode</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->metode }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Sesi</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->sesi }} Jam</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Daerah</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->daerah }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Harga</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">Rp. {{ number_format($PeerConsellorDataDetails->harga, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Nomor WhatsApp</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <a href="https://wa.me/62{{ ltrim($PeerConsellorDataDetails->no_wa, '0') }}" target="_blank" class="text-blue-500 hover:text-blue-700 underline">{{ $PeerConsellorDataDetails->no_wa }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Email</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <a href="mailto:{{ $PeerConsellorDataDetails->email }}" class="text-blue-500 hover:text-blue-700 underline">{{ $PeerConsellorDataDetails->email }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Jenis Kelamin</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Agama</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->agama }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Tempat Lahir</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Tanggal Lahir</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ \Carbon\Carbon::parse($PeerConsellorDataDetails->tanggal_Lahir)->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Suku</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->suku }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Status Pernikahan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->status_pernikahan }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Alamat Domisili</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->alamat }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Posisi Anak</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->posisi_anak }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Pendidikan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->pendidikan }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Asal Sekolah/Universitas</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->asal_sekolah }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Riwayat Pekerjaan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->riwayat_pekerjaan }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Hobi</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->hobi }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Kegiatan Sosial</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->kegiatan_sosial }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Hal yang Ingin Diceritakan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->cerita }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Kategori Voucher</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->kategori_voucher ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Kode Voucher</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails->code_voucher ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Presentase Diskon</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PeerConsellorDataDetails->presentase_diskon ? $PeerConsellorDataDetails->presentase_diskon . '%' : '-' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Bukti Kartu Pelajar</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        @if($PeerConsellorDataDetails->bukti_kartu_pelajar)
                                            <a href="{{ asset('storage/' . $PeerConsellorDataDetails->bukti_kartu_pelajar) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $PeerConsellorDataDetails->bukti_kartu_pelajar) }}"
                                                    alt="Bukti Kartu Pelajar"
                                                    style="max-width:120px;max-height:120px;border-radius:8px;border:1px solid #ccc;">
                                            </a>
                                        @else
                                            <span>-</span>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black/40">
        <div class="relative w-[560px] rounded-[20px] bg-white p-6 font-plusJakartaSans shadow-lg"
            style="
                background:
                    linear-gradient(to right, #74aabf, #3986a3) top/100% 6px no-repeat,
                    white;
                border-radius: 20px;
                background-clip: padding-box, border-box;
            ">
            <!-- Warning Icon -->
            <img src="{{ asset('assets/images/dashboard/warning.webp') }}" alt="Warning Icon"
                class="mx-auto h-[83px] w-[83px]" />

            <!-- Title -->
            <h2 class="mt-4 text-center font-plusJakartaSans text-2xl font-bold text-stone-900">Konfirmasi Hapus Data</h2>

            <!-- Message -->
            <p class="mt-2 text-center text-base font-medium text-black">Apakah Anda yakin ingin menghapus data ini?</p>

            <!-- Actions -->
            <div class="mt-6 flex justify-center gap-3">
                <button id="cancelDelete"
                    class="rounded-lg border border-stone-300 px-[62px] py-[6px] text-stone-700">Tidak</button>
                <button id="confirmDelete"
                    class="rounded-[5px] bg-gradient-to-r from-[#74AABF] to-[#3986A3] px-[62px] py-[6px] font-medium text-white">Ya</button>
            </div>
        </div>
    </div>

@endsection

@section('script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteButton = document.getElementById('deleteButton');
    const deleteModal = document.getElementById('deleteModal');
    const cancelDelete = document.getElementById('cancelDelete');
    const confirmDelete = document.getElementById('confirmDelete');

            if (deleteButton) {
                deleteButton.addEventListener('click', function() {
                    deleteModal.classList.remove('hidden');
                });
            }

            if (cancelDelete) {
                cancelDelete.addEventListener('click', function() {
                    deleteModal.classList.add('hidden');
                });
            }

            if (confirmDelete) {
                confirmDelete.addEventListener('click', function() {
                    const id = deleteButton.getAttribute('data-id');

                    // Create and submit form
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = `{{ route('dashboard.peer-counselors.destroy', '') }}/${id}`;

                    const csrfToken = document.createElement('input');
                    csrfToken.type = 'hidden';
                    csrfToken.name = '_token';
                    csrfToken.value = '{{ csrf_token() }}';

                    const methodInput = document.createElement('input');
                    methodInput.type = 'hidden';
                    methodInput.name = '_method';
                    methodInput.value = 'DELETE';

                    form.appendChild(csrfToken);
                    form.appendChild(methodInput);
                    document.body.appendChild(form);
                    form.submit();
                });
            }

            // Close modal when clicking outside
            deleteModal.addEventListener('click', function(e) {
                if (e.target === deleteModal) {
                    deleteModal.classList.add('hidden');
                }
            });
        });
    </script>

    <script>
        // Enable nav buttons to scroll/focus corresponding sections and toggle active style
        document.addEventListener('DOMContentLoaded', function () {
            const navButtons = document.querySelectorAll('.section-nav-button');
            navButtons.forEach(btn => {
                btn.addEventListener('click', function () {
                    // update active classes on buttons
                    navButtons.forEach(b => {
                        b.classList.remove('text-primary-alt', 'border-b-2', 'border-primary-alt');
                        b.classList.add('text-disabled');
                    });
                    this.classList.remove('text-disabled');
                    this.classList.add('text-primary-alt', 'border-b-2', 'border-primary-alt');

                    const targetId = this.dataset.target;
                    const target = document.getElementById(targetId);
                    if (target) {
                        // smooth scroll and set focus for accessibility
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        // ensure focusable then focus
                        target.setAttribute('tabindex', '-1');
                        target.focus({ preventScroll: true });
                    }
                });
            });
        });
    </script>
@endsection
