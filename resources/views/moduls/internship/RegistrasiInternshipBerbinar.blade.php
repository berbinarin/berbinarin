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
  <div class="absolute top-2 left-0 md:mt-2 ml-4 flex items-center">
    <img src="{{ asset('assets/images/internship/register/logo-berbinar.png') }}" alt="Logo Berbinar" class="w-14 pl-4 pt-4">
  </div>

  <!-- Text Container -->
  <div class="text-center mt-8 mb-10 relative z-40 md:-mt-1 md:mb-2">
    <h2 class="text-md font-bold text-white md:text-2xl sm:text-base">Pendaftaran Internship Berbinar</h2>
    <h2 class="text-sm text-white md:text-lg sm:text-xs" style="margin-top:8px; margin-bottom:5px;">{{$position->name}}</h2>
  </div>

  <!-- Card Box -->
  <div id="formContainer" class="h-[680px] w-[350px] relative mx-8 my-4 md:my-1 md:h-[488px] md:max-h-[700px] md:mb-3 justify-end z-30 md:w-full md:max-w-4xl bg-white p-6 rounded-3xl shadow-lg mt-2 md:rounded-lg overflow-y-auto md:overflow-y-hidden">
    <div class="number flex space-x-2 py-6 md:px-1 md:-ml-5 -mt-12 hidden md:flex justify-end w-full" style="margin-left: -30px">

      <!-- Page Indicator 1 (pada form 1) -->
      <div class="w-1/5 py-2 relative flex items-center justify-center" id="pageIndicatorOne" style="margin-left: 5px">
        <div class="rounded-full bg-primary w-10 h-10 flex items-center justify-center mx-auto mr-8" style="margin-right: 5px">
          <h1 class="text-lg text-white">1</h1>
        </div>
      </div>

      <!-- Page Indicator 2 -->
      <div class="w-1/5 py-2 relative flex items-center justify-center hidden" id="pageIndicatorTwo" style="margin-left: 5px">
        <div class="rounded-full bg-[#C7F8FF] w-10 h-10 flex items-center justify-center mx-auto mr-8" style="margin-right: 5px">
          <h1 class="text-lg text-black">1</h1>
        </div>
      </div>

      <!-- Page Indicator 1 Alt -->
      <div class="w-1/5 py-2 relative flex items-center justify-center" id="pageIndicatorOneAlt">
        <div class="flex items-center justify-center">
          <div class="h-16 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-6 -ml-16" style="margin-right: 30px"></div>
          <div class="rounded-full bg-[#C7F8FF] w-10 h-10 flex items-center justify-center mx-auto ml-6" style="margin-right: -85px">
            <h1 class="text-lg text-black">2</h1>
          </div>
        </div>
      </div>

      <!-- Page Indicator 2 Alt -->
      <div class="w-1/5 py-2 relative flex items-center justify-center hidden" id="pageIndicatorTwoAlt">
        <div class="flex items-center justify-center">
          <div class="h-16 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-6 -ml-16" style="margin-right: 30px"></div>
          <div class="rounded-full bg-primary w-10 h-10 flex items-center justify-center mx-auto ml-6" style="margin-right: -85px">
            <h1 class="text-lg text-white">2</h1>
          </div>
        </div>
      </div>

      <!-- Page Indicator 3 -->
      <div class="w-1/5 py-2 relative flex items-center justify-center hidden" id="pageIndicatorThree">
        <div class="flex items-center justify-center">
          <div class="h-16 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-6 -ml-16" style="margin-right: 30px"></div>
          <div class="rounded-full bg-primary w-10 h-10 flex items-center justify-center mx-auto ml-6" style="margin-right: -55px">
            <h1 class="text-lg text-white">3</h1>
          </div>
        </div>
      </div>

      <!-- Page Indicator 3 Alt -->
      <div class="w-1/5 py-2 relative flex items-center justify-center" id="pageIndicatorThreeAlt">
        <div class="flex items-center justify-center">
          <div class="h-16 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-6 -ml-16" style="margin-right: 30px"></div>
          <div class="rounded-full bg-[#C7F8FF] w-10 h-10 flex items-center justify-center mx-auto ml-6" style="margin-right: -55px">
            <h1 class="text-lg text-black">3</h1>
          </div>
        </div>
      </div>

      <!-- Page Indicator 4 Alt -->
      <div class="w-1/5 py-2 relative flex items-center justify-center" id="pageIndicatorFourAlt">
        <div class="flex items-center justify-center">
          <div class="h-16 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-6 -ml-16" style="margin-right: 30px;"></div>
          <div class="rounded-full bg-[#C7F8FF] w-10 h-10 flex items-center justify-center mx-auto ml-6" style="margin-right: -30px;">
            <h1 class="text-lg text-black">4</h1>
          </div>
        </div>
      </div>

      <!-- Page Indicator 4 -->
      <div class="w-1/5 py-2 relative flex items-center justify-center hidden" id="pageIndicatorFour">
        <div class="flex items-center justify-center">
          <div class="h-16 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-6 -ml-16" style="margin-right: 30px;"></div>
          <div class="rounded-full bg-primary w-10 h-10 flex items-center justify-center mx-auto ml-6" style="margin-right: -30px">
            <h1 class="text-lg text-white">4</h1>
          </div>
        </div>
      </div>

      <!-- Page Indicator 5 Alt -->
      <div class="w-1/5 py-2 relative flex items-center justify-center" id="pageIndicatorFiveAlt">
        <div class="flex items-center justify-center">
          <div class="h-16 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-6 -ml-16" style="margin-right: 30px;"></div>
          <div class="rounded-full bg-[#C7F8FF] w-10 h-10 flex items-center justify-center mx-auto ml-6">
            <h1 class="text-lg text-black">5</h1>
          </div>
        </div>
      </div>

      <!-- Page Indicator 5 -->
      <div class="w-1/5 py-2 relative flex items-center justify-center hidden" id="pageIndicatorFive">
        <div class="flex items-center justify-center">
          <div class="h-16 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-6 -ml-16" style="margin-right: 30px;"></div>
          <div class="rounded-full bg-primary w-10 h-10 flex items-center justify-center mx-auto ml-6">
            <h1 class="text-lg text-white">5</h1>
          </div>
        </div>
      </div>




    </div>


    <div class="md:w-4xl">
      <!-- Halaman Pertama -->
      <form action="{{ route('user_internships.store') }}" method="POST">
        @csrf
        <h2 class="tittleOne text-xl font-bold text-bold text-center mt-4 md:-mt-7 mb-5">Biodata Diri</h2>
        <div id="pageOne" class="pageOne flex flex-col mx-auto md:flex-row ">
          <!-- <div id="pageTwo" class="pageTwo flex flex-col mx-auto md:flex-row mt-5 mx-2 hidden"> -->

          <!-- Card Kiri (Informasi) -->
          <div class="w-full mx-auto md:w-1/2 -py-6 md:flex md:justify-end">
            <div class="px-4">
              <div class="mb-4">
                <input type="hidden" name="position_id" value={{$position->id}}>
                <label for="email" class="block text-xs font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" placeholder="xxx@gmail.com" class="mt-1 block w-full md:w-[370px] px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs sm:text-xs" required>
              </div>
              <div class="mb-4">
                <label for="nama_lengkap" class="block text-xs font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Anastasya" class="mt-1 bg-gray-200 md:w-[370px] block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs" required>
              </div>
              <div class="mb-4">
                <label for="nama_panggilan" class="block text-xs font-medium text-gray-700">Nama Panggilan</label>
                <input type="text" id="nama_panggilan" name="nama_panggilan" placeholder="Tasya" class="mt-1 bg-gray-200 md:w-[370px] block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs" required>
              </div>
              <div class="mb-4">
                <label for="tanggal_lahir" class="block text-xs font-medium text-gray-700">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="mt-1 block w-full md:w-[370px] px-3 py-2 border bg-gray-200 border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs" required>
              </div>
              <div class="mb-4">
                <label for="no_whatsapp" class="block text-xs font-medium text-gray-700">Nomor WhatsApp</label>
                <input type="text" id="no_whatsapp" name="no_whatsapp" placeholder="+628XXXXXXXXXX" class="mt-1 bg-gray-200 md:w-[370px] block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs" required>
              </div>

            </div>
          </div>

          <!-- Card Kanan (Informasi) -->
          <div class="w-full mx-auto md:w-1/2 -py-6">
            <div class="px-4">
              <div class="mb-4">
                <label for="asal_kota" class="block text-xs font-medium text-gray-700">Domisili (Kota saja)</label>
                <input type="text" id="asal_kota" name="asal_kota" placeholder="Surabaya" class="mt-1 block w-full md:w-[370px] bg-gray-200 px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs" required>
              </div>
              <div class="mb-4">
                <label for="asal_pendidikan" class="block text-xs font-medium text-gray-700">Sekolah/Instansi/Nama Perguruan Tinggi</label>
                <input type="text" id="asal_pendidikan" name="asal_pendidikan" placeholder="Universitas Negeri Surabaya" class="mt-1 md:w-[370px] bg-gray-200 block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs" required>
              </div>
              <div class="mb-4">
                <label for="status_kelas" class="block text-xs font-medium text-gray-700">Status (Kelas/Semester/Fresh Graduate)</label>
                <input type="text" id="status_kelas" name="status_kelas" placeholder="Semester 6" class="mt-1 md:w-[370px] bg-gray-200 block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs" required>
              </div>
              <div class="mb-4">
                <label for="jurusan" class="block text-xs font-medium text-gray-700">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" placeholder="Psikologi" class="mt-1 bg-gray-200 block w-full md:w-[370px] px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs" required>
              </div>
            </div>
          </div>
        </div>
        <!-- Tombol untuk tampilan desktop -->
        <div id="buttonsPageOne" class="hidden md:flex justify-end md:mr-16 md:-mt-16">
          <button id="nextButtonPageOne" type="button" class="w-full -mr-6 mt-4 md:w-auto bg-primary text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Selanjutnya</button>
        </div>

        <!-- Halaman Kedua -->
        <h2 id="pageTitleTwo" class="tittleTwo text-xl font-bold text-bold text-center md:-mb-2 mt-9 hidden">Sosial Media</h2>
        <div id="pageTwo" class="pageTwo flex flex-col mx-auto md:flex-row mt-5 mx-2 hidden">
          <!-- Card Penuh (Informasi) -->
          <div class="w-full mx-auto md:w-full md:py-2 md:px-6 md:-mt-1">
            <div class="px-4">
              <!-- <form id="formPageTwo" action="#" method="POST"> -->
              <div class="mb-3">
                <label for="akun_instagram" class="block text-xs font-medium text-gray-700">Tautan akun Instagram</label>
                <p class="text-xs font-small">(Disarankan mencantumkan akun Instagram yang tidak diprivate)</p>
                <input type="url" id="akun_instagram" name="akun_instagram" placeholder="https://www.instagram.com/username" class="mt-1 block w-full md:w-full px-2.5 py-1.5 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs" required>
              </div>
              <div class="mb-3">
                <label for="akun_tiktok" class="block text-xs font-medium text-gray-700">Tautan akun TikTok</label>
                <p class="text-xs font-small">(Disarankan mencantumkan akun TikTok yang tidak diprivate)</p>
                <input type="url" id="akun_tiktok" name="akun_tiktok" placeholder="https://www.tiktok.com/@username" class="mt-1 block w-full md:w-full px-2.5 py-1.5 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs" required>
              </div>
              <div class="mb-3">
                <label for="akun_linkdin" class="block text-xs font-medium text-gray-700">Tautan akun LinkedIn</label>
                <p class="text-xs font-small">(Disarankan mencantumkan akun LinkedIn yang tidak diprivate)</p>
                <input type="url" id="akun_linkdin" name="akun_linkdin" placeholder="https://www.linkedin.com/in/username" class="mt-1 block w-full md:w-full px-2.5 py-1.5 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs" required>
              </div>
              <div class="mb-3">
                <label for="sumber_informasi" class="block text-xs font-medium text-gray-700">Dari mana kamu mendapatkan informasi rekrutmen ini?</label>
                  <input type="text" id="sumber_informasi" name="sumber_informasi" placeholder="Instagram Berbinar, Tiktok Berbinar, Linkedin Berbinar,Teman, Lainnya" class="mt-1 block w-full md:w-full px-2.5 py-1.5 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs" required>
              </div>

              <div class="hidden md:flex justify-between items-center -mb-2 mt-5">
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
        <h2 id="pageTitleThree" class="tittleThree text-xl font-bold text-bold text-center md:-mb-2 mt-9 hidden">Berkas Pendaftaran</h2>
        <div id="pageThree" class="pageThree flex flex-col mx-auto md:flex-row mt-5 mx-2 hidden">
          <!-- Card Penuh (Informasi) -->
          <div class="w-full mx-auto md:w-full md:py-2 md:px-6">
            <div class="px-4">
              <!-- <form id="formPageThree" action="#" method="POST"> Tambahkan form element -->
              <div class="mb-3">
                <label for="tautan_cv" class="block text-xs font-medium text-gray-700">Tautan CV</label>
                <!-- <p class="text-xs">(Disarankan mencantumkan akun TikTok yang tidak diprivate)</p> -->
                <input type="text" id="tautan_cv" name="tautan_cv" placeholder="https://drive.google.com/drive/folders/folderAnda" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-xs text-xs font-small" required>
              </div>
              <div class="mb-3">
                <label for="tautan_portofolio" class="block text-xs font-medium text-gray-700">Tautan Portofolio</label>
                <!-- <p class="text-xs">(Disarankan mencantumkan akun LinkedIn yang tidak diprivate)</p> -->
                <input type="text" id="tautan_portofolio" name="tautan_portofolio" placeholder="https://drive.google.com/drive/folders/folderAnda" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-xs text-xs font-small" required>
              </div>
              <div class="mb-3">
                <label for="tautan_berkas_ss" class="block text-xs font-medium text-gray-700">Tautan Berkas Screenshot Bukti Follow Semua Media Sosial Berbinar</label>
                <p class="text-xs font-small">Link seluruh sosial media dapat diakses di sini:
                  <a href="https://linktr.ee/berbinarinsight" class="text-xs text-blue-500 underline">https://linktr.ee/berbinarinsight</a>
                </p>
                <input type="text" id="tautan_berkas_ss" name="tautan_berkas_ss" placeholder="https://drive.google.com/drive/folders/folderAnda" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-xs text-xs font-small" required>
              </div>

              <div class="hidden md:flex justify-between items-center -mb-4 mt-20">
                <!-- Tombol Sebelumnya -->
                <button id="previousButtonPageThree" type="button" class="w-full md:w-auto bg-[#C7F8FF] text-gray-700 py-2 px-4 mt-4 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">Sebelumnya</button>

                <!-- Tombol Selanjutnya -->
                <button id="nextButtonPageThree" type="button" class="w-full md:w-auto bg-primary text-white py-2 px-4 mt-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Selanjutnya</button>
              </div>
              <!-- </form> -->
            </div>
          </div>
        </div>

        <!-- Halaman Keempat -->
        <h2 id="pageTitleFour" class="tittleFour text-xl font-bold text-bold text-center md:-mb-3 mt-9 hidden">Motivasi</h2>
        <div id="pageFour" class="pageFour flex flex-col mx-auto md:flex-row mt-5 mx-2 hidden">
          <!-- Card Penuh (Informasi) -->
          <div class="w-full mx-auto md:w-full md:py-2 md:px-6">
            <div class="px-4">
              <!-- <is_process <form id="formPageFour" action="#" method="POST"> Tambahkan form element -->
              <div class="mb-4">
                <label for="motivasi" class="block text-xs font-medium text-gray-700">Motivasi Mendaftar Internship Berbinar</label>
                <!-- <p class="text-xs">(Disarankan mencantumkan akun TikTok yang tidak diprivate)</p> -->
                <textarea type="textarea" id="motivasi" name="motivasi" placeholder="Motivasi saya mendaftaran magang di Berbinar Insightful Indonesia adalah ..." class="mt-1 h-[200px] block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs" required></textarea>
                <input type="hidden" name="is_process" value={{ true }}>
                <input type="hidden" name="status_tidak_dapat_diproses" value={{ true }}>
                <input type="hidden" name="status_catatan" value={{ true }}>
                <input type="hidden" name="status_progress" value={{ true }}>
              </div>
              <div class="hidden md:flex justify-between items-center -mb-4 mt-4">
                <!-- Tombol Sebelumnya -->
                <button id="previousButtonPageFour" type="button" class="w-full md:w-auto bg-[#C7F8FF] text-gray-700 py-2 px-4 md:mt-16 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">Sebelumnya</button>

                <!-- Tombol Selanjutnya -->
                <button id="nextButtonPageFour" type="button" class="w-full md:w-auto bg-primary text-white py-2 px-4  md:mt-16 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Selanjutnya</button>
              </div>
              <!-- </form> -->
            </div>
          </div>
        </div>

        <!-- Halaman Kelima -->
        <h2 id="pageTitleFive" class="tittleFive text-2xl font-bold text-bold text-center md:-mb-3 mt-9 hidden">Terima kasih</h2>
        <div id="pageFive" class="pageFive flex flex-col justify-center items-center mx-auto md:flex-row mt-2 mx-2 hidden">
          <div class="w-full mx-auto md:w-full md:py-2 md:px-6">
            <div class="px-4">
              <!-- <form id="formPageFive" action="#" method="POST"> Tambahkan form element -->
              <div class="mb-3 px-8 -mt-2 text-center">
                <div class="flex justify-center items-center">
                  <img src="{{ asset('assets/images/psikotes/feedback/sangat-suka-hd.png') }}" alt="" class="w-[100px]">
                </div>

                <!-- <label for="tiktokFive" class="block text-lg font-medium text-gray-700">Motivasi Mendaftar Internship Berbinar</label> -->
                <p class="text-xs">Terima kasih sudah mendaftar. Pastikan bahwa seluruh data <br> telah benar, link dapat diakses, dan jangan lupa tekan tombol <br> kirim di bawah ini 😆</p>
                <p class="text-xs mt-4 mb-4">Jika ada pertanyaan lebih lanjut, bisa hubungi WA di bawah ini:<br>
                  Zona (<a href="https://wa.me/6288233215540 " class="text-blue-500">085721842573</a>)<br>
                  Dhina (<a href="https://wa.me/6281315226773" class="text-blue-500">088233215540</a>)<br>
                  Laila (<a href="https://wa.me/6281542288773" class="text-blue-500">081234567890</a>)
                </p>
                <!-- <textarea type="textarea" id="tiktokFive" name="tiktokFive" placeholder="Lorem Ipsum" class="mt-1 h-[200px] block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-xs"></textarea> -->
              </div>

              <div class="hidden md:flex justify-between items-center -mt-[4.4rem] -mb-7">
                <!-- Tombol Sebelumnya -->
                <button id="previousButtonPageFive" type="button" class="w-full md:w-auto bg-[#C7F8FF] md:mt-36 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">Sebelumnya</button>

                <!-- Tombol Selanjutnya -->
                <button id="nextButtonPageFive" type="submit" class="w-full md:w-auto bg-primary md:mt-36 text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Kirim</button>
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
                            <p class="text-xs text-gray-500">
                              Berhasil mendaftar pada posisi {{$position->name}}, silahkan cek WhatsApp/Email untuk informasi selanjutnya.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                      <button id="closeModal" name="button" type="button" class="w-xl md:w-full md:w-auto bg-primary text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary sm:text-xs">
                        Tutup
                      </button>
                    </div>
                  </div>
                </div>
              </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
