<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Results</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4 text-center">Test Results</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow text-center">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-200 border-b border-gray-300">No</th>
                    <th class="py-2 px-4 bg-gray-200 border-b border-gray-300">Question</th>
                    <th class="py-2 px-4 bg-gray-200 border-b border-gray-300">Answer</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                @foreach($answers as $answer)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $i }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $answer->questionSsct->question }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $answer->answer }}</td>
                    </tr>
                    <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4 text-center">
        <a href="{{ url()->previous() }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>
</div>

</body>
</html>
