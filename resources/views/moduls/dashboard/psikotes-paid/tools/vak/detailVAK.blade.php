@extends('moduls.dashboard.layouts.main', [
    'title' => 'Detail Jawaban VAK',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid VAK',
])

<style>
    .subtes-btn {
        border-color: #75BADB;
        color: #75BADB;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .subtes-btn.selected {
        background-color: #75BADB;
        color: white;
        border-color: #75BADB;
    }

    .subtes-btn:hover {
        background-color: #A0D3E9;
        color: white;
        border-color: #A0D3E9;
    }

    .subtes-btn.selected:hover {
        background-color: #75BADB;
        color: white;
        border-color: #75BADB;
    }
</style>

@section('content-dashboard')
    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div>
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Detail Data Jawaban Alat Test VAK</p>
                        <p class="w-2/4 text-disabled">Halaman dashboard ini menampilkan jawaban yang telah dikumpulkan dari
                            pengguna.</p>
                        <a href="{{ route('dashboard.psikotespaid.jawabanVAK') }}">
                            <button type="button"
                                class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-8 inline-flex items-start justify-start p-3 bg-blue-500 hover:bg-blue-500 focus:outline-none rounded">
                                <p class="font-medium leading-none text-white">Kembali</p>
                            </button>
                        </a>
                    </div>
                </div>

                <div class="flex justify-center mt-2 space-x-8">
                    <div class="relative bg-white shadow-lg p-8 rounded-lg w-1/2">
                        <div class="mb-4">
                            <h2 class="font-semibold text-2xl">{{ $userName }}</h2>
                            <p class="text-lg text-gray-500">Visual: {{ $visual }}</p>
                            <p class="text-lg text-gray-500">Auditori: {{ $auditory }}</p>
                            <p class="text-lg text-gray-500">Kinestetik: {{ $kinestetik }}</p>
                        </div>

                        <div class="space-y-4 mb-4 relative" style="padding-left: 0;">
                            {{-- diagram --}}
                            <div class="bg-blue-400 h-10 w-[{{ $visual * 10 }}px] rounded-r-full ml-1"></div>
                            <div class="bg-purple-500 h-10 w-[{{ $auditory * 10 }}px] rounded-r-full ml-1"></div>
                            <div class="bg-pink-300 h-10 w-[{{ $kinestetik * 10 }}px] rounded-r-full ml-1"></div>
                            {{-- garis pinggir --}}
                            <div class="absolute left-0 bottom-0 h-40 w-1 bg-gray-300"></div>
                            <div class="absolute left-0 bottom-0 w-full h-1 bg-gray-300"></div>
                        </div>

                        <div class="flex">
                            <div class="w-1/3">
                                <div class="flex items-center space-x-2 mb-4">
                                    <div class="w-4 h-4 rounded-full bg-blue-400"></div>
                                    <p class="text-lg text-gray-700">Subtes 1</p>
                                </div>
                                <div class="flex items-center space-x-2 mb-4">
                                    <div class="w-4 h-4 rounded-full bg-purple-500"></div>
                                    <p class="text-lg text-gray-700">Subtes 2</p>
                                </div>
                                <div class="flex items-center space-x-2 mb-4">
                                    <div class="w-4 h-4 rounded-full bg-pink-300"></div>
                                    <p class="text-lg text-gray-700">Subtes 3</p>
                                </div>
                            </div>

                            <div class="w-2/3">
                                <p class="text-lg text-gray-700 mb-4">
                                    {{ $description }}
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="bg-white shadow-lg p-8 rounded-lg w-1/2">
                        <h2 class="font-semibold text-2xl">Detail Jawaban</h2>

                        <div class="flex justify-between mb-6 mt-6 space-x-2">
                            <button id="subtes1"
                                class="subtes-btn text-lg font-semibold py-2 px-4 rounded-full border-2 transition">Subtes
                                1</button>
                            <button id="subtes2"
                                class="subtes-btn text-lg font-semibold py-2 px-4 rounded-full border-2 transition">Subtes
                                2</button>
                            <button id="subtes3"
                                class="subtes-btn text-lg font-semibold py-2 px-4 rounded-full border-2 transition">Subtes
                                3</button>
                        </div>

                        <div id="subtes1Detail" class="block">
                            <table class="w-full text-lg">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-left">Jawaban</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($answers[1] as $index => $answer)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td>{{ $answer->formatted_answer }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                        <div id="subtes2Detail" class="hidden">
                            <table class="w-full text-lg">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-left">Jawaban</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($answers[2] as $index => $answer)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td>{{ $answer->formatted_answer }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div id="subtes3Detail" class="hidden">
                            <table class="w-full text-lg">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-left">Jawaban</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($answers[3] as $index => $answer)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td>{{ $answer->formatted_answer }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const subtes1 = document.getElementById('subtes1');
            const subtes2 = document.getElementById('subtes2');
            const subtes3 = document.getElementById('subtes3');

            const subtes1Detail = document.getElementById('subtes1Detail');
            const subtes2Detail = document.getElementById('subtes2Detail');
            const subtes3Detail = document.getElementById('subtes3Detail');

            const subtesButtons = [subtes1, subtes2, subtes3];

            function showSubtes(subtes) {
                subtes1Detail.classList.add('hidden');
                subtes2Detail.classList.add('hidden');
                subtes3Detail.classList.add('hidden');

                subtesButtons.forEach(button => button.classList.remove('selected'));

                if (subtes === 'subtes1') {
                    subtes1Detail.classList.remove('hidden');
                    subtes1.classList.add('selected');
                } else if (subtes === 'subtes2') {
                    subtes2Detail.classList.remove('hidden');
                    subtes2.classList.add('selected');
                } else if (subtes === 'subtes3') {
                    subtes3Detail.classList.remove('hidden');
                    subtes3.classList.add('selected');
                }
            }

            subtes1.addEventListener('click', () => showSubtes('subtes1'));
            subtes2.addEventListener('click', () => showSubtes('subtes2'));
            subtes3.addEventListener('click', () => showSubtes('subtes3'));
        </script>
    @endsection
