<!-- resources/views/test.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Test Page</title>
</head>

<body>
    <form action="{{ route('test.store') }}" method="POST">
        @csrf
        <button type="submit">Mulai Test</button>
    </form>
</body>

</html>
