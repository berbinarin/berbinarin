@extends('moduls.dashboard.layouts.main', [
    'title' => 'Konselling Psikolog Data',
    'active' => 'Dashboard',
    'modul' => 'Peer Conselor Data',
])

@section('content-dashboard')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="">
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Konseling Peer Counselor Data</p>
                        <p class= "text-disabled">Fitur ini digunakan untuk menampilkan data pendaftar konseling yang mendaftar melalui situs web Berbinar.</p>
                        <button onclick="toggleModal('modal-id')" type="button"
                            class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class=" font-medium leading-none text-dark">Tambah Data</p>
                        </button>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Nama Lengkap</th>
                                    <th style="text-align: center">Tanggal</th>
                                    <th style="text-align: center">Pukul</th>
                                    <th style="text-align: center">Metode</th>
                                    <th style="text-align: center">Nomor WhatsApp</th>
                                    <th style="text-align: center">Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @forelse ($PeerConsellorData as $key=>$item)
                                    <tr class="data-consume" >
                                        <td class="text-center"style="height: 40px">{{ $key+1 }}</td>
                                        <td>{{ $item->nama}}</td>
                                        <td>{{ $item->jadwal_tanggal }}</td>
                                        <td class="text-center">{{ $item->jadwal_pukul }}</td>
                                        <td style="text-transform: capitalize;">{{ $item->metode}}</td>
                                        <td class="text-center">
                                            <a href="https://wa.me/{{ $item->no_wa }}">{{ $item->no_wa }}</a>
                                        </td>
                                        <td><a href="/dashboard/admin/counselorDataDetails/{{ $item->id}}">View Details -></a></td>
                                    </tr>
                                    @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal-id">
        <div class="relative w-auto my-auto mx-auto" style="max-width: 62rem">
            <!--content-->
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Add Peer Counselor Data
                    </h3>
                    <button
                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                        onclick="toggleModal('modal-id')">
                        <span
                            class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                            ×
                        </span>
                    </button>
                </div>
                <!--body-->
                <div class="relative p-6 flex-auto">
                    <form action="{{ route('dashboard.add.PeerConsellorData') }}" class="flex flex-col gap-1" method="post">
                        @csrf
                        <div class="flex gap-1">
                            <div class="mb-1 pt-0 flex-1">
                                <label for="jadwal_tanggal" class="text-blueGray-600 text-base">Tanggal Konseling</label>
                                <input required name="jadwal_tanggal" id="jadwal_tanggal" value="{{ old('jadwal_tanggal', $konselling->jadwal_tanggal ?? '') }}" type="date" placeholder="" 
                                class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="hari" class="text-blueGray-600 text-base">Pilih Hari Konseling</label>
                                <select disabled name="hari" id="hari" style="height: 50px" class="appearance-none px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                    <option value="default">Pilih Hari</option>
                                    <option value="senin">Senin</option>
                                    <option value="selasa">Selasa</option>
                                    <option value="rabu">Rabu</option>
                                    <option value="kamis">Kamis</option>
                                    <option value="jumat">Jumat</option>
                                    <option value="sabtu">Sabtu</option>
                                    <option value="minggu">Minggu</option>
                                </select>
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="jadwal" class="text-blueGray-600 text-base">Pilih Jam Konseling</label>
                                @if(!is_null($konselling))
                                    <select name="jadwal_pukul" id="jadwal_pukul" style="height: 50px" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                        <option value="default" {{ $konselling->jadwal_pukul == 'default' ? 'selected' : '' }} selected disabled>Pilih Jam</option>
                                            @foreach ($senin as $jadwal)
                                                <option value="{{ $jadwal }}" {{ $konselling->jadwal_pukul == $jadwal ? 'selected' : '' }}>{{ $jadwal }}</option>
                                            @endforeach
                                    </select>
                                @else
                                    <select name="jadwal_pukul" id="jadwal_pukul" style="height: 50px" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                        <option value="default" selected disabled>Pilih Jam</option>
                                    </select>
                                @endif
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="metode" class="text-blueGray-600 text-base">Metode Konseling</label>
                                @if(!is_null($konselling))
                                    <select name="metode" id="metode" style="height: 50px" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                        <option value="default" {{ $konselling->metode == 'default' ? 'selected' : '' }} selected disabled>Pilih Metode Konseling</option>
                                        <option value="online" {{ $konselling->metode == 'online' ? 'selected' : '' }}>Online</option>
                                        <option value="offline" {{ $konselling->metode == 'offline' ? 'selected' : '' }}>Offline</option>
                                    </select>
                                @else
                                    <select name="metode" id="metode" style="height: 50px" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                        <option value="default" selected disabled >Pilih Metode Konseling</option>
                                        <option value="online">Online</option>
                                        <option value="offline">Offline</option>
                                    </select>
                                @endif
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 pt-0 flex-1">
                                <label for="nama" class="text-blueGray-600 text-base">Nama Lengkap</label>
                                <input required type="text" placeholder="Masukkan Nama" name="nama" value="{{ old('nama', $konselling->nama ?? '') }}" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="no_wa" class="text-blueGray-600 text-base">Nomor WhatsApp</label>
                                <input required type="number" placeholder="Masukkan Nomor WhatsApp" name="no_wa" value="{{ old('no_wa', $konselling->no_wa ?? '') }}"class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="email" class="text-blueGray-600 text-base">Email</label>
                                <input required type="email" placeholder="Masukkan Alamat Email" name="email" value="{{ old('email', $konselling->email ?? '') }}"class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="jenis_kelamin" class="text-blueGray-600 text-base">Jenis Kelamin</label>
                                @if(!is_null($konselling))
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                        <option value="default" {{ $konselling->metode == 'default' ? 'selected' : '' }} selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="laki-laki" {{ $konselling->metode == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="perempuan" {{ $konselling->metode == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                @else
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                        <option value="default" selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                @endif
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 pt-0 flex-1">
                                <label for="agama" class="text-blueGray-600 text-base">Agama</label>
                                <input required type="text" placeholder="Islam" name="agama" value="{{ old('agama', $konselling->agama ?? '') }}"class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="tempat_lahir" class="text-blueGray-600 text-base">Tempat Lahir</label>
                                <input required name="tempat_lahir" value="{{ old('tempat_lahir', $konselling->tempat_lahir ?? '') }}" type="text" placeholder="Masukkan Tempat Lahir"  class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="tanggal_lahir" class="text-blueGray-600 text-base">Tanggal Lahir</label>
                                <input required name="tanggal_lahir" value="{{ old('tanggal_lahir', $konselling->tanggal_Lahir ?? '') }}" type="date" placeholder="" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="suku" class="text-blueGray-600 text-base">Suku Bangsa</label>
                                <input required name="suku" value="{{ old('suku', $konselling->suku ?? '') }}" type="text" placeholder="Jawa" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 pt-0 flex-1">
                                <label for="status_pernikahan" class="text-blueGray-600 text-base">Status Pernikahan</label>
                                <input required name="status_pernikahan" value="{{ old('status_pernikahan', $konselling->status_pernikahan ?? '') }}" type="text" placeholder="Belum Menikah" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="alamat" class="text-blueGray-600 text-base">Alamat Domisili</label>
                                <input required name="alamat" value="{{ old('alamat', $konselling->alamat ?? '') }}" type="text" placeholder="Masukkan Alamat Domisili" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="posisi_anak" class="text-blueGray-600 text-base">Anak Ke-</label>
                                <input required name="posisi_anak" value="{{ old('posisi_anak', $konselling->posisi_anak ?? '') }}" type="text" placeholder="Anak ke-x dari x bersaudara" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="pendidikan" class="text-blueGray-600 text-base">Pendidikan Saat Ini</label>
                                <input required name="pendidikan" value="{{ old('pendidikan', $konselling->pendidikan ?? '') }}" type="text" placeholder="Contoh: Mahasiswa Universitas Airlangga (semester 2)" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 pt-0 flex-1">
                                <label for="riwayat_pekerjaan" class="text-blueGray-600 text-base">Riwayat Pekerjaan</label>
                                <input required name="riwayat_pekerjaan" value="{{ old('riwayat_pekerjaan', $konselling->riwayat_pekerjaan ?? '') }}" type="text" placeholder="Sales - PT. Berbinar Insightful Indonesia (2022)" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="hobi" class="text-blueGray-600 text-base">Hobi</label>
                                <input required name="hobi" value="{{ old('hobi', $konselling->hobi ?? '') }}" type="text" placeholder="Masukkan Hobi Anda" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="kegiatan_sosial" class="text-blueGray-600 text-base">Kegiatan Sosial Yang diikuti</label>
                                <input required name="kegiatan_sosial" value="{{ old('kegiatan_sosial', $konselling->kegiatan_sosial ?? '') }}" type="text" placeholder="Pengabdian Pemuda Masa Kini (2023)" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                        </div>
                        <div class="flex gap-1 mb-2">
                            <div class="pt-0 flex-1">
                                <label for="cerita" class="text-blueGray-600 text-base">Cerita Tentang Hal yang Ingin Dikonsultasikan</label>
                                <textarea required name="cerita" value="{{ old('cerita', $konselling->cerita ?? '') }}" placeholder="Tulislah hal yang ingin anda konsultasikan" class="p-4 x-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full"></textarea>
                            </div>
                        </div>
                        <!--footer-->
                        <div class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                            <button
                                class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button" onclick="toggleModal('modal-id')">
                                Close
                            </button>
                            <button type="submit" name="submit"
                                class="focus:ring-2  mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                                <p class="text-base font-semibold leading-none text-white">Simpan Data</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }

        document.addEventListener('DOMContentLoaded', function() {
            var selectedDate = new Date(document.getElementById('jadwal_tanggal').value);
            var dayIndex = selectedDate.getDay();
        
            if (dayIndex == 0) {
                document.getElementById('hari').selectedIndex = dayIndex + 7;
            } else {
                document.getElementById('hari').selectedIndex = dayIndex;
            }
        
            var jadwalSelect = document.getElementById('jadwal_pukul');
            jadwalSelect.innerHTML = '<option value="" selected disabled>Pilih Jam</option>';
            var selectedData = [];
        
            switch (dayIndex) {
                case 0: // Minggu
                    selectedData = @json($minggu);
                    break;
                case 1: // Senin
                    selectedData = @json($senin);
                    break;
                case 2: // Selasa
                    selectedData = @json($selasa);
                    break;
                case 3: // Rabu
                    selectedData = @json($rabu);
                    break;
                case 4: // Kamis
                    selectedData = @json($kamis);
                    break;
                case 5: // Jumat
                    selectedData = @json($jumat);
                    break;
                case 6: // Sabtu
                    selectedData = @json($sabtu);
                    break;
            }});
        
        document.getElementById('jadwal_tanggal').addEventListener('change', function() {
        var selectedDate = new Date(this.value);
        var dayIndex = selectedDate.getDay(); 

        if (dayIndex == 0){
            document.getElementById('hari').selectedIndex = dayIndex+7;
        } else{
            document.getElementById('hari').selectedIndex = dayIndex;
        }

        var jadwalSelect = document.getElementById('jadwal_pukul');
        jadwalSelect.innerHTML = '<option value="" selected disabled >Pilih Jam</option>';
        var selectedData = [];

        switch (dayIndex) {
            case 0: // Minggu
                selectedData = @json($minggu);
                break;
            case 1: // Senin
                selectedData = @json($senin);
                break;
            case 2: // Selasa
                selectedData = @json($selasa);
                break;
            case 3: // Rabu
                selectedData = @json($rabu);
                break;
            case 4: // Kamis
                selectedData = @json($kamis);
                break;
            case 5: // Jumat
                selectedData = @json($jumat);
                break;
            case 6: // Sabtu
                selectedData = @json($sabtu);
                break;
        }

        selectedData.forEach(function(jadwal) {
            var waktuArrayMulai = jadwal.pukul_mulai.split(':');
            var jamMenitMulai = waktuArrayMulai[0] + ':' + waktuArrayMulai[1];
            var waktuArraySelesai = jadwal.pukul_selesai.split(':');
            var jamMenitSelesai = waktuArraySelesai[0] + ':' + waktuArraySelesai[1];
            jadwalSelect.innerHTML += '<option value="' + jamMenitMulai + ' - ' + jamMenitSelesai + '">' + jamMenitMulai + ' - ' + jamMenitSelesai + '</option>';
        });
    });
    </script>
@endsection
