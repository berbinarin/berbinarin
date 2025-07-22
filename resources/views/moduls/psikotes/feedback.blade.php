@extends('landing.layouts.app', [
'title' => 'Psikotest Berbinar',
'active' => 'Test',
'page' => 'Feedback',
])

@section('content')
<sections>
    <div class="md:min-h-screen flex justify-center items-center">
        <div class="flex flex-col md:flex-row w-full md:max-w-[90%] md:mb-10 mt-20 md:mt-36 justify-center md:shadow-xl md:bg-white rounded-3xl p-7 sm:p-10 relative">
            <div class="lg:w-[95%]">

                <div class="flex flex-row justify-between mb-8">
                    <!-- Tombol Kembali -->
                    <a href="{{ route('product.psikotest.index') }}">
                        <div class="flex cursor-pointer items-center space-x-2 lg:order-1">
                            <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.svg") }}" alt="Left Arrow" class="h-3 w-auto lg:h-5" />
                            <p class="text-[15px] font-semibold text-[#3986A3] xl:text-lg">Kembali</p>
                        </div>
                    </a>
                </div>

                <h2 class="text-center text-2xl lg:text-4xl font-bold mb-1 lg:mb-12 bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text text-transparent">Gimana Perasaan Kamu Setelah <br> Mengikuti Psikotest Ini?</h2>

                <form action="{{ route('psikotest-free.result.show') }}"
                    method="GET" class="rating">
                    @csrf

                    <div class="rating_list flex lg:w-[80%] flex-row mb-1 lg:mb-12 justify-self-center justify-center md:gap-4">
                        <div class="rating_item flex flex-col items-center">
                            <input class="hidden peer" id="rating-5-1" type="radio" value="5" name="rating" required>
                            <label for="rating-5-1" class="cursor-pointer peer-checked:ring-4 peer-checked:ring-[#75BADB] rounded-full transition group relative w-16 h-16 md:w-24 md:h-32 lg:w-28 lg:h-32 xl:w-48 xl:h-48 flex items-center justify-center">
                                <span class="block w-full h-full relative">
                                    <!-- Default image -->
                                    <img src="{{ asset('assets/images/psikotes/feedback/1-wahoo.png') }}"
                                        alt="Sangat Senang"
                                        class="absolute inset-0 w-full h-full object-contain transition duration-200 peer-checked:opacity-0 group-hover:opacity-0" />
                                    <!-- Hover image -->
                                    <img src="{{ asset('assets/images/psikotes/feedback/1-wahoo2.png') }}"
                                        alt="Sangat Senang Hover"
                                        class="absolute inset-0 w-full h-full object-contain transition duration-200 opacity-0 peer-checked:opacity-100 group-hover:opacity-100 " />
                                </span>
                            </label>
                        </div>

                        <div class="rating_item flex flex-col items-center">
                            <input class="hidden peer" id="rating-4-1" type="radio" value="4" name="rating">
                            <label for="rating-4-1" class="cursor-pointer peer-checked:ring-4 peer-checked:ring-[#4CAF50] rounded-full transition group relative w-16 h-16 md:w-24 md:h-32 lg:w-28 lg:h-32 xl:w-48 xl:h-48 flex items-center justify-center">
                                <span class="block w-full h-full relative">
                                    <!-- Default image -->
                                    <img src="{{ asset('assets/images/psikotes/feedback/2-happy.png') }}"
                                        alt="Sangat Senang"
                                        class="absolute inset-0 w-full h-full object-contain transition duration-200 peer-checked:opacity-0 group-hover:opacity-0" />
                                    <!-- Hover image -->
                                    <img src="{{ asset('assets/images/psikotes/feedback/2-happy2.png') }}"
                                        alt="Sangat Senang Hover"
                                        class="absolute inset-0 w-full h-full object-contain transition duration-200  opacity-0 peer-checked:opacity-100 group-hover:opacity-100" />
                                </span>
                            </label>
                        </div>

                        <div class="rating_item flex flex-col items-center">
                            <input class="hidden peer" id="rating-3-1" type="radio" value="3" name="rating">
                            <label for="rating-3-1" class="cursor-pointer peer-checked:ring-4 peer-checked:ring-[#FFE500] rounded-full transition group relative w-16 h-16 md:w-24 md:h-32 lg:w-28 lg:h-32 xl:w-48 xl:h-48 flex items-center justify-center">
                                <span class="block w-full h-full relative">
                                    <!-- Default image -->
                                    <img src="{{ asset('assets/images/psikotes/feedback/3-neutral.png') }}"
                                        alt="Sangat Senang"
                                        class="absolute inset-0 w-full h-full object-contain transition duration-200 peer-checked:opacity-0 group-hover:opacity-0" />
                                    <!-- Hover image -->
                                    <img src="{{ asset('assets/images/psikotes/feedback/3-neutral2.png') }}"
                                        alt="Sangat Senang Hover"
                                        class="absolute inset-0 w-full h-full object-contain transition duration-200 opacity-0 peer-checked:opacity-100 group-hover:opacity-100" />
                                </span>
                            </label>
                        </div>

                        <div class="rating_item flex flex-col items-center">
                            <input class="hidden peer" id="rating-2-1" type="radio" value="2" name="rating">
                            <label for="rating-2-1" class="cursor-pointer peer-checked:ring-4 peer-checked:ring-[#FF543E] rounded-full transition group relative w-16 h-16 md:w-24 md:h-32 lg:w-28 lg:h-32 xl:w-48 xl:h-48 flex items-center justify-center">
                                <span class="block w-full h-full relative">
                                    <!-- Default image -->
                                    <img src="{{ asset('assets/images/psikotes/feedback/4-bummed.png') }}"
                                        alt="Sangat Senang"
                                        class="absolute inset-0 w-full h-full object-contain transition duration-200 peer-checked:opacity-0 group-hover:opacity-0" />
                                    <!-- Hover image -->
                                    <img src="{{ asset('assets/images/psikotes/feedback/4-bummed2.png') }}"
                                        alt="Sangat Senang Hover"
                                        class="absolute inset-0 w-full h-full object-contain transition duration-200 opacity-0 peer-checked:opacity-100 group-hover:opacity-100" />
                                </span>
                            </label>
                        </div>

                        <div class="rating_item flex flex-col items-center">
                            <input class="hidden peer" id="rating-1-1" type="radio" value="1" name="rating">
                            <label for="rating-1-1" class="cursor-pointer peer-checked:ring-4 peer-checked:ring-[#FF004F] rounded-full transition group relative w-16 h-16 md:w-24 md:h-32 lg:w-28 lg:h-32 xl:w-48 xl:h-48 flex items-center justify-center">
                                <span class="block w-full h-full relative">
                                    <!-- Default image -->
                                    <img src="{{ asset('assets/images/psikotes/feedback/5-pissed.png') }}"
                                        alt="Sangat Senang"
                                        class="absolute inset-0 w-full h-full object-contain transition duration-200 peer-checked:opacity-0 group-hover:opacity-0" />
                                    <!-- Hover image -->
                                    <img src="{{ asset('assets/images/psikotes/feedback/5-pissed2.png') }}"
                                        alt="Sangat Senang Hover"
                                        class="absolute inset-0 w-full h-full object-contain transition duration-200 opacity-0 peer-checked:opacity-100 group-hover:opacity-100" />
                                </span>
                            </label>
                        </div>

                    </div>

                    <div class="feedback mt-3 mx-0 sm:mx-20 md:mx-30 lg:mx-0 justify-items-center">
                        <div class="w-full">
                            <p class="text-[#333333] text-base mt-2 lg:text-lg">Apakah ada yang ingin SobatBinar bagikan?</p>
                        </div>
                        <div class="text-center justify-items-center w-full">
                            <textarea placeholder="Ceritakan pengalaman SobatBinar ketika mengisi tes psikotes ini" id="experience" name="experience"
                                class="mt-1 block w-full md:w-full px-2.5 py-1.5 lg:py-3 bg-gray-50 border border-gray-100 rounded-md shadow-md focus:outline-none h-32 lg:h-48 focus:ring-primary focus:border-primary text-sm lg:text-lg"></textarea>
                        </div>

                        <div class="flex flex-col w-full md:flex-row gap-5 justify-center items-center pt-8">
                            <button type="submit" class="rounded-lg bg-gradient-to-r mb-5 lg:mx-2 from-[#3986A3] to-[#225062] px-10 w-full lg:w-1/3 py-1.5 font-medium text-white text-lg max-sm:text-[15px]">Kirim</button>
                        </div>

                    </div>
                </form>
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