document.getElementById('nextButtonPageFive').addEventListener('click', function(event) {
    event.preventDefault();

    var hasError = false; // Assume no error initially
    var errorMessage;
    
    // List of required fields
    var requiredFields = [
        'email',
        'nama_lengkap',
        'nama_panggilan',
        'tanggal_lahir',
        'no_whatsapp',
        'asal_kota',
        'asal_pendidikan',
        'status_kelas',
        'jurusan',
        'akun_instagram',
        'akun_tiktok',
        'akun_linkdin',
        'sumber_informasi',
        'tautan_cv',
        'tautan_portofolio',
        'tautan_berkas_ss',
        'motivasi'
    ];

    // Validate each field
    requiredFields.forEach(function(fieldId) {
        var field = document.getElementById(fieldId);
        if (!field || field.value.trim() === '') {
            hasError = true;
            errorMessage = 'Kolom ' + removeUnderscores(fieldId) + ' belum diisi nih :(';
            return;
        }

        if (fieldId === 'email' && !isValidEmail(field.value)) {
            hasError = true;
            errorMessage = 'Kolom ' + removeUnderscores(fieldId) + ' kamu salah format :(';
            return;
        }

        if (fieldId === 'no_whatsapp' && !isValidPhoneNumber(field.value)) {
            hasError = true;
            errorMessage = 'Kolom ' + removeUnderscores(fieldId) + ' kamu salah format :(';
            return;
        }

        if (['tautan_cv', 'tautan_portofolio', 'tautan_berkas_ss'].includes(fieldId) && !isValidGoogleDriveLink(field.value)) {
            hasError = true;
            errorMessage = 'Kolom ' + removeUnderscores(fieldId) + ' kamu salah format :(';
            return;
        }

        if (fieldId === 'akun_instagram' && !isValidInstagramLink(field.value)) {
            hasError = true;
            errorMessage = 'Kolom ' + removeUnderscores(fieldId) + ' kamu salah format :(';
            return;
        }

        if (fieldId === 'akun_tiktok' && !isValidTikTokLink(field.value)) {
            hasError = true;
            errorMessage = 'Kolom ' + removeUnderscores(fieldId) + ' kamu salah format :(';
            return;
        }

        if (fieldId === 'akun_linkdin' && !isValidLinkedInLink(field.value)) {
            hasError = true;
            errorMessage = 'Kolom ' + removeUnderscores(fieldId) + ' kamu salah format :(';
            return;
        }
    });

    // Display error if found
    if (hasError) {
        Swal.fire({
            icon: "error", // Correct icon usage
            title: "Error!",
            text: errorMessage,
        });
    } else {
        // No error, show the modal
        document.getElementById('successModal').classList.remove('hidden');
    }
});

