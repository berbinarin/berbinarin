@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Test EPI',
    'active' => 'one psikotest',
])

@section('content')
    <div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">
        <form method="POST" action="{{ route('psikotest-paid.epi.submit') }}">
            @csrf
            <input type="hidden" name="timeout" id="timeout" value="false">

            <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar"
                class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

            <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
                <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
                    <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon"
                        class="w-8 h-8 rounded-full">
                    <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon"
                        class="w-8 h-8 rounded-full ml-2">
                </div>
            </div>

            <h1>Test EPI</h1>

            <div class="relative z-10 w-3xl mx-auto bg-none rounded-lg p-6 mt-20" style="width: 750px;">
                @foreach ($questions as $index => $question)
                    <div class="question-slide {{ $index === 0 ? 'active' : 'hidden' }}" data-index="{{ $index }}">
                        <h1 class="pb-12 font-bold text-xl">{{ $question->statement }}</h1>

                        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 w-3/4 mx-auto justify-center items-center">
                            <label class="flex-1 rounded-lg p-4 cursor-pointer relative card"
                                style="background-color: #EF5350; width: 100px; height: 150px; transition: transform 0.2s ease;"
                                for="answer_{{ $question->id }}_no">
                                <input type="radio" name="answers[{{ $question->id }}]" id="answer_{{ $question->id }}_no"
                                    value="no" class="hidden" required>
                                <div class="text-white flex items-center justify-center w-full h-full">Tidak</div>
                                <div class="absolute bottom-2 right-2 w-5 h-5 rounded-full bg-white flex items-center justify-center"
                                    style="border: 2px solid #EF5350;">
                                    <span class="hidden text-lg checkmark" style="color: #EF5350; font-size: 12px;">&#10003;</span>
                                </div>
                            </label>

                            <label class="flex-1 rounded-lg p-4 cursor-pointer relative card"
                                style="background-color: #4CAF50; width: 100px; height: 150px; transition: transform 0.2s ease;"
                                for="answer_{{ $question->id }}_yes">
                                <input type="radio" name="answers[{{ $question->id }}]" id="answer_{{ $question->id }}_yes"
                                    value="yes" class="hidden" required>
                                <div class="text-white flex items-center justify-center w-full h-full">Ya</div>
                                <div class="absolute bottom-2 right-2 w-5 h-5 rounded-full bg-white flex items-center justify-center"
                                    style="border: 2px solid #4CAF50;">
                                    <span class="hidden text-lg checkmark" style="color: #4CAF50; font-size: 12px;">&#10003;</span>
                                </div>
                            </label>
                        </div>
                    </div>
                @endforeach

                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        const nextButton = document.getElementById('next-button');
                        const slides = document.querySelectorAll('.question-slide');
                        const progressBar = document.getElementById('progress-bar');
                        const progressText = document.getElementById('progress-text');
                        let currentSlideIndex = 0;
                
                        function showSlide(index) {
                            slides.forEach((slide, i) => {
                                slide.classList.toggle('hidden', i !== index);
                            });
                        }
                
                        function updateProgress() {
                            const progress = ((currentSlideIndex + 1) / slides.length) * 100;
                            progressBar.style.width = `${progress}%`;
                            progressText.textContent = `${Math.round(progress)}%`;
                
                            // Ubah tombol menjadi "Selesai" di soal terakhir
                            nextButton.textContent = (currentSlideIndex === slides.length - 1) ? 'Selesai' : 'Soal Berikutnya';
                            nextButton.type = (currentSlideIndex === slides.length - 1) ? 'submit' : 'button';
                        }
                
                        nextButton.addEventListener('click', function () {
                            const currentSlide = slides[currentSlideIndex];
                            const selectedAnswer = currentSlide.querySelector('input[type="radio"]:checked');
                
                            // Validasi: Cek apakah jawaban sudah diisi
                            if (!selectedAnswer) {
                                let errorMsg = currentSlide.querySelector('.error-message');
                                if (!errorMsg) {
                                    errorMsg = document.createElement('div');
                                    errorMsg.className = 'error-message text-red-600 font-semibold mt-4';
                                    errorMsg.textContent = 'Harap pilih jawaban sebelum lanjut.';
                                    currentSlide.appendChild(errorMsg);
                                }
                                return; // Hentikan jika belum diisi
                            }
                
                            // Hapus pesan error jika jawaban sudah diisi
                            const errorMsg = currentSlide.querySelector('.error-message');
                            if (errorMsg) errorMsg.remove();
                
                            // Pindah ke soal berikutnya jika masih ada
                            if (currentSlideIndex < slides.length - 1) {
                                currentSlideIndex++;
                                showSlide(currentSlideIndex);
                                updateProgress();
                            } else {
                                document.querySelector('form').submit();
                            }
                        });
                
                        // Tampilkan soal pertama dan atur progres awal
                        showSlide(currentSlideIndex);
                        updateProgress();
                
                        // Menampilkan checklist saat memilih jawaban
                        document.querySelectorAll('input[type="radio"]').forEach(radio => {
                            radio.addEventListener('change', function () {
                                document.querySelectorAll('.checkmark').forEach(checkmark => checkmark.classList.add('hidden'));
                                this.closest('label').querySelector('.checkmark').classList.remove('hidden');
                            });
                        });
                    });
                </script>
                

                <div class="mt-4 mb-2 text-center z-20">
                    <span id="timer" class="text-xl font-semibold text-red-600"></span>
                </div>

                <div class="flex bg-white rounded-md items-center justify-between mt-10" style="height: 40px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="flex items-center ml-6" style="height: 3px; width: 510px; position: relative;">
                        <div class="bg-black rounded-full" style="height: 3px; width: 100%;"></div>
                        <div id="progress-bar" class="bg-blue-500 rounded-full" style="height: 3px; position: absolute; top: 0; left: 0; width: 0;"></div>
                        <div class="bg-blue-500 rounded-full" style="height: 10px; width: 10px; position: absolute; top: -4px; transform: translateX(-50%);"></div>
                        <span id="progress-text" class="text-sm text-black" style="position: absolute; top: 1px; transform: translateX(-50%); font-size: 8px;">0%</span>
                    </div>
                    <button id="next-button" type="button" class="px-4 py-1 bg-blue-500 text-sm mr-2 text-white rounded-lg hover:bg-blue-600">Soal Berikutnya</button>
                </div>

            </div>
        </form>
    </div>
@endsection