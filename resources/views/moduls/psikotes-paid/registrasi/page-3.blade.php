@extends('moduls.psikotes-paid.layouts.main', [
'title' => 'Psikotest Berbinar',
'active' => 'Registrasi',
'page' => 'Motive'])

@section('content')
<section>
    <div class="flex bg-[#F5F7F9]">
        <div class="flex flex-col justify-center items-center">
            <div class="flex justify-center">
                <!-- <a href="{{ route('psikotest-paid.showPage', [2]) }}" class="absolute left-10 top-5">
                    <i class='bx bx-arrow-back text-[35px] text-primary ml-0 mt-2 text-left'></i>
                </a> -->
                <img src="{{ asset('assets/images/logo-psikotes.png') }}" alt="" title=""
                    class="w-fit absolute ml-0 md:-ml-60 top-5">
            </div>
            <form action="{{ route('psikotest-paid.postRegPage3') }}" method="POST">
                @csrf
                <div class="flex p-5">

                    <div class="flex flex-col px-5 md:px-20">
                        <div class="mt-1.5 hidden md:block">
                            <h1 class="text-5xl text-black font-extrabold">Registrasi</h1>
                        </div>

                        {{-- IMG MOBILE --}}
                        <div class="flex w-fit mx-auto mt-16 block md:hidden">
                            <img src="{{ asset('assets/images/psikotes/signup.png') }}" alt="" title=""
                                class="w-[250px] h-fit mt-36">
                        </div>

                        <div class="flex flex-col md:flex-row w-screen mt-5">
                            <h1 class="flex md:hidden text-3xl text-black font-extrabold mb-5">Registrasi</h1>
                            <div class="w-full md:w-1/2 pr-0 md:pr-24">
                                <div class="mt-5 md:mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="col-span-full">
                                        <label for="reason"
                                            class="block text-lg font-semibold leading-6 text-black">Alasan Mengikuti
                                            Psikotes</label>
                                        <div class="mt-2">
                                            <textarea id="reason" name="reason" rows="3"
                                                class="block w-full h-[200px] rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex flex-row w-full gap-5 my-10">
                                    <div
                                        class="flex flex-row px-5 py-2 w-auto bg-primary hover:shadow-lg hover:shadow-cyan-300/80 rounded-full">
                                        <button type="submit"
                                            class="flex flex-row text-lg text-white font-semibold duration-500">Kirim
                                            <span class="py-[5px] pl-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="1em" height="1em" viewBox="0 0 20 20">
                                                    <path fill="white"
                                                        d="M8.6 3.4L14.2 9H2v2h12.2l-5.6 5.6L10 18l8-8l-8-8z" />
                                                </svg></span>
                                        </button>
                                    </div>
                                </div>


                            </div>

                            <div class="w-1/2 ml-10 pl-10">
                                <img src="{{ asset('assets/images/psikotes/signup.png') }}" alt="" title=""
                                    class="w-fit h-fit hidden md:block -ml-6 -mt-16">
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection