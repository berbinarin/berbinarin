<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('psikotest-paid.postRegPage2') }}" method="POST">
        @csrf
        <label for="service">Select Service</label>
        <select name="service" id="service" required>
            <option value="" disabled selected>Select Service</option>
            <option value="online">Online (dilakukan melalui Zoom)</option>
            <option value="offline">Offline (Hanya untuk di Surabaya)</option>
        </select>

        <label for="psikotest_type_id">Select Psikotest Type</label>
        <select name="psikotest_type_id" id="psikotest_type_id" required>
            <option value="" disabled selected>Select Psikotest Type</option>
            @foreach ($psikotestTypes as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
        </select>

        <label for="preference_schedule">Preference Schedule</label>
        <input type="datetime-local" name="preference_schedule" id="preference_schedule"
            placeholder="Preference Schedule" required>

        <button type="submit">Next</button>
    </form>
</body>

</html>
