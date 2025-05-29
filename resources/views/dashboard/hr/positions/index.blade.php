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
                                            {{--
                                                <form action="{{ route('HiringPositions.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <input type="hidden" name="id">
                                                <button type="submit" class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                                <i class='bx bxs-trash-alt text-white'></i>
                                                </button>
                                                </form>
                                            --}}
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
                                                        <!-- Ikon untuk is_active=true -->
                                                    @else
                                                        <i class="bx bx-low-vision text-white"></i>
                                                        <!-- Ikon untuk is_active=false -->
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
                                {{--
                                    <tr class="data-consume">
                                    <td>2</td>
                                    <td>UI/UX Designer</td>
                                    <td>Internship</td>
                                    <td>Staff</td>
                                    <td>Remote</td>
                                    <td>
                                    <a href="https://linkRecruitmentBerbinar.ly">https://linkRecruitmentBerbinar.ly</a>
                                    </td>
                                    <td class="flex gap-2">
                                    <a href="/dashboard/admin/positions/edit/1"
                                    class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-yellow-500 hover:bg-yellow-500 focus:outline-none rounded"><i
                                    class='bx bxs-edit-alt text-dark'></i>
                                    </a>
                                    <form action="" method="post">
                                    @csrf
                                    <input type="hidden" name="id">
                                    <button type="submit"
                                    class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                    <i class='bx bxs-trash-alt text-white'></i>
                                    </button>
                                    </form>
                                    
                                    </td>
                                    </tr>
                                    <tr class="data-consume">
                                    <td>3</td>
                                    <td>Class Product Management</td>
                                    <td>Internship</td>
                                    <td>Staff</td>
                                    <td>Remote</td>
                                    <td>
                                    <a href="https://linkRecruitmentBerbinar.ly">https://linkRecruitmentBerbinar.ly</a>
                                    </td>
                                    <td class="flex gap-2">
                                    <a href="/dashboard/admin/positions/edit/1"
                                    class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-yellow-500 hover:bg-yellow-500 focus:outline-none rounded"><i
                                    class='bx bxs-edit-alt text-dark'></i>
                                    </a>
                                    <form action="" method="post">
                                    @csrf
                                    <input type="hidden" name="id">
                                    <button type="submit"
                                    class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                    <i class='bx bxs-trash-alt text-white'></i>
                                    </button>
                                    </form>
                                    
                                    </td>
                                    </tr>
                                    <tr class="data-consume">
                                    <td>4</td>
                                    <td>Marketing Strategist and Sales</td>
                                    <td>Internship</td>
                                    <td>Staff</td>
                                    <td>Surabaya</td>
                                    <td>
                                    <a href="https://linkRecruitmentBerbinar.ly">https://linkRecruitmentBerbinar.ly</a>
                                    </td>
                                    <td class="flex gap-2">
                                    <a href="/dashboard/admin/positions/edit/1"
                                    class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-yellow-500 hover:bg-yellow-500 focus:outline-none rounded"><i
                                    class='bx bxs-edit-alt text-dark'></i>
                                    </a>
                                    <form action="" method="post">
                                    @csrf
                                    <input type="hidden" name="id">
                                    <button type="submit"
                                    class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                    <i class='bx bxs-trash-alt text-white'></i>
                                    </button>
                                    </form>
                                    
                                    </td>
                                    </tr>
                                --}}
                            </tbody>
                            <!-- <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Posisi</th>
                                            <th>Tipe</th>
                                            <th>Jabatan</th>
                                            <th>Lokasi</th>
                                            <th>Link Registrasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot> -->
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
                    <h3 class="text-3xl font-semibold">Input Data Position</h3>
                    <button class="float-right ml-auto border-0 bg-transparent p-1 text-3xl font-semibold leading-none text-black opacity-5 outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                        <span class="block h-6 w-6 bg-transparent text-2xl text-black opacity-5 outline-none focus:outline-none">×</span>
                    </button>
                </div>
                <!--body-->
                <div class="relative flex-auto p-6">
                    <form action="{{ route("dashboard.positions.store") }}" class="flex flex-col gap-1" method="post">
                        @csrf
                        <div class="flex gap-1">
                            <div class="mb-1 w-full pt-0">
                                <label for="name" class="text-blueGray-600 text-base">Nama Posisi</label>
                                <input id="name" name="name" type="text" placeholder="Human Resource Development" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" required />
                            </div>
                        </div>

                        <div class="flex gap-1">
                            <div class="mb-1 flex-1 pt-0">
                                <label for="type" class="text-blueGray-600 text-base">Tipe Pekerjaan</label>
                                <select id="type" name="type" placeholder="Placeholder" class="placeholder-blueGray-300 text-blueGray-600 relative w-full appearance-none rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" required>
                                    <option value="Default">Pilih Tipe Pekerjaan</option>
                                    <option value="Internship">Internship</option>
                                    <option value="Fulltime">Fulltime</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Freelancer">Freelancer</option>
                                </select>
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="positions" class="text-blueGray-600 text-base">Jabatan</label>
                                <select id="positions" name="positions" placeholder="Placeholder" required class="placeholder-blueGray-300 text-blueGray-600 relative w-full appearance-none rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                    <option value="Default">Pilih Jenis Jabatan</option>
                                    <option value="Staff">Staff</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Researcher">Researcher</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 flex-1 pt-0">
                                <label for="location" class="text-blueGray-600 text-base">Lokasi</label>
                                <select id="location" name="location" placeholder="Placeholder" required class="placeholder-blueGray-300 text-blueGray-600 relative w-full appearance-none rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                    <option value="Default">Pilih Lokasi</option>
                                    <option value="Remote">Remote</option>
                                    <option value="Surabaya">Surabaya</option>
                                </select>
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="divisi" class="text-blueGray-600 text-base">Divisi</label>
                                <select id="divisi" name="divisi" placeholder="Placeholder" required class="placeholder-blueGray-300 text-blueGray-600 relative w-full appearance-none rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                    <option value="Default">Pilih Divisi</option>
                                    <option value="Web and Mobile Apps Developer">Web and Mobile Apps Developer</option>
                                    <option value="TikTok Creator">TikTok Creator</option>
                                    <option value="Secretary n Finance">Secretary n Finance</option>
                                    <option value="Psychological Testing Product Management">Psychological Testing Product Management</option>
                                    <option value="Marketing Strategist dan Sales">Marketing Strategist dan Sales</option>
                                    <option value="IG Creator">IG Creator</option>
                                    <option value="Human Resource">Human Resource</option>
                                    <option value="Graphic Designer">Graphic Designer</option>
                                    <option value="Class Product Management">Class Product Management</option>
                                    <option value="Counseling Product Management">Counseling Product Management</option>
                                </select>
                            </div>
                        </div>

                        {{--
                            <div class="mb-1 pt-0 w-full">
                            <label for="link" class="text-blueGray-600 text-base">Link Registrasi</label>
                            <input id="link" name="link" type="text" placeholder="Link Registrasi" required class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                            </div>
                        --}}

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
