@extends(
    "dashboard.layouts.app",
    [
        "title" => "Positions Descriptions Management",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="">
                        <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Position Job Descriptions Management Data</p>
                        <p class="w-2/4 text-disabled">Fitur ini digunakan untuk mengatur dan memanajemen data deskripsi posisi hiring yang sedang atau akan dibukan atau telah dibuka yang ditampilkan pada website careers Berbinarin.</p>
                        <button onclick="toggleModal('modal-id')" type="button" class="mt-8 inline-flex items-start justify-start rounded bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Tambah Data</p>
                        </button>
                    </div>
                </div>
                <div class="rounded-md bg-white px-4 py-4 md:px-8 md:py-7 xl:px-10">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Posisi</th>
                                    <th>Job Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($HiringPosisitonsJobDescriptionment as $key => $item)
                                    <tr class="data-consume">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->HiringPositions->name }}</td>
                                        <td>{{ Str::limit($item->job_description, 25) }}</td>
                                        <!-- Adjust the limit (50 in this example) to your preferred word limit -->
                                        <td class="flex gap-2">
                                            <a href="{{ route("dashboard.position-descriptions.edit", $item->id) }}" class="mt-4 inline-flex items-start justify-start rounded bg-yellow-500 p-3 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-0">
                                                <i class="bx bxs-edit-alt text-dark"></i>
                                            </a>
                                            {{--
                                                <form action="{{ route('dashboard.position-descriptions.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <input type="hidden" name="id">
                                                <button type="submit"
                                                class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                                <i class='bx bxs-trash-alt text-white'></i>
                                                </button>
                                                </form>
                                            --}}
                                            <button onclick="toggleModal('delete-modal-{{ $item->id }}')" type="button" class="mt-4 inline-flex items-start justify-start rounded bg-red-500 p-3 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-0">
                                                <i class="bx bxs-trash-alt text-white"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    {{-- modal delete job description --}}
                                    <div class="fixed inset-0 z-50 hidden items-center justify-center overflow-y-auto overflow-x-hidden outline-none focus:outline-none" id="delete-modal-{{ $item->id }}">
                                        <div class="relative mx-auto my-6 w-auto max-w-3xl">
                                            <!--content-->
                                            <div class="relative flex w-full flex-col rounded-lg border-0 bg-white shadow-lg outline-none focus:outline-none">
                                                <!--header-->
                                                <div class="border-blueGray-200 flex items-start justify-between rounded-t border-b border-solid p-5">
                                                    <h3 class="text-3xl font-semibold">Delete Job Description Data</h3>
                                                    <button class="float-right ml-auto border-0 bg-transparent p-1 text-3xl font-semibold leading-none text-black opacity-5 outline-none focus:outline-none" onclick="toggleModal('delete-modal-{{ $item->id }}')">
                                                        <span class="block h-6 w-6 bg-transparent text-2xl text-black opacity-5 outline-none focus:outline-none">×</span>
                                                    </button>
                                                </div>
                                                <!--body-->
                                                <div class="relative flex-auto p-6">
                                                    <form action="{{ route("dashboard.position-descriptions.destroy", $item->id) }}" method="post">
                                                        @csrf
                                                        @method("DELETE")
                                                        <input type="hidden" name="id" />
                                                        <p class="mb-6">
                                                            Apakah anda yakin ingin menghapus deskripsi
                                                            <b>{{ $item->HiringPositions->name }}</b>
                                                            dengan deskripsi
                                                            <i>{{ $item->job_description }}</i>
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
                                    <!-- Handle empty case if needed -->
                                @endforelse
                            </tbody>

                            <tfoot>
                                {{--
                                    <tr>
                                    <th>No</th>
                                    <th>Nama Posisi</th>
                                    <th>Job Description</th>
                                    <th>Actions</th>
                                    </tr>
                                --}}
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="fixed inset-0 z-50 hidden items-center justify-center overflow-y-auto overflow-x-hidden outline-none focus:outline-none" id="modal-id">
        <div class="relative mx-auto my-6 w-auto max-w-3xl">
            <!--content-->
            <div class="relative flex w-full flex-col rounded-lg border-0 bg-white shadow-lg outline-none focus:outline-none">
                <!--header-->
                <div class="border-blueGray-200 flex items-start justify-between rounded-t border-b border-solid p-5">
                    <h3 class="text-3xl font-semibold">Input Data Position Job Description</h3>
                    <button class="float-right ml-auto border-0 bg-transparent p-1 text-3xl font-semibold leading-none text-black opacity-5 outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                        <span class="block h-6 w-6 bg-transparent text-2xl text-black opacity-5 outline-none focus:outline-none">×</span>
                    </button>
                </div>
                <!--body-->
                <div class="relative flex-auto p-6">
                    <form action="{{ route("dashboard.position-descriptions.store") }}" class="flex flex-col gap-1" method="post">
                        @csrf
                        <div class="flex gap-1">
                            <div class="mb-1 flex-1 pt-0">
                                <label for="position_id" class="text-blueGray-600 text-base">Nama Posisi</label>
                                <select id="position_id" name="position_id" placeholder="Placeholder" required class="placeholder-blueGray-300 text-blueGray-600 relative w-full appearance-none rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                    <option value="Default">Pilih Posisi</option>
                                    @forelse ($HiringPosisitons as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @empty
                                        
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        <div class="mb-1 w-full pt-0">
                            <label for="job_description" class="text-blueGray-600 text-base">Job Description</label>
                            <textarea id="job_description" name="job_description" placeholder="Job Description" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring"></textarea>
                        </div>

                        <!--footer-->
                        <div class="border-blueGray-200 flex items-center justify-end rounded-b border-t border-solid pt-3">
                            <button class="background-transparent mb-1 mr-1 px-6 py-2 text-base font-bold text-gray-500 outline-none transition-all duration-150 ease-linear focus:outline-none" type="button" onclick="toggleModal('modal-id')">Close</button>
                            <button type="submit" name="submit" class="mt-4 inline-flex items-start justify-start rounded bg-primary px-6 py-3 hover:bg-primary focus:outline-none focus:ring-2 sm:mt-0">
                                <p class="text-base font-semibold leading-none text-white">Simpan Data</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed inset-0 z-40 hidden bg-black opacity-25" id="modal-id-backdrop"></div>

    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle('hidden');
            document.getElementById(modalID + '-backdrop').classList.toggle('hidden');
            document.getElementById(modalID).classList.toggle('flex');
            document.getElementById(modalID + '-backdrop').classList.toggle('flex');
        }
    </script>
@endsection
