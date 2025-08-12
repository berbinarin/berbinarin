@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
    ]
)

@section("content")
    <div class="mt-16 flex min-h-[calc(100vh-200px)] flex-col items-center justify-center gap-10 px-4 py-10 text-center md:mt-12">
        <!-- Judul -->
        <h1 class="font-plusJakartaSans text-[24px] font-bold text-[#333333] md:text-4xl">
            Tingkatkan Potensi dengan
            <br />
            Psikotes
            <span class="bg-gradient-to-r from-[#3986A3] to-[#15323D] bg-clip-text text-transparent">Berbinar</span>
        </h1>

        <!-- Gambar-gambar -->
        <div class="flex flex-wrap items-center justify-center gap-10 md:gap-[106px] md:mt-8">
            <!-- Item 1 -->
            <div class="flex flex-col items-center gap-1 md:gap-2">
                <img src="{{ asset("assets/images/psikotes/Individu.png") }}" alt="Individu" class="h-[110px] w-[110px] md:h-[150px] md:w-[150px]" />
                <p class="bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text font-plusJakartaSans text-base font-semibold text-transparent md:text-[28px] leading-normal">Individu</p>
            </div>

            <!-- Item 2 -->
            <div class="flex flex-col items-center gap-1 md:gap-2">
                <img src="{{ asset("assets/images/psikotes/Perusahaan.png") }}" alt="Perusahaan" class="h-[110px] w-[110px] md:h-[150px] md:w-[150px]" />
                <p class="bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text font-plusJakartaSans text-base font-semibold text-transparent md:text-[28px] leading-normal">Perusahaan</p>
            </div>

            <!-- Item 3 -->
            <div class="flex flex-col items-center gap-1 md:gap-2">
                <img src="{{ asset("assets/images/psikotes/Komunitas.png") }}" alt="Komunitas" class="h-[110px] w-[110px] md:h-[150px] md:w-[150px]" />
                <p class="bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text font-plusJakartaSans text-base font-semibold text-transparent md:text-[28px] leading-normal">Komunitas</p>
            </div>

            <!-- Item 4 -->
            <div class="flex flex-col items-center gap-1 md:gap-2">
                <img src="{{ asset("assets/images/psikotes/Pendidikan.png") }}" alt="Pendidikan" class="h-[110px] w-[110px] md:h-[150px] md:w-[150px]" />
                <p class="bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text font-plusJakartaSans text-base font-semibold text-transparent md:text-[28px] leading-normal">Pendidikan</p>
            </div>
        </div>

        <!-- Tombol Aksi -->
        <div class="mt-5 flex flex-col items-center gap-4 md:mt-10 md:flex-row md:gap-8">
  <button
    onclick="openModal()"
    class="w-[320px] md:w-auto rounded-xl bg-gradient-to-r from-[#3986A3] to-[#15323D] px-5 py-3 font-plusJakartaSans text-lg font-semibold text-white md:text-2xl"
  >
    Ikuti Tes Kepribadian Berbayar
  </button>
  <button
    class="w-[320px] md:w-auto rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#916823] px-5 py-3 font-plusJakartaSans text-lg font-semibold text-white md:text-2xl"
  >
    Ikuti Tes Kepribadian Grati
  </button>
</div>


        <!-- Pop-up -->
       <div id="popUp" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 px-4">
  <div class="relative w-full max-w-[374px] rounded-lg bg-white p-6 text-center">

    <!-- Tombol X custom -->
   <button
  onclick="closeModal()"
  class="absolute right-4 top-4"
  aria-label="Tutup pop-up"
>
  <div
    data-size="24"
    class="size-6 bg-white rounded-sm outline outline-1 outline-offset-[-1px] outline-zinc-400 overflow-hidden relative flex items-center justify-center"
  >
    <img
      src="{{ asset('assets/images/psikotes/Icon.png') }}"
      alt="Tutup"
      class="w-3 h-3"
    />
  </div>
</button>


    <!-- Isi pop-up -->
    <img src="{{ asset('assets/images/psikotes/singa-pensil.png') }}" alt=""
      class="h-[185px] w-[185px] mx-auto mb-4" />
    <h2 class="text-[21px] font-plusJakartaSans font-bold text-[#333333] mb-2">Akses Psikotes anda</h2>
    <h4 class="text-base font-plusJakartaSans font-medium text-[#333333]">
      Silakan masuk jika sudah memiliki akun, atau lakukan pendaftaran
    </h4>
    <div class="mt-6 flex justify-center gap-4">
      <button
        class="w-[145px] h-[45px] bg-white border-2 rounded-xl border-[#106681] text-[#106681] font-plusJakartaSans text-lg font-semibold flex items-center justify-center">
        Masuk
      </button>
      <button
        class="w-[145px] h-[45px] bg-gradient-to-r from-[#3986A3] to-[#15323D] border-2 rounded-xl text-white font-plusJakartaSans text-lg font-semibold flex items-center justify-center">
        Daftar
      </button>
    </div>
  </div>
</div>

    <script>
        function openModal() {
            document.getElementById('popUp').classList.remove('hidden');
            document.getElementById('popUp').classList.add('flex');
        }

        function closeModal() {
            document.getElementById('popUp').classList.remove('flex');
            document.getElementById('popUp').classList.add('hidden');
        }
    </script>
@endsection
