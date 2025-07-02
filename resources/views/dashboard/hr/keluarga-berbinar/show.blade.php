@extends(
    "dashboard.layouts.app",
    [
        "title" => "Keluarga Berbinar",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="">
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route("dashboard.keluarga-berbinar.index") }}">
                            <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.png") }}" alt="Back Btn" />
                        </a>
                        <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Detail Staff Data</p>
                    </div>
                    <p class="w-3/4 text-disabled">Dalam halaman ini terdapat informasi detail mengenai data staff ataupun manager dalam Keluarga Berbinar. Data tersebut meliputi data diri dan riwayat jabatan.</p>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ route("dashboard.keluarga-berbinar.edit", $staff->id) }}">
                        <button type="button" class="mt-8 inline-flex items-start justify-start rounded-lg bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Edit</p>
                        </button>
                    </a>
                    <form action="{{ route("dashboard.keluarga-berbinar.destroy", $staff->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="mt-8 inline-flex items-start justify-start rounded-lg bg-red-400 px-6 py-3 text-white focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Hapus</p>
                        </button>
                    </form>
                </div>
            </div>
            <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
                <div class="mb-4 mt-4 overflow-x-auto">
                    @include("dashboard.hr.keluarga-berbinar.tabLayout", ["staff" => $staff, "records" => $records])
                </div>
            </div>
        </div>
    </section>
@endsection
