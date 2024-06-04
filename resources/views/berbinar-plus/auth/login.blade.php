<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BerbinarPlus Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="{{ route('berbinarplus.login.post') }}">
        @csrf
        <div>
            <label for="email">E-Mail Address:</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div>
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        
        <div>
            <label for="password">Password:</label>
            <input id="password" type="password" name="password" required>
            @error('password')
                <div>
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        
        <div>
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">Remember Me</label>
        </div>
        
        <div>
            <button type="submit">Login</button>
        </div>
        
        @if (Route::has('password.request'))
            <div>
                <a href="{{ route('password.request') }}">Forgot Your Password?</a>
            </div>
        @endif
    </form>
</body>
</html>
