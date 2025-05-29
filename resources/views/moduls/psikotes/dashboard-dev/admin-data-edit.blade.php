@extends('dashboard.layouts.app', [
    'title' => 'Data',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Free Data',
])

@section('content')
    <div class="container">
        <h1>Edit User</h1>
        @foreach ($testData->users as $user)
            <form action="{{ route('dashboard.psikotestfree.data.update', $user->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="Male" {{ $user->gender == 'Male' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Female" {{ $user->gender == 'Female' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date_of_birth">Date of Birth</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                        value="{{ $user->date_of_birth }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="test_date">Test Date</label>
                    <input type="date" class="form-control" id="test_date" name="test_date"
                        value="{{ $testData->test_date }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('dashboard.psikotestfree.data') }}" class="btn btn-secondary">Cancel</a>
            </form>
        @endforeach
    </div>
@endsection
