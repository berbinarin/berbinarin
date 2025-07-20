@extends("landing.layouts.app",[
'title' => 'Registrasi Internship',
'active' => 'Registrasi',
'page' => 'Registrasi',
])

@section('content')

<div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center z-0 pt-20 md:pt-40">
  <!-- Text Container -->
  <div class="text-center mt-8 mb-10 relative z-20 md:-mt-1 md:mb-2">
    <h2 class="text-md font-bold text-zinc-800 md:text-4xl sm:text-base">Pendaftaran Internship <span class="bg-gradient-to-r from-[#3986A3] to-[#15323D] bg-clip-text text-transparent">Berbinar</span></h2>
    <h2 class="text-sm font-bold bg-gradient-to-r from-[#3986A3] to-[#1C4352] bg-clip-text text-transparent md:text-4xl sm:text-xs" style="margin-top:8px; margin-bottom:5px;">{{$position->name}}</h2>
  </div>

  <!-- Card Box -->
  <div id="formContainer" class="h-auto w-auto relative mx-8 my-4 md:my-1 md:mb-3 justify-end z-30 md:w-4/5 md:max-w-7xl bg-white p-6  rounded-3xl shadow-lg mt-2 md:rounded-3xl overflow-y-auto md:overflow-y-hidden">

      <!-- Tombol Kembali -->
       <a href="{{ route('career.positions.detail', $position->id) }}">
            <div class="flex cursor-pointer items-center space-x-2 lg:order-1 lg:ml-16 xl:ml-24">
                <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.svg") }}" alt="Left Arrow" class="h-3 w-auto" />
                <p class="text-[15px] font-semibold text-[#3986A3] xl:text-lg">Kembali</p>
            </div>
        </a>

    <div class="number flex space-x-2 py-6 mb-2 md:px-1 -mt-4 hidden md:flex justify-center w-full">
      <!-- Page Indicator 1 (pada form 1) -->
      <div class="py-2 relative flex items-center justify-end" id="pageIndicatorOne">
        <div class="flex items-center justify-center">
            <div class="rounded-full bg-primary w-12 h-12 flex items-center justify-center mx-auto ml-6">
            <h1 class="text-lg font-semibold text-white">1</h1>
            </div>
        </div>
      </div>

      <!-- Page Indicator 2 -->
      <div class="py-2 relative flex items-center justify-end hidden md:-ml-24" id="pageIndicatorTwo">
        <div class="flex items-center justify-center">
        <div class="rounded-full bg-[#9CC3D1] w-12 h-12 flex items-center justify-center mx-auto ml-6">
          <h1 class="text-lg font-semibold text-black">1</h1>
        </div>
        </div>
      </div>

      <!-- Page Indicator 1 Alt -->
      <div class="w-1/5 py-2 relative flex items-center justify-end" id="pageIndicatorOneAlt">
          <div class="h-2 bg-gray-400 rounded-xl w-4/5 transform ml-6"></div>
        <div class="flex items-center justify-center">
            <div class="rounded-full bg-[#9CC3D1] w-12 h-12 flex items-center justify-center mx-auto ml-6">
                <h1 class="text-lg font-semibold text-black">2</h1>
            </div>
        </div>
      </div>

      <!-- Page Indicator 2 Alt -->
      <div class="w-1/5 py-2 relative flex items-center justify-end hidden" id="pageIndicatorTwoAlt">
          <div class="h-2 bg-gray-400 rounded-xl w-4/5 transform ml-6"></div>
        <div class="flex items-center justify-center">
          <div class="rounded-full bg-primary w-12 h-12 flex items-center justify-center mx-auto ml-6">
            <h1 class="text-lg font-semibold text-white">2</h1>
          </div>
        </div>
      </div>

      <!-- Page Indicator 3 -->
      <div class="w-1/5 py-2 relative flex items-center justify-end hidden" id="pageIndicatorThree">
          <div class="h-2 bg-gray-400 rounded-xl w-4/5 transform ml-6"></div>
        <div class="flex items-center justify-center">
          <div class="rounded-full bg-primary w-12 h-12 flex items-center justify-center mx-auto ml-6">
            <h1 class="text-lg font-semibold text-white">3</h1>
          </div>
        </div>
      </div>

      <!-- Page Indicator 3 Alt -->
      <div class="w-1/5 py-2 relative flex items-center justify-end" id="pageIndicatorThreeAlt">
          <div class="h-2 bg-gray-400 rounded-xl w-4/5 transform ml-6"></div>
        <div class="flex items-center justify-center">
          <div class="rounded-full bg-[#9CC3D1] w-12 h-12 flex items-center justify-center mx-auto ml-6">
            <h1 class="text-lg font-semibold text-black">3</h1>
          </div>
        </div>
      </div>

      <!-- Page Indicator 4 Alt -->
      <div class="w-1/5 py-2 relative flex items-center justify-end" id="pageIndicatorFourAlt">
          <div class="h-2 bg-gray-400 rounded-xl w-4/5 transform ml-6"></div>
        <div class="flex items-center justify-center">
          <div class="rounded-full bg-[#9CC3D1] w-12 h-12 flex items-center justify-center mx-auto ml-6">
            <h1 class="text-lg font-semibold text-black">4</h1>
          </div>
        </div>
      </div>

      <!-- Page Indicator 4 -->
      <div class="w-1/5 py-2 relative flex items-center justify-end hidden" id="pageIndicatorFour">
          <div class="h-2 bg-gray-400 rounded-xl w-4/5 transform ml-6"></div>
        <div class="flex items-center justify-center">
          <div class="rounded-full bg-primary w-12 h-12 flex items-center justify-center mx-auto ml-6">
            <h1 class="text-lg font-semibold text-white">4</h1>
          </div>
        </div>
      </div>

      <!-- Page Indicator 5 Alt -->
      <div class="w-1/5 py-2 relative flex items-center justify-end" id="pageIndicatorFiveAlt">
          <div class="h-2 bg-gray-400 rounded-xl w-4/5 transform ml-6"></div>
        <div class="flex items-center justify-center">
          <div class="rounded-full bg-[#9CC3D1] w-12 h-12 flex items-center justify-center mx-auto ml-6">
            <h1 class="text-lg font-semibold text-black">5</h1>
          </div>
        </div>
      </div>

      <!-- Page Indicator 5 -->
      <div class="w-1/5 py-2 relative flex items-center justify-end hidden" id="pageIndicatorFive">
          <div class="h-2 bg-gray-400 rounded-xl w-4/5 transform ml-6"></div>
        <div class="flex items-center justify-center">
          <div class="rounded-full bg-primary w-12 h-12 flex items-center justify-center mx-auto ml-6">
            <h1 class="text-lg font-semibold text-white">5</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="md:w-4xl">
      

      <form id="internshipForm" action="{{ route('career.positions.daftar.store', $position->id) }}" method="POST">
        @csrf
        
        <!-- Page One: Biodata Diri -->
        <h2 class="tittleOne text-xl bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text text-transparent font-bold text-bold text-center mt-4 md:-mt-7 mb-5 xl:text-3xl">Biodata Diri</h2>
        <div id="pageOne" class="pageOne flex flex-col mx-auto md:flex-row">
          <!-- Card Kiri -->
          <div class="w-full mx-auto md:w-1/2 -py-6 md:flex md:justify-end xl:justify-start">
            <div class="px-4 xl:w-full">
              <div class="mb-4">
                <input type="hidden" name="position_id" value="{{$position->id}}">
                <label for="email" class="block text-sm xl:text-sm font-medium text-gray-700">Email Aktif</label>
                <input type="email" id="email" name="email" placeholder="xxx@gmail.com" class="mt-1 block w-full xl:w-full md:w-[370px] px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm max-sm:text-xs" required>
              </div>
              <div class="mb-4">
                <label for="nama_lengkap" class="block text-sm xl:text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Anastasya" class="mt-1 bg-gray-200 md:w-[370px] block w-full xl:w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm" required>
              </div>
              <div class="mb-4">
                <label for="nama_panggilan" class="block text-sm xl:text-sm font-medium text-gray-700">Nama Panggilan</label>
                <input type="text" id="nama_panggilan" name="nama_panggilan" placeholder="Tasya" class="mt-1 bg-gray-200 md:w-[370px] block w-full xl:w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm" required>
              </div>
              <div class="mb-4">
                <label for="tanggal_lahir" class="block text-sm xl:text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="mt-1 block w-full xl:w-full md:w-[370px] px-3 py-2 border bg-gray-200 border-gray-200 text-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm" placeholder="dd/mm/yyyy" required>
              </div>
              <div class="mb-4">
                <label for="no_whatsapp" class="block text-sm xl:text-sm font-medium text-gray-700">Nomor WhatsApp Aktif</label>
                <input type="text" id="no_whatsapp" name="no_whatsapp" placeholder="+628XXXXXXXXXX" class="mt-1 bg-gray-200 md:w-[370px] block w-full xl:w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm" required>
              </div>
            </div>
          </div>

          <!-- Card Kanan -->
          <div class="w-full mx-auto md:w-1/2 -py-6">
            <div class="px-4">
              <div class="mb-4">
                <label for="asal_kota" class="block text-sm xl:text-sm font-medium text-gray-700">Domisili (Kota saja)</label>
                <input type="text" id="asal_kota" name="asal_kota" placeholder="Surabaya" class="mt-1 block w-full xl:w-full md:w-[370px] bg-gray-200 px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm" required>
              </div>
              <div class="mb-4">
                <label for="asal_pendidikan" class="block text-sm xl:text-sm font-medium text-gray-700">Sekolah/Instansi/Nama Perguruan Tinggi</label>
                <input type="text" id="asal_pendidikan" name="asal_pendidikan" placeholder="Universitas Negeri Surabaya" class="mt-1 md:w-[370px] bg-gray-200 block w-full xl:w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm" required>
              </div>
              <div class="mb-4">
                <label for="status_kelas" class="block text-sm xl:text-sm font-medium text-gray-700">Status (Kelas/Semester/Fresh Graduate)</label>
                <input type="text" id="status_kelas" name="status_kelas" placeholder="Semester 6" class="mt-1 md:w-[370px] bg-gray-200 block w-full xl:w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm" required>
              </div>
              <div class="mb-4">
                <label for="jurusan" class="block text-sm xl:text-sm font-medium text-gray-700">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" placeholder="Psikologi" class="mt-1 bg-gray-200 block w-full xl:w-full md:w-[370px] px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm" required>
              </div>
            </div>
          </div>
        </div>
        <!-- Buttons Page One -->
        <div id="buttonsPageOne" class="hidden md:flex justify-center w-full pt-6">
            <button id="nextButtonPageOne" type="button" class="w-full mt-4 md:w-auto bg-gradient-to-r from-[#3986A3] to-[#15323D] text-white py-2 px-20 xl:px-40 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Selanjutnya</button>
        </div>

        <!-- Page Two: Sosial Media -->
        <h2 id="pageTitleTwo" class="tittleTwo text-xl xl:text-3xl bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text text-transparent font-bold text-bold text-center md:-mb-2 mt-4 md:-mt-7 hidden">Sosial Media</h2>
        <div id="pageTwo" class="pageTwo flex flex-col mx-auto md:flex-row mt-5 mx-2 hidden">
          <div class="w-full mx-auto md:w-full md:py-2 md:px-6 md:-mt-1">
            <div class="px-4">
              <div class="mb-3">
                <label for="akun_instagram" class="block text-sm xl:text-base font-medium text-gray-700">Tautan akun Instagram</label>
                <p class="text-xs xl:text-sm font-small">(Disarankan mencantumkan akun Instagram yang tidak diprivate)</p>
                <input type="text" id="akun_instagram" name="akun_instagram" placeholder="https://www.instagram.com/username" class="mt-1 block w-full md:w-full px-2.5 py-1.5 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs xl:text-sm" required>
              </div>
              <div class="mb-3">
                <label for="akun_tiktok" class="block text-sm xl:text-base font-medium text-gray-700">Tautan akun TikTok</label>
                <p class="text-xs xl:text-sm font-small">(Disarankan mencantumkan akun TikTok yang tidak diprivate)</p>
                <input type="text" id="akun_tiktok" name="akun_tiktok" placeholder="https://www.tiktok.com/@username" class="mt-1 block w-full md:w-full px-2.5 py-1.5 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs xl:text-sm" required>
              </div>
              <div class="mb-3">
                <label for="akun_linkdin" class="block text-sm xl:text-base font-medium text-gray-700">Tautan akun LinkedIn</label>
                <p class="text-xs xl:text-sm font-small">(Disarankan mencantumkan akun LinkedIn yang tidak diprivate)</p>
                <input type="text" id="akun_linkdin" name="akun_linkdin" placeholder="https://www.linkedin.com/in/username" class="mt-1 block w-full md:w-full px-2.5 py-1.5 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs xl:text-sm" required>
              </div>
              <div class="mb-3">
                <label for="sumber_informasi" class="block text-sm xl:text-base font-medium text-gray-700">Dari mana kamu mendapatkan informasi rekrutmen ini?</label>
                <input type="text" id="sumber_informasi" name="sumber_informasi" placeholder="Instagram Berbinar, Tiktok Berbinar, Linkedin Berbinar,Teman, Lainnya" class="mt-1 block w-full md:w-full px-2.5 py-1.5 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs xl:text-sm" required>
              </div>

              <div class="hidden md:flex justify-between items-center mb-6 mt-5">
                <button id="previousButtonPageTwo" type="button" class="w-full md:w-auto bg-[#C7F8FF] text-gray-700 py-2 px-4 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">Sebelumnya</button>
                <button id="nextButtonPageTwo" type="button" class="w-full md:w-auto bg-gradient-to-r from-[#3986A3] to-[#15323D] text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Selanjutnya</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Page Three: Berkas Pendaftaran -->
        <h2 id="pageTitleThree" class="tittleThree text-xl xl:text-3xl bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text text-transparent font-bold text-bold text-center md:-mb-2 mt-4 lg:-mt-7 hidden">Berkas Pendaftaran</h2>
        <div id="pageThree" class="pageThree flex flex-col mx-auto md:flex-row mt-5 mx-2 hidden">
          <div class="w-full mx-auto md:w-full md:py-2 md:px-6">
            <div class="px-4">
              <div class="mb-3">
                <label for="tautan_cv" class="block text-sm xl:text-base font-medium text-gray-700">Tautan CV</label>
                <input type="text" id="tautan_cv" name="tautan_cv" placeholder="https://drive.google.com/drive/folders/folderAnda" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-xs text-xs xl:text-sm font-small" required>
              </div>
              <div class="mb-3">
                <label for="tautan_portofolio" class="block text-sm xl:text-base font-medium text-gray-700">Tautan Portofolio</label>
                <input type="text" id="tautan_portofolio" name="tautan_portofolio" placeholder="https://drive.google.com/drive/folders/folderAnda" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-xs text-xs xl:text-sm font-small" required>
              </div>
              <div class="mb-3">
                <label for="tautan_berkas_ss" class="block text-sm xl:text-base font-medium text-gray-700">Tautan Berkas Screenshot Bukti Follow Semua Media Sosial Berbinar</label>
                <p class="text-xs font-small xl:text-sm">Link seluruh sosial media dapat diakses di sini:
                  <a href="https://linktr.ee/berbinarinsight" class="text-xs xl:text-sm text-blue-500 underline">https://linktr.ee/berbinarinsight</a>
                </p>
                <input type="text" id="tautan_berkas_ss" name="tautan_berkas_ss" placeholder="https://drive.google.com/drive/folders/folderAnda" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-xs text-xs xl:text-sm font-small" required>
              </div>

              <div class="hidden md:flex justify-between items-center mb-6 mt-20">
                <button id="previousButtonPageThree" type="button" class="w-full md:w-auto bg-[#C7F8FF] text-gray-700 py-2 px-4 mt-4 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">Sebelumnya</button>
                <button id="nextButtonPageThree" type="button" class="w-full md:w-auto bg-gradient-to-r from-[#3986A3] to-[#15323D] text-white py-2 px-4 mt-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Selanjutnya</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Page Four: Motivasi -->
        <h2 id="pageTitleFour" class="tittleFour text-xl xl:text-3xl bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text text-transparent font-bold text-bold text-center md:-mb-3 mt-4 lg:-mt-7 hidden">Motivasi</h2>
        <div id="pageFour" class="pageFour flex flex-col mx-auto md:flex-row mt-5 mx-2 hidden">
          <div class="w-full mx-auto md:w-full md:py-2 md:px-6">
            <div class="px-4">
              <div class="mb-4">
                <label for="motivasi" class="block text-xs xl:text-base font-medium text-gray-700">Motivasi Mendaftar Internship Berbinar</label>
                <textarea type="textarea" id="motivasi" name="motivasi" placeholder="Motivasi saya mendaftaran magang di Berbinar Insightful Indonesia adalah ..." class="mt-1 h-[200px] block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-xs xl:text-sm" required></textarea>
                <input type="hidden" name="is_process" value="0">
                <input type="hidden" name="status_tidak_dapat_diproses" value="Pilih">
                <input type="hidden" name="status_catatan" value="Pilih">
                <input type="hidden" name="status_progress" value="Pilih">
              </div>
              <div class="hidden md:flex justify-between items-center mb-6 mt-4">
                <button id="previousButtonPageFour" type="button" class="w-full md:w-auto bg-[#C7F8FF] text-gray-700 py-2 px-4 md:mt-16 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">Sebelumnya</button>
                <button id="nextButtonPageFour" type="button" class="w-full md:w-auto bg-gradient-to-r from-[#3986A3] to-[#15323D] text-white py-2 px-4  md:mt-16 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Selanjutnya</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Page Five: Terima Kasih -->
        <h2 id="pageTitleFive" class="tittleFive text-2xl xl:text-3xl bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text text-transparent font-bold text-bold text-center md:-mb-3 mt-4 lg:-mt-7 hidden">Terima kasih</h2>
        <div id="pageFive" class="pageFive flex flex-col justify-center items-center mx-auto md:flex-row mt-2 mx-2 hidden">
          <div class="w-full mx-auto md:w-full md:py-2 md:px-6">
            <div class="px-4">
              <div class="mb-3 px-8 -mt-2 text-center">
                <div class="flex justify-center items-center">
                  <img src="{{ asset('assets/images/old/psikotes/feedback/sangat-suka-hd.png') }}" alt="" class="w-[100px]">
                </div>

                <p class="text-sm xl:text-base">Terima kasih sudah mendaftar. Pastikan bahwa seluruh data telah benar, link dapat diakses, dan jangan lupa tekan tombol kirim di bawah ini 😆</p>
                <p class="text-sm mt-4 mb-4">Jika ada pertanyaan lebih lanjut, bisa hubungi WA di bawah ini:<br>
                  Bianca (<a href="https://wa.me/6289508781453" class="text-blue-500">089508781453</a>)<br>
                  Nanda  (<a href="https://wa.me/628111990797" class="text-blue-500">08111990797</a>)<br>
                  Ismalia (<a href="https://wa.me/6285174386120" class="text-blue-500">085174386120</a>)<br>

                </p>
              </div>

              <div class="hidden md:flex justify-between items-center -mt-[4.4rem] mb-6">
                <button id="previousButtonPageFive" type="button" class="w-full md:w-auto bg-[#C7F8FF] md:mt-36 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">Sebelumnya</button>
                <button id="nextButtonPageFive" type="button" class="w-full md:w-auto bg-gradient-to-r from-[#3986A3] to-[#15323D] md:mt-36 text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Kirim</button>
              </div>
              <!-- Success Modal -->
              <div id="successModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="flex w-full items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                  <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                  <div class="inline-block align-bottom bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                      <div class="sm:flex sm:items-center">
                        <div class="w-full sm:w-auto mx-auto">
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
                      <button id="closeModal" name="submit" class="w-xl md:w-full md:w-auto bg-primary text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary sm:text-xs">
                        Tutup
                      </button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </form>
    </div>

    <style>
        @media (min-width: 768px) {
            #customSection {
                padding-top: 10rem;
            }
        }
    </style>
  </div>
