@extends('moduls.internship.layouts.main',[
'title' => 'Registrasi Internship',
'active' => 'Registrasi',
'page' => 'Registrasi',
])

@section('content')

<div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">
  <!-- bg-internship -->
  <div class="absolute inset-0 flex items-center justify-center">
    <!-- Gambar latar belakang untuk desktop -->
    <img src="{{ asset('assets/images/internship/register/bg-registrasi.png') }}" alt="Latar Belakang Berbinar" class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover">
    <!-- Gambar latar belakang untuk mobile -->
    <img src="{{ asset('assets/images/internship/register/bg-registrasi-mobile.png') }}" alt="Latar Belakang Berbinar" class="absolute inset-0 md:hidden object-cover">
  </div>


  <!-- Logo Container -->
  <div class="absolute top-2 left-0 md:mt-4 ml-4 flex items-center">
    <img src="{{ asset('assets/images/internship/register/logo-berbinar.png') }}" alt="Logo Berbinar" class="w-14 pl-4 pt-4">
  </div>

  <!-- Text Container -->
  <div class="text-center mt-8 mb-10 relative z-40 md:mt-6 md:mb-4">
    <h2 class="text-md font-bold text-white md:text-3xl sm:text-base">Pendaftaran Internship Berbinar</h2>
    <h2 class="text-md text-white md:mt-2 md:text-3xl sm:text-base">UI/UX Designer</h2>
  </div>

  <!-- Card Box -->
  <div id="formContainer" class="h-[680px] relative mx-8 my-4 md:my-8 md:h-[620px] md:max-h-[700px] md:mb-10 justify-end z-30 md:w-full md:max-w-5xl bg-white p-6 rounded-3xl shadow-lg mt-2 md:rounded-lg overflow-y-auto md:overflow-y-hidden">
    <div class="number flex space-x-4 py-6 -mt-6 hidden md:flex justify-center w-full">
      <!-- Isi nomor -->
      <div class="w-1/5 py-2 relative flex items-center justify-center" id="pageIndicatorOne">
        <div class="rounded-full bg-primary w-12 h-12 flex items-center justify-center mx-auto mr-8">
          <h1 class="text-xl text-white">1</h1>
        </div>
      </div>

      <div class="w-1/5 py-2 relative flex items-center justify-center hidden" id="pageIndicatorTwo">
        <div class="rounded-full bg-[#C7F8FF] w-12 h-12 flex items-center justify-center mx-auto mr-8">
          <h1 class="text-xl text-black">1</h1>
        </div>
      </div>

      <div class="w-1/5 py-2 relative flex items-center justify-center" id="pageIndicatorOneAlt">
        <div class="flex items-center justify-center">
          <div class="h-24 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-14 -ml-6"></div>
          <div class="rounded-full bg-[#C7F8FF] w-12 h-12 flex items-center justify-center mx-auto ml-2">
            <h1 class="text-xl text-black">2</h1>
          </div>
        </div>
      </div>

      <div class="w-1/5 py-2 relative flex items-center justify-center hidden" id="pageIndicatorTwoAlt">
        <div class="flex items-center justify-center">
          <div class="h-24 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-14 -ml-6"></div>
          <div class="rounded-full bg-primary w-12 h-12 flex items-center justify-center mx-auto ml-2">
            <h1 class="text-xl text-white">2</h1>
          </div>
        </div>
      </div>


      <div class="w-1/5 py-2 relative flex items-center justify-center hidden" id="pageIndicatorThree">
        <div class="flex items-center justify-center">
          <div class="h-24 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-14 -ml-6"></div>
          <div class="rounded-full bg-primary w-12 h-12 flex items-center justify-center mx-auto ml-2">
            <h1 class="text-xl text-white">3</h1>
          </div>
        </div>
      </div>

      <div class="w-1/5 py-2 relative flex items-center justify-center" id="pageIndicatorThreeAlt">
        <div class="flex items-center justify-center">
          <div class="h-24 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-14 -ml-6"></div>
          <div class="rounded-full bg-[#C7F8FF] w-12 h-12 flex items-center justify-center mx-auto ml-2">
            <h1 class="text-xl text-black">3</h1>
          </div>
        </div>
      </div>

      <div class="w-1/5 py-2 relative flex items-center justify-center" id="pageIndicatorFourAlt">
        <div class="flex items-center justify-center">
          <div class="h-24 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-14 -ml-6"></div>
          <div class="rounded-full bg-[#C7F8FF] w-12 h-12 flex items-center justify-center mx-auto ml-2">
            <h1 class="text-xl text-black">4</h1>
          </div>
        </div>
      </div>

      <div class="w-1/5 py-2 relative flex items-center justify-center hidden" id="pageIndicatorFour">
        <div class="flex items-center justify-center">
          <div class="h-24 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-14 -ml-6"></div>
          <div class="rounded-full bg-primary w-12 h-12 flex items-center justify-center mx-auto ml-2">
            <h1 class="text-xl text-white">4</h1>
          </div>
        </div>
      </div>

      <div class="w-1/5 py-2 relative flex items-center justify-center" id="pageIndicatorFiveAlt">
        <div class="flex items-center justify-center">
          <div class="h-24 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-14 -ml-6"></div>
          <div class="rounded-full bg-[#C7F8FF] w-12 h-12 flex items-center justify-center mx-auto ml-2">
            <h1 class="text-xl text-black">5</h1>
          </div>
        </div>
      </div>

      <div class="w-1/5 py-2 relative flex items-center justify-center hidden" id="pageIndicatorFive">
        <div class="flex items-center justify-center">
          <div class="h-24 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-14 -ml-6"></div>
          <div class="rounded-full bg-primary w-12 h-12 flex items-center justify-center mx-auto ml-2">
            <h1 class="text-xl text-white">5</h1>
          </div>
        </div>
      </div>

    </div>

    <!-- Halaman Pertama -->
    <h2 class="tittleOne text-xl font-bold text-bold text-center mt-4 md:-mt-10 mb-4">Biodata Diri</h2>
    <div id="pageOne" class="pageOne flex flex-col mx-auto md:flex-row">
      <!-- Card Kiri (Informasi) -->
      <div class="w-full md:w-1/2 py-2">
        <div class="px-4">
          <form id="formPageOne" action="#" method="POST">
            <div class="mb-4">
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
              <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            </div>
            <div class="mb-4">
              <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
              <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda" class="mt-1 bg-gray-200 block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            </div>
            <div class="mb-4">
              <label for="nama_panggilan" class="block text-sm font-medium text-gray-700">Nama Panggilan</label>
              <input type="text" id="nama_panggilan" name="nama_panggilan" placeholder="Masukkan Nama Panggilan Anda" class="mt-1 bg-gray-200 block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            </div>
            <div class="mb-4">
              <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
              <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="mt-1 block w-full px-3 py-2 border bg-gray-200 border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            </div>
            <div class="mb-4">
              <label for="nomor_wa" class="block text-sm font-medium text-gray-700">Nomor WhatsApp</label>
              <input type="text" id="nomor_wa" name="nomor_wa" placeholder="Masukkan Nomor WhatsApp Anda" class="mt-1 bg-gray-200 block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            </div>
            <!-- </form> -->
        </div>
      </div>
      <!-- Card Kanan (Informasi) -->
      <div class="w-full md:w-1/2 py-2">
        <div class="px-4">
          <div class="mb-4">
            <label for="domisili" class="block text-sm font-medium text-gray-700">Domisili (Kota saja)</label>
            <input type="text" id="domisili" name="domisili" placeholder="Lorem Ipsum" class="mt-1 block w-full bg-gray-200 px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
          </div>
          <div class="mb-4">
            <label for="sekolah" class="block text-sm font-medium text-gray-700">Sekolah/Instansi/Nama Perguruan Tinggi</label>
            <input type="text" id="sekolah" name="sekolah" placeholder="Lorem Ipsum" class="mt-1 bg-gray-200 block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
          </div>
          <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status (Kelas/Semester/Fresh Graduate)</label>
            <input type="text" id="status" name="status" placeholder="Lorem Ipsum" class="mt-1 bg-gray-200 block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
          </div>
          <div class="mb-4">
            <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
            <input type="text" id="jurusan" name="jurusan" placeholder="Lorem Ipsum" class="mt-1 bg-gray-200 block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
          </div>
        </div>
      </div>
    </div>
    <!-- Tombol untuk tampilan desktop -->
    <div id="buttonsPageOne" class="hidden md:flex justify-end md:-mt-8">
      <button id="nextButtonPageOne" type="button" class="w-full mr-4 md:w-auto bg-primary text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Selanjutnya</button>
    </div>

    <!-- Halaman Kedua -->
    <h2 id="pageTitleTwo" class="tittleTwo text-xl font-bold text-bold text-center md:-mb-3 mt-3 hidden">Sosial Media</h2>
    <div id="pageTwo" class="pageTwo flex flex-col mx-auto md:flex-row mt-5 mx-2 hidden">
      <!-- Card Penuh (Informasi) -->
      <div class="w-full mx-auto md:w-full md:py-2 md:px-20">
        <div class="px-4">
          <!-- <form id="formPageTwo" action="#" method="POST"> -->
          <div class="mb-3">
            <label for="instagram" class="block text-base font-medium text-gray-700">Tautan akun Instagram</label>
            <p class="text-xs">(Disarankan mencantumkan akun Instagram yang tidak diprivate)</p>
            <input type="text" id="instagram" name="instagram" placeholder="https://www.instagram.com/xxxx/" class="mt-1 block w-full px-2.5 py-1.5 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm">
          </div>
          <div class="mb-3">
            <label for="tiktok" class="block text-base font-medium text-gray-700">Tautan akun TikTok</label>
            <p class="text-xs">(Disarankan mencantumkan akun TikTok yang tidak diprivate)</p>
            <input type="text" id="tiktok" name="tiktok" placeholder="https://www.TikTok.com/xxxx/" class="mt-1 block w-full px-2.5 py-1.5 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm">
          </div>
          <div class="mb-3">
            <label for="linkedin" class="block text-base font-medium text-gray-700">Tautan akun LinkedIn</label>
            <p class="text-xs">(Disarankan mencantumkan akun LinkedIn yang tidak diprivate)</p>
            <input type="text" id="linkedin" name="linkedin" placeholder="https://www.LinkedIn.com/xxxx/" class="mt-1 block w-full px-2.5 py-1.5 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm">
          </div>
          <div class="mb-0">
            <label for="informasi_rekrutmen" class="block text-base font-medium text-gray-700">Dari mana kamu mendapatkan informasi rekrutmen ini?</label>
            <p class="text-xs">(Jika mendapatkan info selain dari jawaban yang ada, tulis pada kolom other)</p>
            <input type="text" id="informasi_rekrutmen" name="informasi_rekrutmen" placeholder="Lorem Ipsum" class="mt-1 block w-full px-2.5 py-1.5 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm">
          </div>

          <div class="hidden md:flex justify-between items-center -mb-4 mt-8">
            <!-- Tombol Sebelumnya -->
            <button id="previousButtonPageTwo" type="button" class="w-full md:w-auto bg-[#C7F8FF] text-gray-700 py-2 px-4 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">Sebelumnya</button>

            <!-- Tombol Selanjutnya -->
            <button id="nextButtonPageTwo" type="button" class="w-full md:w-auto bg-primary text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Selanjutnya</button>
          </div>
          <!-- </form> -->
        </div>
      </div>
    </div>

    <!-- Halaman Ketiga -->
    <h2 id="pageTitleThree" class="tittleThree text-xl font-bold text-bold text-center md:-mb-3 mt-3 hidden">Berkas Pendaftaran</h2>
    <div id="pageThree" class="pageThree flex flex-col mx-auto md:flex-row mt-5 mx-2 hidden">
      <!-- Card Penuh (Informasi) -->
      <div class="w-full mx-auto md:w-full md:py-2 md:px-20">
        <div class="px-4">
          <form id="formPageThree" action="#" method="POST"> <!-- Tambahkan form element -->
            <div class="mb-4">
              <label for="tiktokFour" class="block text-lg font-medium text-gray-700">Tautan CV</label>
              <!-- <p class="text-sm">(Disarankan mencantumkan akun TikTok yang tidak diprivate)</p> -->
              <input type="text" id="tiktokFour" name="tiktokFour" placeholder="https://www.drive.google.com/xxxx/" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            </div>
            <div class="mb-4">
              <label for="linkedinFour" class="block text-lg font-medium text-gray-700">Tautan Portofolio</label>
              <!-- <p class="text-sm">(Disarankan mencantumkan akun LinkedIn yang tidak diprivate)</p> -->
              <input type="text" id="linkedinFour" name="linkedinFour" placeholder="https://www.drive.google.com/xxxx/" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            </div>
            <div class="mb-0">
              <label for="informasi_rekrutmenFour" class="block text-lg font-medium text-gray-700">Tautan Berkas Screenshot Bukti Follow Semua Media Sosial Berbinar</label>
              <p class="text-sm">Link seluruh sosial media dapat diakses di sini:</p>
              <a href="https://linktr.ee/berbinarinsight" id="informasi_rekrutmenFour" name="informasi_rekrutmenFour" class="text-sm text-blue-500 underline">https://linktr.ee/berbinarinsight</a>
              <input type="text" id="linkedinFour" name="linkedinFour" placeholder="https://www.drive.google.com/xxxx/" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            </div>

            <div class="hidden md:flex justify-between items-center -mb-4 mt-8">
              <!-- Tombol Sebelumnya -->
              <button id="previousButtonPageThree" type="button" class="w-full md:w-auto bg-[#C7F8FF] text-gray-700 py-2 px-4 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">Sebelumnya</button>

              <!-- Tombol Selanjutnya -->
              <button id="nextButtonPageThree" type="button" class="w-full md:w-auto bg-primary text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Selanjutnya</button>
            </div>
            <!-- </form> -->
        </div>
      </div>
    </div>

    <!-- Halaman Keempat -->
    <h2 id="pageTitleFour" class="tittleFour text-xl font-bold text-bold text-center md:-mb-3 mt-3 hidden">Motivasi</h2>
    <div id="pageFour" class="pageFour flex flex-col mx-auto md:flex-row mt-5 mx-2 hidden">
      <!-- Card Penuh (Informasi) -->
      <div class="w-full mx-auto md:w-full md:py-2 md:px-20">
        <div class="px-4">
          <!-- <form id="formPageFour" action="#" method="POST"> Tambahkan form element -->
          <div class="mb-4">
            <label for="tiktokFour" class="block text-lg font-medium text-gray-700">Motivasi Mendaftar Internship Berbinar</label>
            <!-- <p class="text-sm">(Disarankan mencantumkan akun TikTok yang tidak diprivate)</p> -->
            <textarea type="textarea" id="tiktokFour" name="tiktokFour" placeholder="Lorem Ipsum" class="mt-1 h-[200px] block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"></textarea>
          </div>



          <div class="hidden md:flex justify-between items-center -mb-4 mt-8">
            <!-- Tombol Sebelumnya -->
            <button id="previousButtonPageFour" type="button" class="w-full md:w-auto bg-[#C7F8FF] text-gray-700 py-2 px-4 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">Sebelumnya</button>

            <!-- Tombol Selanjutnya -->
            <button id="nextButtonPageFour" type="button" class="w-full md:w-auto bg-primary text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Selanjutnya</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Halaman Kelima -->
    <h2 id="pageTitleFive" class="tittleFive text-2xl font-bold text-bold text-center md:-mb-3 mt-3 hidden">Terimakasih</h2>
    <div id="pageFive" class="pageFive flex flex-col justify-center items-center mx-auto md:flex-row mt-5 mx-2 hidden">
      <div class="w-full mx-auto md:w-full md:py-2 md:px-20">
        <div class="px-4">
          <!-- <form id="formPageFive" action="#" method="POST"> Tambahkan form element -->
          <div class="mb-4 px-8 text-center">
            <!-- <label for="tiktokFive" class="block text-lg font-medium text-gray-700">Motivasi Mendaftar Internship Berbinar</label> -->
            <p class="text-sm">Terima kasih sudah mendaftar. Pastikan bahwa seluruh data <br> telah benar, link dapat diakses, dan jangan lupa tekan tombol <br> kirim di bawah ini 😆</p>
            <p class="text-sm mt-4 mb-4">Jika ada pertanyaan lebih lanjut, bisa hubungi WA di bawah ini:<br>
              Nisa (<a href="https://wa.me/6285721842573" class="text-blue-500 underline">wa.me/6285721842573</a>)<br>
              Zona (<a href="https://wa.me/6288233215540" class="text-blue-500 underline">wa.me/6288233215540</a>)
            </p>
            <!-- <textarea type="textarea" id="tiktokFive" name="tiktokFive" placeholder="Lorem Ipsum" class="mt-1 h-[200px] block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"></textarea> -->
          </div>

          <div class="hidden md:flex justify-between items-center -mb-4 mt-8">
            <!-- Tombol Sebelumnya -->
            <button id="previousButtonPageFive" type="button" class="w-full md:w-auto bg-[#C7F8FF] text-gray-700 py-2 px-4 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">Sebelumnya</button>

            <!-- Tombol Selanjutnya -->
            <button id="nextButtonPageFive" type="button" class="w-full md:w-auto bg-primary text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Kirim</button>
          </div>

          <!-- Modal -->
          <div id="successModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex w-full items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
              <!-- Background overlay -->
              <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

              <!-- Modal content -->
              <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
              <div class="inline-block align-bottom bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                  <div class="sm:flex sm:items-center">
                    <div class="w-full sm:w-auto mx-auto"> <!-- Center the content horizontally -->
                      <div class="text-lg leading-6 font-medium text-gray-900 relative text-center" id="modal-title">
                        <img src="{{ asset('assets/images/internship/register/icon-success.png') }}" alt="Success Icon" class="block mx-auto w-9 h-9 md:w-9 md:h-9 object-cover">
                      </div>
                      <div class="mt-2 text-center">
                        <p class="text-sm text-gray-500">
                          Berhasil mendaftar pada posisi UI/UX Designer, silahkan cek Email/WhatsApp untuk informasi selanjutnya.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                  <button id="closeModal" type="button" class="w-xl md:w-full md:w-auto bg-primary text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary sm:text-sm">
                    Tutup
                  </button>
                </div>
              </div>
            </div>
          </div>


          <script>
            document.addEventListener("DOMContentLoaded", function() {
              const successModal = document.getElementById('successModal');
              const previousButtonPageFive = document.getElementById('previousButtonPageFive');
              const nextButtonPageFive = document.getElementById('nextButtonPageFive');
              const closeModal = document.getElementById('closeModal');

              if (nextButtonPageFive) {
                nextButtonPageFive.addEventListener('click', function() {
                  // Tampilkan modal
                  successModal.classList.remove('hidden');
                  successModal.classList.add('flex');

                  // Optional: Anda bisa menyembunyikan tombol "Sebelumnya" di sini
                  if (previousButtonPageFive) {
                    previousButtonPageFive.style.display = 'none';
                  }
                });
              }

              if (closeModal) {
                closeModal.addEventListener('click', function() {
                  // Sembunyikan modal
                  successModal.classList.remove('flex');
                  successModal.classList.add('hidden');

                  // Optional: Anda bisa menampilkan kembali tombol "Sebelumnya" di sini
                  if (previousButtonPageFive) {
                    previousButtonPageFive.style.display = 'block';
                  }
                });
              }
            });
          </script>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Button Mobile -->
