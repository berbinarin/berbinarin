@extends('dashboard.layouts.app', [
'title' => 'Psikotes Free',
'active' => 'Dashboard',
'modul' => 'Psikotest Free Soal',
])

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div tss="py-4 md:pt-12 md:pb-7">
                    <div class="mb-5">
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Soal</p>
                        <p class="text-disabled">Fitur ini menampilkan soal yang tersedia pada layanan Psikotes Gratis
                            Berbinar.</p>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-xl">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Kategori</th>
                                    <th style="text-align: center">R/N</th>
                                    <th style="text-align: rfnter">Soal</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($questions as $key=>$question)
                                    <tr class="data-consume">
                                        <td class="text-center" style="height: 40px">{{ $key + 1 }}</td>
                                        <td>{{ $question->dimension->name }}</td>
                                        <td class="text-center">{{ $question->rn }}</td>
                                        <td>{{ $question->question_text }}</td>
                                        <td class="flex gap-2">
                                            <button onclick="toggleModal('edit-modal-{{ $question->id }}')" type="button"
                                                class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-yellow-500 hover:bg-yellow-500 rounded">
                                                <i class='bx bxs-edit-alt text-dark'></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                        id="edit-modal-{{ $question->id }}">
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
                                                        <button class="bg-red-600 h-[30px] w-[30px] rounded-full text-white"
                                                            onclick="toggleModal('edit-modal-{{ $question->id }}')">
                                                            <span class='bx bx-x text-3xl leading-none font-medium'></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--body-->
                                                <div class="relative p-6 flex-auto">
                                                    <form
                                                        action="{{ route('dashboard.psikotestfree.question.update', $question->id) }}"
                                                        class="flex flex-col gap-1" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="flex flex-col gap-5">
                                                            <div class="flex flex-row gap-10">
                                                                <div class="mb-1 pt-0 flex-1">
                                                                    <label for="category"
                                                                        class="text-blueGray-600 text-base font-semibold">Kategori</label>
                                                                    <select disabled name="category" id="category"
                                                                        style="height: 50px"
                                                                        class="appearance-none px-3 py-3 text-disabled relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                                                        <option value="{{ $question->dimension->name }}">
                                                                            {{ $question->dimension->name }}
                                                                        </option>
                                                                        <option value="1">Agreeableness</option>
                                                                        <option value="2">Conscientiousness</option>
                                                                        <option value="3">Extraversion</option>
                                                                        <option value="4">Neuroticism</option>
                                                                        <option value="5">Openness</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-1 pt-0 flex-1">
                                                                    <label for="rn"
                                                                        class="text-blueGray-600 text-base font-semibold">R/N</label>
                                                                    <select disabled name="rn" id="rn"
                                                                        style="height: 50px"
                                                                        class="appearance-none px-3 py-3 text-disabled relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                                                        <option value="{{ $question->rn }}">
                                                                            {{ $question->rn }}
                                                                        </option>
                                                                        <option value="R">R</option>
                                                                        <option value="N">N</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 flex flex-col">
                                                                <label for="question_text"
                                                                    class="text-blueGray-600 text-base font-semibold">Soal</label>
                                                                <textarea required name="question_text" value="{{ $question->question_text }}"
                                                                    class="p-4 py-3 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-96 h-full">{{ $question->question_text }}</textarea>
                                                            </div>
                                                        </div>
                                                        <!--footer-->
                                                        <div
                                                            class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
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
                                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                                        id="edit-modal-{{ $question->id }}-backdrop"></div>

                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>

    <script>
        function showEditModal(id) {
            $.ajax({
                url: `/dashboard/admin/question/${id}/edit`,
                method: 'GET',
                success: function(data) {
                    $('#editQuestionId').val(data.id);
                    $('#editQuestionText').val(data.question_text);
                    $('#editDimensionId').val(data.dimension_id);
                    $('#editKategori').val(data.kategori); // Isi nilai kategori di sini
                    // Fill other fields as necessary
                    $('#modal-edit').modal('show');
                },
                error: function(response) {
                    alert('Error fetching data: ' + response.responseJSON.error);
                }
            });
        }

        function updateQuestion() {
            const id = $('#editQuestionId').val();
            const formData = {
                _token: $('input[name=_token]').val(),
                _method: 'PUT',
                question_text: $('#editQuestionText').val(),
                dimension_id: $('#editDimensionId').val(),
                kategori: $('#editKategori').val(), // Tambahkan data input kategori di sini
                // Tambahkan data input lain yang relevan di sini
            };

            $.ajax({
                url: `/dashboard/admin/question/${id}`,
                method: 'POST',
                data: formData,
                success: function(response) {
                    $('#modal-edit').modal('hide');
                    alert(response.success);
                    location.reload(); // Refresh the page to reflect changes
                },
                error: function(response) {
                    alert('Error updating data: ' + response.responseJSON.error);
                }
            });
        }
    </script>

    <script>
        document.querySelectorAll('.delete-button').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const formId = this.getAttribute('data-id');
                Swal.fire({
                    title: 'Hapus Soal',
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
