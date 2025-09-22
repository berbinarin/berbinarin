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
                        <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Detail Data Staf</p>
                    </div>
                    <p class="w-full text-disabled">Dalam halaman ini terdapat informasi detail mengenai data staf ataupun manajer dalam keluarga Berbinar. Data tersebut meliputi data diri dan riwayat jabatan.</p>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ route("dashboard.keluarga-berbinar.edit", $staff->id) }}">
                        <button type="button" class="mt-8 inline-flex items-start justify-start rounded-lg border-2 border-primary bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Ubah data</p>
                        </button>
                    </a>
                    <form action="{{ route("dashboard.keluarga-berbinar.destroy", $staff->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="mt-8 inline-flex items-start justify-start rounded-lg border-2 border-primary px-6 py-3 text-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Hapus data</p>
                        </button>
                    </form>
                </div>
            </div>
            <div class="rounded-lg bg-white px-4 py-4 shadow mb-7 md:px-8 md:py-7 xl:px-10">
                <div class="mb-4 mt-4 overflow-x-auto">
                    @include("dashboard.hr.keluarga-berbinar.tabLayout", ["staff" => $staff, "records" => $records])
                </div>
            </div>
        </div>
    </section>
@endsection
