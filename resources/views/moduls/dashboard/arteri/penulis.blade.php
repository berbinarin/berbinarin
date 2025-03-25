@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Arteri',
    'active' => 'Dashboard',
    'modul' => 'Penulis',
])

@section('content-dashboard')
<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div>
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Data Penulis</p>
                    <p class="w-2/4 text-disabled">Menampilkan daftar penulis , memungkinkan admin untuk mengelola kontributor dan kontennya.</p>
                    <a href="">
                        <button type="button"
                            class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg">
                            <p class=" font-medium leading-none text-dark">Tambah Penulis</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                <div class="mt-4 overflow-x-auto">
                    <table id="example" class="display w-full" style="overflow-x: scroll;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Profil</th>
                                <th class="text-left">Nama Penulis</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php
                            $articles = [
                                ['id' => 1, 'title' => 'Class Of Product Management', 'date' => 'Julian Alvarez'],
                                ['id' => 2, 'title' => 'Graphic Designer', 'date' => 'Julian Alvarez'],
                                ['id' => 3, 'title' => 'Class Of Product Management', 'date' => 'Julian Alvarez'],
                                ['id' => 4, 'title' => 'Graphic Designer', 'date' => 'Julian Alvarez'],
                                ['id' => 5, 'title' => 'Class Of Product Management', 'date' => 'Julian Alvarez'],
                                ['id' => 6, 'title' => 'Graphic Designer', 'date' => 'Julian Alvarez'],
                            ];
                        @endphp

                        <tbody>
                            @foreach($articles as $article)
                                <tr class="data-consume">
                                    <td class="text-center font-bold">{{ $article['id'] }}.</td>
                                    <td class="flex justify-center">
                                        <img src="{{ asset('assets/images/avatar.png') }}"/>
                                    </td>
                                    <td class="break-words whitespace-normal font-semibold" style="min-width: 300px">{{ $article['date'] }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-center">
                                        <div class="flex justify-center items-center gap-2">
                                            <a href="{{ route('dashboard.article.update') }}"
                                                class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center p-2 focus:outline-none rounded hover:bg-yellow-700"
                                                style="background-color: #E9B306;">
                                                <i class='bx bx-edit-alt text-white'></i>
                                            </a>
                                            <button onclick="toggleModal('modal-id')" type="button"
                                                class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center p-2 focus:outline-none rounded hover:bg-red-700"
                                                style="background-color: #EF4444;">
                                                <i class='bx bx-trash-alt text-white'></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@include('moduls.dashboard.arteri.warning')
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
id="modal-id">
    <div class="relative my-5 mx-48 justify-center items-center" style="width: 500px">
        <!--content-->
        <div
            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <!--body-->
            <div class="relative p-5 flex-auto">
                <div class="flex flex-col items-center gap-1">
                    <img class="w-16" src="{{ asset('assets/images/warning.png') }}"/>
                    <p class="pt-5">Apakah Anda yakin ingin menghapus item ini?</p>
                    <!--footer-->
                    <form method="delete"
                        class="flex items-center justify-center pt-7 rounded-b gap-5">
                        @csrf
                        <button type="submit" name="submit"
                            class="inline-flex px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class="text-base font-semibold leading-none text-white">
                                Ya</p>
                        </button>
                        <button
                            class="background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none border border-black rounded"
                            type="button" onclick="toggleModal('modal-id')">
                            Tidak
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop">
</div>

<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
    id="modal-id">

    <script>
        function toggleModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal.style.display === "none" || modal.style.display === "") {
                modal.style.display = "block";
            } else {
                modal.style.display = "none";
            }}
    </script>
    
    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script> 
@endsection