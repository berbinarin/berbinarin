@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard',
    'active' => 'Dashboard',
    'modul' => 'Dashboard',
])

@section('content-dashboard')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="">
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Dashboard {{ Auth()->user()->role }}</p>
                        @if (Auth::user()->role == 'HR')
                            <p class="w-2/4 text-disabled">Fitur ini digunakan untuk menampilkan jumlah data posisi hiring,
                                job
                                description, serta requirments
                                yang sedang
                                atau akan
                                dibukan atau telah dibuka yang ditampilkan pada website careers Berbinarin.</p>
                        @else
                            <p class="w-2/4 text-disabled"></p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap w-full gap-6">
                @if (Auth::user()->role == 'HR')
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-briefcase-alt-2  text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">62</span>
                            <span class="block text-gray-500">Positions</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bxl-upwork  text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">62</span>
                            <span class="block text-gray-500">Job Descriptions</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-file text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">62</span>
                            <span class="block text-gray-500">Requirements</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
