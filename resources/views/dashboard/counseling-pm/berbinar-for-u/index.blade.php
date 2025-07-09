@extends(
    "dashboard.layouts.app",
    [
        "title" => "Konseling Berbinar For U Data",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="">
                        <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Berbinar For U Data</p>
                        <p class="text-disabled">Halaman ini menampilkan seluruh data pengajuan curhat dari pengguna Berbinar For U. Admin dapat memantau, memfilter, dan mengelola data secara efisien di sini.</p>
                        <a href="{{ route("dashboard.berbinar-for-u.create") }}" class="mt-8 inline-flex items-start justify-start rounded bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Tambah Data</p>
                        </a>
                    </div>
                </div>
                <div class="rounded-md bg-white px-4 py-4 md:px-8 md:py-7 xl:px-10">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Nama Lengkap</th>
                                    <th style="text-align: center">Email</th>
                                    <th style="text-align: center">Jenis Kelamin</th>
                                    <th style="text-align: center">Tanggal Daftar</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($BerbinarForUData as $key => $item)
                                    <tr class="data-consume">
                                        <td class="text-center" style="height: 40px">{{ $key + 1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->email ?? "-" }}</td>
                                        <td>{{ $item->jenis_kelamin ?? "-" }}</td>
                                        <td class="text-center">{{ \Carbon\Carbon::parse($item->created_at)->format("d-m-Y") }}</td>
                                        <td>
                                            <a href="{{ route("dashboard.berbinar-for-u.show", $item->id) }}" class="inline-flex items-start justify-start rounded bg-blue-500 p-3 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                <i class="bx bx-show text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak ada data.</td>
                                    </tr>
                                @endforelse
                            </tbody>
    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
