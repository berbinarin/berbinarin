@extends('moduls.psikotes.layouts.mainn', [
'title' => 'Soal Tes BAUM',
'active' => 'one psikotest',
])

@section('content')
<div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">

  <!-- bg-internship -->
  <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar" class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

  <!-- Container untuk ikon di atas card -->
  <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
    <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon" class="w-8 h-8 rounded-full">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon" class="w-8 h-8 rounded-full ml-2">
    </div>
  </div>

  <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 02</p>

  <!-- Timer -->
  {{-- <div class="mt-4 mb-2 text-center z-20">
    <span id="timer" class="text-xl font-semibold text-red-600"></span>
  </div> --}}

  <!-- Card Transparant -->
  <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-4 " style="width: 750px;">
    {{-- <p class="text-black mt-4 px-5 text-center mb-4">
        Soal {{ session('current_question_number', 1) }} dari 1
    </p> --}}
    <form action="{{ route('psikotest-paid.tool.BAUM.submit', ['testBaum' => $testBaum->id, 'questionBaum' => $questionBaum->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-black p-4 text-center" for="question">
                {{ $questionBaum->question }}
            </label>
            <input type="file" name="answer_image" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" required>
        </div>
        <div class="mb-4 flex justify-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Selanjutnya
            </button>
        </div>
    </form>
  </div>
</div>

<!-- Modal -->
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none flex justify-center items-center" id="view-modal">
    <div class="w-auto mx-auto max-w-lg">
        <!-- Modal Content -->
        <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <div class="p-6 flex flex-col items-center">
                <div class="text-red-500 text-6xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" viewBox="0 0 24 24" fill="none">
                        <path d="M12 3C12.3 3 12.6 3.1 12.8 3.3L20.8 18.3C21.1 18.8 20.7 19.5 20.1 19.5H3.9C3.3 19.5 2.9 18.8 3.2 18.3L11.2 3.3C11.4 3.1 11.7 3 12 3Z" fill="red"/>
                        <path d="M12 8C12.6 8 13 8.4 13 9V13C13 13.6 12.6 14 12 14C11.4 14 11 13.6 11 13V9C11 8.4 11.4 8 12 8Z" fill="white"/>
                        <circle cx="12" cy="17" r="1" fill="white"/>
                    </svg>                    
                </div>
                <h2 class="text-xl text-gray-900 font-semibold text-center mb-2">Waktu Pengerjaan Sudah Habis</h2>
                <p class="text-sm text-gray-600 text-center">Harap segera mengumpulkan jawaban</p>
            </div>
            <div class="flex items-center justify-center p-3 border-t border-solid border-gray-200 rounded-b">
                <a href="{{ route('psikotest-paid.showLanding') }}">
                    <button onclick="toggleModal('view-modal')" type="button"
                            class="focus:ring-2 focus:ring-offset-2 font-medium text-sm rounded-lg inline-flex items-start justify-start px-6 py-3 text-white bg-blue-500 hover:bg-blue-700 focus:outline-none">
                            <p class=" font-medium leading-none text-dark">Kembali</p>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="hidden opacity-50 fixed inset-0 z-40 bg-black" id="view-modal-backdrop"></div>

<script>
    const totalDuration = 7 * 60 * 1000; 

    let startTime = localStorage.getItem('startTime') || new Date().getTime();
    localStorage.setItem('startTime', startTime);

    const timerElement = document.getElementById('timer');

    const timerInterval = setInterval(() => {
        const now = new Date().getTime();
        const elapsed = now - startTime;
        const remaining = totalDuration - elapsed;

        if (remaining <= 0) {
            clearInterval(timerInterval);
            showTimeoutModal();
        }

        const minutes = Math.floor((remaining % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((remaining % (1000 * 60)) / 1000);

        console.log("Waktu sisa",minutes+ '' + seconds)

        // timerElement.innerHTML = `Waktu Tersisa: ${minutes}m ${seconds}s`;
    }, 1000);

    function showTimeoutModal() {
        const modal = document.getElementById('view-modal');
        const backdrop = document.getElementById('view-modal-backdrop');
        
        modal.classList.remove('hidden');
        backdrop.classList.remove('hidden');

        localStorage.removeItem('startTime');
    }

    function toggleModal(modalId) {
        const modal = document.getElementById(modalId);
        const backdrop = document.getElementById(`${modalId}-backdrop`);

        modal.classList.toggle('hidden');
        backdrop.classList.toggle('hidden');
    }
</script>
@endsection