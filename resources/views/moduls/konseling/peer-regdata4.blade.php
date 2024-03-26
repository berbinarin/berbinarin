@extends('moduls.konseling.layouts.main', [
'title' => 'Daftar Konseling',
'active' => 'Register',
])

@section('content')
<section>
    <div id="data4">
        <div class="flex items-center justify-center w-screen lg:w-screen h-full">
            <div class="flex flex-col w-full h-screen sm:flex-row">
                <div class="w-full md:pt-5 px-7 lg:px-13 lg:ml-0 items-center">
                    <div class="-ml-3 mt-0 sm:ml-0">
                        <a href="{{ route('peer-regData3') }}">
                            <i class='bx bx-arrow-back text-[35px] text-primary ml-0 mt-2 text-left'></i>
                        </a>
                    </div>
                    <div class="flex flex-col gap-3 -mt-5 z-40 relative text-center justify-self-center">
                        <h2 class="text-black text-center mt-2 text-3xl font-semibold">Mari Cerita</h2>
                        <p class="text-center mt-2">Ceritakan hal yang ingin Anda konsultasikan</p>
                    </div>
                    <form action="{{ route('post-peer-regData4') }}" method="POST">
                        @csrf
                        <div class="mt-6 mx-0 sm:mx-20 md:mx-30 lg:mx-0 justify-items-center">
                            <div class="text-center justify-items-center">
                                <textarea placeholder="Tulislah hal yang ingin anda konsultasikan"
                                    name="cerita" value="{{ old('cerita', $konselling->cerita ?? '') }}"
                                    class="bg-[#F1F3F6] text-[#555555] border-2 w-full h-64 rounded-lg p-4 mt-3 mr-5 sm:mr-0"></textarea>
                            </div>
                            <div id="submit-konseling" class="text-right">
                                <button type="submit"
                                    class="button-con-reg inline-block rounded-lg w-fit my-6 px-5 py-3 text-base font-medium text-white">
                                    Kirim
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="w-screen hidden lg:block decoration__conreg">
                    <div class="flex mx-auto justify-center align-items-center">
                        <img src="{{ asset('assets/images/konseling/regist/Ilustrasi1.png') }}" alt="Ilustrasi-Test"
                            class="absolute mx-auto mt-14 w-[550px] z-10">
                        <div
                            class="decoration__img__conreg mx-auto rounded-3xl mt-[24rem] w-[500px] h-[200px] border-4 bg-white z-0">
                        </div>
                    </div>
                    <p class="text-center mt-12 text-white">Copyright © PT Berbinar Insightful Indonesia. 2023</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection