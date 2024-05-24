@extends('moduls.berbinar-plus.layouts.main',[
    'title' => 'Registrasi Berbinar+',
    'active' => 'Berbinar+',
    'page' => 'Berbinar+',
])

@section('content')

<style>
        .bg-white {
            background-color: white;
        }
        
        @media (max-width: 768px) {
            .bg-white {
                background-color: #90BDD4;
            }
        }
    </style>

<div class="row">
    <div class="flex flex-no-wrap pt-8">
        <div class="w-full h-full md:w-1/3 hidden md:block md:mt-5 ">
            <div class="">
                <img src="{{ asset('assets/images/products/berbinar-plus/berbinar-plus1.png') }}" alt="Berbinar+" class="md:w-full h-auto">
            </div>
        </div>
        <div class="w-full md:w-2/3 flex justify-center items-center">
            <div class="bg-white rounded-lg p-5 w-full" style="max-width: 80%; margin: auto;">
                    <h1 class="text-4xl font-bold text-center mb-4 mt-1">Join Berbinar Class!</h1>
                    <p class="text-center mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum <br>dolor Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime praesentium id dolorem itaque!</p>
                    <form method="POST" action="{{ route('berbinarplus.register.post') }}" id="registrationForm1" class="registration-form">
                        @csrf
        
                        {{-- NAMA LENGKAP --}}
                        <div class="flex flex-wrap -mx-2 mb-4">
                            <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                                <input type="text" class="form-input mt-1 block w-full h-10 pl-2 border border-gray-300 rounded-md shadow-sm" id="first_name" name="first_name" placeholder="Nama Depan" required>
                            </div>
                            <div class="w-full md:w-1/2 px-2">
                                <input type="text" class="form-input mt-1 block w-full h-10 pl-2 border border-gray-300 rounded-md shadow-sm" id="last_name" name="last_name" placeholder="Nama Belakang" required>
                            </div>
                        </div>
        
                        {{-- JENIS KELAMIN --}}
                        <div class="mb-4 relative" style="background-color: white;" >
                            <button type="button" class="flex justify-between items-center w-full border border-gray-300 p-2 rounded-md mb-2" id="genderToggle">
                                <span id="genderSelected">Jenis Kelamin</span>
                                <img src="{{ asset('assets/images/Vector.png') }}" alt="" class="transform transition-transform" id="genderIcon">
                            </button>
                            <div class="absolute bg-white border border-gray-300 rounded-md mt-2 w-full z-10 hidden" id="genderDropdown">
                                <div class="p-2" style="background-color: white;">
                                    <label class="flex items-center mb-2">
                                        <input class="form-check-input mr-2" type="radio" name="gender" value="Laki-laki" required>
                                        Laki-laki
                                    </label>
                                    <label class="flex items-center">
                                        <input class="form-check-input mr-2" type="radio" name="gender" value="Perempuan" required>
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
        
                        {{-- USIA --}}
                        <div class="mb-4">
                            <input type="number" class="form-input mt-1 block w-full h-10 pl-2 border border-gray-300 rounded-md shadow-sm" id="age" name="age" placeholder="Usia" required>
                        </div>
        
                        {{-- WA --}}
                        <div class="mb-4">
                            <input type="text" class="form-input mt-1 block w-full h-10 pl-2 border border-gray-300 rounded-md shadow-sm" id="wa_number" name="wa_number" placeholder="Nomor WA" required>
                        </div>
        
                        {{-- EMAIL --}}
                        <div class="mb-4">
                            <input type="email" class="form-input mt-1 block w-full h-10 pl-2 border border-gray-300 rounded-md shadow-sm" id="email" name="email" placeholder="Email" required>
                        </div>
        
                        {{-- PENDIDIKAN TERAKHIR --}}
                        <div class="mb-4 relative" style="background-color: white;">
                            <button type="button" class="flex justify-between items-center w-full border border-gray-300 p-2 rounded-md mb-2" id="educationToggle">
                                <span id="educationSelected">Pendidikan Terakhir</span>
                                <img src="{{ asset('assets/images/Vector.png') }}" alt="" class="transform transition-transform" id="educationIcon">
                            </button>
                            <div class="absolute bg-white border border-gray-300 rounded-md mt-2 w-full z-10 hidden" id="educationDropdown">
                                <div class="p-2 grid grid-cols-2 gap-4" style="background-color: white;">
                                    <div>
                                        <label class="flex items-center mb-2" >
                                            <input class="form-check-input mr-2" type="radio" name="education" value="SD" required>
                                            SD
                                        </label>
                                        <label class="flex items-center mb-2">
                                            <input class="form-check-input mr-2" type="radio" name="education" value="SMP" required>
                                            SMP
                                        </label>
                                        <label class="flex items-center mb-2">
                                            <input class="form-check-input mr-2" type="radio" name="education" value="SMA" required>
                                            SMA
                                        </label>
                                    </div>
                                    <div>
                                        <label class="flex items-center mb-2">
                                            <input class="form-check-input mr-2" type="radio" name="education" value="Ahli Madya" required>
                                            Ahli Madya
                                        </label>
                                        <label class="flex items-center mb-2">
                                            <input class="form-check-input mr-2" type="radio" name="education" value="Sarjana" required>
                                            Sarjana
                                        </label>
                                        <label class="flex items-center mb-2">
                                            <input class="form-check-input mr-2" type="radio" name="education" value="Other" required>
                                            Other
                                        </label>
                                        <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm" id="otherInput" name="other" placeholder="Other" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        {{-- NEXT BUTTON --}}
                        <div class="flex justify-end mt-4">
                            <button type="button" id="nextButton" class="next-button flex items-center bg-blue-500 text-white px-4 py-2 rounded-xl hover:bg-blue-600 transition duration-300">
                                Next
                            </button>
                            </div>
                        </form>

                        
                        
                        <!-- Ada form ke dua -->
                        <!-- Form kedua dimulai di sini -->
                    <form id="registrationForm2" class="hidden">
                            @csrf
                            
                            {{-- KELAS BERBINAR+ --}}
                            <div class="mb-4">
                                <select class="form-input mt-1 block w-full h-10 pl-2 border border-gray-300 rounded-md shadow-sm" id="kelas" name="kelas" required>
                                    <option value="" disabled selected>Kelas BERBINAR+</option>
                                    <option value="Jobseekers">Jobseekers</option>
                                    <option value="Product Management">Product Management</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                </select>
                            </div>
                            

                            {{-- PAKET LAYANAN --}}
                            <div class="mb-4">
                                <select class="form-input mt-1 block w-full h-10 pl-2 border border-gray-300 rounded-md shadow-sm" id="paket-layanan" name="paket-layanan" required>
                                    <option value="" disabled selected>Paket Layanan</option>
                                    <option value="Akses Kelas (Rp.15.000)">Akses Kelas (Rp.15.000)</option>
                                    <option value="Akses Kelas+ Konseling dengan Peer Counselor(Online) = (Rp.51.000)">Akses Kelas+ Konseling dengan Peer Counselor(Online) = (Rp.51.000)</option>
                                    <option value="Akses Kelas+ Konseling dengan Psikolog(Weekday-Online) = (Rp.135.000)">Akses Kelas+ Konseling dengan Psikolog(Weekday-Online) = (Rp.135.000)</option>
                                    <option value="Akses Kelas+ Konseling dengan Psikolog(Weekend-Online) = (Rp.175.000)">Akses Kelas+ Konseling dengan Psikolog(Weekend-Online) = (Rp.175.000)</option>
                                    <option value="Akses Kelas+ Konseling dengan Psikolog(Weekday-Offline) = (Rp.155.000)">Akses Kelas+ Konseling dengan Psikolog(Weekday-Offline) = (Rp.155.000)</option>
                                    <option value="Akses Kelas+ Konseling dengan Psikolog(Weekend-Offline) = (Rp.195.000)">Akses Kelas+ Konseling dengan Psikolog(Weekend-Offline) = (Rp.195.000)</option>
                                    <option value="Complete (Tes Minat Bakat - Laporan tertulis) = (Rp.200.000)">Complete (Tes Minat Bakat - Laporan tertulis) = (Rp.200.000)</option>
                                    <option value="Complete (Tes Minat Bakat - Laporan tertulis+Konseling) = (Rp.280.000)">Complete (Tes Minat Bakat - Laporan tertulis+Konseling) = (Rp.280.000)</option>
                                    <option value="Complete (Tes Intelegensi - Laporan tertulis) = (Rp.100.000)">Complete (Tes Intelegensi - Laporan tertulis) = (Rp.100.000)</option>
                                </select>
                            </div>

                            {{-- BUKTI PEMBAYARAN --}}
                            <div class="mb-4 border rounded-lg" style="background-color: white;">
                                <label class="block p-2"><strong>Bukti Pembayaran</strong></label>
                                <input type="file" class="form-input block w-full h-10 pl-2 border-gray-300 rounded-md shadow-sm" id="uploadFile" name="uploadFile" required>
                            </div>
                            

                            {{-- SUMBER INFORMASI --}}
                            <div class="mb-4">
                                <select class="form-input mt-1 block w-full h-10 pl-2 border border-gray-300 rounded-md shadow-sm" id="sumber" name="sumber" onchange="checkOption(this);" required>
                                    <option value="" disabled selected>Darimana SobatBinar mengetahui layanan produk BERBINAR+</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Telegram">Telegram</option>
                                    <option value="TikTok">TikTok</option>
                                    <option value="LinkedIn">LinkedIn</option>
                                    <option value="Teman">Teman</option>
                                    <option value="Other">Other</option>
                                </select>
                                <input type="text" class="form-input mt-1 block w-full h-10 pl-2 border border-gray-300 rounded-md shadow-sm hidden" id="otherReasonText" name="otherReasonText" placeholder="Please specify">
                            </div>

                            {{-- BOOKLET --}}
                            <div class="mb-4 flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 border-gray-300 rounded-md" id="bookletCheckbox" onclick="showModalBooklet()">
                                <a href="#" class="ml-2" onclick="showModalBooklet()"><strong>Booklet</strong></a>
                            </div>
                            
                            <div id="bookletModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                                <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 sm:items-top">
                                    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                    </div>
                                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4" style="background-color: white; @media (max-width: 640px) { background-color: white; }">>
                                            <div class="sm:flex sm:items-start">
                                                <div class="mt-3 text-center sm:mt-0 sm:ml-2 sm:mr-2 sm:text-left">
                                                    <h3 class="text-lg leading-6 font-medium text-gray-900 font-bold" id="modal-headline">

                                                        Booklet
                                                    </h3>
                                                    <div class="mt-2">
                                                        <p class="text-sm text-gray-500 flex text-justify">
                                                            Lorem ipsum dolor sit amet consectetur. Malesuada facilisi neque imperdiet egestas consectetur integer cursus. At ultrices diam enim fusce lectus ut ultrices sed. Est eget arcu nascetur non. Velit morbi massa urna ut libero blandit. Dui vulputate cursus faucibus venenatis tellus lacus tristique commodo ac. Id egestas ut arcu odio amet purus. At arcu eu phasellus id egestas amet nulla. At amet sed proin quis nunc. At aliquam feugiat fringilla adipiscing morbi turpis. Commodo odio consequat eget habitant tortor. Tincidunt volutpat viverra iaculis commodo quam montes nulla integer. Nunc purus ornare pretium vel id vitae nunc. Amet ipsum orci morbi aliquam nunc dictum.
                                                        </p>
                                                        <p class="text-sm text-gray-500 flex text-justify">
                                                            Ac viverra imperdiet quis neque dui ornare sed in nunc. Purus porttitor dignissim eget sodales enim tempor. Id massa sit imperdiet eget sem.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse mb-2">
                                            <div class="flex items-start justify-start w-full"> <!-- Menggunakan div tambahan untuk mengatur letak -->
                                                <input type="checkbox" class="form-checkbox h-5 w-5 border-gray-300 rounded-md" id="agreeCheckbox" onchange="closeModal()">
                                                <label for="agreeCheckbox" class="ml-2 cursor-pointer">I Agree with <span class="text-blue-500">Booklet</span></label>
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
                            </script>


                         {{-- BACK AND SUBMIT BUTTONS --}}
                        <div class="flex justify-center items-center">
                            <button id="openModalConfirm" type="button" class="bg-gradient-to-r from-blue-600 to-white text-white px-4 py-2 rounded-full hover:bg-blue-600 transition duration-300 h-14 w-52 flex justify-center items-center">
                                <span class="mr-2">Sign Up</span>
                                <img src="{{ asset('assets/images/arrow.png') }}" alt="" class="ml-2">
                            </button>                            
                        </div>

                        

                        <!-- Modal Confirm -->
                        <div id="myModalConfirm" class="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-gray-900 bg-opacity-50 hidden">
                            <!-- Konten Modal -->
                            <div class="bg-white p-6 rounded-lg text-center" style="background-color: white; @media (max-width: 640px) { background-color: white; }">
                                <!-- Gambar -->
                                <img src="{{ asset('assets/images/confirm.png') }}" alt="" class="mx-auto">
                                <!-- Pesan -->
                                <p>Apakah data yang Anda masukkan sudah benar?</p>
                                <p>Tolong pastikan bahwa informasi yang Anda masukkan telah tepat.</p>
                                <!-- Tombol OK -->
                                <div class="flex justify-center mt-4">
                                    <button id="okButton" type="button" class="bg-primary text-white px-4 py-2 rounded-sm hover:bg-blue-700 transition duration-300 mr-2 w-20">OK</button>
                                    <!-- Tombol Close -->
                                    <button id="closeModalConfirm" type="button" class="bg-white border text-black px-4 py-2 rounded-sm hover:bg-white transition duration-300 ml-2" style="background-color: white; @media (max-width: 640px) { background-color: white; }">Close</button>
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
                            btnOpen.onclick = function() {
                                modal.style.display = "flex";
                            }

                            // Ketika tombol close di klik, sembunyikan modal
                            btnClose.onclick = function() {
                                modal.style.display = "none";
                            }

                            // Ketika pengguna mengklik di luar modal, sembunyikan modal
                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }

                            // Tambahkan event listener ke tombol "OK"
                            btnOK.addEventListener('click', function() {
                                // Redirect ke halaman "success"
                                window.location.href = "{{ route('success') }}";
                            });
                        </script>                          
                            
                        </form>
                        <!-- Form kedua berakhir di sini -->

                    </div>
            </div>
        </div>
