@extends('moduls.dashboard.layouts.main', [
'title' => 'Dashboard Papikostick',
'active' => 'Dashboard',
'modul' => 'papikostick',
])

@section('content-dashboard')
<section class="flex w-full p-4 gap-4">
  <div class="flex flex-col items-center w-3/5 bg-white p-4 shadow-md rounded-lg">
    <h2 class="text-lg font-semibold mb-2" style="text-align: start; font-size: 14px; margin-bottom: 10px; margin-left: -65%;">Name: Morgan Vero</h2>
    <img src="{{ asset('assets/images/psikotes/diagram-papikostik.png') }}" alt="Diagram PapiKostik" title="Diagram PapiKostik" class="bottom-0 right-0 z-50" style="width: 175px;" data-aos="fade-up" data-aos-duration="1500">
    <div class="overflow-y-auto" style="max-height: 250px; font-size: 14px; margin-top: 30px; margin-left: 40px;">
      <p class="mb-2"><strong>Decs:</strong></p>
      <p class="mb-2"><strong>P (Perseverance)</strong> - Kebutuhan untuk menyelesaikan tugas yang dimulai, menunjukkan tingkat ketekunan dan keuletan seseorang.</p>
      <p class="mb-2"><strong>A (Achievement)</strong> - Kebutuhan untuk mencapai prestasi tinggi dan sukses dalam tugas atau pekerjaan yang diambil.</p>
      <p class="mb-2"><strong>L (Leadership)</strong> - Kebutuhan untuk memimpin dan mengarahkan orang lain, menunjukkan kemampuan kepemimpinan.</p>
      <p class="mb-2"><strong>C (Conformity)</strong> - Kebutuhan untuk mematuhi aturan, norma, dan harapan sosial yang ada dalam lingkungan.</p>
      <p class="mb-2"><strong>T (Tough-mindedness)</strong> - Kebutuhan untuk bersikap tegas, berani, dan mampu menghadapi tantangan tanpa mudah terpengaruh oleh emosi.</p>
      <p class="mb-2"><strong>I (Independence)</strong> - Kebutuhan untuk bekerja dan membuat keputusan secara mandiri tanpa bergantung pada orang lain.</p>
      <p class="mb-2"><strong>K (Communality)</strong> - Kebutuhan untuk bekerja sama dan berhubungan baik dengan orang lain dalam kelompok atau komunitas.</p>
      <p class="mb-2"><strong>S (Sociability)</strong> - Kebutuhan untuk bersosialisasi, berinteraksi, dan berkomunikasi dengan orang lain dalam berbagai situasi.</p>
      <p class="mb-2"><strong>D (Dominance)</strong> - Kebutuhan untuk mengendalikan situasi dan orang lain, menunjukkan tingkat dominasi dalam interaksi sosial.</p>
      <p class="mb-2"><strong>E (Energy)</strong> - Tingkat energi dan vitalitas yang dimiliki seseorang dalam menjalani aktivitas sehari-hari.</p>
      <p class="mb-2"><strong>F (Flexibility)</strong> - Kemampuan untuk beradaptasi dengan perubahan dan bersikap fleksibel dalam berbagai situasi.</p>
      <p class="mb-2"><strong>G (Gregariousness)</strong> - Kebutuhan untuk bergaul dan mencari kesenangan dalam interaksi sosial yang aktif.</p>
      <p class="mb-2"><strong>H (Humanitarianism)</strong> - Kebutuhan untuk peduli dan membantu orang lain, menunjukkan tingkat kepedulian terhadap kesejahteraan orang lain.</p>
      <p class="mb-2"><strong>M (Maturity)</strong> - Tingkat kedewasaan emosional dan kemampuan untuk menghadapi situasi dengan tenang dan bijaksana.</p>
      <p class="mb-2"><strong>N (Nurturance)</strong> - Kebutuhan untuk merawat dan mendukung orang lain, menunjukkan tingkat kasih sayang dan perhatian.</p>
      <p class="mb-2"><strong>O (Order)</strong> - Kebutuhan untuk menjaga keteraturan, ketertiban, dan rapi dalam berbagai aspek kehidupan.</p>
      <p class="mb-2"><strong>Q (Quality)</strong> - Kebutuhan untuk mencapai standar tinggi dalam pekerjaan atau tugas yang diambil, menunjukkan perhatian terhadap kualitas.</p>
      <p class="mb-2"><strong>R (Responsibility)</strong> - Kebutuhan untuk bertanggung jawab atas tindakan dan keputusan yang diambil, menunjukkan tingkat tanggung jawab pribadi.</p>
      <p class="mb-2"><strong>U (Understanding)</strong> - Kebutuhan untuk memahami dan menghargai perasaan serta pandangan orang lain.</p>
      <p class="mb-2"><strong>Z (Zest)</strong> - Tingkat semangat dan antusiasme dalam menjalani kehidupan dan menghadapi berbagai aktivitas.</p>
    </div>
  </div>

  <div class="flex flex-col bg-white p-4 shadow-md rounded-lg" style="width: 320px; margin-left: 60px;">
    <h2 class="text-3xl font-semibold mb-2">Answer</h2>
    <table class="min-w-full bg-white border-collapse" style="font-size: 13px;">
      <thead class="bg-white">
        <tr>
          <th class="py-2 px-4 border-b-2 border-b border-gray-200">No</th>
          <th class="py-2 px-4 border-b-2 border-b border-gray-200">Choice</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="py-2 px-4">1</td>
          <td class="py-2 px-4">A. Saya bukan seorang pemurung</td>
        </tr>
        <tr>
          <td class="py-2 px-4">2</td>
          <td class="py-2 px-4">A. Saya bukan seorang pemurung</td>
        </tr>
        <tr>
          <td class="py-2 px-4">3</td>
          <td class="py-2 px-4">A. Saya bukan seorang pemurung</td>
        </tr>
        <tr>
          <td class="py-2 px-4">4</td>
          <td class="py-2 px-4">A. Saya bukan seorang pemurung</td>
        </tr>
        <tr>
          <td class="py-2 px-4">5</td>
          <td class="py-2 px-4">A. Saya bukan seorang pemurung</td>
        </tr>
        <tr>
          <td class="py-2 px-4">6</td>
          <td class="py-2 px-4">A. Saya bukan seorang pemurung</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
@endsection