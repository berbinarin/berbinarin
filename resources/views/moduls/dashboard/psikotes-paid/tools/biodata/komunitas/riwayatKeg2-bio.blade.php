@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Tes Biodata',
    'active' => 'one psikotest',
])

@section('content')
    <div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">

        <!-- bg-internship -->
        <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar"
            class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

        <!-- Container untuk ikon di atas card -->
        <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
            <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
                <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon"
                    class="w-8 h-8 rounded-full">
                <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon"
                    class="w-8 h-8 rounded-full ml-2">
            </div>
        </div>

        <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 24</p>

        <!-- Card Transparant -->
        <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-10"
            style="width: 950px;">
            <form action="{{ route('psikotest-paid.tool.BIODATA_KOMUNITAS.post') }}" method="post">
                @csrf
                <p class="font-bold text-xl text-left text-gray-800 mb-4">D. Riwayat Pekerjaan dalam 10 Tahun Terakhir</p>
                <div id="diploma-container" class="max-h-60 overflow-y-auto">
                    <div class="diploma-entry grid grid-cols-6 gap-x-6 gap-y-4 mb-4">
                        <div class="col-span-3">
                            <label for="diploma_name" class="block text-lg font-semibold leading-6 text-black">Nama
                                Perusahaan</label>
                            <div class="mt-2">
                                <input type="text" name="company_name[]"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                    placeholder="PT. Berbinar">
                            </div>
                        </div>
                        <div class="col-span-3">
                            <label for="smp_start_year" class="block text-lg font-semibold leading-6 text-black">Posisi
                                Terakhir</label>
                            <div class="mt-2">
                                <input type="text" name="last_position[]" id="smp_start_year"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                    placeholder="Digital Marketing">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="page" value="7">
                <button type="button" onclick="addDiploma()"
                    class="flex items-center justify-center w-full border-2 border-dotted border-blue-500 text-blue-500 py-2 rounded-lg mb-4">
                    <span class="text-lg">+ Tambahkan Riwayat Pendidikan</span>
                </button>

                <!-- Tombol Navigasi -->
                <div class="flex justify-center gap-5 mt-10">
                    <a href="{{ route('psikotest-paid.tool.BIODATA_KOMUNITAS.showPage', ['page' => 7]) }}">
                        <button type="button"
                            class="w-xl bg-white text-blue-500 py-2 px-10 rounded-full shadow-lg hover:bg-gray-200 focus:outline-none focus:bg-gray-200">Lewati</button>
                    </a>
                    <button type="submit"
                        class="w-xl bg-primary text-white py-2 px-10 rounded-full shadow-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function addDiploma() {
            const container = document.getElementById('diploma-container');
            const entry = document.createElement('div');
            entry.classList.add('diploma-entry', 'grid', 'grid-cols-6', 'gap-x-6', 'gap-y-4', 'mb-4');
            entry.innerHTML = `
      <div class="col-span-3">
        <label for="diploma_name" class="block text-lg font-semibold leading-6 text-black">Nama Perusahaan</label>
        <div class="mt-2">
          <input type="text" name="company_name[]" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6" placeholder="PT. Berbinar">
        </div>
      </div>
      <div class="col-span-3 flex space-x-2">
        <div class="w-1/2">
          <label for="smp_start_year" class="block text-lg font-semibold leading-6 text-black">Posisi Terakhir</label>
            <div class="mt-2">
              <input type="text" name="last_position[]" id="smp_start_year" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6" placeholder="Digital Marketing">
            </div>
        </div>
        <div class="w-1/2">
            <label for="bachelor"
                class="block text-lg font-semibold leading-6 text-black invisible" style="visibility: hidden;">Tahun</label>
            <button type="button" onclick="removeEntry(this)" class="block w-full h-10 mt-2 py-1.5 border border-0 border-gray-300 rounded-md focus:outline-none"> 
                <i class='bx bxs-trash text-xl'></i> 
            </button>
        </div>
      </div>
    `;
            container.appendChild(entry);
        }

        function removeEntry(button) {
            const entry = button.closest('.grid');
            entry.remove();
        }
    </script>
@endsection
