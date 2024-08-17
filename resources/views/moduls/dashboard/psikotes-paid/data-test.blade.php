@extends('moduls.dashboard.layouts.main', [
'title' => 'Pendaftaran Psikotes',
'active' => 'Dashboard',
'modul' => 'Psikotest Paid Data Test',
])

@section('content-dashboard')
<section class="flex w-full">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div class="">
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Data Test Psikotes Paid</p>
                    <p class="text-disabled py-2">Fitur ini menampilkan informasi data test dari user yang telah
                        mengerjakan psikotes Berbinar.</p>
                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-[24px]">
                <div class="mt-4 overflow-x-auto">
                    <table id="example" class="display gap-3" style="overflow-x: scroll;">
                        <thead>
                            <tr>
                                {{-- <th style="text-align: center">No</th> --}}
                                <th style="text-align: center">Nama Alat Tes</th>
                                <th style="text-align: center">Nomor Alat Tes</th>
                                <th style="text-align: center">Token</th>
                                <th style="text-align: center">Generate Token</th>
                                <th style="text-align: center">Dashboard</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tools as $tool)
                            <tr id="" class="data-consume">
                                <td class="text-center">{{ $tool->name }}</td>
                                <td class="text-center">{{ $tool->id }}</td>
                                <td class="text-center">{{ $tool->token }}</td>
                                <td class="flex gap-2 justify-center">

                                    {{-- {{-- BUTTON DELETE --}}
                                    {{-- <button type="button"
                                                class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 focus:outline-none rounded delete-button"
                                                data-id="">
                                                <i class='bx bx-plus text-white'></i>
                                            </button> --}}


                                    {{-- BUTTON DETAIL  --}}
                                    {{-- <a href=""
                                                class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-600 focus:outline-none rounded">
                                                <i class='bx bx-minus text-white'></i>
                                            </a> --}}

                                    {{-- GENERATE TOKEN  --}}
                                    <form action="{{ route('dashboard.psikotespaid.generate-token', $tool->id) }}"
                                        method="POST" style="display: inline-block;">
                                        @csrf
                                        <button type="submit"
                                            class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-blue-500 hover:bg-blue-500 rounded-3xl">
                                            <i class='bx bx-sync text-white'> Update</i>
                                        </button>
                                    </form>
                                </td>

                                {{-- DASHBOARD  --}}
                                <td class="gap-2 justify-center">
                                    @if ($tool->name === 'PAPI Kostick')
                                    <a href="{{ route('dashboard.psikotespaid.dashboardPapikostick') }}"
                                        class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                        <i class='bx bx-home-alt text-white'> Dashboard</i>
                                    </a>
                                    @else
                                    <button type="button"
                                        class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                        <i class='bx bx-home-alt text-white'> Dashboard</i>
                                    </button>
                                    @endif
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