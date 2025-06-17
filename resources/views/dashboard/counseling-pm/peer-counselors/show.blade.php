@extends('dashboard.layouts.app', [
    'title' => 'Konselling Psikolog Data',
    'active' => 'Dashboard',
    'modul' => 'Peer Conselor Data',
])

@section('content')
    <section class="flex w-full p-6 bg-gray-100">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="flex flex-row items-center">
                        <a href="{{ route('dashboard.peer-counselors.index') }}" class="mr-6 mt-8 text-left">
                            <i class='bx bx-arrow-back text-[35px] text-primary'></i>
                        </a>
                        <div>
                            <p tabindex="0"
                                class="focus:outline-none text-2xl md:text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Konseling Peer Counselor Data
                            </p>
                            <p class="text-disabled">Fitur ini digunakan untuk menampilkan data pendaftar konseling yang
                                mendaftar melalui situs web Berbinar.</p>
                            <div class="mt-8 sm:mt-3 flex space-x-4">
                                <a href="{{ route('dashboard.peer-counselors.edit', $PeerConsellorDataDetails[0]->id) }}"                                    class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                                    <p class="font-medium leading-none text-dark">Edit Data</p>
                                </a>
                                <button onclick="toggleModal('modal-delete')" type="button"
                                    class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                                    <p class="font-medium leading-none text-dark">Delete Data</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md shadow-lg">
                    <div class="mt-4 overflow-x-auto">
                        <table class="w-full table-auto border-collapse border border-gray-300">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Field</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Nama</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails[0]->nama }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Jadwal Tanggal</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        {{ \Carbon\Carbon::parse($PeerConsellorDataDetails[0]->jadwal_tanggal)->format('d-m-Y') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Jadwal Pukul</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        {{ $PeerConsellorDataDetails[0]->jadwal_pukul }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Metode</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PeerConsellorDataDetails[0]->metode }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Daerah</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PeerConsellorDataDetails[0]->daerah }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Harga</td>
                                    <td class="border border-gray-300 px-4 py-2">Rp.
                                        {{ $PeerConsellorDataDetails[0]->harga }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Nomor WhatsApp</td>
                                    <td class="border border-gray-300 px-4 py-2"><a
                                            href="https://wa.me/{{ $PeerConsellorDataDetails[0]->no_wa }}"
                                            class="text-blue-500">{{ $PeerConsellorDataDetails[0]->no_wa }}</a></td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Email</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $PeerConsellorDataDetails[0]->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Jenis Kelamin</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PeerConsellorDataDetails[0]->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Agama</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails[0]->agama }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Tempat Lahir</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PeerConsellorDataDetails[0]->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Tanggal Lahir</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        {{ \Carbon\Carbon::parse($PeerConsellorDataDetails[0]->tanggal_Lahir)->format('d-m-Y') }}
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Suku</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails[0]->suku }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Status Pernikahan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PeerConsellorDataDetails[0]->status_pernikahan }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Alamat</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails[0]->alamat }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Posisi Anak</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PeerConsellorDataDetails[0]->posisi_anak }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Pendidikan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PeerConsellorDataDetails[0]->pendidikan }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Riwayat Pekerjaan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PeerConsellorDataDetails[0]->riwayat_pekerjaan }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Hobi</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails[0]->hobi }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Kegiatan Sosial</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">
                                        {{ $PeerConsellorDataDetails[0]->kegiatan_sosial }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Hal yang Ingin Diceritakan</td>
                                    <td class="border border-gray-300 px-4 py-2 capitalize">{{ $PeerConsellorDataDetails[0]->cerita }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal-delete">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Delete Peer Counselor Data
                    </h3>
                    <button
                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                        onclick="toggleModal('modal-delete')">
                        <span
                            class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">×</span>
                    </button>
                </div>
                <!--body-->
                <div class="relative p-6 flex-auto">
                    <form
                        action="{{ route('dashboard.peer-counselors.destroy', $PeerConsellorDataDetails[0]->id) }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id">
                        <p class="mb-6">Are you sure want to delete a peer counsellor data for
                            {{ $PeerConsellorDataDetails[0]->nama }} appointment in
                            {{ $PeerConsellorDataDetails[0]->jadwal_tanggal }} on
                            {{ $PeerConsellorDataDetails[0]->jadwal_pukul }} ?</p>
                        <!--footer-->
                        <div
                            class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                            <button
                                class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button" onclick="toggleModal('modal-delete')">Close</button>
                            <button type="submit"
                                name="submit"class="focus:ring-2  mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                                <p class="text-base font-semibold leading-none text-white">Delete Data</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-delete-backdrop"></div>

    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>
@endsection