@extends('moduls.dashboard.layouts.main', [
    'title' => 'Table Biodata Perusahaan',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid Perusahaan',
])

<style>
    .tab-btn {
        font-weight: 600;
        color: black;
        border-bottom: 2px solid transparent;
        padding-bottom: 4px;
        transition: color 0.3s ease, border-color 0.3s ease;
    }

    .tab-btn.selected {
        color: #75BADB;
        border-bottom: 2px solid #75BADB;
    }

    .tab-btn:hover {
        color: #A0D3E9;
    }
</style>

@section('content-dashboard')
<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div>
                    <p class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Detail Jawaban Test Biodata Perusahaan</p>
                    <div class="-ml-3 sm:ml-0">
                        <a href="{{ route('dashboard.psikotespaid.biodataperusahaan') }}">
                            <i class='bx bx-arrow-back text-[35px] text-primary ml-0 mt-2 text-left'></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex justify-center space-x-8">
                <div class="bg-white p-8 rounded-lg w-full" style="height: 35rem">
                    <div class="flex justify-left mb-6 space-x-4 gap-4">
                        <button id="tab1" 
                            class="tab-btn text-lg" onclick="showTab('tab1')">Data Diri</button>
                        <button id="tab2" 
                            class="tab-btn text-lg" onclick="showTab('tab2')">Riwayat Pendidikan</button>
                        <button id="tab3" 
                            class="tab-btn text-lg" onclick="showTab('tab3')">Pertanyaan Essay</button>
                    </div>
                    <div id="tab1Detail" class="overflow-y-scroll" style="height: 90%">
                        <h2 class="font-bold text-3xl text-primary mb-6">Data Diri</h2>
                        <table class="w-full text-lg">
                            <tbody>
                                <tr>
                                    <th class="text-left text-gray-400">Nama Lengkap</th>
                                    <th class="text-left text-gray-400">NIK</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">Morgan Vero</td>
                                    <td class="font-medium">84928492</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-gray-400">Tempat Lahir</th>
                                    <th class="text-left text-gray-400">Tanggal Lahir</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">Kota Surabaya</td>
                                    <td class="font-medium">01/01/2000</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-gray-400">Jenis Kelamin</th>
                                    <th class="text-left text-gray-400">Status Pernikahan</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">Laki-laki</td>
                                    <td class="font-medium">Belum Menikah</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-gray-400">Telepon/HP</th>
                                    <th class="text-left text-gray-400">Alamat</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">081234567890</td>
                                    <td class="font-medium">Jl. Tata Surya No. 123</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-gray-400">Alamat Email</th>
                                    <th class="text-left text-gray-400">Unit Kerja</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">berbinar@gmail.com</td>
                                    <td class="font-medium">Departemen SDM</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-gray-400">Jabatan Saat Ini</th>
                                    <th class="text-left text-gray-400">Jabatan yang Diinginkan</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">CEO</td>
                                    <td class="font-medium">CEO</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>          
                    
                    <div id="tab2Detail" class="overflow-y-scroll" style="height: 90%">
                        <h2 class="font-bold text-3xl text-primary mb-6">Riwayat Pendidikan</h2>
                        <table class="w-full text-lg">
                            <tbody>
                                <tr>
                                    <th class="text-left text-blue-400">SD</th>
                                </tr>
                                <tr>
                                    <th class="text-left text-gray-400">Nama Sekolah</th>
                                    <th class="text-left text-gray-400">Tahun</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">SD Harapan 1</td>
                                    <td class="font-medium">2003</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-blue-400">SMP</th>
                                </tr>
                                <tr>
                                    <th class="text-left text-gray-400">Nama Sekolah</th>
                                    <th class="text-left text-gray-400">Tahun</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">SMP Harapan 1</td>
                                    <td class="font-medium">2003</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-blue-400">SMA</th>
                                </tr>
                                <tr>
                                    <th class="text-left text-gray-400">Nama Sekolah</th>
                                    <th class="text-left text-gray-400">Jurusan</th>
                                    <th class="text-left text-gray-400">Tahun</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">SMA Harapan 1</td>
                                    <td class="font-medium">MIPA</td>
                                    <td class="font-medium">2003</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-blue-400">D1/D2/D3</th>
                                </tr>
                                <tr>
                                    <th class="text-left text-gray-400">Nama Perguruan Tinggi</th>
                                    <th class="text-left text-gray-400">Jurusan</th>
                                    <th class="text-left text-gray-400">Tahun</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">Politeknik Bandung</td>
                                    <td class="font-medium">Manajemen</td>
                                    <td class="font-medium">2003</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-blue-400">D4/S1</th>
                                </tr>
                                <tr>
                                    <th class="text-left text-gray-400">Nama Perguruan Tinggi</th>
                                    <th class="text-left text-gray-400">Jurusan</th>
                                    <th class="text-left text-gray-400">Tahun</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">Universitas Bandung</td>
                                    <td class="font-medium">Manajemen</td>
                                    <td class="font-medium">2003</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-blue-400">S2</th>
                                </tr>
                                <tr>
                                    <th class="text-left text-gray-400">Nama Perguruan Tinggi</th>
                                    <th class="text-left text-gray-400">Jurusan</th>
                                    <th class="text-left text-gray-400">Tahun</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">Universitas Bandung</td>
                                    <td class="font-medium">Manajemen</td>
                                    <td class="font-medium">2003</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-blue-400">S3</th>
                                </tr>
                                <tr>
                                    <th class="text-left text-gray-400">Nama Perguruan Tinggi</th>
                                    <th class="text-left text-gray-400">Jurusan</th>
                                    <th class="text-left text-gray-400">Tahun</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">Universitas Bandung</td>
                                    <td class="font-medium">Manajemen</td>
                                    <td class="font-medium">2003</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                
                    <div id="tab3Detail" class="overflow-y-scroll" style="height: 90%">
                        <h2 class="font-bold text-3xl text-primary mb-6">Pertanyaan Essay</h2>
                        <table class="w-full text-lg">
                            <tbody>
                                <tr>
                                    <th class="text-left text-gray-400">Sebutkan Kelebihan/Kekuatan dari Pribadi Anda yang Mendukung Tugas Anda Saat Ini (Minimal 3)</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores veniam esse odio eveniet quidem voluptas et illum sit expedita aperiam optio obcaecati tenetur voluptatibus animi perspiciatis nulla, voluptatem, adipisci modi!</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-gray-400">Sebutkan Faktor yang Sering Menghambat Keberhasilan/Kelancaran Pelaksanaan Tugas Anda Saat Ini (Minimal 3)</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, iste. Natus quibusdam consequuntur rem error magni ad ut veniam dolores eveniet, est rerum et voluptates libero omnis veritatis assumenda cumque?</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-gray-400">Target capaian anda untuk lima (5) tahun ke depan</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel qui ea dolore, reiciendis laborum quaerat, neque soluta maiores placeat iure praesentium itaque magnam? Laboriosam obcaecati expedita fugit, provident temporibus vitae!</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                <tr>
                                    <th class="text-left text-gray-400">Tuliskan satu pengalaman keberhasilan anda dalam menjalankan tugas, yang menurut anda merupakan tugas yang sangat sulit. Jelaskan tugas tersebut dan faktor -faktor yang membantu anda menemukan penyelesaian atas tugas yang sulit tersebut</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel qui ea dolore, reiciendis laborum quaerat, neque soluta maiores placeat iure praesentium itaque magnam? Laboriosam obcaecati expedita fugit, provident temporibus vitae!</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                <tr>
                                    <th class="text-left text-gray-400">Sudah Pernah Melakukan Pemeriksaan Psikologis Sebelumnya? Jika Iya, Untuk Keperluan Apa?</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel qui ea dolore, reiciendis laborum quaerat, neque soluta maiores placeat iure praesentium itaque magnam? Laboriosam obcaecati expedita fugit, provident temporibus vitae!</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const tabButtons = [document.getElementById('tab1'), document.getElementById('tab2'), document.getElementById('tab3')];
        const tabDetails = {
            'tab1': document.getElementById('tab1Detail'),
            'tab2': document.getElementById('tab2Detail'),
            'tab3': document.getElementById('tab3Detail')
        };

        function showTab(selectedTab) {
            tabButtons.forEach(button => button.classList.remove('selected'));
            Object.values(tabDetails).forEach(detail => detail.classList.add('hidden'));

            document.getElementById(selectedTab).classList.add('selected');
            tabDetails[selectedTab].classList.remove('hidden');
        }

        showTab('tab1');
    </script>
@endsection