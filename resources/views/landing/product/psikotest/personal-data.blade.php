@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
    ]
)

@section("content")
    <style>
        .text-gradient {
            background: linear-gradient(to right, #f7b23b, #916823);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        select {
            background-image: none !important;
        }
    </style>

    <div class="mx-4 mb-8 mt-24 flex flex-col justify-center rounded-2xl bg-none px-12 py-6 shadow-none max-md:px-1 sm:mx-16 sm:mb-20 sm:mt-36 md:bg-white md:shadow-lg">
        <form action="{{ route("product.psikotest.personal_data.store") }}" method="POST">
            @csrf
            <div class="flex flex-row justify-between">
                <a href="{{ route("product.psikotest.schedule") }}">
                    <div class="flex cursor-pointer items-center space-x-2">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.svg") }}" alt="Left Arrow" class="h-3 w-auto" />
                        <p class="flex text-[15px] font-semibold text-[#3986A3]">
                            Kembali
                            <span class="ml-0.5 hidden sm:block">pilih jadwal</span>
                        </p>
                    </div>
                </a>

                <div class="flex cursor-pointer items-center space-x-1" id="openModal">
                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/sk-vector.png") }}" alt="Syarat & Ketentuan" class="h-3 w-auto" />
                    <p class="text-[15px] font-semibold text-[#3986A3]">
                        <span class="hidden sm:block">Syarat & Ketentuan</span>
                        <span class="block sm:hidden">S&K</span>
                    </p>
                </div>

                <div id="modal" class="fixed inset-0 -top-6 z-30 hidden items-center justify-center bg-gray-900 bg-opacity-50 backdrop-blur-md max-sm:-top-2">
                    <div class="h-auto max-h-screen w-[70%] overflow-y-auto rounded-2xl bg-white p-6 shadow-md max-lg:h-[90%] max-sm:w-[86%] max-sm:px-2">
                        <h1 class="bg-gradient-to-r from-amber-400 to-yellow-700 bg-clip-text pb-4 text-center text-3xl font-bold text-transparent max-sm:text-2xl">Syarat dan Ketentuan</h1>
                        <div class="mb-6">
                            <div class="flex items-start gap-2">
                                <img src="{{ asset("assets/images/landing/asset-konseling/vector/location.png") }}" alt="Lokasi" class="mt-0.5 h-5 w-5" />
                                <span class="font-semibold">Lokasi offline Konseling</span>
                            </div>
                            <ol class="list-decimal mt-1 space-y-1 pl-7">
                            <li class="max-sm:text-sm">a. Psikolog : Subaraya, Kediri, Sidoarjo, dan Jakarta</li>
                            <li class="max-sm:text-sm">b. Peer Counselor : Surabaya, Jombang, dan Nganjuk</li>
                        </ol>
                        </div>
                    </div>

                        <div class="mb-6">
                            <div class="flex items-start gap-2">
                                <img src="{{ asset("assets/images/landing/asset-konseling/vector/payment.png") }}" alt="Pembayaran" class="mt-0.5 h-5 w-5" />
                                <span class="font-semibold">Pembayaran</span>
                            </div>
                            <ol class="mt-1 list-decimal space-y-1 pl-7">
                                <li class="max-sm:text-sm">Melakukan pembayaran ke Bank Mandiri dengan no rekening 1400020763711 a.n. Berbinar Insightful Indonesia dengan aturan transfer 1×24 jam.</li>
                            </ol>
                        </div>

                        <div class="mb-6">
                            <div class="flex items-start gap-2">
                                <img src="{{ asset("assets/images/landing/asset-konseling/vector/chat.png") }}" alt="Pembalasan Pesan" class="mt-0.5 h-5 w-5" />
                                <span class="font-semibold">Pembalasan Pesan</span>
                            </div>
                            <ol class="mt-1 list-decimal space-y-1 pl-7">
                                <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 1×24 jam, pendaftaran oleh klien secara otomatis dibatalkan.</li>
                                <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 1×24 jam, jadwal yang sudah ditentukan oleh klien berhak untuk diubah oleh Tim Berbinar dan kesepakatan dari klien.</li>
                                <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 2×24 jam setelah melakukan pembayaran, pembayaran dianggap hangus.</li>
                            </ol>
                        </div>

                        <div class="mb-6">
                            <div class="flex items-start gap-2">
                                <img src="{{ asset("assets/images/landing/asset-konseling/vector/cancel.png") }}" alt="Pengajuan Pembatalan" class="mt-0.5 h-5 w-5" />
                                <span class="font-semibold">Pengajuan Pembatalan</span>
                            </div>
                            <ol class="mt-1 list-decimal space-y-1 pl-7">
                                <li class="max-sm:text-sm">Pengajuan proses pembatalan layanan konseling dapat dilakukan dalam kurun waktu 1×24 jam setelah proses administrasi dan dana yang telah dibayarkan akan dikembalikan 100%.</li>
                            </ol>
                        </div>

                        <div class="mt-4 flex justify-center lg:gap-x-3">
                            <button id="closeModal" class="rounded-md border-[1.5px] border-[#225062] bg-transparent px-4 py-1.5 font-medium text-black max-sm:text-[15px]">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="font text-gradient my-6 text-center text-3xl font-semibold max-sm:mx-2 max-sm:text-[29px]">Data Diri</h1>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Nama Lengkap</p>
                    <div class="relative">
                        <input type="text" id="fullname" name="fullname" class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Budi Berbinar" />
                    </div>
                </div>

                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Email Aktif</p>
                    <div class="relative">
                        <input type="email" id="email" name="email" class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="email.anda@gmail.com" />
                    </div>
                </div>

                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Usia</p>
                    <div class="relative">
                        <input type="number" id="age" name="age" class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="20" />
                    </div>
                </div>

                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Kota Domisili</p>
                    <div class="relative">
                        <input type="text" id="domicile" name="domicile" class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Surabaya" />
                    </div>
                </div>

                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Jenis Kelamin</p>
                    <div class="relative">
                        <select id="gender" name="gender" class="dropdown-select w-full cursor-pointer appearance-none rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/dropdown.png") }}" class="dropdown-icon pointer-events-none absolute right-5 top-1/2 h-2 w-auto -translate-y-1/2 object-contain transition-transform duration-300" />
                    </div>
                </div>

                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Nomor WhatsApp</p>
                    <div class="relative">
                        <input type="number" id="phone_number" name="phone_number" class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="08112345XXXX" />
                    </div>
                </div>
            </div>

            <h1 class="font text-gradient my-10 text-center text-3xl font-semibold max-sm:mx-2 max-sm:text-[29px]">Alasan Mengikuti Psikotes</h1>

            <div class="relative">
                <textarea id="reason" name="reason" class="h-72 w-full cursor-pointer resize-none rounded-lg border-none bg-[#F1F3F6] px-3 pt-3 text-start shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Tidak ada minimum/batas jumlah kata"></textarea>
            </div>

            <div class="flex items-center justify-center pt-10">
                <div class="flex w-full justify-center">
                    <button type="submit" class="text-md w-full rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-24 py-2 text-white max-sm:text-[15px] sm:w-auto">Kirim</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.querySelectorAll('.dropdown-select').forEach((select, index) => {
            const icon = document.querySelectorAll('.dropdown-icon')[index];

            select.addEventListener('click', function () {
                icon.classList.toggle('rotate-180');
            });

            select.addEventListener('blur', function () {
                icon.classList.remove('rotate-180');
            });
        });

        document.getElementById('openModal').addEventListener('click', function () {
            const modal = document.getElementById('modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });

        document.getElementById('closeModal').addEventListener('click', function () {
            const modal = document.getElementById('modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
    </script>
@endsection
