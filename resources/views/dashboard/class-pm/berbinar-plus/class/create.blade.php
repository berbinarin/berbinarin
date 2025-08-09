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
                    <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Tambah Daftar Class</p>
                </div>
                <p class="w-full text-disabled">Formulir untuk menambahkan kelas baru ke dalam program Berbinar+ secara rinci, beserta detail nama kelas, jadwal pelaksanaan, fasilitator, dan kapasitas maksimal peserta.</p>
            </div>
            <div class="rounded-3xl bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
                <form action="{{ route('dashboard.berbinar-class.store') }}" method="POST">
                    @csrf

                    <h1 class="mb-6 text-center text-3xl font-bold">Berbinar+ <span class="italic">Class</span></h1>
                    <div class="flex flex-col">
                        <div>
                            <label class="text-lg">Nama <span class="italic">Class</span></label>
                                <div class="relative w-full">
                                    <input type="text" id="title" name="title" placeholder=" " class="peer w-full rounded-lg border-gray-300 px-4 py-4 shadow-sm" />

                                    <label id="label-nama" for="title" class="absolute left-4 top-4 text-gray-500 transition-all pointer-events-none">
                                    Nama <span class="italic">Class</span> Berbinar+
                                    </label>
                                </div>
                        </div>

                        <div>
                            <label class="text-lg">Deskripsi <span class="italic">Class</span></label>
                                <div class="relative w-full">
                                    <textarea id="description" name="description" placeholder=" " rows="4" class="peer w-full rounded-lg border-gray-300 px-4 py-4 shadow-sm resize-none"></textarea>

                                    <label id="label-deskripsi" for="description" class="absolute left-4 top-4 text-gray-500 transition-all pointer-events-none">
                                    Deskripsi <span class="italic">Class</span> Berbinar+
                                    </label>
                                </div>
                        </div>

                        <div class="mt-8 flex gap-4 pt-5">
                            <button type="submit" id="submitButton" class="flex h-12 flex-1 items-center justify-center rounded-xl text-lg" style="width: 50%; background: #3986a3; color: #fff">Simpan</button>
                            <button type="button" id="cancelButton" class="flex h-12 flex-1 items-center justify-center rounded-xl text-lg" style="width: 50%; border: 2px solid #3986a3; color: #3986a3">Batal</button>
                        </div>

                            <!-- Modal Konfirmasi -->
                            <div id="confirmModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-50">
                                <div class="w-full max-w-md rounded-lg bg-white p-6 text-center">
                                    <div class="mb-4 flex justify-center">
                                        <img src="{{ asset('assets/images/dashboard/svg-icon/warning.svg') }}" alt="Warning Icon" class="h-12 w-12" />
                                    </div>
                                    <p class="mb-6 text-lg">Apakah Anda yakin ingin membatalkan perubahan?</p>
                                    <div class="flex w-full justify-center gap-4">
                                        <a href="{{ route("dashboard.berbinar-class.index") }}" id="confirmCancel" class="rounded-lg bg-[#3986A3] w-1/2 px-6 py-2 text-white text-center focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2">OK</a>
                                        <button type="button" id="cancelSubmit" class="rounded-lg border border-[#3986A3] w-1/2 px-6 py-2 text-[#3986A3] focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2">Cancel</button>
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
