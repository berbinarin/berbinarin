@extends('moduls.konseling.layouts.main', [
'title' => 'Daftar Konseling',
'active' => 'Register',
])

@section('content')
<section>
    <div id="peer-jadwal">
        <div class="flex items-center justify-center w-screen lg:w-screen h-full">
            <div class="flex flex-col w-full h-screen sm:flex-row">
                <div class="w-full md:pt-5 px-7 lg:px-16 lg:ml-0 items-center">
                    <div class="-ml-3 sm:ml-0">
                        <a href="{{ route('layanan') }}">
                            <i class='bx bx-arrow-back text-[35px] text-primary ml-0 mt-2 text-left'></i>
                        </a>
                    </div>
                    <div class="flex flex-col gap-3 mr-5 z-40 relative justify-self-center">
                        <h2 class="text-black text-center mt-2 text-3xl font-semibold">Tentukan Jadwal</h2>
                        <p class="text-center mt-2">Isilah formulir berikut ini untuk menentukan jadwal</p>
                    </div>
                    <form action="{{ route('post-peer-jadwal') }}" method="POST">
                        @csrf
                        <div class="mt-6 mx-0 sm:mx-20 md:mx-30 lg:mx-0 justify-items-start">
                            <div class="datekons mt-4">
                                <p class="text-left text-[#555555]">Tanggal Konseling</p>
                                <input required name="jadwal_tanggal" id="jadwal_tanggal" value="{{ old('jadwal_tanggal', $konseling->jadwal_tanggal ?? '') }}" type="date" placeholder="" class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-full rounded-lg p-4 mt-3">
                            </div>
                            <div class="daykons mt-4">
                                <p class="text-left text-[#555555]">Pilih Hari Konseling</p>
                                <select disabled name="hari" id="hari" class="appearance-none bg-[#F1F3F6] text-[#555555] border-2 h-12 w-full rounded-lg px-3 mt-1">
                                    <option value="default">Pilih Hari</option>
                                    <option value="senin">Senin</option>
                                    <option value="selasa">Selasa</option>
                                    <option value="rabu">Rabu</option>
                                    <option value="kamis">Kamis</option>
                                    <option value="jumat">Jumat</option>
                                    <option value="sabtu">Sabtu</option>
                                    <option value="minggu">Minggu</option>
                                </select>
                            </div>
                            <div class="timekons mt-4">
                                <p for="jadwal" class="text-left text-[#555555]">Pilih Jam Konseling</p>
                                @if(!is_null($konseling))
                                <select name="jadwal_pukul" id="jadwal_pukul" class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-full rounded-lg px-3 mt-1">
                                    <option value="default" {{ $konseling->jadwal_pukul == 'default' ? 'selected' : '' }} selected disabled>Pilih Jam</option>
                                    @foreach ($senin as $jadwal)
                                    <option value="{{ $jadwal }}" {{ $konseling->jadwal_pukul == $jadwal ? 'selected' : '' }}>{{ $jadwal }}
                                    </option>
                                    @endforeach
                                </select>
                                @else
                                <select name="jadwal_pukul" id="jadwal_pukul" class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-full rounded-lg px-3 mt-1">
                                    <option value="default" selected disabled>Pilih Jam</option>
                                </select>
                                @endif
                            </div>
                            <div class="metodekons mt-4">
                                <p class="text-left text-[#555555]">Metode Konseling</p>
                                @if(!is_null($konseling))
                                <select name="metode" id="metode" class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-full rounded-lg px-3 mt-1">
                                    <option value="default" {{ $konseling->metode == 'default' ? 'selected' : '' }} selected disabled>Pilih Metode Konseling</option>
                                    <option value="online" {{ $konseling->metode == 'online' ? 'selected' : '' }}>
                                        Online</option>
                                    <option value="offline" {{ $konseling->metode == 'offline' ? 'selected' : '' }}>
                                        Offline</option>
                                </select>
                                @else
                                <select name="metode" id="metode" class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-full rounded-lg px-3 mt-1">
                                    <option value="default" selected disabled>Pilih Metode Konseling</option>
                                    <option value="online">Online</option>
                                    <option value="offline">Offline</option>
                                </select>
                                @endif
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="button-next inline-block rounded-lg w-fit my-6 px-5 py-3 text-base font-medium text-white">
                                Selanjutnya
                            </button>
                        </div>
                    </form>
                </div>
                <div class="w-screen hidden lg:block decoration__conreg">
                    <div class="flex mx-auto justify-center align-items-center">
                        <img src="{{ asset('assets/images/konseling/regist/Ilustrasi1.png') }}" alt="Ilustrasi-Test" class="absolute mx-auto mt-14 w-[550px] z-10">
                        <div class="decoration__img__conreg mx-auto rounded-3xl mt-[24rem] w-[500px] h-[200px] border-4 bg-white z-0">
                        </div>
                    </div>
                    <p class="text-center mt-12 text-white">Copyright © PT Berbinar Insightful Indonesia. 2023</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var selectedDate = new Date(document.getElementById('jadwal_tanggal').value);
        var dayIndex = selectedDate.getDay();

        if (dayIndex == 0) {
            document.getElementById('hari').selectedIndex = dayIndex + 7;
        } else {
            document.getElementById('hari').selectedIndex = dayIndex;
        }

        var jadwalSelect = document.getElementById('jadwal_pukul');
        jadwalSelect.innerHTML = '<option value="" selected disabled>Pilih Jam</option>';
        var selectedData = [];

        switch (dayIndex) {
            case 0: // Minggu
                selectedData = @json($minggu);
                break;
            case 1: // Senin
                selectedData = @json($senin);
                break;
            case 2: // Selasa
                selectedData = @json($selasa);
                break;
            case 3: // Rabu
                selectedData = @json($rabu);
                break;
            case 4: // Kamis
                selectedData = @json($kamis);
                break;
            case 5: // Jumat
                selectedData = @json($jumat);
                break;
            case 6: // Sabtu
                selectedData = @json($sabtu);
                break;
            case 7: // Minggu
                selectedData = @json($minggu);
                break;
        }
    });

    document.getElementById('jadwal_tanggal').addEventListener('change', function() {
        var selectedDate = new Date(this.value);
        var dayIndex = selectedDate.getDay();

        if (dayIndex == 0) {
            document.getElementById('hari').selectedIndex = dayIndex + 7;
        } else {
            document.getElementById('hari').selectedIndex = dayIndex;
        }

        var jadwalSelect = document.getElementById('jadwal_pukul');
        jadwalSelect.innerHTML = '<option value="" selected disabled >Pilih Jam</option>';
        var selectedData = [];

        switch (dayIndex) {
            case 0: // Minggu
                selectedData = @json($minggu);
                break;
            case 1: // Senin
                selectedData = @json($senin);
                break;
            case 2: // Selasa
                selectedData = @json($selasa);
                break;
            case 3: // Rabu
                selectedData = @json($rabu);
                break;
            case 4: // Kamis
                selectedData = @json($kamis);
                break;
            case 5: // Jumat
                selectedData = @json($jumat);
                break;
            case 6: // Sabtu
                selectedData = @json($sabtu);
                break;
        }

        selectedData.forEach(function(jadwal) {
            var waktuArrayMulai = jadwal.pukul_mulai.split(':');
            var jamMenitMulai = waktuArrayMulai[0] + ':' + waktuArrayMulai[1];
            var waktuArraySelesai = jadwal.pukul_selesai.split(':');
            var jamMenitSelesai = waktuArraySelesai[0] + ':' + waktuArraySelesai[1];
            jadwalSelect.innerHTML += '<option value="' + jamMenitMulai + ' - ' + jamMenitSelesai + '">' +
                jamMenitMulai + ' - ' + jamMenitSelesai + '</option>';
        });
    });
</script>

@endsection