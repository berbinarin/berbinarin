@extends('moduls.dashboard.layouts.main', [
    'title' => 'Pengumpulan',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid Pengumpulan',
])

@section('content-dashboard')
    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div>
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Data Jawaban Alat Test Essay</p>
                        <p class="w-2/4 text-disabled">Halaman dashboard ini menampilkan jawaban yang telah dikumpulkan dari
                            pengguna.</p>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display w-full" style="overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($answers as $index => $answer)
                                    <tr class="data-consume">
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td>{{ $answer->testTesEsai->psikotestPaidTest->userPsikotestPaid->fullname ?? 'N/A' }}
                                        </td>
                                        <td class="text-center">
                                            {{ $answer->testTesEsai->psikotestPaidTest->userPsikotestPaid->email ?? 'N/A' }}
                                        </td>
                                        <td class="text-center">{{ $answer->created_at->format('d-m-Y') }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-center">
                                            <button onclick="bukaModalJawaban({{ $answer->id }})" type="button"
                                                class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-blue-500 hover:bg-blue-500 focus:outline-none rounded">
                                                <p class="font-medium leading-none text-white">Lihat Jawaban</p>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- modal view answer --}}
                                <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                    id="view-modal">
                                    <div class="relative w-auto my-6 mx-auto max-w-3xl">
                                        <div
                                            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                            <div class="relative p-6 flex-auto">
                                                <p id="jawaban-content"
                                                    class="overflow-y-auto h-96 flex items-center justify-center"
                                                    style="text-align: center">
                                                    <!-- Jawaban akan dimuat di sini -->
                                                </p>
                                                <div
                                                    class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                                                    <button
                                                        class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-0 inline-flex items-start justify-start p-3 focus:outline-none rounded"
                                                        type="button" onclick="tutupModalJawaban()"
                                                        style="background-color: #6083F2;">
                                                        <p class="font-medium leading-none text-white">Kembali</p>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="view-modal-backdrop"></div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function bukaModalJawaban(answerId) {
            // Ambil data jawaban dari server (gunakan AJAX jika perlu)
            const answer = @json($answers).find(a => a.id === answerId);

            // Tampilkan jawaban di modal
            document.getElementById('jawaban-content').textContent = answer.answer;

            // Tampilkan modal
            document.getElementById('view-modal').classList.remove('hidden');
            document.getElementById('view-modal').classList.add('flex');
            document.getElementById('view-modal-backdrop').classList.remove('hidden');
            document.getElementById('view-modal-backdrop').classList.add('flex');
        }

        function tutupModalJawaban() {
            document.getElementById('view-modal').classList.add('hidden');
            document.getElementById('view-modal').classList.remove('flex');
            document.getElementById('view-modal-backdrop').classList.add('hidden');
            document.getElementById('view-modal-backdrop').classList.remove('flex');
        }
    </script>
    </section>
@endsection
