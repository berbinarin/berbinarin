@extends('dashboard.layouts.app', [
    'title' => 'Ubah Kode Voucher',
    'active' => 'Dashboard',
])

@section('content')
<section class="flex w-full">
    <div class="flex w-full flex-col">
        <div class="py-4 md:pb-7 md:pt-12">
            <div class="mb-2 flex items-center gap-2">
                <a href="{{ route('dashboard.code-voucher.index') }}">
                    <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                </a>
                <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Ubah Kode Voucher</p>
            </div>
            <p class="w-3/4 text-disabled">
                Halaman yang digunakan untuk mengubah, mengelola, dan melengkapi kode voucher.
            </p>
        </div>
        <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
            <form id="createForm" method="POST" action="{{ route('dashboard.code-voucher.update', $voucher->id) }}">
                @csrf
                @method('PUT')
                
                <!-- Voucher Container -->
                <div id="voucherContainer">
                    <!-- Initial Voucher Row -->
                    <div class="voucher-row mb-8">
                        <div class="flex flex-row justify-between gap-2 mb-6">
                            <div class="text-left w-1/2">
                                <label class="block mb-1 font-medium text-gray-600">Jenis Pendaftaran</label>
                                <select name="jenis_pendaftaran" id="jenisPendaftaran" class="w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                    <option value="" disabled {{ empty(old('jenis_pendaftaran', $voucher->jenis_pendaftaran)) ? 'selected' : '' }}>Pilih Kategori</option>
                                    <option value="psikolog" {{ old('jenis_pendaftaran', $voucher->jenis_pendaftaran) == 'psikolog' ? 'selected' : '' }}>Psikolog</option>
                                    <option value="peer-counselor" {{ old('jenis_pendaftaran', $voucher->jenis_pendaftaran) == 'peer-counselor' ? 'selected' : '' }}>Peer Counselor</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between gap-2 mb-6">
                            <div class="text-left w-1/2">
                                <label class="block mb-1 font-medium text-gray-600">Kategori Voucher</label>
                                <select name="category" id="createCategory" class="w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                    <option value="" disabled {{ empty(old('category', $voucher->category)) ? 'selected' : '' }}>Pilih Kategori</option>
                                    <option value="umum" {{ old('category', $voucher->category) == 'umum' ? 'selected' : '' }}>Umum</option>
                                    <option value="pelajar" {{ old('category', $voucher->category) == 'pelajar' ? 'selected' : '' }}>Pelajar</option>
                                </select>
                            </div>
                            <div class="text-left w-1/2">
                                <label class="block mb-1 font-medium text-gray-600">Nama Voucher</label>
                                <input type="text" name="nama_voucher" value="{{ old('nama_voucher', $voucher->nama_voucher) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2" placeholder="Nama Voucher" required>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between gap-2 mb-6">
                            <div class="text-left w-1/2">
                                <label class="block mb-1 font-medium text-gray-600">Kode Voucher</label>
                                <input type="text" name="code" value="{{ old('code', $voucher->code) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2" placeholder="Berbinar123" required>
                            </div>
                            <div class="text-left w-1/2 relative">
                                <label class="block mb-1 font-medium text-gray-600">Diskon</label>
                                <span class="absolute right-3 top-9 text-disabled text-base pointer-events-none">%</span>
                                <input type="number" name="percentage" value="{{ old('percentage', $voucher->percentage) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2" min="1" max="100" placeholder="90" required>
                            </div>
                        </div>

                        @php
                            $tipeArr = is_array($voucher->tipe) ? $voucher->tipe : json_decode($voucher->tipe, true);
                            $detailArr = is_array($voucher->detail) ? $voucher->detail : json_decode($voucher->detail, true);
                        @endphp
                        @foreach($tipeArr as $i => $t)
                        <div class="flex flex-col voucher-row">

                        
                        <div class="flex flex-row justify-between gap-2 mb-6 ">
                            <div class="text-left w-1/2">
                                <label class="block mb-1 font-medium text-gray-600">Tipe Voucher</label>
                                <select name="tipe[]" class="voucher-type w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                    <option value="">Pilih Tipe</option>
                                    <option value="metode" {{ $t == 'metode' ? 'selected' : '' }}>Metode</option>
                                    <option value="hari" {{ $t == 'hari' ? 'selected' : '' }}>Hari</option>
                                    <option value="sesi" {{ $t == 'sesi' ? 'selected' : '' }}>Sesi</option>
                                </select>
                            </div>
                            <div class="text-left w-1/2">
                                <label class="block mb-1 font-medium text-gray-600 detail-label">
                                    @if($t == 'metode') Metode
                                    @elseif($t == 'hari') Hari
                                    @elseif($t == 'sesi') Durasi
                                    @else Detail
                                    @endif
                                </label>
                                <select name="detail[]" class="voucher-detail w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                    <option value="">Pilih Detail</option>
                                    @php
                                        $detailOptions = [];
                                        if($t == 'metode') $detailOptions = ['offline','online'];
                                        elseif($t == 'hari') $detailOptions = ['weekdays','weekend'];
                                        elseif($t == 'sesi') $detailOptions = ['1','2','3'];
                                    @endphp
                                    @foreach($detailOptions as $opt)
                                        <option value="{{ $opt }}" {{ ($detailArr[$i] ?? '') == $opt ? 'selected' : '' }}>
                                            @if($t == 'sesi')
                                                {{ $opt }} Jam
                                            @else
                                                {{ ucfirst($opt) }}
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="button"
                                class="btn-delete-voucher flex items-center gap-2 rounded-lg border border-red-200 bg-red-50 px-3 py-2 text-sm font-semibold text-red-600 transition hover:bg-red-600 hover:text-white hover:border-red-600 shadow-sm"
                                @if(count($tipeArr) == 1) disabled style="opacity:0.5;cursor:not-allowed;" @endif>
                                <i class="bx bx-trash text-lg"></i>
                                <span>Hapus</span>
                            </button>
                        </div>
                        </div>
                    @endforeach

                    </div>
                </div>

                <!-- Voucher Template (Hidden) -->
                <template id="voucherTemplate">
                    <div class="voucher-row mb-6">
                        <div class="flex flex-row justify-between gap-2 mb-6">
                            <div class="text-left w-1/2">
                                <label class="block mb-1 font-medium text-gray-600">Tipe Voucher</label>
                                <select name="tipe[]" class="voucher-type w-full rounded-lg border border-gray-300 px-3 py-2" required onchange="updateDetailOptions(this)">
                                    <option value="">Pilih Tipe</option>
                                    <option value="metode">Metode</option>
                                    <option value="hari">Hari</option>
                                    <option value="sesi">Sesi</option>                
                                </select>
                            </div>
                            <div class="text-left w-1/2">
                                <label class="block mb-1 font-medium text-gray-600 detail-label">Detail</label>
                                <select name="detail[]" class="voucher-detail w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                    <option value="">Pilih Detail</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="button" class="btn-delete-voucher flex items-center gap-2 rounded-lg border border-red-200 bg-red-50 px-3 py-2 text-sm font-semibold text-red-600 transition hover:bg-red-600 hover:text-white hover:border-red-600 shadow-sm">
                                <i class="bx bx-trash text-lg"></i>
                                <span>Hapus</span>
                            </button>
                        </div>
                    </div>
                    {{-- <hr class="mb-6 border-t-2 border-t-gray-400" /> --}}
                </template>

                <!-- Add More Button -->
                <div class="mt-6 flex cursor-pointer items-center justify-center rounded-lg border border-dashed border-blue-500 py-2 text-blue-500" id="addVoucherButton">
                    <h1 class="">
                        <i class="bx bx-plus-circle"></i>
                        Tambahkan Voucher Lain
                    </h1>
                </div>

                    <hr class="mb-6 border-t-2 border-t-gray-400 mt-5"/>

                <div class="flex w-full mb-2 justify-center gap-4">
                    <button type="button" class="rounded-lg border border-[#3986A3] w-1/2 px-6 py-2 text-[#3986A3] focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2" onclick="closeCreateModal()">Batal</button>
                    <button type="submit" class="rounded-lg bg-[#3986A3] w-1/2 px-6 py-2 text-white text-center hover:bg-[#3986A3] focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Modal Konfirmasi -->
