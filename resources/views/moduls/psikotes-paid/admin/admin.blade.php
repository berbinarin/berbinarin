<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psikotest Tools Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4 text-center">Psikotest Tools Admin Panel</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow text-center">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-200 border-b border-gray-300">No</th>
                    <th class="py-2 px-4 bg-gray-200 border-b border-gray-300">Name</th>
                    <th class="py-2 px-4 bg-gray-200 border-b border-gray-300">Token</th>
                    <th class="py-2 px-4 bg-gray-200 border-b border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
                @foreach($tools as $tool)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $i }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $tool->name }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $tool->token }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            <form action="{{ route('psikotest-tools.generate-token', $tool->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Generate Token</button>
                            </form>
                            <form action="{{ route('psikotest-tools.delete-token', $tool->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete Token</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
