@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Alat Tes Biodata',
    'active' => 'Dashboard',
    'modul' => 'Dashboard Tes',
])

@section('content-dashboard')
<section class="flex w-full h-full">
    <div class="flex flex-col w-full h-full">
        <div class="py-4 md:pt-12 md:pb-7">
            <div>
                <p 
                    class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                    Dashboard Alat Tes Biodata</p>
                <p class="w-2/4 text-disabled">Dashboard ini memberikan informasi mengenai jumlah pengguna yang telah menyelesaikan proses pengumpulan.</p>
            </div>
        </div>  

        <div class="rounded-lg shadow-md w-full p-10 bg-white box-border overflow-hidden" style="height:65%">
            <div class="grid grid-cols-2 gap-5 h-1/2">
                <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #6482AD;">
                    <h3 class="block text-2xl font-bold">Perusahaan</h3>
                    <div>
                        <p class="block text-4xl font-bold">{{ $count_company_users }}</p>
                        <p>User</p>
                    </div>
                    <span class="absolute p-6 bottom-2 right-2 text-xl">22</span>
                </div>
                <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #A0BCE1;">
                    <h3 class="block text-2xl font-bold">Pendidikan</h3>
                    <div>
                        <p class="block text-4xl font-bold">{{ $count_education_users }}</p>
                        <p>User</p>
                    </div>
                    <span class="absolute p-6 bottom-2 right-2 text-xl">23</span>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-5 h-1/2 mt-5">
                <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #48576A;">
                    <h3 class="block text-2xl font-bold">Komunitas</h3>
                    <div>
                        <p class="block text-4xl font-bold">{{ $count_community_users }}</p>
                        <p>User</p>
                    </div>
                    <span class="absolute p-6 bottom-2 right-2 text-xl">24</span>
                </div>
                <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #BCC8DD;">
                    <h3 class="block text-2xl font-bold">Individual</h3>
                    <div>
                        <p class="block text-4xl font-bold">{{ $count_individual_users }}</p>
                        <p>User</p>
                    </div>
                    <span class="absolute p-6 bottom-2 right-2 text-xl">25</span>
                </div>
                <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #9E866A;">
                    <h3 class="block text-2xl font-bold">Klinis</h3>
                    <div>
                        <p class="block text-4xl font-bold">{{ $count_clinical_users }}</p>
                        <p>User</p>
                    </div>
                    <span class="absolute p-6 bottom-2 right-2 text-xl">26</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection