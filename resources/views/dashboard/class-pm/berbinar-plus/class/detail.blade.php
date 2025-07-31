@extends(
    "dashboard.layouts.app",
    [
        "title" => "Detail Berbinar Plus Class",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="mb-2 flex items-center gap-2">
                    <a href="{{ route("dashboard.berbinar-plus.index") }}">
                        <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.png") }}" alt="Back Btn" />
                    </a>
                    <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Detail Daftar Class</p>
                </div>
                <p class="w-full text-disabled">Halaman ini menampilkan informasi detail mengenai data Class yang terdapat pada BERBINAR+. Admin dapat melihat Informasi lengkap seputar nama dan deskripsi Class.</p>
            </div>
            <div class="rounded-3xl bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">

                <div class="mb-6">
                    <h1 class="mb-6 text-2xl text-primary-alt font-bold">Nama <span class="italic">Class</span></h1>
                    <p class="font-semibold text-lg">{{ $class->title }}</p>
                </div>

                <div class="mb-20">
                    <h1 class="mb-6 text-2xl text-primary-alt font-bold">Deskripsi</h1>
                    <p class="font-semibold text-lg mb-6">{{ $class->description }}</p>
                    {{-- Tambahkan field lain jika perlu --}}
                </div>

            </div>
        </div>
    </section>


@endsection

@section("script")
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const submitButton = document.getElementById('submitButton');
            const confirmModal = document.getElementById('confirmModal');
            const confirmSubmit = document.getElementById('confirmSubmit');
            const cancelSubmit = document.getElementById('cancelSubmit');
            const form = document.querySelector('form');

            submitButton.addEventListener('click', function(e) {
                e.preventDefault();
                confirmModal.classList.remove('hidden');
            });
            cancelSubmit.addEventListener('click', function() {
                confirmModal.classList.add('hidden');
            });

            confirmSubmit.addEventListener('click', function() {
                form.submit();
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
