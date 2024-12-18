@extends('moduls.dashboard.layouts.main', [
    'title' => 'Table Biodata Individual',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid Individual',
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
                        Detail Jawaban Test Biodata Individual</p>
                    <div class="-ml-3 sm:ml-0">
                        <a href="{{ route('dashboard.psikotespaid.biodataindividual') }}">
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
                                    <td class="font-medium">{{ $user_individual->identity->fullname }}</td>
                                    <td class="font-medium">{{ $user_individual->identity->no_ktp }}</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-gray-400">Tempat Lahir</th>
                                    <th class="text-left text-gray-400">Tanggal Lahir</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">{{ $user_individual->identity->place_of_birth }}</td>
                                    <td class="font-medium">{{ $user_individual->identity->date_of_birth }}</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-gray-400">Jenis Kelamin</th>
                                    <th class="text-left text-gray-400">Status Pernikahan</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">{{ $user_individual->identity->gender }}</td>
                                    <td class="font-medium">{{ $user_individual->identity->marriage_status }}</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-gray-400">Telepon/HP</th>
                                    <th class="text-left text-gray-400">Alamat</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">{{ $user_individual->identity->no_hp }}</td>
                                    <td class="font-medium">{{ $user_individual->identity->address }}</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-gray-400">Alamat Email</th>
                                    <th class="text-left text-gray-400">Unit Kerja</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">{{ $user_individual->identity->email }}</td>
                                    <td class="font-medium">{{ $user_individual->identity->work_unit }}</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                <tr>
                                    <th class="text-left text-gray-400">Jabatan Saat Ini</th>
                                    <th class="text-left text-gray-400">Jabatan yang Diinginkan</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">{{ $user_individual->identity->current_position }}</td>
                                    <td class="font-medium">{{ $user_individual->identity->desired_position }}</td>
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
                                    <?php $sd = $educations->where('level_education_id', 2)->first()  ?>
                                    <td class="font-medium">{{ $sd->school_name ?? '-' }}</td>
                                    <td class="font-medium">{{ $sd->year ?? '-' }}</td>
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
                                    <?php $smp = $educations->where('level_education_id', 3)->first()  ?>
                                    <td class="font-medium">{{ $smp->school_name ?? '-' }}</td>
                                    <td class="font-medium">{{ $smp->year ?? '-' }}</td>
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
                                    <?php $sma = $educations->where('level_education_id', 4)->first()  ?>
                                    <td class="font-medium">{{ $sma->school_name ?? '-' }}</td>
                                    <td class="font-medium">{{ $sma->major ?? '-' }}</td>
                                    <td class="font-medium">{{ $sma->year ?? '-' }}</td>
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
                                    <?php $d3 = $educations->where('level_education_id', 5)->first()  ?>
                                    <td class="font-medium">{{ $d3->school_name ?? '-' }}</td>
                                    <td class="font-medium">{{ $d3->major ?? '-' }}</td>
                                    <td class="font-medium">{{ $d3->year ?? '-' }}</td>
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
                                    <?php $s1 = $educations->where('level_education_id', 6)->first()  ?>
                                    <td class="font-medium">{{ $s1->school_name ?? '-' }}</td>
                                    <td class="font-medium">{{ $s1->major ?? '-' }}</td>
                                    <td class="font-medium">{{ $s1->year ?? '-' }}</td>
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
                                    <?php $s2 = $educations->where('level_education_id', 7)->first()  ?>
                                    <td class="font-medium">{{ $s2->school_name ?? '-' }}</td>
                                    <td class="font-medium">{{ $s2->major ?? '-' }}</td>
                                    <td class="font-medium">{{ $s2->year ?? '-' }}</td>
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
                                    <?php $s3 = $educations->where('level_education_id', 8)->first()  ?>
                                    <td class="font-medium">{{ $s3->school_name ?? '-' }}</td>
                                    <td class="font-medium">{{ $s3->major ?? '-' }}</td>
                                    <td class="font-medium">{{ $s3->year ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                
                    <div id="tab3Detail" class="overflow-y-scroll" style="height: 90%">
                        <h2 class="font-bold text-3xl text-primary mb-6">Pertanyaan Esai</h2>
                        <table class="w-full text-lg">
                            <tbody>
                                @foreach ($answers as $item)    
                                <tr>
                                    <th class="text-left text-gray-400">{{ $item->question_essay->question }}</th>
                                </tr>
                                <tr class="mb-4">
                                    <td class="font-medium">{{ $item->answer}}</td>
                                </tr>
                                <tr><td colspan="2" class="h-6"></td></tr>
                                @endforeach
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