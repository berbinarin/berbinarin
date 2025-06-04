@extends(
    "dashboard.layouts.app",
    [
        "title" => "Internship",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Edit Data Internship</p>
            </div>

            <form action="{{ route("dashboard.internships.update", $Internship->id) }}" method="POST">
                @csrf
                @method("PUT")

                <div class="flex flex-row gap-4">
                    <!-- Left Table -->
                    <div class="w-full md:w-1/2">
                        <div class="overflow-hidden rounded-lg bg-white p-4 shadow-sm">
                            <!-- Left Table Header -->
                            <div class="mb-4 flex items-center">
                                <div class="flex w-full justify-between">
                                    <p class="m-0 w-2/5 flex-grow-0 rounded-l-lg bg-gray-100 px-4 py-1 text-start text-xl font-semibold">Fields</p>
                                    <div class="h-full w-1 bg-gray-300"></div>
                                    <p class="m-0 w-3/5 flex-grow-0 rounded-r-lg bg-gray-100 px-4 py-1 text-start text-xl font-semibold">Details</p>
                                </div>
                            </div>

                            <!-- Left Table Content -->
                            <div class="mb-2 flex flex-col">
                                <table class="w-full">
                                    <tr class="w-2/5 border-b border-gray-200">
                                        <td class="w-2/5 border-r px-4 py-1">
                                            <label for="id" class="font-semibold text-gray-600">ID:</label>
                                        </td>
                                        <td class="px-4 py-2">
                                            <input type="text" id="id" name="id" value="{{ $Internship->id }}" readonly class="w-full rounded-lg border border-gray-300 bg-gray-100 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="w-3/5 border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="email" class="font-semibold text-gray-600">Email:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="email" id="email" name="email" value="{{ $Internship->email }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="posisi" class="font-semibold text-gray-600">Posisi:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="posisi" name="posisi" value="{{ $position->name }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="nama_lengkap" class="font-semibold text-gray-600">Nama Lengkap:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ $Internship->nama_lengkap }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="nama_panggilan" class="font-semibold text-gray-600">Nama Panggilan:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="nama_panggilan" name="nama_panggilan" value="{{ $Internship->nama_panggilan }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="tanggal_lahir" class="font-semibold text-gray-600">Tanggal Lahir:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $Internship->tanggal_lahir }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="nomor_wa" class="font-semibold text-gray-600">No. WA:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="nomor_wa" name="no_whatsapp" value="{{ $Internship->no_whatsapp }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="domisili" class="font-semibold text-gray-600">Domisili:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="domisili" name="asal_kota" value="{{ $Internship->asal_kota }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="instansi" class="font-semibold text-gray-600">Instansi:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="instansi" name="asal_pendidikan" value="{{ $Internship->asal_pendidikan }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="status" class="font-semibold text-gray-600">Status:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="status" name="status_kelas" value="{{ $Internship->status_kelas }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="jurusan" class="font-semibold text-gray-600">Jurusan:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="jurusan" name="jurusan" value="{{ $Internship->jurusan }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Right Table -->
                    <div class="w-full md:w-1/2">
                        <div class="overflow-hidden rounded-lg bg-white p-4 shadow-sm">
                            <!-- Right Table Header -->
                            <div class="mb-4 flex items-center">
                                <div class="flex w-full justify-between">
                                    <p class="m-0 w-2/5 flex-grow rounded-l-lg bg-gray-100 px-4 py-2 text-start text-xl font-semibold">Fields</p>
                                    <div class="h-full w-1 bg-gray-300"></div>
                                    <p class="m-0 w-3/5 flex-grow rounded-r-lg bg-gray-100 px-4 py-2 text-start text-xl font-semibold">Details</p>
                                </div>
                            </div>

                            <!-- Right Table Content -->
                            <div class="mb-2 flex flex-col">
                                <table class="w-full">
                                    <tr class="w-2/5 border-b border-gray-200">
                                        <td class="w-2/5 border-r px-4 py-1">
                                            <label for="tautan_ig" class="font-semibold text-gray-600">Tautan IG:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="tautan_ig" name="akun_instagram" value="{{ $Internship->akun_instagram }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="tautan_tiktok" class="font-semibold text-gray-600">Tautan TikTok:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="tautan_tiktok" name="akun_tiktok" value="{{ $Internship->akun_tiktok }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="tautan_linkedin" class="font-semibold text-gray-600">Tautan LinkedIn:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="tautan_linkedin" name="akun_linkedin" value="{{ $Internship->akun_linkdin }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="informasi_rekrutmen" class="font-semibold text-gray-600">Informasi Rekrutmen:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <textarea id="informasi_rekrutmen" name="sumber_informasi" class="w-full rounded-lg border border-gray-300 px-2 py-1">{{ $Internship->sumber_informasi }}</textarea>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="tautan_cv" class="font-semibold text-gray-600">Tautan CV:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="tautan_cv" name="tautan_cv" value="{{ $Internship->tautan_cv }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="tautan_porto" class="font-semibold text-gray-600">Tautan Portfolio:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="tautan_porto" name="tautan_portofolio" value="{{ $Internship->tautan_portofolio }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="tautan_bukti_follow" class="font-semibold text-gray-600">Tautan Bukti Follow:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="tautan_bukti_follow" name="tautan_berkas_ss" value="{{ $Internship->tautan_berkas_ss }}" class="w-full rounded-lg border border-gray-300 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="motivasi" class="font-semibold text-gray-600">Motivasi:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <textarea id="motivasi" name="motivasi" class="w-full rounded-lg border border-gray-300 px-2 py-1">{{ $Internship->motivasi }}</textarea>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="created_at" class="font-semibold text-gray-600">Created At:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="created_at" value="{{ $Internship->created_at }}" readonly class="w-full rounded-lg border border-gray-300 bg-gray-100 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">
                                            <label for="updated_at" class="font-semibold text-gray-600">Updated At:</label>
                                        </td>
                                        <td class="border-l px-4 py-2">
                                            <input type="text" id="updated_at" value="{{ $Internship->updated_at }}" readonly class="w-full rounded-lg border border-gray-300 bg-gray-100 px-2 py-1" />
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200" style="height: 80px">
                                        <td class="border-r px-4 py-1">
                                            <label class="font-semibold text-gray-600" for="keterangan">Keterangan:</label>
                                        </td>
                                        <td class="py-1 pl-4 pr-8">
                                            <input type="text" id="keterangan" name="keterangan" class="w-full rounded border border-gray-300 px-2 py-1" value="{{ $Internship->keterangan }}" />
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="mt-4 flex justify-end">
                                <button type="submit" class="rounded-lg bg-blue-500 px-4 py-2 font-semibold text-white hover:bg-blue-600">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
