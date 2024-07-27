@extends('moduls.psikotes.layouts.main', [
'title' => 'Psikotest Berbinar',
'active' => 'Login',
'page' => 'Login'])

@section('content')
<section>
    <div class="w-screen relative bg-[#BFE2F4]">
        <img src="{{ asset('assets/images/abstractwallpaper.png') }}" alt="" title="" class="w-screen h-screen">

        <div class="flex flex-col justify-center items-center">
            <div class="flex justify-center">
                <img src="{{ asset('assets/images/logo-psikotes.png') }}" alt="" title="" class="w-fit absolute top-5">
            </div>

            <div class="flex justify-center top-0 bottom-0">
                <div class="absolute top-0 bottom-0 my-36 w-[300px] h-[400px] md:w-[400px] md:h-[500px] backdrop-blur-md bg-white/10 shadow-lg ring-1 ring-black/5 gap-4 rounded-xl">
                    <div class="p-5">
                        <div class="mt-3">
                            <p class="text-2xl font-bold text-black">Login</p>

                        </div>
                        <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
                            <form class="space-y-6" method="POST" action="{{ route('psikotest-paid.login') }}">
                                @csrf
                                <div>
                                    <label for="email" class="block text-base font-semibold leading-6 text-black">Email
                                        address</label>
                                    <div class="mt-2">
                                        <input id="email" name="email" type="email" required class="block w-full rounded-full border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between">
                                        <label for="password" class="block text-base font-semibold leading-6 text-black">Password</label>
                                        <div class="text-sm">
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <input id="password" name="password" type="password" required class="block w-full rounded-full border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="justify-center items-center mx-auto">
                                    <button type="submit" class="flex w-fit justify-center rounded-full text-white bg-primary border-2 border-primary px-7 py-1.5 text-base font-semibold leading-6 shadow-sm hover:shadow-lg hover:shadow-primary-alt focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

@endsection