<div class="h-1/12 relative flex flex-col items-end justify-end">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end mt-8 md:hidden">
      <button id="previousMobile" type="button" class="previousMobile cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 hidden">Previous</button>
      <button id="nextMobile" type="button" class="nextMobile cursor-pointer bg-black text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Next</button>
    </div>
  </div>
</div>
<div class="h-1/12 relative flex flex-col items-end justify-end">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end md:hidden">
      <button id="previousMobileTwo" type="button" class="previousMobileTwo cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 hidden">Previous</button>
      <button id="nextMobileTwo" type="button" class="nextMobileTwo cursor-pointer bg-black text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary hidden">Next</button>
    </div>
  </div>
</div>
<div class="h-1/12 relative flex flex-col items-end justify-end">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end md:hidden">
      <button id="previousMobileThree" type="button" class="previousMobileThree cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 hidden">Previous</button>
      <button id="nextMobileThree" type="button" class="nextMobileThree cursor-pointer bg-black text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary hidden">Next</button>
    </div>
  </div>
</div>
<div class="h-1/12 relative flex flex-col items-end justify-end">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end md:hidden">
      <button id="previousMobileFour" type="button" class="previousMobileFour cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 hidden">Previous</button>
      <button id="nextMobileFour" type="button" class="nextMobileFour cursor-pointer bg-black text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary hidden">Next</button>
    </div>
  </div>
