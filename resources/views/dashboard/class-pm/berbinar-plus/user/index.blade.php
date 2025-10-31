@extends('dashboard.layouts.app',[
'title' => 'Dashboard User Berbinar+',
'active' => 'Success',
'page' => 'Success',
])

@section('content')
<section class="flex w-full">
  <div class="flex flex-col w-full bg-gray-100">
    <div class="w-full">
      <div class="py-4 md:pt-12 md:pb-7">
        <div>
          <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal mb-2 text-gray-800">
            Data Pendaftar
          </p>
          <p class="w-full text-disabled">
            Halaman ini menampilkan data lengkap peserta yang telah mendaftar ke program Berbinar+, termasuk informasi pribadi, kelas yang diikuti, dan paket layanan yang dipilih.
        </p>
        <a href="{{ route("dashboard.berbinar-plus.create") }}" class="mt-8 inline-flex items-start justify-start rounded-lg bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
            <p class="text-dark font-medium leading-none">Tambah Data</p>
        </a>
    </div>
      </div>
      <div class="flex w-full space-x-4">
        <!-- Left Card -->
        <div class="rounded-lg bg-white w-full shadow-md px-4 py-4 md:px-8 md:py-7 xl:px-10 mb-7">
                <div class="mb-4 mt-4 overflow-x-auto">
                    <table id="example" class="min-w-full pt-5 leading-normal">
                        <thead>
                            <tr class="mt-4">
                                <th class="sticky-col sticky-col-1 bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">No</th>
                                <th class="sticky-col sticky-col-2 bg-white px-6 py-3 text-start text-base font-bold leading-4 tracking-wider text-black">Nama Lengkap</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Tanggal Daftar</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Email</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Pilihan Kelas</th>
                                <th class="bg-white px-6 right-0 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berbinarpUsers as $index => $user)
                                <tr class="border-b border-gray-200 hover:bg-gray-200 odd:bg-gray-100 even:bg-white">
                                    <td class="whitespace-no-wrap text-center sticky-col sticky-col-1 px-6 py-4">
                                        {{ $index + 1 }}
                                    </td>
                                    <td class="whitespace-no-wrap sticky-col sticky-col-2 px-6 py-4">
                                        {{ $user->first_name }} {{ $user->last_name }}
                                    </td>
                                    <td class="whitespace-no-wrap text-center px-6 py-4">
                                        {{ $user->created_at ? $user->created_at->format('d-m-Y') : '-' }}
                                    </td>
                                    <td class="whitespace-no-wrap text-center px-6 py-4">
                                        {{ $user->email }}
                                    </td>
                                    <td class="whitespace-no-wrap text-center px-6 py-4">
                                        {{ $user->enrollment && $user->enrollment->class ? $user->enrollment->class->title : '-' }}
                                    </td>
                                    <td class="whitespace-no-wrap flex items-center justify-center gap-2 px-6 py-4">
                                        <!-- Tombol Detail -->
                                        <a href="{{ route('dashboard.berbinar-plus.show', $user->id) }}" class="inline-flex items-start justify-start rounded p-2 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #3b82f6">
                                            <i class="bx bxs-show text-white"></i>
                                        </a>
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('dashboard.berbinar-plus.edit', $user->id) }}" class="inline-flex items-start justify-start rounded p-2 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #e9b306">
                                            <i class="bx bxs-edit-alt text-white"></i>
                                        </a>
                                        <!-- Tombol Hapus -->
                                        <button type="button" onclick="openDeleteModal({{ $user->id }})" class="inline-flex items-start justify-start rounded p-2 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #ef4444">
                                            <i class="bx bxs-trash-alt text-white"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Konfirmasi Hapus -->
    <div id="deleteModal" class="fixed inset-0 z-10 hidden items-center justify-center bg-black bg-opacity-50 flex">
        <div class="w-full max-w-md rounded-lg bg-white p-6 text-center">
            <div class="mb-4 flex justify-center">
                <img src="{{ asset('assets/images/dashboard/svg-icon/warning.svg') }}" alt="Warning Icon" class="h-12 w-12" />
            </div>
            <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900" id="modal-title">Konfirmasi Hapus</h3>
            <p class="mb-6 text-base text-gray-500">Apakah Anda yakin ingin menghapus user ini? Semua data terkait juga akan dihapus.</p>
            <div class="flex w-full justify-center gap-4">
                <form id="deleteForm" method="POST" class="w-1/2">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="rounded-lg bg-[#3986A3] w-full px-6 py-2 text-white text-center focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2">Hapus</button>
                </form>
                <button type="button" class="rounded-lg border border-[#3986A3] w-1/2 px-6 py-2 text-[#3986A3]" onclick="closeDeleteModal()">Batal</button>
            </div>
        </div>
    </div>


        </div>
      </div>
    </div>



  </div>
</section>


    <script>
    let deleteModal = document.getElementById('deleteModal');
    let deleteForm = document.getElementById('deleteForm');

    function openDeleteModal(userId) {
        deleteForm.action = `/dashboard/berbinar-plus/${userId}`;
        deleteModal.classList.remove('hidden');
    }

    function closeDeleteModal() {
        deleteModal.classList.add('hidden');
    }
</script>
@endsection
