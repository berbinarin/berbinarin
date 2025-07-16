@extends('dashboard.layouts.app', [
    'title' => 'Detail Berbinar For U',
    'active' => 'Dashboard',
    'modul' => 'Berbinar For U Data',
])

@section('content')
    <section class="flex w-full p-6 bg-gray-100">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route('dashboard.berbinar-for-u.index') }}">
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
                        <a href="{{ route('dashboard.berbinar-for-u.edit', $BerbinarForUDataDetails->id) }}" type="button"
                            class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class="font-medium leading-none text-dark">Edit Data</p>
                        </a>
                        <button type="button" id="deleteButton" data-id="{{ $BerbinarForUDataDetails->id }}"
                            class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class="font-medium leading-none text-white">Delete Data</p>
                        </button>
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
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Hal yang Ingin Diceritakan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $BerbinarForUDataDetails->cerita }}</td>
                                </tr>
                            </tbody>
                        </table>
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
            <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-red-100 mb-4">
                <svg class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                </svg>
            </div>
            <!-- Title -->
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Konfirmasi Hapus Data</h3>
            <!-- Message -->
            <p class="text-gray-600 mb-6">
                Apakah Anda yakin ingin menghapus data Berbinar For U ini? 
                <span class="block text-sm text-gray-500 mt-1">Data yang sudah dihapus tidak dapat dikembalikan.</span>
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