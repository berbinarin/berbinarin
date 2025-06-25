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
        <!-- <div class="w-full h-full md:w-1/3 hidden md:block md:mt-5 "> -->
            <!-- <div class=""> -->
                <!-- <img src="{{ asset('assets/images/products/berbinar-plus/berbinar-plus1.png') }}" alt="Berbinar+" -->
                    <!-- class="md:w-full h-auto"> -->
            <!-- </div> -->
        <!-- </div> -->
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
                                id="wa_number" name="wa_number" placeholder="wa.me/62xxxxxxxxxxx" required>
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
                                                value="Other" required>
                                            Other
                                        </label>
                                        <input type="text"
                                            class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm"
                                            id="otherInput" name="other" placeholder="Other" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- NEXT BUTTON --}}
                        <div id="nextButton" class="flex justify-center w-full pt-6 mb-4">
                            <button id="nextButton" type="button" class="next-button w-full mt-4 md:w-auto bg-gradient-to-r from-[#3986A3] to-[#15323D] text-white py-2 px-20 xl:px-40 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Selanjutnya</button>
                        </div>

                    </div>



                    <!-- Ada form ke dua -->
                    <!-- Form kedua dimulai di sini -->
                    <div id="registrationForm2" class="hidden">
                        <h1 class="text-4xl font-bold text-center mb-8 mt-1 bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text text-transparent">Pilih Kelas</h1>


                        {{-- KELAS BERBINAR+ --}}
                        <div class="mb-4">
                            <label for="kelas">kelas BERBINAR+</label>
                            <select
                                class="form-input mt-1 block w-full h-10 pl-2 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                id="kelas" name="kelas" required>
                                <option value="" disabled selected class="text-gray-500">Pilih Kelas</option>
                                <option value="Jobseekers">Jobseekers</option>
                                <option value="Product Management">Product Management</option>
                                <option value="Human Resources">Human Resources</option>
                                <option value="Graphic Design">Graphic Design</option>
                            </select>
                        </div>


                        {{-- PAKET LAYANAN --}}
                        <div class="mb-4">
                            <label for="paket-layanan">Paket Layanan</label><br>
                            <label for="paket-layanan" class="text-sm">*Mohon diperhatikan bahwa harga layanan konseling adalah per jam </label>
                            <!-- <select
                                class="form-input mt-1 block w-full h-10 pl-2 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                id="paket-layanan" name="paket-layanan" required>
                                <option value="" disabled selected class="text-gray-500">Pilih Paket Layanan Kamu</option>
                                <option value="Akses Kelas (Rp.15.000)">Akses Kelas (Rp.15.000)</option>
                                <option value="Akses Kelas+ Konseling dengan Peer Counselor(Online) = (Rp.51.000)">Akses
                                    Kelas+ Konseling dengan Peer Counselor(Online) = (Rp.51.000)</option>
                                <option value="Akses Kelas+ Konseling dengan Psikolog(Weekday-Online) = (Rp.135.000)">
                                    Akses Kelas+ Konseling dengan Psikolog(Weekday-Online) = (Rp.135.000)</option>
                                <option value="Akses Kelas+ Konseling dengan Psikolog(Weekend-Online) = (Rp.175.000)">
                                    Akses Kelas+ Konseling dengan Psikolog(Weekend-Online) = (Rp.175.000)</option>
                                <option value="Akses Kelas+ Konseling dengan Psikolog(Weekday-Offline) = (Rp.155.000)">
                                    Akses Kelas+ Konseling dengan Psikolog(Weekday-Offline) = (Rp.155.000)</option>
                                <option value="Akses Kelas+ Konseling dengan Psikolog(Weekend-Offline) = (Rp.195.000)">
                                    Akses Kelas+ Konseling dengan Psikolog(Weekend-Offline) = (Rp.195.000)</option>
                                <option value="Complete (Tes Minat Bakat - Laporan tertulis) = (Rp.200.000)">Complete
                                    (Tes Minat Bakat - Laporan tertulis) = (Rp.200.000)</option>
                                <option value="Complete (Tes Minat Bakat - Laporan tertulis+Konseling) = (Rp.280.000)">
                                    Complete (Tes Minat Bakat - Laporan tertulis+Konseling) = (Rp.280.000)</option>
                                <option value="Complete (Tes Intelegensi - Laporan tertulis) = (Rp.100.000)">Complete
                                    (Tes Intelegensi - Laporan tertulis) = (Rp.100.000)</option>
                            </select> -->

                            <div x-data="{ open: false, selected: '', options: [
                                'Akses Kelas (Rp.15.000)',
                                'Akses Kelas+ Konseling dengan Peer Counselor(Online) = (Rp.51.000)',
                                'Akses Kelas+ Konseling dengan Psikolog(Weekday-Online) = (Rp.135.000)',
                                'Akses Kelas+ Konseling dengan Psikolog(Weekend-Online) = (Rp.175.000)',
                                'Akses Kelas+ Konseling dengan Psikolog(Weekday-Offline) = (Rp.155.000)',
                                'Akses Kelas+ Konseling dengan Psikolog(Weekend-Offline) = (Rp.195.000)',
                                'Complete (Tes Minat Bakat - Laporan tertulis) = (Rp.200.000)',
                                'Complete (Tes Minat Bakat - Laporan tertulis+Konseling) = (Rp.280.000)',
                                'Complete (Tes Intelegensi - Laporan tertulis) = (Rp.100.000)'
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
                                <input type="file" id="bukti_transfer" name="bukti_transfer" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" required/>
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

                        {{-- BOOKLET --}}
                        <!-- <div class="mb-4 flex items-center">
                            <input type="checkbox" class="form-checkbox h-5 w-5 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                id="bookletCheckbox" onclick="showModalBooklet()">
                            <a href="#" class="ml-2" onclick="showModalBooklet()"><strong>Booklet</strong></a>
                        </div>

                        <div id="bookletModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                            <div
                                class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 sm:items-top">
                                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                </div>
                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                    aria-hidden="true">&#8203;</span>
                                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4"
                                        style="background-color: white; @media (max-width: 640px) { background-color: white; }">
                                        >
                                        <div class="sm:flex sm:items-start">
                                            <div class="mt-3 text-center sm:mt-0 sm:ml-2 sm:mr-2 sm:text-left">
                                                <h3 class="text-lg leading-6 font-medium text-gray-900 font-bold"
                                                    id="modal-headline">

                                                    Booklet
                                                </h3>
                                                <div class="mt-2">
                                                    <p class="text-sm text-gray-500 flex text-justify">
                                                        Lorem ipsum dolor sit amet consectetur. Malesuada facilisi neque
                                                        imperdiet egestas consectetur integer cursus. At ultrices diam
                                                        enim fusce lectus ut ultrices sed. Est eget arcu nascetur non.
                                                        Velit morbi massa urna ut libero blandit. Dui vulputate cursus
                                                        faucibus venenatis tellus lacus tristique commodo ac. Id egestas
                                                        ut arcu odio amet purus. At arcu eu phasellus id egestas amet
                                                        nulla. At amet sed proin quis nunc. At aliquam feugiat fringilla
                                                        adipiscing morbi turpis. Commodo odio consequat eget habitant
                                                        tortor. Tincidunt volutpat viverra iaculis commodo quam montes
                                                        nulla integer. Nunc purus ornare pretium vel id vitae nunc. Amet
                                                        ipsum orci morbi aliquam nunc dictum.
                                                    </p>
                                                    <p class="text-sm text-gray-500 flex text-justify">
                                                        Ac viverra imperdiet quis neque dui ornare sed in nunc. Purus
                                                        porttitor dignissim eget sodales enim tempor. Id massa sit
                                                        imperdiet eget sem.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse mb-2">
                                        <div class="flex items-start justify-start w-full"> -->

                                            <!-- Menggunakan div tambahan untuk mengatur letak -->

                                            <!-- <input type="checkbox"
                                                class="form-checkbox h-5 w-5 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                                id="agreeCheckbox" onchange="closeModal()">
                                            <label for="agreeCheckbox" class="ml-2 cursor-pointer">I Agree with <span
                                                    class="text-blue-500">Booklet</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            const bookletCheckbox = document.getElementById('bookletCheckbox');
                            const bookletModal = document.getElementById('bookletModal');
                            const agreeCheckbox = document.getElementById('agreeCheckbox');

                            function showModalBooklet() {
                                bookletModal.classList.remove('hidden');
                            }

                            function closeModal() {
                                bookletModal.classList.add('hidden');
                                bookletCheckbox.checked = true;
                            }
                        </script> -->


                        {{-- BACK AND SUBMIT BUTTONS --}}
                        <div class="flex justify-center items-center">
                            <!-- <button id="openModalConfirm" type="button"
                                class="bg-gradient-to-r from-blue-600 to-white text-white px-4 py-2 rounded-full hover:bg-blue-600 transition duration-300 h-14 w-52 flex justify-center items-center">
                                <span class="mr-2">Sign Up</span>
                                <img src="{{ asset('assets/images/old/arrow.png') }}" alt="" class="ml-2">
                            </button> -->

                            <div id="openModalConfirm" class="flex justify-center w-full pt-6 mb-4">
                                <button id="openModalConfirm" type="button" class="next-button w-full mt-4 md:w-auto bg-gradient-to-r from-[#3986A3] to-[#15323D] text-white py-2 px-20 xl:px-40 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Daftar</button>
                            </div>
                        </div>



                        <!-- Modal Confirm -->
                        <div id="myModalConfirm"
                            class="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-gray-900 bg-opacity-50 hidden sm:p-4">
                            <!-- Konten Modal -->
                            <div class="bg-white p-6 w-4/5 md:w-1/3 rounded-lg text-center"
                                style="background-color: white;">
                                <!-- Gambar -->
                                <img src="{{ asset('assets/images/landing/produk/emo/confirm.png') }}" alt="" class="mx-auto">
                                <!-- Pesan -->
                                <p>Apakah data yang Anda masukkan sudah benar?</p>
                                <p>Tolong pastikan bahwa informasi yang Anda masukkan telah tepat.</p>
                                <!-- Tombol OK -->
                                <div class="flex justify-between gap-4 mt-4">
                                    <button id="okButton" type="button"
                                        class="bg-primary text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 mr-2 w-1/2">OK</button>
                                    <!-- Tombol Close -->
                                    <button id="closeModalConfirm" type="button"
                                        class="bg-white text-primary px-4 py-2 rounded-lg border-2 font-semibold border-primary hover:bg-white transition duration-300 ml-2 w-1/2"
                                        style="background-color: white; @media (max-width: 640px) { background-color: white; }">Cancel</button>
                                </div>
                            </div>
                        </div>


                        <!-- Script Modal Sign Up -->
                        <script>
                            // Ambil elemen modal dan tombol pembuka
                            var modal = document.getElementById('myModalConfirm');
                            var btnOpen = document.getElementById("openModalConfirm");
                            var btnClose = document.getElementById("closeModalConfirm");
                            var btnOK = document.getElementById("okButton");

                            // Ketika tombol pembuka diklik, tampilkan modal
                            btnOpen.onclick = function () {
                                modal.style.display = "flex";
                            }

                            // Ketika tombol close di klik, sembunyikan modal
                            btnClose.onclick = function () {
                                modal.style.display = "none";
                            }

                            // Ketika pengguna mengklik di luar modal, sembunyikan modal
                            window.onclick = function (event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }

                            // Ketika tombol OK di klik, sembunyikan modal
                            btnOK.onclick = function () {
                                modal.style.display = "none";
                            }

                            // document.getElementById('okButton').addEventListener('click', function(event) {
                            //     event.preventDefault(); // Mencegah refresh/submit
                            //     // Tutup modal atau aksi lain
                            //     document.getElementById('myModalConfirm').style.display = 'none';
                            //     // Tambahkan aksi lain sesuai kebutuhan
                            // });

                        </script>


                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- Tampilan untuk perangkat mobile -->
