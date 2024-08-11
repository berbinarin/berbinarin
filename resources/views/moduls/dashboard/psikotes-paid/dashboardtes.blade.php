@extends('moduls.dashboard.layouts.main', [
'title' => 'dashboardtes',
'active' => 'Dashboard',
'modul' => 'Dashboard Tes Grafis',
])

@section('content-dashboard')
<section class="flex w-full">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div class="">
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Dashboard Tes Grafis</p>
                    <p class="w-2/4 text-disabled">Dashboard ini memberikan informasi mengenai jumlah pengguna yang telah menyelesaikan proses pengumpulan.</p>
                </div>
            </div>
            {{-- <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                <div class="mt-4 overflow-x-auto">
                    <table id="example" class="display" style="overflow-x: scroll;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="data-consume">
                                <td>1.</td>
                                <td>Morgan Vero</td>
                                <td>18-04-2024</td>
                                <td class="flex gap-2">
                                    <button  onclick="toggleModal('view-modal')" type="button"
                                        class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                        <p class="font-medium leading-none text-white">Lihat Gambar</p>
                                    </button>
                                </td>
                            </tr>
                            <tr class="data-consume">
                                <td>2.</td>
                                <td>Morgan Vero</td>
                                <td>18-04-2024</td>
                                <td class="flex gap-2">
                                    <button  onclick="toggleModal('view-modal')" type="button"
                                        class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                        <p class="font-medium leading-none text-white">Lihat Gambar</p>
                                    </button>
                                </td>
                            </tr>
                            <tr class="data-consume">
                                <td>3.</td>
                                <td>Morgan Vero</td>
                                <td>18-04-2024</td>
                                <td class="flex gap-2">
                                    <button  onclick="toggleModal('view-modal')" type="button"
                                        class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                        <p class="font-medium leading-none text-white">Lihat Gambar</p>
                                    </button>
                                </td>
                            </tr>
                            <tr class="data-consume">
                                <td>4.</td>
                                <td>Morgan Vero</td>
                                <td>18-04-2024</td>
                                <td class="flex gap-2">
                                    <button  onclick="toggleModal('view-modal')" type="button"
                                        class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                        <p class="font-medium leading-none text-white">Lihat Gambar</p>
                                    </button>
                                </td>
                            </tr>
                            <!-- modal delete job description -->
                            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="view-modal">
                                <div class="relative w-auto my-6 mx-auto max-w-3xl">
                                    <!--content-->
                                    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                        <div class="relative p-6 flex-auto">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuaPhxgtyaCQStpttEXIZj4VctG9goIoOAtQ&s" alt="">
                                                <!--footer-->
                                                <div class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                                                        <button class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 focus:outline-none rounded" 
                                                        type="button" onclick="toggleModal('view-modal')" style="background-color: #6083F2;">
                                                        <p class="font-medium leading-none text-white">Kembali</p>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="view-modal-backdrop"></div>
                        </tbody>
                    </table>
                </div>
            </div> --}}
            <div class="bg-white p-11 rounded-lg shadow-md grid grid-cols-1 md:grid-cols-2 gap-6 md:w-screen md:h-screen">  
                <div class="text-white p-8 rounded-lg flex flex-col justify-between relative" style="background-color: #6482AD;">
                    <h3 class="block text-2xl font-bold">BAUM</h3>
                    <div>
                        <p class="block text-white">360</p>
                    <p>User</p>
                    </div>
                    <span class="absolute p-8 bottom-2 right-2 text-xl">11</span>
                </div>
                <div class="text-white p-8 rounded-lg flex flex-col justify-between relative" style="background-color: #7FA1C3;">
                    <h3 class="block text-2xl font-bold">DAP</h3>
                    <div>
                        <p class="block text-white">360</p>
                    <p>User</p>
                    </div>
                    <span class="absolute p-8 bottom-2 right-2 text-xl">20</span>
                </div>
                <div class="text-white p-8 rounded-lg flex flex-col justify-between relative" style="background-color: #85B3E2;">
                    <h3 class="block text-2xl font-bold">HTP</h3>
                    <div>
                        <p class="block text-white">360</p>
                    <p>User</p>
                    </div>
                    <span class="absolute p-8 bottom-2 right-2 text-xl">15</span>
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
</section>
@endsection