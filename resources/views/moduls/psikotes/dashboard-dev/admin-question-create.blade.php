@extends('moduls.dashboard.layouts.main', [
    'title' => 'Edit Soal',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Free Soal',
])

@section('content-dashboard')
    <div class="container mt-5">
        <h1>Tambah Soal Psikotes Free</h1>
        <form action="{{ route('dashboard.psikotestfree.question.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="dimension_id">Dimension</label>
                <select class="form-control" id="dimension_id" name="dimension_id" required>
                    @foreach ($dimensions as $dimension)
                        <option value="{{ $dimension->id }}">{{ $dimension->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nr">N/R</label>
                <select class="form-control" id="nr" name="nr" required>
                    <option value="N">N</option>
                    <option value="R">R</option>
                </select>
            </div>
            <div class="form-group">
                <label for="text">Question Text</label>
                <input type="text" class="form-control" id="question_text" name="question_text" required>
            </div>
            <button type="submit" class="btn btn-success">Tambah Soal</button>
            <a href="{{ route('dashboard.psikotestfree.question.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
