@extends('moduls.psikotes.dashboard.layouts.main', [
    'title' => 'Dashboard',
    'active' => 'Dashboard Psikotest',
    'modul' => 'psikotestSoal',
])

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:py-4">
                    <div>
                        <p tabindex="0"
                            class="focus:outline-none text-start text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Edit Soal</p>
                        <p class="text-start w-3/5 text-disabled">Fitur ini menampilkan data soal yang tersedia di alat
                            tes Papi Kostick</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row w-full gap-6">
                <div class="w-full bg-white rounded-md p-4">
                    <h2 class="text-xl font-bold mb-4" style="margin-left: 20px;">All Responden</h2>

                    <table class="w-full table-auto text-center border-collapse" style="font-size: 15px; font-weight: 600;">
                        <thead>
                            <tr class="bg-white text-gray-400 border-b border-gray-200">
                                <th class="px-4 py-2">No</th>
                                <th class="px-4 py-2">Choice 1</th>
                                <th class="px-4 py-2">Choice 2</th>
                                {{-- <th class="px-4 py-2">Date</th> --}}
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                                <tr class="border-b border-gray-200">
                                    <td class="px-4 py-2">{{ $question->id }}</td>
                                    <td class="px-4 py-2">{{ $question->a }}</td>
                                    <td class="px-4 py-2">{{ $question->b }}</td>
                                    {{-- <td class="px-4 py-2">{{ $question->created_at }}</td> --}}
                                    <td class="px-4 py-2 flex justify-center space-x-2">
                                        <a href="{{ route('papi-kostick.edit-soal', $question->id) }}"
                                            class="w-8 h-8 bg-blue-500 text-white rounded flex items-center justify-center hover:bg-blue-600"
                                            aria-label="Edit">
                                            <span class="text-xl font-bold"
                                                style="display: inline-block; transform: scaleX(-1);">✎</span>
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
        <h1>All Questions</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Question A</th>
                    <th>Question B</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                    <tr>
                        <td>{{ $question->id }}</td>
                        <td>{{ $question->a }}</td>
                        <td>{{ $question->b }}</td>
                        <td>{{ $question->created_at }}</td>
                        <td>
                            <a href="{{ route('papi-kostick.edit-soal', $question->id) }}"
                                class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html> --}}
