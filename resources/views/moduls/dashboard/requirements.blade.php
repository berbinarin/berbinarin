@extends('moduls.dashboard.layouts.main', [
    'title' => 'Requirements Management',
    'active' => 'Dashboard',
])

@section('content-dashboard')
    <section class="flex w-full fixed">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="">
                        <div class="flex gap-3">
                            <i class='bx bx-file text-gray-700 text-5xl'></i>
                            <div class="flex flex-col gap-2">
                                <div class="flex items-center">

                                </div>
                                <p tabindex="0"
                                    class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                                    Hiring Position Requirements<br> Management Data</p>
                                <p class="w-2/4 text-disabled">Fitur ini digunakan untuk mengatur dan memanajemen data
                                    posisi hiring
                                    yang sedang
                                    atau akan
                                    dibukan atau telah dibuka yang ditampilkan pada website careers Berbinarin.</p>
                            </div>

                        </div>


                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-m">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Posisi</th>
                                    <th>Tipe</th>
                                    <th>Jabatan</th>
                                    <th>Lokasi</th>
                                    <th>Link Registrasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="data-consume">
                                    <td>1</td>
                                    <td>Human Resource Management</td>
                                    <td>Internship</td>
                                    <td>Manager</td>
                                    <td>Remote</td>
                                    <td>
                                        <a href="https://linkRecruitmentBerbinar.ly">https://linkRecruitmentBerbinar.ly</a>
                                    </td>
                                    <td class="flex gap-2">
                                        <a href="/dashboard/consume/edit/"
                                            class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-yellow-500 hover:bg-yellow-500 focus:outline-none rounded"><i
                                                class='bx bxs-edit-alt text-dark'></i>
                                        </a>
                                        <form action="" method="post">
                                            @csrf
                                            <input type="hidden" name="id">
                                            <button type="submit"
                                                class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                                <i class='bx bxs-trash-alt text-white'></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                <tr class="data-consume">
                                    <td>2</td>
                                    <td>UI/UX Designer</td>
                                    <td>Internship</td>
                                    <td>Staff</td>
                                    <td>Remote</td>
                                    <td>
                                        <a href="https://linkRecruitmentBerbinar.ly">https://linkRecruitmentBerbinar.ly</a>
                                    </td>
                                    <td class="flex gap-2">
                                        <a href="/dashboard/consume/edit/"
                                            class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-yellow-500 hover:bg-yellow-500 focus:outline-none rounded"><i
                                                class='bx bxs-edit-alt text-dark'></i>
                                        </a>
                                        <form action="" method="post">
                                            @csrf
                                            <input type="hidden" name="id">
                                            <button type="submit"
                                                class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                                <i class='bx bxs-trash-alt text-white'></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                <tr class="data-consume">
                                    <td>3</td>
                                    <td>Class Product Management</td>
                                    <td>Internship</td>
                                    <td>Staff</td>
                                    <td>Remote</td>
                                    <td>
                                        <a href="https://linkRecruitmentBerbinar.ly">https://linkRecruitmentBerbinar.ly</a>
                                    </td>
                                    <td class="flex gap-2">
                                        <a href="/dashboard/consume/edit/"
                                            class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-yellow-500 hover:bg-yellow-500 focus:outline-none rounded"><i
                                                class='bx bxs-edit-alt text-dark'></i>
                                        </a>
                                        <form action="" method="post">
                                            @csrf
                                            <input type="hidden" name="id">
                                            <button type="submit"
                                                class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                                <i class='bx bxs-trash-alt text-white'></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                <tr class="data-consume">
                                    <td>4</td>
                                    <td>Marketing Strategist and Sales</td>
                                    <td>Internship</td>
                                    <td>Staff</td>
                                    <td>Surabaya</td>
                                    <td>
                                        <a href="https://linkRecruitmentBerbinar.ly">https://linkRecruitmentBerbinar.ly</a>
                                    </td>
                                    <td class="flex gap-2">
                                        <a href="/dashboard/consume/edit/"
                                            class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-yellow-500 hover:bg-yellow-500 focus:outline-none rounded"><i
                                                class='bx bxs-edit-alt text-dark'></i>
                                        </a>
                                        <form action="" method="post">
                                            @csrf
                                            <input type="hidden" name="id">
                                            <button type="submit"
                                                class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-500 focus:outline-none rounded">
                                                <i class='bx bxs-trash-alt text-white'></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Posisi</th>
                                    <th>Tipe</th>
                                    <th>Jabatan</th>
                                    <th>Lokasi</th>
                                    <th>Link Registrasi</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
