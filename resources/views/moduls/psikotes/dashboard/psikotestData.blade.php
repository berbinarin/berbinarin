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
                    <p tabindex="0" class="focus:outline-none text-start text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Data User
                    </p>
                    <p class="text-start w-3/5 text-disabled">Fitur ini menampilkan data responden yang telah mengikuti alat tes Papi Kostick</p>
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
                        <tr>
                            <td class="px-4 py-2">
                                <div class="flex items-center justify-center">
                                    <img src="{{ asset('assets/images/psikotes/profil-dumy.png') }}" alt="Ikon" class="w-8 h-8 rounded-full mr-2">
                                    <span>User 1</span>
                                </div>
                            </td>
                            <td class="px-4 py-2">user1@example.com</td>
                            <td class="px-4 py-2">{{ now()->subDays(1)->format('d/m/Y') }}</td>
                            <td class="px-4 py-2">
                                <span class="bg-blue-500 text-white px-2 py-1 rounded">Progress</span>
                            </td>
                            <td class="px-4 py-2">
                            <a href="{{ route('psikotes.dashboard.papikostick') }}">
                                    <button class="text-grey px-2 py-1 rounded">
                                        Detail
                                        <i class="bi bi-arrow-right-short"></i>
                                    </button>
                                </a>                            
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">
                                <div class="flex items-center justify-center">
                                    <img src="{{ asset('assets/images/psikotes/profil-dumy.png') }}" alt="Ikon" class="w-8 h-8 rounded-full mr-2">
                                    <span>User 2</span>
                                </div>
                            </td>
                            <td class="px-4 py-2">user2@example.com</td>
                            <td class="px-4 py-2">{{ now()->subDays(2)->format('d/m/Y') }}</td>
                            <td class="px-4 py-2">
                                <span class="bg-green-500 text-white px-2 py-1 rounded">Finished</span>
                            </td>
                            <td class="px-4 py-2">
                            <a href="{{ route('psikotes.dashboard.papikostick') }}">
                                    <button class="text-grey px-2 py-1 rounded">
                                        Detail
                                        <i class="bi bi-arrow-right-short"></i>
                                    </button>
                                </a>                            
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">
                                <div class="flex items-center justify-center">
                                    <img src="{{ asset('assets/images/psikotes/profil-dumy.png') }}" alt="Ikon" class="w-8 h-8 rounded-full mr-2">
                                    <span>User 3</span>
                                </div>
                            </td>
                            <td class="px-4 py-2">user3@example.com</td>
                            <td class="px-4 py-2">{{ now()->subDays(3)->format('d/m/Y') }}</td>
                            <td class="px-4 py-2">
                                <span class="bg-blue-500 text-white px-2 py-1 rounded">Progress</span>
                            </td>
                            <td class="px-4 py-2">
                            <a href="{{ route('psikotes.dashboard.papikostick') }}">
                                    <button class="text-grey px-2 py-1 rounded">
                                        Detail
                                        <i class="bi bi-arrow-right-short"></i>
                                    </button>
                                </a>                            
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">
                                <div class="flex items-center justify-center">
                                    <img src="{{ asset('assets/images/psikotes/profil-dumy.png') }}" alt="Ikon" class="w-8 h-8 rounded-full mr-2">
                                    <span>User 4</span>
                                </div>
                            </td>
                            <td class="px-4 py-2">user4@example.com</td>
                            <td class="px-4 py-2">{{ now()->subDays(4)->format('d/m/Y') }}</td>
                            <td class="px-4 py-2">
                                <span class="bg-green-500 text-white px-2 py-1 rounded">Finished</span>
                            </td>
                            <td class="px-4 py-2">
                                <a href="{{ route('psikotes.dashboard.papikostick') }}">
                                    <button class="text-grey px-2 py-1 rounded">
                                        Detail
                                        <i class="bi bi-arrow-right-short"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">
                                <div class="flex items-center justify-center">
                                    <img src="{{ asset('assets/images/psikotes/profil-dumy.png') }}" alt="Ikon" class="w-8 h-8 rounded-full mr-2">
                                    <span>User 5</span>
                                </div>
                            </td>
                            <td class="px-4 py-2">user5@example.com</td>
                            <td class="px-4 py-2">{{ now()->subDays(5)->format('d/m/Y') }}</td>
                            <td class="px-4 py-2">
                                <span class="bg-blue-500 text-white px-2 py-1 rounded">Progress</span>
                            </td>
                            <td class="px-4 py-2">
                            <a href="{{ route('psikotes.dashboard.papikostick') }}">
                                    <button class="text-grey px-2 py-1 rounded">
                                        Detail
                                        <i class="bi bi-arrow-right-short"></i>
                                    </button>
                                </a>                            
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">
                                <div class="flex items-center justify-center">
                                    <img src="{{ asset('assets/images/psikotes/profil-dumy.png') }}" alt="Ikon" class="w-8 h-8 rounded-full mr-2">
                                    <span>User 6</span>
                                </div>
                            </td>
                            <td class="px-4 py-2">user6@example.com</td>
                            <td class="px-4 py-2">{{ now()->subDays(6)->format('d/m/Y') }}</td>
                            <td class="px-4 py-2">
                                <span class="bg-green-500 text-white px-2 py-1 rounded">Finished</span>
                            </td>
                            <td class="px-4 py-2">
                            <a href="{{ route('psikotes.dashboard.papikostick') }}">
                                    <button class="text-grey px-2 py-1 rounded">
                                        Detail
                                        <i class="bi bi-arrow-right-short"></i>
                                    </button>
                                </a>                            
                            </td>
                        </tr>
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