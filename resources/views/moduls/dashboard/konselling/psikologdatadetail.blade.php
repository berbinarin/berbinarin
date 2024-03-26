@extends('moduls.dashboard.layouts.main', [
    'title' => 'Konselling Psikolog Data',
    'active' => 'Dashboard',
    'modul' => 'Psikolog Data',
])

@section('content-dashboard')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="flex flex-row">
                        <div class="">
                            <a href="{{ route('dashboard.PsikologData') }}">
                                <i class='bx bx-arrow-back text-[35px] text-primary mr-6 mt-8 text-left'></i>
                            </a>
                        </div>
                        <div class="">
                            <p tabindex="0"
                                class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Konseling Psikolog Data</p>
                            <p class="text-disabled">Fitur ini digunakan untuk menampilkan data pendaftar konseling yang mendaftar melalui situs web Berbinar.</p>
                            <button onclick="toggleModal('modal-id')" type="button" style="margin-right: 0.5rem"
                                class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                                <p class=" font-medium leading-none text-dark">Edit Data</p>
                            </button>
                            <button onclick="toggleModal('modal-delete')" type="button"
                                class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                                <p class=" font-medium leading-none text-dark">Delete Data</p>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                    <div class="mt-4 overflow-x-auto">
                        <table class="table table-striped table-hover" style="overflow-x: scroll;">
                                <tr>
                                    <td>Nama </td>
                                    <td>{{ $PsikologDataDetails[0]->nama}}</td>
                                </tr>  
                                <tr>
                                    <td>Jadwal Tanggal</td>
                                    <td>{{ $PsikologDataDetails[0]->jadwal_tanggal}}</td>
                                </tr>  
                                <tr>
                                    <td>Jadwal Pukul</td>
                                    <td>{{ $PsikologDataDetails[0]->jadwal_pukul}}</td>
                                </tr>  
                                <tr>
                                    <td>Metode</td>
                                    <td style="text-transform: capitalize">{{ $PsikologDataDetails[0]->metode}}</td>
                                </tr>  
                                <tr>
                                    <td>Nomor WhatsApp</td>
                                    <td><a href="https://wa.me/{{ $PsikologDataDetails[0]->no_wa }}">{{ $PsikologDataDetails[0]->no_wa }}</a></td>
                                </tr>     
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $PsikologDataDetails[0]->email }}</td>
                                </tr>  
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>{{ $PsikologDataDetails[0]->jenis_kelamin }}</td>
                                </tr>   
                                <tr>
                                    <td>Agama</td>
                                    <td>{{ $PsikologDataDetails[0]->agama }}</td>
                                </tr> 
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>{{ $PsikologDataDetails[0]->tempat_lahir }}</td>
                                </tr> 
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>{{ $PsikologDataDetails[0]->tanggal_Lahir }}</td>
                                </tr> 
                                <tr>
                                    <td>Suku</td>
                                    <td>{{ $PsikologDataDetails[0]->suku }}</td>
                                </tr>   
                                <tr>
                                    <td>Status Pernikahan</td>
                                    <td>{{ $PsikologDataDetails[0]->status_pernikahan }}</td>
                                </tr>  
                                <tr>
                                    <td>Alamat</td>
                                    <td>{{ $PsikologDataDetails[0]->alamat }}</td>
                                </tr>  
                                <tr>
                                    <td>Posisi Anak</td>
                                    <td>{{ $PsikologDataDetails[0]->posisi_anak }}</td>
                                </tr>  
                                <tr>
                                    <td>Pendidikan</td>
                                    <td>{{ $PsikologDataDetails[0]->pendidikan }}</td>
                                </tr> 
                                <tr>
                                    <td>Riwayat Pekerjaan</td>
                                    <td>{{ $PsikologDataDetails[0]->riwayat_pekerjaan }}</td>
                                </tr> 
                                <tr>
                                    <td>Hobi</td>
                                    <td>{{ $PsikologDataDetails[0]->hobi }}</td>
                                </tr> 
                                <tr>
                                    <td>Kegiatan Sosial</td>
                                    <td>{{ $PsikologDataDetails[0]->kegiatan_sosial }}</td>
                                </tr> 
                                <tr>
                                    <td>Hal yang Ingin Diceritakan</td>
                                    <td>{{ $PsikologDataDetails[0]->cerita }}</td>
                                </tr>
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
                        Edit Psikolog Data
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
                    <form action="{{ route('dashboard.edit.PsikologDataDetails', $PsikologDataDetails[0]->id) }}" class="flex flex-col gap-1" method="post">
                        @csrf
                        @method('PUT')
                        <div class="flex gap-1">
                            <div class="mb-1 pt-0 flex-1">
                                <label for="jadwal_tanggal" class="text-blueGray-600 text-base">Tanggal Konseling</label>
                                <input required name="jadwal_tanggal" id="jadwal_tanggal" value="{{ $PsikologDataDetails[0]->jadwal_tanggal }}" type="date" placeholder="" 
                                class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="hari" class="text-blueGray-600 text-base">Pilih Hari Konseling</label>
                                <select disabled name="hari" id="hari" style="height: 50px" class="appearance-none px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                    <option value="{{ $PsikologDataDetails[0]->hari }}">Pilih Hari</option>
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
                                <input type="text" name="jadwal_pukul" id="jadwal_pukul" style="height: 50px" value=" {{ $PsikologDataDetails[0]->jadwal_pukul }}" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="metode" class="text-blueGray-600 text-base">Metode Konseling</label>
                                    <select name="metode" id="metode" style="height: 50px" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                        <option value="default" {{ $PsikologDataDetails[0]->metode == 'default' ? 'selected' : '' }} selected disabled>Pilih Metode Konseling</option>
                                        <option value="online" {{ $PsikologDataDetails[0]->metode == 'online' ? 'selected' : '' }}>Online</option>
                                        <option value="offline" {{ $PsikologDataDetails[0]->metode == 'offline' ? 'selected' : '' }}>Offline</option>
                                    </select>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 pt-0 flex-1">
                                <label for="nama" class="text-blueGray-600 text-base">Nama Lengkap</label>
                                <input required type="text" placeholder="Masukkan Nama" name="nama" value="{{ $PsikologDataDetails[0]->nama }}" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="no_wa" class="text-blueGray-600 text-base">Nomor WhatsApp</label>
                                <input required type="number" placeholder="Masukkan Nomor WhatsApp" name="no_wa" value="{{ $PsikologDataDetails[0]->no_wa }}"class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="email" class="text-blueGray-600 text-base">Email</label>
                                <input required type="email" placeholder="Masukkan Alamat Email" name="email" value="{{ $PsikologDataDetails[0]->email }}"class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="jenis_kelamin" class="text-blueGray-600 text-base">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                        <option value="default" {{ $PsikologDataDetails[0]->jenis_kelamin == 'default' ? 'selected' : '' }} selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="laki-laki" {{ $PsikologDataDetails[0]->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="perempuan" {{ $PsikologDataDetails[0]->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 pt-0 flex-1">
                                <label for="agama" class="text-blueGray-600 text-base">Agama</label>
                                <input required type="text" placeholder="Islam" name="agama" value="{{ $PsikologDataDetails[0]->agama }}"class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="tempat_lahir" class="text-blueGray-600 text-base">Tempat Lahir</label>
                                <input required name="tempat_lahir" value="{{ $PsikologDataDetails[0]->tempat_lahir }}" type="text" placeholder="Masukkan Tempat Lahir"  class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="tanggal_lahir" class="text-blueGray-600 text-base">Tanggal Lahir</label>
                                <input required name="tanggal_lahir" value="{{ $PsikologDataDetails[0]->tanggal_Lahir }}" type="date" placeholder="" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="suku" class="text-blueGray-600 text-base">Suku Bangsa</label>
                                <input required name="suku" value="{{ $PsikologDataDetails[0]->suku }}" type="text" placeholder="Jawa" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 pt-0 flex-1">
                                <label for="status_pernikahan" class="text-blueGray-600 text-base">Status Pernikahan</label>
                                <input required name="status_pernikahan" value="{{ $PsikologDataDetails[0]->status_pernikahan }}" type="text" placeholder="Belum Menikah" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="alamat" class="text-blueGray-600 text-base">Alamat Domisili</label>
                                <input required name="alamat" value="{{ $PsikologDataDetails[0]->alamat }}" type="text" placeholder="Masukkan Alamat Domisili" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="posisi_anak" class="text-blueGray-600 text-base">Anak Ke-</label>
                                <input required name="posisi_anak" value="{{ $PsikologDataDetails[0]->posisi_anak }}" type="text" placeholder="Anak ke-x dari x bersaudara" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="pendidikan" class="text-blueGray-600 text-base">Pendidikan Saat Ini</label>
                                <input required name="pendidikan" value="{{ $PsikologDataDetails[0]->pendidikan }}" type="text" placeholder="Contoh: Mahasiswa Universitas Airlangga (semester 2)" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 pt-0 flex-1">
                                <label for="riwayat_pekerjaan" class="text-blueGray-600 text-base">Riwayat Pekerjaan</label>
                                <input required name="riwayat_pekerjaan" value="{{ $PsikologDataDetails[0]->riwayat_pekerjaan }}" type="text" placeholder="Sales - PT. Berbinar Insightful Indonesia (2022)" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="hobi" class="text-blueGray-600 text-base">Hobi</label>
                                <input required name="hobi" value="{{ $PsikologDataDetails[0]->hobi }}" type="text" placeholder="Masukkan Hobi Anda" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                            <div class="mb-1 pt-0 flex-1">
                                <label for="kegiatan_sosial" class="text-blueGray-600 text-base">Kegiatan Sosial Yang diikuti</label>
                                <input required name="kegiatan_sosial" value="{{ $PsikologDataDetails[0]->kegiatan_sosial }}" type="text" placeholder="Pengabdian Pemuda Masa Kini (2023)" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                            </div>
                        </div>
                        <div class="flex gap-1 mb-2">
                            <div class="pt-0 flex-1">
                                <label for="cerita" class="text-blueGray-600 text-base">Cerita Tentang Hal yang Ingin Dikonsultasikan</label>
                                <textarea required name="cerita" value="{{ $PsikologDataDetails[0]->cerita }}" placeholder="Tulislah hal yang ingin anda konsultasikan" class="p-4 x-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">{{ $PsikologDataDetails[0]->cerita }}</textarea>
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
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-delete">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
            <!--content-->
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Delete Psikolog Data
                    </h3>
                    <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-delete')">
                        <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">×</span>
                    </button>
                </div>
                <!--body-->
                <div class="relative p-6 flex-auto">
                    <form action="{{ route('dashboard.delete.PsikologDataDetails', $PsikologDataDetails[0]->id) }}"  method="get">
                        @csrf
                        @method("DELETE")
                        <input type="hidden" name="id">
                        <p class="mb-6">Are you sure want to delete a psikolog data for {{ $PsikologDataDetails[0]->nama }} appointment in {{ $PsikologDataDetails[0]->jadwal_tanggal }} on {{ $PsikologDataDetails[0]->jadwal_pukul }} ?</p>
                        <!--footer-->
                        <div class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                            <button class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-delete')">Close</button>
                            <button type="submit" name="submit"class="focus:ring-2  mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                                <p class="text-base font-semibold leading-none text-white">Delete Data</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-delete-backdrop"></div>
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
        });

        document.getElementById('jadwal_tanggal').addEventListener('change', function() {
        var selectedDate = new Date(this.value);
        var dayIndex = selectedDate.getDay(); 

        if (dayIndex == 0){
            document.getElementById('hari').selectedIndex = dayIndex+7;
        } else{
            document.getElementById('hari').selectedIndex = dayIndex;
        }
        });
    </script>
@endsection
