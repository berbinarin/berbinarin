@extends('dashboard.layouts.app', [
'title' => 'Psikotes Free',
'active' => 'Dashboard',
'modul' => 'Psikotest Free Data',
])

@section('content')
<section class="flex">
    <div class="flex flex-col">
        <div class="w-fit">
            @foreach ($testData->users as $user)
            <div class="py-4">
                <div class="flex flex-row items-center">
                    <div class="">
                        <a href="{{ route('dashboard.psikotestfree.data') }}">
                            <i class='bx bx-arrow-back text-[30px] text-primary mr-6 text-left'></i>
                        </a>
                    </div>
                    <div class="">
                        <p class="text-lg md:text-3xl font-bold leading-normal text-gray-800 mb-2">
                            Detail Responden</p>
                    </div>
                </div>
            </div>
            <div class="relative w-[1300px] py-7 px-10 flex-auto bg-white rounded-md">
                <div class="flex flex-row gap-10">
                    <div class="w-2/5">
                        <table class="table table-striped table-hover">
                            <tr>
                                <td class="py-3 font-semibold">Nama :
                                    <span class="ml-16">{{ $user->name }} </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 font-semibold">Jenis Kelamin :
                                    <span class="ml-2">
                                        {{ $user->gender == 'Male' ? 'Laki-laki' : 'Perempuan' }}
                                    </span>

                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 font-semibold">Tanggal Lahir :
                                    <span class="ml-2">
                                        {{ \Carbon\Carbon::parse($user->date_of_birth)->format('Y-m-d') }}
                                    </span>

                                </td>
                            </tr>
                            <!-- email -->
                            <tr>
                                <td class="py-3 font-semibold">Email :
                                    <span class="ml-16">{{ $user->email }}</span>
                                </td>
                            </tr>

                            <!-- tanggal tes -->
                            <tr>
                                <td class="py-3 font-semibold">Tanggal Tes :
                                    <span class="ml-4">{{ \Carbon\Carbon::parse($testData->test_date)->format('Y-m-d') }}</span>
                                </td>
                            </tr>

                            <!-- feedback -->
                            <tr class="w-full">
                                <td class="py-3 font-semibold">Feedback :
                                    <span>
                                        @php
                                        $rating = optional(optional($user)->feedback)->rating;
                                        @endphp
                                        @if ($rating == 5)
                                        <img src="{{ asset('assets/images/old/psikotes/feedback/1-wahoo2.png') }}" alt="Happy" class="w-10 h-auto inline-block align-middle mr-2">
                                        @elseif ($rating == 4)
                                        <img src="{{ asset('assets/images/old/psikotes/feedback/2-happy2.png') }}" alt="Happy" class="w-10 h-auto inline-block align-middle mr-2">
                                        @elseif ($rating == 3)
                                        <img src="{{ asset('assets/images/old/psikotes/feedback/3-neutral2.png') }}" alt="Neutral" class="w-10 h-auto inline-block align-middle mr-2">
                                        @elseif ($rating == 2)
                                        <img src="{{ asset('assets/images/old/psikotes/feedback/4-bummed2.png') }}" alt="Bummed" class="w-10 h-auto inline-block align-middle mr-2">
                                        @elseif ($rating == 1)
                                        <img src="{{ asset('assets/images/old/psikotes/feedback/4-pissed2.png') }}" alt="Bummed Out" class="w-10 h-auto inline-block align-middle mr-2">
                                        @else
                                        <span class="-ml-2 font-semibold"> tidak ada 😭
                                            @endif
                                        </span>
                                        <span class="-ml-2 font-semibold">{{ $rating }}
                                            ,</span>
                                        @php
                                        $experience = optional(optional($user)->feedback)->experience;
                                        @endphp
                                        <span class="ml-2 font-semibold">{{ $experience }}</span>
                                </td>
                            </tr>


                        </table>
                    </div>
                    <div class="w-3/5">
                        <table class="w-full table table-striped table-hover">
                            <tr>
                                <td class="py-2 font-semibold">Hasil Tes :
                                    @if ($testData->results)
                                    <div class="flex flex-row py-3">
                                        <p class="card-text"><strong>Agreeableness:</strong>
                                        <div class="progress-bar w-[20px] h-5 ml-5 my-1 bg-primary rounded-full text-[13px] text-end" role="progressbar" style="width: {{ $testData->results->agreeableness }}%" aria-valuenow="{{ $testData->results->agreeableness }}% aria-valuemin=" 0" aria-valuemax="100">
                                            <span class="mr-3"> {{ $testData->results->agreeableness }}%</span>
                                        </div>
                                        </p>
                                    </div>

                                    <div class="flex flex-row py-3">
                                        <p class="card-text"><strong>Conscientiousness:</strong>
                                        <div class="progress-bar w-[20px] h-5 ml-5 my-1 bg-primary rounded-full text-[13px] text-end" role="progressbar" style="width: {{ $testData->results->conscientiousness }}%" aria-valuenow="{{ $testData->results->conscientiousness }}%" aria-valuemin="0" aria-valuemax="100">
                                            <span class="mr-3"> {{ $testData->results->conscientiousness }}%</span>
                                        </div>
                                        </p>
                                    </div>

                                    <div class="flex flex-row py-3">
                                        <p class="card-text"><strong>Extraversion:</strong>
                                        <div class="progress-bar w-[20px] h-5 ml-5 my-1 bg-primary rounded-full text-[13px] text-end" role="progressbar" style="width: {{ $testData->results->neuroticism }}%" aria-valuenow="{{ $testData->results->neuroticism }}%" aria-valuemin="0" aria-valuemax="100">
                                            <span class="mr-3"> {{ $testData->results->neuroticism }}%</span>
                                        </div>
                                        </p>
                                    </div>

                                    <div class="flex flex-row py-3">
                                        <p class="card-text"><strong>Neuroticism:</strong>
                                        <div class="progress-bar w-[20px] h-5 ml-5 my-1 bg-primary rounded-full text-[13px] text-end" role="progressbar" style="width: {{ $testData->results->neuroticism }}%" aria-valuenow="{{ $testData->results->neuroticism }}%" aria-valuemin="0" aria-valuemax="100">
                                            <span class="mr-3"> {{ $testData->results->neuroticism }}%</span>
                                        </div>
                                        </p>
                                    </div>

                                    <div class="flex flex-row py-3">
                                        <p class="card-text"><strong>Openness:</strong>
                                        </p>
                                        <div class="progress-bar w-[20px] h-5 ml-5 my-1 bg-primary rounded-full text-[13px] text-end" role="progressbar" style="width: {{ $testData->results->openness }}%" aria-valuenow="{{ $testData->results->openness }}%" aria-valuemin="0" aria-valuemax="100">
                                            <span class="mr-3"> {{ $testData->results->openness }}%</span>
                                        </div>
                                    </div>
                                    @else
                                    <p class="card-text">No results available.</p>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p class="font-semibold"> Detail Jawaban :</p>
                <div class="flex flex-col overflow-x-auto">
                    <div class="inline-block min-w-full py-2">
                        <div class="relative overflow-x">
                            <table class="table table-striped table-hover w-full text-sm text-left rtl:text-right">
                                <tr>
                                    <td class="py-3 font-semibold">
                                        <table class="w-full bg-slate-300 rounded-lg">
                                            <thead class="border-0">
                                                <tr class="">
                                                    <th class="rounded-lg border border-slate-100 px-4 py-3">
                                                        Nomor
                                                        Soal
                                                    </th>
                                                    @foreach ($testData->answers as $answer)
                                                    <th class="border border-slate-100 px-4 py-3">
                                                        {{ $answer->question->id }}
                                                    </th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border border-slate-100 px-4 py-3">Jawaban</td>
                                                    @foreach ($testData->answers as $answer)
                                                    <td class="border border-slate-100 px-4 py-3">
                                                        {{ $answer->answer }}
                                                    </td>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection