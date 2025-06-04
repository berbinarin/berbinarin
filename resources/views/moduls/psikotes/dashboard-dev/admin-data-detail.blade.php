@extends('dashboard.layouts.app', [
    'title' => 'Data',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Free Data',
])

@section('content')
    <div class="container">
        <h1>Detail Data Psikotes Free</h1>
        @foreach ($testData->users as $user)
            <div class="card mb-3">
                <div class="card-header">
                    Detail User
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama: {{ $user->name }}</h5>
                    <p class="card-text"><strong>Jenis Kelamin:</strong>
                        {{ $user->gender == 'Male' ? 'Laki-laki' : 'Perempuan' }}</p>
                    <p class="card-text"><strong>Tanggal Lahir:</strong> {{ $user->date_of_birth }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                    <p class="card-text"><strong>Tanggal Tes:</strong> {{ $testData->test_date }}</p>

                    <h5 class="mt-3">Hasil Tes</h5>
                    @if ($testData->results)
                        <p class="card-text"><strong>Agreeableness:</strong> {{ $testData->results->agreeableness }}%
                        </p>
                        <p class="card-text"><strong>Conscientiousness:</strong>
                            {{ $testData->results->conscientiousness }}%</p>
                        <p class="card-text"><strong>Extraversion:</strong> {{ $testData->results->extraversion }}%</p>
                        <p class="card-text"><strong>Neuroticism:</strong> {{ $testData->results->neuroticism }}%</p>
                        <p class="card-text"><strong>Openness:</strong> {{ $testData->results->openness }}%</p>
                    @else
                        <p class="card-text">No results available.</p>
                    @endif

                    <h5 class="mt-3">Jawaban Soal</h5>
                    <ul>
                        @foreach ($testData->answers as $answer)
                            <li>{{ $answer->question->id }}: {{ $answer->answer }}</li>
                        @endforeach
                    </ul>

                    <a href="{{ route('dashboard.psikotestfree.data') }}" class="btn btn-primary mt-3">Back to
                        List</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