</div>

<!-- Tampilan untuk perangkat mobile -->
<div class="md:hidden">
    <!-- Bagian formulir tanpa gambar -->
    <div class="w-full flex justify-center items-center p-4">
        <div class="bg-white rounded-lg p-5 w-full" style="margin: auto;">
            <div class="bg-white shadow-lg rounded-lg p-6 w-full" style="margin: auto;">
                <!-- Isi formulir di sini -->
            </div>
        </div>
    </div>
</div>
<!-- Modal Warning -->
<div id="modalWarning" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 sm:items-top">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4" style="background-color: white; @media (max-width: 640px) { background-color: white; }">
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
                <button type="button" class="bg-primary text-white px-4 py-2 rounded-sm hover:bg-blue-700 transition duration-300 ml-2" onclick="closeModalWarning()">OK</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk memeriksa validasi pada setiap div isian
    function validateFields() {
        var isValid = true;
        var inputFields = document.querySelectorAll('.registration-form input[required], .registration-form select[required]');

        inputFields.forEach(function(field) {
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
        nextButton.addEventListener('click', function(event) {
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
        signUpButton.addEventListener('click', function(event) {
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

        inputFields.forEach(function(field) {
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
        signUpButton2.addEventListener('click', function(event) {
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
</script>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const genderToggle = document.getElementById('genderToggle');
        const genderDropdown = document.getElementById('genderDropdown');
        const genderIcon = document.getElementById('genderIcon');
        const genderRadios = document.querySelectorAll('input[name="gender"]');
        const genderSelected = document.getElementById('genderSelected');

        const educationToggle = document.getElementById('educationToggle');
        const educationDropdown = document.getElementById('educationDropdown');
        const educationIcon = document.getElementById('educationIcon');
        const educationRadios = document.querySelectorAll('input[name="education"]');
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

        genderToggle.addEventListener('click', function() {
            toggleDropdown(genderDropdown, genderIcon);
        });

        educationToggle.addEventListener('click', function() {
            toggleDropdown(educationDropdown, educationIcon);
        });

        genderRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                genderSelected.textContent = this.value;
                genderDropdown.classList.add('hidden');
                genderIcon.classList.remove('rotate-180');
            });
        });

        educationRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                educationSelected.textContent = this.value === 'Other' ? 'Other' : this.value;
                educationDropdown.classList.add('hidden');
                educationIcon.classList.remove('rotate-180');
                otherInput.disabled = this.value !== 'Other';
            });
        });

        otherRadio.addEventListener('change', function() {
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
        nextButton.addEventListener('click', function(event) {
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
@endsection