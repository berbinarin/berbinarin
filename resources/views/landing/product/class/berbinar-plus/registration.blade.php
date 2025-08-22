@extends('landing.layouts.app',[
'title' => 'Registrasi Berbinar+',
'active' => 'Berbinar+',
'page' => 'Berbinar+',
])

@section('content')

<style>
    .bg-white {
        background-color: white;
    }

</style>

<div class="row">
    <div class="flex flex-no-wrap pt-8">
        <div class="w-full mt-14 md:mt-28 justify-center items-center">
            <h1 class="text-4xl xl:text-5xl font-bold text-center mb-12 mt-1">Gabung <span class="bg-gradient-to-r from-[#3986A3] to-[#15323D] bg-clip-text text-transparent">Berbinar Class</span></h1>
            <div class="bg-white rounded-3xl p-5 md:px-12 xl:px-16 justify-self-center md:w-[90%] w-full md:shadow-lg">

                <!-- Tombol Kembali -->
                <a href="{{ route('product.class.berbinar-plus.index') }}">
                    <div class="flex cursor-pointer items-center space-x-2 lg:order-1 mt-2">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.svg") }}" alt="Left Arrow" class="h-3 w-auto" />
                        <p class="text-[15px] font-semibold text-[#3986A3] xl:text-lg">Kembali</p>
                    </div>
                </a>

                <form id="internshipForm" method="POST" action="{{ route('product.class.berbinar-plus.store') }}">
                    <div id="registrationForm1" class="registration-form">
                        @csrf
                        <h1 class="text-4xl font-bold text-center mb-8 mt-1 bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text text-transparent">Biodata Diri</h1>
                        {{-- NAMA LENGKAP --}}
                        <div class="flex flex-wrap -mx-2 mb-4">
                            <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                                <label for="first_name">Nama Depan</label>
                                <input type="text"
                                    class="form-input mt-1 block w-full h-10 pl-2 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                    id="first_name" name="first_name" placeholder="Berbinar" required>
                            </div>
                            <div class="w-full md:w-1/2 px-2">
                                <label for="last_name">Nama Belakang</label>
                                <input type="text"
                                    class="form-input mt-1 block w-full h-10 pl-2 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                    id="last_name" name="last_name" placeholder="Class" required>
                            </div>
                        </div>
                        {{-- JENIS KELAMIN --}}
                        <div class="mb-4 relative" style="background-color: white;">
                            <label for="genderToggle">Jenis Kelamin</label>
                            <button type="button"
                                class="flex justify-between items-center w-full bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary p-2 rounded-md mb-2"
                                id="genderToggle">
                                <span id="genderSelected" class="text-gray-500">Pilih Jenis Kelamin</span>
                                <img src="{{ asset('assets/images/landing/produk/emo/chevron.png') }}" alt=""
                                    class="transform transition-transform w-[.9rem] mr-1" id="genderIcon">
                            </button>
                            <div class="absolute bg-white border border-gray-300 rounded-md mt-2 w-full z-10 hidden"
                                id="genderDropdown">
                                <div class="p-2" style="background-color: white;">
                                    <label class="flex items-center mb-2">
                                        <input class="form-check-input mr-2" type="radio" name="gender"
                                            value="Laki-laki" required>
                                        Laki-laki
                                    </label>
                                    <label class="flex items-center">
                                        <input class="form-check-input mr-2" type="radio" name="gender"
                                            value="Perempuan" required>
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        {{-- USIA --}}
                        <div class="mb-4">
                            <label for="age">Usia</label>
                            <input type="number"
                                class="form-input mt-1 block w-full h-10 pl-2 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                id="age" name="age" placeholder="Usia Kamu Sekarang Yaa" required>
                        </div>
                        {{-- WA --}}
                        <div class="mb-4">
                            <label for="wa_number">Nomor Whatsapp Aktif</label>
                            <input type="text"
                                class="form-input mt-1 block w-full h-10 pl-2 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                id="wa_number" name="wa_number" placeholder="08112345XXXX" required>
                        </div>
                        {{-- EMAIL --}}
                        <div class="mb-4">
                            <label for="email">Email</label>
                            <input type="email"
                                class="form-input mt-1 block w-full h-10 pl-2 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                id="email" name="email" placeholder="sobatbinar@gmail.com" required>
                        </div>
                        {{-- PENDIDIKAN TERAKHIR --}}
                        <div class="mb-4 relative" style="background-color: white;">
                            <label for="educationToggle">Pendidikan Terakhir</label>
                            <button type="button"
                                class="flex justify-between items-center w-full bg-gray-100 border border-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary p-2 rounded-md mb-2"
                                id="educationToggle">
                                <span id="educationSelected" class="text-gray-500">Apa Pendidikan Terakhirmu?</span>
                                <img src="{{ asset('assets/images/landing/produk/emo/chevron.png') }}" alt=""
                                    class="transform transition-transform w-[.9rem] mr-1" id="educationIcon">
                            </button>
                            <div class="absolute bg-white border border-gray-300 rounded-md mt-2 w-full z-10 hidden"
                                id="educationDropdown">
                                <div class="p-2 grid grid-cols-2 gap-4" style="background-color: white;">
                                    <div>
                                        <label class="flex items-center mb-2">
                                            <input class="form-check-input mr-2" type="radio" name="last_education"
                                                value="SD" required>
                                            SD
                                        </label>
                                        <label class="flex items-center mb-2">
                                            <input class="form-check-input mr-2" type="radio" name="last_education"
                                                value="SMP" required>
                                            SMP
                                        </label>
                                        <label class="flex items-center mb-2">
                                            <input class="form-check-input mr-2" type="radio" name="last_education"
                                                value="SMA" required>
                                            SMA
                                        </label>
                                    </div>
                                    <div>
                                        <label class="flex items-center mb-2">
                                            <input class="form-check-input mr-2" type="radio" name="last_education"
                                                value="Ahli Madya" required>
                                            Ahli Madya
                                        </label>
                                        <label class="flex items-center mb-2">
                                            <input class="form-check-input mr-2" type="radio" name="last_education"
                                                value="Sarjana" required>
                                            Sarjana
                                        </label>
                                        <label class="flex items-center mb-2">
                                            <input class="form-check-input mr-2" type="radio" name="last_education"
                                                value="Other" id="otherRadio" required>
                                            Other
                                        </label>
                                        <input type="text"
                                            class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm"
                                            id="otherInput" name="other_education" placeholder="Isi pendidikan lain..." disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- BOOKLET --}}
                        <p class="mb-1">Sudah Membaca Booklet dan Menyetujui segala ketentuan yang ada pada Booklet</p>
                        <div class="mb-4 flex items-center">
                            <input type="checkbox" class="form-checkbox h-5 w-5 bg-gray-100 border border-gray-500 rounded-[5px] shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                id="bookletCheckbox" onclick="showModalBooklet()">
                            <a href="#" class="ml-2 text-sm" onclick="showModalBooklet()">Setuju</a>
                        </div>
                        <div id="bookletModal" class="fixed z-50 inset-0 overflow-y-auto hidden">
                            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 sm:items-top">
                                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                    <div class="absolute inset-0 bg-gray-500 opacity-50"></div>
                                </div>
                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                    aria-hidden="true">&#8203;</span>
                                <div class="inline-block align-bottom rounded-2xl text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full lg:max-w-2xl lg:rounded-3xl"
                                    role="dialog" aria-modal="true" aria-labelledby="modal-headline" style="background: #FFFFFF; background: linear-gradient(25deg,rgba(255, 255, 255, 1) 0%, rgba(198, 220, 229, 1) 18%, rgba(156, 195, 209, 1) 84%, rgba(96, 158, 181, 1) 100%);">
                                    <div class="px-4 lg:p-6 lg:pb-0 lg:pt-3">
                                        <div class="sm:flex sm:items-start lg:justify-center lg:items-center">
                                            <div class="mt-3 text-center sm:mt-0 sm:ml-2 sm:mr-2 sm:text-left w-full">
                                                <div class="w-full flex flex-row justify-center">
                                                    <h3 class="text-lg text-center leading-6 lg:pb-2 text-[#333333] font-bold lg:text-2xl"
                                                        id="modal-headline">
                                                        Booklet Berbinar Class
                                                    </h3>
                                                    <a onclick="closeModal()" class="absolute translate-y-1 lg:translate-y-2 bg-[#E4F3F8] rounded-full right-5 lg:right-10 cursor-pointer">
                                                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-close.svg") }}" class="scale-50" alt="close">
                                                    </a>
                                                </div>

                                                <div class="mt-2 w-full lg:right-3">
                                                    <!-- Swiper Carousel Booklet -->
                                                    <div class="swiper-container-booklet">
                                                        <div class="swiper-wrapper">
                                                            @for ($i = 1; $i <= 23; $i++)
                                                                <div class="swiper-slide">
                                                                    <img src="{{ asset('assets/images/products/berbinar-plus/booklet/' . $i . '.png') }}" alt="Booklet {{ $i }}" class="w-full rounded-lg" />
                                                                </div>
                                                            @endfor
                                                        </div>
                                                        <div class="swiper-button-prev"></div>
                                                        <div class="swiper-button-next"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 sm:px-6 flex flex-row justify-center">
                                        <div class="flex flex-col items-center justify-center w-full">
                                            <input type="checkbox"
                                                class="h-10 lg:w-1/4 form-checkbox rounded-md bg-gradient-to-r from-[#3986A3] to-[#225062] checked:bg-gradient-to-r checked:from-[#3986A3] checked:to-[#225062] px-16 py-1 lg:px-20 lg:py-1.5 font-medium text-white max-sm:text-[15px] cursor-pointer"
                                                id="agreeCheckbox" onchange="agreeModal()">
                                            <label for="agreeCheckbox" class="absolute -translate-x-1 ml-2 cursor-pointer text-start text-white">Saya Setuju</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- NEXT BUTTON --}}
                        <div id="nextButton" class="flex justify-center w-full pt-6 mb-4">
                            <button id="nextButton" type="button" class="next-button w-full mt-4 md:w-auto bg-gradient-to-r from-[#3986A3] to-[#15323D] text-white py-2 px-20 xl:px-40 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Selanjutnya</button>
                        </div>
                    </div>
                    <!-- Form kedua dimulai di sini -->
                    <div id="registrationForm2" class="hidden">
                        <h1 class="text-4xl font-bold text-center mb-8 mt-1 bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text text-transparent">Pilih Kelas</h1>
                        {{-- KELAS BERBINAR+ --}}
                        <div class="mb-4">
                            <label for="kelas">kelas BERBINAR+</label>
                            <select id="kelas" name="kelas" class="form-input mt-1 block w-full h-10 pl-2 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary" required {{ count($kelas) == 0 ? 'disabled' : '' }}>
                                @if(count($kelas) == 0)
                                    <option value="" selected class="text-gray-500">Belum ada kelas tersedia</option>
                                @else
                                    <option value="" disabled selected class="text-gray-500">Pilih Kelas</option>
                                    @foreach($kelas as $k)
                                        <option value="{{ $k->id }}">{{ $k->title }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        {{-- PAKET LAYANAN --}}
                        <div class="mb-4">
                            <label for="paket-layanan">Paket Layanan</label><br>
                            <label for="paket-layanan" class="text-sm">*Mohon diperhatikan bahwa harga layanan konseling adalah per jam </label>
                            <div x-data="{ open: false, selected: '', options: [
                                'Insight (Rp15.000)',
                                'A+ Online Weekday (Rp36.000 - Rp120.000/jam)',
                                'A+ Online Weekend (Rp44.000 - Rp140.000/jam)',
                                'A+ Offline Weekday (Rp44.000 - Rp140.000/jam)',
                                'A+ Offline Weekend (Rp44.000 - Rp180.000/jam)',
                                'Complete (Rp100.000 - Rp280.000)'
                            ] }" class="relative w-full">
                                <button @click="open = !open" type="button"
                                    class="w-full bg-gray-100 border-2 border-gray-100 rounded-md shadow-sm p-2 flex justify-between items-center focus:outline-none focus:ring-primary focus:border-primary">
                                    <span x-text="selected ? selected : 'Pilih Paket Layanan Kamu'"></span>
                                    <img src="{{ asset('assets/images/landing/produk/emo/chevron.png') }}" alt=""
                                    class="transform transition-transform w-[.9rem] mr-1">
                                </button>
                                <div x-show="open" class="absolute max-sm:max-h-40 max-sm:overflow-y-auto left-0 mt-2 w-full bg-white border border-gray-300 rounded-md shadow-lg z-10">
                                    <ul>
                                        <template x-for="option in options" :key="option">
                                            <li @click="selected = option; open = false"
                                                class="px-4 py-2 hover:bg-gray-100 cursor-pointer" x-text="option"></li>
                                        </template>
                                    </ul>
                                </div>
                                <input type="hidden" name="paket-layanan" id="paket-layanan" :value="selected">
                            </div>
                        </div>
                        {{-- BUKTI PEMBAYARAN --}}
                        <div class="mb-4 rounded-lg" style="background-color: white;">
                            <label for="bukti_transfer">Bukti Pembayaran</label>
                            <div class="relative w-full flex items-center">
                                <input type="file" id="bukti_transfer" name="bukti_transfer" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*" required/>
                                <div class="mt-1 block w-full h-10 pl-2 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary pointer-events-none cursor-pointer content-center flex items-center">
                                    <button type="button" class="pointer-events-none border flex justify-between gap-2 py-[2px] px-2 border-[#B3B3B3] rounded-md cursor-pointer items-center">
                                        <img src="{{ asset('assets/images/landing/produk/emo/upload-line-icon.png') }}" alt="" class="w-4 h-4">
                                        Upload File
                                    </button>
                                    <span id="fileName" class="ml-3 text-base text-gray-600 truncate"></span>
                                </div>
                            </div>
                        </div>
                        {{-- SUMBER INFORMASI --}}
                        <div class="mb-4">
                            <label for="sumber">Darimana SobatBinar mengetahui layanan produk BERBINAR+</label>
                            <select
                                class="form-input mt-1 block w-full h-10 pl-2 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                id="sumber" name="knowing_source" onchange="checkOption(this);" required>
                                <option value="" disabled selected class="text-gray-500">Dari mana nihh</option>
                                <option value="Instagram">Instagram</option>
                                <option value="Telegram">Telegram</option>
                                <option value="TikTok">TikTok</option>
                                <option value="LinkedIn">LinkedIn</option>
                                <option value="Teman">Teman</option>
                                <option value="Other">Other</option>
                            </select>
                            <input type="text"
                                class="form-input mt-1 block w-full h-10 pl-2 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary hidden"
                                id="otherReasonText" name="otherReasonText" placeholder="Please specify">
                        </div>
                        {{-- BACK AND SUBMIT BUTTONS --}}
                        <div class="flex justify-center items-center">
                            <div id="openModalConfirm" class="flex justify-center w-full pt-6 mb-4">
                                <button id="openModalConfirm" type="button" class="next-button w-full mt-4 md:w-auto bg-gradient-to-r from-[#3986A3] to-[#15323D] text-white py-2 px-20 xl:px-40 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Daftar</button>
                            </div>
                        </div>
                        <!-- Modal Confirm -->
                        <div id="myModalConfirm"
                            class="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-gray-900 bg-opacity-50 hidden sm:p-4">
                            <div class="bg-white p-6 w-4/5 md:w-1/3 rounded-lg text-center"
                                style="background-color: white;">
                                <img src="{{ asset('assets/images/landing/produk/emo/confirm.png') }}" alt="" class="mx-auto">
                                <p>Apakah data yang Anda masukkan sudah benar?</p>
                                <p>Tolong pastikan bahwa informasi yang Anda masukkan telah tepat.</p>
                                <div class="flex justify-between gap-4 mt-4">
                                    <button id="okButton" type="button"
                                        class="bg-primary text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 mr-2 w-1/2">OK</button>
                                    <button id="closeModalConfirm" type="button"
                                        class="bg-white text-primary px-4 py-2 rounded-lg border-2 font-semibold border-primary hover:bg-white transition duration-300 ml-2 w-1/2"
                                        style="background-color: white; @media (max-width: 640px) { background-color: white; }">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Semua script diletakkan di bawah --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Dropdown Jenis Kelamin
    const genderToggle = document.getElementById('genderToggle');
    const genderDropdown = document.getElementById('genderDropdown');
    const genderIcon = document.getElementById('genderIcon');
    const genderRadios = document.querySelectorAll('input[name="gender"]');
    const genderSelected = document.getElementById('genderSelected');

    // Dropdown Pendidikan Terakhir
    const educationToggle = document.getElementById('educationToggle');
    const educationDropdown = document.getElementById('educationDropdown');
    const educationIcon = document.getElementById('educationIcon');
    const educationRadios = document.querySelectorAll('input[name="last_education"]');
    const educationSelected = document.getElementById('educationSelected');
    const otherRadio = document.getElementById('otherRadio');
    const otherInput = document.getElementById('otherInput');

    // Toggle dropdown helper
    function toggleDropdown(dropdown, icon) {
        dropdown.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    }

    genderToggle.addEventListener('click', function () {
        toggleDropdown(genderDropdown, genderIcon);
    });

    educationToggle.addEventListener('click', function () {
        toggleDropdown(educationDropdown, educationIcon);
    });

    genderRadios.forEach(radio => {
        radio.addEventListener('change', function () {
            genderSelected.textContent = this.value;
            genderSelected.classList.remove('text-gray-500');
            genderSelected.classList.add('text-black');
            genderDropdown.classList.add('hidden');
            genderIcon.classList.remove('rotate-180');
        });
    });

    educationRadios.forEach(radio => {
        radio.addEventListener('change', function () {
            educationSelected.textContent = this.value === 'Other' ? 'Other' : this.value;
            educationSelected.classList.remove('text-gray-500');
            educationSelected.classList.add('text-black');
            educationDropdown.classList.add('hidden');
            educationIcon.classList.remove('rotate-180');
            if (this.value === 'Other') {
                otherInput.disabled = false;
                otherInput.required = true;
                otherInput.focus();
            } else {
                otherInput.disabled = true;
                otherInput.required = false;
                otherInput.value = '';
            }
        });
    });

    otherRadio.addEventListener('change', function () {
        otherInput.disabled = !this.checked;
    });

    otherInput.disabled = true;

    // File upload display
    document.getElementById('bukti_transfer').addEventListener('change', function(e) {
        const fileNameSpan = document.getElementById('fileName');
        fileNameSpan.textContent = this.files && this.files.length > 0 ? this.files[0].name : '';
    });

    // Sumber informasi "Other"
    document.getElementById('sumber').addEventListener('change', function() {
        const otherReasonText = document.getElementById('otherReasonText');
        if (this.value === 'Other') {
            otherReasonText.classList.remove('hidden');
            otherReasonText.required = true;
        } else {
            otherReasonText.classList.add('hidden');
            otherReasonText.required = false;
            otherReasonText.value = '';
        }
    });

    // Modal Booklet
    window.showModalBooklet = function() {
        document.getElementById('bookletModal').classList.remove('hidden');
    };
    window.closeModal = function() {
        document.getElementById('bookletModal').classList.add('hidden');
    };
    window.agreeModal = function() {
        document.getElementById('bookletModal').classList.add('hidden');
        document.getElementById('bookletCheckbox').checked = true;
    };

    // Inisialisasi Swiper untuk booklet
    new Swiper('.swiper-container-booklet', {
        slidesPerView: 1,
        spaceBetween: 40,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Modal Confirm
    function showModalConfirm() {
        document.getElementById('myModalConfirm').style.display = "flex";
    }
    function hideModalConfirm() {
        document.getElementById('myModalConfirm').style.display = "none";
    }

    // --- VALIDASI LOGIKA MIRIP PSIKOLOG ---

    function getFieldLabel(fieldName) {
        const field = document.querySelector(`[name="${fieldName}"]`);
        if (field) {
            const container = field.closest('.mb-4, .flex.flex-wrap');
            if (container) {
                const label = container.querySelector('label');
                if (label) return label.textContent.trim();
            }
        }
        // fallback
        return fieldName.replace(/_/g, ' ');
    }

    function isValidEmail(email) {
        return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email);
    }

    function isValidPhoneNumber(number) {
        return /^(\+62|62|0)8[1-9][0-9]{6,11}$/.test(number);
    }

    function validateStep1() {
        // Daftar field wajib di step 1
        const requiredFields = [
            'first_name', 'last_name', 'gender', 'age', 'wa_number', 'email', 'last_education'
        ];
        // Jika pendidikan Other, wajib other_education
        const lastEducation = document.querySelector('input[name="last_education"]:checked');
        if (lastEducation && lastEducation.value === 'Other') {
            requiredFields.push('other_education');
        }
        // Booklet harus dicentang
        if (!document.getElementById('bookletCheckbox').checked) {
            return 'Anda harus menyetujui Booklet terlebih dahulu.';
        }
        for (let fieldName of requiredFields) {
            let field;
            if (fieldName === 'gender') {
                field = document.querySelector('input[name="gender"]:checked');
            } else if (fieldName === 'last_education') {
                field = document.querySelector('input[name="last_education"]:checked');
            } else {
                field = document.querySelector(`[name="${fieldName}"]`);
            }
            if (!field || (field.value !== undefined && field.value.trim() === '')) {
                return '"' + getFieldLabel(fieldName) + '" belum diisi.';
            }
            if (fieldName === 'email' && !isValidEmail(field.value)) {
                return 'Format Email tidak valid.';
            }
            if (fieldName === 'wa_number' && !isValidPhoneNumber(field.value)) {
                return 'Format Nomor Whatsapp tidak valid.';
            }
        }
        return null;
    }

    function validateStep2() {
        // Daftar field wajib di step 2
        const requiredFields = [
            'kelas', 'paket-layanan', 'bukti_transfer', 'knowing_source'
        ];
        // Jika knowing_source Other, wajib otherReasonText
        const knowingSource = document.getElementById('sumber').value;
        if (knowingSource === 'Other') {
            requiredFields.push('otherReasonText');
        }
        for (let fieldName of requiredFields) {
            let field;
            if (fieldName === 'bukti_transfer') {
                field = document.getElementById('bukti_transfer');
                if (!field || !field.files || field.files.length === 0) {
                    return '"' + getFieldLabel(fieldName) + '" belum diisi.';
                }
                continue;
            }
            field = document.querySelector(`[name="${fieldName}"]`);
            if (!field || field.value.trim() === '' || field.value === null) {
                return '"' + getFieldLabel(fieldName) + '" belum diisi.';
            }
        }
        return null;
    }

    // --- END VALIDASI LOGIKA MIRIP PSIKOLOG ---

    // Next Button
    document.getElementById('nextButton').addEventListener('click', function (event) {
        event.preventDefault();
        let errorMessage = validateStep1();
        if (errorMessage) {
            Swal.fire({
                toast: true,
                position: "top-end",
                icon: "error",
                title: errorMessage,
                showConfirmButton: false,
                showCloseButton: true,
                timer: 4000
            });
            return;
        }
        document.getElementById('registrationForm1').classList.add('hidden');
        document.getElementById('registrationForm2').classList.remove('hidden');
    });

    // Daftar Button
    document.getElementById('openModalConfirm').addEventListener('click', function (event) {
        event.preventDefault();
        let errorMessage = validateStep2();
        if (errorMessage) {
            Swal.fire({
                toast: true,
                position: "top-end",
                icon: "error",
                title: errorMessage,
                showConfirmButton: false,
                showCloseButton: true,
                timer: 4000
            });
            return;
        }
        document.getElementById('myModalConfirm').style.display = "flex";
    });

    // Modal Confirm Buttons
    document.getElementById('closeModalConfirm').addEventListener('click', function () {
        document.getElementById('myModalConfirm').style.display = "none";
    });
    window.onclick = function (event) {
        const modal = document.getElementById('myModalConfirm');
        if (event.target == modal) modal.style.display = "none";
    };

    // Submit via AJAX
    document.getElementById('okButton').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('myModalConfirm').style.display = "none";
        const form = document.getElementById('internshipForm');
        const formData = new FormData(form);
        fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
            },
            body: formData
        })
        .then(response => {
            if (!response.ok) throw new Error('Gagal submit');
            return response.json();
        })
        .then(data => {
            window.location.href = "{{ route('product.class.berbinar-plus.success') }}";
        })
        .catch(() => Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Terjadi kesalahan koneksi atau validasi.',
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            showCloseButton: true,
            timer: 4000
        }));
    });

    // Modal Booklet
    window.showModalBooklet = function() {
        document.getElementById('bookletModal').classList.remove('hidden');
    };
    window.closeModal = function() {
        document.getElementById('bookletModal').classList.add('hidden');
    };
    window.agreeModal = function() {
        document.getElementById('bookletModal').classList.add('hidden');
        document.getElementById('bookletCheckbox').checked = true;
    };
});
</script>
@endsection

