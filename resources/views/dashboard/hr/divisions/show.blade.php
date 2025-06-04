@extends(
    "dashboard.layouts.app",
    [
        "title" => "Manage Division",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="">
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route("dashboard.divisions.index") }}">
                            <img src="{{ asset("assets/images/svg-icon/dashboard-back.png") }}" alt="Back Btn" />
                        </a>
                        <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Detail Division Data</p>
                    </div>
                    <p class="w-3/4 text-disabled">Dalam halaman ini terdapat informasi detail mengenai data divisi dalam Keluarga Berbinar. Data tersebut meliputi nama divisi dan subdivisi jika ada.</p>
                </div>
                <div class="flex items-center gap-5 pb-8">
                    <a href="{{ route("dashboard.divisions.edit", $division->id) }}">
                        <button type="button" class="mt-8 inline-flex items-start justify-start rounded-lg bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Edit</p>
                        </button>
                    </a>
                </div>
                <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
                    <div class="mb-4 mt-4 overflow-x-auto">
                        <div class="flex flex-col gap-10">
                            <div>
                                <h1 class="text-2xl font-bold">Divisi</h1>
                                <ul class="grid grid-cols-3 gap-x-10 gap-y-5 pt-3 font-semibold">
                                    <li>
                                        <p class="text-gray-400">Nama Divisi</p>
                                        <p class="text-black">{{ $division->nama_divisi }}</p>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h1 class="text-2xl font-bold">Sub Divisi</h1>
                                <ul class="grid grid-cols-3 gap-x-10 gap-y-5 pt-3 font-semibold">
                                    @forelse ($division->subDivisions as $index => $subDivision)
                                        <li class="flex items-center gap-3">
                                            <div class="rounded-full bg-primary px-2 py-1">
                                                <h1 class="text-sm text-white">{{ $index + 1 }}.</h1>
                                            </div>
                                            <div class="">
                                                <p class="text-gray-400">Nama Sub Divisi</p>
                                                <p class="text-black">{{ $subDivision->nama_subdivisi }}</p>
                                            </div>
                                        </li>
                                    @empty
                                        <li>
                                            <p class="text-gray-400">Tidak ada sub divisi.</p>
                                        </li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
