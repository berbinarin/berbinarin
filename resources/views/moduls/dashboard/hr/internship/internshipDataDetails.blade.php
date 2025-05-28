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
        Fitur ini digunakan untuk menampilkan detail data pendaftar yang telah melakukan pendaftaran internship di laman web Berbinar Career.
      </p>
      <div class="flex gap-4 mt-8">
        <form action="{{ route('dashboard.internships.index') }}" method="get">
          <button class="px-4 py-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left text-gray-600 h-6 w-6" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.354 2.646a.5.5 0 0 1 0 .708L5.707 8l4.647 4.646a.5.5 0 1 1-.708.708l-5-5a.5.5 0 0 1 0-.708l5-5a.5.5 0 0 1 .708 0z" />
            </svg>
          </button>
        </form>
        <form action="{{ route('dashboard.internships.edit', $Internship->id) }}" method="GET"">
        <button type=" submit" class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
          <p class="font-medium leading-none text-dark">Edit</p>
          </button>
        </form>
        <button  onclick="toggleModal('delete-modal-{{ $Internship->id}}')" type="button"
          class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center px-6 py-3 text-white bg-red-500 hover:bg-red-500 focus:outline-none rounded">
          <p class="font-medium leading-none text-dark">Hapus</p>
        </button>
        {{-- <form action="{{ route('dashboard.internships.destroy', $Internship->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
          @csrf
          @method('DELETE')
          <button type="submit" class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center px-6 py-3 text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded">
            <p class="font-medium leading-none">Hapus</p>
          </button>
        </form> --}}
      </div>
    </div>
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="delete-modal-{{ $Internship->id}}">
      <div class="relative w-auto my-6 mx-auto max-w-3xl">
          <!--content-->
          <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none" style="margin-top: 30%">
              <!--header-->
              <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                  <h3 class="text-3xl font-semibold">
                      Delete Detail Data Internship
                  </h3>
                  <button
                      class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                      onclick="toggleModal('delete-modal-{{ $Internship->id}}')">
                      <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                          ×
                      </span>
                  </button>
              </div>
              <!--body-->
              <div class="relative p-6 flex-auto">
                  <form action="{{ route('dashboard.internships.destroy', $Internship->id) }}"  method="POST">
                      @csrf
                      @method("DELETE")
                      <input type="hidden" name="id">
                      <p class="mb-6">Apakah anda yakin ingin menghapus data pendaftar bernama <b>{{ $Internship->nama_lengkap }}</b> dari <b>{{ $Internship->asal_pendidikan }}</b> ?</p>
                      <!--footer-->
                      <div class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                          <button
                              class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                              type="button" onclick="toggleModal('delete-modal-{{ $Internship->id}}')">
                              Close
                          </button>
                          <button type="submit" class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center px-6 py-3 text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded">
                            <p class="font-medium leading-none">Hapus</p>
                          </button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="delete-modal-{{ $Internship->id}}-backdrop"></div>

    <!-- tabel kiri start -->
    <div class="flex flex-row gap-4">
      <div class="w-full md:w-1/2">
        <div class="bg-white overflow-hidden shadow-sm rounded-lg p-4">
          <!-- Judul table Kiri -->
          <div class="flex items-center mb-4">
            <div class="w-full flex justify-between">
              <p class="text-xl w-2/6 font-semibold bg-gray-100 py-1 px-4 rounded-l-lg m-0 flex-grow text-start">Fields</p>
              <div class="w-1 bg-gray-300 h-full"></div>
              <p class="text-xl w-4/6 font-semibold bg-gray-100 py-1 px-4 rounded-r-lg m-0 flex-grow text-start">Details</p>
            </div>
          </div>
          <!-- Value Table kiri -->
          <div class="flex flex-col mb-2">
            <table class="w-full">
              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4 w-2/6"> <!-- Even more increased vertical padding -->
                  <label class="font-semibold text-gray-600">Email:</label>
                </td>
                <td class="py-1 px-4"> <!-- Even more increased vertical padding -->
                  {{$Internship->email}}
                </td>
              </tr>
              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Posisi:</label>
                </td>
                <td class="py-1 px-4">
                  {{$Internship->name}}
                </td>
              </tr>
              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Nama Lengkap:</label>
                </td>
                <td class="py-1 px-4">
                  {{$Internship->nama_lengkap}}
                </td>
              </tr>
              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Nama Panggilan:</label>
                </td>
                <td class="py-1 px-4">
                  {{$Internship->nama_panggilan}}
                </td>
              </tr>
              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Tanggal Lahir:</label>
                </td>
                <td class="py-1 px-4">
                  {{$Internship->tanggal_lahir}}
                </td>
              </tr>

              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Link. WA:</label>
                </td>
                <td class="py-1 pl-4 pr-8">
                  <a href="https://wa.me/{{$Internship->no_whatsapp}}" target="_blank">https://wa.me/{{$Internship->no_whatsapp}}</a>
                </td>
              </tr>

              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Domisili:</label>
                </td>
                <td class="py-1 px-4">
                  {{$Internship->asal_kota}}
                </td>
              </tr>
              
              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Instansi:</label>
                </td>
                <td class="py-1 px-4">
                  {{$Internship->asal_pendidikan}}
                </td>
              </tr>
              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Status:</label>
                </td>
                <td class="py-1 px-4">
                  {{$Internship->status_kelas}}
                </td>
              </tr>
              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Jurusan:</label>
                </td>
                <td class="py-1 px-4">
                  {{$Internship->jurusan}}
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <!-- tabel kiri end -->


      <style>
        .fixed-height {
          height: 90px;
          /* Set your desired fixed height */
        }
      </style>



      <!-- tabel kanan start -->
      <div class="w-full md:w-1/2">
        <div class="bg-white overflow-hidden shadow-sm rounded-lg p-4">
          <!-- Judul table Kanan -->
          <div class="flex items-center mb-4">
            <div class="w-full flex justify-between">
              <p class="text-xl w-2/6 font-semibold bg-gray-100 py-1 px-4 rounded-l-lg m-0 flex-grow-0 text-start">Fields</p>
              <div class="w-1 bg-gray-300 h-full"></div>
              <p class="text-xl w-4/6 font-semibold bg-gray-100 py-1 px-4 rounded-r-lg m-0 flex-grow-0 text-start">Details</p>
            </div>
          </div>
          <!-- Values Table kanan -->
          <div class="flex flex-col mb-2" > 
            <!-- style="margin-bottom: 168px;" -->
            <table class="w-full">
              <colgroup>
                <col class="w-2/6">
                <col class="w-4/6">
              </colgroup>
              <style>
                .multi-line-ellipsis {
                  display: -webkit-box;
                  -webkit-line-clamp: 3;
                  /* Show up to 3 lines */
                  -webkit-box-orient: vertical;
                  overflow: hidden;
                  text-overflow: ellipsis;
                  line-height: 1.5;
                  /* Adjust based on font size and row height */
                }
              </style>

                <!-- <td class="py-1 pl-4 pr-8 multi-line-ellipsis">
                  <a href="https://wa.me/{{$Internship->no_whatsapp}}" target="_blank">https://wa.me/{{$Internship->no_whatsapp}}</a>
                </td> -->
                
              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4 w-2/6">
                  <label class="font-semibold text-gray-600">Tautan IG:</label>
                </td>
                <td class="py-1 pl-4 pr-8"> <!-- multi-line-ellipsis -->
                  <a href="{{$Internship->akun_instagram}}" target="_blank">{{$Internship->akun_instagram}}</a>
                </td>
              </tr>

              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Tautan TikTok:</label>
                </td>
                <td class="py-1 pl-4 pr-8">
                  <a href="{{$Internship->akun_tiktok}}" target="_blank">{{$Internship->akun_tiktok}}</a>
                </td>
              </tr>

              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Tautan LinkedIn:</label>
                </td>
                <td class="py-1 pl-4 pr-8">
                  <a href="{{$Internship->akun_linkdin }}" target="_blank">{{$Internship->akun_linkdin }}</a>
                </td>
              </tr>

              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Informasi Rekrutmen:</label>
                </td>
                <td class="py-1 pl-4 pr-8">
                  {{$Internship->sumber_informasi}}
                </td>
              </tr>

              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Tautan CV:</label>
                </td>
                <td class="py-1 pl-4 pr-8">
                  <a href="{{$Internship->tautan_cv}}" target="_blank">{{$Internship->tautan_cv}}</a>
                </td>
              </tr>

              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Tautan Portfolio:</label>
                </td>
                <td class="py-1 pl-4 pr-8">
                  <a href="{{$Internship->tautan_portofolio}}" target="_blank">{{$Internship->tautan_portofolio}}</a>
                </td>
              </tr>

              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600" target="_blank">Tautan Bukti Follow:</label>
                </td>
                <td class="py-1 pl-4 pr-8">
                  <a href="{{$Internship->tautan_berkas_ss}}">{{$Internship->tautan_berkas_ss}}</a>
                </td>
              </tr>

              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Motivasi:</label>
                </td>
                <td class="py-1 pl-4 pr-8 multi-line-ellipsis" style="word-wrap: break-word; white-space: normal;">

                  {{$Internship->motivasi}}
                </td>
              </tr>

              <tr class="border-b border-gray-200" style="height: 80px;">
                <td class="py-1 border-r px-4">
                  <label class="font-semibold text-gray-600">Keterangan:</label>
                </td>
                <td class="py-1 pl-4 pr-8 multi-line-ellipsis" style="word-wrap: break-word; white-space: normal;">
                  {{$Internship->keterangan}}
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