@extends('moduls.psikotes.dashboard.layouts.main', [
    'title' => 'Dashboard Psikotest',
    'active' => 'Dashboard Psikotest',
    'modul' => 'psikotestData',
])

@section('content-dashboard')
    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:py-4">
                    <div>
                        <p tabindex="0"
                            class="focus:outline-none text-start text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Data User
                        </p>
                        <p class="text-start w-3/5 text-disabled">Fitur ini menampilkan data responden yang telah mengikuti
                            alat tes Papi Kostick</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row w-full gap-6">
                <div class="w-full bg-white rounded-md p-4">
                    <h2 class="text-xl font-bold mb-4" style="margin-left: 20px;">All Responden</h2>
                    <table class="w-full table-auto text-center" style="font-size: 15px; font-weight: 600;">
                        <thead>
                            <tr class="bg-white text-gray-400">
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Date</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($respondens as $responden)
                                <tr>
                                    <td class="px-4 py-2">
                                        <div class="flex items-center justify-center">
                                            <img src="{{ asset('assets/images/psikotes/profil-dumy.png') }}" alt="Ikon"
                                                class="w-8 h-8 rounded-full mr-2">
                                            <span>{{ $responden->userPsikotestPaid->fullname }}</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2">{{ $responden->userPsikotestPaid->email }}</td>
                                    {{-- <td class="px-4 py-2">{{ now()->subDays(1)->format('d/m/Y') }}</td> --}}
                                    <td class="px-4 py-2">{{ $responden->created_at->translatedFormat('d F Y') }}</td>
                                    <td class="px-4 py-2">
                                        {{-- <span class="bg-blue-500 text-white px-2 py-1 rounded">Progress</span> --}}
                                        <span class="bg-green-500 text-white px-2 py-1 rounded">Finished</span>
                                    </td>
                                    <td class="px-4 py-2">
                                        <a href="{{ route('psikotest-paid.papi-kostick.detail', $responden->id) }}">
                                            <button class="text-grey px-2 py-1 rounded">
                                                Detail
                                                <i class="bi bi-arrow-right-short"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="flex justify-between items-center mt-4">
                        <div class="text-gray-600"></div>
                        <div>
                            <ul class="inline-flex text-xs items-center">
                                <li><button class="px-3 mx-1 py-1 bg-gray-200 rounded">&lt;</button></li>
                                <li><button class="px-3 py-1 bg-gray-200 rounded">1</button></li>
                                <li><button class="px-3 mx-1 py-1 bg-gray-200 rounded">2</button></li>
                                <li><button class="px-3 py-1 bg-gray-200 rounded">3</button></li>
                                <li><button class="px-3 mx-1 py-1 bg-gray-200 rounded">4</button></li>
                                <li><span class="px-3 py-1">...</span></li>
                                <li><button class="px-3 mx-1 py-1 bg-gray-200 rounded">40</button></li>
                                <li><button class="px-3 py-1 bg-gray-200 rounded">&gt;</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Respondents List</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($respondens as $responden)
                    <tr>
                        <td>{{ $responden->userPsikotestPaid->id }}</td>
                        <td>{{ $responden->userPsikotestPaid->name }}</td>
                        <td>{{ $responden->userPsikotestPaid->email }}</td>
                        <td>
                            <a href="{{ route('psikotest-paid.papi-kostick.detail', $responden->id) }}"
                                class="btn btn-primary">View
                                Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html> --}}