<!-- <div class="md:hidden"> -->
    <!-- Bagian formulir tanpa gambar -->
    <!-- <div class="w-full flex justify-center items-center p-4">
        <div class="bg-white rounded-lg p-5 w-full" style="margin: auto;">
            <div class="bg-white shadow-lg rounded-lg p-6 w-full" style="margin: auto;"> -->
                <!-- Isi formulir di sini -->
            <!-- </div>
        </div>
    </div>
</div> -->
<!-- Modal Warning -->
<div id="modalWarning" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 sm:items-top">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4"
                style="background-color: white; @media (max-width: 640px) { background-color: white; }">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-2 sm:mr-2 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 font-bold" id="modal-headline">
                            PERINGATAN! Data Belum Lengkap
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 flex text-justify">
                                Pastikan Anda mengisi semua kolom sebelum melanjutkan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse mb-2">
                <button type="button"
                    class="bg-primary text-white px-4 py-2 rounded-sm hover:bg-blue-700 transition duration-300 ml-2"
                    onclick="closeModalWarning()">OK</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk memeriksa validasi pada setiap div isian
    function validateFields() {
        var isValid = true;
        var inputFields = document.querySelectorAll('.registration-form input[required], .registration-form select[required]');

        inputFields.forEach(function (field) {
            if (field.value.trim() === '') {
                isValid = false;
            }
        });

        return isValid;
    }

    // Fungsi untuk menampilkan modal peringatan
    function showModalWarning() {
        var modalWarning = document.getElementById('modalWarning');
        modalWarning.classList.remove('hidden');
    }

    // Fungsi untuk menutup modal peringatan
    function closeModalWarning() {
        var modalWarning = document.getElementById('modalWarning');
        modalWarning.classList.add('hidden');
    }

    // Fungsi untuk menampilkan modal konfirmasi
    function showModalConfirm() {
        var modalConfirm = document.getElementById('myModalConfirm');
        modalConfirm.style.display = "flex";
    }

    // Ambil elemen form dan tombol "Next" atau "Sign Up"
    var form = document.getElementById('registrationForm1');
    var nextButton = document.getElementById('nextButton');
    var signUpButton = document.getElementById('openModalConfirm');

    // Tambahkan event listener ke tombol "Next" atau "Sign Up"
    if (nextButton) {
        nextButton.addEventListener('click', function (event) {
            // Hentikan aksi default agar form tidak langsung dikirim
            event.preventDefault();

            // Lakukan validasi saat tombol "Next" ditekan
            if (validateFields()) {
                // Jika form valid, lanjutkan ke form selanjutnya
                document.getElementById('registrationForm1').classList.add('hidden');
                document.getElementById('registrationForm2').classList.remove('hidden');
            } else {
                // Jika form tidak valid, tampilkan modal peringatan
                showModalWarning();
            }
        });
    }

    if (signUpButton) {
        signUpButton.addEventListener('click', function (event) {
            // Hentikan aksi default agar form tidak langsung dikirim
            event.preventDefault();

            // Lakukan validasi saat tombol "Sign Up" ditekan
            if (validateFields()) {
                // Jika form valid, tampilkan modal konfirmasi
                showModalConfirm();
            } else {
                // Jika form tidak valid, tampilkan modal peringatan
                showModalWarning();
            }
        });
    }
</script>

<script>
    // Fungsi untuk memeriksa validasi pada form registration 2
    function validateForm2() {
        var isValid = true;
        var inputFields = document.querySelectorAll('#registrationForm2 input[required], #registrationForm2 select[required]');

        inputFields.forEach(function (field) {
            if (field.value.trim() === '') {
                isValid = false;
            }
        });

        return isValid;
    }

    // Ambil elemen form registration 2 dan tombol "Sign Up"
    var form2 = document.getElementById('registrationForm2');
    var signUpButton2 = document.getElementById('openModalConfirm');

    // Tambahkan event listener ke tombol "Sign Up" pada form registration 2
    if (signUpButton2) {
        signUpButton2.addEventListener('click', function (event) {
            // Hentikan aksi default agar form tidak langsung dikirim
            event.preventDefault();

            // Lakukan validasi saat tombol "Sign Up" pada form registration 2 ditekan
            if (validateForm2()) {
                // Jika form valid, tampilkan modal konfirmasi
                showModalConfirm();
            } else {
                // Jika form tidak valid, tampilkan modal peringatan
                showModalWarning();
            }
        });
    }

    document.getElementById('bukti_transfer').addEventListener('change', function(e) {
        const fileNameSpan = document.getElementById('fileName');
        if (this.files && this.files.length > 0) {
            fileNameSpan.textContent = this.files[0].name;
        } else {
            fileNameSpan.textContent = '';
        }
    });
