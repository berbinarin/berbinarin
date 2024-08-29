@extends('moduls.dashboard.layouts.main', [
    'title' => 'Price List',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid Price List',
])

@section('content-dashboard')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="">
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Price List Jenis Psikotes</p>
                        <p class="text-disabled py-2">Pada halaman dashboard ini, anda dapat melihat berbagai layanan alat
                            tes dan harga yang termasuk dalam kategori individu.</p>
                        <button onclick="toggleModal('modal-id')" type="button"
                            class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class=" font-medium leading-none text-dark">Tambah Data</p>
                        </button>
                    </div>
                </div>
                <div class="w-[1300px] bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-[24px]">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display gap-3" style="overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Kategori</th>
                                    <th style="text-align: center">Jenis</th>
                                    <th style="text-align: center">Harga</th>
                                    <th style="text-align: center"></th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($priceList as $list)
                                    <tr id="" class="data-consume">
                                        <td style="text-align: center">{{ $loop->iteration }}</td>
                                        <td style="text-align: center">{{ $list->name }}</td>
                                        {{-- <td style="text-align: center">Tes Kesiapan Pernikahan</td> --}}
                                        <td style="text-align: center">{{ $list->categoryPsikotestType->name }}</td>
                                        <td style="text-align: center">Rp. {{ number_format($list->price, 0, ',', '.') }}
                                        </td>
                                        <td class="flex gap-2 justify-center">

                                            {{-- BUTTON EDIT  --}}
                                            <button
                                                onclick="showEditModal({{ $list->id }}, '{{ $list->name }}', '{{ $list->category_psikotest_type_id }}', '{{ $list->price }}')"
                                                type="button"
                                                class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-blue-400 hover:bg-blue-400 rounded">
                                                <i class='bx bxs-edit-alt text-white'></i>
                                            </button>


                                            {{-- BUTTON DELETE  --}}
                                            <button onclick="showDeleteModal({{ $list->id }})" type="button"
                                                class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                                <i class='bx bx-trash text-white'></i>
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach

                                <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                    id="edit-modal">
                                    <div class="relative w-[800px] my-5 mx-48">
                                        <!--content-->
                                        <div
                                            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                            <!--header-->
                                            <div
                                                class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                                                <h3 class="text-3xl font-semibold">
                                                    Edit Price List
                                                </h3>
                                            </div>
                                            <!--body-->
                                            <div class="relative p-5 flex-auto">
                                                <form action="" class="flex flex-col gap-1" method="post"
                                                    id="edit-form">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="grid grid-cols-6 gap-x-6 gap-y-4">

                                                        <div class="col-span-full">
                                                            <label for="category_psikotest_type_id"
                                                                class="block text-lg font-semibold leading-6 text-black">Kategori
                                                                Psikotes</label>
                                                            <div class="mt-2">
                                                                <select id="category_psikotest_type_id"
                                                                    name="category_psikotest_type_id"
                                                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                                                    <option value="1">Komunitas</option>
                                                                    <option value="2">Individu</option>
                                                                    <option value="3">Instansi Pendidikan</option>
                                                                    <option value="4">Perusahaan</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-span-3">
                                                            <label for="name"
                                                                class="block text-lg font-semibold leading-6 text-black">Jenis
                                                                Psikotes</label>
                                                            <div class="mt-2">
                                                                <input type="text" name="name" id="name"
                                                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                                                            </div>
                                                        </div>

                                                        <div class="col-span-3">
                                                            <label for="price"
                                                                class="block text-lg font-semibold leading-6 text-black">Harga
                                                                Psikotes</label>
                                                            <div class="mt-2">
                                                                <input type="number" name="price" id="price"
                                                                    class="price block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6"
                                                                    min="0" step="1">

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!--footer-->
                                                    <div
                                                        class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                                                        <button
                                                            class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                            type="button" onclick="toggleModal('edit-modal')">
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
                                <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="edit-modal-backdrop"></div>

                                <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                    id="modal-id">
                                    <div class="relative w-[800px] my-5 mx-48">
                                        <!--content-->
                                        <div
                                            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                            <!--header-->
                                            <div
                                                class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                                                <h3 class="text-3xl font-semibold">
                                                    Tambah Price List
                                                </h3>
                                            </div>
                                            <!--body-->
                                            <div class="relative p-5 flex-auto">
                                                <form action="{{ route('dashboard.psikotespaid.add-price-list') }}"
                                                    class="flex flex-col gap-1" method="post">
                                                    @csrf
                                                    <div class="grid grid-cols-6 gap-x-6 gap-y-4">

                                                        <div class="col-span-full">
                                                            <label for="psikotest_category_id"
                                                                class="block text-lg font-semibold leading-6 text-black">Kategori
                                                                Psikotes</label>
                                                            <div class="mt-2">
                                                                <select id="category_psikotest_type_id"
                                                                    name="category_psikotest_type_id"
                                                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                                                    <option value="1">Komunitas</option>
                                                                    <option value="2">Individu</option>
                                                                    <option value="3">Instansi Pendidikan</option>
                                                                    <option value="4">Perusahaan</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-span-3">
                                                            <label for="name"
                                                                class="block text-lg font-semibold leading-6 text-black">Jenis
                                                                Psikotes</label>
                                                            <div class="mt-2">
                                                                <input type="text" name="name" id="name"
                                                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                                                            </div>
                                                        </div>

                                                        <div class="col-span-3">
                                                            <label for="price"
                                                                class="block text-lg font-semibold leading-6 text-black">Harga
                                                                Psikotes</label>
                                                            <div class="mt-2">
                                                                <input type="number" name="price" id="price"
                                                                    class="price block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6"
                                                                    min="0" step="1">

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
                                <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>

                                <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                    id="modal-delete">
                                    <div class="relative w-auto my-6 mx-auto max-w-3xl">
                                        <!--content-->
                                        <div
                                            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                            <!--header-->
                                            <div
                                                class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                                                <h3 class="text-3xl font-semibold">
                                                    Delete Price List
                                                </h3>
                                                <button
                                                    class="p-1 ml-auto bg-transparent border-0 text-black float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                                                    onclick="toggleModal('modal-delete')">
                                                    <span
                                                        class="bg-transparent text-black h-6 w-6 text-2xl block outline-none focus:outline-none">×</span>
                                                </button>
                                            </div>
                                            <!--body-->
                                            <div class="relative p-6 flex-auto">
                                                <form action="" method="post" id="delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" id="delete-id">
                                                    <p class="mb-6">Apakah kamu yakin ingin menghapus price list ini?</p>
                                                    <!--footer-->
                                                    <div
                                                        class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                                                        <button
                                                            class="text-gray-500 background-transparent font-bold px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                            type="button"
                                                            onclick="toggleModal('modal-delete')">Close</button>
                                                        <button type="submit" name="submit"
                                                            class="focus:ring-2 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                                                            <p class="text-base font-semibold leading-none text-white">
                                                                Delete Data</p>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-delete-backdrop">
                                </div>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    title: 'Hapus Data Psikotes Individu',
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
    <script>
        function showDeleteModal(id) {
            document.getElementById('delete-id').value = id;

            document.getElementById('delete-form').action =
                "{{ route('dashboard.psikotespaid.delete-price-list', '') }}/" +
                id;

            toggleModal('modal-delete');
        }
    </script>
    <script>
        function showEditModal(id, name, category_psikotest_type_id, price) {
            document.getElementById('name').value = name;
            document.getElementById('category_psikotest_type_id').value = category_psikotest_type_id;
            document.getElementById('price').value = price;

            document.getElementById('edit-form').action = "{{ route('dashboard.psikotespaid.delete-price-list', '') }}/" +
                id;

            toggleModal('edit-modal');
        }
    </script>
@endsection
