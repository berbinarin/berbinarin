@extends('moduls.dashboard.layouts.main', [
'title' => 'Pendaftaran Psikotes',
'active' => 'Dashboard',
'modul' => 'Psikotest Paid Data',
])

@section('content-dashboard')
<section class="flex w-full">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="pt-2 pb-5">
                <div class="flex flex-row">
                    <div class="">
                        <a href="{{ route('dashboard.psikotespaid.data') }}">
                            <i class='bx bx-arrow-back text-[35px] text-primary mr-6 mt-3 text-left'></i>
                        </a>
                    </div>
                    <div class="">
                        <p tabindex="0" class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Detail Pendaftar Psikotes</p>
                        <p class="text-disabled">Fitur ini menampilkan data responden yang telah mendaftar Psikotes
                            Berbinar.</p>
                        <button onclick="toggleModal('modal-id')" type="button" style="margin-right: 0.5rem"
                            class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class=" font-medium leading-none text-dark">Edit Data</p>
                        </button>
                        <button onclick="toggleModal('modal-delete')" type="button"
                            class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class=" font-medium leading-none text-dark">Delete Data</p>
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg-white w-[1000px] py-4 px-5 ml-14 rounded-md">
                <div class="w-full flex flex-row gap-5">
                    <div class="flex flex-col w-full">
                        <dl class="flex flex-col grow text-black">
                            <dt class="self-start font-bold">Nama</dt>
                            <dd class="px-2.5 py-2 mt-2.5 text-black bg-white rounded-md shadow-md max-md:pr-5">
                                Dodo</dd>
                            <dt class="self-start mt-3.5 font-bold">Usia</dt>
                            <dd
                                class="px-2.5 py-2 mt-2.5 text-black whitespace-nowrap bg-white rounded-md shadow-md max-md:pr-5">
                                20</dd>
                            <dt class="self-start mt-3.5 font-bold">Email</dt>
                            <dd
                                class="px-2.5 py-2 mt-2.5 text-black whitespace-nowrap bg-white rounded-md shadow-md max-md:pr-5">
                                dodo@gmail.com</dd>
                            <dt class="self-start mt-3.5 font-bold">Layanan Psikotes</dt>
                            <dd class="px-2.5 py-2 mt-2.5 text-black bg-white rounded-md shadow-md max-md:pr-5">
                                Online</dd>
                            <dt class="self-start mt-3.5 font-bold">Harga</dt>
                            <dd class="px-2.5 py-2 mt-2.5 text-black bg-white rounded-md shadow-md max-md:pr-5">
                                Rp 159.000</dd>
                            <dt class="self-start mt-3.5 font-bold">Tanggal Psikotes</dt>
                            <dd class="px-2.5 py-2 mt-2.5 text-black bg-white rounded-md shadow-md max-md:pr-5">
                                10-08-2024</dd>

                        </dl>
                    </div>
                    <div class="flex flex-col ml-5 w-full">
                        <dl class="flex flex-col grow text-black">
                            <dt class="self-start font-bold">Jenis Kelamin</dt>
                            <dd
                                class="px-2.5 py-2 mt-2.5 text-black whitespace-nowrap bg-white rounded-md shadow-md max-md:pr-5">
                                Laki-laki</dd>
                            <dt class="self-start mt-3.5 font-bold">Nomor Telepon</dt>
                            <dd
                                class="px-2.5 py-2 mt-2.5 text-black whitespace-nowrap bg-white rounded-md shadow-md max-md:pr-5">
                                +628320010111</dd>
                            <dt class="self-start mt-3.5 font-bold">Domisili</dt>
                            <dd
                                class="px-2.5 py-2 mt-2.5 text-black whitespace-nowrap bg-white rounded-md shadow-md max-md:pr-5">
                                Surabaya</dd>
                            <dt class="self-start mt-3.5 font-bold">Kategori Psikotes</dt>
                            <dd
                                class="px-2.5 py-2 mt-2.5 text-black whitespace-nowrap bg-white rounded-md shadow-md max-md:pr-5">
                                Komunitas</dd>
                            <dt class="self-start mt-3.5 font-bold">Jenis Psikotes</dt>
                            <dd class="px-2.5 py-2 mt-2.5 text-black bg-white rounded-md shadow-md max-md:pr-5">
                                Tes Kecemasan</dd>
                            <dt class="self-start mt-3.5 font-bold">Waktu Psikotes</dt>
                            <dd class="px-2.5 py-2 mt-2.5 text-black bg-white rounded-md shadow-md max-md:pr-5">
                                12:00</dd>
                        </dl>
                    </div>
                </div>
                <h3 class="self-center mt-3.5 font-bold text-black">Alasan</h3>
                <p
                    class="self-end px-3 pt-3 pb-14 mt-2.5 mr-28 max-w-full text-black bg-white rounded-md shadow-md w-full max-md:mr-2.5">
                    Saya ingin lebih memahami diri saya, termasuk kekuatan dan kelemahan saya, agar dapat meningkatkan
                    kualitas diri dan mencapai potensi maksimal dalam karir dan kehidupan pribadi.
                </p>
            </div>
        </div>
    </div>
</section>

