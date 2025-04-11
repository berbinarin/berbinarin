@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Instruksi DASS',
    'active' => 'one psikotest',
])

@section('content')
<form method="post" action="{{ route('psikotest-paid.tool.Dass-42.submitAnswer') }}" class="relative min-h-screen h-full w-full flex flex-col items-center justify-center">
    @csrf
    <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar"
        class="absolute inset-0 h-full w-full object-cover z-0">

    <div class="absolute top-8 left-0 right-0 flex items-center justify-center z-10">
        <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
            <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon"
                class="w-8 h-8 rounded-full">
            <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon"
                class="w-8 h-8 rounded-full ml-2">
        </div>
    </div>

    <p class="font-bold text-2xl top-24 text-gray-800 z-20 absolute">Tes 09</p>

    <div class="relative mx-auto items-center justify-center flex flex-col z-30 inset-0 max-sm:mx-4">
        <p class="text-[#070707] max-sm:text-[15px] text-[17px] font-medium text-center">{{ $questions[session('current_question_number')]->question }}</p>
        
        
        <div class="flex space-x-6 mt-10 text-center">
            <label class="flex flex-col items-center cursor-pointer">
                <input type="radio" name="answer" value="0" class="hidden peer" required>
                <div class="w-12 h-12 border border-[#CCCCCC] bg-white rounded-full flex items-center justify-center peer-checked:border-[#3986A3] peer-checked:bg-[#3986A3]">
                </div>
                <span class="mt-2 text-sm text-[#333333] font-medium">Tidak Pernah</span>
            </label>
        
            <label class="flex flex-col items-center cursor-pointer">
                <input type="radio" name="answer" value="1" class="hidden peer" required>
                <div class="w-12 h-12 border border-[#CCCCCC] bg-white rounded-full flex items-center justify-center peer-checked:border-[#3986A3] peer-checked:bg-[#3986A3]">
                </div>
                <span class="mt-2 text-sm text-[#333333] font-medium">Kadang-kadang</span>
            </label>
        
            <label class="flex flex-col items-center cursor-pointer">
                <input type="radio" name="answer" value="2" class="hidden peer" required>
                <div class="w-12 h-12 border border-[#CCCCCC] bg-white rounded-full flex items-center justify-center peer-checked:border-[#3986A3] peer-checked:bg-[#3986A3]">
                </div>
                <span class="mt-2 text-sm text-[#333333] font-medium">Sering</span>
            </label>
        
            <label class="flex flex-col items-center cursor-pointer">
                <input type="radio" name="answer" value="3" class="hidden peer" required>
                <div class="w-12 h-12 border border-[#CCCCCC] bg-white rounded-full flex items-center justify-center peer-checked:border-[#3986A3] peer-checked:bg-[#3986A3]">
                </div>
                <span class="mt-2 text-sm text-[#333333] font-medium">Sering Sekali</span>
            </label>
        </div>
    </div>

    <div class="absolute bottom-10 left-0 right-0 flex items-center mx-auto shadow-md bg-white rounded-lg h-12 sm:w-[70%] w-[90%]">
        <div class="flex items-center ml-6 w-full h-1 relative">
            <div class="bg-black rounded-full h-[3px] w-full z-0"></div>
            <div class="bg-[#232ACA] rounded-full absolute h-[3px] left-0 z-10"
                style="width: {{ $progress . '%' }}">
            </div>
            <div class="bg-[#232ACA] rounded-full h-2.5 w-2.5 absolute z-20"
                style="transform: translateX(-50%); left: {{ $progress . '%' }}">
            </div>
            <span class="text-[10px] text-black absolute top-[5px] font-medium"
                style="transform: translateX(-50%); left: {{ $progress . '%' }}">{{ $progress }}%</span>
        </div>
            <button 
                type="submit"
                class="ml-3 px-4 py-2 bg-[#232ACA] text-sm mr-2 text-white rounded-lg font-medium hover:bg-blue-600">
                {{ session('current_question_number') === $questions->count()  ? 'Selesai' : 'Selanjutnya' }}
            </button>
    </div>
       
</form>
@endsection