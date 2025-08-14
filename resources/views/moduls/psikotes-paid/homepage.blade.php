<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Psikotest</title>

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet" />

        <!-- Alpine.js -->
        <script src="//unpkg.com/alpinejs" defer></script>
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
    </head>
    <body x-data="{ open: false, testNumber: null }" class="h-screen overflow-hidden bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset("assets/images/psikotes/paid/psikotest-home-bg.png") }}')">
        <!-- Navbar Start -->
        <section>
            <div class="mt-4 flex w-full flex-row items-center justify-between">
                <a href="{{ url("/psikotest-paid/testimoni") }}">
                    <button class="ml-16 rounded-[5px] bg-blue-500 px-[10px] py-3 text-xs font-medium text-white" style="font-family: 'Plus Jakarta Sans', sans-serif">Testimoni</button>
                </a>

                <div class="flex items-center justify-center gap-4 rounded-full bg-white px-8 py-2 drop-shadow-lg">
                    <img src="{{ asset("assets/images/psikotes/paid/logo-berbinar.png") }}" alt="logo" class="h-10 w-10" />
                    <img src="{{ asset("assets/images/psikotes/paid/logo-berbinar-psikotest.png") }}" alt="logo" class="h-10 w-10" />
                </div>
                <button class="mr-16 rounded-[5px] bg-blue-500 px-[10px] py-3 text-xs font-medium text-white" style="font-family: 'Plus Jakarta Sans', sans-serif">Logout</button>
            </div>
        </section>
        <!-- Navbar End -->

        <!-- Tagline Start -->
        <div class="my-7 flex w-full items-center justify-center">
            <h1 class="text-2xl font-bold" style="font-family: 'Plus Jakarta Sans', sans-serif">Temukan Potensimu - Selamat Datang di Situs Psikotes Kami!</h1>
        </div>
        <!-- Tagline End -->

        <!-- Box Test Swiper Start -->
        <div class="swiper mySwiper h-[475px]">
            <div class="swiper-wrapper mx-4">
                @for ($i = 1; $i <= 21; $i += 4)
                    <div class="swiper-slide !h-auto py-1">
                        <div class="mx-auto grid h-full max-w-[1200px] grid-cols-4 justify-items-center gap-x-3 gap-y-3">
                            @for ($j = $i; $j < $i + 4 && $j <= 21; $j++)
                                <button type="button" @click="open = true; testNumber = '{{ $j }}'">
                                    <div class="flex h-[180px] w-[270px] items-center justify-center rounded-[5px] bg-[#3986A3] transition hover:scale-105">
                                        <p class="text-xl font-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif">Test {{ str_pad($j, 2, "0", STR_PAD_LEFT) }}</p>
                                    </div>
                                </button>
                            @endfor
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <!-- Box Test Swiper End -->

        <!-- Modal Redeem Code Start -->
        <div x-show="open" x-cloak @click.outside="open = false" @keydown.escape.window="open = false" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="h-[298px] w-[560px] rounded-lg bg-white p-6 shadow-lg">
                <h2 class="mb-5 text-center text-2xl font-bold" style="font-family: 'Plus Jakarta Sans', sans-serif">Redeem Code</h2>
                <h2 class="mb-6 text-center text-[15px] text-[#D1D1D1]" style="font-family: 'Plus Jakarta Sans', sans-serif">Enter the redeem code provided to start the test</h2>
                <form method="POST" action="{{ url("/psikotest/redeem") }}">
                    @csrf
                    <input type="hidden" name="test_number" :value="testNumber" />
                    <div class="flex justify-center">
                        <input type="text" name="redeem_code" placeholder="Enter code" class="h-[47px] w-[458px] rounded-[10px] bg-[#E1E1E1] px-3 text-[15px] font-bold outline-none placeholder:text-white" style="font-family: 'Plus Jakarta Sans', sans-serif" required />
                    </div>
                    <div class="mt-4 flex justify-center gap-2">
                        <button type="submit" class="rounded-xl bg-[#3986A3] px-28 py-3 text-[15px] font-extrabold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif">Redeem</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modal Redeem Code End -->

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.mySwiper', {
                direction: 'vertical',
                slidesPerView: 'auto',
                mousewheel: true,
                freeMode: true,
            });
        </script>

        <script>
            const urlParams = new URLSearchParams(window.location.search);
            const testimoniStatus = urlParams.get('testimoni');
            const checkIcon = '{{ asset("assets/images/psikotes/paid/check.png") }}';

            if (testimoniStatus === 'selesai') {
                Swal.fire({
                    html: `
        <div class="text-center">
            <img src="${checkIcon}" alt="sukses" class="mx-auto mb-[18px] h-[71px] w-[71px]" />
            <h2 class="text-2xl font-bold text-black" style="font-family: 'Plus Jakarta Sans', sans-serif">
                Kamu telah mengisi testimoni
            </h2>
            <p class="text-lg font-medium text-[#A9A9A9]" style="font-family: 'Plus Jakarta Sans', sans-serif">
                Silakan lanjutkan mengerjakan psikotes!
            </p>
        </div>
    `,
                    showConfirmButton: true,
                    confirmButtonText: 'Lanjutkan',
                    customClass: {
                        popup: 'rounded-xl px-6 pt-6 pb-6',
                        confirmButton: 'mt-6 rounded-md bg-[#6083F2] px-[112px] py-[10px] text-[15px] font-extrabold text-white transition hover:bg-blue-600',
                    },
                    confirmButtonColor: undefined,
                    backdrop: 'rgba(0,0,0,0.5)',
                }).then(() => {
                    const url = new URL(window.location.href);
                    url.searchParams.delete('testimoni');
                    window.history.replaceState({}, document.title, url.toString());
                });
            }
        </script>
    </body>
</html>
