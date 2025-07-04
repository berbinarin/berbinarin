@extends('dashboard.layouts.app
'title' => 'DAP',
'active' => 'Dashboard',
'modul' => 'Psikotest Paid DAP',
])

@section('content')
<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div>
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Database Jawaban Alat Tes DAP</p>
                    <p class="w-2/4 text-disabled">Halaman dashboard ini menampilkan jawaban yang telah dikumpulkan dari pengguna.</p>
                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                <div class="mt-4 overflow-x-auto">
                    <table id="example" class="display w-full" style="overflow-x: scroll;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($test_dap as $item)
                                    <tr class="data-consume">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $item->PsikotestPaidTest->userPsikotestPaid->fullname }}</td>
                                        <td class="text-center">{{ $item->PsikotestPaidTest->userPsikotestPaid->email }}</td>
                                        <td class="text-center">{{ $item->created_at->format('d-m-Y') }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-center text-center">
                                            <button onclick="toggleModal('view-modal-{{ $loop->iteration }}')" type="button"
                                                class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-blue-500 hover:bg-blue-500 focus:outline-none rounded">
                                                <p class="font-medium leading-none text-white">Lihat Gambar</p>
                                            </button>
                                        </td>
                                    </tr>
                                    {{-- modal delete job description --}}
                                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                        id="view-modal-{{ $loop->iteration }}">
                                        <div class="relative w-auto my-6 mx-auto max-w-3xl">
                                            <!--content-->
                                            <div
                                                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                <div class="relative p-6 flex-auto">
                                                    <img src="{{ url('/image/'.$item->answerDap->where('question_dap_id', 1)->first()?->answer) }}"
                                                        alt="">
                                                    <!--footer-->
                                                    <div
                                                        class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                                                        <button
                                                            class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 focus:outline-none rounded"
                                                            type="button" onclick="toggleModal('view-modal-{{ $loop->iteration }}')"
                                                            style="background-color: #6083F2;">
                                                            <p class="font-medium leading-none text-white">Kembali</p>
                                                        </button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            
                            <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="view-modal-backdrop"></div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
  
  <script type="text/javascript">
    function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
    }
  </script>
</section>
@endsection