@extends('dashboard.layouts.app', [
'title' => 'Jawaban Dass42',
'active' => 'Dashboard',
'modul' => 'Psikotest Paid Dass42',
])

@section('content')
<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div>
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Data Jawaban Alat Test Dass-42</p>
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
                            @foreach ($psikotestPaidTestDass as $data)
                            <tr class="data-consume">
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $data->userPsikotestPaid->fullname }}</td>
                                <td class="text-center">{{ $data->userPsikotestPaid->email }}</td>
                                <td class="text-center">{{ \Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap text-center">
                                    <a href="{{ route('dashboard.psikotespaid.detaildass42', [$data->id]) }}">
                                    <button type="button"
                                        class="focus:ring-2 focus:ring-offset-2  mt-4 sm:mt-0 inline-flex items-start justify-start p-3 bg-blue-500 hover:bg-blue-500 focus:outline-none rounded">
                                        <p class="font-medium leading-none text-white">Lihat Jawaban</p>
                                    </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection