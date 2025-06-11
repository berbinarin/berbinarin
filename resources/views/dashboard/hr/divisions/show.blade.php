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
                            <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.png") }}" alt="Back Btn" />
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
                    <form action="{{ route("dashboard.divisions.destroy", $division->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="mt-8 inline-flex items-start justify-start rounded-lg bg-red-400 px-6 py-3 text-white focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Hapus</p>
                        </button>
                    </form>
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
                                        <li class="flex flex-col items-center gap-3 rounded-xl border border-gray-200 bg-white p-4 shadow">
                                            @if ($subDivision->cover_subdivisi)
                                                <img src="{{ asset("storage/" . $subDivision->cover_subdivisi) }}" alt="Cover Sub Divisi" class="mb-2 h-32 w-full rounded-lg object-cover" />
                                            @else
                                                <div class="mb-2 flex h-32 w-full items-center justify-center rounded-lg bg-gray-100 text-gray-400">
                                                    <i class="bx bx-image text-5xl"></i>
                                                </div>
                                            @endif
                                            <div class="flex w-full items-center gap-2">
                                                <div class="rounded-full bg-primary px-2 py-1">
                                                    <h1 class="text-sm text-white">{{ $index + 1 }}.</h1>
                                                </div>
                                                <div>
                                                    <p class="font-semibold text-black">{{ $subDivision->nama_subdivisi }}</p>
                                                </div>
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
