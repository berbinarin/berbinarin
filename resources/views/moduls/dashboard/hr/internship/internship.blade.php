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

    </div>
    <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
      <div class="mt-4 mb-4 overflow-x-auto">
        <table id="example" class="min-w-full leading-normal">
          <thead>
            <tr class="mt-4">
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black  tracking-wider">No</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black  tracking-wider">Nama Lengkap</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black  tracking-wider">Link WA</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black  tracking-wider">Tanggal Pendaftaran</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black  tracking-wider">Nama Posisi</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black  tracking-wider">Progress</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black  tracking-wider">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($Internship as $item)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
              <td class="px-6 py-4 whitespace-no-wrap">{{ $loop->iteration }}</td>
              <td class="px-6 py-4 whitespace-no-wrap">{{ $item->nama_lengkap }}</td>
              <td class="px-6 py-4 whitespace-no-wrap text-blue-500"><a href="https://wa.me/{{ $item->nomor_wa }}">{{ $item->nomor_wa }}</a></td>
              <td class="px-6 py-4 whitespace-no-wrap">{{ $item->created_at}}</td>
              <td class="px-6 py-4 whitespace-no-wrap">{{ $item->posisi}}</td>
              <td>
                <a href="#" class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-3 border border-black hover:bg-gray-600 focus:outline-none rounded">
                  <span class="mx-0 -my-1 text-black text-xs">{{ $item->progress }}</span>
                </a>
              </td>
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


<script>
  function toggleModal(modalID) {
    document.getElementById(modalID).classList.toggle('hidden');
    document.getElementById(modalID + '-backdrop').classList.toggle('hidden');
  }
</script>
@endsection