</div>

<!-- Mobile Navigation Buttons -->
<div class="w-full h-1/12 relative flex flex-col items-end justify-end -ml-2">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end mt-8 md:hidden">
      <button id="previousMobile" type="button" class="previousMobile cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 mb-8 hidden">Previous</button>
      <button id="nextMobile" type="button" class="nextMobile cursor-pointer bg-gradient-to-r from-[#3986A3] to-[#15323D] text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary mb-8">Next</button>
    </div>
  </div>
</div>
<div class="h-1/12 relative flex flex-col items-end justify-end ml-12">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end md:hidden">
      <button id="previousMobileTwo" type="button" class="previousMobileTwo cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 mb-8 hidden">Previous</button>
      <button id="nextMobileTwo" type="button" class="nextMobileTwo cursor-pointer bg-gradient-to-r from-[#3986A3] to-[#15323D] text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary mb-8 hidden">Next</button>
    </div>
  </div>
</div>
<div class="h-1/12 relative flex flex-col items-end justify-end ml-12">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end md:hidden">
      <button id="previousMobileThree" type="button" class="previousMobileThree cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 mb-8 hidden">Previous</button>
      <button id="nextMobileThree" type="button" class="nextMobileThree cursor-pointer bg-gradient-to-r from-[#3986A3] to-[#15323D] text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary mb-8 hidden">Next</button>
    </div>
  </div>
