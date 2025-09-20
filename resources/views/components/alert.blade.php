@if (session("alert"))
    <div x-data="{ open: true }" x-show="open" class="fixed inset-0 z-50 flex items-center justify-center bg-black/40" x-cloak>
        <div
            class="relative w-[560px] rounded-[20px] bg-white p-6 font-plusJakartaSans shadow-lg"
            style="
                background:
                    linear-gradient(to right, #74aabf, #3986a3) top/100% 6px no-repeat,
                    white;
                border-radius: 20px;
                background-clip: padding-box, border-box;
            "
        >
            <img src="{{ session("icon") }}" alt="icon" class="mx-auto h-[83px] w-[83px]" />

            <h2 class="mt-4 text-center font-plusJakartaSans text-2xl font-bold text-stone-900">
                {{ session("title") }}
            </h2>

            <p class="mt-2 text-center text-base font-medium text-black">
                {{ session("message") }}
            </p>

            <div class="mt-6 flex justify-center">
                @if (session("type") === "confirm")
                    <button @click="open = false" class="rounded-lg border border-stone-300 px-6 py-2 text-stone-700">Tidak</button>

                    <form action="#" method="POST" class="ml-4">
                        @csrf
                        <button type="submit" class="rounded-[5px] bg-gradient-to-r from-[#74AABF] to-[#3986A3] px-6 py-2 font-medium text-white">Ya</button>
                    </form>
                @else
                    <button @click="open = false" class="rounded-[5px] bg-gradient-to-r from-[#74AABF] to-[#3986A3] px-10 py-2 font-medium text-white">OK</button>
                @endif
            </div>
        </div>
    </div>
@endif
