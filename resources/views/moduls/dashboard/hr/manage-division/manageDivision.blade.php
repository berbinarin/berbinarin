@extends('moduls.dashboard.layouts.main', [
    'title' => 'Manage Division',
    'active' => 'Dashboard',
    'modul' => 'Manage Division',
])

@section('content-dashboard')
<style>
    .w-80 {
        width: 20rem;
        /* Adjust as needed for your specific requirements */
    }

    .sticky-col {
        position: -webkit-sticky;
        position: sticky;
        background-color: white;
        z-index: 1;
    }

    .sticky-col-1 {
        left: 0;
        width: 50px;
        /* Adjust width if necessary */
    }

    .sticky-col-2 {
        left: 50px;
        /* Adjust this value to match the width of the first column */
    }
</style>

<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="py-4 md:pt-12 md:pb-7">
            <div class="">
                <p tabindex="0"
                    class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                    Division Management</p>
                <p class="w-3/4 text-disabled">Pada halaman ini, admin dapat melakukan tambah, edit, ataupun hapus
                    terhadap divisi yang ada pada Keluarga Berbinar. Data tersebut yang menjadi bahan untuk ditampilkan
                    pada website resmi Berbinar pada bagian Keluarga Berbinar </p>
                <a href="{{ route('dashboard.manageDivision.add') }}">
                    <button type="button"
                        class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg">
                        <p class=" font-medium leading-none text-dark">Tambah Data</p>
                    </button>
                </a>
            </div>
        </div>
        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
            <div class="mt-4 mb-4 overflow-x-auto">
                <table id="example" class="min-w-full leading-normal pt-5">
                    <thead>
                        <tr class="mt-4">
                            <th
                                class="px-6 py-3 bg-white text-center text-base leading-4 font-bold text-black tracking-wider sticky-col sticky-col-1">
                                No</th>
                            <th
                                class="px-6 py-3 bg-white text-center text-base leading-4 font-bold text-black tracking-wider sticky-col sticky-col-2">
                                Nama Divisi</th>
                            <th
                                class="px-6 py-3 bg-white text-center text-base leading-4 font-bold text-black tracking-wider">
                                Sub Divisi</th>
                            <th
                                class="px-6 py-3 bg-white text-center text-base leading-4 font-bold text-black tracking-wider w-80">
                                Tanggal Dibuat</th>
                            <th
                                class="px-6 py-3 bg-white text-center text-base leading-4 font-bold text-black tracking-wider">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Tes Dummy data -->
                        @php
                            $dummyData = [
                                [
                                    'id' => 1,
                                    'nama_divisi' => 'Divisi Keuangan',
                                    'sub_divisi' => 'Anggaran & Akuntansi',
                                    'tanggal_dibuat' => '2023-01-15',
                                ],
                                [
                                    'id' => 2,
                                    'nama_divisi' => 'Divisi Pemasaran',
                                    'sub_divisi' => 'Media Sosial',
                                    'tanggal_dibuat' => '2023-02-10',
                                ],
                                [
                                    'id' => 3,
                                    'nama_divisi' => 'Divisi Pengembangan SDM',
                                    'sub_divisi' => 'Pelatihan & Rekrutmen',
                                    'tanggal_dibuat' => '2023-03-05',
                                ],
                            ];
                        @endphp

                        @foreach($dummyData as $index => $item)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-no-wrap sticky-col sticky-col-1">
                                    {{ $index + 1 }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap sticky-col sticky-col-2">
                                    {{ $item['nama_divisi'] }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    {{ $item['sub_divisi'] }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap w-80">
                                    {{ $item['tanggal_dibuat'] }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap flex justify-center items-center gap-2">
                                    <a href="{{ route('dashboard.manageDivision.details') }}"
                                        class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-2 focus:outline-none rounded hover:bg-blue-700"
                                        style="background-color: #3B82F6;">
                                        <i class='bx bx-show text-white'></i>
                                    </a>
                                    <a href="#"
                                        class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-2 focus:outline-none rounded hover:bg-yellow-700"
                                        style="background-color: #E9B306;">
                                        <i class='bx bx-edit-alt text-black'></i>
                                    </a>
                                    <a href="#"
                                        class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-2 focus:outline-none rounded hover:bg-red-700"
                                        style="background-color: #EF4444;">
                                        <i class='bx bx-show text-white'></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle('hidden');
        document.getElementById(modalID + '-backdrop').classList.toggle('hidden');
    }
</script>
@endsection