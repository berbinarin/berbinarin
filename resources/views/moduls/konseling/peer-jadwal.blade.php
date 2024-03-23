@extends('moduls.konseling.layouts.main', [
'title' => 'Daftar Konseling',
'active' => 'Register',
])

@section('content')
<section>
    <div id="peer-jadwal">
        <div class="flex items-center justify-center w-screen lg:w-screen h-full">
            <div class="flex flex-col w-full h-screen sm:flex-row">
                <div class="w-full md:pt-5 pl-7 lg:pl-16 lg:ml-0 items-center">

                    <div class="-ml-3 sm:ml-0">
                        <a href="{{ route('layanan') }}">
                            <i class='bx bx-arrow-back text-[35px] text-primary ml-0 mt-2 text-left'></i>
                        </a>
                    </div>
                    <div class="flex flex-col gap-3 mr-5 z-40 relative justify-self-center">
                        <h2 class="text-black text-center mt-2 text-3xl font-semibold">Tentukan Jadwal</h2>
                        <p class="text-center mt-2">Isilah formulir berikut ini untuk menentukan jadwal</p>
                    </div>
                    <form>
                        <div class="mt-6 mx-0 sm:mx-20 md:mx-30 lg:mx-0 justify-items-start">
                            <div class="datekons mt-4">
                                <p class="text-left text-[#555555]">Tanggal Konseling</p>
                                <input type="date" placeholder=""
                                    class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-[300px] lg:w-[350px] rounded-lg p-4 mt-3"
                                    required>
                            </div>

                            <div class="daykons mt-4">
                                <p class="text-left text-[#555555]">Pilih Hari Konseling</p>
                                <select name="hari" id="hari"
                                    class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-[300px] lg:w-[350px] rounded-lg px-3 mt-1"
                                    required>
                                    <option value="default">Pilih Hari</option>
                                    <option value="senin">Senin</option>
                                    <option value="selasa">Selasa</option>
                                    <option value="rabu">Rabu</option>
                                    <option value="kamis">Kamis</option>
                                    <option value="jumat">Jumat</option>
                                    <option value="sabtu">Sabtu</option>
                                </select>
                            </div>

                            <div class="timekons mt-4">
                                <p for="jadwal" class="text-left text-[#555555]">Pilih Jam Konseling</p>
                                <select name="jadwal" id="jadwal"
                                    class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-[300px] lg:w-[350px] rounded-lg px-3 mt-1"
                                    required>
                                    <option value="">Pilih Jam</option>
                                    @foreach ($senin as $jadwal)
                                    <option value="{{ $jadwal }}">{{ $jadwal }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="metodekons mt-4">
                                <p class="text-left text-[#555555]">Metode Konseling</p>
                                <select name="metode" id="metode"
                                    class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-[300px] lg:w-[350px] rounded-lg px-3 mt-1"
                                    required>
                                    <option value="default">Pilih Metode Konseling</option>
                                    <option value="senin">Online</option>
                                    <option value="selasa">Offline</option>
                                </select>
                            </div>

                            <div class="text-start">
                                <button onclick="window.location.href='{{ route('peer-regData1') }}'"
                                    class="button-con-reg inline-block rounded-lg w-fit my-6 px-5 py-3 text-base font-medium text-white">
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

<script>
document.getElementById('hari').addEventListener('change', function() {
    var jadwalSelect = document.getElementById('jadwal');
    jadwalSelect.innerHTML = '<option value="">Pilih Jadwal</option>';
    switch (this.value) {
        case 'senin':
            @foreach($senin as $jadwal)
            jadwalSelect.innerHTML += '<option value="{{ $jadwal }}">{{ $jadwal }}</option>';
            @endforeach
            break;
        case 'selasa':
            @foreach($selasa as $jadwal)
            jadwalSelect.innerHTML += '<option value="{{ $jadwal }}">{{ $jadwal }}</option>';
            @endforeach
            break;
        case 'rabu':
            @foreach($rabu as $jadwal)
            jadwalSelect.innerHTML += '<option value="{{ $jadwal }}">{{ $jadwal }}</option>';
            @endforeach
            break;
        case 'kamis':
            @foreach($kamis as $jadwal)
            jadwalSelect.innerHTML += '<option value="{{ $jadwal }}">{{ $jadwal }}</option>';
            @endforeach
            break;
        case 'jumat':
            @foreach($jumat as $jadwal)
            jadwalSelect.innerHTML += '<option value="{{ $jadwal }}">{{ $jadwal }}</option>';
            @endforeach
            break;
        case 'sabtu':
            @foreach($sabtu as $jadwal)
            jadwalSelect.innerHTML += '<option value="{{ $jadwal }}">{{ $jadwal }}</option>';
            @endforeach
            break;
    }
});
</script>
@endsection