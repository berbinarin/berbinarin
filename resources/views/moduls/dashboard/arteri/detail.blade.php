@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Arteri',
    'active' => 'Dashboard',
    'modul' => 'Postingan',
])

@section('content-dashboard')

<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="py-4 md:pt-12 md:pb-7">
            <div class="pb-5">
                <div class="flex items-center justify-between mb-2 gap-2">
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 ">
                        Detail Division Data</p>
                        <a href="">
                            <button type="button"
                                class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg">
                                <p class=" font-medium leading-none text-dark">Edit Artikel</p>
                            </button>
                        </a>
                </div>
            </div>
            <div class="flex flex-col gap-4" style="color: #9B9B9B">
                <div class="flex flex-col gap-2">
                    <p>Kredensial</p>
                    <div class="bg-white text-black rounded-md px-2 py-4">
                        <p class="">Judul : <span class="font-semibold">Artikel Tips atasi demotivation Part 2</span></p>
                        <p class="">Penulis : <span class="">Artikel Tips atasi demotivation Part 2</span></p>
                        <p class="">Kategori : <span class="">Artikel Tips atasi demotivation Part 2</span></p>
                    </div>
                </div>
                <div class="flex flex-col gap-2" style="color: #9B9B9B">
                    <p>Sampul</p>
                    <img class="rounded" style="width: 400px; height: 225px;"/>
                </div>
            </div>
        </div>
</section>

@endsection