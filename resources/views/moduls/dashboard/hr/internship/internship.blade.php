@extends('moduls.dashboard.layouts.main', [
'title' => 'Internship',
'active' => 'Dashboard',
'modul' => 'Internship',
])

@section('content-dashboard')
 <style>
  .w-80 {
  width: 20rem; /* Adjust as needed for your specific requirements */
}
 </style>

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
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black tracking-wider">No</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black tracking-wider">Nama Lengkap</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black tracking-wider">Link WA</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black tracking-wider">Tanggal Pendaftaran</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black tracking-wider">Nama Posisi</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black tracking-wider w-80">Tidak dapat diproses</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black tracking-wider w-80">Catatan</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black tracking-wider w-80">Progress</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black tracking-wider">Keterangan</th>
              <th class="px-6 py-3 bg-white text-left text-sm leading-4 font-bold text-black tracking-wider">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($Internship as $item)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
              <td class="px-6 py-4 whitespace-no-wrap">{{ $loop->iteration }}</td>
              <td class="px-6 py-4 whitespace-no-wrap">{{ $item->nama_lengkap }}</td>
              <td class="px-6 py-4 whitespace-no-wrap text-blue-500"><a href="https://wa.me/{{ $item->no_whatsapp }}">{{ $item->no_whatsapp }}</a></td>
              <td class="px-6 py-4 whitespace-no-wrap">{{ $item->created_at}}</td>
              <td class="px-6 py-4 whitespace-no-wrap">{{ $item->hiringPosition->name}}</td>
              <td class="px-6 py-4 whitespace-no-wrap w-60">
                <select name="tidak_dapat_diproses" class="form-select w-60">
                  <option value="yes" {{ $item->tidak_dapat_diproses == 'yes' ? 'selected' : '' }}>Pilih</option>
                  <option value="no" {{ $item->tidak_dapat_diproses == 'no' ? 'selected' : '' }}>Mengundurkan diri</option>
                  <option value="no" {{ $item->tidak_dapat_diproses == 'no' ? 'selected' : '' }}>Menolak wawancara</option>
                  <option value="no" {{ $item->tidak_dapat_diproses == 'no' ? 'selected' : '' }}>Tidak membalas chat undangan</option>
                  <option value="no" {{ $item->tidak_dapat_diproses == 'no' ? 'selected' : '' }}>Tidak bisa dihubungi</option>
                </select>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap w-80">
                <select name="catatan" class="form-select w-60">
                  <option value="note0" {{ $item->catatan == 'note1' ? 'selected' : '' }}>Pilih</option>
                  <option value="note1" {{ $item->catatan == 'note1' ? 'selected' : '' }}>CV tidak bisa dibuka</option>
                  <option value="note2" {{ $item->catatan == 'note2' ? 'selected' : '' }}>Jurusan tidak sesuai</option>
                  <option value="note3" {{ $item->catatan == 'note3' ? 'selected' : '' }}>Tidak Follow sosmed Berbinar</option>
                  <option value="note3" {{ $item->catatan == 'note3' ? 'selected' : '' }}>Akun sosmed diprivat</option>
                  <option value="note3" {{ $item->catatan == 'note3' ? 'selected' : '' }}>Tidak ada portofolio</option>
                  <option value="note3" {{ $item->catatan == 'note3' ? 'selected' : '' }}>Nomor WA tidak aktif</option>
                  <option value="note3" {{ $item->catatan == 'note3' ? 'selected' : '' }}>Data tidak sinkron</option>
                  <option value="note3" {{ $item->catatan == 'note3' ? 'selected' : '' }}>Tidak direkomendasikan</option>
                </select>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap w-80">
                <select name="progress" class="form-select w-60">
                  <option value="progress0" {{ $item->progress == 'progress1' ? 'selected' : '' }}>Pilih</option>
                  <option value="progress1" {{ $item->progress == 'progress1' ? 'selected' : '' }}>Screening</option>
                  <option value="progress2" {{ $item->progress == 'progress2' ? 'selected' : '' }}>Sudah dichat</option>
                  <option value="progress3" {{ $item->progress == 'progress3' ? 'selected' : '' }}>Sudah diwawancara</option>
                  <option value="progress3" {{ $item->progress == 'progress3' ? 'selected' : '' }}>Tidak lolos wawancara</option>
                  <option value="progress3" {{ $item->progress == 'progress3' ? 'selected' : '' }}>Zoom TTD KK</option>
                  <option value="progress3" {{ $item->progress == 'progress3' ? 'selected' : '' }}>Onboarding</option>
                </select>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap">{{ $item->hiringPosition->keterangan}}</td>
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
