@extends('dashboard.layouts.app', [
    'title' => 'Data',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Free Data',
])

@section('content')
    <div class="container">
        <h1>Data Psikotes Free</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Birth Date</th>
                    <th>Email</th>
                    <th>Test Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testData as $test)
                    @foreach ($test->users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->gender == 'Male' ? 'Laki-laki' : 'Perempuan' }}</td>
                            <td>{{ $user->date_of_birth }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $test->test_date }}</td>
                            <td>
                                <a href="{{ route('dashboard.psikotestfree.data.show', $test->id) }}">View</a> |
                                <a href="{{ route('dashboard.psikotestfree.data.edit', $user->id) }}">Edit</a> |
                                <form action="{{ route('dashboard.psikotestfree.data.destroy', $user->id) }}" method="POST"
                                    style="display:inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