</div>
<div class="h-1/12 relative flex flex-col items-end justify-end">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end md:hidden">
      <button id="previousMobileFive" type="button" class="previousMobileFive cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 hidden">Previous</button>
      <button id="nextMobileFive" type="submit" class="nextMobileFive cursor-pointer bg-black text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary hidden">Sent</button>
    </div>
  </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const successModal = document.getElementById('successModal');
    const nextMobileFive = document.getElementById('nextMobileFive');
    const closeModal = document.getElementById('closeModal');

    if (nextMobileFive) {
      nextMobileFive.addEventListener('click', function() {
        // Tampilkan modal
        successModal.classList.remove('hidden');
        successModal.classList.add('flex');
      });
    }

    if (closeModal) {
      closeModal.addEventListener('click', function() {
        // Sembunyikan modal
        successModal.classList.remove('flex');
        successModal.classList.add('hidden');
      });
    }
  });
</script>
<script>
  // Ambil elemen-elemen yang diperlukan dari DOM
  const pageOne = document.getElementById('pageOne');
  const pageTwo = document.getElementById('pageTwo');
  const pageThree = document.getElementById('pageThree');
  const pageFour = document.getElementById('pageFour');
  const pageFive = document.getElementById('pageFive');

  const pageTitleOne = document.querySelector('.tittleOne');
  const pageTitleTwo = document.getElementById('pageTitleTwo');
  const pageTitleThree = document.getElementById('pageTitleThree');
  const pageTitleFour = document.getElementById('pageTitleFour');
  const pageTitleFive = document.getElementById('pageTitleFive');

  const buttonsPageOne = document.getElementById('buttonsPageOne');
  const nextButtonPageOne = document.getElementById('nextButtonPageOne');
  const previousButtonPageTwo = document.getElementById('previousButtonPageTwo');
  const nextButtonPageTwo = document.getElementById('nextButtonPageTwo');
  const previousButtonPageThree = document.getElementById('previousButtonPageThree');
  const nextButtonPageThree = document.getElementById('nextButtonPageThree');
  const previousButtonPageFour = document.getElementById('previousButtonPageFour');
  const nextButtonPageFour = document.getElementById('nextButtonPageFour');
  const previousButtonPageFive = document.getElementById('previousButtonPageFive');
  const nextButtonPageFive = document.getElementById('nextButtonPageFive');

  const formContainer = document.getElementById('formContainer');
  const nextButtonMobile = document.querySelector('.nextMobile');
  const nextButtonMobileTwo = document.querySelector('.nextMobileTwo');
  const nextButtonMobileThree = document.querySelector('.nextMobileThree');
  const nextButtonMobileFour = document.querySelector('.nextMobileFour');
  const nextButtonMobileFive = document.querySelector('.nextMobileFive');

  const previousButtonMobile = document.querySelector('.previousMobile');
  const previousButtonMobileTwo = document.querySelector('.previousMobileTwo');
  const previousButtonMobileThree = document.querySelector('.previousMobileThree');
  const previousButtonMobileFour = document.querySelector('.previousMobileFour');
  const previousButtonMobileFive = document.querySelector('.previousMobileFive');

  const pageIndicatorOne = document.getElementById('pageIndicatorOne');
  const pageIndicatorTwo = document.getElementById('pageIndicatorTwo');
  const pageIndicatorThree = document.getElementById('pageIndicatorThree');
  const pageIndicatorFour = document.getElementById('pageIndicatorFour');
  const pageIndicatorFive = document.getElementById('pageIndicatorFive');
  const pageIndicatorOneAlt = document.getElementById('pageIndicatorOneAlt');
  const pageIndicatorTwoAlt = document.getElementById('pageIndicatorTwoAlt');
  const pageIndicatorThreeAlt = document.getElementById('pageIndicatorThreeAlt');
  const pageIndicatorFourAlt = document.getElementById('pageIndicatorFourAlt');
  const pageIndicatorFiveAlt = document.getElementById('pageIndicatorFiveAlt');

  // Fungsi untuk menampilkan halaman pertama dan menyembunyikan halaman kedua dan ketiga
  function showPageOne() {
    pageOne.classList.remove('hidden');
    pageTitleOne.classList.remove('hidden');
    pageIndicatorOne.classList.remove('hidden');
    pageIndicatorOneAlt.classList.remove('hidden');
    nextButtonMobile.classList.remove('hidden');
    previousButtonMobile.classList.add('hidden');

    pageTwo.classList.add('hidden');
    pageTitleTwo.classList.add('hidden');
    pageIndicatorTwo.classList.add('hidden');
    pageIndicatorTwoAlt.classList.add('hidden');
    nextButtonPageOne.classList.remove('hidden');
    nextButtonMobileTwo.classList.add('hidden');
    previousButtonMobileTwo.classList.add('hidden');

    pageThree.classList.add('hidden');
    pageTitleThree.classList.add('hidden');
    pageIndicatorThree.classList.add('hidden');
    pageIndicatorThreeAlt.classList.remove('hidden');
    previousButtonPageThree.classList.add('hidden');
    nextButtonMobileThree.classList.add('hidden');
    previousButtonMobileThree.classList.add('hidden');

    pageFour.classList.add('hidden');
    pageTitleFour.classList.add('hidden');
    pageIndicatorFour.classList.add('hidden');
    pageIndicatorFourAlt.classList.remove('hidden');
    previousButtonPageFour.classList.add('hidden');
    nextButtonMobileFour.classList.add('hidden');
    previousButtonMobileFour.classList.add('hidden');

    pageFive.classList.add('hidden');
    pageTitleFive.classList.add('hidden');
    pageIndicatorFive.classList.add('hidden');
    pageIndicatorFiveAlt.classList.remove('hidden');
    previousButtonPageFive.classList.add('hidden');
    nextButtonMobileFive.classList.add('hidden');
    previousButtonMobileFive.classList.add('hidden');

    formContainer.classList.add('h-[680px]');
  }

  // Fungsi untuk menampilkan halaman kedua dan menyembunyikan halaman pertama dan ketiga
  function showPageTwo() {
    pageOne.classList.add('hidden');
    pageTitleOne.classList.add('hidden');
    pageIndicatorOne.classList.add('hidden');
    pageIndicatorOneAlt.classList.add('hidden');
    nextButtonPageOne.classList.add('hidden');
    nextButtonMobile.classList.add('hidden');
    previousButtonMobile.classList.add('hidden');

    pageTwo.classList.remove('hidden');
    pageTitleTwo.classList.remove('hidden');
    pageIndicatorTwo.classList.remove('hidden');
    pageIndicatorTwoAlt.classList.remove('hidden');
    previousButtonPageTwo.classList.remove('hidden');
    nextButtonPageTwo.classList.remove('hidden');
    nextButtonMobileTwo.classList.remove('hidden');
    previousButtonMobileTwo.classList.remove('hidden');

    pageThree.classList.add('hidden');
    pageTitleThree.classList.add('hidden');
    pageIndicatorThree.classList.add('hidden');
    pageIndicatorThreeAlt.classList.remove('hidden');
    previousButtonPageThree.classList.add('hidden');
    nextButtonMobileThree.classList.add('hidden');
    previousButtonMobileThree.classList.add('hidden');

    pageFour.classList.add('hidden');
    pageTitleFour.classList.add('hidden');
    pageIndicatorFour.classList.add('hidden');
    pageIndicatorFourAlt.classList.remove('hidden');
    previousButtonPageFour.classList.add('hidden');
    nextButtonMobileFour.classList.add('hidden');
    previousButtonMobileFour.classList.add('hidden');

    pageFive.classList.add('hidden');
    pageTitleFive.classList.add('hidden');
    pageIndicatorFive.classList.add('hidden');
    pageIndicatorFiveAlt.classList.remove('hidden');
    previousButtonPageFive.classList.add('hidden');
    nextButtonMobileFive.classList.add('hidden');
    previousButtonMobileFive.classList.add('hidden');

    formContainer.classList.add('h-[680px]');
  }

  // Fungsi untuk menampilkan halaman ketiga dan menyembunyikan halaman pertama dan kedua
  function showPageThree() {
    pageOne.classList.add('hidden');
    pageTitleOne.classList.add('hidden');
    pageIndicatorOne.classList.add('hidden');
    pageIndicatorOneAlt.classList.remove('hidden');
    nextButtonMobile.classList.add('hidden');
    nextButtonPageTwo.classList.add('hidden');

    pageTwo.classList.add('hidden');
    pageTitleTwo.classList.add('hidden');
    pageIndicatorTwo.classList.remove('hidden');
    pageIndicatorTwoAlt.classList.add('hidden');
    nextButtonPageOne.classList.add('hidden');
    nextButtonMobileTwo.classList.add('hidden');
    previousButtonMobileTwo.classList.add('hidden');

    pageThree.classList.remove('hidden');
    pageTitleThree.classList.remove('hidden');
    pageIndicatorThree.classList.remove('hidden');
    pageIndicatorThreeAlt.classList.add('hidden');
    previousButtonPageThree.classList.remove('hidden');
    nextButtonMobileThree.classList.remove('hidden');
    previousButtonMobileThree.classList.remove('hidden');

    pageFour.classList.add('hidden');
    pageTitleFour.classList.add('hidden');
    pageIndicatorFour.classList.add('hidden');
    pageIndicatorFourAlt.classList.remove('hidden');
    previousButtonPageFour.classList.add('hidden');
    nextButtonMobileFour.classList.add('hidden');
    previousButtonMobileFour.classList.add('hidden');

    pageFive.classList.add('hidden');
    pageTitleFive.classList.add('hidden');
    pageIndicatorFive.classList.add('hidden');
    pageIndicatorFiveAlt.classList.remove('hidden');
    previousButtonPageFive.classList.add('hidden');
    nextButtonMobileFive.classList.add('hidden');
    previousButtonMobileFive.classList.add('hidden');ontainer.classList.add('h-[680px]');
  }

  function showPageFour() {
    pageOne.classList.add('hidden');
    pageTitleOne.classList.add('hidden');
    pageIndicatorOne.classList.add('hidden');
    pageIndicatorOneAlt.classList.remove('hidden');
    nextButtonPageTwo.classList.add('hidden');
    nextButtonMobile.classList.add('hidden');

    pageTwo.classList.add('hidden');
    pageTitleTwo.classList.add('hidden');
    pageIndicatorTwo.classList.remove('hidden');
    pageIndicatorTwoAlt.classList.add('hidden');
    nextButtonPageOne.classList.add('hidden');
    nextButtonMobileTwo.classList.add('hidden');
    previousButtonMobileTwo.classList.add('hidden');

    pageThree.classList.add('hidden');
    pageTitleThree.classList.add('hidden');
    pageIndicatorThree.classList.add('hidden');
    pageIndicatorThreeAlt.classList.remove('hidden');
    previousButtonPageThree.classList.add('hidden');
    nextButtonMobileThree.classList.add('hidden');
    previousButtonMobileThree.classList.add('hidden');

    pageFour.classList.remove('hidden');
    pageTitleFour.classList.remove('hidden');
    pageIndicatorFour.classList.remove('hidden');
    pageIndicatorFourAlt.classList.add('hidden');
    previousButtonPageFour.classList.remove('hidden');
    nextButtonMobileFour.classList.remove('hidden');
    previousButtonMobileFour.classList.remove('hidden');

    pageFive.classList.add('hidden');
    pageTitleFive.classList.add('hidden');
    pageIndicatorFive.classList.add('hidden');
    pageIndicatorFiveAlt.classList.remove('hidden');
    previousButtonPageFive.classList.add('hidden');
    nextButtonMobileFive.classList.add('hidden');
    previousButtonMobileFive.classList.add('hidden');

    formContainer.classList.add('h-[680px]');
  }

  function showPageFive() {
    pageOne.classList.add('hidden');
    pageTitleOne.classList.add('hidden');
    pageIndicatorOne.classList.add('hidden');
    pageIndicatorOneAlt.classList.remove('hidden');
    nextButtonMobile.classList.add('hidden');
    nextButtonPageTwo.classList.add('hidden');
    previousButtonMobile.classList.add('hidden');

    pageTwo.classList.add('hidden');
    pageTitleTwo.classList.add('hidden');
    pageIndicatorTwo.classList.remove('hidden');
    pageIndicatorTwoAlt.classList.add('hidden');
    nextButtonPageOne.classList.add('hidden');
    nextButtonMobileTwo.classList.add('hidden');
    previousButtonMobileTwo.classList.add('hidden');

    pageThree.classList.add('hidden');
    pageTitleThree.classList.add('hidden');
    pageIndicatorThree.classList.add('hidden');
    pageIndicatorThreeAlt.classList.remove('hidden');
    previousButtonPageThree.classList.add('hidden');
    nextButtonMobileThree.classList.add('hidden');
    previousButtonMobileThree.classList.add('hidden');

    pageFour.classList.add('hidden');
    pageTitleFour.classList.add('hidden');
    pageIndicatorFour.classList.add('hidden');
    pageIndicatorFourAlt.classList.remove('hidden');
    previousButtonPageFour.classList.add('hidden');
    nextButtonMobileFour.classList.add('hidden');
    previousButtonMobileFour.classList.add('hidden');

    pageFive.classList.remove('hidden');
    pageTitleFive.classList.remove('hidden');
    pageIndicatorFive.classList.remove('hidden');
    pageIndicatorFiveAlt.classList.add('hidden');
    previousButtonPageFive.classList.remove('hidden');
    nextButtonPageFive.classList.remove('hidden');
    nextButtonMobileFive.classList.remove('hidden');
    previousButtonMobileFive.classList.remove('hidden');

    formContainer.classList.add('h-[680px]');
  }

  // Tambahkan event listener pada tombol "Selanjutnya" pada halaman pertama
  if (nextButtonMobile) {
    nextButtonMobile.addEventListener('click', function() {
      showPageTwo();
    });
  }

  // Tambahkan event listener pada tombol "Selanjutnya" pada halaman kedua
  if (nextButtonMobileTwo) {
    nextButtonMobileTwo.addEventListener('click', function() {
      showPageThree();
    });
  }

  // Tambahkan event listener pada tombol "Selanjutnya" pada halaman ketiga
  if (nextButtonMobileThree) {
    nextButtonMobileThree.addEventListener('click', function() {
      showPageFour();
    });
  }

  // Tambahkan event listener pada tombol "Selanjutnya" pada halaman keempat
  if (nextButtonMobileFour) {
    nextButtonMobileFour.addEventListener('click', function() {
      showPageFive();
    });
  }

  // Tambahkan event listener pada tombol "Selanjutnya" pada halaman pertama
  if (nextButtonMobile) {
    nextButtonMobile.addEventListener('click', function() {
      showPageTwo();
    });
  }

  // Tambahkan event listener pada tombol "Selanjutnya" pada halaman kedua
  if (nextButtonMobileTwo) {
    nextButtonMobileTwo.addEventListener('click', function() {
      showPageThree();
    });
  }

  // Tambahkan event listener pada tombol "Selanjutnya" pada halaman ketiga
  if (nextButtonMobileThree) {
    nextButtonMobileThree.addEventListener('click', function() {
      showPageFour();
    });
  }

  // Tambahkan event listener pada tombol "Selanjutnya" pada halaman keempat
  if (nextButtonMobileFour) {
    nextButtonMobileFour.addEventListener('click', function() {
      showPageFive();
    });
  }


  // Tambahkan event listener pada tombol "Selanjutnya" pada halaman kedua
  if (previousButtonMobileTwo) {
    previousButtonMobileTwo.addEventListener('click', function() {
      showPageOne();
    });
  }

  // Tambahkan event listener pada tombol "Selanjutnya" pada halaman ketiga
  if (previousButtonMobileThree) {
    previousButtonMobileThree.addEventListener('click', function() {
      showPageTwo();
    });
  }

  // Tambahkan event listener pada tombol "Selanjutnya" pada halaman keempat
  if (previousButtonMobileFour) {
    previousButtonMobileFour.addEventListener('click', function() {
      showPageThree();
    });
  }

  if (previousButtonMobileFive) {
    previousButtonMobileFive.addEventListener('click', function() {
      showPageFour();
    });
  }



  // Tambahkan event listener pada tombol "Selanjutnya" pada halaman pertama
  if (nextButtonPageOne) {
    nextButtonPageOne.addEventListener('click', function() {
      showPageTwo();
    });
  }

  if (nextButtonPageTwo) {
    nextButtonPageTwo.addEventListener('click', function() {
      showPageThree();
    });
  }

  if (nextButtonPageThree) {
    nextButtonPageThree.addEventListener('click', function() {
      showPageFour();
    });
  }

  if (nextButtonPageFour) {
    nextButtonPageFour.addEventListener('click', function() {
      showPageFive();
    });
  }

  if (nextButtonPageFive) {
    nextButtonPageFive.addEventListener('click', function() {
      showPageFive();
    });
  }


  // Tambahkan event listener pada tombol "Sebelumnya" pada halaman ketiga
  if (previousButtonPageFive) {
    previousButtonPageFive.addEventListener('click', function() {
      showPageFour();
    });
  }

  // Tambahkan event listener pada tombol "Sebelumnya" pada halaman ketiga
  if (previousButtonPageFour) {
    previousButtonPageFour.addEventListener('click', function() {
      showPageThree();
    });
  }
  // Tambahkan event listener pada tombol "Sebelumnya" pada halaman ketiga
  if (previousButtonPageThree) {
    previousButtonPageThree.addEventListener('click', function() {
      showPageTwo();
    });
  }
  // Tambahkan event listener pada tombol "Sebelumnya" pada halaman kedua
  if (previousButtonPageTwo) {
    previousButtonPageTwo.addEventListener('click', function() {
      showPageOne();
    });
  }

  // // Tambahkan event listener pada tombol "Sebelumnya" pada tampilan mobile
  // if (previousButtonMobile) {
  //   previousButtonMobile.addEventListener('click', function() {
  //     if (!pageOne.classList.contains('hidden')) {
  //       showPageOne();
  //     } else if (!pageTwo.classList.contains('hidden')) {
  //       showPageTwo();
  //     } else {
  //       showPageThree();
  //     }
  //   });
  // }
</script>

@endsection