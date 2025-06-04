@extends('dashboard.layouts.app', [
    'title' => 'Edit Soal',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Free Soal',
])

@section('content')
    <div class="container mt-5">
        <h1>Edit Soal Psikotes Free</h1>
        <a href="{{ route('dashboard.psikotestfree.question.create') }}" class="btn btn-success mb-3">Tambah Soal</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Dimension</th>
                    <th>Question Text</th>
                    <th>R/N</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                    <tr>
                        <td>{{ $question->id }}</td>
                        <td>{{ $question->dimension->name }}</td>
                        <td>{{ $question->rn }}</td>
                        <td>{{ $question->question_text }}</td>
                        <td>
                            <a href="{{ route('dashboard.psikotestfree.question.edit', $question->id) }}"
                                class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('dashboard.psikotestfree.question.destroy', $question->id) }}"
                                method="POST" style="display:inline-block;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this question?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
