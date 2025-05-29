@extends('dashboard.layouts.app', [
    'title' => 'Pendaftaran Psikotes',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid Testimoni',
])

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="">
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Testimoni Psikotes</p>
                        <p class="text-disabled py-2">Fitur ini menampilkan data testimoni user yang telah melakukan
                            psikotes.</p>
                    </div>
                </div>
                <div class="w-[1300px] bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-[24px]">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display gap-3" style="overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Nama</th>
                                    <th style="text-align: center">Email</th>
                                    <th style="text-align: center">Tanggal Pengisian</th>
                                    <th style="text-align: center">Waktu Pengisian</th>
                                    <th style="text-align: center"></th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($testimoni as $testi)
                                    <tr id="" class="data-consume">
                                        <td class="text-center">{{ $testi->id }}</td>
                                        <td class="text-center">{{ $testi->userPsikotestPaid->fullname }}</td>
                                        <td class="text-center">{{ $testi->userPsikotestPaid->email }}</td>
                                        <td class="text-center">
                                            {{ \Carbon\Carbon::parse($testi->created_at)->format('d-m-Y') }}
                                        </td>
                                        <td class="text-center">
                                            {{ \Carbon\Carbon::parse($testi->created_at)->format('H:i:s') }}
                                        </td>
                                        <td class="flex gap-5 justify-center">

                                            {{-- BUTTON TESTIMONI --}}
                                            <a href="{{ route('dashboard.psikotespaid.testimoni-show', $testi->id) }}"
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
