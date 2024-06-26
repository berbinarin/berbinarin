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
          Internship Berbinar
        </p>
        <p class="w-full md:w-2/4 text-gray-600">
          Fitur ini digunakan untuk mengatur dan memanajemen data posisi hiring yang sedang atau akan dibuka atau telah dibuka yang ditampilkan pada website careers Berbinarin.
        </p>
        <button onclick="toggleModal('modal-id')" type="button" class="focus:ring-2 focus:ring-offset-2 mt-8 sm:mt-3 inline-flex items-center justify-center px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
          <p class="font-medium leading-none text-dark">Tambah Data</p>
        </button>
      </div>
      <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
        <div class="mt-4 mb-4 overflow-x-auto">
          <table id="example" class="min-w-full leading-normal">
            <thead>
              <tr class="mt-4">
                <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black  tracking-wider">No</th>
                <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black  tracking-wider">Nama Lengkap</th>
                <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black  tracking-wider">No. Wa</th>
                <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black  tracking-wider">Tanggal Pendaftaran</th>
                <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black  tracking-wider">Nama Posisi</th>
                <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black  tracking-wider">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($Internship as $item)
              <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="px-6 py-4 whitespace-no-wrap">{{ $loop->iteration }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $item->nama_lengkap }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $item->no_whatsapp}}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $item->created_at}}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $item->hiringPosition->name}}</td>
                <td>
                  <a href="/dashboard/admin/internshipDataDetails/{{ $item->id }}" class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-3 bg-gray-500 hover:bg-gray-600 focus:outline-none rounded">
                    <i class='bx bx-show text-white'></i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</section>

<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
  <div class="relative w-auto my-6 mx-auto max-w-3xl">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
        <h3 class="text-3xl font-semibold">
          Input Data Position
        </h3>
        <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
          <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
            ×
          </span>
        </button>
      </div>
      <!--body-->
      <div class="relative p-6 flex-auto">
        <form action="{{ route('HiringPositions.store') }}" method="post" class="flex flex-col gap-4">
          @csrf
          <div class="flex flex-col">
            <label for="name" class="text-base font-medium text-gray-700">Nama Posisi</label>
            <input id="name" name="name" type="text" placeholder="Human Resource Development" class="px-3 py-2 border-2 rounded-md focus:outline-none focus:border-primary" required />
          </div>
          <div class="flex flex-col">
            <label for="type" class="text-base font-medium text-gray-700">Tipe Pekerjaan</label>
            <select id="type" name="type" class="px-3 py-2 border-2 rounded-md focus:outline-none focus:border-primary" required>
              <option value="Internship">Internship</option>
              <option value="Fulltime">Fulltime</option>
              <option value="Part Time">Part Time</option>
              <option value="Contract">Contract</option>
              <option value="Freelancer">Freelancer</option>
            </select>
          </div>
          <div class="flex flex-col">
            <label for="positions" class="text-base font-medium text-gray-700">Jabatan</label>
            <select id="positions" name="positions" class="px-3 py-2 border-2 rounded-md focus:outline-none focus:border-primary" required>
              <option value="Staff">Staff</option>
              <option value="Manager">Manager</option>
              <option value="Researcher">Researcher</option>
            </select>
          </div>
          <div class="flex flex-col">
            <label for="location" class="text-base font-medium text-gray-700">Lokasi</label>
            <select id="location" name="location" class="px-3 py-2 border-2 rounded-md focus:outline-none focus:border-primary" required>
              <option value="Remote">Remote</option>
              <option value="Surabaya">Surabaya</option>
            </select>
          </div>
          <div class="flex flex-col">
            <label for="link" class="text-base font-medium text-gray-700">Link Registrasi</label>
            <input id="link" name="link" type="text" placeholder="Link Registrasi" class="px-3 py-2 border-2 rounded-md focus:outline-none focus:border-primary" required />
          </div>
          <!--footer-->
          <div class="flex items-center justify-end pt-4 border-t border-solid border-blueGray-200 rounded-b">
            <button type="button" class="px-6 py-2 text-sm bg-gray-200 text-gray-700 rounded-md focus:outline-none focus:bg-gray-300" onclick="toggleModal('modal-id')">Close</button>
            <button type="submit" class="ml-2 px-6 py-2 text-sm bg-primary text-white rounded-md focus:outline-none focus:bg-primary-dark">Simpan Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>

<script>
  function toggleModal(modalID) {
    document.getElementById(modalID).classList.toggle('hidden');
    document.getElementById(modalID + '-backdrop').classList.toggle('hidden');
  }
</script>
@endsection