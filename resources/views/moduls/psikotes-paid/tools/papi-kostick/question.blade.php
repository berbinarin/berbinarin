@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'soal psikotest',
    'active' => 'one psikotest',
])

@section('content')
    <div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">
        <form method="POST"
            action="{{ route('psikotest-paid.papi-kostick.submit', ['id' => $id, 'question_order' => $question_order]) }}">
            @csrf
        <input type="hidden" name="timeout" id="timeout" value="false">
            <!-- Background Image -->
            <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar"
                class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

            <!-- Container for Icons above Card -->
            <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
                <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
                    <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon"
                        class="w-8 h-8 rounded-full">
                    <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon"
                        class="w-8 h-8 rounded-full ml-2">
                </div>
            </div>
            <h1>Test 01</h1>

            <!-- Main Content Area -->
            <div class="relative z-10 w-3xl mx-auto bg-none rounded-lg p-6 mt-20" style="width: 750px;">

                <!-- Question Number Circle -->
                {{-- <div
                    class="absolute top-0 left-0 transform -translate-x-1/2 -translate-y-1/2 bg-amber-500 text-white rounded-full h-12 w-12 flex items-center justify-center text-lg font-bold">
                    {{ $question_order }}
                </div> --}}

<!-- Blue and Orange Cards in Horizontal Layout -->
<div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">

    <!-- Blue Card -->
    <label class="flex-1 rounded-lg p-4 my-8 cursor-pointer relative card"
        style="background-color: #3FA2F6; width: 100px; height: 150px; margin-top: 0px; transition: transform 0.2s ease;"
        onmouseover="this.style.boxShadow='0 6px 12px rgba(0, 125, 232, 0.6), 0 -6px 12px rgba(0, 125, 232, 0.6), -6px 0 12px rgba(0, 125, 232, 0.6), 6px 0 12px rgba(0, 125, 232, 0.6)';"
        onmouseout="this.style.boxShadow='none';"
        for="answer_a_{{ $question->id }}">
        <input type="radio" name="answer" id="answer_a_{{ $question->id }}" value="a" class="hidden" required>
        <div class="text-white" style="margin-left: 5px; margin-top: 20px; margin-right: 5px; height: 70px;">
            {{ $question->a }}
        </div>
        <!-- Circle Button for Blue Card -->
        <div class="absolute bottom-2 right-2 w-5 h-5 rounded-full bg-white flex items-center justify-center"
            style="border: 2px solid #3FA2F6; margin-top: 3%; margin-left: 85%;">
            <span class="hidden text-lg checkmark" style="color: #3FA2F6; font-size: 12px;"><strong>&#10003;</strong></span>
        </div>
    </label>

    <!-- Orange Card -->
    <label class="flex-1 rounded-lg p-4 my-8 cursor-pointer relative card"
        style="background-color: #FBB03B; width: 100px; height: 150px; transition: transform 0.2s ease;"
        onmouseover="this.style.boxShadow='0 8px 16px rgba(251, 176, 59, 0.6), 0 -8px 16px rgba(251, 176, 59, 0.6), -8px 0 16px rgba(251, 176, 59, 0.6), 8px 0 16px rgba(251, 176, 59, 0.6)';"
        onmouseout="this.style.boxShadow='none';"
        for="answer_b_{{ $question->id }}">
        <input type="radio" name="answer" id="answer_b_{{ $question->id }}" value="b" class="hidden">
        <div class="text-white" style="margin-left: 5px; margin-top: 20px; margin-right: 5px; height: 70px;">
            {{ $question->b }}
        </div>
        <!-- Circle Button for Orange Card -->
        <div class="absolute bottom-2 right-2 w-5 h-5 rounded-full bg-white flex items-center justify-center"
            style="border: 2px solid #FBB03B; margin-top: 3%; margin-left: 85%;">
            <span class="hidden text-lg checkmark" style="color: #FBB03B; font-size: 12px;"><strong>&#10003;</strong></span>
        </div>
    </label>
</div>


                <script>
                    document.querySelectorAll('input[type="radio"]').forEach(radio => {
                        radio.addEventListener('change', function() {
                            // Hide all checkmarks
                            document.querySelectorAll('.checkmark').forEach(checkmark => {
                                checkmark.classList.add('hidden');
                            });

                            // Show the checkmark for the selected option
                            if (this.checked) {
                                this.closest('label').querySelector('.checkmark').classList.remove('hidden');
                            }
                        });
                    });

                    // Add hover effect to card labels
                    document.querySelectorAll('.card').forEach(card => {
                        card.addEventListener('mouseover', function() {
                            this.style.transform = 'scale(1.03)';
                        });
                        card.addEventListener('mouseout', function() {
                            this.style.transform = 'scale(1)';
                        });
                    });
                </script>

        <!-- Timer -->
        <div class="mt-4 mb-2 text-center z-20">
            <span id="timer" class="text-xl font-semibold text-red-600"></span>
        </div>

                <!-- Percentage Line and Next Button -->
                <div class="flex bg-white rounded-md items-center justify-between mt-10"
                    style="height: 40px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="flex items-center ml-6" style="height: 3px; width: 510px; position: relative;">
                        <!-- Black background line -->
                        <div class="bg-black rounded-full" style="height: 3px; width: 100%;"></div>
                        <!-- Blue percentage line -->
                        <div class="bg-blue-500 rounded-full"
                            style="height: 3px; width: {{ $progress }}%; position: absolute; top: 0; left: 0;"></div>
                        <!-- Small circle at the end of the blue line -->
                        <div class="bg-blue-500 rounded-full"
                            style="height: 10px; width: 10px; position: absolute; top: -4px; left: {{ $progress }}%; transform: translateX(-50%);">
                        </div>
                        <!-- Percentage text -->
                        <span class="text-sm text-black"
                            style="position: absolute; top: 1px; left: {{ $progress }}%; transform: translateX(-50%); font-size: 8px;">{{ $progress }}%</span>
                    </div>
                    <button type="submit"
                        class="px-4 py-1 bg-blue-500 text-sm mr-2 text-white rounded-lg hover:bg-blue-600">Soal
                        Berikutnya</button>
                </div>
            </div>
        </form>
    </div>
<script>
    // Total durasi (misalnya 90 menit = 90 * 60 * 1000 milidetik)
    const totalDuration = 45 * 60 * 1000;

    let startTime = localStorage.getItem('startTimePapiKostick') || new Date().getTime();
    localStorage.setItem('startTimePapiKostick', startTime);

    const timerElement = document.getElementById('timer');

    const timerInterval = setInterval(() => {
        const now = new Date().getTime();
        const elapsed = now - startTime;
        const remaining = totalDuration - elapsed;

        if (remaining <= 0) {
            clearInterval(timerInterval);
            localStorage.removeItem('startTimePapiKostick');
            document.getElementById('timeout').value = true;
            document.querySelector('form').submit();
        }

        const minutes = Math.floor((remaining % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((remaining % (1000 * 60)) / 1000);

        console.log("Waktu sisa",minutes+ '' + seconds)

        // timerElement.innerHTML = `Waktu Tersisa: ${minutes}m ${seconds}s`;
    }, 1000);
</script>
@endsection
