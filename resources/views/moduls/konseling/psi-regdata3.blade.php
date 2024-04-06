@extends('moduls.konseling.layouts.main', [
'title' => 'Daftar Konseling',
'active' => 'Register',
])

@section('content')
<section>
    <div id="data3">
        <div class="flex items-center justify-center w-screen lg:w-screen h-full">
            <div class="flex flex-col w-full h-screen sm:flex-row">
                <div class="w-full md:pt-5 px-7 lg:px-16 lg:ml-0 items-center">
                    <div class="-ml-3 mt-0 sm:ml-0">
                        <a href="{{ route('psi-regData2') }}">
                            <i class='bx bx-arrow-back text-[35px] text-primary ml-0 mt-2 text-left'></i>
                        </a>
                    </div>
                    <div class="flex flex-col gap-3 -mt-5 mr-5 z-40 relative justify-self-center">
                        <h2 class="text-black text-center mt-2 text-3xl font-semibold">Data Diri</h2>
                        <p class="text-center mt-2">Isilah formulir berikut ini dengan benar dan lengkap</p>
                    </div>
                    <form action="{{ route('post-psi-regData3') }}" method="POST">
                        @csrf
                        <div class="mt-6 mx-0 sm:mx-20 md:mx-30 lg:mx-0 justify-items-start">
                            <div class="anak-ke mt-4">
                                <p class="text-left text-[#555555]">Anak Ke- Dari Berapa Bersaudara</p>
                                <input type="text" placeholder="Anak ke 2 dari 3 bersaudara" name="posisi_anak"
                                    value="{{ old('posisi_anak', $konselling->posisi_anak ?? '') }}"
                                    class="bg-[#F1F3F6] text-[#555555] border-2 h-11 w-full rounded-lg px-3 mt-1"
                                    required>
                            </div>
                            <div class="pendidikan mt-4">
                                <p class="text-left text-[#555555]">Pendidikan Saat Ini</p>
                                <input type="text" placeholder="S1 Universitas Airlangga (semester 2)" name="pendidikan"
                                    value="{{ old('pendidikan', $konselling->pendidikan ?? '') }}"
                                    class="bg-[#F1F3F6] text-[#555555] border-2 h-11 w-full rounded-lg px-3 mt-1"
                                    required>
                            </div>
                            <div class="workex mt-4">
                                <p class="text-left text-[#555555]">Riwayat Pekerjaan</p>
                                <input type="text" placeholder="Sales - PT. Berbinar Insightful Indonesia (2022)"
                                    name="riwayat_pekerjaan"
                                    value="{{ old('riwayat_pekerjaan', $konselling->riwayat_pekerjaan ?? '') }}"
                                    class="bg-[#F1F3F6] text-[#555555] border-2 h-11 w-full rounded-lg px-3 mt-1"
                                    required>
                            </div>
                            <div class="hobby mt-4">
                                <p class="text-left text-[#555555]">Hobi</p>
                                <input type="text" placeholder="Masukkan Hobi Anda" name="hobi"
                                    value="{{ old('hobi', $konselling->hobi ?? '') }}"
                                    class="bg-[#F1F3F6] text-[#555555] border-2 h-11 w-full rounded-lg px-3 mt-1"
                                    required>
                            </div>
                            <div class="sosact mt-4">
                                <p class="text-left text-[#555555]">Kegiatan Sosial Yang diikuti</p>
                                <input type="text" placeholder="Pengabdian Pemuda Masa Kini (2023)"
                                    name="kegiatan_sosial"
                                    value="{{ old('kegiatan_sosial', $konselling->kegiatan_sosial ?? '') }}"
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
                    <p class="text-center mt-12 mb-6 text-white">Copyright © PT Berbinar Insightful Indonesia. 2023</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection