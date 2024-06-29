@extends('moduls.dashboard.layouts.main', [
'title' => 'Internship',
'active' => 'Dashboard',
'modul' => 'Internship',
])

@section('content-dashboard')
<section class="flex w-full">
  <div class="flex flex-col w-full">
    <div class="py-4 md:pt-12 md:pb-7">
      <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
        Edit Data Internship
      </p>
    </div>
    <div class="flex flex-row gap-4">
      <div class="w-full md:w-1/2">
        <div class="bg-white overflow-hidden shadow-sm rounded-lg p-4">
          <!-- Judul Tabek kiri -->
          <div class="flex items-center mb-4">
            <div class="w-full flex justify-between">
              <p class="text-xl font-semibold bg-gray-100 py-2 px-4 rounded-l-lg m-0 flex-grow text-start">Fields</p>
              <div class="w-1 bg-gray-300 h-full"></div>
              <p class="text-xl font-semibold bg-gray-100 py-2 px-4 rounded-r-lg m-0 flex-grow text-start">Details</p>
            </div>
          </div>
          <!-- Form untuk Value Table kiri -->
          <form action="{{ route('user_internships.update', $Internship->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="flex flex-col mb-2">
              <table class="w-full">
                <tr class="border-b border-gray-200">
                  <td class="py-2 px-4">
                    <label for="id" class="font-semibold text-gray-600">ID:</label>
                  </td>
                  <td class="py-2 border-l px-4">
                    <input type="text" id="id" name="id" value="{{ $Internship->id }}" readonly class="border border-gray-300 px-2 py-1 rounded-lg w-full bg-gray-100">
                  </td>
                </tr>
                <tr class="border-b border-gray-200">
                  <td class="py-2 px-4">
                    <label for="email" class="font-semibold text-gray-600">Email:</label>
                  </td>
                  <td class="py-2 border-l px-4">
                    <input type="email" id="email" name="email" value="{{ $Internship->email }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                  </td>
                </tr>
                <tr class="border-b border-gray-200">
                  <td class="py-2 px-4">
                    <label for="posisi" class="font-semibold text-gray-600">Posisi:</label>
                  </td>
                  <td class="py-2 border-l px-4">
                    <input type="text" id="posisi" name="posisi" value="{{ $position->name }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                  </td>
                </tr>
                <tr class="border-b border-gray-200">
                  <td class="py-2 px-4">
                    <label for="nama_lengkap" class="font-semibold text-gray-600">Nama Lengkap:</label>
                  </td>
                  <td class="py-2 border-l px-4">
                    <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ $Internship->nama_lengkap }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                  </td>
                </tr>
                <tr class="border-b border-gray-200">
                  <td class="py-2 px-4">
                    <label for="nama_panggilan" class="font-semibold text-gray-600">Nama Panggilan:</label>
                  </td>
                  <td class="py-2 border-l px-4">
                    <input type="text" id="nama_panggilan" name="nama_panggilan" value="{{ $Internship->nama_panggilan }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                  </td>
                </tr>
                <tr class="border-b border-gray-200">
                  <td class="py-2 px-4">
                    <label for="tanggal_lahir" class="font-semibold text-gray-600">Tanggal Lahir:</label>
                  </td>
                  <td class="py-2 border-l px-4">
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $Internship->tanggal_lahir }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                  </td>
                </tr>
                <tr class="border-b border-gray-200">
                  <td class="py-2 px-4">
                    <label for="nomor_wa" class="font-semibold text-gray-600">No. WA:</label>
                  </td>
                  <td class="py-2 border-l px-4">
                    <input type="text" id="nomor_wa" name="no_whatsapp" value="{{ $Internship->no_whatsapp }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                  </td>
                </tr>
                <tr class="border-b border-gray-200">
                  <td class="py-2 px-4">
                    <label for="domisili" class="font-semibold text-gray-600">Domisili:</label>
                  </td>
                  <td class="py-2 border-l px-4">
                    <input type="text" id="domisili" name="asal_kota" value="{{ $Internship->asal_kota }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                  </td>
                </tr>
                <tr class="border-b border-gray-200">
                  <td class="py-2 px-4">
                    <label for="instansi" class="font-semibold text-gray-600">Instansi:</label>
                  </td>
                  <td class="py-2 border-l px-4">
                    <input type="text" id="instansi" name="asal_pendidikan" value="{{ $Internship->asal_pendidikan }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                  </td>
                </tr>
                <tr class="border-b border-gray-200">
                  <td class="py-2 px-4">
                    <label for="status" class="font-semibold text-gray-600">Status:</label>
                  </td>
                  <td class="py-2 border-l px-4">
                    <input type="text" id="status" name="status_kelas" value="{{ $Internship->status_kelas }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                  </td>
                </tr>
                <tr class="border-b border-gray-200">
                  <td class="py-2 px-4">
                    <label for="jurusan" class="font-semibold text-gray-600">Jurusan:</label>
                  </td>
                  <td class="py-2 border-l px-4">
                    <input type="text" id="jurusan" name="jurusan" value="{{ $Internship->jurusan }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                  </td>
                </tr>
              </table>
            </div>
        </div>
      </div>

      <div class="w-full md:w-1/2">
        <div class="bg-white overflow-hidden shadow-sm rounded-lg p-4">
          <!-- Judul table Kanan -->
          <div class="flex items-center mb-4">
            <div class="w-full flex justify-between">
              <p class="text-xl font-semibold bg-gray-100 py-2 px-4 rounded-l-lg m-0 flex-grow text-start">Fields</p>
              <div class="w-1 bg-gray-300 h-full"></div>
              <p class="text-xl font-semibold bg-gray-100 py-2 px-4 rounded-r-lg m-0 flex-grow text-start">Details</p>
            </div>
          </div>
          <!-- Form untuk Values Table kanan -->
          <div class="flex flex-col mb-2">
            <table class="w-full">
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label for="tautan_ig" class="font-semibold text-gray-600">Tautan IG:</label>
                </td>
                <td class="py-2 border-l px-4">
                  <input type="text" id="tautan_ig" name="akun_instagram" value="{{ $Internship->akun_instagram }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label for="tautan_tiktok" class="font-semibold text-gray-600">Tautan TikTok:</label>
                </td>
                <td class="py-2 border-l px-4">
                  <input type="text" id="tautan_tiktok" name="akun_tiktok" value="{{ $Internship->akun_tiktok }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label for="tautan_linkedin" class="font-semibold text-gray-600">Tautan LinkedIn:</label>
                </td>
                <td class="py-2 border-l px-4">
                  <input type="text" id="tautan_linkedin" name="akun_linkdin" value="{{ $Internship->akun_linkdin }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label for="informasi_rekrutmen" class="font-semibold text-gray-600">Informasi Rekrutmen:</label>
                </td>
                <td class="py-2 border-l px-4">
                  <textarea id="informasi_rekrutmen" name="sumber_informasi" class="border border-gray-300 px-2 py-1 rounded-lg w-full">{{ $Internship->sumber_informasi }}</textarea>
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label for="tautan_cv" class="font-semibold text-gray-600">Tautan CV:</label>
                </td>
                <td class="py-2 border-l px-4">
                  <input type="text" id="tautan_cv" name="tautan_cv" value="{{ $Internship->tautan_cv }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label for="tautan_porto" class="font-semibold text-gray-600">Tautan Portfolio:</label>
                </td>
                <td class="py-2 border-l px-4">
                  <input type="text" id="tautan_porto" name="tautan_portofolio" value="{{ $Internship->tautan_portofolio }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label for="tautan_bukti_follow" class="font-semibold text-gray-600">Tautan Bukti Follow:</label>
                </td>
                <td class="py-2 border-l px-4">
                  <input type="text" id="tautan_bukti_follow" name="tautan_berkas_ss" value="{{ $Internship->tautan_berkas_ss }}" class="border border-gray-300 px-2 py-1 rounded-lg w-full">
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label for="motivasi" class="font-semibold text-gray-600">Motivasi:</label>
                </td>
                <td class="py-2 border-l px-4">
                  <textarea id="motivasi" name="motivasi" class="border border-gray-300 px-2 py-1 rounded-lg w-full">{{ $Internship->motivasi }}</textarea>
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label for="created_at" class="font-semibold text-gray-600">Created At:</label>
                </td>
                <td class="py-2 border-l px-4">
                  <input type="text" id="created_at" name="created_at" value="{{ $Internship->created_at }}" readonly class="border border-gray-300 px-2 py-1 rounded-lg w-full bg-gray-100">
                </td>
              </tr>
              <tr>
                <td class="py-2 px-4">
                  <label for="updated_at" class="font-semibold text-gray-600">Updated At:</label>
                </td>
                <td class="py-2 border-l px-4">
                  <input type="text" id="updated_at" name="updated_at" value="{{ $Internship->updated_at }}" readonly class="border border-gray-300 px-2 py-1 rounded-lg w-full bg-gray-100">
                </td>
              </tr>
            </table>
          </div>

          <div class="flex justify-end mt-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">Simpan Perubahan</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection