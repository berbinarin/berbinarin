@extends('dashboard.layouts.app', [
    'title' => 'Kode Voucher',
    'active' => 'Dashboard',
])

@section("content")
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="">
                        <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Kode Voucher</p>
                        <p class="text-disabled">Halaman yang menampilkan dan mengelola Kode Voucher.</p>
                        <a href="javascript:void(0);" onclick="openCreateModal()" class="mt-8 inline-flex items-start justify-start rounded bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Tambah Data</p>
                        </a>
                    </div>
                </div>
                <div class="rounded-md w-[80vw] bg-white mb-7 px-4 py-4 md:px-8 md:py-7 xl:px-10">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Kategori Voucher</th>
                                    <th style="text-align: center">Nama Voucher</th>
                                    <th style="text-align: center">Kode Voucher</th>
                                    <th style="text-align: center">Persentase Diskon</th>
                                    <th style="text-align: center">Tipe Voucher</th>
                                    <th style="text-align: center">Detail</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vouchers as $i => $voucher)
                                <tr>
                                    <td class="text-center">{{ $i+1 }}</td>
                                    <td class="text-center">{{ $voucher->category }}</td>
                                    <td class="text-center">{{ $voucher->name }}</td>
                                    <td class="text-center">{{ $voucher->code }}</td>
                                    <td class="text-center">{{ $voucher->percentage }}%</td>
                                    <td class="text-center">{{ $voucher->voucher_type }}</td>
                                    <td class="text-center">{{ $voucher->voucher_detail }}</td>
                                    <td class="text-center flex flex-row justify-center gap-2">
                                        <a href="javascript:void(0);" onclick="openEditModal({{ $voucher->id }}, '{{ $voucher->category }}', '{{ $voucher->name }}', '{{ $voucher->code }}', '{{ $voucher->percentage }}', '{{ $voucher->service_type }}', '{{ $voucher->voucher_type }}', '{{ $voucher->voucher_detail }}')" class="inline-flex items-start justify-start p-3 bg-yellow-500 hover:bg-yellow-600 rounded">
                                            <i class='bx bx-edit text-white'></i>
                                        </a>
                                        <button type="button" onclick="openDeleteModal({{ $voucher->id }})" class="inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-600 rounded">
                                            <i class="bx bx-trash-alt text-white"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                        <!-- Modal Tambah Data -->
                        <div id="createModal" class="fixed inset-0 z-10 hidden items-center justify-center bg-black bg-opacity-50 flex">
                            <div class="w-full max-w-lg rounded-xl bg-white p-6 text-center relative">
                                <button type="button" onclick="closeCreateModal()" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 text-2xl"></button>
                                <h3 class="mb-4 text-xl leading-6 text-black font-bold" id="modal-title">Add Kode Voucher</h3>
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
                                            <span class="absolute right-10 translate-y-2 text-disabled text-base pointer-events-none">%</span>
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
                                    <input type="hidden" name="service_type" value="psikolog">
                                    <div class="flex w-full justify-center gap-4">
                                        <button type="button" class="rounded-lg border border-[#3986A3] w-1/2 px-6 py-2 text-[#3986A3] focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2" onclick="closeCreateModal()">Batal</button>
                                        <button type="submit" class="rounded-lg bg-[#3986A3] w-1/2 px-6 py-2 text-white text-center hover:bg-[#3986A3] focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <!-- Modal Edit Data -->
                        <div id="editModal" class="fixed inset-0 z-10 hidden items-center justify-center bg-black bg-opacity-50 flex">
                            <div class="w-full max-w-lg rounded-xl bg-white p-6 text-center relative">
                                <button type="button" onclick="closeEditModal()" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 text-2xl"></button>
                                <h3 class="mb-4 text-xl leading-6 text-black font-bold" id="modal-title">Edit Kode Voucher</h3>
                                <form id="editForm" method="POST" action="">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex flex-row justify-between gap-2 mb-6">
                                        <div class="text-left w-1/2">
                                            <label class="block mb-1 font-medium text-gray-600">Kategori Voucher</label>
                                            <input type="text" name="category" id="editCategory" class="w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                        </div>
                                        <div class="text-left w-1/2">
                                            <label class="block mb-1 font-medium text-gray-600">Nama Voucher</label>
                                            <input type="text" name="name" id="editName" class="w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between gap-2 mb-6">
                                        <div class="text-left w-1/2">
                                            <label class="block mb-1 font-medium text-gray-600">Kode Voucher</label>
                                            <input type="text" name="code" id="editCode" class="w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                        </div>
                                        <div class="text-left w-1/2">
                                            <label class="block mb-1 font-medium text-gray-600">Diskon</label>
                                            <span class="absolute right-10 translate-y-2 text-disabled text-base pointer-events-none">%</span>
                                            <input type="number" name="percentage" id="editPercentage" class="w-full rounded-lg border border-gray-300 px-3 py-2" min="1" max="100" required>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between gap-2 mb-6">
                                        <div class="text-left w-1/2">
                                            <label class="block mb-1 font-medium text-gray-600">Tipe Voucher</label>
                                            <select name="voucher_type" id="editVoucherType" class="w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                                <option value="">Pilih Tipe</option>
                                                <option value="metode">Metode</option>
                                                <option value="hari">Hari</option>
                                                <option value="sesi">Sesi</option>
                                            </select>
                                        </div>
                                        <div class="text-left w-1/2">
                                            <label class="block mb-1 font-medium text-gray-600" id="editVoucherDetailLabel">Detail</label>
                                            <select name="voucher_detail" id="editVoucherDetail" class="w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                                <option value="">Pilih Detail</option>
                                                <!-- Options will be populated by JavaScript based on voucher type -->
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="service_type" id="editServiceType" value="psikolog">
                                    <div class="flex w-full justify-center gap-4">
                                        <button type="button" class="rounded-lg border border-[#3986A3] w-1/2 px-6 py-2 text-[#3986A3]" onclick="closeEditModal()">Batal</button>
                                        <button type="submit" class="rounded-lg bg-[#3986A3] w-1/2 px-6 py-2 text-white">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <!-- Modal Konfirmasi Hapus -->
                        <div id="deleteModal" class="fixed inset-0 z-10 hidden items-center justify-center bg-black bg-opacity-50 flex">
                            <div class="w-full max-w-md rounded-lg bg-white p-6 text-center">
                                <div class="mb-4 flex justify-center">
                                    <img src="{{ asset('assets/images/dashboard/svg-icon/warning.svg') }}" alt="Warning Icon" class="h-12 w-12" />
                                </div>
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900" id="modal-title">Konfirmasi Hapus</h3>
                                <p class="mb-6 text-base text-gray-500">Apakah Anda yakin ingin menghapus kelas ini? Semua data terkait juga akan dihapus.</p>
                                <div class="flex w-full justify-center gap-4">
                                    <form id="deleteForm" method="POST" class="w-1/2">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="rounded-lg bg-[#3986A3] w-full px-6 py-2 text-white text-center hover:bg-[#3986A3] focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2">Hapus</button>
                                    </form>
                                    <button type="button" class="rounded-lg border border-[#3986A3] w-1/2 px-6 py-2 text-[#3986A3] focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2" onclick="closeDeleteModal()">Batal</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function openCreateModal() {
            document.getElementById('createModal').classList.remove('hidden');
        }
        function closeCreateModal() {
            document.getElementById('createModal').classList.add('hidden');
        }
    </script>

    <script>
        function openEditModal(id, category, name, code, percentage, service_type = 'psikolog', voucher_type = '', voucher_detail = '') {
            document.getElementById('editModal').classList.remove('hidden');
            document.getElementById('editCategory').value = category;
            document.getElementById('editName').value = name;
            document.getElementById('editCode').value = code;
            document.getElementById('editPercentage').value = percentage;
            document.getElementById('editServiceType').value = service_type;
            document.getElementById('editVoucherType').value = voucher_type;
            document.getElementById('editVoucherDetail').value = voucher_detail;
            document.getElementById('editForm').action = '/dashboard/code-voucher/' + id;
            
            // Update the detail options based on voucher type
            updateVoucherDetailOptions('editVoucherType', 'editVoucherDetail', voucher_detail);
        }
        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
    </script>

    <script>
        let deleteModal = document.getElementById('deleteModal');
        let deleteForm = document.getElementById('deleteForm');

        function openDeleteModal(voucherId) {
            deleteForm.action = `/dashboard/code-voucher/${voucherId}`;
            deleteModal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            deleteModal.classList.add('hidden');
        }
    </script>

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