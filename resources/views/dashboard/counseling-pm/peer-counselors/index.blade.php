@extends(
    "dashboard.layouts.app",
    [
        "title" => "Konselling Psikolog Data",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="">
                        <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Konseling Peer Counselor Data</p>
                        <p class="text-disabled">Fitur ini digunakan untuk menampilkan data pendaftar konseling yang mendaftar melalui situs web Berbinar.</p>
                        <button onclick="toggleModal('modal-id')" type="button" class="mt-8 inline-flex items-start justify-start rounded bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Tambah Data</p>
                        </button>
                    </div>
                </div>
                <div class="rounded-md bg-white px-4 py-4 md:px-8 md:py-7 xl:px-10">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Nama Lengkap</th>
                                    <th style="text-align: center">Tanggal</th>
                                    <th style="text-align: center">Pukul</th>
                                    <th style="text-align: center">Metode</th>
                                    <th style="text-align: center">Daerah</th>
                                    <th style="text-align: center">Harga</th>
                                    <th style="text-align: center">Nomor WhatsApp</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($PeerConsellorData as $key => $item)
                                    <tr class="data-consume">
                                        <td class="text-center" style="height: 40px">{{ $key + 1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->jadwal_tanggal)->format("d-m-Y") }}</td>
                                        <td class="text-center">{{ $item->jadwal_pukul }}</td>
                                        <td style="text-transform: capitalize">{{ $item->metode }}</td>
                                        <td style="text-transform: capitalize">{{ $item->daerah }}</td>
                                        <td style="text-transform: capitalize">Rp. {{ $item->harga }}</td>
                                        <td class="text-center">
                                            <a href="https://wa.me/{{ $item->no_wa }}">{{ $item->no_wa }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route("dashboard.peer-counselors.show", $item->id) }}" class="inline-flex items-start justify-start rounded bg-gray-500 p-3 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                <i class="bx bx-show text-white"></i>
                                            </a>
                                        </td>
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
    <div class="fixed inset-0 z-50 hidden items-center justify-center overflow-y-auto overflow-x-hidden outline-none focus:outline-none" id="modal-id">
        <div class="relative mx-auto my-auto w-auto" style="max-width: 62rem">
            <!--content-->
            <div class="relative flex w-full flex-col rounded-lg border-0 bg-white shadow-lg outline-none focus:outline-none">
                <!--header-->
                <div class="border-blueGray-200 flex items-start justify-between rounded-t border-b border-solid p-5">
                    <h3 class="text-3xl font-semibold">Add Peer Counselor Data</h3>
                    <button class="float-right ml-auto border-0 bg-transparent p-1 text-3xl font-semibold leading-none text-black opacity-5 outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                        <span class="block h-6 w-6 bg-transparent text-2xl text-black opacity-5 outline-none focus:outline-none">×</span>
                    </button>
                </div>
                <!--body-->
                <div class="relative flex-auto p-6">
                    <form action="{{ route("dashboard.peer-counselors.store") }}" class="flex flex-col gap-1" method="post">
                        @csrf
                        <div class="flex gap-1">
                            <div class="mb-1 flex-1 pt-0">
                                <label for="jadwal_tanggal" class="text-blueGray-600 text-base">Tanggal Konseling</label>
                                <input required name="jadwal_tanggal" id="jadwal_tanggal" value="{{ old("jadwal_tanggal", $konselling->jadwal_tanggal ?? "") }}" type="date" placeholder="" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="hari" class="text-blueGray-600 text-base">Pilih Hari Konseling</label>
                                <select disabled name="hari" id="hari" style="height: 50px" class="placeholder-blueGray-300 text-blueGray-600 relative w-full appearance-none rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
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
                            <div class="mb-1 flex-1 pt-0">
                                <label for="jadwal" class="text-blueGray-600 text-base">Pilih Jam Konseling</label>
                                @if (! is_null($konselling))
                                    <select name="jadwal_pukul" id="jadwal_pukul" style="height: 50px" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                        <option value="default" {{ $konselling->jadwal_pukul == "default" ? "selected" : "" }} selected disabled>Pilih Jam</option>
                                        @foreach ($senin as $jadwal)
                                            <option value="{{ $jadwal }}" {{ $konselling->jadwal_pukul == $jadwal ? "selected" : "" }}>{{ $jadwal }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <select name="jadwal_pukul" id="jadwal_pukul" style="height: 50px" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                        <option value="default" selected disabled>Pilih Jam</option>
                                    </select>
                                @endif
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="metode" class="text-blueGray-600 text-base">Metode Konseling</label>

                                @if (! is_null($konselling))
                                    <select name="metode" id="metode" style="height: 50px" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                        <option value="default" {{ $konselling->metode == "default" ? "selected" : "" }} selected disabled>Pilih Metode Konseling</option>
                                        <option value="online" {{ $konselling->metode == "online" ? "selected" : "" }}>Online</option>
                                        <option value="offline" {{ $konselling->metode == "offline" ? "selected" : "" }}>Offline</option>
                                    </select>
                                @else
                                    <select name="metode" id="metode" style="height: 50px" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                        <option value="default" selected disabled>Pilih Metode Konseling</option>
                                        <option value="online">Online</option>
                                        <option value="offline">Offline</option>
                                    </select>
                                @endif
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 flex-1 pt-0">
                                <label for="daerah" class="text-blueGray-600 text-base">Daerah Konseling</label>
                                <select name="daerah" id="daerah" style="height: 50px" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                    <option value="default" selected disabled>Pilih Daerah</option>
                                    <option value="Online" {{ old("daerah", $konselling->daerah ?? "") == "Online" ? "selected" : "" }}>Online</option>
                                    <option value="Bekasi" {{ old("daerah", $konselling->daerah ?? "") == "Bekasi" ? "selected" : "" }}>Bekasi</option>
                                    <option value="Tangerang Selatan" {{ old("daerah", $konselling->daerah ?? "") == "Tangerang Selatan" ? "selected" : "" }}>Tangerang Selatan</option>
                                    <option value="Padang" {{ old("daerah", $konselling->daerah ?? "") == "Padang" ? "selected" : "" }}>Padang</option>
                                </select>
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="harga" class="text-blueGray-600 text-base">Harga Konseling</label>
                                <input required name="harga" id="harga" type="number" placeholder="Masukkan Harga" value="{{ old("harga", $konselling->harga ?? "") }}" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="nama" class="text-blueGray-600 text-base">Nama Lengkap</label>
                                <input required type="text" placeholder="Masukkan Nama" name="nama" value="{{ old("nama", $konselling->nama ?? "") }}" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 flex-1 pt-0">
                                <label for="no_wa" class="text-blueGray-600 text-base">Nomor WhatsApp</label>
                                <input required type="number" placeholder="Masukkan Nomor WhatsApp" name="no_wa" value="{{ old("no_wa", $konselling->no_wa ?? "") }}" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="email" class="text-blueGray-600 text-base">Email</label>
                                <input required type="email" placeholder="Masukkan Alamat Email" name="email" value="{{ old("email", $konselling->email ?? "") }}" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="jenis_kelamin" class="text-blueGray-600 text-base">Jenis Kelamin</label>

                                @if (! is_null($konselling))
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                        <option value="default" {{ $konselling->jenis_kelamin == "default" ? "selected" : "" }} selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="laki-laki" {{ $konselling->jenis_kelamin == "Laki-laki" ? "selected" : "" }}>Laki-laki</option>
                                        <option value="perempuan" {{ $konselling->jenis_kelamin == "Perempuan" ? "selected" : "" }}>Perempuan</option>
                                    </select>
                                @else
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                        <option value="default" selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                @endif
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 flex-1 pt-0">
                                <label for="agama" class="text-blueGray-600 text-base">Agama</label>

                                @if (! is_null($konselling))
                                    <select name="agama" id="agama" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                        <option value="default" {{ $konselling->agama == "default" ? "selected" : "" }} selected disabled>Pilih Agama</option>
                                        <option value="Islam" {{ $konselling->agama == "Islam" ? "selected" : "" }}>Islam</option>
                                        <option value="Kristen" {{ $konselling->agama == "Kristen" ? "selected" : "" }}>Kristen</option>
                                        <option value="Katolik" {{ $konselling->agama == "Katolik" ? "selected" : "" }}>Katolik</option>
                                        <option value="Hindu" {{ $konselling->agama == "Hindu" ? "selected" : "" }}>Hindu</option>
                                        <option value="Budha" {{ $konselling->agama == "Budha" ? "selected" : "" }}>Budha</option>
                                        <option value="Khonghucu" {{ $konselling->agama == "Khonghucu" ? "selected" : "" }}>Khonghucu</option>
                                    </select>
                                @else
                                    <select name="agama" id="agama" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                        <option value="default" selected disabled>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Khonghucu">Khonghucu</option>
                                    </select>
                                @endif
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="tempat_lahir" class="text-blueGray-600 text-base">Tempat Lahir</label>
                                <input required name="tempat_lahir" value="{{ old("tempat_lahir", $konselling->tempat_lahir ?? "") }}" type="text" placeholder="Masukkan Tempat Lahir" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="tanggal_lahir" class="text-blueGray-600 text-base">Tanggal Lahir</label>
                                <input required name="tanggal_lahir" value="{{ old("tanggal_lahir", $konselling->tanggal_Lahir ?? "") }}" type="date" placeholder="" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="suku" class="text-blueGray-600 text-base">Suku Bangsa</label>
                                <input required name="suku" value="{{ old("suku", $konselling->suku ?? "") }}" type="text" placeholder="Jawa" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 flex-1 pt-0">
                                <label for="status_pernikahan" class="text-blueGray-600 text-base">Status Pernikahan</label>

                                @if (! is_null($konselling))
                                    <select name="status_pernikahan" id="status_pernikahan" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                        <option value="default" {{ $konselling->status_pernikahan == "default" ? "selected" : "" }} selected disabled>Pilih Status Pernikahan</option>
                                        <option value="Belum Menikah" {{ $konselling->status_pernikahan == "Belum Menikah" ? "selected" : "" }}>Belum Menikah</option>
                                        <option value="Sudah Menikah" {{ $konselling->status_pernikahan == "Sudah Menikah" ? "selected" : "" }}>Sudah Menikah</option>
                                    </select>
                                @else
                                    <select name="status_pernikahan" id="status_pernikahan" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                        <option value="default" selected disabled>Pilih Status Pernikahan</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                        <option value="Sudah Menikah">Sudah Menikah</option>
                                    </select>
                                @endif
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="alamat" class="text-blueGray-600 text-base">Alamat Domisili</label>
                                <input required name="alamat" value="{{ old("alamat", $konselling->alamat ?? "") }}" type="text" placeholder="Masukkan Alamat Domisili" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="posisi_anak" class="text-blueGray-600 text-base">Anak Ke-</label>
                                <input required name="posisi_anak" value="{{ old("posisi_anak", $konselling->posisi_anak ?? "") }}" type="text" placeholder="Anak ke-x dari x bersaudara" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="pendidikan" class="text-blueGray-600 text-base">Pendidikan Saat Ini</label>
                                <input required name="pendidikan" value="{{ old("pendidikan", $konselling->pendidikan ?? "") }}" type="text" placeholder="Contoh: Mahasiswa Universitas Airlangga (semester 2)" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 flex-1 pt-0">
                                <label for="riwayat_pekerjaan" class="text-blueGray-600 text-base">Riwayat Pekerjaan</label>
                                <input required name="riwayat_pekerjaan" value="{{ old("riwayat_pekerjaan", $konselling->riwayat_pekerjaan ?? "") }}" type="text" placeholder="Sales - PT. Berbinar Insightful Indonesia (2022)" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="hobi" class="text-blueGray-600 text-base">Hobi</label>
                                <input required name="hobi" value="{{ old("hobi", $konselling->hobi ?? "") }}" type="text" placeholder="Masukkan Hobi Anda" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                            </div>
                            <div class="mb-1 flex-1 pt-0">
                                <label for="kegiatan_sosial" class="text-blueGray-600 text-base">Kegiatan Sosial Yang diikuti</label>
                                <input required name="kegiatan_sosial" value="{{ old("kegiatan_sosial", $konselling->kegiatan_sosial ?? "") }}" type="text" placeholder="Pengabdian Pemuda Masa Kini (2023)" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                            </div>
                        </div>
                        <div class="mb-2 flex gap-1">
                            <div class="flex-1 pt-0">
                                <label for="cerita" class="text-blueGray-600 text-base">Cerita Tentang Hal yang Ingin Dikonsultasikan</label>
                                <textarea required name="cerita" value="{{ old("cerita", $konselling->cerita ?? "") }}" placeholder="Tulislah hal yang ingin anda konsultasikan" class="x-3 placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white p-4 py-3 text-base shadow outline-none focus:outline-none focus:ring"></textarea>
                            </div>
                        </div>
                        <!--footer-->
                        <div class="border-blueGray-200 flex items-center justify-end rounded-b border-t border-solid pt-3">
                            <button class="background-transparent mb-1 mr-1 px-6 py-2 text-base font-bold text-gray-500 outline-none transition-all duration-150 ease-linear focus:outline-none" type="button" onclick="toggleModal('modal-id')">Close</button>
                            <button type="submit" name="submit" class="mt-4 inline-flex items-start justify-start rounded bg-primary px-6 py-3 hover:bg-primary focus:outline-none focus:ring-2 sm:mt-0">
                                <p class="text-base font-semibold leading-none text-white">Simpan Data</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed inset-0 z-40 hidden bg-black opacity-25" id="modal-id-backdrop"></div>
    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle('hidden');
            document.getElementById(modalID + '-backdrop').classList.toggle('hidden');
            document.getElementById(modalID).classList.toggle('flex');
            document.getElementById(modalID + '-backdrop').classList.toggle('flex');
        }

        document.addEventListener('DOMContentLoaded', function () {
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
            }
        });

        document.getElementById('jadwal_tanggal').addEventListener('change', function () {
            var selectedDate = new Date(this.value);
            var dayIndex = selectedDate.getDay();

            if (dayIndex == 0) {
                document.getElementById('hari').selectedIndex = dayIndex + 7;
            } else {
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

            selectedData.forEach(function (jadwal) {
                var waktuArrayMulai = jadwal.pukul_mulai.split(':');
                var jamMenitMulai = waktuArrayMulai[0] + ':' + waktuArrayMulai[1];
                var waktuArraySelesai = jadwal.pukul_selesai.split(':');
                var jamMenitSelesai = waktuArraySelesai[0] + ':' + waktuArraySelesai[1];
                jadwalSelect.innerHTML += '<option value="' + jamMenitMulai + ' - ' + jamMenitSelesai + '">' + jamMenitMulai + ' - ' + jamMenitSelesai + '</option>';
            });
        });
    </script>
@endsection
