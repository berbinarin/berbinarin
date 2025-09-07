@extends('dashboard.layouts.app', [
    'title' => 'Detail Berbinar For U',
    'active' => 'Dashboard',
    'modul' => 'Berbinar For U Data',
])

@section('content')
    <section class="flex w-full bg-gray-100">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route('dashboard.berbinar-for-u.index') }}">
                            <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                        </a>
                        <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">
                            Data Berbinar For U
                        </p>
                    </div>
                    <p class="w-full text-disabled">
                        Halaman ini menampilkan detail data peserta Berbinar For U.
                    </p>
                    <div class="mt-8 sm:mt-3 flex space-x-4">
                        <a href="{{ route('dashboard.berbinar-for-u.edit', $BerbinarForUDataDetails->id) }}" type="button"
                            class="mt-8 inline-flex items-start justify-start rounded-lg border-2 border-primary bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="font-medium leading-none">Ubah Data</p>
                        </a>
                        <button type="button" id="deleteButton" data-id="{{ $BerbinarForUDataDetails->id }}"
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
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->nama }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Tanggal Konseling</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ \Carbon\Carbon::parse($BerbinarForUDataDetails->jadwal_tanggal)->format('d-m-Y') }}</div>
                                    </div>
                                </div>

                                <div class="py-4 flex flex-row gap-3 italic w-1/3">
                                    <div class="">Tanggal Pendaftaran</div>
                                    <div class="capitalize">{{ \Carbon\Carbon::parse($BerbinarForUDataDetails->created_at)->format('d-m-Y') }}</div>
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
                                        <div class="pl-4 capitalize"><a href="https://wa.me/62{{ ltrim($BerbinarForUDataDetails->no_wa, '0') }}" target="_blank" class="text-blue-500 hover:text-blue-700 underline">{{ $BerbinarForUDataDetails->no_wa }}</a></div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Email</div>
                                        <div>:</div>
                                        <div class="pl-4"><a href="mailto:{{ $BerbinarForUDataDetails->email }}" class="text-blue-500 hover:text-blue-700 underline">{{ $BerbinarForUDataDetails->email }}</a></div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Jenis Kelamin</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->jenis_kelamin }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Agama</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->agama }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Tempat Lahir</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->tempat_lahir }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Tanggal Lahir</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->tanggal_lahir }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Suku</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->suku }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Status Pernikahan</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->status_pernikahan }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Alamat Domisili</div>
                                        <div>:</div>
                                        <div class="pl-4">{{ $BerbinarForUDataDetails->alamat }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Posisi Anak</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->posisi_anak }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Pendidikan</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->pendidikan }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Asal Sekolah/Universitas</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->asal_sekolah }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Pekerjaan</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->riwayat_pekerjaan }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Hobi</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->hobi }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Kegiatan Sosial</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->kegiatan_sosial }}</div>
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
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->cerita_utama }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Informasi Tambahan</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->cerita_tambahan }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Alasan Konseling</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->alasan_konseling }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Harapan Setelah Konseling</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $BerbinarForUDataDetails->harapan_konseling }}</div>
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
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->nama }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Email</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <a href="mailto:{{ $BerbinarForUDataDetails->email }}" class="text-blue-500 hover:text-blue-700 underline">{{ $BerbinarForUDataDetails->email }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Jenis Kelamin</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Tanggal Lahir</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ \Carbon\Carbon::parse($BerbinarForUDataDetails->tanggal_lahir)->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Kota Domisili</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Alamat Domisili</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->alamat }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Status Pernikahan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->status_pernikahan }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Nomor WhatsApp</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <a href="https://wa.me/62{{ ltrim($BerbinarForUDataDetails->no_wa, '0') }}" target="_blank" class="text-blue-500 hover:text-blue-700 underline">{{ $BerbinarForUDataDetails->no_wa }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Agama</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->agama }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Suku Bangsa</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->suku }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Anak ke-</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->posisi_anak }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Hobi</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->hobi }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Pendidikan Terakhir</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->pendidikan }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Asal Sekolah/Universitas</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->asal_sekolah }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Pekerjaan Saat Ini</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->riwayat_pekerjaan }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Kegiatan Sosial yang Pernah/Sedang Diikuti</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->kegiatan_sosial }}</td>
                                </tr>
                                    <td class="border border-gray-300 px-4 py-2">Hal yang Ingin Diceritakan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->cerita_utama }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Informasi Tambahan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->cerita_tambahan }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Alasan Konseling</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->alasan_konseling }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Harapan Setelah Konseling</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->harapan_konseling }}</td>
                                </tr>
                            </tbody>
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white rounded-2xl shadow-xl max-w-md w-full mx-4">
        <!-- Modal Header -->
        <div class="text-center p-6">
            <!-- Warning Icon -->
            <div class="flex justify-center mb-4">
                <img src="{{ asset('assets/images/dashboard/svg-icon/warning.svg') }}" alt="Warning Icon" class="h-12 w-12">
            </div>
            <!-- Title -->
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Konfirmasi Hapus Data</h3>
            <!-- Message -->
            <p class="text-gray-600 mb-6">
                Apakah Anda yakin ingin menghapus data Berbinar For U ini?
            </p>
        </div>

        <!-- Modal Actions -->
        <div class="flex gap-3 px-6 pb-6">
            <button id="cancelDelete" class="flex-1 px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-xl hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 font-medium transition-colors">
                Batal
            </button>
            <button id="confirmDelete" class="flex-1 px-4 py-3 text-white rounded-xl font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 transition-colors" style="background-color: #3986A3;" onmouseover="this.style.backgroundColor='#2d6b7a'" onmouseout="this.style.backgroundColor='#3986A3'">
                Ya, Hapus!
            </button>
        </div>
    </div>
</div>

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
            form.action = `{{ route('dashboard.berbinar-for-u.destroy', '') }}/${id}`;

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
