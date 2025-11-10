@extends(
    "dashboard.layouts.app",
    [
        "title" => "Tambah Data Berbinar Plus Class",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="mb-2 flex items-center gap-2">
                    <a href="{{ route("dashboard.berbinar-class.index") }}">
                        <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.png") }}" alt="Back Btn" />
                    </a>
                    <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Ubah Daftar Kelas</p>
                </div>
                <p class="w-full text-disabled">Formulir untuk menambahkan kelas baru ke dalam program Berbinar+ secara rinci, beserta detail nama kelas, jadwal pelaksanaan, fasilitator, dan kapasitas maksimal peserta.</p>
            </div>
            <div class="rounded-lg bg-white px-4 py-4 shadow-md md:px-8 md:py-7 xl:px-10 mb-7">
                <form action="{{ route('dashboard.berbinar-class.update', $class->id) }}" method="POST">
                    @csrf

                    @method('PUT')

                    <h1 class="mb-6 text-center text-3xl font-bold">Berbinar+ Kelas</h1>
                    <div class="flex flex-col gap-0.5">
                        <div>
                            <label class="text-lg">Nama Kelas</label>
                                <div class="relative w-full">
                                    <input type="text" id="title" name="title" placeholder=" " class="peer w-full rounded-lg border-gray-300 px-4 py-4 shadow-sm" value="{{ $class->title}}"/>

                                    <label id="label-nama" for="title" class="absolute left-4 top-4 text-gray-500 transition-all pointer-events-none">
                                    Nama Kelas Berbinar+
                                    </label>
                                </div>
                        </div>

                        <div>
                            <label class="text-lg">Deskripsi Kelas</label>
                                <div class="relative w-full">
                                    <textarea id="description" name="description" placeholder=" " rows="4" class="peer w-full rounded-lg border-gray-300 px-4 py-4 shadow-sm resize-none" >{{ $class->description }}</textarea>

                                    <label id="label-deskripsi" for="description" class="absolute left-4 top-4 text-gray-500 transition-all pointer-events-none">
                                    Deskripsi Kelas Berbinar+
                                    </label>
                                </div>
                        </div>

                        <div class="mt-8 flex gap-4 pt-5">
                            <button type="button" id="cancelButton" class="flex h-12 flex-1 items-center justify-center rounded-xl text-lg" style="width: 50%; border: 2px solid #3986a3; color: #3986a3">Batal</button>
                            <button type="submit" id="submitButton" class="flex h-12 flex-1 items-center justify-center rounded-xl text-lg" style="width: 50%; background: #3986a3; color: #fff">Simpan</button>
                        </div>

                            <!-- Modal Konfirmasi Batal -->
                        <div id="confirmModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black/40">
                            <div
                                class="relative w-[560px] rounded-[20px] bg-white p-6 text-center font-plusJakartaSans shadow-lg"
                                style="
                                    background:
                                        linear-gradient(to right, #74aabf, #3986a3) top/100% 6px no-repeat,
                                        white;
                                    border-radius: 20px;
                                    background-clip: padding-box, border-box;
                                "
                            >
                                <!-- Warning Icon -->
                                <img src="{{ asset("assets/images/dashboard/warning.png") }}" alt="Warning Icon" class="mx-auto h-[83px] w-[83px]" />

                                <!-- Title -->
                                <h2 class="mt-4 text-2xl font-bold text-stone-900">Konfirmasi Batal</h2>

                                <!-- Message -->
                                <p class="mt-2 text-base font-medium text-black">Apakah Anda yakin ingin membatalkan pengisian data?</p>

                                <!-- Actions -->
                                <div class="mt-6 flex justify-center gap-3">
                                    <button type="button" id="cancelSubmit" class="rounded-lg border border-stone-300 px-6 py-2 text-stone-700">Tidak</button>
                                    <a href="{{ route("dashboard.berbinar-class.index") }}" class="rounded-[5px] bg-gradient-to-r from-[#74AABF] to-[#3986A3] px-6 py-2 font-medium text-white">Ya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


@endsection

@section("script")
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cancelButton = document.getElementById('cancelButton');
            const confirmModal = document.getElementById('confirmModal');
            const cancelSubmit = document.getElementById('cancelSubmit');

            cancelButton.addEventListener('click', function(e) {
                e.preventDefault();
                confirmModal.classList.remove('hidden');
            });
            cancelSubmit.addEventListener('click', function() {
                confirmModal.classList.add('hidden');
            });
        });


        const input = document.getElementById('title');
        const labelNama = document.getElementById('label-nama');

        function toggleLabelNama() {
        if (input.value.trim() !== '') {
            labelNama.classList.add('hidden');
        } else {
            labelNama.classList.remove('hidden');
        }
        }

        input.addEventListener('input', toggleLabelNama);
        window.addEventListener('load', toggleLabelNama);


        const textarea = document.getElementById('description');
        const labelDeskripsi = document.getElementById('label-deskripsi');

        function toggleLabelDeskripsi() {
        if (textarea.value.trim() !== '') {
            labelDeskripsi.classList.add('hidden');
        } else {
            labelDeskripsi.classList.remove('hidden');
        }
        }

        textarea.addEventListener('input', toggleLabelDeskripsi);
        window.addEventListener('load', toggleLabelDeskripsi);
    </script>
@endsection
