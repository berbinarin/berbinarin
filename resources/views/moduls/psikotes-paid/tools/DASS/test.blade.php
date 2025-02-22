@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Instruksi DASS',
    'active' => 'one psikotest',
])

@section('content')
<div class="relative min-h-screen h-full w-full flex flex-col items-center justify-center">
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

    <p class="font-bold text-2xl top-24 text-gray-800 z-20 absolute">Tes 01</p>

    <div class="relative mx-auto items-center justify-center flex flex-col z-30 inset-0 max-sm:mx-4">
        <p class="text-[#070707] max-sm:text-[15px] text-[17px] font-medium text-center">Saya merasa bahwa diri saya menjadi marah karena hal-hal sepele.</p>
        
        <div class="flex space-x-6 mt-10 text-center">
            <label class="flex flex-col items-center cursor-pointer">
                <input type="radio" name="option" value="0" class="hidden peer">
                <div class="w-12 h-12 border border-[#CCCCCC] bg-white rounded-full flex items-center justify-center peer-checked:border-[#3986A3] peer-checked:bg-[#3986A3]">
                </div>
                <span class="mt-2 text-sm text-[#333333] font-medium">Tidak Pernah</span>
            </label>
        
            <label class="flex flex-col items-center cursor-pointer">
                <input type="radio" name="option" value="1" class="hidden peer">
                <div class="w-12 h-12 border border-[#CCCCCC] bg-white rounded-full flex items-center justify-center peer-checked:border-[#3986A3] peer-checked:bg-[#3986A3]">
                </div>
                <span class="mt-2 text-sm text-[#333333] font-medium">Kadang-kadang</span>
            </label>
        
            <label class="flex flex-col items-center cursor-pointer">
                <input type="radio" name="option" value="2" class="hidden peer">
                <div class="w-12 h-12 border border-[#CCCCCC] bg-white rounded-full flex items-center justify-center peer-checked:border-[#3986A3] peer-checked:bg-[#3986A3]">
                </div>
                <span class="mt-2 text-sm text-[#333333] font-medium">Sering</span>
            </label>
        
            <label class="flex flex-col items-center cursor-pointer">
                <input type="radio" name="option" value="3" class="hidden peer">
                <div class="w-12 h-12 border border-[#CCCCCC] bg-white rounded-full flex items-center justify-center peer-checked:border-[#3986A3] peer-checked:bg-[#3986A3]">
                </div>
                <span class="mt-2 text-sm text-[#333333] font-medium">Sering Sekali</span>
            </label>
        </div>
    </div>

    <div class="absolute bottom-10 left-0 right-0 flex items-center mx-auto shadow-md bg-white rounded-lg h-12 sm:w-[70%] w-[90%]">
        <div class="flex items-center ml-6 w-full h-1 relative">
            <div class="bg-black rounded-full h-[3px] w-full z-0"></div>
            <div class="bg-[#232ACA] rounded-full absolute h-[3px] left-0 w-[30%] z-10"></div>
            <div class="bg-[#232ACA] rounded-full h-2.5 w-2.5 absolute left-[30%] z-20"
                style="transform: translateX(-50%);">
            </div>
            <span class="text-[10px] text-black absolute top-[5px] left-[30%] font-medium"
                style="transform: translateX(-50%);">30%</span>
        </div>
        <a href="{{ route('psikotest-paid.tool.Dass-42.showSummary') }}">
            <button {{-- type="submit" --}} type="button"
                class="ml-3 px-4 py-2 bg-[#232ACA] text-sm mr-2 text-white rounded-lg font-medium hover:bg-blue-600">Selanjutnya</button>
        </a>
    </div>
       
</div>
@endsection