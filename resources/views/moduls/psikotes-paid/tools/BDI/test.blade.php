@extends('moduls.psikotes.layouts.mainn', [
  'title' => 'Soal BDI',
  'active' => 'one psikotest',
])

@section('content')
<div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">
  <!-- Background Image -->
  <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar"
      class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

  <!-- Container for Icons above Card -->
  <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
    <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon" class="w-8 h-8 rounded-full">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon" class="w-8 h-8 rounded-full ml-2">
    </div>
  </div>

  <!-- Judul tes, misalnya "Tes 1" -->
  <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">
    Tes 27
  </p>

  <!-- Main Content Area -->
  <div class="relative z-10 mx-auto bg-none rounded-lg p-6 mt-10" style="width: 750px;">
    <!-- Question Number Circle (menampilkan nomor tes saat ini) -->
    <div class="absolute top-0 left-0 transform -translate-x-1/2 -translate-y-1/2 bg-amber-500 text-white rounded-full h-12 w-12 flex items-center justify-center text-lg font-bold">
        {{ $nomorBdi->nomor_bdi ?? '1' }}
    </div>

    <!-- Form untuk submit jawaban -->
    <form method="POST" action="{{ route('psikotest-paid.tool.BDI.testbdi') }}">
      @csrf
      <!-- Sertakan id nomor tes agar dapat diidentifikasi di controller -->
      <input type="hidden" name="nomor_bdi_id" value="{{ $nomorBdi->id }}">

      <!-- Tampilan 4 kartu soal (opsi jawaban) -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @php
          // Definisikan warna untuk tiap kartu (sesuai urutan)
          $colors = [
            1 => ['bg' => '#3FA2F6', 'border' => '#3FA2F6'],
            2 => ['bg' => '#FBB03B', 'border' => '#FBB03B'],
            3 => ['bg' => '#406C9B', 'border' => '#406C9B'],
            4 => ['bg' => '#6A3D00', 'border' => '#6A3D00'],
          ];
        @endphp

        @foreach($soalbdi as $soal)
          @php 
             $color = $colors[$loop->iteration] ?? $colors[1];
          @endphp
          <label class="rounded-lg p-4 cursor-pointer relative card flex items-center justify-center text-center"
                 style="background-color: {{ $color['bg'] }}; height: 150px; transition: transform 0.2s ease;"
                 onmouseover="this.style.boxShadow='0 6px 12px rgba(0, 0, 0, 0.6)';"
                 onmouseout="this.style.boxShadow='none';"
                 for="soal_{{ $soal->id }}">
            <!-- Radio button untuk memilih soal; nilai yang dikirim adalah id soal -->
            <input type="radio" name="jawaban[0][soal_id]" id="soal_{{ $soal->id }}" value="{{ $soal->id }}" data-bobot="{{ $soal->bobot }}" class="hidden" required>
      <!-- Teks pernyataan soal -->
                  <div class="text-white">{{ $soal->pernyataan }}</div>
            <!-- Checkmark (akan tampil jika opsi terpilih) -->
            <div class="absolute bottom-2 right-2 w-5 h-5 rounded-full bg-white flex items-center justify-center"
                 style="border: 2px solid {{ $color['border'] }};">
              <span class="hidden text-lg checkmark" style="color: {{ $color['border'] }};">✔</span>
            </div>
          </label>
        @endforeach
      </div>

      <!-- Hidden input untuk menyimpan bobot dari jawaban yang dipilih -->
      <input type="hidden" name="jawaban[0][bobot]" id="selected_bobot">

      <!-- Bar progres dan tombol Next -->
      <div class="flex bg-white rounded-md items-center justify-between mt-24" style="height: 40px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="flex items-center ml-6" style="height: 3px; width: 510px; position: relative;">
          <!-- Garis background hitam -->
          <div class="bg-black rounded-full" style="height: 3px; width: 100%;"></div>
          <!-- Garis progress biru (misalnya 40%; bisa dibuat dinamis) -->
          <div class="bg-blue-500 rounded-full" style="height: 3px; width: 40%; position: absolute; top: 0; left: 0;"></div>
          <!-- Lingkaran kecil di ujung garis -->
          <div class="bg-blue-500 rounded-full" style="height: 10px; width: 10px; position: absolute; top: -4px; left: 40%; transform: translateX(-50%);"></div>
          <!-- Teks persentase -->
          <span class="text-sm text-black" style="position: absolute; top: 1px; left: 40%; transform: translateX(-50%); font-size: 8px;">40%</span>
        </div>
        <!-- Tombol submit jawaban; saat diklik, jawaban (soal_id & bobot) akan dikirim ke controller SkorBdi -->
        <button type="submit" class="px-4 py-1 bg-blue-500 text-sm mr-2 text-white rounded-lg hover:bg-blue-600">
          Soal Berikutnya
        </button>
      </div>
    </form>
  </div>
</div>

<script>
  // Tambahkan event listener untuk radio button agar:
  // 1. Menampilkan checkmark pada opsi yang dipilih
  // 2. Mengisi hidden input 'selected_bobot' dengan nilai bobot dari opsi terpilih
  document.querySelectorAll('input[type="radio"]').forEach(radio => {
      radio.addEventListener('change', function() {
          // Sembunyikan semua checkmark
          document.querySelectorAll('.checkmark').forEach(checkmark => {
              checkmark.classList.add('hidden');
          });

          // Tampilkan checkmark untuk opsi yang dipilih
          if (this.checked) {
              this.closest('label').querySelector('.checkmark').classList.remove('hidden');
              // Set nilai bobot ke hidden input
              document.getElementById('selected_bobot').value = this.getAttribute('data-bobot');
          }
      });
  });

  // Tambahkan efek hover untuk tiap kartu (card)
  document.querySelectorAll('.card').forEach(card => {
      card.addEventListener('mouseover', function() {
          this.style.transform = 'scale(1.03)';
      });
      card.addEventListener('mouseout', function() {
          this.style.transform = 'scale(1)';
      });
  });
</script>
@endsection
