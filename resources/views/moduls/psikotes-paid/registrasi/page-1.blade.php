@extends('moduls.psikotes.layouts.main', [
'title' => 'Psikotest Berbinar',
'active' => 'Registrasi',
'page' => 'Sign Up'])

@section('content')
<section class="bg-[#F5F7F9]">
    <div class="flex bg-[#F5F7F9]">
        <div class="flex flex-col justify-center items-center">
            <div class="flex justify-center">
                <img src="{{ asset('assets/images/logo-psikotes.png') }}" alt="" title="" class="w-fit absolute ml-0 md:-ml-60 top-5">
            </div>
            <form action="{{ route('psikotest-paid.postRegPage1') }}" method="POST">
                @csrf
                <div class="flex m-5 md:m-0 p-5">

                    <div class="flex flex-col px-5 md:px-20">
                        <div class="mt-10 hidden md:block">
                            <h1 class="text-5xl text-black font-extrabold">Registrasi</h1>
                        </div>

                        {{-- IMG MOBILE --}}
                        <div class="flex w-fit mx-auto mt-16 block md:hidden">
                            <img src="{{ asset('assets/images/psikotes/signup.png') }}" alt="" title="" class="w-[300px] h-fit">
                        </div>

                        <div class="flex flex-col md:flex-row w-screen mt-5">
                            <h1 class="flex md:hidden text-5xl text-black font-extrabold mb-5">Registrasi</h1>
                            <div class="w-screen md:w-1/2 pr-0 md:pr-10">
                                <div class="mt-5 md:mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="name" class="block text-lg font-semibold leading-6 text-black">Nama</label>
                                        <div class="mt-2">
                                            <input type="text" name="fullname" id="fullname" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="email" class="block text-lg font-semibold leading-6 text-black">Email</label>
                                        <div class="mt-2">
                                            <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="gender" class="block text-lg font-semibold leading-6 text-black">Jenis
                                            Kelamin</label>
                                        <div class="mt-2">
                                            <select id="gender" name="gender" autocomplete="gender" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                                                <option value="laki-laki">Laki-Laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="age" class="block text-lg font-semibold leading-6 text-black">Usia</label>
                                        <div class="mt-2">
                                            <input type="number" name="age" id="age" autocomplete="age" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="dimicile" class="block text-lg font-semibold leading-6 text-black">Domisili</label>
                                        <div class="mt-2">
                                            <input type="text" name="domicile" id="domicile" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="phone-input" class="block text-lg font-semibold leading-6 text-black">Nomor
                                            Telepon</label>
                                        <div class="mt-2">
                                            <input type="text" name="phone_number" id="phone-input" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6">
                                        </div>
                                    </div>

                                </div>
                                <div class="flex flex-row w-full gap-5 mt-8 mb-10 md:mb-0">
                                    <div class="flex flex-row px-5 py-2 w-auto bg-primary hover:shadow-lg hover:shadow-cyan-300/80 rounded-full">
                                        <button type="submit" class="flex flex-row text-base text-white font-semibold duration-500">Selanjutnya
                                            <span class="py-[5px] pl-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
                                                    <path fill="white" d="M8.6 3.4L14.2 9H2v2h12.2l-5.6 5.6L10 18l8-8l-8-8z" />
                                                </svg></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- IMG DESKTOP --}}
                            <div class="w-1/2">
                                <img src="{{ asset('assets/images/psikotes/signup.png') }}" alt="" title="" class="w-fit h-fit hidden md:block">
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- POP UP FEEDBACK PSIKOTES --}}
    <section class="w-screen">
        <div id="close-psikotes" class="modal w-screen fixed top-0 left-0 right-0 z-50 flex justify-center items-center hidden">
            <div class="modal-dialog w-[900px] overflow-auto m-4 modal-xl bg-linear rounded-xl shadow-lg p-4" style="background-color: white">
                <div class="modal overflow-auto">
                    <div class="px-4">
                        <div class="text-center">
                            <h1 class="text-black text-center text-3xl font-semibold mt-5">Syarat dan
                                Ketentuan</h1>
                            <p class="font-medium mt-2">Harap membaca syarat dan ketentuan berikut sebelum mendaftar</p>
                            <div class="text-justify text-pretty font-light text-black px-16">
                                <ul class="list-decimal list-outside leading-relaxed mt-10">
                                    <li>Setelah mengisi form, calon pendaftar akan diarahkan untuk melakukan
                                        <span class="font-bold">pembayaran 100% </span>ke <span class="font-bold">
                                            Bank Mandiri </span> dengan no rekening <span class="font-bold">
                                            1400020763711 </span> a.n. Berbinar Insightful
                                        Indonesia dengan aturan transfer 1x24 jam setelah pengisian form.
                                    </li>
                                    <li>Jika calon peserta tes <span class="font-bold"> tidak membalas pesan
                                        </span> admin dalam waktu 1x24 jam setelah pengisian form, maka
                                        pendaftaran oleh calon peserta tes secara <span class="font-bold">
                                            otomatis dibatalkan </span>.</li>
                                    <li>Jika calon peserta tes <span class="font-bold"> tidak membalas pesan
                                        </span> admin dalam 1x24 jam, jadwal yang sudah ditentukan oleh klien
                                        <span class="font-bold"> berhak untuk dirubah oleh Tim Berbinar </span>
                                        dan <span class="font-bold"> kesepakatan dari klien </span>.
                                    </li>
                                    <li>Jika calon peserta tes <span class="font-bold"> tidak membalas pesan
                                        </span> admin dalam 2x24 jam setelah melakukan pembayaran, <span class="font-bold"> pembayaran dianggap hangus </span>.</li>
                                    <li>Calon peserta tes <span class="font-bold"> dapat mengajukan pembatalan
                                        </span> layanan psikotes dalam kurun waktu 1x24 jam setelah proses
                                        admnistrasi dan dana yang telah dibayarkan akan <span class="font-bold">
                                            dikembalikan 100% </span>.</li>
                                    <li>Setelah <span class="font-bold"> selesai melaksanakan psikotes </span>,
                                        peserta akan dikirimkan hasil psikotesnya dengan jangka waktu tertentu.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-5 px-16">
                                <p class="text-left">Jika ada yang ingin ditanyakan, silakan menghubungi CP: <span class="text-primary underline underline-offset-2"><a aria-label="Chat on WhatsApp" href="https://wa.me/632351088413">
                                            wa.me/632351088413
                                            (Diah)</a></span></p>
                            </div>
                        </div>
                        <div class="modal-footer flex w-100 justify-center items-center p-5 mt-4 mx-8 gap-4">
                            <div class="flex text-center text-md-end ">
                                <a href="{{ route('psikotestSignUp') }}" class="button hidden md:block px-5 py-2 font-semibold text-white bg-primary border-white border-2 rounded-full mr-4 hover:bg-white hover:border-primary hover:text-primary w-fit">Oke</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</section>

@endsection