</script>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const genderToggle = document.getElementById('genderToggle');
        const genderDropdown = document.getElementById('genderDropdown');
        const genderIcon = document.getElementById('genderIcon');
        const genderRadios = document.querySelectorAll('input[name="gender"]');
        const genderSelected = document.getElementById('genderSelected');

        const educationToggle = document.getElementById('educationToggle');
        const educationDropdown = document.getElementById('educationDropdown');
        const educationIcon = document.getElementById('educationIcon');
        const educationRadios = document.querySelectorAll('input[name="last_education"]');
        const educationSelected = document.getElementById('educationSelected');

        const otherRadio = document.getElementById('otherRadio');
        const otherInput = document.getElementById('otherInput');
        const backButton = document.getElementById('backButton'); // Tambahkan ini jika belum ada



        function toggleDropdown(dropdown, icon) {
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                dropdown.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
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
                genderDropdown.classList.add('hidden');
                genderIcon.classList.remove('rotate-180');
            });
        });

        educationRadios.forEach(radio => {
            radio.addEventListener('change', function () {
                educationSelected.textContent = this.value === 'Other' ? 'Other' : this.value;
                educationDropdown.classList.add('hidden');
                educationIcon.classList.remove('rotate-180');
                otherInput.disabled = this.value !== 'Other';
            });
        });

        otherRadio.addEventListener('change', function () {
            otherInput.disabled = !this.checked;
        });

        otherInput.disabled = true;
    });

    // Mendapatkan referensi ke tombol Next, Back dan form
    var nextButton = document.getElementById('nextButton');
    var backButton = document.getElementById('backButton');
    var registrationForm1 = document.getElementById('registrationForm1');
    var registrationForm2 = document.getElementById('registrationForm2');

    // Menambahkan event listener untuk tombol Next
    nextButton.addEventListener('click', function (event) {
        event.preventDefault(); // Mencegah form submit

        // Validasi form pertama sebelum melanjutkan ke form berikutnya
        if (registrationForm1.checkValidity()) {
            // Sembunyikan form pertama dan tampilkan form kedua
            registrationForm1.classList.add('hidden');
            registrationForm2.classList.remove('hidden');
        } else {
            // Jika form tidak valid, tampilkan pesan error (akan otomatis dilakukan oleh HTML5 form validation)
            registrationForm1.reportValidity();
        }
    });

</script>

<script>
document.getElementById('okButton').addEventListener('click', function(e) {
    e.preventDefault();
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
        // Jika backend mengirim status sukses, redirect
        window.location.href = "{{ route('product.class.berbinar-plus.success') }}";
    })
    .catch(() => alert('Terjadi kesalahan koneksi atau validasi.'));
});
</script>
@endsection
