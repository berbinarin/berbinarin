@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Soal RMIB',
    'active' => 'one psikotest',
])

@section('content')
<div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">
    <!-- Mulai form/div -->
    <div>
        {{--
        method="POST"
        action="{{ route('psikotest-paid.papi-kostick.submit', ['id' => $id, 'question_order' => $question_order]) }}"
        @csrf
        --}}

        <input type="hidden" name="timeout" id="timeout" value="false">

        <!-- Background Image -->
        <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar"
            class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

        <!-- Container for Icons above Card -->
        <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
            <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
                <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon"
                    class="w-8 h-8 rounded-full">
                <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon"
                    class="w-8 h-8 rounded-full ml-2">
            </div>
        </div>

        <!-- Ini akan muncul -->
        {{-- <h1 class="text-2xl font-bold mt-4 text-center">
            Test 24
        </h1> --}}

        <!-- Main Content Area -->
        <div class="relative z-10 w-3xl mx-auto  p-6" style="width: 1100px;">
            <div class="bg-white bg-opacity-50 shadow-lg rounded-lg px-6 py-10">
                <h1 class="text-red-500 text-center font-bold text-lg">INSTRUKSI A</h1>
                <p class="mt-5">Tim mengadakan persiapan perjalanan. Rapat-rapat perlu diadakan. Dana dari sponsor,
                    kendaraan, peralatan dan sebagainya perlu diurus.</p>

                <p class="mt-3">Bacalah terlebih dahulu semua tugas yang ada, lalu urutkan tugas yang paling Anda
                    senangi
                    dengan menuliskan urutannya (contoh untuk tugas yang paling Anda senangi, tulislah “1”). Pastikan
                    tidak
                    ada pekerjaan yang mendapat urutan yang sama.</p>

                @php
                    // Dummy data pernyataan tugas
                    $tasks = [
                        'Menyetir mobil antar-jemput dari satu tempat ke tempat lain bagi para anggota yang sibuk dengan urusan, dari satu tempat ke tempat lain.',
                        'Menyiapkan peralatan perjalanan dan perlengkapan rapat.',
                        'Mengatur jadwal rapat dan koordinasi tim.',
                        'Mencari sponsor dan dana tambahan untuk perjalanan.',
                        'Memastikan kendaraan dalam kondisi prima.'
                    ];
                @endphp

                <div class="grid grid-cols-2 gap-2 mt-4" style="max-height: 200px; overflow:auto; padding:8px; grid-template-columns: 5% 90%;">
                    <!-- Kolom kiri: Nomor statis -->
                    <div class="flex flex-col gap-3">
                        @for ($i = 1; $i <= count($tasks); $i++)
                            <div class="h-10 flex items-center justify-center border bg-gray-200 rounded-md text-blue-400">
                                {{ $i }}
                            </div>
                        @endfor
                    </div>
                    <!-- Kolom kanan: Daftar tugas yang bisa di-drag -->
                    <div id="sortable-list" class="flex flex-col gap-3">
                        @foreach ($tasks as $task)
                            <div class="h-10 flex items-center px-2 drag-item cursor-move bg-white rounded-md">
                                {{ $task }}
                            </div>
                        @endforeach
                    </div>
                </div>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var el = document.getElementById('sortable-list');
                        Sortable.create(el, {
                            animation: 150,     
                            handle: '.drag-item' // Hanya elemen dengan class ini yang dapat dijadikan pegangan drag
                        });
                    });
                </script>

            </div>
            <div class="flex bg-white rounded-md items-center justify-between mt-10"
                style="height: 40px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="flex items-center ml-6" style="height: 3px; width: 860px; position: relative;">
                    <!-- Black background line -->
                    <div class="bg-black rounded-full" style="height: 3px; width: 100%;"></div>
                    <!-- Blue percentage line -->
                    <div class="bg-blue-500 rounded-full" style="height: 3px; position: absolute; top: 0; left: 0;">
                    </div>
                    <!-- Small circle at the end of the blue line -->
                    <div class="bg-blue-500 rounded-full"
                        style="height: 10px; width: 10px; position: absolute; top: -4px; transform: translateX(-50%);">
                    </div>
                    <!-- Percentage text -->
                    <span class="text-sm text-black"
                        style="position: absolute; top: 1px; transform: translateX(-50%); font-size: 8px;">1%</span>
                </div>
                <a href="{{ route('psikotest-paid.tool.RMIB.summary') }}">
                    <button {{-- type="submit" --}} type="button"
                        class="px-4 py-1 bg-blue-500 text-sm mr-2 text-white rounded-lg hover:bg-blue-600">Soal
                        Berikutnya</button>
                </a>
            </div>

            <!-- Konten utama di sini -->
        </div>
        <!-- Percentage Line and Next Button -->

    </div>
</div>
@endsection