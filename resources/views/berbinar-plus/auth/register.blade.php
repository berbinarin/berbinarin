<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
</head>
<body>
    <h2>Register</h2>
    <form action="{{ route('berbinar.register.post') }}" method="post">
        <!-- Assuming you are using Laravel, include CSRF token for security -->
        @csrf
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Usia:</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
