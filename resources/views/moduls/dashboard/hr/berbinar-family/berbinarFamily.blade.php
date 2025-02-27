@extends('moduls.dashboard.layouts.main', [
    'title' => 'BerbinarFamily',
    'active' => 'Dashboard',
    'modul' => 'BerbinarFamily',
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
                    Staff Data Management</p>
                <p class="w-3/4 text-disabled">Pada halaman ini, admin dapat melakukan tambah, edit, ataupun hapus
                    terhadap data seluruh staff di Berbinar. </br> Data tersebut yang menjadi bahan untuk ditampilkan
                    pada website resmi Berbinar pada bagian Keluarga Berbinar </p>
                <a href="{{ route('dashboard.berbinarFamily.add') }}">
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
                                Nama Lengkap</th>
                            <th
                                class="px-6 py-3 bg-white text-center text-base leading-4 font-bold text-black tracking-wider">
                                Divisi</th>
                            <th
                                class="px-6 py-3 bg-white text-center text-base leading-4 font-bold text-black tracking-wider">
                                Waktu Menjabat</th>
                            
                            <th
                                class="px-6 py-3 bg-white text-center text-base leading-4 font-bold text-black tracking-wider">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($staffs as $index => $staff)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-no-wrap sticky-col sticky-col-1">
                                    {{ $index + 1 }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap sticky-col sticky-col-2">
                                    {{ $staff->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    @if($staff->records->isNotEmpty())
                                        {{ $staff->records->first()->division }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    @if($staff->records->isNotEmpty())
                                        {{ \Carbon\Carbon::parse($staff->records->first()->date_start)->format('Y') }} - {{ \Carbon\Carbon::parse($staff->records->last()->date_end)->format('Y') }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap flex justify-center items-center gap-2">
                                    <a href="{{ route('dashboard.berbinarFamily.details', $staff->id) }}"
                                        class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-2 focus:outline-none rounded hover:bg-blue-700"
                                        style="background-color: #3B82F6;">
                                        <i class='bx bx-show text-white'></i>
                                    </a>
                                    <a href="{{ route('dashboard.berbinarFamily.edit', $staff->id) }}"
                                        class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-2 focus:outline-none rounded hover:bg-yellow-700"
                                        style="background-color: #E9B306;">
                                        <i class='bx bx-edit-alt text-black'></i>
                                    </a>
                                    <form action="{{ route('dashboard.berbinarFamily.delete', $staff->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-2 focus:outline-none rounded hover:bg-red-700"
                                            style="background-color: #EF4444;">
                                            <i class='bx bx-trash-alt text-white'></i>
                                        </button>
                                    </form>
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