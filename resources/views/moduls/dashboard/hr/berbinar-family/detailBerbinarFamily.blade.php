@extends('moduls.dashboard.layouts.main', [
    'title' => 'BerbinarFamily',
    'active' => 'Dashboard',
    'modul' => 'BerbinarFamily',
])

@section('content-dashboard')

<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="py-4 md:pt-12 md:pb-7">
            <div class="">
                <div class="flex items-center mb-2 gap-2">
                    <a href="{{ route('dashboard.berbinarFamily') }}">
                        <img src="{{ asset('assets/images/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                    </a>
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 ">
                        Detail Staff Data</p>
                </div>
                <p class="w-3/4 text-disabled">Dalam halaman ini terdapat informasi detail mengenai data staff ataupun
                    manager dalam Keluarga Berbinar. Data tersebut meliputi data diri dan riwayat jabatan.</p>
            </div>
        </div>
        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md shadow-gray-400 shadow-lg">
            <div class="mt-4 mb-4 overflow-x-auto">
                @include('moduls.dashboard.hr.berbinar-family.tabLayout')
            </div>
        </div>
    </div>
</section>

@endsection