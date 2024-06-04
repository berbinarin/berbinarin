@extends('moduls.dashboard.layouts.main', [
    'title' => 'Edit Soal',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Free Soal',
])

@section('content-dashboard')
    <div class="container mt-5">
        <h1>Edit Soal</h1>
        <form action="{{ route('dashboard.psikotestfree.question.update', $question->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="dimension_id">Dimension</label>
                <select class="form-control" id="dimension_id" name="dimension_id" required>
                    @foreach ($dimensions as $dimension)
                        <option value="{{ $dimension->id }}"
                            {{ $question->dimension_id == $dimension->id ? 'selected' : '' }}>
                            {{ $dimension->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nr">N/R</label>
                <select class="form-control" id="nr" name="nr" required>
                    <option value="N" {{ $question->nr == 'N' ? 'selected' : '' }}>N</option>
                    <option value="R" {{ $question->nr == 'R' ? 'selected' : '' }}>R</option>
                </select>
            </div>
            <div class="form-group">
                <label for="text">Question Text</label>
                <input type="text" class="form-control" id="question_text" name="question_text"
                    value="{{ $question->question_text }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('dashboard.psikotestfree.question.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
