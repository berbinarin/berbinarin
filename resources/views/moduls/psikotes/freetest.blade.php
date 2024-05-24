@extends('moduls.psikotes.layouts.main', [
    'title' => 'Psikotest Berbinar',
    'active' => 'Test',
    'page' => 'Tes',
])

@section('content')
    <section>
        <div class="bg-primary">
            <div class="flex flex-col justify-start items-left mx-10 md:mx-20 mt-10">
                <div class="mt-5">
                    <h2 class="text-white font-semibold text-5xl">Psikotes Berbinar</h2>
                    <p class="text-white font-normal text-xl mt-3">Kerjakan soal dengan cermat dan teliti</p>
                </div>

                <div class="progress w-full h-5 my-10 bg-blue-200 rounded-full">
                    <div class="progress-bar w-[20px] h-5 bg-amber-500 rounded-full text-[13px] text-end" role="progressbar"
                        style="width: {{ $progress }}%;" aria-valuenow="{{ $progress }}" aria-valuemin="0"
                        aria-valuemax="100"><span class="font-semibold mr-3 text-white">{{ round($progress) }}%</span></div>
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

                                <div class="flex flex-row sm:flex-col">
                                    <div class="radio flex flex-col sm:flex-row inline-box gap-5 sm:gap-16 mt-6">
                                        <div class="radio-tab">
                                            <label for="answer">
                                                <input id="box-shadow" type="radio" name="answer" value="1" required
                                                    class="radio-spot rounded-full mr-3"><span
                                                    class="radio-txt">1</span></input>
                                            </label>
                                            </p>
                                        </div>

                                        <div class="radio-tab">
                                            <label for="answer">
                                                <input id="box-shadow" type="radio" name="answer" value="2" required
                                                    class="radio-spot rounded-full mr-3"><span
                                                    class="radio-txt">2</span></input>
                                            </label>
                                        </div>

                                        <div class="radio-tab">
                                            <label for="answer">
                                                <input id="box-shadow" type="radio" name="answer" value="3" required
                                                    class="radio-spot rounded-full mr-3"><span
                                                    class="radio-txt">3</span></input>
                                            </label>
                                        </div>

                                        <div class="radio-tab">
                                            <label for="answer">
                                                <input id="box-shadow" type="radio" name="answer" value="4" required
                                                    class="radio-spot rounded-full mr-3"><span
                                                    class="radio-txt">4</span></input>
                                            </label>
                                        </div>

                                        <div class="radio-tab flex flex-row md:flex-col">
                                            <label for="answer">
                                                <input id="box-shadow" type="radio" name="answer" value="5" required
                                                    class="radio-spot rounded-full mr-3"><span
                                                    class="radio-txt">5</span></input>
                                            </label>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-col sm:flex-row justify-between mt-5 pl-10 sm:pl-0 md:max-w-[32rem]">
                                        <p>Sangat <br>tidak sesuai </p>
                                        <p>Sangat sesuai</p>
                                    </div>

                                    <!-- <div class="button-test flex flex-col md:flex-row justify-between mt-10">
                                        <button class="px-3 md:px-10 py-3 text-primary font-medium bg-white rounded-full border-primary border-2 hover:bg-sky-950 hover:text-white">Kembali</button>
                                        <button type="submit"
                                            class="px-3 md:px-10 py-3 text-white font-medium bg-primary rounded-full hover:bg-amber-300 hover:text-primary md:w-auto mt-2 md:mt-0">Selanjutnya</button>
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
                    <img src="{{ asset('assets/images/psikotes/value.png') }}" alt="Ilustrasi-Test"
                        class="w-[500px] h-[530px] hidden lg:block -mt-20" data-aos="fade-left" data-aos-duration="1500">
                </div>
            </div>
        </div>
    </section>
@endsection
