@extends('dashboard.layouts.app', [
    'title' => 'Peer Conselor Schedule',
    'active' => 'Dashboard',
    'modul' => 'Peer Conselor Schedule',
])

@section('content')
    <section class="flex flex-col w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="">
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Jadwal Peer Counselor</p>
                        <p class="w-full text-disabled">Fitur ini digunakan untuk menampilkan jadwal yang tersedia untuk pendaftar konseling yang mendaftar melalui situs web Berbinar.</p>
                        <button onclick="toggleModal('modal-id')" type="button"
                            class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class=" font-medium leading-none text-dark">Tambah Data</p>
                        </button>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display text-center" style="overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Hari</th>
                                    <th style="text-align: center">Pukul Mulai</th>
                                    <th style="text-align: center">Pukul Selesai</th>
                                    <th style="text-align: center">Penanggung Jawab</th>
                                    <th style="text-align: center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($PeerConsellorSchedule as $key=>$item)
                                    <tr class="data-consume">
                                        <td class="text-center">{{ $key+1 }}</td>
                                        <td>{{ $item->hari}}</td>
                                        <td>{{ $item->pukul_mulai }}</td>
                                        <td>{{ $item->pukul_selesai }}</td>
                                        <td>{{ $item->penanggung_jawab }}</td>
                                        <td class="flex gap-2 text-center" style="justify-content: center">
                                            <button onclick="toggleModal('edit-modal-{{ $item->id}}')" type="button"
                                                class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-yellow-500 hover:bg-yellow-500 focus:outline-none rounded">
                                                <i class='bx bxs-edit-alt text-white'></i>
                                            </button>
                                            <button  onclick="toggleModal('delete-modal-{{ $item->id}}')" type="button"
                                                    class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                                    <i class='bx bxs-trash-alt text-white'></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="edit-modal-{{ $item->id}}">
                                        <div class="relative w-auto my-6 mx-auto max-w-3xl">
                                            <!--content-->
                                            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                <!--header siniiiiii-->
                                                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                                                    <h3 class="text-3xl font-semibold">
                                                        Edit Jadwal Peer Counselor
                                                    </h3>
                                                    <button
                                                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                                                        onclick="toggleModal('edit-modal-{{ $item->id}}')">
                                                        <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                                            ×
                                                        </span>
                                                    </button>
                                                </div>
                                                <!--body-->
                                                <div class="relative p-6 flex-auto">
                                                    <form action="{{ route("dashboard.peer-counselor-schedules.update",  $item->id) }}" class="flex flex-col gap-1" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="flex gap-1">
                                                            <div class="mb-1 pt-0 w-full">
                                                                <label for="hari" class="text-blueGray-600 text-base">Hari</label>
                                                                <select id="hari" name="hari" placeholder="Placeholder" class="px-3 py-3 appearance-none placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full" required>
                                                                    <option value="Senin" {{ $item->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                                                                    <option value="Selasa" {{ $item->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                                                    <option value="Rabu" {{ $item->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                                                    <option value="Kamis" {{ $item->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                                                    <option value="Jumat" {{ $item->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                                                                    <option value="Sabtu" {{ $item->hari == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                                                                    <option value="Minggu" {{ $item->hari == 'Minggu' ? 'selected' : '' }}>Minggu</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="flex gap-1 mb-1">
                                                            <div class="mb-1 pt-0 flex-1">
                                                                <label for="pukul_mulai" class="text-blueGray-600 text-base">Pukul Mulai</label>
                                                                <input name="pukul_mulai" id="pukul_mulai" value="{{ $item->pukul_mulai}}" type="time" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full"  required/>
                                                            </div>
                                                            <div class="pt-0 flex-1">
                                                                <label for="pukul_selesai" class="text-blueGray-600 text-base">Pukul Selesai</label>
                                                                <input name="pukul_selesai" id="pukul_selesai" value="{{ $item->pukul_selesai}}" type="time" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full"  required/>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="flex gap-1"> --}}
                                                        <div class="flex gap-1 mb-8">
                                                            <div class="pt-0 w-full">
                                                                <label for="penanggung_jawab" class="text-blueGray-600 text-base">Penanggung Jawab</label>
                                                                <input type="text" name="penanggung_jawab" value="{{ $item->penanggung_jawab}}"  class="px-3 py-3 appearance-none placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full" required>
                                                            </div>
                                                        </div>
                                                        <!--footer-->
                                                        <div class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                                                            <button
                                                                class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                                type="button" onclick="toggleModal('edit-modal-{{ $item->id}}')">
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
                                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="edit-modal-{{ $item->id}}-backdrop"></div>
                                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="delete-modal-{{ $item->id}}">
                                        <div class="relative w-auto my-6 mx-auto max-w-3xl">
                                            <!--content-->
                                            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                <!--header-->
                                                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                                                    <h3 class="text-3xl font-semibold">
                                                        Hapus Jadwal Peer Counselor
                                                    </h3>
                                                    <button
                                                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                                                        onclick="toggleModal('delete-modal-{{ $item->id}}')">
                                                        <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                                            ×
                                                        </span>
                                                    </button>
                                                </div>
                                                <!--body-->
                                                <div class="relative p-6 flex-auto">
                                                    <form action="{{ route('dashboard.peer-counselor-schedules.destroy', $item->id) }}"  method="post">
                                                        @csrf
                                                        @method("DELETE")
                                                        <input type="hidden" name="id">
                                                        <p class="mb-6">Apakah Anda yakin ingin menghapus jadwal Peer Counselor pada hari <b>{{ $item->hari }}</b> pukul <b>{{ $item->pukul_mulai }} - {{ $item->pukul_selesai }}</b> ?</p>
                                                        <!--footer-->
                                                        <div class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                                                            <button
                                                                class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                                type="button" onclick="toggleModal('delete-modal-{{ $item->id}}')">
                                                                Close
                                                            </button>
                                                            <button type="submit"
                                                                class="focus:ring-2  mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                                                                <p class="text-base font-semibold leading-none text-white">Delete Data</p>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="delete-modal-{{ $item->id}}-backdrop"></div>
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
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
            <!--content-->
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Tambah Jadwal Peer Counselor
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
                    <form action="{{ route('dashboard.peer-counselor-schedules.store') }}" class="flex flex-col gap-1" method="post">

                        @csrf
                        <div class="flex gap-1">
                            <div class="mb-1 pt-0 w-full">
                                <label for="hari" class="text-blueGray-600 text-base">Hari</label>
                                <select id="hari" name="hari" placeholder="Placeholder" class="px-3 py-3 appearance-none placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full" required>
                                    <option value="Default" selected disabled>Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex gap-1 mb-2">
                            <div class="mb-1 pt-0 flex-1">
                                <label for="pukul_mulai" class="text-blueGray-600 text-base">Pukul Mulai</label>
                                <input name="pukul_mulai" id="pukul_mulai" type="time" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full"  required/>
                            </div>
                            <div class="mb-6 pt-0 flex-1">
                                <label for="pukul_selesai" class="text-blueGray-600 text-base">Pukul Selesai</label>
                                <input name="pukul_selesai" id="pukul_selesai" type="time" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full"  required/>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="mb-1 pt-0 w-full">
                                <label for="penanggung_jawab" class="text-blueGray-600 text-base">Penanggung Jawab</label>
                                <input type="text" name="penanggung_jawab" class="px-3 py-3 appearance-none placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full" required>
                            </div>
                        </div>
                        <!--footer-->
                        <div class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                            <button
                                class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button" onclick="toggleModal('modal-id')">
                                Tutup
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
@endsection
@section('script')
    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>
@endsection
