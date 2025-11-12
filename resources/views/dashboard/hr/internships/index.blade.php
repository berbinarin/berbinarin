@extends(
    "dashboard.layouts.app",
    [
        "title" => "Internship",
    ]
)

@section("content")
    <style>
        .w-80 {
            width: 20rem; /* Adjust as needed for your specific requirements */
        }
        .sticky-col {
            position: -webkit-sticky;
            position: sticky;
            background-color: white;
            z-index: 1;
        }
        .sticky-col-1 {
            left: 0;
            width: 50px; /* Adjust width if necessary */
        }
        .sticky-col-2 {
            left: 50px; /* Adjust this value to match the width of the first column */
        }
    </style>

    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Pendaftar Magang Berbinar</p>
                <p class="w-full text-gray-600 md:w-full">Fitur ini digunakan untuk melakukan manajemen pendaftar yang telah melakukan pendaftaran magang di situs Berbinar Karir.</p>
            </div>
            <div class="rounded-md bg-white mb-7 px-4 py-4 md:px-8 md:py-7 xl:px-10">
                <div class="mb-4 mt-4 overflow-x-auto">
                    <table id="example" class="min-w-full leading-normal">
                        <thead>
                            <tr class="mt-4">
                                <th class="sticky-col sticky-col-1 bg-white px-6 py-3 text-left text-sm font-bold leading-4 tracking-wider text-black">No</th>
                                <th class="sticky-col sticky-col-2 bg-white px-6 py-3 text-left text-sm font-bold leading-4 tracking-wider text-black">Nama Lengkap</th>
                                <th class="bg-white px-6 py-3 text-left text-sm font-bold leading-4 tracking-wider text-black">Tautan WA</th>
                                <th class="bg-white px-6 py-3 text-left text-sm font-bold leading-4 tracking-wider text-black">Tanggal Pendaftaran</th>
                                <th class="bg-white px-6 py-3 text-left text-sm font-bold leading-4 tracking-wider text-black">Nama Posisi</th>
                                <th class="w-80 bg-white px-6 py-3 text-left text-sm font-bold leading-4 tracking-wider text-black">Tidak Dapat Diproses</th>
                                <th class="w-80 bg-white px-6 py-3 text-left text-sm font-bold leading-4 tracking-wider text-black">Catatan</th>
                                <th class="w-80 bg-white px-6 py-3 text-left text-sm font-bold leading-4 tracking-wider text-black">Progres</th>
                                <th class="bg-white px-6 py-3 text-left text-sm font-bold leading-4 tracking-wider text-black">Keterangan</th>
                                <th class="bg-white px-6 py-3 text-left text-sm font-bold leading-4 tracking-wider text-black">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Internship as $item)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="whitespace-no-wrap sticky-col sticky-col-1 px-6 py-4">{{ $loop->iteration }}</td>
                                    <td class="whitespace-no-wrap sticky-col sticky-col-2 px-6 py-4">{{ $item->nama_lengkap }}</td>
                                    <td class="whitespace-no-wrap px-6 py-4 text-blue-500"><a href="https://wa.me/{{ $item->no_whatsapp }}">{{ $item->no_whatsapp }}</a></td>
                                    <td class="whitespace-no-wrap px-6 py-4">{{ $item->created_at }}</td>
                                    <td class="whitespace-no-wrap px-6 py-4">{{ $item->hiringPosition->name ?? "Posisi tidak ditemukan / dihapus" }}</td>
                                    <td class="whitespace-no-wrap w-60 px-6 py-4">
                                        <select name="tidak_dapat_diproses" class="statusSelect form-select w-60" data-id="{{ $item->id }}" nama-kolom="status_tidak_dapat_diproses">
                                            <option value="Pilih" @if($item->status_tidak_dapat_diproses == "Pilih") selected @endif>Pilih</option>
                                            <option value="Mengundurkan diri" @if($item->status_tidak_dapat_diproses == "Mengundurkan diri") selected @endif>Mengundurkan diri</option>
                                            <option value="Menolak wawancara" @if($item->status_tidak_dapat_diproses == "Menolak wawancara") selected @endif>Menolak wawancara</option>
                                            <option value="Tidak membalas chat undangan" @if($item->status_tidak_dapat_diproses == "Tidak membalas chat undangan") selected @endif>Tidak membalas chat undangan</option>
                                            <option value="Tidak bisa dihubungi" @if($item->status_tidak_dapat_diproses == "Tidak bisa dihubungi") selected @endif>Tidak bisa dihubungi</option>
                                        </select>
                                    </td>
                                    <td class="whitespace-no-wrap w-80 px-6 py-4">
                                        <select name="catatan" class="statusSelect form-select w-60" data-id="{{ $item->id }}" nama-kolom="status_catatan">
                                            <option value="Pilih" @if($item->status_catatan == "Pilih") selected @endif>Pilih</option>
                                            <option value="CV tidak bisa dibuka" @if($item->status_catatan == "CV tidak bisa dibuka") selected @endif>CV tidak bisa dibuka</option>
                                            <option value="Jurusan tidak sesuai" @if($item->status_catatan == "Jurusan tidak sesuai") selected @endif>Jurusan tidak sesuai</option>
                                            <option value="Tidak Follow sosmed Berbinar" @if($item->status_catatan == "Tidak Follow sosmed Berbinar") selected @endif>Tidak Follow sosmed Berbinar</option>
                                            <option value="Akun sosmed diprivat" @if($item->status_catatan == "Akun sosmed diprivat") selected @endif>Akun sosmed diprivat</option>
                                            <option value="Tidak ada portofolio" @if($item->status_catatan == "Tidak ada portofolio") selected @endif>Tidak ada portofolio</option>
                                            <option value="Nomor WA tidak aktif" @if($item->status_catatan == "Nomor WA tidak aktif") selected @endif>Nomor WA tidak aktif</option>
                                            <option value="Data tidak sinkron" @if($item->status_catatan == "Data tidak sinkron") selected @endif>Data tidak sinkron</option>
                                            <option value="Tidak direkomendasikan" @if($item->status_catatan == "Tidak direkomendasikan") selected @endif>Tidak direkomendasikan</option>
                                        </select>
                                    </td>
                                    <td class="whitespace-no-wrap w-80 px-6 py-4">
                                        <select name="progress" class="statusSelect form-select w-60" data-id="{{ $item->id }}" nama-kolom="status_progress">
                                            <option value="Pilih" @if($item->status_progress == "Pilih") selected @endif>Pilih</option>
                                            <option value="Screening" @if($item->status_progress == "Screening") selected @endif>Screening</option>
                                            <option value="Sudah dichat" @if($item->status_progress == "Sudah dichat") selected @endif>Sudah dichat</option>
                                            <option value="Sudah diwawancara" @if($item->status_progress == "Sudah diwawancara") selected @endif>Sudah diwawancara</option>
                                            <option value="Tidak lolos wawancara" @if($item->status_progress == "Tidak lolos wawancara") selected @endif>Tidak lolos wawancara</option>
                                            <option value="Zoom TTD KK" @if($item->status_progress == "Zoom TTD KK") selected @endif>Zoom TTD KK</option>
                                            <option value="Onboarding" @if($item->status_progress == "Onboarding") selected @endif>Onboarding</option>
                                        </select>
                                    </td>
                                    <td class="whitespace-no-wrap px-6 py-4">{{ $item->keterangan }}</td>
                                    <td>
                                        <a href="{{ route("dashboard.internships.show", $item->id) }}" class="inline-flex items-start justify-start rounded bg-gray-500 p-3 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                            <i class="bx bx-show text-white"></i>
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

