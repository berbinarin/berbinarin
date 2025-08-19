@extends(
    "dashboard.layouts.app",
    [
        "title" => "Konseling Data",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pb-7 md:pt-12 w-full">
                    <div class="w-[80vw]">
                        <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Data</p>
                        <p class="text-disabled">Halaman ini menampilkan seluruh data dari psikolog, peer counselor, dan Berbinar for u</p>
                        <div class="w-full py-5 grid grid-cols-2 gap-8">

                            <a href="{{ route('dashboard.peer-counselors.index') }}" class="flex flex-row items-center rounded-xl bg-white p-6 shadow hover:bg-gray-100 transition">
                                <div class="flex h-[104px] w-[119px] items-center justify-center rounded-lg bg-[#3986A31A]/10">
                                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/handshake.png") }}" alt="Peer Counselor">
                                </div>
                                <div class="ml-6">
                                    <span class="text-[28px] font-semibold text-gray-800">Peer Counselor Data</span>
                                </div>
                            </a>

                            <a href="{{ route('dashboard.psychologists.index') }}" class="flex flex-row items-center rounded-xl bg-white p-6 shadow hover:bg-gray-100 transition">
                                <div class="flex h-[104px] w-[119px] items-center justify-center rounded-lg bg-[#3986A31A]/10">
                                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/psychology.png") }}" alt="Psikolog">
                                </div>
                                <div class="ml-6">
                                    <span class="text-[28px] font-semibold text-gray-800">Psikolog Data</span>
                                </div>
                            </a>

                            <a href="{{ route('dashboard.berbinar-for-u.index') }}" class="flex flex-row items-center rounded-xl bg-white p-6 shadow hover:bg-gray-100 transition">
                                <div class="flex h-[104px] w-[119px] items-center justify-center rounded-lg bg-[#3986A31A]/10">
                                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/hand-heart.png") }}" alt="Berbinar for U">
                                </div>
                                <div class="ml-6">
                                    <span class="text-[28px] font-semibold text-gray-800">Berbinar for U Data</span>
                                </div>
                            </a>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
