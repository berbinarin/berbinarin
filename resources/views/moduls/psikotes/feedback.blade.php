@extends('moduls.psikotes.layouts.main', [
    'title' => 'Psikotest Berbinar',
    'active' => 'Test',
    'page' => 'Feedback',
])

@section('content')
    <sections>
        <div class="h-full flex justify-center">
            <div class="w-full md:max-w-3xl flex flex-col bg-primary items-center z-38 py-14 px-10">
                <div class="quest-container w-full justify-center bg-white rounded-3xl p-7 sm:p-10">
                    <h2 class="text-center text-4xl font-bold mb-1">Feedback</h2>
                    <p class="text-center text-disabled text-base my-4">Ceritakan pengalaman SobatBinar <br>ketika
                        mengisi
                        tes
                        psikotes ini</p>

                    <form action="{{ route('feedback.store', ['user_id' => $user_id, 'test_id' => $test_id]) }}"
                        method="POST" class="rating">
                        @csrf
                        <div class="rating_list flex flex-row justify-center">
                            <div class="rating_item">
                                <input class="rating_input rating-5" id="rating-5-1" type="radio" value="5"
                                    name="rating">
                                <label class="rating_label rating-5 -pl-5 pr-3" for="rating-5-1"><i
                                        class="em em-wahoo"></i></label>
                                <p></p>
                            </div>
                            <div class="rating_item">
                                <input class="rating_input rating-3" id="rating-4-1" type="radio" value="4"
                                    name="rating">
                                <label class="rating_label rating-3 pr-3" for="rating-4-1"><i
                                        class="em em-happy"></i></label>
                            </div>
                            <div class="rating_item">
                                <input class="rating_input rating-3" id="rating-3-1" type="radio" value="3"
                                    name="rating">
                                <label class="rating_label rating-3 pr-3" for="rating-3-1"><i
                                        class="em em-neutral"></i></label>
                            </div>
                            <div class="rating_item">
                                <input class="rating_input rating-2" id="rating-2-1" type="radio" value="2"
                                    name="rating">
                                <label class="rating_label rating-2 pr-3" for="rating-2-1"><i
                                        class="em em-bummed"></i></label>
                            </div>
                            <div class="rating_item">
                                <input class="rating_input rating-1" id="rating-1-1" type="radio" value="1"
                                    name="rating">
                                <label class="rating_label rating-1 pr-3" for="rating-1-1"><i
                                        class="em em-pissed"></i></label>
                            </div>
                        </div>

                        <div class="feedback mt-3 mx-0 sm:mx-20 md:mx-30 lg:mx-0 justify-items-center">
                            <p class="text-center text-disabled text-base my-2">Apakah ada yang ingin SobatBinar bagikan?
                            </p>
                            <div class="text-center justify-items-center">
                                <textarea placeholder="Tulis disini" id="experience" name="experience"
                                    class="bg-[#F1F3F6] text-[#555555] border-2 w-5/6 h-48 rounded-lg p-4 mt-3 mr-0"></textarea>
                            </div>
                            <div id="submit-feedback" class="text-center pt-5">

                                <button type="submit"
                                    class="submit text-lg text-white bg-primary rounded-full font-semibold hover:bg-amber-300 hover:text-primary hover:font-semibold duration-500 px-10 py-2.5 w-auto">
                                    Kirim
                                </button>

                            </div>
                        </div>

                    </form>

                    <!-- <form action="" method="">
                                                                        @csrf
                                                                        <div class="feedback mt-3 mx-0 sm:mx-20 md:mx-30 lg:mx-0 justify-items-center">
                                                                            <p class="text-center text-disabled text-base my-2">Apakah ada yang ingin SobatBinar bagikan?
                                                                            </p>
                                                                            <div class="text-center justify-items-center">
                                                                                <textarea placeholder="Tulis disini" name="feedback" value=""
                                                                                    class="bg-[#F1F3F6] text-[#555555] border-2 w-5/6 h-48 rounded-lg p-4 mt-3 mr-0"></textarea>
                                                                            </div>
                                                                            <div id="submit-feedback" class="text-center pt-10">

                                                                                {{-- <a href="{{ route('result.show') }}" type="submit" --}}
                                                                                    class="submit text-lg text-white bg-primary rounded-full font-semibold hover:bg-amber-300 hover:text-primary hover:font-semibold duration-500 px-10 py-2.5 w-auto">
                                                                                    Kirim
                                                                                </a>

                                                                            </div>
                                                                        </div>
                                                                    </form> -->
                </div>
            </div>
        </div>
    </sections>

    <script>
        $('button.submit').disabled = true; // disable button on load

        // Enable button 
        function enable_submit() {
            $('button.submit').disabled = false;
            $('button.submit').addClass('not-disabled');
        }

        // Disable button
        function disable_submit() {
            $('button.submit').disabled = true;
            $('button.submit').removeClass('not-disabled');
        }

        // Display feedback after rating 
        $('.rating__input').on('click', function() {
            var rating = this['value'];
            $('.rating__label').removeClass('active');
            $(this).siblings('.rating__label').addClass('active');
            $('.feedback').css('display', "block");

            feedback_validate(rating);

        });

        // Run enable button function based on input
        $('.experience textarea').keyup(function() {
            if ($('.experience textarea').val().length > 3) {
                enable_submit();
            }
        });

        // Enable or disable button by validation
        function feedback_validate(val) {
            if (val <= 3) {
                disable_submit();

            } else if (val > 3) {
                enable_submit();
            }

        }
    </script>
@endsection
