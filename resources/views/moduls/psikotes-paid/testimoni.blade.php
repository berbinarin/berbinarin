<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Testimoni Psikotest</title>
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Link Lain -->
        <link
            href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"
            rel="stylesheet"
        />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body
        class="h-screen overflow-hidden bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset("assets/images/psikotes/paid/psikotest-soal-bg.png") }}')"
    >
        <!-- Navbar Start -->
        <section>
            <div class="mt-4 flex w-full flex-row items-center justify-center">
                <div class="flex items-center justify-center gap-4 rounded-full bg-white px-8 py-2 drop-shadow-lg">
                    <img
                        src="{{ asset("assets/images/psikotes/paid/logo-berbinar.png") }}"
                        alt="logo"
                        class="h-10 w-10"
                    />
                    <img
                        src="{{ asset("assets/images/psikotes/paid/logo-berbinar-psikotest.png") }}"
                        alt="logo"
                        class="h-10 w-10"
                    />
                </div>
            </div>
        </section>
        <!-- Navbar End -->

        <!-- Tagline Start -->
        <div class="my-7 flex w-full items-center justify-center">
            <h1 class="text-[28px] font-bold" style="font-family: 'Plus Jakarta Sans', sans-serif">
                Testimoni Psikotes
            </h1>
        </div>
        <!-- Tagline End -->

        <!-- Soal Start -->
        <div class="my-7 flex w-full items-center justify-center">
            <h1
                id="soal-text"
                class="w-[395px] text-center text-base font-bold"
                style="font-family: 'Plus Jakarta Sans', sans-serif"
            >
                <!-- isi awal dari JS -->
            </h1>
        </div>
        <!-- Soal End -->

        <!-- Container seluruh halaman -->
        <div class="flex items-center justify-center bg-none">
            <!-- Form Testimoni Start -->
            <div class="flex h-[405px] w-[486px] items-start justify-center rounded-xl bg-white pt-10 shadow-md">
                <form class="flex h-full w-full flex-col justify-between px-6 pb-6">
                    <textarea
                        id="testimoni"
                        name="testimoni"
                        rows="6"
                        class="h-[278px] w-full resize-none border-none bg-none px-3 py-2 text-base text-black outline-none placeholder:font-medium placeholder:text-[#D1D1D1]"
                        placeholder="Tulis disini..."
                    ></textarea>

                    <!-- Pilihan Setuju atau Tidak START -->
                    <div
                        id="radio-group"
                        class="ml-[31px] hidden w-full flex-col items-start space-y-4 text-base text-black"
                    >
                        <label class="flex cursor-pointer items-center gap-3">
                            <input
                                type="radio"
                                name="setuju"
                                value="Ya"
                                class="h-4 w-4 appearance-none rounded-full border-2 border-black transition duration-200 checked:scale-110 checked:border-blue-600 checked:bg-[#6083F2]"
                            />
                            <span
                                class="text-base font-medium text-black"
                                style="font-family: 'Plus Jakarta Sans', sans-serif"
                            >
                                Setuju
                            </span>
                        </label>

                        <label class="flex cursor-pointer items-center gap-3">
                            <input
                                type="radio"
                                name="setuju"
                                value="Tidak"
                                class="h-5 w-5 appearance-none rounded-full border-2 border-black transition duration-200 checked:scale-110 checked:border-blue-800 checked:bg-[#6083F2]"
                            />
                            <span
                                class="text-[15px] font-medium text-black"
                                style="font-family: 'Plus Jakarta Sans', sans-serif"
                            >
                                Tidak Setuju
                            </span>
                        </label>
                    </div>

                    <!-- Pilihan Setuju atau Tidak END -->

                    <button
                        type="submit"
                        class="mx-auto mt-4 w-fit rounded-[20px] bg-[#6083F2] px-5 py-[10px] text-base font-bold text-white transition hover:bg-blue-600"
                    >
                        Selanjutnya
                    </button>
                </form>
            </div>
            <!-- Form Testimoni End -->

            <!-- Ucapan Terima Kasih Start -->
            <div id="thanks-section" class="hidden flex-col items-center justify-center px-6 text-center">
                <img
                    src="{{ asset("assets/images/psikotes/paid/congrats.png") }}"
                    alt=""
                    class="h-[307px] w-[638px]"
                />
                <h1 class="mb-6 text-3xl font-bold text-black">
                    Terima kasih SobatBinar atas testimoni yang diberikan!
                    <br />
                    Masukanmu sangat berarti bagi kami untuk terus berkembang.
                </h1>
                <a
                    href="/psikotest-paid?testimoni=selesai"
                    class="mx-auto w-fit rounded-[20px] bg-[#6083F2] px-5 py-[10px] text-base font-bold text-white transition hover:bg-blue-600"
                >
                    Kembali ke Beranda
                </a>
            </div>
            <!-- Ucapan Terima Kasih End -->
        </div>

        <script>
            const soal = [
                'Ceritakan pengalaman SobatBinar dalam mengikuti kegiatan psikotes di Berbinar!',
                'Bagaimana pendapat SobatBinar mengenai kegiatan psikotes yang telah terlaksana?',
                'Apakah SobatBinar memiliki masukan atau saran mengenai pelaksanaan psikotes di Berbinar?',
                'Apa SobatBinar setuju jika Berbinar membagikan testimoni SobatBinar melalui media sosial kami?',
            ];

            let index = 0;

            const soalText = document.getElementById('soal-text');
            const form = document.querySelector('form');
            const textarea = document.getElementById('testimoni');
            const button = form.querySelector('button');

            // Tampilkan soal pertama
            soalText.innerText = soal[index];

            form.addEventListener('submit', function (e) {
                e.preventDefault();

                // Reset input
                textarea.value = '';
                const radios = form.querySelectorAll('input[name="setuju"]');
                radios.forEach((r) => (r.checked = false));

                index++;

                if (index < soal.length) {
                    soalText.innerText = soal[index];

                    // Tampilkan elemen sesuai jenis soal
                    if (index === 3) {
                        textarea.classList.add('hidden');
                        document.getElementById('radio-group').classList.remove('hidden');

                        button.innerText = 'Selesai';
                    } else {
                        textarea.classList.remove('hidden');
                        document.getElementById('radio-group').classList.add('hidden');
                        button.innerText = 'Selanjutnya';
                    }
                } else {
                    // Sembunyikan semua isi utama
                    soalText.parentElement.classList.add('hidden'); // soal
                    form.parentElement.classList.add('hidden'); // kotak form (div putih)

                    // Tampilkan ucapan terima kasih
                    const thanksSection = document.getElementById('thanks-section');
                    thanksSection.classList.remove('hidden');
                    thanksSection.classList.add('flex');
                }
            });
        </script>
        <script>
            const urlParams = new URLSearchParams(window.location.search);
            const sudahIsi = urlParams.get('testimoni');

            if (sudahIsi === 'selesai') {
                Swal.fire({
                    icon: 'success',
                    title: 'Kamu telah mengisi testimoni',
                    text: 'Silakan lanjutkan mengerjakan psikotes!',
                    confirmButtonText: 'Lanjutkan',
                    confirmButtonColor: '#3B82F6', // Biru Tailwind
                    customClass: {
                        title: 'text-lg font-semibold',
                        confirmButton: 'text-white font-semibold rounded-[10px] px-6 py-2',
                    },
                }).then(() => {
                    // Optional: bersihkan query param agar swal nggak muncul lagi pas reload
                    const url = new URL(window.location);
                    url.searchParams.delete('testimoni');
                    window.history.replaceState({}, document.title, url.toString());
                });
            }
        </script>
    </body>
</html>
