<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('psikotest-paid.postRegPage1') }}" method="POST">
        @csrf
        <input type="text" name="fullname" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <select name="gender" required>
            <option value="" disabled selected>Select Gender</option>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Peremouan</option>
        </select>
        <input type="text" name="domicile" placeholder="Domicile" required>
        <input type="number" name="age" placeholder="Age" required>
        <input type="text" name="phone_number" placeholder="Phone Number" required>
        <button type="submit">Next</button>
    </form>
</body>

</html>
