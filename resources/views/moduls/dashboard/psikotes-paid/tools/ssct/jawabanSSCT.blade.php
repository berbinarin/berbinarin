@extends('moduls.dashboard.layouts.main', [
'title' => 'Jawaban SSCT',
'active' => 'Dashboard',
'modul' => 'Psikotest Paid SSCT',
])

@section('content-dashboard')
<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div>
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Data Jawaban Alat Test SSCT</p>
                    <p class="w-2/4 text-disabled">Halaman dashboard ini menampilkan jawaban yang telah dikumpulkan dari pengguna.</p>
                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                <div class="mt-4 overflow-x-auto">
                    <table id="example" class="display w-full" style="overflow-x: scroll;">
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
                                <td class="text-center">1</td>
                                <td>Morgan Vero</td>
                                <td class="text-center">18-04-2024</td>
                                <td class="px-6 py-4 whitespace-no-wrap text-center text-center">
                                    <button onclick="toggleModal('view-modal')" type="button"
                                        class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-blue-500 hover:bg-blue-500 focus:outline-none rounded">
                                        <p class="font-medium leading-none text-white">Lihat Jawaban</p>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- modal view answer --}}
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="view-modal">
    <div class="relative w-auto my-6 mx-auto max-w-3xl">
        <!--content-->
        <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <div class="p-6 bg-white border-b border-gray-200 rounded-t-lg">
                <h3 class="text-xl font-semibold">Morgan Vero</h3>
            </div>
            
            <div class="relative p-6 flex-auto w-1/2">
                <table class="table-auto w-96 border-separate border-spacing-y-3">
                    <thead>
                        <tr class="text-left bg-gray-100">
                            <th class="px-3 py-4 text-sm font-semibold">No</th>
                            <th class="px-3 py-4 text-sm font-semibold">Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="data-consume bg-white border rounded-lg">
                            <td class="px-3 py-4">1</td>
                            <td class="px-3 py-4 pr-10">Bahagia</td>
                        </tr>
                        <tr class="data-consume bg-white border rounded-lg">
                            <td class="px-3 py-4">2</td>
                            <td class="px-3 py-4 pr-10">Bahagia</td>
                        </tr>
                        <tr class="data-consume bg-white border rounded-lg">
                            <td class="px-3 py-4">3</td>
                            <td class="px-3 py-4 pr-10">Bahagia</td>
                        </tr>
                        <tr class="data-consume bg-white border rounded-lg">
                            <td class="px-3 py-4">4</td>
                            <td class="px-3 py-4 pr-10">Bahagia</td>
                        </tr>
                        <tr class="data-consume bg-white border rounded-lg">
                            <td class="px-3 py-4">5</td>
                            <td class="px-3 py-4 pr-10">Bahagia</td>
                        </tr>
                    </tbody>
                </table>
                <!--footer-->
                <div class="flex items-center justify-center w-96 pt-6 border-t border-solid border-blueGray-200 rounded-b">
                    <button class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-0 inline-flex items-start justify-start p-3 rounded-lg text-white font-medium leading-none" 
                            type="button" onclick="toggleModal('view-modal')" style="background-color: #6083F2;">
                        Kembali
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="view-modal-backdrop"></div>


<script type="text/javascript">
    function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
    }
</script>

@endsection