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
            <div class="flex items-center gap-5">
                <a href="{{ route('dashboard.berbinarFamily.edit', $staff->id) }}">
                    <button type="button"
                        class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg">
                        <p class=" font-medium leading-none text-dark">Edit</p>
                    </button>
                </a>
                <form action="{{ route('dashboard.berbinarFamily.delete', $staff->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-red-400 focus:outline-none rounded-lg">
                        <p class=" font-medium leading-none text-dark">Hapus</p>
                    </button>
                </form>
            </div>  
        </div>
        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md shadow-gray-400 shadow-lg">
            <div class="mt-4 mb-4 overflow-x-auto">
                @include('moduls.dashboard.hr.berbinar-family.tabLayout', ['staff' => $staff, 'records' => $records])
            </div>
        </div>
    </div>
</section>

@endsection