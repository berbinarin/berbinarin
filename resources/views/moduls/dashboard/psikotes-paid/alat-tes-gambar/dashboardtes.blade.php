@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Tes',
    'active' => 'Dashboard',
    'modul' => 'Dashboard Tes Grafis',
])

@section('content-dashboard')
    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:pb-7">
                    <div class="ml-20">
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Dashboard Tes Grafis</p>
                        <p class="w-2/4 text-disabled">Dashboard ini memberikan informasi mengenai jumlah pengguna yang
                            telah menyelesaikan proses pengumpulan.</p>
                    </div>
                </div>
                <div
                    class="bg-white p-10 rounded-lg shadow-md grid grid-cols-1 md:grid-cols-2 gap-6 w-90% overflow-hidden ml-20">
                    <div class="text-white p-8 rounded-lg flex flex-col justify-between relative"
                        style="background-color: #6482AD;">
                        <h3 class="block text-2xl font-bold">BAUM</h3>
                        <div>
                            <p class="block text-4xl text-white font-bold">360</p>
                            <p>User</p>
                        </div>
                        <span class="absolute p-6 bottom-2 right-2 text-xl">11</span>
                    </div>
                    <div class="text-white p-8 rounded-lg flex flex-col justify-between relative"
                        style="background-color: #7FA1C3;">
                        <h3 class="block text-2xl font-bold">DAP</h3>
                        <div>
                            <p class="block text-4xl text-white font-bold">360</p>
                            <p>User</p>
                        </div>
                        <span class="absolute p-6 bottom-2 right-2 text-xl">20</span>
                    </div>
                    <div class="text-white p-8 rounded-lg flex flex-col justify-between relative"
                        style="background-color: #85B3E2;">
                        <h3 class="block text-2xl font-bold">HTP</h3>
                        <div>
                            <p class="block text-4xl text-white font-bold">360</p>
                            <p>User</p>
                        </div>
                        <span class="absolute p-6 bottom-2 right-2 text-xl">15</span>
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
