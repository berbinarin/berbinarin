@extends('moduls.psikotes.layouts.main', [
'title' => 'Psikotest Berbinar',
'active' => 'Test',
'page' => 'Tes',
])

@section('content')
<section>
    <div class="bg-primary">
        <div class="flex flex-col justify-start items-left mx-10 md:mx-20 mt-8">
            <div class="mt-5">
                <h2 class="text-white font-semibold text-5xl">Psikotes Berbinar</h2>
                <p class="text-white font-normal text-xl mt-3">Kerjakan soal dengan cermat dan teliti</p>
            </div>

            <div class="progress w-full h-5 my-10 bg-blue-200 rounded-full">
                <div class="progress-bar w-[20px] h-5 bg-amber-500 ml-[1px] md:ml-0 rounded-full text-[13px] text-end"
                    role="progressbar" style="width: {{ $progress }}%;" aria-valuenow="{{ $progress }}"
                    aria-valuemin="0" aria-valuemax="100"><span
                        class="font-semibold ml-1 mr-2 text-white">{{ round($progress) }}%</span>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-start items-left">
                <div class="bg-primary t-container mr-5 mt-2.5 z-38 w-full max-w-3xl">
                    <div class="quest-container w-full bg-white rounded-3xl p-10">

                        <form
                            action=" {{ route('question.storeAnswer', ['test_id' => $test_id, 'question_order' => $question_order]) }}"
                            method="POST" class="flex flex-col">
                            @csrf
                            <p class="question text-lg md:text-2xl">
                                {{ $question->question_text }}
                            </p>

                            <div class="flex flex-row md:flex-col">
                                <div class="radio flex flex-col md:flex-row inline-box gap-5 md:gap-10 mt-6">
                                    <div class="radio-tab flex flex-row md:flex-col">
                                        <div class="mr-3 text-center">
                                            <input type="radio" name="answer" value="1" id="answer1"
                                                class="answer_input" required></input>
                                            <label for="answer1" class="answer_label"><i
                                                    class="fluent--number-circle-1-32-filled"></i></label>
                                        </div>
                                        <div class="">
                                            <p class="text-sm text-center">Sangat Tidak </br>Sesuai</p>
                                        </div>
                                    </div>

                                    <div class="radio-tab flex flex-row md:flex-col ">
                                        <div class="mr-3 text-center">
                                            <input type="radio" name="answer" value="2" class="answer_input"
                                                id="answer2" required></input>
                                            <label for="answer2" class="answer_label"><i
                                                    class="fluent--number-circle-2-32-filled"></i></label>
                                        </div>
                                        <div class="my-2 md:my-0">
                                            <p class="text-sm">Tidak Sesuai</p>
                                        </div>
                                    </div>

                                    <div class="radio-tab flex flex-row md:flex-col">
                                        <div class="mr-3 text-center">
                                            <input type="radio" name="answer" value="3" class="answer_input"
                                                id="answer3" required></input>
                                            <label for="answer3" class="answer_label"><i
                                                    class="fluent--number-circle-3-32-filled"></i></label>
                                        </div>
                                        <div class="my-2 md:my-0">
                                            <p class="text-sm">Ragu-ragu</p>
                                        </div>
                                    </div>

                                    <div class="radio-tab flex flex-row md:flex-col">
                                        <div class="mr-3 text-center">
                                            <input type="radio" name="answer" value="4" class="answer_input"
                                                id="answer4" required></input>
                                            <label for="answer4" class="answer_label"><i
                                                    class="fluent--number-circle-4-32-filled"></i></label>
                                        </div>
                                        <div class="my-2 md:my-0">
                                            <p class="text-sm">Tidak Sesuai</p>
                                        </div>
                                    </div>

                                    <div class="radio-tab flex flex-row md:flex-col">
                                        <div class="mr-3 text-center">
                                            <input type="radio" name="answer" value="5" class="answer_input"
                                                id="answer5" required></input>
                                            <label for="answer5" class="answer_label"><i
                                                    class="fluent--number-circle-5-32-filled"></i></label>
                                        </div>
                                        <div class="my-2 md:my-0">
                                            <p class="text-sm">Sangat Sesuai</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="flex flex-col sm:flex-row text-sm justify-between mt-2 pl-10 sm:pl-0 md:max-w-[32rem]">
                                    <p>Sangat <br>tidak sesuai </p>
                                    <p>Sangat sesuai</p>
                                </div> -->
                            </div>
                            <div class="button-test flex flex-col md:flex-row justify-between mt-10">
                                <!-- <button class="px-3 md:px-10 py-3 text-primary font-medium bg-white rounded-full border-primary border-2 hover:bg-sky-950 hover:text-white">Kembali</button> -->
                                <button type="submit"
                                    class="px-3 md:px-10 py-3 text-white font-medium bg-primary rounded-full hover:bg-amber-300 hover:text-primary md:w-auto mt-2 md:mt-0">Selanjutnya</button>
                            </div>
                        </form>
                    </div>
                    <p class="my-7 text-white text-lg font-light">Copyright © PT Berbinar Insightful Indonesia. 2023</p>
                </div>

                {{-- HERO IMG DESKTOP --}}
                @if ($progress < 14) <img src="{{ asset('assets/images/psikotes/progress1.png') }}" alt="Ilustrasi-Test"
                    class="w-[500px] h-[500px] hidden lg:block -mt-12" data-aos="fade-left" data-aos-duration="1500">
                    @elseif ($progress >= 14 && $progress < 34) <img
                        src="{{ asset('assets/images/psikotes/progress2.png') }}" alt="Ilustrasi-Test"
                        class="w-[500px] h-[500px] hidden lg:block -mt-12" data-aos="fade-left"
                        data-aos-duration="1500">
                        @elseif ($progress >= 34 && $progress < 55) <img
                            src="{{ asset('assets/images/psikotes/progress3.png') }}" alt="Ilustrasi-Test"
                            class="w-[500px] h-[500px] hidden lg:block -mt-12" data-aos="fade-left"
                            data-aos-duration="1500">
                            @elseif ($progress >= 55 && $progress < 77) <img
                                src="{{ asset('assets/images/psikotes/progress4.png') }}" alt="Ilustrasi-Test"
                                class="w-[500px] h-[500px] hidden lg:block -mt-12" data-aos="fade-left"
                                data-aos-duration="1500">
                                @elseif ($progress >= 77 && $progress < 100) <img
                                    src="{{ asset('assets/images/psikotes/progress5.png') }}" alt="Ilustrasi-Test"
                                    class="w-[500px] h-[500px] hidden lg:block -mt-12" data-aos="fade-left"
                                    data-aos-duration="1500">
                                    @else
                                    <img src="{{ asset('assets/images/psikotes/progress6.png') }}" alt="Ilustrasi-Test"
                                        class="w-[500px] h-[500px] hidden lg:block -mt-12" data-aos="fade-left"
                                        data-aos-duration="1500">
                                    @endif
            </div>
        </div>
    </div>
</section>

<script>
document.querySelectorAll('.answer_label').forEach(label => {
    label.addEventListener('click', function() {
        // Remove checked class from all labels
        document.querySelectorAll('.answer_label').forEach(lbl => lbl.classList.remove('checked'));

        // Add checked class to the clicked label
        this.classList.add('checked');
    });
});
</script>
@endsection