@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Instruksi HTP',
    'active' => 'one psikotest',
])

@section('content')
    <div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">

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

        <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 04</p>

        <!-- Card Transparant -->
        <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-4 "
            style="width: 750px;">
            <div class="flex">
                <p class="text-black px-5">
                    D.
                </p>
                <p class="text-black ">
                    Jika sudah, silakan foto kedua sisi kertas tersebut, baik bagian identitas maupun gambar Anda dan jika
                    sudah di foto, silahkan mengunggah foto tersebut.
                </p>
            </div>

            <!-- Upload Section -->
            <form id="autoSubmitForm" action="{{ route('psikotest-paid.tool.HTP.submitAnswer') }}" method="post" enctype="multipart/form-data">
                <div class="mt-6">
                    @csrf
                    <input type="hidden" name="timeout" id="timeout" value="">
                    <input type="hidden" name="test_id" value="{{ $test->id }}">
                    <input type="hidden" name="question_id"
                        value="{{ $questions[session('current_question_number', 1) - 1]->id }}">
                    <!-- Label sebagai area klik -->
                    <label for="file-upload"
                        class="flex flex-col items-center justify-center w-full h-48 rounded-xl 
                                border-2 border-dashed border-blue-500 bg-blue-50
                                cursor-pointer hover:bg-blue-100 transition-colors duration-200">
                        <svg class="w-12 h-12 text-blue-400 mb-2" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 16.5v-1.75a2.75 2.75 0 012.75-2.75h3.75A2.75 2.75 0 0112 12.75v1.75h-4.5a1.25 1.25 0 000 2.5h4.5v1.75a2.75 2.75 0 01-2.75 2.75H5.75A2.75 2.75 0 013 19.25v-1.75zm18 1.75v-1.75a2.75 2.75 0 00-2.75-2.75h-3.75A2.75 2.75 0 0012 16.5v1.75h4.5a1.25 1.25 0 010 2.5H12v1.75a2.75 2.75 0 002.75 2.75h3.75A2.75 2.75 0 0021 22.25v-1.75z" />
                        </svg>

                        <span id="uploadText" class="font-semibold text-blue-600 underline">
                            Click to Upload or Drag & Drop
                        </span>
                        <span class="text-xs text-gray-400">Max. File Size: 15MB</span>

                        <input id="file-upload" name="answer_image" type="file" class="hidden"
                            onchange="showFilename()" />
                    </label>
                </div>

                <div class="mb-2 flex justify-center gap-6 mt-8">
                    <button type="submit"
                        class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Selanjutnya
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function showFilename() {
            const input = document.getElementById('file-upload');
            const uploadText = document.getElementById('uploadText');

            if (input.files && input.files.length > 0) {
                uploadText.textContent = input.files[0].name;
            } else {
                uploadText.textContent = "Click to Upload or Drag & Drop";
            }
        }
        const totalDuration = 7 * 60 * 1000; 
  
        let startTime = localStorage.getItem('startTime');
        if(!startTime) {
            startTime = new Date().getTime();
            localStorage.setItem('startTime', startTime);
        }

        const timerInterval = setInterval(() => {
            const now = new Date().getTime();
            const elapsed = now - startTime;
            const remaining = totalDuration - elapsed;

            if (remaining <= 0) {
            clearInterval(timerInterval);
            localStorage.removeItem('startTime');

            document.getElementById('timeout').value = "true";

            document.getElementById('autoSubmitForm').submit();
            } else {
                document.getElementById('timeout').value = "false";
            }

            const minutes = Math.floor((remaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((remaining % (1000 * 60)) / 1000);
            console.log(`Waktu sisa: ${minutes}m ${seconds}s`);

        }, 1000);
    </script>
@endsection
@include('sweetalert::alert')
