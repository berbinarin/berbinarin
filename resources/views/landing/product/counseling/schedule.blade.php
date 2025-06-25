@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Jadwal Konseling',
])

@section('content')
<style>
    .text-gradient {
        background: linear-gradient(to right, #F7B23B, #916823); 
        background-clip: text;
        -webkit-background-clip: text; 
        color: transparent; 

    }

      .custom-tooltip {
        background: #3986A3;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 12px;
        position: absolute;
        bottom: 5px;
        left: 50%;
        transform: translateX(-50%);
    }

    select {
    background-image: none !important;
}

</style>

<div class="sm:mt-36 mt-24 sm:mb-20 mb-8 sm:mx-24 mx-4 md:bg-white bg-none justify-center flex flex-col md:shadow-lg shadow-none rounded-2xl px-12 max-md:px-1 py-6">
    <div class="flex flex-row justify-between">
        <a href="{{ route('product.counseling.registration') }}">
            <div class="flex items-center space-x-2 cursor-pointer">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
                <p class="text-[15px] flex font-semibold text-[#3986A3]">Kembali <span class="sm:block hidden ml-0.5">pilih konseling</span></p>  
            </div>
        </a>

        <div class="flex items-center space-x-1 cursor-pointer" id="openModal">
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/sk-vector.png') }}" alt="Syarat & Ketentuan" class="h-3 w-auto">
            <p class="text-[15px] font-semibold text-[#3986A3]"><span class="sm:block hidden">Syarat & Ketentuan</span><span class="sm:hidden block">S&K</span></p>  
        </div>
        
        <div id="modal" class="fixed bg-gray-900 bg-opacity-50 backdrop-blur-md hidden inset-0 flex items-center justify-center z-30">
            <div class="h-auto max-h-screen w-[70%] overflow-y-auto rounded-2xl bg-white p-6 max-sm:px-2 shadow-md max-lg:h-[90%] max-sm:w-[86%]">
                <h1 class="bg-gradient-to-r from-amber-400 to-yellow-700 bg-clip-text text-transparent pb-4 text-center text-3xl font-bold max-sm:text-2xl">Syarat dan Ketentuan</h1>
                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/location.png') }}" alt="Lokasi" class="h-5 w-5 mt-0.5" />
                        <span class="font-semibold">Lokasi offline Konseling</span>
                    </div>
                    <ol class="list-decimal mt-1 space-y-1 pl-7">
                        <li class="max-sm:text-sm">a. Psikolog: Surabaya, Kediri, Sidoarjo, Denpasar, Samarinda, Jakarta, Malang, dan Kalimantan Utara (Tarakan)</li>
                        <li class="max-sm:text-sm">b. Peer Counselor: Bekasi, Jakarta, Tangerang Selatan, Padang, Wonogiri, dan Malang</li>
                    </ol>
                </div>

                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/payment.png') }}" alt="Pembayaran" class="h-5 w-5 mt-0.5" />
                        <span class="font-semibold">Pembayaran</span>
                    </div>
                    <ol class="list-decimal mt-1 space-y-1 pl-7">
                        <li class="max-sm:text-sm">Melakukan pembayaran ke Bank Mandiri dengan no rekening 1400020763711 a.n. Berbinar Insightful Indonesia dengan aturan transfer 1×24 jam.</li>
                    </ol>
                </div>

                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/chat.png') }}" alt="Pembalasan Pesan" class="h-5 w-5 mt-0.5" />
                        <span class="font-semibold">Pembalasan Pesan</span>
                    </div>
                    <ol class="list-decimal mt-1 space-y-1 pl-7">
                        <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 1×24 jam, pendaftaran oleh klien secara otomatis dibatalkan.</li>
                        <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 1×24 jam, jadwal yang sudah ditentukan oleh klien berhak untuk diubah oleh Tim Berbinar dan kesepakatan dari klien.</li>
                        <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 2×24 jam setelah melakukan pembayaran, pembayaran dianggap hangus.</li>
                    </ol>
                </div>

                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/cancel.png') }}" alt="Pengajuan Pembatalan" class="h-5 w-5 mt-0.5" />
                        <span class="font-semibold">Pengajuan Pembatalan</span>
                    </div>
                    <ol class="list-decimal mt-1 space-y-1 pl-7">
                        <li class="max-sm:text-sm">Pengajuan proses pembatalan layanan konseling dapat dilakukan dalam kurun waktu 1×24 jam setelah proses administrasi dan dana yang telah dibayarkan akan dikembalikan 100%.</li>
                    </ol>
                </div>


                <div class="mt-4 justify-center flex lg:gap-x-3">
                    <button id="closeModal" class="rounded-md border-[1.5px] border-[#225062] bg-transparent px-4 py-1.5 font-medium text-black max-sm:text-[15px]">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <h1 class="max-sm:text-[29px] text-3xl font font-semibold text-center max-sm:mx-2 text-gradient my-6">Isi Jadwal Konseling</h1>

<form method="POST" action="{{ route('product.counseling.submit_schedule') }}">
        @csrf
            <input type="hidden" name="kategori" id="kategori" value="{{ old('kategori', $jadwal['kategori'] ?? request('kategori') ?? 'psikolog') }}">        
            <div class="space-y-3 flex flex-col">
                <div class="flex flex-col space-y-1">
                    <p class="text-[#333333] sm:text-[17px] text-sm">Tanggal Konseling</p>
                    <div class="relative">
                        <input type="date" required name="jadwal_tanggal" value="{{ old('jadwal_tanggal', isset($jadwal['jadwal_tanggal']) ? \Carbon\Carbon::parse($jadwal['jadwal_tanggal'])->format('d-m-Y') : '') }}" id="tglkonseling" class="bg-[#F1F3F6] border-none md:shadow-none shadow-md rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="dd/mm/yy" readonly>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/date.png') }}" class="h-4 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2" onclick="document.getElementById('datepicker').focus()">
                    </div>
                </div>

            <div class="flex flex-col space-y-1">
                <p class="text-[#333333] sm:text-[17px] text-sm">Waktu Konseling</p>
                <div class="relative">
                    @if ($kategori === 'peer-counselor')
                        <input type="hidden" id="jadwal_pukul_value" name="jadwal_pukul" value="{{ old('jadwal_pukul', $jadwal['jadwal_pukul'] ?? '') }}">
                        <select id="waktukonseling" name="jadwal_pukul" required
                            class="bg-[#F1F3F6] border-none md:shadow-none shadow-md rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]">
                            <option value="">Pilih waktu</option>
                            {{-- Option diisi oleh JS --}}
                        </select>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/clock.png') }}"
                            class="h-4 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2"
                            onclick="document.getElementById('waktukonseling').focus()">
                    @else
                        <input type="text" id="waktukonseling" name="jadwal_pukul" required
                            value="{{ old('jadwal_pukul', $jadwal['jadwal_pukul'] ?? '') }}"
                            class="bg-[#F1F3F6] border-none md:shadow-none shadow-md rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]"
                            placeholder="--:--">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/clock.png') }}"
                            class="h-4 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2"
                            onclick="document.getElementById('waktukonseling').focus()">
                    @endif
                </div>
            </div>

            <div class="flex flex-col space-y-1">
                <p class="text-[#333333] sm:text-[17px] text-sm">Metode Konseling</p>
                <div class="relative">
                    <select name="metode" class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none">
                        <option selected disabled>Pilih metode konseling</option>
                        <option value="offline" {{ (old('metode', $jadwal['metode'] ?? '') == 'offline') ? 'selected' : '' }}>Offline</option>
                        <option value="online" {{ (old('metode', $jadwal['metode'] ?? '') == 'online') ? 'selected' : '' }}>Online</option>
                    </select>
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
                </div>
            </div>

             <div class="flex flex-col space-y-1" id="daerah-container" style="display: none;">
                <p class="text-[#333333] sm:text-[17px] text-sm">Daerah Konseling</p>
                <div class="relative">
                    <select name="daerah" id="daerah-select" class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none" required>
                        <option value="">Pilih Daerah Konseling</option>
                        @if(($kategori ?? 'psikolog') == 'peer-counselor')
                            <option value="Bekasi" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Bekasi' ? 'selected' : '' }}>Bekasi</option>
                            <option value="Jakarta" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Jakarta' ? 'selected' : '' }}>Jakarta</option>
                            <option value="Tangerang Selatan" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Tangerang Selatan' ? 'selected' : '' }}>Tangerang Selatan</option>
                            <option value="Padang" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Padang' ? 'selected' : '' }}>Padang</option>
                            <option value="Wonogiri" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Wonogiri' ? 'selected' : '' }}>Wonogiri</option>
                            <option value="Malang" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Malang' ? 'selected' : '' }}>Malang</option>
                        @else
                            <option value="Surabaya" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Surabaya' ? 'selected' : '' }}>Surabaya</option>
                            <option value="Kediri" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Kediri' ? 'selected' : '' }}>Kediri</option>
                            <option value="Sidoarjo" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Sidoarjo' ? 'selected' : '' }}>Sidoarjo</option>
                            <option value="Denpasar" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Denpasar' ? 'selected' : '' }}>Denpasar</option>
                            <option value="Makassar" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Makassar' ? 'selected' : '' }}>Makassar</option>
                            <option value="Samarinda" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Samarinda' ? 'selected' : '' }}>Samarinda</option>
                            <option value="Jakarta" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Jakarta' ? 'selected' : '' }}>Jakarta</option>
                            <option value="Malang" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Malang' ? 'selected' : '' }}>Malang</option>
                            <option value="Kalimantan Utara (Tarakan)" {{ old('daerah', $jadwal['daerah'] ?? '') == 'Kalimantan Utara (Tarakan)' ? 'selected' : '' }}>Kalimantan Utara (Tarakan)</option>                        
                        @endif
                    </select>
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
                </div>
            </div>
            
            <div class="flex flex-col space-y-1">
                <p class="text-[#333333] sm:text-[17px] text-sm">Sesi</p>
                <div class="relative">
                    <select name="sesi" class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none">
                        <option value="1" {{ (old('sesi', $jadwal['sesi'] ?? '') == '1') ? 'selected' : '' }}>1 Jam</option>
                        <option value="2" {{ (old('sesi', $jadwal['sesi'] ?? '') == '2') ? 'selected' : '' }}>2 Jam</option>
                        <option value="3" {{ (old('sesi', $jadwal['sesi'] ?? '') == '3') ? 'selected' : '' }}>3 Jam</option>
                    </select>
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
                </div>
            </div>

            <div class="flex flex-col space-y-1">
                <p class="text-[#333333] sm:text-[17px] text-sm">Harga</p>
                <div class="relative">
                    <input name="harga" value="{{ old('harga', $jadwal['harga'] ?? '') }}" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Rp 0,00" readonly>
                </div>
            </div>

            <div class="flex justify-center items-center pt-10">
                <button type="submit" class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-24 sm:w-auto w-full rounded-xl">Selanjutnya</button>
            </div>
        </div>
    </form>
</div>

@if ($kategori === 'peer-counselor')
<script>
    const jadwalPeers = @json($jadwalPeers);
    const hariMap = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

    function updateWaktuKonseling() {
        const tanggal = document.getElementById('tglkonseling').value;
        const waktuSelect = document.getElementById('waktukonseling');
        const inputHidden = document.getElementById('jadwal_pukul_value');
        waktuSelect.innerHTML = '<option value="">Pilih waktu</option>';
        inputHidden.value = ''; // reset value

        if (!tanggal) return;

        // Format tanggal dari flatpickr: d-m-Y
        const parts = tanggal.split('-');
        if (parts.length !== 3) return;
        const dateObj = new Date(parts[2], parts[1] - 1, parts[0]);
        const hari = hariMap[dateObj.getDay()];

        const jadwalHari = jadwalPeers.filter(j => j.hari === hari);

        jadwalHari.forEach(jadwal => {
            const mulai = jadwal.pukul_mulai.substring(0, 5);
            const selesai = jadwal.pukul_selesai.substring(0, 5);
            const waktu = `${mulai} - ${selesai}`;
            waktuSelect.innerHTML += `<option value="${waktu}">${waktu}</option>`;
        });

        // Jika sebelumnya sudah ada value, set ke input hidden
        if (waktuSelect.value) {
            inputHidden.value = waktuSelect.value;
        }
    }

    document.getElementById('tglkonseling').addEventListener('change', updateWaktuKonseling);
    document.addEventListener('DOMContentLoaded', updateWaktuKonseling);

    // Event listener agar input hidden selalu terisi saat user memilih waktu
    document.addEventListener('DOMContentLoaded', function() {
        const waktuSelect = document.getElementById('waktukonseling');
        const inputHidden = document.getElementById('jadwal_pukul_value');
        waktuSelect.addEventListener('change', function () {
            inputHidden.value = this.value;
        });
    });
</script>
@endif

<script>
        document.addEventListener("DOMContentLoaded", function () {
        // Get today's date
        const today = new Date();
        
        // Calculate minDate (7 days from today)
        const minDate = new Date();
        minDate.setDate(today.getDate() + 7);

        flatpickr("#tglkonseling", {
            dateFormat: "d-m-Y", 
            allowInput: true,
            minDate: minDate,
            disable: [
                {
                    from: "1900-01-01",
                    to: minDate.fp_incr(-1)
                }
            ],
            onOpen: function(selectedDates, dateStr, instance) {
                const tooltip = document.createElement('span');
                tooltip.classList.add('custom-tooltip');
                tooltip.textContent = 'Pemesanan minimal 7 hari dari sekarang';
                instance.calendarContainer.appendChild(tooltip);
            },
            onClose: function(selectedDates, dateStr, instance) {
                const tooltip = instance.calendarContainer.querySelector('.custom-tooltip');
                if (tooltip) {
                    tooltip.remove();
                }
            }
        });
    });


    document.addEventListener("DOMContentLoaded", function () {
        flatpickr("#waktukonseling", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true
        });
    });

    document.querySelectorAll(".dropdown-select").forEach((select, index) => {
        const icon = document.querySelectorAll(".dropdown-icon")[index];

        select.addEventListener("click", function () {
            icon.classList.toggle("rotate-180");
        });

        select.addEventListener("blur", function () {
            icon.classList.remove("rotate-180");
        });
    });

    document.getElementById('openModal').addEventListener('click', function() {
        document.getElementById('modal').classList.remove('hidden');
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('modal').classList.add('hidden');
    });

    document.querySelector('select[name="metode"]').addEventListener('change', function() {
        const daerahContainer = document.getElementById('daerah-container');
        const daerahSelect = document.getElementById('daerah-select');
        
        if (this.value === 'offline') {
            daerahContainer.style.display = 'block';
            daerahSelect.required = true;
        } else {
            daerahContainer.style.display = 'none';
            daerahSelect.required = false;
            daerahSelect.value = ''; // Reset value jika online
        }
    });

    // Trigger saat load jika ada value tersimpan
    document.addEventListener('DOMContentLoaded', function() {
        const metodeSelect = document.querySelector('select[name="metode"]');
        if (metodeSelect.value === 'offline') {
            document.getElementById('daerah-container').style.display = 'block';
        }
    });

    // JS Preview Harga
    function updateHarga() {
        const tanggal = document.getElementById('tglkonseling').value;
        const metode = document.querySelector('select[name="metode"]').value;
        const sesi = document.querySelector('select[name="sesi"]').value;
        const kategori = document.getElementById('kategori').value;
        const hargaInput = document.querySelector('input[name="harga"]');

        if (!tanggal || !metode || !sesi) {
            hargaInput.value = '';
            return;
        }

        const dateObj = new Date(tanggal);
        const day = dateObj.getDay(); // 0: Minggu, 6: Sabtu
        const isWeekend = (day === 0 || day === 6);

        let harga = 0;
        if (kategori === 'peer-counselor') {
            // Harga Peer Counselor
            if (metode === 'online') {
                harga = {1: 45000, 2: 90000, 3: 135000}[sesi];
            } else if (metode === 'offline') {
                harga = {1: 55000, 2: 110000, 3: 165000}[sesi];
            }
        } else {
            // Harga Psikolog
            if (!isWeekend) { // Weekday
                if (metode === 'online') {
                    harga = {1: 150000, 2: 300000, 3: 450000}[sesi];
                } else if (metode === 'offline') {
                    harga = {1: 175000, 2: 350000, 3: 525000}[sesi];
                }
            } else { // Weekend
                if (metode === 'online') {
                    harga = {1: 200000, 2: 340000, 3: 500000}[sesi];
                } else if (metode === 'offline') {
                    harga = {1: 225000, 2: 340000, 3: 500000}[sesi];
                }
            }
        }
        hargaInput.value = 'Rp ' + harga.toLocaleString('id-ID');
    }

    document.getElementById('tglkonseling').addEventListener('change', updateHarga);
    document.querySelector('select[name="metode"]').addEventListener('change', updateHarga);
    document.querySelector('select[name="sesi"]').addEventListener('change', updateHarga);
</script>
@endsection
