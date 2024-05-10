<!-- resources/views/biodata/show.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Isi Biodata</title>
</head>

<body>
    <h1>Isi Biodata</h1>

    <!-- Tampilkan tanggal tes -->
    <p>Tanggal Tes: {{ $test->test_date }}</p>

    <form action="{{ route('biodata.store', ['test_id' => $test_id]) }}" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" required>

        <label for="gender">Jenis Kelamin:</label>
        <select name="gender" required>
            <option value="Male">Pria</option>
            <option value="Female">Wanita</option>
        </select>

        <label for="date_of_birth">Tanggal Lahir:</label>
        <input type="date" name="date_of_birth" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>