<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        var selectElements = document.querySelectorAll('.statusSelect');

        selectElements.forEach(function(selectElement) {
            selectElement.addEventListener('change', function () {
                var selectedValue = selectElement.value;
                var recordId = selectElement.getAttribute('data-id');
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route("dashboard.internships.update_status") }}', true);
                xhr.setRequestHeader('Content-Type', 'application/json');
                xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            console.log('Status updated successfully');
                        } else {
                            console.error('Error updating status:', xhr.statusText);
                        }
                    }
                };

                var data = JSON.stringify({ status: selectedValue, id: recordId });
                xhr.send(data);
            });
        });
    });
</script> -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var selectElements = document.querySelectorAll('.statusSelect');

        selectElements.forEach(function (selectElement) {
            selectElement.addEventListener('change', function () {
                var selectedValue = selectElement.value;
                var recordId = selectElement.getAttribute('data-id');
                var namaKolom = selectElement.getAttribute('nama-kolom');
                // console.log(namaKolom);
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route("dashboard.internships.update_status") }}', true);
                xhr.setRequestHeader('Content-Type', 'application/json');
                xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                icon: 'success',
                                title: 'Status updated successfully',
                                customClass: {
                                    container: 'my-swal-toast-container',
                                },
                            });
                        } else {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                icon: 'error',
                                title: 'Error updating status',
                                customClass: {
                                    container: 'my-swal-toast-container',
                                },
                            });
                        }
                    }
                };
                var data = JSON.stringify({ status: selectedValue, id: recordId, coloumn: namaKolom });
                console.log(data);
                xhr.send(data);
            });
        });
    });
</script>
