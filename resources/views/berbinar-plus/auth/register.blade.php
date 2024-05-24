<form method="POST" action="{{ route('berbinarplus.register.post') }}">
    @csrf
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>
    <div>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
    </div>
    <div>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
    </div>
    <div>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
    </div>
    <div>
        <label for="wa_number">WhatsApp Number:</label>
        <input type="text" id="wa_number" name="wa_number" required>
    </div>
    <div>
        <label for="last_education">Last Education:</label>
        <input type="text" id="last_education" name="last_education" required>
    </div>
    <div>
        <label for="knowing_source">Knowing Source:</label>
        <input type="text" id="knowing_source" name="knowing_source" required>
    </div>
    <div>
        <button type="submit">Register</button>
    </div>
</form>
