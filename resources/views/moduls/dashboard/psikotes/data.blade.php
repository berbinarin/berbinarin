@extends('moduls.dashboard.layouts.main', [
    'title' => 'Data',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Free Data',
])

@section('content-dashboard')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="">
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Data Psikotes Free</p>
                        <p class="text-disabled py-2">Fitur ini menampilkan informasi data responden yang telah mengisi
                            Psikotes Gratis Berbinar</p>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-[24px]">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display gap-3" style="overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Nama Lengkap</th>
                                    <th style="text-align: center">Jenis Kelamin</th>
                                    <th style="text-align: center">Tanggal Lahir</th>
                                    <th style="text-align: center">Email</th>
                                    <th style="text-align: center">Tanggal Tes</th>
                                    <th style="text-align: center">Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($testData as $key => $test)
                                    @foreach ($test->users as $user)
                                        <tr id="adminDataPsikotesFree_{{ $user->id }}" class="data-consume">
                                            <td class="text-center">{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->gender == 'Male' ? 'Laki-laki' : 'Perempuan' }}</td>
                                            <td>{{ \Carbon\Carbon::parse($user->date_of_birth)->format('Y-m-d') }}</td>
                                            <td class="text-center">{{ $user->email }}</td>
                                            <td>{{ \Carbon\Carbon::parse($test->test_date)->format('Y-m-d') }}</td>
                                            <td class="flex gap-2">

                                                {{-- BUTTON EDIT  --}}
                                                <button onclick="toggleModal('edit-modal-{{ $user->id }}')"
                                                    type="button"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-yellow-500 hover:bg-yellow-500 rounded">
                                                    <i class='bx bxs-edit-alt text-dark'></i>
                                                </button>

                                                {{-- BUTTON DELETE  --}}
                                                <form id="deleteForm-{{ $user->id }}"
                                                    action="{{ route('dashboard.psikotestfree.data.destroy', $user->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id">
                                                    <button type="button"
                                                        class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded delete-button"
                                                        data-id="{{ $user->id }}">
                                                        <i class='bx bxs-trash-alt text-white'></i>
                                                    </button>
                                                </form>

                                                {{-- BUTTON DETAIL  --}}
                                                <a href="{{ route('dashboard.psikotestfree.data.show', $test->id) }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-gray-500 hover:bg-gray-600 focus:outline-none rounded">
                                                    <i class='bx bx-show text-white'></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                            id="edit-modal-{{ $user->id }}">
                                            <div class="relative w-auto my-6 mx-auto max-w-3xl">
                                                <!--content-->
                                                <div
                                                    class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                    <!--header-->
                                                    <div
                                                        class="flex flex-row justify-between gap-16 w-full p-5 border-b border-solid border-blueGray-200 rounded-t">
                                                        <h3 class="text-2xl font-semibold">
                                                            Edit Soal
                                                        </h3>
                                                        <div>
                                                            <button
                                                                class="bg-red-600 h-[30px] w-[30px] rounded-full text-white"
                                                                onclick="toggleModal('edit-modal-{{ $user->id }}')">
                                                                <span
                                                                    class='bx bx-x text-3xl leading-none font-medium'></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <body-->
                                                        <div class="relative p-6 flex-auto">
                                                            <form
                                                                action="{{ route('dashboard.psikotestfree.data.edit', $user->id) }}"
                                                                class="flex flex-col gap-1" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="flex flex-col gap-5">
                                                                    <div class="flex flex-row gap-10">
                                                                        <div
                                                                            class="form-group flex flex-col mb-1 pt-0 flex-1">
                                                                            <label for="name"
                                                                                class="text-blueGray-600 text-base">Nama</label>
                                                                            <input required name="name"
                                                                                value="{{ $user->name }}"
                                                                                class="p-4 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring">
                                                                        </div>
                                                                        <div
                                                                            class="form-group flex flex-col mb-1 pt-0 flex-1">
                                                                            <label for="gender"
                                                                                class="text-blueGray-600 text-base">Jenis
                                                                                Kelamin</label>
                                                                            <select required id="gender" name="gender"
                                                                                class="p-4 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring">
                                                                                <option value="Male"
                                                                                    {{ $user->gender == 'Male' ? 'selected' : '' }}>
                                                                                    Laki-laki
                                                                                </option>
                                                                                <option value="Female"
                                                                                    {{ $user->gender == 'Female' ? 'selected' : '' }}>
                                                                                    Perempuan
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex flex-row gap-10">
                                                                        <div class="form-group flex flex-col mb-1">
                                                                            <label for="date_of_birth"
                                                                                class="text-blueGray-600 text-base py-3">Tanggal
                                                                                Lahir</label>
                                                                            <input required type="date"
                                                                                name="date_of_birth"
                                                                                value="{{ \Carbon\Carbon::parse($user->date_of_birth)->format('Y-m-d') }}"
                                                                                class="p-4 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring">
                                                                        </div>
                                                                        <div class="form-group mb-1 flex flex-col">
                                                                            <label for="email"
                                                                                class="text-blueGray-600 text-base py-3">Email</label>
                                                                            <input required name="email"
                                                                                value="{{ $user->email }}"
                                                                                class="p-4 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring">
                                                                        </div>
                                                                        <div class="form-group mb-1 flex flex-col">
                                                                            <label for="date_of_birth"
                                                                                class="text-blueGray-600 text-base border-0 py-3">Tanggal
                                                                                Tes</label>
                                                                            <input required type="date" name="test_date"
                                                                                value="{{ \Carbon\Carbon::parse($test->test_date)->format('Y-m-d') }}"
                                                                                class="p-4 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--footer-->
                                                                <div
                                                                    class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                                                                    <a href="{{ route('dashboard.psikotestfree.data') }}"
                                                                        class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                                        type="button" onclick="toggleModal('modal-edit')">
                                                                        Batal
                                                                    </a>
                                                                    <button type="submit" name="submit"
                                                                        class="focus:ring-2  mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                                                                        <p
                                                                            class="text-base font-semibold leading-none text-white">
                                                                            Simpan Data</p>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                                            id="edit-modal-{{ $user->id }}-backdrop"></div>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="edit-modal-{{ $user->id }}">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Edit Peer Counselor Schedule
                    </h3>
                    <button
                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                        onclick="toggleModal('edit-modal-{{ $user->id }}')">
                        <span
                            class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                            ×
                        </span>
                    </button>
                </div>
                <!--body-->
                <div class="relative p-6 flex-auto">
                    <form action="{{ route('dashboard.psikotestfree.data.edit', $user->id) }}"
                        class="flex flex-col gap-1" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="flex gap-1">
                            <div class="mb-1 pt-0 flex-1">
                                <label for="pukul_mulai" class="text-blueGray-600 text-base">Pukul Mulai</label>
                                <input name="pukul_mulai" id="pukul_mulai" value="{{ $user->name }}" type="time"
                                    class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full"
                                    required />
                            </div>

                            <div class="mb-1 pt-0 w-full">
                                <label for="gender" class="text-blueGray-600 text-base">Hari</label>
                                <select id="gender" name="gender" placeholder="Placeholder"
                                    class="px-3 py-3 appearance-none placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full"
                                    required>
                                    <option value="Senin" {{ $user->gender == 'Male' ? 'selected' : '' }}>Laki
                                    </option>
                                    <option value="Selasa" {{ $user->gender == 'Famale' ? 'selected' : '' }}>Perempuan
                                    </option>

                                </select>
                            </div>
                        </div>
                        <div class="flex gap-1 mb-2">
                            <div class="mb-1 pt-0 flex-1">
                                <label for="pukul_mulai" class="text-blueGray-600 text-base">Pukul Mulai</label>
                                <input name="pukul_mulai" id="pukul_mulai" value="{{ $user->date_of_birth }}"
                                    type="time"
                                    class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full"
                                    required />
                            </div>
                            <div class="mb-6 pt-0 flex-1">
                                <label for="pukul_selesai" class="text-blueGray-600 text-base">Pukul Selesai</label>
                                <input name="pukul_selesai" id="pukul_selesai" value="{{ $user->email }}"
                                    type="time"
                                    class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full"
                                    required />
                            </div>
                            <div class="mb-6 pt-0 flex-1">
                                <label for="pukul_selesai" class="text-blueGray-600 text-base">Pukul Selesai</label>
                                <input name="pukul_selesai" id="pukul_selesai" value="{{ $test->test_date }}"
                                    type="time"
                                    class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full"
                                    required />
                            </div>
                        </div>
                        <!--footer-->
                        <div
                            class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                            <button
                                class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button" onclick="toggleModal('edit-modal-{{ $user->id }}')">
                                Close
                            </button>
                            <button type="submit" name="submit"
                                class="focus:ring-2  mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                                <p class="text-base font-semibold leading-none text-white">
                                    Simpan Data</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="edit-modal-{{ $user->id }}-backdrop"></div>

    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal-delete">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
            <!--content-->
            <div class="bg-white border-0 rounded-lg shadow-lg flex flex-col w-full outline-none focus:outline-none">
                <!--header-->
                <div
                    class="flex flex-row justify-between gap-16 w-full p-5 border-b border-solid border-blueGray-200 rounded-t">
                    <h3 class="text-2xl font-semibold">
                        Detail Responden
                    </h3>

                    <div>
                        <button class="bg-red-600 h-[30px] w-[30px] rounded-full text-white"
                            onclick="toggleModal('modal-delete')">
                            <span class='bx bx-x text-3xl leading-none font-medium'></span>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                    <button
                        class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('modal-delete')">Close</button>
                    <button type="submit" name="submit"
                        class="focus:ring-2  mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                        <p class="text-base font-semibold leading-none text-white">Delete Data</p>
                    </button>
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

    <!-- <script>
        function showTestData(testId) {
            $.ajax({
                url: '/dashboard/admin/psikotest/free/data/' + testId,
                method: 'GET',
                success: function(data) {
                    // Populate modal with test data
                    $('#test-detail-content').html(JSON.stringify(data, null, 2));
                    // Show the modal
                    $('#modal-detail').modal('show');
                },
                error: function() {
                    alert('Failed to fetch test data.');
                }
            });
        }
    </script> -->
@endsection
