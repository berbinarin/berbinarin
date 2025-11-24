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
                        <div class="flex flex-row gap-2">
                            <a href="{{ route("dashboard.data.index") }}">
                                <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.webp") }}" alt="Back Btn" />
                            </a>
                            <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Data Berbinar For U</p>
                        </div>
                        <p class="text-disabled">Halaman ini menampilkan seluruh data pengajuan curhat dari pengguna Berbinar For U. Admin dapat memantau, memfilter, dan mengelola data secara efisien di sini.</p>
                        <a href="{{ route("dashboard.berbinar-for-u.create") }}" class="mt-8 inline-flex items-start justify-start rounded bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Tambah Data</p>
                        </a>
                    </div>
                </div>
                <div class="rounded-md bg-white px-4 py-4 md:px-8 md:py-7 xl:px-10 mb-7">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Nama Lengkap</th>
                                    <th style="text-align: center">Email</th>
                                    <th style="text-align: center">Nomor WhatsApp</th>
                                    <th style="text-align: center">Jenis Kelamin</th>
                                    <th style="text-align: center">Tanggal Daftar</th>
                                    <th style="text-align: center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($BerbinarForUData as $key => $item)
                                    <tr class="data-consume">
                                        <td class="text-center" style="height: 40px">{{ $key + 1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td class="text-center">
                                            <a href="mailto:{{ $item->email }}" class="text-blue-500 hover:text-blue-700 underline">{{ Str::limit($item->email, 25) }}</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="https://wa.me/62{{ ltrim($item->no_wa, '0') }}" target="_blank" class="text-blue-500 hover:text-blue-700 underline">{{ $item->no_wa }}</a>
                                        </td>
                                        <td class="text-center">{{ $item->jenis_kelamin ?? "-" }}</td>
                                        <td class="text-center">{{ \Carbon\Carbon::parse($item->created_at)->format("d-m-Y") }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('dashboard.berbinar-for-u.show', $item->id) }}"
                                                class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-3 bg-gray-500 hover:bg-gray-600 focus:outline-none rounded">
                                                <i class='bx bx-show text-white'></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
