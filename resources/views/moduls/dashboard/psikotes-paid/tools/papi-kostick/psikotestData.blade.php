@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Psikotest',
    'active' => 'Dashboard',
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
                    <table id="example" class="w-full table-auto text-center" style="font-size: 15px; font-weight: 600;">
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
                                            <span>{{ $responden->userPsikotestPaid->fullname }}</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2">{{ $responden->userPsikotestPaid->email }}</td>
                                    <td class="px-4 py-2">{{ $responden->created_at->translatedFormat('d F Y') }}</td>
                                    <td class="px-4 py-2">
                                        @if ($responden->status_progress)
                                            <span class="bg-green-500 text-white px-2 py-1 rounded">Finished</span>
                                        @else
                                            <span class="bg-blue-500 text-white px-2 py-1 rounded">Progress</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-2">
                                        <a href="{{ route('dashboard.psikotespaid.papikostick', $responden->id) }}">
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

                </div>
            </div>
        </div>
    </section>
@endsection