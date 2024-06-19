<div class="container">
    <h1>User Internships</h1>
    <a href="{{ route('user_internships.create') }}" class="btn btn-primary">Create New Internship</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Nama Lengkap</th>
                <th>Nama Panggilan</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($internships as $internship)
                <tr>
                    <td>{{ $internship->id }}</td>
                    <td>{{ $internship->email }}</td>
                    <td>{{ $internship->nama_lengkap }}</td>
                    <td>{{ $internship->nama_panggilan }}</td>
                    <td>{{ $internship->tanggal_lahir }}</td>
                    <td>
                        <a href="{{ route('user_internships.show', $internship->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('user_internships.edit', $internship->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('user_internships.destroy', $internship->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>