@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Esai',
    'active' => 'Dashboard',
    'modul' => 'Dashboard Tes',
])

@section('content-dashboard')
<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div>
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Dashboard Alat Tes Essay</p>
                    <p class="w-2/4 text-disabled">Dashboard ini memberikan informasi mengenai jumlah pengguna yang telah menyelesaikan proses pengumpulan.</p>
                </div>
            </div>  
            <div class="rounded-lg shadow-md w-full h-full p-7 bg-white" style="height: 150%;">
                <div class="text-white rounded-lg flex flex-col justify-between p-6 h-1/2 w-1/2 relative" style="background-color: #6482AD;">
                    <h3 class="block text-2xl font-bold">Esai</h3>
                        <div>
                            <p class="block text-4xl text-white font-bold">{{ $totalJumlahPengguna }}</p>
                            <p>User</p>
                        </div>
                    <span class="absolute p-6 bottom-2 right-2 text-xl">{{ $totalJawaban }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
    }
</script>
@endsection