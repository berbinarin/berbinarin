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
                                {{-- <div class="metodekons mt-4">
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
                                        <option value="Online"
                                            {{ !empty($konselling) && $konselling->daerah == 'Online' ? 'selected' : '' }}>
                                            Online</option>
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
                                </div> --}}
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
                                    <p class="text-left text-[#555555]">Derah Konselling</p>
                                    <select name="daerah" id="daerah"
                                        class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-full rounded-lg px-3 mt-1">
                                        <option value="default" selected disabled>Pilih Daerah Konselling</option>
                                        <option value="Online"
                                            {{ !empty($konselling) && $konselling->daerah == 'Online' ? 'selected' : '' }}>
                                            Online</option>
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
                                        <option value="Jakarta"
                                            {{ !empty($konselling) && $konselling->daerah == 'Jakarta' ? 'selected' : '' }}>
                                            Jakarta</option>
                                        <option value="Malang"
                                            {{ !empty($konselling) && $konselling->daerah == 'Malang' ? 'selected' : '' }}>
                                            Malang</option>
                                    </select>
                                </div>

                                <div class="sesi mt-4">
                                    <p class="text-left text-[#555555]">Sesi</p>
                                    <select name="sesi" id="sesi"
                                        class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-full rounded-lg px-3 mt-1"
                                        onchange="updateHarga()">
                                        <option value="1"
                                            {{ !empty($konselling) && $konselling->sesi == 1 ? 'selected' : '' }}>1 Jam
                                        </option>
                                        <option value="2"
                                            {{ !empty($konselling) && $konselling->sesi == 2 ? 'selected' : '' }}>2 Jam
                                        </option>
                                        <option value="3"
                                            {{ !empty($konselling) && $konselling->sesi == 3 ? 'selected' : '' }}>3 Jam
                                        </option>
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

        document.getElementById('sesi').addEventListener('change', function() {
            updateHarga();
        });

        // function handleMetodeChange(selectElement) {
        //     var daerahContainer = document.getElementById('daerah-container');
        //     var daerahSelect = document.getElementById('daerah');
        //     if (selectElement.value === 'offline') {
        //         daerahContainer.style.display = 'block';
        //     } else {
        //         daerahContainer.style.display = 'none';
        //         daerahSelect.value = 'Online'; // Set daerah to "Online" for online method
        //     }
        // }

        function handleMetodeChange(selectElement) {
            var daerahContainer = document.getElementById('daerah-container');
            var daerahSelect = document.getElementById('daerah');
            var daerahOptions = daerahSelect.getElementsByTagName('option');

            if (selectElement.value === 'offline') {
                daerahContainer.style.display = 'block';

                // Show all options except 'Online'
                for (var i = 0; i < daerahOptions.length; i++) {
                    var option = daerahOptions[i];
                    option.style.display = (option.value === 'Online' || option.value === 'default') ? 'none' : 'block';
                }

                // Reset daerah to default if currently set to 'Online'
                if (daerahSelect.value === 'Online' || daerahSelect.value === 'default') {
                    daerahSelect.value = 'default';
                }
            } else if (selectElement.value === 'online') {
                daerahContainer.style.display = 'none';

                // Set daerah to 'Online'
                daerahSelect.value = 'Online';
            } else {
                daerahContainer.style.display = 'none';
                daerahSelect.value = 'default';
            }
        }

        function updateHarga() {
            var metode = document.getElementById('metode').value;
            var tanggal = document.getElementById('jadwal_tanggal').value;
            var sesi = document.getElementById('sesi').value;
            var hargaInput = document.getElementById('harga');

            if (tanggal && metode && sesi) {
                var selectedDate = new Date(tanggal);
                var dayIndex = selectedDate.getDay();
                var isWeekend = (dayIndex == 6 || dayIndex == 0);
                var isWeekday = !isWeekend;

                var harga = 0;
                if (metode === 'online') {
                    if (isWeekday) {
                        if (sesi == 1) harga = 150000;
                        else if (sesi == 2) harga = 255000;
                        else if (sesi == 3) harga = 360000;
                    } else {
                        if (sesi == 1) harga = 200000;
                        else if (sesi == 2) harga = 340000;
                        else if (sesi == 3) harga = 500000;
                    }
                } else if (metode === 'offline') {
                    if (isWeekday) {
                        if (sesi == 1) harga = 175000;
                        else if (sesi == 2) harga = 298000;
                        else if (sesi == 3) harga = 421000;
                    } else {
                        if (sesi == 1) harga = 225000;
                        else if (sesi == 2) harga = 382000;
                        else if (sesi == 3) harga = 540000;
                    }
                }

                hargaInput.value = harga;
            } else {
                hargaInput.value = ''; // Clear the harga input if either metode, tanggal, or sesi is not selected
            }
        }
    </script>
    <script>
        // Mendapatkan tanggal saat ini
        const now = new Date();
    
        // Menambahkan 7 hari ke tanggal sekarang
        now.setDate(now.getDate() + 7);
        
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0'); // Bulan dalam format dua digit
        const day = String(now.getDate()).padStart(2, '0'); // Tanggal dalam format dua digit
    
        // Format tanggal sesuai format min yang diharapkan untuk input type date (YYYY-MM-DD)
        const minDate = `${year}-${month}-${day}`;
        
        // Mengatur atribut min pada input date
        document.getElementById("jadwal_tanggal").setAttribute("min", minDate);
    </script>
@endsection


{{-- Extend the main layout
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
                                <div class="sesi mt-4">
                                    <p class="text-left text-[#555555]">Sesi</p>
                                    <select name="sesi" id="sesi"
                                        class="bg-[#F1F3F6] text-[#555555] border-2 h-12 w-full rounded-lg px-3 mt-1"
                                        onchange="updateHarga()">
                                        <option value="1"
                                            {{ !empty($konselling) && $konselling->sesi == 1 ? 'selected' : '' }}>1 Jam
                                        </option>
                                        <option value="2"
                                            {{ !empty($konselling) && $konselling->sesi == 2 ? 'selected' : '' }}>2 Jam
                                        </option>
                                        <option value="3"
                                            {{ !empty($konselling) && $konselling->sesi == 3 ? 'selected' : '' }}>3 Jam
                                        </option>
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

        document.getElementById('sesi').addEventListener('change', function() {
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
            var sesi = document.getElementById('sesi').value;
            var hargaInput = document.getElementById('harga');

            if (tanggal && metode && sesi) {
                var selectedDate = new Date(tanggal);
                var dayIndex = selectedDate.getDay();
                var isWeekend = (dayIndex == 6 || dayIndex == 0);
                var isWeekday = !isWeekend;

                var harga = 0;
                if (metode === 'online') {
                    if (isWeekday) {
                        if (sesi == 1) harga = 150000;
                        else if (sesi == 2) harga = 255000;
                        else if (sesi == 3) harga = 360000;
                    } else {
                        if (sesi == 1) harga = 200000;
                        else if (sesi == 2) harga = 340000;
                        else if (sesi == 3) harga = 500000;
                    }
                } else if (metode === 'offline') {
                    if (isWeekday) {
                        if (sesi == 1) harga = 175000;
                        else if (sesi == 2) harga = 298000;
                        else if (sesi == 3) harga = 421000;
                    } else {
                        if (sesi == 1) harga = 225000;
                        else if (sesi == 2) harga = 382000;
                        else if (sesi == 3) harga = 540000;
                    }
                }

                hargaInput.value = harga;
            } else {
                hargaInput.value = ''; // Clear the harga input if either metode, tanggal, or sesi is not selected
            }
        }
    </script>
@endsection --}}
