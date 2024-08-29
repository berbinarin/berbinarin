@extends('moduls.psikotes.dashboard.layouts.main', [
    'title' => 'Dashboard',
    'active' => 'Dashboard Psikotest',
    'modul' => 'PapiKostik',
])

@section('content-dashboard')
    <section class="flex w-full p-4 gap-4">
        <div class="flex flex-col items-center w-3/5 bg-white p-4 shadow-md rounded-lg">
            <h2 class="text-lg font-semibold mb-2"
                style="text-align: start; font-size: 14px; margin-bottom: 10px; margin-left: -65%;">Name: Morgan Vero</h2>
            <img src="{{ asset('assets/images/psikotes/diagram-papikostik.png') }}" alt="Diagram PapiKostik"
                title="Diagram PapiKostik" class="bottom-0 right-0 z-50" style="width: 175px;" data-aos="fade-up"
                data-aos-duration="1500">
            <div class="overflow-y-auto" style="max-height: 250px; font-size: 14px; margin-top: 30px; margin-left: 40px;">
                <p class="mb-2"><strong>Decs:</strong></p>
                @foreach ($descriptions as $key => $description)
                    <p class="mb-2"><strong>{{ $key }} (Perseverance) </strong> - {{ $description }}</p>
                @endforeach
            </div>
        </div>
        <div class="flex flex-col bg-white p-4 shadow-md rounded-lg" style="width: 320px; margin-left: 60px;">
            <h2 class="text-3xl font-semibold mb-2">Answer</h2>
            <table class="min-w-full bg-white border-collapse" style="font-size: 13px;">
                <thead class="bg-white">
                    <tr>
                        <th class="py-2 px-4 border-b-2 border-b border-gray-200">No</th>
                        <th class="py-2 px-4 border-b-2 border-b border-gray-200">Choice</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($answers as $answer)
                        <tr>
                            <td class="py-2 px-4">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4">
                                {{ $answer->answer == 1 ? 'A. ' . $answer->questionPapiKostick->a : 'B. ' . $answer->questionPapiKostick->b }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
