<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>

<body>
    <h2>Feedback Form</h2>

    <form action="{{ route('feedback.store', ['user_id' => $user_id, 'test_id' => $test_id]) }}" method="POST">
        @csrf

        <label for="experience">Pengalaman:</label><br>
        <textarea name="experience" id="experience" rows="3"></textarea><br><br>

        <label for="opinion">Opini:</label><br>
        <textarea name="opinion" id="opinion" rows="3"></textarea><br><br>

        <label for="suggestion">Saran:</label><br>
        <textarea name="suggestion" id="suggestion" rows="3"></textarea><br><br>

        <label for="social_share">Berbagi di Media Sosial:</label><br>
        <textarea name="social_share" id="social_share" rows="3"></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>

</html>
