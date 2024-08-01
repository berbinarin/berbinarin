<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Esai</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg text-center">
        <h1 class="text-2xl font-bold mb-4">Tes Esai</h1>
        <h2 class="text-xl mb-4">Soal {{ session('current_question_number', 1) }} dari 6</h2>
        <form action="{{ route('psikotest-paid.tool.Tes Esai.submitAnswer') }}" method="POST">
            @csrf
            <input type="hidden" name="test_id" value="{{ $test->id }}">
            <input type="hidden" name="question_id" value="{{ $questions[session('current_question_number', 1) - 1]->id }}">
            <input type="hidden" name="current_question_number" value="{{ session('current_question_number', 1) }}">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="question">
                    {{ $questions[session('current_question_number', 1) - 1]->question }}
                </label>
                <textarea name="answer" rows="4" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Next
            </button>
        </form>
    </div>
</body>
</html>
