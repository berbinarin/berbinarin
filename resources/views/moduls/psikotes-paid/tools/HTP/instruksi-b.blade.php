@extends('moduls.psikotes.layouts.mainn', [
'title' => 'Instruksi HTP',
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

  <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 04</p>

  <!-- Card Transparant -->
  <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-4 " style="width: 750px;">
    <div class="flex">
        <p class="text-black px-5">
          B.
        </p>
        <p class="text-black ">
          Pada tes ini, <span class="font-bold">{{ $questions[session('current_question_number', 1) - 1]->question }}</span>
        </p>
    </div>

    {{-- <p class="text-black mt-5 pl-14">
      Baik jika sudah silahkan balik kertasnya pada bagian yang kosong atau bagian yang tidak ada identitasnya.
    </p> --}}

    <div class="mb-2 flex justify-center gap-6 mt-8">
      <a href="{{ route('psikotest-paid.tool.HTP.instruksi_c',['testId'=>$test->id]) }}">
        <button type="button" class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
            Selanjutnya
        </button>
      </a>
    </div>
  </div>
</div>

<script>
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

    // Debug di Console
    const minutes = Math.floor((remaining % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((remaining % (1000 * 60)) / 1000);
    console.log(`Waktu sisa: ${minutes}m ${seconds}s`);

  }, 1000);
</script>


@endsection
@include('sweetalert::alert')