document.getElementById('closeModal').addEventListener('click', function() {
    // Hide the modal
    document.getElementById('successModal').classList.add('hidden');
    
    // Redirect to the homepage
    window.location.href = "{{ route('home') }}"; // Replace with the correct route to your homepage
});


      function removeUnderscores(str) {
          return str.replace(/_/g, ' '); // Replace all underscores with spaces
      }

      function isValidURL(url) {
          // Regular expression for basic URL validation
          var urlPattern = new RegExp('^(https?:\\/\\/)?' + // protocol
                  '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name
                  '((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
                  '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
                  '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
                  '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locator
          return urlPattern.test(url);
      }

      function isValidEmail(email) {
          // Regular expression for basic email validation
          var emailPattern = new RegExp(
              '^[a-zA-Z0-9._%+-]+' +           // local part
              '@' +                            // @ symbol
              '([a-zA-Z0-9.-]+\\.[a-zA-Z]{2,})$', 'i' // domain name
          );
          return emailPattern.test(email);
      }

      function isValidGoogleDriveLink(url) {
          // Regular expression for validating Google Drive links
          var googleDrivePattern = new RegExp(
              '^(https:\\/\\/)?(drive\\.google\\.com\\/)' + // Google Drive domain
              '(file\\/d\\/|open\\?id=|drive\\/folders\\/|drive\\/u\\/\\d\\/folders\\/|drive\\/folders\\/)' + // Different possible paths
              '[a-zA-Z0-9-_]+', // File or folder ID
              'i' // Case-insensitive flag
          );
          return googleDrivePattern.test(url);
      }

      function isValidInstagramLink(url) {
          // Regular expression for validating Instagram links
          var instagramPattern = new RegExp(
              '^(https?:\\/\\/)?(www\\.)?instagram\\.com\\/' + // Instagram domain
              '[a-zA-Z0-9_\\.]+\\/?$', // Username with optional trailing slash
              'i' // Case-insensitive flag
          );
          return instagramPattern.test(url);
      }

      function isValidTikTokLink(url) {
          // Regular expression for validating TikTok links
          var tikTokPattern = new RegExp(
              '^(https?:\\/\\/)?(www\\.)?tiktok\\.com\\/(@[a-zA-Z0-9_]+)\\/?$', // TikTok domain and username with optional trailing slash
              'i' // Case-insensitive flag
          );
          return tikTokPattern.test(url);
      }

      function isValidLinkedInLink(url) {
          // Regular expression for validating LinkedIn links
          var linkedInPattern = new RegExp(
              '^(https?:\\/\\/)?(www\\.)?linkedin\\.com\\/' + // LinkedIn domain
              '(in|pub|company|school)\\/[a-zA-Z0-9_-]+\\/?$', // Profile, company, or school paths with optional trailing slash
              'i' // Case-insensitive flag
          );
          return linkedInPattern.test(url);
      }


      function isValidPhoneNumber(number) {
          // Regular expression for validating phone numbers starting with +
          var phonePattern = new RegExp(
              '^\\+[0-9]+$' // Must start with + followed by one or more digits
          );
          return phonePattern.test(number);
      }
    </script>
    <!-- </form> -->
  </div>
</div>
</div>
</div>

<!-- Button Mobile -->
<div class="w-full h-1/12 relative flex flex-col items-end justify-end -ml-2">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end mt-8 md:hidden">
      <button id="previousMobile" type="button" class="previousMobile cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 mb-8 hidden">Previous</button>
      <button id="nextMobile" type="button" class="nextMobile cursor-pointer bg-black text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary mb-8">Next</button>
    </div>
  </div>
</div>
<div class="h-1/12 relative flex flex-col items-end justify-end ml-12">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end md:hidden">
      <button id="previousMobileTwo" type="button" class="previousMobileTwo cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 mb-8 hidden">Previous</button>
      <button id="nextMobileTwo" type="button" class="nextMobileTwo cursor-pointer bg-black text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary mb-8 hidden">Next</button>
    </div>
  </div>
</div>
<div class="h-1/12 relative flex flex-col items-end justify-end ml-12">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end md:hidden">
      <button id="previousMobileThree" type="button" class="previousMobileThree cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 mb-8 hidden">Previous</button>
      <button id="nextMobileThree" type="button" class="nextMobileThree cursor-pointer bg-black text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary mb-8 hidden">Next</button>
    </div>
  </div>
</div>
<div class="h-1/12 relative flex flex-col items-end justify-end ml-12">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end md:hidden">
      <button id="previousMobileFour" type="button" class="previousMobileFour cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 mb-8 hidden">Previous</button>
      <button id="nextMobileFour" type="button" class="nextMobileFour cursor-pointer bg-black text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary mb-8 hidden">Next</button>
    </div>
  </div>
</div>
<div class="h-1/12 relative flex flex-col items-end justify-end ml-12">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end md:hidden">
      <button id="previousMobileFive" type="button" class="previousMobileFive cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 mb-8 hidden">Previous</button>
      <button id="nextMobileFive" type="button" class="nextMobileFive cursor-pointer bg-black text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary mb-8 hidden">Sent</button>
    </div>
  </div>
</div>
<!-- Button Mobile End -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      document.getElementById('nextMobileFive').addEventListener('click', function(event) {
        event.preventDefault();

        var hasError = false; // Assume no error initially

        // Example error checking logic (replace with actual logic)
        var requiredFields = [
          'email',
          'nama_lengkap',
          'nama_panggilan',
          'tanggal_lahir',
          'no_whatsapp',
          'asal_kota',
          'asal_pendidikan',
          'status_kelas',
          'jurusan',
          'akun_instagram',
          'akun_tiktok',
          'akun_linkdin',
          'sumber_informasi',
          'tautan_cv',
          'tautan_portofolio',
          'tautan_berkas_ss',
          'motivasi'
        ];

        requiredFields.forEach(function(fieldId) {
          var field = document.getElementById(fieldId);
          if (!field || field.value.trim() === '') {
            hasError = true;
            errorMessage = 'kolom ' + removeUnderscores(fieldId) + ' belum diisi nih :(';
            console.log("Missing or empty field: " + fieldId); // Log the missing field for debugging
            // break;
          }
          if (fieldId === 'email') {
            if (!isValidEmail(field.value)){
              hasError = true;
              errorMessage = 'kolom ' + removeUnderscores(fieldId) + ' kamu salah format :(';
              console.log('salah format: ' + fieldId);
            }
          }
          if (fieldId === 'no_whatsapp') {
            if (!isValidPhoneNumber(field.value)){
              hasError = true;
              errorMessage = 'kolom ' + removeUnderscores(fieldId) + ' kamu salah format :(';
              console.log('salah format: ' + fieldId);
            }
          }
          
          if (fieldId === 'tautan_cv' || fieldId === 'tautan_portofolio' || fieldId === 'tautan_berkas_ss'){
            if (!isValidGoogleDriveLink(field.value)){
             hasError = true;
             errorMessage = 'kolom ' + removeUnderscores(fieldId) + ' kamu salah format :(';
             console.log('salah format: ' + fieldId);
            }
          }
          if (fieldId === 'akun_instagram'){
            if(!isValidInstagramLink(field.value)){
              hasError = true;
              errorMessage = 'kolom ' + removeUnderscores(fieldId) + ' kamu salah format :(';
              console.log('salah format: ' + fieldId);
            }
          }
          if (fieldId === 'akun_tiktok'){
            if(!isValidTikTokLink(field.value)){
              hasError = true;
              errorMessage = 'kolom ' + removeUnderscores(fieldId) + ' kamu salah format :(';
              console.log('salah format: ' + fieldId);
            }
          }
          if (fieldId === 'akun_linkdin'){
            if(!isValidLinkedInLink(field.value)){
              hasError = true;
              errorMessage = 'kolom ' + removeUnderscores(fieldId) + ' kamu salah format :(';
              console.log('salah format: ' + fieldId);
            }
          }
        });
        console.log("HASERROR: " + hasError);

        if (hasError) {
          const Toast = Swal.mixin({
              toast: true,
              position: "top-end",
              showConfirmButton: false,
              // confirmButtonText: 'X',
              showCloseButton: true,
              timer: null,
              timerProgressBar: false,
              didOpen: (toast) => {
                  toast.onmouseenter = null;
                  toast.onmouseleave = null;
              }
          });

          Toast.fire({
              icon: "error",
              title: errorMessage
          });
        } else {
          // No error, show the modal
          document.getElementById('successModal').classList.remove('hidden');
        }
      });

      document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('successModal').classList.add('hidden');
        document.addEventListener("DOMContentLoaded", function() {
          const successModal = document.getElementById('successModal');
          const previousMobileFive = document.getElementById('previousMobileFive');
          const nextMobileFive = document.getElementById('nextMobileFive');
          const closeModal = document.getElementById('closeModal');

          if (nextMobileFive) {
            nextMobileFive.addEventListener('click', function() {
              // Tampilkan modal
              successModal.classList.remove('hidden');
              successModal.classList.add('flex');

              // Optional: Anda bisa menyembunyikan tombol "Sebelumnya" di sini
              if (previousMobileFive) {
                previousMobileFive.style.display = 'none';
              }
            });
          }

          if (closeModal) {
            closeModal.addEventListener('click', function() {
              // Sembunyikan modal
              successModal.classList.remove('flex');
              successModal.classList.add('hidden');

              // Optional: Anda bisa menampilkan kembali tombol "Sebelumnya" di sini
              if (previousMobileFive) {
                previousMobileFive.style.display = 'block';
              }
            });
          }
        });
      });
    </script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const successModal = document.getElementById('successModal');
    const nextMobileFive = document.getElementById('nextMobileFive');
    const closeModal = document.getElementById('closeModal');

    // if (nextMobileFive) {
    //   nextMobileFive.addEventListener('click', function() {
    //     // Tampilkan modal
    //     successModal.classList.remove('hidden');
    //     successModal.classList.add('flex');
    //   });
    // }

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
    previousButtonMobileFive.classList.add('hidden');
    ontainer.classList.add('h-[680px]');
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
</div>

