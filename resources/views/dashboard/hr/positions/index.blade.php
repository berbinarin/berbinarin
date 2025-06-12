@extends(
    "dashboard.layouts.app",
    [
        "title" => "Positions Management",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="">
                        <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Position Management Data</p>
                        <p class="w-2/4 text-disabled">Fitur ini digunakan untuk mengatur dan memanajemen data posisi hiring yang sedang atau akan dibukan atau telah dibuka yang ditampilkan pada website careers Berbinarin.</p>
                        <a href="{{ route('dashboard.positions.create') }}" class="mt-8 inline-flex items-start justify-start rounded-lg bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Tambah Data</p>
                        </a>
                    </div>
                </div>
                <div class="rounded-md bg-white px-4 py-4 md:px-8 md:py-7 xl:px-10">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Posisi</th>
                                    <th>Tipe</th>
                                    <th>Jabatan</th>
                                    <th>Lokasi</th>
                                    <th>Divisi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($positions as $key => $item)
                                    <tr class="data-consume">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->positions }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>
                                            {{-- <!-- <a href="{{ $item->link }}">{{ $item->link }}</a> --> --}}
                                            {{ $item->divisi }}
                                        </td>
                                        <td class="flex gap-2">
                                            <a href="{{ route("dashboard.positions.edit", ["position" => $item->id]) }}" class="mt-4 inline-flex items-start justify-start rounded bg-yellow-500 p-3 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-0"><i class="bx bxs-edit-alt text-dark"></i></a>
                                            <button onclick="toggleModal('delete-modal-{{ $item->id }}')" type="button" class="mt-4 inline-flex items-start justify-start rounded bg-red-500 p-3 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-0">
                                                <i class="bx bxs-trash-alt text-white"></i>
                                            </button>
                                            <form action="{{ route("dashboard.positions.set_active", $item->id) }}" method="post">
                                                @csrf
                                                @method("PATCH")
                                                <input type="hidden" name="id" />
                                                <button type="submit" class="mt-4 inline-flex items-start justify-start rounded bg-gray-500 p-3 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-0" onclick="changeIcon(this)">
                                                    @if ($item->is_active)
                                                        <i class="bx bx-show text-white"></i>
                                                    @else
                                                        <i class="bx bx-low-vision text-white"></i>
                                                    @endif
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    {{-- modal delete data position --}}
                                    <div class="fixed inset-0 z-50 hidden items-center justify-center overflow-y-auto overflow-x-hidden outline-none focus:outline-none" id="delete-modal-{{ $item->id }}">
                                        <div class="relative mx-auto my-6 w-auto max-w-3xl">
                                            <!--content-->
                                            <div class="relative flex w-full flex-col rounded-lg border-0 bg-white shadow-lg outline-none focus:outline-none">
                                                <!--header-->
                                                <div class="border-blueGray-200 flex items-start justify-between rounded-t border-b border-solid p-5">
                                                    <h3 class="text-3xl font-semibold">Delete Data Position</h3>
                                                    <button class="float-right ml-auto border-0 bg-transparent p-1 text-3xl font-semibold leading-none text-black opacity-5 outline-none focus:outline-none" onclick="toggleModal('delete-modal-{{ $item->id }}')">
                                                        <span class="block h-6 w-6 bg-transparent text-2xl text-black opacity-5 outline-none focus:outline-none">×</span>
                                                    </button>
                                                </div>
                                                <!--body-->
                                                <div class="relative flex-auto p-6">
                                                    <form action="{{ route("dashboard.positions.destroy", $item->id) }}" method="post">
                                                        @csrf
                                                        @method("DELETE")
                                                        <input type="hidden" name="id" />
                                                        <p class="mb-6">
                                                            Apakah anda yakin ingin menghapus posisi
                                                            <b>{{ $item->name }}</b>
                                                            dari divisi
                                                            <b>{{ $item->divisi }}</b>
                                                            ?
                                                        </p>
                                                        <!--footer-->
                                                        <div class="border-blueGray-200 flex items-center justify-end rounded-b border-t border-solid pt-3">
                                                            <button class="background-transparent mb-1 mr-1 px-6 py-2 text-base font-bold text-gray-500 outline-none transition-all duration-150 ease-linear focus:outline-none" type="button" onclick="toggleModal('delete-modal-{{ $item->id }}')">Close</button>
                                                            <button type="submit" class="mt-4 inline-flex items-start justify-start rounded bg-red-500 p-3 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-0">
                                                                <p class="font-medium leading-none text-white">Hapus</p>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fixed inset-0 z-40 hidden bg-black opacity-25" id="delete-modal-{{ $item->id }}-backdrop"></div>
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
            document.getElementById(modalID).classList.toggle('hidden');
            document.getElementById(modalID + '-backdrop').classList.toggle('hidden');
            document.getElementById(modalID).classList.toggle('flex');
            document.getElementById(modalID + '-backdrop').classList.toggle('flex');
        }
    </script>
@endsection
