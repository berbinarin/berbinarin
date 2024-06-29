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
        Detail Data Internship
      </p>
      <p class="w-full md:w-2/4 text-gray-600">
        Fitur ini digunakan untuk mengatur dan memanajemen data posisi hiring yang sedang atau akan dibuka atau telah
        dibuka yang ditampilkan pada website careers Berbinarin.
      </p>
      <div class="flex gap-4 mt-8">
        <form action="{{ route('dashboard.internship') }}" method="get">
          <button class="px-4 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left text-gray-600 h-6 w-6" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.354 2.646a.5.5 0 0 1 0 .708L5.707 8l4.647 4.646a.5.5 0 1 1-.708.708l-5-5a.5.5 0 0 1 0-.708l5-5a.5.5 0 0 1 .708 0z" />
            </svg>
          </button>
        </form>
        <form action="{{ route('dashboard.editInternship', $Internship->id) }}" method="GET"">
        <button type=" submit" class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
          <p class="font-medium leading-none text-dark">Edit</p>
          </button>
        </form>
        <form action="{{ route('HiringPositions.destroy', $Internship->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
          @csrf
          @method('DELETE')
          <button type="submit" class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center px-6 py-3 text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded">
            <p class="font-medium leading-none">Hapus</p>
          </button>
        </form>
      </div>
    </div>


    <!-- tabel kiri start -->
    <div class="flex flex-row gap-4">
      <div class="w-full md:w-1/2">
        <div class="bg-white overflow-hidden shadow-sm rounded-lg p-4">
          <!-- Judul table Kanan -->
          <div class="flex items-center mb-4">
            <div class="w-full flex justify-between">
              <p class="text-xl w-2/5 font-semibold bg-gray-100 py-2 px-4 rounded-l-lg m-0 flex-grow text-start">Fields</p>
              <div class="w-1 bg-gray-300 h-full"></div>
              <p class="text-xl w-3/5 font-semibold bg-gray-100 py-2 px-4 rounded-r-lg m-0 flex-grow text-start">Details</p>
            </div>
          </div>
          <!-- Value Table kiri -->
          <div class="flex flex-col mb-2">
            <table class="w-full">
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4 w-2/5">
                  <label class="font-semibold text-gray-600">Email:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->email}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Posisi:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->posisi}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Nama Lengkap:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->nama_lengkap}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Nama Panggilan:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->nama_panggilan}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Tanggal Lahir:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->tanggal_lahir}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">No. WA:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->nomor_wa}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Domisili:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->domisili}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Instansi:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->instansi}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Status:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->status}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Jurusan:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->jurusan}}
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <!-- tabel kiri end -->

      <!-- tabel kanan start -->
      <div class="w-full md:w-1/2">
        <div class="bg-white overflow-hidden shadow-sm rounded-lg p-4">
          <!-- Judul table Kanan -->
          <div class="flex items-center mb-4">
            <div class="w-full flex justify-between">
              <p class="text-xl w-2/5 font-semibold bg-gray-100 py-2 px-4 rounded-l-lg m-0 flex-grow text-start">Fields</p>
              <div class="w-1 bg-gray-300 h-full"></div>
              <p class="text-xl w-3/5 font-semibold bg-gray-100 py-2 px-4 rounded-r-lg m-0 flex-grow text-start">Details</p>
            </div>
          </div>
          <!-- Values Table kanan -->
          <div class="flex flex-col mb-2">
            <table class="w-full">
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4 w-2/5">
                  <label class="font-semibold text-gray-600">Tautan IG:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->tautan_ig}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Tautan TikTok:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->tautan_tiktok}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Tautan LinkedIn:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->tautan_linkedin}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Informasi Rekrutmen:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->informasi_rekrutmen}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Tautan CV:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->tautan_cv}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Tautan Portfolio:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->tautan_porto}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Tautan Bukti Follow:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->tautan_bukti_follow}}
                </td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-2 px-4">
                  <label class="font-semibold text-gray-600">Motivasi:</label>
                </td>
                <td class="py-2 border-l px-4">
                  {{$Internship->motivasi}}
                </td>
              </tr>
            </table>
          </div>
          <div class="flex justify-end mt-4">
            <!-- <a href="/dashboard/admin/counselorDataDetails/{{ $Internship->id }}" class="text-blue-600 hover:text-blue-800">Lihat Detail</a> -->
          </div>
        </div>
      </div>
      <!-- tabel kanan end -->
       
    </div>

  </div>
</section>

<!-- Modal -->
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
  <!-- Modal Content -->
</div>

<!-- Modal Backdrop -->
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>

<script>
  function toggleModal(modalID) {
    document.getElementById(modalID).classList.toggle('hidden');
    document.getElementById(modalID + '-backdrop').classList.toggle('hidden');
  }
</script>
@endsection