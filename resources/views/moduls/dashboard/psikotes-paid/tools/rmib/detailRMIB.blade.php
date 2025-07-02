@extends('dashboard.layouts.app', [
    'title' => 'Detail Jawaban RMIB',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid RMIB',
])

@php use Illuminate\Support\Str; @endphp

@section('content')
<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div>
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Detail Data Jawaban Alat Test RMIB</p>
                    <p class="w-2/4 text-disabled">Halaman dashboard ini menampilkan jawaban yang telah dikumpulkan dari
                        pengguna.</p>
                    <a href="{{ route('dashboard.psikotespaid.datarmib') }}">
                        <button type="button"
                            class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-8 inline-flex items-start justify-start p-3 bg-blue-500 hover:bg-blue-500 focus:outline-none rounded">
                            <p class="font-medium leading-none text-white">Kembali</p>
                        </button>
                    </a>
                </div>
            </div>

            <div class="flex mt-1 gap-5 w-full">
                <div class="bg-white shadow-lg p-8 rounded-lg max-h-[500px] overflow-hidden flex flex-col"
                    style="width: 40%">
                    <div class="overflow-y-auto flex-1" style="max-height: 400px;">
                        <div class="pb-10">
                            <h2 class="font-semibold text-2xl">{{ $testRmib->psikotestPaidTest->userPsikotestPaid->fullname }}</h2>
                            <p class="mt-4">Berikut merupakan {{ $lowestCategories->count() }} peringkat kategori dengan nilai terendah, yaitu 
                                
                            @foreach ($lowestCategories as $category => $point)
                                @if ($lowestCategories->count() - $loop->iteration == 0)
                                    dan <b>{{ Str::of($category)->replace('_', ' ')->title() }}</b>
                                @else
                                    <b>{{ Str::of($category)->replace('_', ' ')->title() }}</b>,
                                @endif
                            @endforeach
                            
                                
                            </p>
                            <div>
                                {{-- Dalam sini  --}}
                            
                            <ul class="flex flex-col gap-2 pt-4">
                                @php
                                    $lastPoint = null;
                                    $rank = 0;
                                @endphp
                                @foreach ($lowestCategories as $category => $point)
                                    @php
                                        if ($point !== $lastPoint) {
                                            $rank++;
                                            $lastPoint = $point;
                                        }
                                    @endphp
                                    <li class="flex gap-2 items-center">
                                        <div class="bg-primary px-2 py-1 flex justify-center rounded-full">
                                            <span class="text-white">{{ $rank }}.</span>
                                        </div>
                                        <div class="flex justify-between w-full">
                                            <p class="pl-2">{{ Str::of($category)->replace('_', ' ')->title() }}</p>
                                            <p class="pr-20 font-bold">{{ $point }} poin</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            
                            </div>
                            <h2 class="font-semibold text-2xl pt-4">Kesimpulan</h2>
                            <ul>
                                @foreach ($lowestCategories as $category => $value)
                                <li>
                                    <h3 class="font-semibold text-xl text-primary-alt pt-2">{{ Str::of($category)->replace('_', ' ')->title() }}</h3>
                                    <p>{!! optional($categories->where('name', Str::of($category)->replace('_', ' '))->first())->description !!}</p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg p-8 rounded-lg max-h-[500px] overflow-hidden flex flex-col"
                    style="width: 60%">
                    <h2 class="font-semibold text-2xl mb-4">Detail Jawaban</h2>

                    @include('moduls.dashboard.psikotes-paid.tools.rmib.tablayout')
                </div>
            </div>
        </div>
    </div>
    @endsection