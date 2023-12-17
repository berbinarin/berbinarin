@extends('moduls.dashboard.layouts.main', [
    'title' => 'Positions Requirements Management',
    'active' => 'Dashboard',
    'modul' => 'Positions Requirements',
])

@section('content-dashboard')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="">
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Position Requirements Management Data</p>
                        <p class="w-2/4 text-disabled">Fitur ini digunakan untuk mengatur dan memanajemen data deskripsi
                            posisi hiring
                            yang sedang
                            atau akan
                            dibukan atau telah dibuka yang ditampilkan pada website careers Berbinarin.</p>
                        <button onclick="toggleModal('modal-id')" type="button"
                            class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class=" font-medium leading-none text-dark">Tambah Data</p>
                        </button>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Posisi</th>
                                    <th>Requirement</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="data-consume">
                                    <td>1</td>
                                    <td>Human Resource Management</td>
                                    <td>Mengetahui cara penulisan Bahasa Indonesia yang sesuai dengan ejaan yang
                                        disempurnakan (EYD)</td>
                                    <td class="flex gap-2">
                                        <a href="/dashboard/admin/positions/requirements/edit/1"
                                            class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-yellow-500 hover:bg-yellow-500 focus:outline-none rounded"><i
                                                class='bx bxs-edit-alt text-dark'></i>
                                        </a>
                                        <form action="" method="post">
                                            @csrf
                                            <input type="hidden" name="id">
                                            <button type="submit"
                                                class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                                <i class='bx bxs-trash-alt text-white'></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Posisi</th>
                                    <th>Requirement</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal-id">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Input Data Position Requirement
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
                <div class="relative p-6 flex-auto">
                    <form action="" class="flex flex-col gap-1" method="post">
                        @csrf
                        <div class="flex gap-1">
                            <div class="mb-1 pt-0 flex-1">
                                <label for="position_id" class="text-blueGray-600 text-base">Nama Posisi</label>
                                <select id="position_id" name="position_id" placeholder="Placeholder"
                                    class="px-3 py-3 appearance-none placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                    <option value="Default">Pilih Posisi</option>
                                    <option value="1">Human Resource Development</option>
                                    <option value="2">Marketing Strategist and Sales</option>
                                    <option value="3">Graphic Designer</option>
                                </select>
                            </div>

                        </div>

                        <div class="mb-1 pt-0 w-full">
                            <label for="requirement" class="text-blueGray-600 text-base">Requirement</label>
                            <input id="requirement" name="requirement" type="text" placeholder="Requirement"
                                class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full" />
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

    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>
@endsection