</div>
<div class="h-1/12 relative flex flex-col items-end justify-end ml-12">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end md:hidden">
      <button id="previousMobileFour" type="button" class="previousMobileFour cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 mb-8 hidden">Previous</button>
      <button id="nextMobileFour" type="button" class="nextMobileFour cursor-pointer bg-gradient-to-r from-[#3986A3] to-[#15323D] text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary mb-8 hidden">Next</button>
    </div>
  </div>
</div>
<div class="h-1/12 relative flex flex-col items-end justify-end ml-12">
  <div class="mr-14 flex md:flex justify-end">
    <div class="flex justify-end md:hidden">
      <button id="previousMobileFive" type="button" class="previousMobileFive cursor-pointer bg-[#C7F8FF] text-gray-700 py-2 px-8 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 mr-24 mb-8 hidden">Previous</button>
      <button id="nextMobileFive" type="button" class="nextMobileFive cursor-pointer bg-gradient-to-r from-[#3986A3] to-[#15323D] text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary mb-8 hidden">Sent</button>
    </div>
  </div>
</div>

<!-- Info Modal -->
<div id="myModal" class="fixed inset-0 flex items-center justify-center z-50">
  <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>
  <div class="modal-container p-5 bg-white w-11/12 md:max-w-xl md:p-5 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
    <div class="modal-content py-4 text-left px-6">
      <div class="modal-header flex justify-between items-center pb-3">
        <p class="text-2xl font-bold text-center w-full">Perhatian!!</p>
        <button class="modal-close cursor-pointer z-50">
          <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M1 1l16 16m0-16L1 17"></path>
          </svg>
        </button>
      </div>
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
      <div class="modal-footer flex justify-center pt-2">
        <button id="modalClose" class="modal-close px-4 bg-primary md:mt-4 p-2 rounded-lg text-white hover:bg-gray-400">Oke</button>
      </div>
    </div>
  </div>
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  // Inisialisasi Flatpickr untuk tanggal lahir
  if (window.flatpickr) {
    flatpickr("#tanggal_lahir", {
      dateFormat: "d/m/Y",
      allowInput: true
    });
  }
    document.getElementById('internshipForm').addEventListener('submit', function(event) {
    var tgl = document.getElementById('tanggal_lahir');
    if (tgl && tgl.value) {
        // dari d/m/Y ke Y-m-d
        var parts = tgl.value.split('/');
        if (parts.length === 3) {
        tgl.value = parts[2] + '-' + parts[1].padStart(2, '0') + '-' + parts[0].padStart(2, '0');
        }
    }
    });

  // Validasi Form
  const requiredFields = [
    'email', 'nama_lengkap', 'nama_panggilan', 'tanggal_lahir', 'no_whatsapp',
    'asal_kota', 'asal_pendidikan', 'status_kelas', 'jurusan',
    'akun_instagram', 'akun_tiktok', 'akun_linkdin', 'sumber_informasi',
    'tautan_cv', 'tautan_portofolio', 'tautan_berkas_ss', 'motivasi'
  ];

  // Validasi Inputan
  function removeUnderscores(str) {
    return str.replace(/_/g, ' ');
  }
  function isValidEmail(email) {
    return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email);
  }
  function isValidPhoneNumber(number) {
    return /^(\+62|62|0)8[1-9][0-9]{6,11}$/.test(number);
  }
  function isValidGoogleDriveLink(url) {
    return /^(https?:\/\/)?(drive\.google\.com\/)(file\/d\/|open\?id=|drive\/folders\/|drive\/u\/\d\/folders\/|drive\/folders\/)[a-zA-Z0-9-_]+/.test(url);
  }
  function isValidInstagramLink(url) {
    return /^(https?:\/\/)?(www\.)?instagram\.com\/[a-zA-Z0-9_.]+\/?$/.test(url);
  }
  function isValidTikTokLink(url) {
    return /^(https?:\/\/)?(www\.)?tiktok\.com\/@[\w\.]+\/?$/i.test(url);
  }
  function isValidLinkedInLink(url) {
    return /^(https?:\/\/)?(www\.)?linkedin\.com\/(in|pub|company|school)\/[a-zA-Z0-9_-]+\/?$/.test(url);
  }

  // Validasi Formulir
  function validateForm() {
    for (let i = 0; i < requiredFields.length; i++) {
      var fieldId = requiredFields[i];
      var field = document.getElementById(fieldId);
      if (!field || field.value.trim() === '') {
        return 'Kolom ' + removeUnderscores(fieldId) + ' belum diisi :(';
      }
      if (fieldId === 'email' && !isValidEmail(field.value)) {
        return 'Kolom email kamu salah format :(';
      }
      if (fieldId === 'no_whatsapp' && !isValidPhoneNumber(field.value)) {
        return 'Kolom no whatsapp kamu salah format :(';
      }
      if (
        (fieldId === 'tautan_cv' || fieldId === 'tautan_portofolio' || fieldId === 'tautan_berkas_ss') &&
        !isValidGoogleDriveLink(field.value)
      ) {
        return 'Kolom ' + removeUnderscores(fieldId) + ' kamu salah format Google Drive :(';
      }
      if (fieldId === 'akun_instagram' && !isValidInstagramLink(field.value)) {
        return 'Kolom akun instagram kamu salah format :(';
      }
      if (fieldId === 'akun_tiktok' && !isValidTikTokLink(field.value)) {
        return 'Kolom akun tiktok kamu salah format :(';
      }
      if (fieldId === 'akun_linkdin' && !isValidLinkedInLink(field.value)) {
        return 'Kolom akun linkedin kamu salah format :(';
      }
    }
    return null;
  }

  // Tombol submit untuk Desktop dan Mobile
  const submitButtons = [
    document.getElementById('nextButtonPageFive'),
    document.getElementById('nextMobileFive')
  ];

  submitButtons.forEach(function(btn) {
    if (btn) {
      btn.addEventListener('click', function(event) {
        var errorMessage = validateForm();
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
        } else {
          // Triger modal sukses
          var modal = document.getElementById('successModal');
          if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            window.scrollTo({ top: 0, behavior: 'smooth' });
          }
        }
      });
    }
  });

  // Tombol navigasi untuk halaman
  const successModal = document.getElementById('successModal');
  const closeModalBtn = document.getElementById('closeModal');
  const form = document.getElementById('internshipForm');

  if (closeModalBtn && successModal && form) {
    closeModalBtn.addEventListener('click', function() {
      successModal.classList.add('hidden');
      successModal.classList.remove('flex');
      form.submit(); 
    });
  }
  
  const modal = document.getElementById('myModal');
  if (modal) {
    const modalOverlay = modal.querySelector('.modal-overlay');
    const modalCloseBtn = document.getElementById('modalClose');
    
    function closeModal() {
      modal.classList.remove('opacity-100', 'pointer-events-auto');
      modal.classList.add('opacity-0', 'pointer-events-none');
      setTimeout(function() {
        modal.style.display = 'none';
      }, 500);
    }
    
    if (modalOverlay) modalOverlay.addEventListener('click', closeModal);
    if (modalCloseBtn) modalCloseBtn.addEventListener('click', closeModal);
    
    modal.addEventListener('click', function(event) {
      if (event.target === modal) closeModal();
    });
    
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape' || event.key === 'Esc') closeModal();
    });
  }

  // Navigasi form Multi-step 
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
  const formContainer = document.getElementById('formContainer');

  // Page form Multi-step 
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

  // Page ke satu dan seterusnya
  function showPageOne() {
    pageOne.classList.remove('hidden');
    pageTitleOne.classList.remove('hidden');
    pageIndicatorOne.classList.remove('hidden');
    pageIndicatorOneAlt.classList.remove('hidden');
    document.getElementById('nextMobile').classList.remove('hidden');
    document.getElementById('previousMobile').classList.add('hidden');

    pageTwo.classList.add('hidden');
    pageTitleTwo.classList.add('hidden');
    pageIndicatorTwo.classList.add('hidden');
    pageIndicatorTwoAlt.classList.add('hidden');
    document.getElementById('nextMobileTwo').classList.add('hidden');
    document.getElementById('previousMobileTwo').classList.add('hidden');

    pageThree.classList.add('hidden');
    pageTitleThree.classList.add('hidden');
    pageIndicatorThree.classList.add('hidden');
    pageIndicatorThreeAlt.classList.remove('hidden');
    document.getElementById('nextMobileThree').classList.add('hidden');
    document.getElementById('previousMobileThree').classList.add('hidden');

    pageFour.classList.add('hidden');
    pageTitleFour.classList.add('hidden');
    pageIndicatorFour.classList.add('hidden');
    pageIndicatorFourAlt.classList.remove('hidden');
    document.getElementById('nextMobileFour').classList.add('hidden');
    document.getElementById('previousMobileFour').classList.add('hidden');

    pageFive.classList.add('hidden');
    pageTitleFive.classList.add('hidden');
    pageIndicatorFive.classList.add('hidden');
    pageIndicatorFiveAlt.classList.remove('hidden');
    document.getElementById('nextMobileFive').classList.add('hidden');
    document.getElementById('previousMobileFive').classList.add('hidden');

    formContainer.classList.add('h-[680px]');
    document.getElementById('buttonsPageOne').classList.add('md:flex');

  }

  function showPageTwo() {
    pageOne.classList.add('hidden');
    pageTitleOne.classList.add('hidden');
    pageIndicatorOne.classList.add('hidden');
    pageIndicatorOneAlt.classList.add('hidden');
    document.getElementById('nextMobile').classList.add('hidden');
    document.getElementById('previousMobile').classList.add('hidden');

    pageTwo.classList.remove('hidden');
    pageTitleTwo.classList.remove('hidden');
    pageIndicatorTwo.classList.remove('hidden');
    pageIndicatorTwoAlt.classList.remove('hidden');
    document.getElementById('nextMobileTwo').classList.remove('hidden');
    document.getElementById('previousMobileTwo').classList.remove('hidden');

    pageThree.classList.add('hidden');
    pageTitleThree.classList.add('hidden');
    pageIndicatorThree.classList.add('hidden');
    pageIndicatorThreeAlt.classList.remove('hidden');
    document.getElementById('nextMobileThree').classList.add('hidden');
    document.getElementById('previousMobileThree').classList.add('hidden');

    pageFour.classList.add('hidden');
    pageTitleFour.classList.add('hidden');
    pageIndicatorFour.classList.add('hidden');
    pageIndicatorFourAlt.classList.remove('hidden');
    document.getElementById('nextMobileFour').classList.add('hidden');
    document.getElementById('previousMobileFour').classList.add('hidden');

    pageFive.classList.add('hidden');
    pageTitleFive.classList.add('hidden');
    pageIndicatorFive.classList.add('hidden');
    pageIndicatorFiveAlt.classList.remove('hidden');
    document.getElementById('nextMobileFive').classList.add('hidden');
    document.getElementById('previousMobileFive').classList.add('hidden');

    formContainer.classList.add('h-[680px]');
    document.getElementById('buttonsPageOne').classList.remove('md:flex');

  }

  function showPageThree() {
    pageOne.classList.add('hidden');
    pageTitleOne.classList.add('hidden');
    pageIndicatorOne.classList.add('hidden');
    pageIndicatorOneAlt.classList.remove('hidden');
    document.getElementById('nextMobile').classList.add('hidden');

    pageTwo.classList.add('hidden');
    pageTitleTwo.classList.add('hidden');
    pageIndicatorTwo.classList.remove('hidden');
    pageIndicatorTwoAlt.classList.add('hidden');
    document.getElementById('nextMobileTwo').classList.add('hidden');
    document.getElementById('previousMobileTwo').classList.add('hidden');

    pageThree.classList.remove('hidden');
    pageTitleThree.classList.remove('hidden');
    pageIndicatorThree.classList.remove('hidden');
    pageIndicatorThreeAlt.classList.add('hidden');
    document.getElementById('nextMobileThree').classList.remove('hidden');
    document.getElementById('previousMobileThree').classList.remove('hidden');

    pageFour.classList.add('hidden');
    pageTitleFour.classList.add('hidden');
    pageIndicatorFour.classList.add('hidden');
    pageIndicatorFourAlt.classList.remove('hidden');
    document.getElementById('nextMobileFour').classList.add('hidden');
    document.getElementById('previousMobileFour').classList.add('hidden');

    pageFive.classList.add('hidden');
    pageTitleFive.classList.add('hidden');
    pageIndicatorFive.classList.add('hidden');
    pageIndicatorFiveAlt.classList.remove('hidden');
    document.getElementById('nextMobileFive').classList.add('hidden');
    document.getElementById('previousMobileFive').classList.add('hidden');

    formContainer.classList.add('h-[680px]');
  }

  function showPageFour() {
    pageOne.classList.add('hidden');
    pageTitleOne.classList.add('hidden');
    pageIndicatorOne.classList.add('hidden');
    pageIndicatorOneAlt.classList.remove('hidden');
    document.getElementById('nextMobile').classList.add('hidden');

    pageTwo.classList.add('hidden');
    pageTitleTwo.classList.add('hidden');
    pageIndicatorTwo.classList.remove('hidden');
    pageIndicatorTwoAlt.classList.add('hidden');
    document.getElementById('nextMobileTwo').classList.add('hidden');
    document.getElementById('previousMobileTwo').classList.add('hidden');

    pageThree.classList.add('hidden');
    pageTitleThree.classList.add('hidden');
    pageIndicatorThree.classList.add('hidden');
    pageIndicatorThreeAlt.classList.remove('hidden');
    document.getElementById('nextMobileThree').classList.add('hidden');
    document.getElementById('previousMobileThree').classList.add('hidden');

    pageFour.classList.remove('hidden');
    pageTitleFour.classList.remove('hidden');
    pageIndicatorFour.classList.remove('hidden');
    pageIndicatorFourAlt.classList.add('hidden');
    document.getElementById('nextMobileFour').classList.remove('hidden');
    document.getElementById('previousMobileFour').classList.remove('hidden');

    pageFive.classList.add('hidden');
    pageTitleFive.classList.add('hidden');
    pageIndicatorFive.classList.add('hidden');
    pageIndicatorFiveAlt.classList.remove('hidden');
    document.getElementById('nextMobileFive').classList.add('hidden');
    document.getElementById('previousMobileFive').classList.add('hidden');

    formContainer.classList.add('h-[680px]');
  }

  function showPageFive() {
    pageOne.classList.add('hidden');
    pageTitleOne.classList.add('hidden');
    pageIndicatorOne.classList.add('hidden');
    pageIndicatorOneAlt.classList.remove('hidden');
    document.getElementById('nextMobile').classList.add('hidden');
    document.getElementById('previousMobile').classList.add('hidden');

    pageTwo.classList.add('hidden');
    pageTitleTwo.classList.add('hidden');
    pageIndicatorTwo.classList.remove('hidden');
    pageIndicatorTwoAlt.classList.add('hidden');
    document.getElementById('nextMobileTwo').classList.add('hidden');
    document.getElementById('previousMobileTwo').classList.add('hidden');

    pageThree.classList.add('hidden');
    pageTitleThree.classList.add('hidden');
    pageIndicatorThree.classList.add('hidden');
    pageIndicatorThreeAlt.classList.remove('hidden');
    document.getElementById('nextMobileThree').classList.add('hidden');
    document.getElementById('previousMobileThree').classList.add('hidden');

    pageFour.classList.add('hidden');
    pageTitleFour.classList.add('hidden');
    pageIndicatorFour.classList.add('hidden');
    pageIndicatorFourAlt.classList.remove('hidden');
    document.getElementById('nextMobileFour').classList.add('hidden');
    document.getElementById('previousMobileFour').classList.add('hidden');

    pageFive.classList.remove('hidden');
    pageTitleFive.classList.remove('hidden');
    pageIndicatorFive.classList.remove('hidden');
    pageIndicatorFiveAlt.classList.add('hidden');
    document.getElementById('nextMobileFive').classList.remove('hidden');
    document.getElementById('previousMobileFive').classList.remove('hidden');

    formContainer.classList.add('h-[680px]');
  }

  // Navigasi untuk Desktop
  document.getElementById('nextButtonPageOne')?.addEventListener('click', showPageTwo);
  document.getElementById('nextButtonPageTwo')?.addEventListener('click', showPageThree);
  document.getElementById('nextButtonPageThree')?.addEventListener('click', showPageFour);
  document.getElementById('nextButtonPageFour')?.addEventListener('click', showPageFive);

  document.getElementById('previousButtonPageTwo')?.addEventListener('click', showPageOne);
  document.getElementById('previousButtonPageThree')?.addEventListener('click', showPageTwo);
  document.getElementById('previousButtonPageFour')?.addEventListener('click', showPageThree);
  document.getElementById('previousButtonPageFive')?.addEventListener('click', showPageFour);

  // Navigasi untuk Mobile
  document.getElementById('nextMobile')?.addEventListener('click', showPageTwo);
  document.getElementById('nextMobileTwo')?.addEventListener('click', showPageThree);
  document.getElementById('nextMobileThree')?.addEventListener('click', showPageFour);
  document.getElementById('nextMobileFour')?.addEventListener('click', showPageFive);

  document.getElementById('previousMobileTwo')?.addEventListener('click', showPageOne);
  document.getElementById('previousMobileThree')?.addEventListener('click', showPageTwo);
  document.getElementById('previousMobileFour')?.addEventListener('click', showPageThree);
  document.getElementById('previousMobileFive')?.addEventListener('click', showPageFour);
});
</script>
@endsection