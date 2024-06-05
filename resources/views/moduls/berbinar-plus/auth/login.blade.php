<form method="POST" action=" {{ route('berbinarplus.login.post') }} ">
    @csrf
    <input type="email" 
           id="email" 
           name="email" 
           placeholder="Email" required>
    <input type="password" 
           id="password" 
           name="password" 
           placeholder="Password" required>
    <input type="submit">
</form>