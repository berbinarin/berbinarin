@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Arteri',
    'active' => 'Dashboard',
    'modul' => 'Main Dashboard',
])

@section('content-dashboard')
<section class="flex w-full h-full">
    <div class="flex flex-col w-full h-full">
        <div class="py-4 md:pt-12 md:pb-7">
            <div>
                <p 
                    class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                    Dashboard Arteri</p>
                <p class="w-2/4 text-disabled">Dashboard ini memberikan informasi jumlah artikel dalam draft dan yang telah diupload.</p>
            </div>
        </div>  

        <div class="rounded-lg shadow-md w-full p-10 bg-white box-border overflow-hidden" style="height:65%">
            <div class="grid grid-cols-3 gap-5 h-1/2">
                <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #48576A;">
                    <h3 class="block text-2xl font-bold">Buat Artikel</h3>
                    <a>
                        <button>
                            <i class="bx bx-plus-circle text-8xl hover:text-gray-300"></i>
                        </button>
                    </a>
                </div>
                <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #6482AD;">
                    <h3 class="block text-2xl font-bold">Draft Arteri</h3>
                    <div>
                        <p class="block text-4xl font-bold">12</p>
                        <p>Draft</p>
                    </div>
                    <span class="absolute p-6 bottom-2 right-2 text-xl">13</span>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-5 h-1/2 mt-5">
                <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #9E866A;">
                    <h3 class="block text-2xl font-bold">Terupload</h3>
                    <div>
                        <p class="block text-4xl font-bold">12</p>
                        <p>Artikel Terupload</p>
                    </div>
                    <span class="absolute p-6 bottom-2 right-2 text-xl">26</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection