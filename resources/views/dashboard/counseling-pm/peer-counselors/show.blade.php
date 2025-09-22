@extends('dashboard.layouts.app', [
    'title' => 'Detail Peer Counselor',
    'active' => 'Dashboard',
    'modul' => 'Peer Counselor Data',
])

@section('content')
<<<<<<< HEAD
    <section class="flex w-full bg-gray-100 p-6">
        <div class="flex w-full flex-col">
=======
    <section class="flex w-full bg-gray-100">
        <div class="flex flex-col w-full">
>>>>>>> 15609a1c2513c1485a24986d233493a9ebe4fdef
            <div class="w-full">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route('dashboard.peer-counselors.index') }}">
                            <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                        </a>
<<<<<<< HEAD
                        <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Peer
                            Counselor Data</p>
                    </div>
                    <p class="w-3/4 text-disabled">Halaman ini menampilkan detail data peserta Peer Counselor.</p>
                    <div class="mt-8 flex space-x-4 sm:mt-3">
                        <a href="{{ route('dashboard.peer-counselors.edit', $PeerConsellorDataDetails->id) }}"
                            type="button"
                            class="inline-flex items-center justify-center rounded bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2">
                            <p class="text-dark font-medium leading-none">Edit Data</p>
                        </a>
                        <button type="button" id="deleteButton" data-id="{{ $PeerConsellorDataDetails->id }}"
                            class="inline-flex items-center justify-center rounded bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2">
                            <p class="font-medium leading-none text-white">Delete Data</p>
                        </button>
                    </div>
                </div>
                <div
                    class="w-full max-w-[900px] justify-items-center rounded-2xl bg-white px-4 py-4 shadow-lg md:px-6 md:py-4">
                    <!-- Part 1 -->
                    <div class="mb-5 mt-5 w-[803px] overflow-hidden rounded-[20px] border-[0.5px] border-black shadow-md">
                        <!-- Header -->
                        <div class="flex items-center justify-between bg-cyan-700/50 px-7 py-2.5">
                            <h2 class="text-xl text-black">Informasi Konseling</h2>
                        </div>

                        <!-- Body -->
                        <div class="flex flex-col gap-2.5 p-6">
                            <!-- Item Nama + Tanggal Pendaftaran -->
                            <div class="flex items-center justify-between">
                                <!-- Nama -->
                                <div class="flex items-center gap-5">
                                    <span class="w-56 text-lg text-black">Nama</span>
                                    <span class="w-2">:</span>
                                    <span class="text-lg text-black">{{ $PeerConsellorDataDetails->nama }}</span>
                                </div>

                                <!-- Tanggal Pendaftaran -->
                                <div class="flex items-center gap-3.5 text-base text-black">
                                    <span>Tanggal Pendaftaran</span>
                                    <span
                                        class="italic">{{ \Carbon\Carbon::parse($PeerConsellorDataDetails->created_at)->format('d/m/Y') }}</span>
                                </div>
                            </div>

                            <!-- Item Tanggal Konseling -->
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Tanggal Konseling</span>
                                <span class="w-2">:</span>
                                <span
                                    class="text-lg text-black">{{ \Carbon\Carbon::parse($PeerConsellorDataDetails->jadwal_tanggal)->format('d/m/Y') }}</span>
                            </div>

                            <!-- Item Waktu -->
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Waktu</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->jadwal_pukul }} WIB</span>
                            </div>

                            <!-- Item Metode -->
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Metode</span>
                                <span class="w-2">:</span>
                                <span class="text-lg capitalize text-black">{{ $PeerConsellorDataDetails->metode }}</span>
                            </div>

                            <!-- Item Sesi -->
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Sesi</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->sesi }} Jam</span>
                            </div>

                            <!-- Item Daerah -->
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Daerah</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->daerah ?? '-' }}</span>
                            </div>

                            <!-- Item Harga -->
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Harga</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">Rp
                                    {{ number_format($PeerConsellorDataDetails->harga, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- Part 2 -->
                    <div class="mb-5 w-[803px] overflow-hidden rounded-[20px] border-[0.5px] border-black shadow-md">
                        <!-- Header -->
                        <div class="flex items-center justify-between bg-cyan-700/50 px-7 py-2.5">
                            <h2 class="text-xl text-black">Informasi Konseling</h2>
                        </div>

                        <!-- Body -->
                        <div class="flex flex-col gap-2.5 p-6">
                            <!-- Nama -->
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Nomor WhatsApp</span>
                                <span class="w-2">:</span>
                                <a href="https://wa.me/62{{ ltrim($PeerConsellorDataDetails->no_wa, '0') }}"
                                    target="_blank"
                                    class="text-lg text-blue-500 underline hover:text-blue-700">{{ $PeerConsellorDataDetails->no_wa }}</a>
                            </div>
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Email</span>
                                <span class="w-2">:</span>
                                <a href="mailto:{{ $PeerConsellorDataDetails->email }}"
                                    class="text-lg text-blue-500 underline hover:text-blue-700">{{ $PeerConsellorDataDetails->email }}</a>
                            </div>
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Jenis Kelamin</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->jenis_kelamin }}</span>
                            </div>
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Agama</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->agama }}</span>
                            </div>
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Tempat Lahir</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->tempat_lahir }}</span>
                            </div>
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Tanggal Lahir</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->tempat_lahir }}</span>
                            </div>
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Suku</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->suku }}</span>
                            </div>
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Status Pernikahan</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->status_pernikahan }}</span>
                            </div>
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Alamat Domisili</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->alamat }}</span>
                            </div>
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Posisi Anak</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->posisi_anak }}</span>
                            </div>
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Pendidikan</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->pendidikan }}</span>
                            </div>
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Asal Sekolah/Universitas</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->asal_sekolah }}</span>
                            </div>
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Pekerjaan</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->riwayat_pekerjaan }}</span>
                            </div>
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Hobi</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->hobi }}</span>
                            </div>
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Kegiatan Sosial</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->kegiatan_sosial }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- Part 3 -->
                    <div class="mb-5 w-[803px] overflow-hidden rounded-[20px] border-[0.5px] border-black shadow-md">
                        <!-- Header -->
                        <div class="flex items-center justify-between bg-cyan-700/50 px-7 py-2.5">
                            <h2 class="text-xl text-black">Informasi Konseling</h2>
                        </div>

                        <!-- Body -->
                        <div class="flex flex-col gap-2.5 p-6">
                            <!-- Nama -->
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Hal yang ingin diceritakan</span>
                                <span class="w-2">:</span>
                                <span class="text-lg text-black">{{ $PeerConsellorDataDetails->cerita }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- Part 4 -->
                    <div class="mb-5 w-[803px] overflow-hidden rounded-[20px] border-[0.5px] border-black shadow-md">
                        <!-- Header -->
                        <div class="flex items-center justify-between bg-cyan-700/50 px-7 py-2.5">
                            <h2 class="text-xl text-black">Informasi Konseling</h2>
                        </div>

                        <!-- Body -->
                        <div class="flex flex-col gap-2.5 p-6">
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Kategori Voucher</span>
                                <span class="w-2">:</span>
                                <span
                                    class="text-lg text-black">{{ $PeerConsellorDataDetails->kategori_voucher ?? '-' }}</span>
                            </div>

                            <!-- Item Tanggal Konseling -->
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Kode Voucher</span>
                                <span class="w-2">:</span>
                                <span
                                    class="text-lg text-black">{{ $PeerConsellorDataDetails->code_voucher ?? '-' }}</span>
                            </div>

                            <!-- Item Waktu -->
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Persentase Diskon</span>
                                <span class="w-2">:</span>
                                <span
                                    class="text-lg text-black">{{ $PeerConsellorDataDetails->presentase_diskon ? $PeerConsellorDataDetails->presentase_diskon . '%' : '-' }}</span>
                            </div>

                            <!-- Item Metode -->
                            <div class="flex items-center justify-start gap-5">
                                <span class="w-56 text-lg text-black">Kategori Voucher</span>
                                <span class="w-2">:</span>
                                <span class="text-lg capitalize text-black">-</span>
                            </div>

                            <!-- Item Sesi -->
                            <div class="flex items-start justify-start gap-5">
                                <span class="w-56 text-lg text-black">Bukti Kartu Pelajar</span>
                                <span class="w-2">:</span>

                                <!-- Container gambar + overlay -->
                                <div class="relative w-[219px]">
                                    <a href="{{ asset('assets/images/dashboard/Mengejek.jpg') }}" target="_blank">
                                        <img src="{{ asset('assets/images/dashboard/Mengejek.jpg') }}"
                                            alt="Bukti Kartu Pelajar"
                                            class="w-full rounded-md border border-gray-300 object-cover" />
                                        <div
                                            class="absolute bottom-0 left-0 w-full rounded-b-md bg-black/50 py-1 pl-2 text-start font-plusJakartaSans text-lg text-white">
                                            Mengejek.jpg</div>
                                    </a>
                                </div>
                            </div>
                        </div>
=======
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
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 mb-7 rounded-md shadow-lg">
                    <div class="overflow-x-auto flex flex-col gap-6">

                        <div class="border border-gray-500 rounded-3xl overflow-hidden">
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

                        </div>

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
>>>>>>> 15609a1c2513c1485a24986d233493a9ebe4fdef
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
            <img src="{{ asset('assets/images/dashboard/warning.png') }}" alt="Warning Icon"
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

<<<<<<< HEAD
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButton = document.getElementById('deleteButton');
            const deleteModal = document.getElementById('deleteModal');
            const cancelDelete = document.getElementById('cancelDelete');
            const confirmDelete = document.getElementById('confirmDelete');
=======
@endsection

@section('script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteButton = document.getElementById('deleteButton');
    const deleteModal = document.getElementById('deleteModal');
    const cancelDelete = document.getElementById('cancelDelete');
    const confirmDelete = document.getElementById('confirmDelete');
>>>>>>> 15609a1c2513c1485a24986d233493a9ebe4fdef

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
@endsection
