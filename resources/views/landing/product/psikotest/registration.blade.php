@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
    ]
)

@section("content")
    <style>
        .text-gradient {
            background: linear-gradient(to right, #f7b23b, #916823);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .text-gradient-blue {
            background: linear-gradient(to right, #3986a3, #15323d);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }
    </style>

    <h1 class="mt-28 text-center text-[42px] font-semibold leading-tight text-black max-md:mx-10 max-sm:mx-2 max-sm:text-[29px] sm:mt-32">
        Tingkatkan Potensi dengan
        <br class="hidden sm:inline" />
        Psikotes
        <span class="text-gradient-blue">Berbinar</span>
    </h1>

    <div class="m-10 grid grid-cols-4 gap-y-3 max-md:grid-cols-2">
        @foreach ($layanan_psikotes as $psikotes)
            <div class="flex flex-col items-center justify-center space-y-1 sm:space-y-3">
                <img src="{{ asset($psikotes["image"]) }}" alt="{{ $psikotes["name"] }}" class="h-28 w-auto object-contain sm:h-32" />
                <p class="text-gradient text-lg font-semibold sm:text-2xl">{{ $psikotes["name"] }}</p>
            </div>
        @endforeach
    </div>

    <div class="mx-4 mb-14 flex flex-col justify-center gap-6 sm:flex-row">
        <div class="flex items-center justify-center">
            <a href="{{ route("product.psikotes.schedule") }}" class="flex w-full justify-center">
                <button class="text-md w-full rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-16 py-2 text-white max-sm:text-[15px] sm:w-auto">Daftar Tes Berbayar</button>
            </a>
        </div>

        <div class="flex items-center justify-center">
            <a href="{{ route("product.psikotes.schedule") }}" class="flex w-full justify-center">
                <button class="text-md w-full rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#916823] px-8 py-2 text-white max-sm:text-[15px] sm:w-auto">Ikuti Test Kepribadian Gratis</button>
            </a>
        </div>
    </div>
@endsection
