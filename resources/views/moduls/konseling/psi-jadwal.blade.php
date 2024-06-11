{{-- Extend the main layout --}}
@extends('moduls.konseling.layouts.main', [
    'title' => 'Daftar Konseling',
    'active' => 'Register',
])

@section('content')
    <section>
        <div id="psi-jadwal">
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
                        <form action="{{ route('post-psi-jadwal') }}" method="POST">
                            @csrf
                            <div class="mt-6 mx-0 sm:mx-20 md:mx-30 lg:mx-0 justify-items-start">
                                <div class="datekons mt-4">
                                    <p class="text-left text-[#555555]">Tanggal Konseling</p>
                                    <input type="date" placeholder="" name="jadwal_tanggal"
                                        value="{{ old('jadwal_tanggal', $konselling->jadwal_tanggal ?? '') }}"
                                        class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-full rounded-lg px-3 mt-1"
                                        required id="jadwal_tanggal">
                                </div>
                                <div class="timekons mt-4">
                                    <p class="text-left text-[#555555]">Waktu Konseling</p>
                                    <input type="time" placeholder="" name="jadwal_pukul"
                                        value="{{ old('jadwal_pukul', $konselling->jadwal_pukul ?? '') }}"
                                        class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-full rounded-lg px-3 mt-1"
                                        required id="jadwal_pukul">
                                </div>
                                <div class="metodekons mt-4">
                                    <p class="text-left text-[#555555]">Metode Konseling</p>
                                    <select name="metode" id="metode"
                                        class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-full rounded-lg px-3 mt-1"
                                        onchange="handleMetodeChange(this)">
                                        <option value="default" selected disabled>Pilih Metode Konseling</option>
                                        <option value="online"
                                            {{ !empty($konselling) && $konselling->metode == 'online' ? 'selected' : '' }}>
                                            Online</option>
                                        <option value="offline"
                                            {{ !empty($konselling) && $konselling->metode == 'offline' ? 'selected' : '' }}>
                                            Offline</option>
                                    </select>
                                </div>
                                <div class="daerahkons mt-4" id="daerah-container"
                                    style="display: {{ !empty($konselling) && $konselling->metode == 'offline' ? 'block' : 'none' }};">
                                    <p class="text-left text-[#555555]">Pilih Daerah</p>
                                    <select name="daerah" id="daerah"
                                        class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-full rounded-lg px-3 mt-1">
                                        <option value="default" selected disabled>Pilih Daerah</option>
                                        <option value="Surabaya"
                                            {{ !empty($konselling) && $konselling->daerah == 'Surabaya' ? 'selected' : '' }}>
                                            Surabaya</option>
                                        <option value="Kediri"
                                            {{ !empty($konselling) && $konselling->daerah == 'Kediri' ? 'selected' : '' }}>
                                            Kediri</option>
                                        <option value="Sidoarjo"
                                            {{ !empty($konselling) && $konselling->daerah == 'Sidoarjo' ? 'selected' : '' }}>
                                            Sidoarjo</option>
                                        <option value="Denpasar"
                                            {{ !empty($konselling) && $konselling->daerah == 'Denpasar' ? 'selected' : '' }}>
                                            Denpasar</option>
                                        <option value="Samarinda"
                                            {{ !empty($konselling) && $konselling->daerah == 'Samarinda' ? 'selected' : '' }}>
                                            Samarinda</option>
                                        <option value="Kalimantan Utara (Tarakan)"
                                            {{ !empty($konselling) && $konselling->daerah == 'Kalimantan Utara (Tarakan)' ? 'selected' : '' }}>
                                            Kalimantan Utara (Tarakan)</option>
                                    </select>
                                </div>
                                <div class="hargakons mt-4">
                                    <p class="text-left text-[#555555]">Harga</p>
                                    <input readonly name="harga" id="harga"
                                        value="{{ old('harga', $konselling->harga ?? '') }}"
                                        class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-full rounded-lg px-3 mt-1">
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
                                class="absolute m-auto mt-36 w-[540px] z-10">
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
        document.addEventListener('DOMContentLoaded', function() {
            updateHarga();
        });

        document.getElementById('jadwal_tanggal').addEventListener('change', function() {
            updateHarga();
        });

        document.getElementById('metode').addEventListener('change', function() {
            handleMetodeChange(this);
            updateHarga();
        });

        function handleMetodeChange(selectElement) {
            var daerahContainer = document.getElementById('daerah-container');
            if (selectElement.value === 'offline') {
                daerahContainer.style.display = 'block';
            } else {
                daerahContainer.style.display = 'none';
                document.getElementById('daerah').selectedIndex = 0; // Reset daerah selection
            }
        }

        function updateHarga() {
            var metode = document.getElementById('metode').value;
            var tanggal = document.getElementById('jadwal_tanggal').value;
            var hargaInput = document.getElementById('harga');

            if (tanggal && metode) {
                var selectedDate = new Date(tanggal);
                var dayIndex = selectedDate.getDay();
                var isWeekend = (dayIndex == 6 || dayIndex == 0);
                var isWeekday = !isWeekend;

                if (metode === 'online') {
                    hargaInput.value = isWeekday ? 150000 : 200000;
                } else if (metode === 'offline') {
                    hargaInput.value = isWeekday ? 175000 : 225000;
                }
            } else {
                hargaInput.value = ''; // Clear the harga input if either metode or tanggal is not selected
            }
        }
    </script>
@endsection