<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
    id="modal-id">
    <div class="relative w-[800px] my-5 mx-auto" style="max-width: 62rem">
        <!--content-->
        <div
            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                <h3 class="text-3xl font-semibold">
                    Edit Data Pendaftar
                </h3>
                <button
                    class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                    onclick="toggleModal('modal-id')">
                    <span
                        class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                        ×
                    </span>
                </button>
            </div>
            <!--body-->
            <div class="relative p-5 flex-auto">
                <form action="" class="flex flex-col gap-1" method="post">
                    <div class="grid grid-cols-6 gap-x-6 gap-y-4">
                        <div class="col-span-2">
                            <label for="name" class="block text-lg font-semibold leading-6 text-black">Nama</label>
                            <div class="mt-2">
                                <input type="text" name="fullname" id="fullname"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-2">
                            <label for="email" class="block text-lg font-semibold leading-6 text-black">Email</label>
                            <div class="mt-2">
                                <input type="email" name="email" id="email"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-2">
                            <label for="gender" class="block text-lg font-semibold leading-6 text-black">Jenis
                                Kelamin</label>
                            <div class="mt-2">
                                <select id="gender" name="gender" autocomplete="gender"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-2">
                            <label for="dimicile"
                                class="block text-lg font-semibold leading-6 text-black">Domisili</label>
                            <div class="mt-2">
                                <input type="text" name="domicile" id="domicile"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-2">
                            <label for="phone-input" class="block text-lg font-semibold leading-6 text-black">Nomor
                                Telepon</label>
                            <div class="mt-2">
                                <input type="text" name="phone_number" id="phone-input"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                    placeholder="+62xxxxxxxxxx">
                            </div>
                        </div>

                        <div class="col-span-2">
                            <label for="age" class="block text-lg font-semibold leading-6 text-black">Usia</label>
                            <div class="mt-2">
                                <input type="number" name="age" id="age" autocomplete="age"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                            </div>
                        </div>


                        <div class="col-span-3">
                            <label for="psikotest_category_id"
                                class="block text-lg font-semibold leading-6 text-black">Kategori
                                Psikotes</label>
                            <div class="mt-2">
                                <select id="psikotest_category_id" name="psikotest_category_id"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                    <option value="">Kategori 1</option>
                                    <option value="">Kategori 2</option>
                                </select>

                            </div>
                        </div>


                        <div class="col-span-3">
                            <label for="psikotest_type_id"
                                class="block text-lg font-semibold leading-6 text-black">Jenis
                                Psikotes</label>
                            <div class="mt-2">
                                <select name="psikotest_type_id" id="psikotest_type_id" required
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                    <option value=""></option>
                                    <!-- <option value="supervisor">Tes Kesiapan menjadi Orangtua</option> -->
                                </select>
                            </div>
                        </div>

                        <div class="col-span-2">
                            <label for="service" class="block text-lg font-semibold leading-6 text-black">Layanan
                                Psikotes</label>
                            <div class="mt-2">
                                <select id="service" name="service"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                    <option value="online">Online</option>
                                    <option value="offline">Offline (Surabaya)</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-2">
                            <label for="preference_schedule"
                                class="block text-lg font-semibold leading-6 text-black">Jadwal
                                Psikotes</label>
                            <div class="mt-2">
                                <input type="datetime-local" name="preference_schedule" id="preference_schedule"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-2">
                            <label for="price" class="block text-lg font-semibold leading-6 text-black">Harga
                                Psikotes</label>
                            <div class="mt-2">
                                <input type="text" name="price" id="price" readonly
                                    class="price block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6"
                                    data-mask="000.000.000" data-mask-reverse="true">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="reason" class="block text-lg font-semibold leading-6 text-black">Alasan
                                Mengikuti Psikotes</label>
                            <div class="mt-2">
                                <textarea id="reason" name="reason" rows="3"
                                    class="block w-full h-[100px] rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6"></textarea>
                            </div>
                        </div>


                    </div>
                    <!--footer-->
                    <div class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                        <button
                            class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" onclick="toggleModal('modal-id')">
                            Close
                        </button>
                        <button type="submit" name="submit"
                            class="focus:ring-2  mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class="text-base font-semibold leading-none text-white">Simpan Data</p>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
    id="modal-delete">
    <div class="relative w-auto my-6 mx-auto max-w-3xl">
        <!--content-->
        <div
            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                <h3 class="text-3xl font-semibold">
                    Delete Pendaftar
                </h3>
                <button
                    class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                    onclick="toggleModal('modal-delete')">
                    <span
                        class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">×</span>
                </button>
            </div>
            <!--body-->
            <div class="relative p-6 flex-auto">
                <form action="" method="get">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id">
                    <p class="mb-6">Apakah kamu yakin ingin menghapus
                        data pendaftar ini?
                    </p>
                    <!--footer-->
                    <div class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                        <button
                            class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" onclick="toggleModal('modal-delete')">Close</button>
                        <button type="submit" name="submit"
                            class="focus:ring-2  mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class="text-base font-semibold leading-none text-white">
                                Delete Data</p>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-delete-backdrop"></div>

<script>
    function toggleModal(modalId) {
        var modal = document.getElementById(modalId);
        if (modal.style.display === "none" || modal.style.display === "") {
            modal.style.display = "block";
        } else {
            modal.style.display = "none";
        }
    }
</script>

<script type="text/javascript">
    function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
    }
</script>

<script>
    document.querySelectorAll('.delete-button').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const formId = this.getAttribute('data-id');
            Swal.fire({
                title: 'Hapus Pendaftar',
                text: "Apakah anda yakin menghapusnya?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm-' + formId).submit();
                }
            });
        });
    });
</script>
@endsection