@extends(
    "dashboard.layouts.app",
    [
        "title" => "Kode Voucher",
        "active" => "Dashboard",
    ]
)

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
                <div class="mb-7 w-[80vw] rounded-md bg-white px-4 py-4 md:px-8 md:py-7 xl:px-10">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Jenis Pendaftaran</th>
                                    <th style="text-align: center">Kategori Voucher</th>
                                    <th style="text-align: center">Nama Voucher</th>
                                    <th style="text-align: center">Kode Voucher</th>
                                    <th style="text-align: center">Persentase Diskon</th>
                                    <th style="text-align: center">Tipe Voucher</th>
                                    <th style="text-align: center">Detail Voucher</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vouchers as $i => $voucher)
                                    <tr>
                                        <td class="text-center">{{ $i + 1 }}</td>
                                        <td class="text-center">{{ $voucher->jenis_pendaftaran }}</td>
                                        <td class="text-center">{{ $voucher->category }}</td>
                                        <td class="text-center">{{ $voucher->nama_voucher }}</td>
                                        <td class="text-center">{{ $voucher->code }}</td>
                                        <td class="text-center">{{ $voucher->percentage }}%</td>
                                        <td class="text-center">{{ $voucher->tipe }}</td>
                                        <td class="text-center">{{ $voucher->detail }}</td>
                                        <td class="flex flex-row justify-center gap-2 text-center">
                                            <a href="javascript:void(0);" onclick="openEditModal({{ $voucher->id }}, '{{ $voucher->category }}', '{{ $voucher->code }}', '{{ $voucher->percentage }}', '{{ $voucher->service_type }}', '{{ $voucher->tipe }}', '{{ $voucher->detail }}', '{{ $voucher->nama_voucher }}')" class="inline-flex items-start justify-start rounded bg-yellow-500 p-3 hover:bg-yellow-600">
                                                <i class="bx bx-edit text-white"></i>
                                            </a>
                                            <button type="button" onclick="openDeleteModal({{ $voucher->id }})" class="inline-flex items-start justify-start rounded bg-red-500 p-3 hover:bg-red-600">
                                                <i class="bx bx-trash-alt text-white"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Modal Tambah Data -->
                        <div id="createModal" class="fixed inset-0 z-10 flex hidden items-center justify-center bg-black bg-opacity-50">
                            <div class="relative w-full max-w-lg rounded-xl bg-white p-6 text-center">
                                <button type="button" onclick="closeCreateModal()" class="absolute right-2 top-2 text-2xl text-gray-400 hover:text-gray-600"></button>
                                <h3 class="mb-4 text-xl font-bold leading-6 text-black" id="modal-title">Add Kode Voucher</h3>
                                <form id="createForm" method="POST" action="{{ route("dashboard.code-voucher.store") }}">
                                    @csrf
                                    <div class="mb-5 mt-12 text-left">
                                        <label class="mb-1 block font-medium text-gray-600">Jenis Pendaftaran</label>
                                        <select name="jenis_pendaftaran" id="createJenisPendaftaran" class="w-full rounded-lg border border-gray-300 px-3 py-2" required onchange="updateTipeOptions()">
                                            <option value="" disabled selected>Pilih Jenis Pendaftaran</option>
                                            <option value="peer counseling">Peer Counseling</option>
                                            <option value="psikolog">Psikolog</option>
                                        </select>
                                    </div>
                                    <div class="mb-5 flex flex-row justify-between gap-2">
                                        <div class="w-1/2 text-left">
                                            <label class="mb-1 block font-medium text-gray-600">Kategori Voucher</label>
                                            <select name="category" id="createCategory" class="w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                                <option value="" disabled selected>Pilih Kategori</option>
                                                <option value="umum">Umum</option>
                                                <option value="pelajar">Pelajar</option>
                                            </select>
                                        </div>
                                        <div class="w-1/2 text-left">
                                            <label class="mb-1 block font-medium text-gray-600">Nama Voucher</label>
                                            <input type="text" name="nama_voucher" class="w-full rounded-lg border border-gray-300 px-3 py-2" placeholder="Berbinar123" required />
                                        </div>
                                    </div>
                                    <div class="mb-5 flex flex-row justify-between gap-2">
                                        <div class="w-1/2 text-left">
                                            <label class="mb-1 block font-medium text-gray-600">Kode Voucher</label>
                                            <input type="text" name="code" class="w-full rounded-lg border border-gray-300 px-3 py-2" placeholder="Berbinar123" required />
                                        </div>
                                        <div class="w-1/2 text-left">
                                            <label class="mb-1 block font-medium text-gray-600">Diskon</label>
                                            <span class="pointer-events-none absolute right-10 translate-y-2 text-base text-disabled">%</span>
                                            <input type="number" name="percentage" class="w-full rounded-lg border border-gray-300 px-3 py-2" min="1" max="100" placeholder="90" required />
                                        </div>
                                    </div>
                                    <div class="mb-5 flex flex-row justify-between gap-2">
                                        <div class="w-1/2 text-left">
                                            <label class="mb-1 block font-medium text-gray-600">Tipe Voucher</label>
                                            <select name="tipe" id="tipeVoucher" class="w-full rounded-lg border border-gray-300 px-3 py-2" required onchange="updateDetailOptions()">
                                                <option value="" disabled selected>Pilih Tipe</option>
                                            </select>
                                        </div>
                                        <div class="w-1/2 text-left">
                                            <label class="mb-1 block font-medium text-gray-600">Detail Voucher</label>
                                            <select name="detail" id="detailVoucher" class="w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                                <option value="" disabled selected>Pilih Detail</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="service_type" value="psikolog" />
                                    <div class="flex w-full justify-center gap-4">
                                        <button type="button" class="w-1/2 rounded-lg border border-[#3986A3] px-6 py-2 text-[#3986A3] focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2" onclick="closeCreateModal()">Batal</button>
                                        <button type="submit" class="w-1/2 rounded-lg bg-[#3986A3] px-6 py-2 text-center text-white hover:bg-[#3986A3] focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Modal Edit Data -->
                        <div id="editModal" class="fixed inset-0 z-10 flex hidden items-center justify-center bg-black bg-opacity-50">
                            <div class="relative w-full max-w-lg rounded-xl bg-white p-6 text-center">
                                <button type="button" onclick="closeEditModal()" class="absolute right-2 top-2 text-2xl text-gray-400 hover:text-gray-600"></button>
                                <h3 class="mb-4 text-xl font-bold leading-6 text-black" id="modal-title">Edit Kode Voucher</h3>
                                <form id="editForm" method="POST" action="">
                                    @csrf
                                    @method("PUT")
                                    <div class="mb-5 mt-12 text-left">
                                        <label class="mb-1 block font-medium text-gray-600">Jenis Pendaftaran</label>
                                        <select name="jenis_pendaftaran" id="editJenisPendaftaran" class="w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                            <option value="" disabled selected>Pilih Jenis Pendaftaran</option>
                                            <option value="peer counseling">Peer Counseling</option>
                                            <option value="psikolog">Psikolog</option>
                                        </select>
                                    </div>
                                    <div class="mb-5 flex flex-row justify-between gap-2">
                                        <div class="w-1/2 text-left">
                                            <label class="mb-1 block font-medium text-gray-600">Kategori Voucher</label>
                                            <select name="category" id="editCategory" class="w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                                <option value="" disabled selected>Pilih Kategori</option>
                                                <option value="umum">Umum</option>
                                                <option value="pelajar">Pelajar</option>
                                            </select>
                                        </div>
                                        <div class="w-1/2 text-left">
                                            <label class="mb-1 block font-medium text-gray-600">Nama Voucher</label>
                                            <input type="text" name="nama_voucher" id="editNamaVoucher" class="w-full rounded-lg border border-gray-300 px-3 py-2" required />
                                        </div>
                                    </div>
                                    <div class="mb-5 flex flex-row justify-between gap-2">
                                        <div class="w-1/2 text-left">
                                            <label class="mb-1 block font-medium text-gray-600">Kode Voucher</label>
                                            <input type="text" name="code" id="editCode" class="w-full rounded-lg border border-gray-300 px-3 py-2" required />
                                        </div>
                                        <div class="w-1/2 text-left">
                                            <label class="mb-1 block font-medium text-gray-600">Diskon</label>
                                            <span class="pointer-events-none absolute right-10 translate-y-2 text-base text-disabled">%</span>
                                            <input type="number" name="percentage" id="editPercentage" class="w-full rounded-lg border border-gray-300 px-3 py-2" min="1" max="100" required />
                                        </div>
                                    </div>
                                    <div class="mb-5 flex flex-row justify-between gap-2">
                                        <div class="w-1/2 text-left">
                                            <label class="mb-1 block font-medium text-gray-600">Tipe Voucher</label>
                                            <select name="tipe" id="editTipeVoucher" class="w-full rounded-lg border border-gray-300 px-3 py-2" required onchange="updateDetailOptionsEdit()">
                                                <option value="" disabled selected>Pilih Tipe</option>
                                                <option value="tanggal">Tanggal</option>
                                                <option value="sesi">Sesi</option>
                                                <option value="metode">Metode</option>
                                            </select>
                                        </div>
                                        <div class="w-1/2 text-left">
                                            <label class="mb-1 block font-medium text-gray-600">Detail Voucher</label>
                                            <select name="detail" id="editDetailVoucher" class="w-full rounded-lg border border-gray-300 px-3 py-2" required>
                                                <option value="" disabled selected>Pilih Detail</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="service_type" id="editServiceType" value="psikolog" />
                                    <div class="flex w-full justify-center gap-4">
                                        <button type="button" class="w-1/2 rounded-lg border border-[#3986A3] px-6 py-2 text-[#3986A3]" onclick="closeEditModal()">Batal</button>
                                        <button type="submit" class="w-1/2 rounded-lg bg-[#3986A3] px-6 py-2 text-white">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Modal Konfirmasi Hapus -->
                        <div id="deleteModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40">
                            <div
                                class="relative w-[560px] rounded-[20px] bg-white p-6 text-center font-plusJakartaSans shadow-lg"
                                style="
                                    background:
                                        linear-gradient(to right, #74aabf, #3986a3) top/100% 6px no-repeat,
                                        white;
                                    border-radius: 20px;
                                    background-clip: padding-box, border-box;
                                "
                            >
                                <!-- Warning Icon -->
                                <img src="{{ asset("assets/images/dashboard/warning.png") }}" alt="Warning Icon" class="mx-auto h-[83px] w-[83px]" />

                                <!-- Title -->
                                <h2 class="mt-4 text-2xl font-bold text-stone-900">Konfirmasi Hapus</h2>

                                <!-- Message -->
                                <p class="mt-2 text-base font-medium text-black">Apakah Anda yakin ingin menghapus kelas ini? Semua data terkait juga akan dihapus.</p>

                                <!-- Actions -->
                                <div class="mt-6 flex justify-center gap-3">
                                    <form id="deleteForm" method="POST" class="w-1/2">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="w-full rounded-[5px] bg-gradient-to-r from-[#74AABF] to-[#3986A3] px-6 py-2 font-medium text-white">Hapus</button>
                                    </form>
                                    <button type="button" class="w-1/2 rounded-lg border border-stone-300 px-6 py-2 text-stone-700" onclick="closeDeleteModal()">Batal</button>
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
        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
    </script>

    <script>
        function openEditModal(id, category, code, percentage, service_type = 'psikolog', tipe = '', detail = '', nama_voucher = '') {
            document.getElementById('editModal').classList.remove('hidden');
            document.getElementById('editCategory').value = category;
            document.getElementById('editCode').value = code;
            document.getElementById('editPercentage').value = percentage;
            document.getElementById('editServiceType').value = service_type;
            document.getElementById('editForm').action = '/dashboard/code-voucher/' + id;
            document.getElementById('editNamaVoucher').value = nama_voucher;

            // Set value Jenis Pendaftaran dan update tipe options
            document.getElementById('editJenisPendaftaran').value = service_type;
            updateTipeOptionsEdit();

            // Set tipe voucher
            const tipeSelect = document.getElementById('editTipeVoucher');
            tipeSelect.value = tipe;
            updateDetailOptionsEdit(detail);

            // Event listener jika Jenis Pendaftaran diubah
            document.getElementById('editJenisPendaftaran').addEventListener('change', function () {
                updateTipeOptionsEdit();
            });
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
        function updateDetailOptions() {
            const tipe = document.getElementById('tipeVoucher').value;
            const detail = document.getElementById('detailVoucher');
            detail.innerHTML = '<option value="" disabled selected>Pilih Detail</option>';

            if (tipe === 'tanggal') {
                detail.innerHTML += '<option value="weekdays">Weekdays</option>';
                detail.innerHTML += '<option value="weekend">Weekend</option>';
            } else if (tipe === 'metode') {
                detail.innerHTML += '<option value="online">Online</option>';
                detail.innerHTML += '<option value="offline">Offline</option>';
            } else if (tipe === 'sesi') {
                detail.innerHTML += '<option value="sesi 1">Sesi 1</option>';
                detail.innerHTML += '<option value="sesi 2">Sesi 2</option>';
                detail.innerHTML += '<option value="sesi 3">Sesi 3</option>';
            }
        }
    </script>

    <script>
        function updateDetailOptionsEdit(selectedDetail = '') {
            const tipe = document.getElementById('editTipeVoucher').value;
            const detail = document.getElementById('editDetailVoucher');
            detail.innerHTML = '<option value="" disabled>Pilih Detail</option>';

            let options = [];
            if (tipe === 'tanggal') {
                options = [
                    { value: 'weekdays', text: 'Weekdays' },
                    { value: 'weekend', text: 'Weekend' },
                ];
            } else if (tipe === 'metode') {
                options = [
                    { value: 'online', text: 'Online' },
                    { value: 'offline', text: 'Offline' },
                ];
            } else if (tipe === 'sesi') {
                options = [
                    { value: 'sesi 1', text: 'Sesi 1' },
                    { value: 'sesi 2', text: 'Sesi 2' },
                    { value: 'sesi 3', text: 'Sesi 3' },
                ];
            }

            options.forEach((opt) => {
                detail.innerHTML += `<option value="${opt.value}"${selectedDetail === opt.value ? ' selected' : ''}>${opt.text}</option>`;
            });
        }
    </script>

    <script>
        function updateTipeOptions() {
            const category = document.getElementById('createJenisPendaftaran').value;
            const tipe = document.getElementById('tipeVoucher');
            tipe.innerHTML = '<option value="" disabled selected>Pilih Tipe</option>';

            // Tipe voucher untuk psikolog dan peer counseling
            if (category === 'psikolog' || category === 'peer counseling') {
                tipe.innerHTML += '<option value="tanggal">Tanggal</option>';
                tipe.innerHTML += '<option value="sesi">Sesi</option>';
                tipe.innerHTML += '<option value="metode">Metode</option>';
            }
            updateDetailOptions();
        }
    </script>

    <script>
        function updateTipeOptionsEdit() {
            const category = document.getElementById('editJenisPendaftaran').value;
            const tipe = document.getElementById('editTipeVoucher');
            tipe.innerHTML = '<option value="" disabled selected>Pilih Tipe</option>';

            // Tipe voucher untuk psikolog dan peer counseling
            if (category === 'psikolog' || category === 'peer counseling') {
                tipe.innerHTML += '<option value="tanggal">Tanggal</option>';
                tipe.innerHTML += '<option value="sesi">Sesi</option>';
                tipe.innerHTML += '<option value="metode">Metode</option>';
            }
            updateDetailOptionsEdit();
        }
    </script>
@endsection
