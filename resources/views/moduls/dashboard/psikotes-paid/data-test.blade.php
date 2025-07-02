@extends('dashboard.layouts.app', [
    'title' => 'Pendaftaran Psikotes',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid Data Test',
])

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pt-12 ml-20">
                    <div class="">
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Data Test Psikotes Paid</p>
                        <p class="text-disabled py-2">Fitur ini menampilkan informasi data test dari user yang telah
                            mengerjakan psikotes Berbinar.</p>
                            {{-- <a href="{{ route('dashboard.arteri') }}"><button class="bg-blue-300 p-2">Arteri</button></a> --}}
                            
                    </div>
                </div>
                <div class="w-[1150px] bg-white py-7 px-10 ml-20 rounded-[24px]">
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

                                            {{-- BUTTON DELETE --}}
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

                                        {{-- DASHBOARD KHUSUS PAPIKOSTICK --}}
                                        <td class="gap-2 justify-center">
                                            @if ($tool->name === 'PAPI Kostick')
                                                <a href="{{ route('dashboard.psikotespaid.dashboardPapikostick') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'BIODATA_INDIVIDUAL')
                                                <a href="{{ route('dashboard.psikotespaid.biodataindividual') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'BIODATA_PERUSAHAAN')
                                                <a href="{{ route('dashboard.psikotespaid.biodataperusahaan') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'BIODATA_PENDIDIKAN')
                                                <a href="{{ route('dashboard.psikotespaid.biodatapendidikan') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'BIODATA_KOMUNITAS')
                                                <a href="{{ route('dashboard.psikotespaid.biodatakomunitas') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'BIODATA_KLINIS')
                                                <a href="{{ route('dashboard.psikotespaid.biodataklinis') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'BAUM')
                                                <a href="{{ route('dashboard.psikotespaid.baum') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'DAP')
                                                <a href="{{ route('dashboard.psikotespaid.dap') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'HTP')
                                                <a href="{{ route('dashboard.psikotespaid.htp') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'Tes Esai')
                                                <a href="{{ route('dashboard.psikotespaid.dashboardesai') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'VAK')
                                                <a href="{{ route('dashboard.psikotespaid.dashboardVAK') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'SSCT')
                                                <a href="{{ route('dashboard.psikotespaid.dashboardSSCT') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'OCEAN')
                                                <a href="{{ route('dashboard.psikotespaid.ocean') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'BDI')
                                                <a href="{{ route('dashboard.psikotespaid.bdi') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'Dass-42')
                                                <a href="{{ route('dashboard.psikotespaid.dass42') }}"
                                                    class="focus:ring-2 focus:ring-offset-2 mt-0 inline-flex items-start justify-start p-3 bg-green-500 hover:bg-green-500 rounded-3xl">
                                                    <i class='bx bx-home-alt text-white'> Dashboard</i>
                                                </a>
                                            @elseif ($tool->name === 'RMIB')
                                                <a href="{{ route('dashboard.psikotespaid.rmib') }}"
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