<div id="confirmModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-50">
    <div class="w-full max-w-md rounded-lg bg-white p-6 text-center">
        <div class="mb-4 flex justify-center">
            <img src="{{ asset("assets/images/dashboard/svg-icon/warning.svg") }}" alt="Warning Icon" class="h-12 w-12" />
        </div>
        <p class="mb-6 text-lg">Apakah Anda yakin ingin membatalkan penambahan data ini?</p>
        <div class="flex justify-center gap-4">
            <button id="confirmCancel" class="rounded-lg bg-[#3986A3] px-6 py-2 text-white">OK</button>
            <button id="cancelCancel" class="rounded-lg border border-[#3986A3] px-6 py-2 text-[#3986A3]">Cancel</button>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    const voucherTypeOptions = {
        'metode': [
            { value: 'offline', text: 'Offline' },
            { value: 'online', text: 'Online' }
        ],
        'hari': [
            { value: 'weekdays', text: 'Weekdays' },
            { value: 'weekend', text: 'Weekend' }
        ],
        'sesi': [
            { value: '1', text: '1 Jam' },
            { value: '2', text: '2 Jam' },
            { value: '3', text: '3 Jam' }
        ]
    };

    // Function to update detail options based on selected voucher type
    function updateDetailOptions(selectElement) {
        const voucherType = selectElement.value;
        const voucherRow = selectElement.closest('.voucher-row');
        const detailSelect = voucherRow.querySelector('.voucher-detail');
        const detailLabel = voucherRow.querySelector('.detail-label');
        
        // Update label based on type
        switch(voucherType) {
            case 'metode':
                detailLabel.textContent = 'Metode';
                break;
            case 'hari':
                detailLabel.textContent = 'Hari';
                break;
            case 'sesi':
                detailLabel.textContent = 'Durasi';
                break;
            default:
                detailLabel.textContent = 'Detail';
        }
        
        // Update options
        detailSelect.innerHTML = '<option value="">Pilih Detail</option>';
        
        if (voucherType && voucherTypeOptions[voucherType]) {
            voucherTypeOptions[voucherType].forEach(option => {
                const optionElement = document.createElement('option');
                optionElement.value = option.value;
                optionElement.textContent = option.text;
                detailSelect.appendChild(optionElement);
            });
        }
    }

    function updateDeleteButtons() {
        const rows = document.querySelectorAll('#voucherContainer .voucher-row');
        rows.forEach((row, idx) => {
            const btn = row.querySelector('.btn-delete-voucher');
            if (rows.length === 1) {
                btn.disabled = true;
                btn.style.opacity = '0.5';
                btn.style.cursor = 'not-allowed';
            } else {
                btn.disabled = false;
                btn.style.opacity = '';
                btn.style.cursor = '';
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const voucherContainer = document.getElementById('voucherContainer');
        const addButton = document.getElementById('addVoucherButton');
        const template = document.getElementById('voucherTemplate');

        // Event change pada select tipe yang sudah ada
        voucherContainer.querySelectorAll('.voucher-type').forEach(function(select) {
            select.addEventListener('change', function() {
                updateDetailOptions(this);
            });
        });

        // Initial update for delete buttons
        updateDeleteButtons();

        // Add new voucher row
        addButton.addEventListener('click', function() {
            const clone = template.content.cloneNode(true);
            voucherContainer.appendChild(clone);

            // Add event listener to the new select element
            const newSelect = voucherContainer.lastElementChild.querySelector('.voucher-type');
            newSelect.addEventListener('change', function() {
                updateDetailOptions(this);
            });

            updateDeleteButtons();
        });

        // Delete voucher row (lama & baru)
        voucherContainer.addEventListener('click', function(e) {
            if (e.target.closest('.btn-delete-voucher')) {
                const rows = voucherContainer.querySelectorAll('.voucher-row');
                if (rows.length > 1) {
                    const row = e.target.closest('.voucher-row');
                    if (row) {
                        row.remove();
                        updateDeleteButtons();
                    }
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Minimal harus ada 1 baris voucher!',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2500
                    });
                }
            }
        });
    });

    function closeCreateModal() {
        // Your existing close modal function
        document.getElementById('confirmModal').classList.remove('hidden');
        
        document.getElementById('confirmCancel').addEventListener('click', function() {
            window.location.href = "{{ route('dashboard.code-voucher.index') }}";
        });
        
        document.getElementById('cancelCancel').addEventListener('click', function() {
            document.getElementById('confirmModal').classList.add('hidden');
        });
    }
</script>
@endsection