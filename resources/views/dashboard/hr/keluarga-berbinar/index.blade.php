@extends(
    "dashboard.layouts.app",
    [
        "title" => "Keluarga Berbinar",
    ]
)

@section("content")
    <style>
        .w-80 {
            width: 20rem;
            /* Adjust as needed for your specific requirements */
        }

        .sticky-col {
            position: -webkit-sticky;
            position: sticky;
            /* background-color: white; */
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
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="">
                    <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Pengelolaan Data Staf</p>
                    <p class="w-full text-disabled">
                        Pada halaman ini, admin dapat melakukan tambah, ubah, ataupun hapus terhadap data seluruh staf di Berbinar.
                        Data tersebut yang menjadi bahan untuk ditampilkan pada situs resmi Berbinar pada bagian keluarga Berbinar
                    </p>
                    <a href="{{ route("dashboard.keluarga-berbinar.create") }}">
                        <button type="button" class="mt-8 inline-flex items-start justify-start rounded-lg bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Tambah Data</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="rounded-md bg-white px-4 py-4 mb-7 md:px-8 md:py-7 xl:px-10">
                <div class="mb-4 mt-4 overflow-x-auto">
                    <table id="example" class="min-w-full pt-5 leading-normal">
                        <thead>
                            <tr class="mt-4">
                                <th class="sticky-col sticky-col-1 bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">No</th>
                                <th class="sticky-col sticky-col-2 bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Nama Lengkap</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Divisi</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Waktu Menjabat</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Prestasi</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staffs as $index => $staff)
                                <tr class="border-b border-gray-200 hover:bg-gray-200 odd:bg-gray-100 even:bg-white">
                                    <td class="whitespace-no-wrap sticky-col sticky-col-1 px-6 py-4">
                                        {{ $index + 1 }}
                                    </td>
                                    <td class="whitespace-no-wrap sticky-col sticky-col-2 px-6 py-4">
                                        {{ $staff->name }}
                                    </td>
                                    <td class="whitespace-no-wrap px-6 py-4">
                                        {{ $staff->records->first()?->division?->nama_divisi ?? "-" }}
                                    </td>
                                    <td class="whitespace-no-wrap px-6 py-4">
                                        @if ($staff->records->isNotEmpty())
                                            {{ \Carbon\Carbon::parse($staff->records->first()->date_start)->format("Y") }} -
                                            {{ \Carbon\Carbon::parse($staff->records->last()->date_end)->format("Y") }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="whitespace-no-wrap px-6 py-4 text-center">
                                        {{ $staff->motm == "yes" ? "Pernah" : "Tidak pernah" }}
                                    </td>
                                    <td class="whitespace-no-wrap flex items-center justify-center gap-2 px-6 py-4">
                                        <a href="{{ route("dashboard.keluarga-berbinar.show", $staff->id) }}" class="inline-flex items-start justify-start rounded p-2 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #3b82f6">
                                            <i class="bx bxs-show text-white"></i>
                                        </a>
                                        <a href="{{ route("dashboard.keluarga-berbinar.edit", $staff->id) }}" class="inline-flex items-start justify-start rounded p-2 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #e9b306">
                                            <i class="bx bxs-edit-alt text-white"></i>
                                        </a>
                                        <form action="{{ route("dashboard.keluarga-berbinar.destroy", $staff->id) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="inline-flex items-start justify-start rounded p-2 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #ef4444">
                                                <i class="bx bxs-trash-alt text-white"></i>
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
