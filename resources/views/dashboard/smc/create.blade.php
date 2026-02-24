@extends(
    "dashboard.layouts.app",
    [
        "title" => "Dashboard SMC",
    ]
)

@section("content")
    <form action="" enctype="multipart/form-data" method="post">
        @csrf
        <section class="flex h-full w-full">
            <div class="flex h-full w-full flex-col">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="">
                        <div class="mb-2 flex items-center gap-2">
                            <a href="{{ route("dashboard.smc.index") }}">
                                <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.webp") }}" alt="Back Btn" />
                            </a>
                            <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Tambah Konten</p>
                        </div>
                        <p class="w-3/4 text-disabled">Formulir untuk menambahkan konten terbaru Berbinar pada halaman berada website Berbinar..</p>
                    </div>
                </div>

                <!-- Container form -->
                <div class="max-h-[74vh] overflow-y-auto rounded-lg border bg-white p-6 shadow-sm">
                    <!-- Form Input -->
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <!-- Judul Konten -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-medium text-gray-700">Judul Konten</label>
                            <input type="text" name="judul_konten" placeholder="Judul Konten" class="rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary" />
                        </div>

                        <!-- Platform -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-medium text-gray-700">Platform</label>
                            <select name="platform" class="rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                <option value="">Pilih Platform</option>
                                <option value="instagram">Instagram</option>
                                <option value="facebook">Facebook</option>
                                <option value="twitter">Twitter</option>
                                <option value="tiktok">TikTok</option>
                            </select>
                        </div>

                        <!-- Link  -->
                        <div class="col-span-1 flex flex-col gap-2 md:col-span-2">
                            <label class="text-sm font-medium text-gray-700">Link</label>
                            <input type="text" name="link" placeholder="instagram.com" class="rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary" />
                        </div>
                    </div>

                    <hr class="mt-7 border-t-2 border-t-gray-400" />

                    <!-- Submit Button -->
                    <div class="mt-3 flex gap-4 pt-5">
                        <button type="button" id="cancelButton" class="flex h-12 flex-1 items-center justify-center rounded-xl text-lg" style="width: 50%; border: 2px solid #3986a3; color: #3986a3">Batal</button>
                        <button type="submit" class="flex h-12 flex-1 items-center justify-center rounded-xl text-lg" style="width: 50%; background: #3986a3; color: #fff">Simpan</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal untuk memasukkan URL Google Drive -->
        <div id="gdrive-modal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50">
            <div class="flex min-h-screen items-center justify-center">
                <div class="w-96 rounded-lg bg-white p-6 shadow-lg">
                    <h2 class="mb-4 text-lg font-semibold text-gray-800">Masukkan URL Google Drive</h2>
                    <input id="gdrive-url" type="text" placeholder="Masukkan URL Google Drive" class="mb-4 w-full rounded-lg border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-primary" />
                    <div id="gdrive-error" class="mb-4 hidden text-sm text-red-500"></div>
                    <div class="flex justify-end gap-2">
                        <button id="gdrive-cancel" type="button" class="rounded-lg bg-gray-300 px-4 py-2 text-gray-700 hover:bg-gray-400 focus:outline-none">Batal</button>
                        <button id="gdrive-insert" type="button" class="hover:bg-primary-dark rounded-lg bg-primary px-4 py-2 text-white focus:outline-none">Tambahkan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
