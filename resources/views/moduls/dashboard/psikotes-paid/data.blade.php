@extends('moduls.dashboard.layouts.main', [
    'title' => 'Pendaftaran Psikotes',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid Data',
])

@section('content-dashboard')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="">
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Data Pendaftar Psikotes</p>
                        <p class="text-disabled py-2">Fitur ini menampilkan informasi data pengguna yang telah melakukan
                            registrasi Psikotes Berbinar</p>
                    </div>
                </div>
                <div class="w-[1300px] bg-white py-7 px-10 rounded-[24px]">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display gap-3" style="overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Nama Lengkap</th>
                                    <th style="text-align: center">Layanan</th>
                                    <th style="text-align: center">Kategori</th>
                                    <th style="text-align: center">Jenis</th>
                                    <th style="text-align: center">Harga</th>
                                    <th style="text-align: center">Jadwal</th>
                                    <th style="text-align: center">Waktu</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr id="" class="data-consume">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $user->fullname }}</td>
                                        <td class="text-center">{{ $user->service }}</td>
                                        <td class="text-center">{{ $user->psikotestType->name ?? 'N/A' }}</td>
                                        <td class="text-center">
                                            {{ $user->psikotestType->categoryPsikotestType->name ?? 'N/A' }}
                                        </td>
                                        <td class="text-center">
                                            @if ($user->psikotestType && $user->psikotestType->price)
                                                Rp. {{ number_format($user->psikotestType->price, 0, ',', '.') }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            {{ \Carbon\Carbon::parse($user->preference_schedule)->format('d-m-Y') }}
                                        </td>
                                        <td class="text-center">
                                            {{ \Carbon\Carbon::parse($user->preference_schedule)->format('H:i:s') }}
                                        </td>
                                        <td class="flex gap-2 justify-center items-center">

                                            {{-- BUTTON DETAIL  --}}
                                            <a href="{{ route('dashboard.psikotespaid.data-show', $user->id) }}"
                                                class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-0 inline-flex items-start justify-start p-3 focus:outline-none rounded">
                                                <!-- <i class='bx bx-show text-white'></i> -->
                                                <p class="text-primary font-semibold">Detail</p>
                                                <i class='bx bx-right-arrow-alt mt-1 text-primary'></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button onclick="toggleModal('modal-id')" type="button"
                        class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                        <p class="font-medium leading-none text-dark">Tambah Data</p>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
    id="modal-id">
        <div class="relative w-[800px] my-5 mx-48 justify-center items-center">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div
                    class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Tambah Pendaftar
                    </h3>
                </div>
                <!--body-->
                <div class="relative p-5 flex-auto">
                    <form action="{{ route('dashboard.psikotespaid.data-store') }}"
                        class="flex flex-col gap-1" method="post">
                        @csrf
                        <div class="grid grid-cols-6 gap-x-6 gap-y-4">
                            <div class="col-span-2">
                                <label for="name"
                                    class="block text-lg font-semibold leading-6 text-black">Nama</label>
                                <div class="mt-2">
                                    <input type="text" name="fullname" id="fullname"
                                        class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label for="email"
                                    class="block text-lg font-semibold leading-6 text-black">Email</label>
                                <div class="mt-2">
                                    <input type="email" name="email" id="email"
                                        class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label for="gender"
                                    class="block text-lg font-semibold leading-6 text-black">Jenis
                                    Kelamin</label>
                                <div class="mt-2">
                                    <select id="gender" name="gender"
                                        autocomplete="gender"
                                        class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                                        <option value="laki-laki">Laki-Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label for="age"
                                    class="block text-lg font-semibold leading-6 text-black">Usia</label>
                                <div class="mt-2">
                                    <input type="number" name="age" id="age"
                                        autocomplete="age"
                                        class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
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
                                <label for="phone-input"
                                    class="block text-lg font-semibold leading-6 text-black">Nomor
                                    Telepon</label>
                                <div class="mt-2">
                                    <input type="text" name="phone_number"
                                        id="phone-input"
                                        class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                        placeholder="+62xxxxxxxxxx">
                                </div>
                            </div>
                            <div class="col-span-3">
                                <label for="psikotest_category_id"
                                    class="block text-lg font-semibold leading-6 text-black">Kategori
                                    Psikotes</label>
                                <div class="mt-2">
                                    <select id="psikotest_category_id"
                                        name="psikotest_category_id"
                                        class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                        <option value="1">Kategori 1</option>
                                        <option value="2">Kategori 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-span-3">
                                <label for="psikotest_type_id"
                                    class="block text-lg font-semibold leading-6 text-black">Jenis
                                    Psikotes</label>
                                <div class="mt-2">
                                    <select id="psikotest_type_id"
                                        name="psikotest_type_id"
                                        class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                        <option value="1">Jenis Psikotes 1</option>
                                        <option value="2">Jenis Psikotes 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label for="service"
                                    class="block text-lg font-semibold leading-6 text-black">Layanan
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
                                    <input type="datetime-local"
                                        name="preference_schedule"
                                        id="preference_schedule"
                                        class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label for="price"
                                    class="block text-lg font-semibold leading-6 text-black">Harga
                                    Psikotes</label>
                                <div class="mt-2">
                                    <input type="text" name="price" id="price"
                                        {{-- readonly --}}
                                        class="price block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6"
                                        data-mask="000.000.000" data-mask-reverse="true">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="reason"
                                    class="block text-lg font-semibold leading-6 text-black">Alasan
                                    Mengikuti Psikotes</label>
                                <div class="mt-2">
                                    <textarea id="reason" name="reason" rows="3"
                                        class="block w-full h-[100px] rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6"></textarea>
                                </div>
                            </div>
                        </div>
                        <!--footer-->
                        <div
                            class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                            <button
                                class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button" onclick="toggleModal('modal-id')">
                                Close
                            </button>
                            <button type="submit" name="submit"
                                class="focus:ring-2  mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                                <p class="text-base font-semibold leading-none text-white">
                                    Simpan</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop">
    </div>

    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal-id">  
                                    
    <script>
        function toggleModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal.style.display === "none" || modal.style.display === "") {
                modal.style.display = "block";
            } else {
                modal.style.display = "none";
            }}
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
                        title: 'Hapus Responden',
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
