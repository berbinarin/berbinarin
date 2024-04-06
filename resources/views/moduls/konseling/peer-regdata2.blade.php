@extends('moduls.konseling.layouts.main', [
'title' => 'Daftar Konseling',
'active' => 'Register',
])

@section('content')
<section>
    <div id="data2">
        <div class="flex items-center justify-center w-screen lg:w-screen h-full">
            <div class="flex flex-col w-full h-screen sm:flex-row">
                <div class="w-full md:pt-5 px-7 lg:px-16 lg:ml-0 items-center">
                    <div class="-ml-3 mt-0 sm:ml-0">
                        <a href="{{ route('peer-regData1') }}">
                            <i class='bx bx-arrow-back text-[35px] text-primary ml-0 mt-2 text-left'></i>
                        </a>
                    </div>
                    <div class="flex flex-col gap-3 -mt-5 mr-5 z-40 relative justify-self-center">
                        <h2 class="text-black text-center mt-2 text-3xl font-semibold">Data Diri</h2>
                        <p class="text-center mt-2">Isilah formulir berikut ini dengan benar dan lengkap</p>
                    </div>
                    <form action="{{ route('post-peer-regData2') }}" method="POST">
                        @csrf
                        <div class="mt-6 mx-0 sm:mx-20 md:mx-30 lg:mx-0 justify-items-start">
                            <div class="placebirth mt-4">
                                <p class="text-left text-[#555555]">Tempat Lahir</p>
                                <input type="text" name="tempat_lahir"
                                    value="{{ old('tempat_lahir', $konselling->tempat_lahir ?? '') }}"
                                    placeholder="Masukkan Tempat Lahir"
                                    class="bg-[#F1F3F6] text-[#555555] border-2 h-11 w-full rounded-lg px-3 mt-1"
                                    required>
                            </div>
                            <div class="datebirth mt-4">
                                <p class="text-left text-[#555555]">Tanggal Lahir</p>
                                <input type="date" placeholder="" name="tanggal_lahir"
                                    value="{{ old('tanggal_lahir', $konselling->tanggal_lahir ?? '') }}"
                                    class="bg-[#F1F3F6] text-[#555555] border-2 h-11 w-full rounded-lg px-3 mt-1"
                                    required>
                            </div>
                            <div class="suku mt-4">
                                <p class="text-left text-[#555555]">Suku Bangsa</p>
                                <input type="text" placeholder="Jawa" name="suku"
                                    value="{{ old('suku', $konselling->suku ?? '') }}"
                                    class="bg-[#F1F3F6] text-[#555555] border-2 h-11 w-full rounded-lg px-3 mt-1"
                                    required>
                            </div>
                            <div class="maritalstat mt-4">
                                <p class="text-left text-[#555555]">Status Pernikahan</p>
                                @if(!is_null($konselling))
                                    <select name="status_pernikahan" id="status_pernikahan" class="bg-[#F1F3F6] text-[#555555] border-2 h-11 w-full rounded-lg px-3 mt-1">
                                        <option value="default" {{ $konselling->status_pernikahan == 'default' ? 'selected' : '' }} selected disabled>Pilih Status Pernikahan</option>
                                        <option value="Belum Menikah" {{ $konselling->status_pernikahan == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                        <option value="Sudah Menikah" {{ $konselling->status_pernikahan == 'Sudah Menikah' ? 'selected' : '' }}>Sudah Menikah</option>
                                    </select>
                                @else
                                    <select name="status_pernikahan" id="status_pernikahan" class="bg-[#F1F3F6] text-[#555555] border-2 h-11 w-full rounded-lg px-3 mt-1">
                                        <option value="default" selected disabled>Pilih Status Pernikahan</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                        <option value="Sudah Menikah">Sudah Menikah</option>
                                    </select>
                                @endif
                            </div>
                            <div class="dom mt-4">
                                <p class="text-left text-[#555555]">Alamat Domisili</p>
                                <input type="text" placeholder="Masukkan Alamat Domisili" name="alamat"
                                    value="{{ old('alamat', $konselling->alamat ?? '') }}"
                                    class="bg-[#F1F3F6] text-[#555555] border-2 h-11 w-full rounded-lg px-3 mt-1"
                                    required>
                            </div>
                            <div class="text-right">
                                <button type="submit"
                                    class="button-next inline-block rounded-lg w-fit my-6 px-5 py-3 text-base font-medium text-white">
                                    Selanjutnya
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