<!-- Modal Start -->
<div id="myModal" class="fixed inset-0 flex items-center justify-center z-50">
  <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>

  <div class="modal-container p-5 bg-white w-11/12 md:max-w-xl md:p-5 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">

    <!-- Modal content -->
    <div class="modal-content py-4 text-left px-6">

      <!-- Modal header -->
      <div class="modal-header flex justify-between items-center pb-3">
        <p class="text-2xl font-bold text-center w-full">Perhatian!!</p>
        <button class="modal-close cursor-pointer z-50">
          <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M1 1l16 16m0-16L1 17"></path>
          </svg>
        </button>
      </div>


      <!-- Modal body -->
      <div class="modal-body text-sm">
        <p>Untuk yang mendaftar pada posisi:</p>
        <ul class="list-disc mt-2">
          <p>1. Instagram Creator</p>
          <p>2. TikTok Creator</p>
          <p>3. Video Creator</p>
          <p>4. 2D Animator</p>
          <p>5. Comic Illustrator</p>
          <p>6. Graphic Designer</p>
          <p>7. Front-end Developer</p>
          <p>8. Back-end Developer</p>
          <p>9. Full-stack Developer</p>
          <p class="font-bold"> Wajib mencantumkan Portofolio.</p>

        </ul>
        <p class="mt-4 flex-justify">Unggah Berkas CV, Bukti Follow Media Sosial Berbinar, dan Portofolio ke Google Drive kamu. Kemudian ubah pengaturan Google Drive kamu menjadi <span class="font-bold"> "Anyone on the internet with the link can view"</span> agar berkas dapat diakses oleh kami.</p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer flex justify-center pt-2">
        <button id="modalClose" class="modal-close px-4 bg-primary md:mt-4 p-2 rounded-lg text-white hover:bg-gray-400">Oke</button>
      </div>

    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('myModal');
    var modalOverlay = modal.querySelector('.modal-overlay');
    var modalCloseBtn = document.getElementById('modalClose');

    modalOverlay.addEventListener('click', closeModal);
    modalCloseBtn.addEventListener('click', closeModal);

    function closeModal() {
      modal.classList.remove('opacity-100', 'pointer-events-auto');
      modal.classList.add('opacity-0', 'pointer-events-none');
      setTimeout(function() {
        modal.style.display = 'none';
      }, 500);
    }

    modal.addEventListener('click', function(event) {
      if (event.target === modal) {
        closeModal();
      }
    });

    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape' || event.key === 'Esc') {
        closeModal();
      }
    });
  });
</script>

@endsection