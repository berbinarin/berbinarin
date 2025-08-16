@extends('dashboard.layouts.app', [
    'title' => 'Tambah Kode Voucher',
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
                <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Tambah Kode Voucher</p>
            </div>
            <p class="w-3/4 text-disabled">
                Halaman yang digunakan untuk menambahkan, mengelola, dan melengkapi kode voucher.
            </p>
        </div>
        <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
            <form id="createForm" method="POST" action="{{ route('dashboard.code-voucher.store') }}">
                @csrf
                <div class="flex flex-row justify-between gap-2 mb-6">
                    <div class="text-left w-1/2">
                        <label class="block mb-1 font-medium text-gray-600">Kategori Voucher</label>
                        <input type="text" name="category" class="w-full rounded-lg border border-gray-300 px-3 py-2" placeholder="Pelajar" required>
                    </div>
                    <div class="text-left w-1/2">
                        <label class="block mb-1 font-medium text-gray-600">Nama Voucher</label>
                        <input type="text" name="name" class="w-full rounded-lg border border-gray-300 px-3 py-2" placeholder="Nama Voucher" required>
                    </div>
                </div>
                <div class="flex flex-row justify-between gap-2 mb-6">
                    <div class="text-left w-1/2">
                        <label class="block mb-1 font-medium text-gray-600">Kode Voucher</label>
                        <input type="text" name="code" class="w-full rounded-lg border border-gray-300 px-3 py-2" placeholder="Berbinar123" required>
                    </div>
                    <div class="text-left w-1/2">
                        <label class="block mb-1 font-medium text-gray-600">Diskon</label>
                        <span class="absolute right-24 translate-y-2 text-disabled text-base pointer-events-none">%</span>
                        <input type="number" name="percentage" class="w-full rounded-lg border border-gray-300 px-3 py-2" min="1" max="100" placeholder="90" required>
                    </div>
                </div>
                <div class="flex flex-row justify-between gap-2 mb-6">
                    <div class="text-left w-1/2">
                        <label class="block mb-1 font-medium text-gray-600">Tipe Voucher</label>
                        <select name="voucher_type" id="voucherType" class="w-full rounded-lg border border-gray-300 px-3 py-2" required>
                            <option value="">Pilih Tipe</option>
                            <option value="metode">Metode</option>
                            <option value="hari">Hari</option>
                            <option value="sesi">Sesi</option>
                        </select>
                    </div>
                    <div class="text-left w-1/2">
                        <label class="block mb-1 font-medium text-gray-600" id="voucherDetailLabel">Detail</label>
                        <select name="voucher_detail" id="voucherDetail" class="w-full rounded-lg border border-gray-300 px-3 py-2" required>
                            <option value="">Pilih Detail</option>
                            <!-- Options will be populated by JavaScript based on voucher type -->
                        </select>
                    </div>
                </div>
                <hr class="border-t-2 mb-6 border-t-gray-400">
                <input type="hidden" name="service_type" value="psikolog">
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
                { value: '1 jam', text: '1 Jam' },
                { value: '2 jam', text: '2 Jam' },
                { value: '3 jam', text: '3 Jam' }
            ]
        };

        function updateVoucherDetailOptions(dropdownId, detailSelectId, selectedValue = '') {
            const dropdown = document.getElementById(dropdownId);
            const detailSelect = document.getElementById(detailSelectId);

            detailSelect.innerHTML = '<option value="">Pilih Detail</option>';

            const selectedType = dropdown.value;

            if (selectedType && voucherTypeOptions[selectedType]) {
                voucherTypeOptions[selectedType].forEach(option => {
                    const optionElement = document.createElement('option');
                    optionElement.value = option.value;
                    optionElement.textContent = option.text;
                    if (selectedValue && option.value === selectedValue) {
                        optionElement.selected = true;
                    }
                    detailSelect.appendChild(optionElement);
                });
            }
        }

        function updateVoucherDetailLabel(dropdownId, labelId) {
            const dropdown = document.getElementById(dropdownId);
            const label = document.getElementById(labelId);

            dropdown.addEventListener('change', function() {
                switch(this.value) {
                    case 'metode':
                        label.textContent = 'Metode';
                        break;
                    case 'hari':
                        label.textContent = 'Hari';
                        break;
                    case 'sesi':
                        label.textContent = 'Durasi';
                        break;
                    default:
                        label.textContent = 'Detail';
                }

                const detailSelectId = labelId === 'voucherDetailLabel' ? 'voucherDetail' : 'editVoucherDetail';
                updateVoucherDetailOptions(dropdownId, detailSelectId);
            });
        }

        document.addEventListener('DOMContentLoaded', function() {

            updateVoucherDetailLabel('voucherType', 'voucherDetailLabel');

            updateVoucherDetailLabel('editVoucherType', 'editVoucherDetailLabel');

            document.getElementById('voucherType').addEventListener('change', function() {
                updateVoucherDetailOptions('voucherType', 'voucherDetail');
            });

            document.getElementById('editVoucherType').addEventListener('change', function() {
                updateVoucherDetailOptions('editVoucherType', 'editVoucherDetail');
            });
        });
    </script>
@endsection
