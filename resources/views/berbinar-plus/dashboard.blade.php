<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Halo {{ $user->first_name }}!</h1>
    <p>Selamat datang di dashboard.</p>
    <a href="{{ route('berbinarplus.logout') }}"
       onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ route('berbinarplus.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>
