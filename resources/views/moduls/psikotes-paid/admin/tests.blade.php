<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Tests</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4 text-center">Tests for {{ $user->name }}</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow text-center">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200 border-b border-gray-300">No</th>
                        <th class="py-2 px-4 bg-gray-200 border-b border-gray-300">Tool ID</th>
                        <th class="py-2 px-4 bg-gray-200 border-b border-gray-300">Created At</th>
                        <th class="py-2 px-4 bg-gray-200 border-b border-gray-300">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @foreach($tests as $test)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $i }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $test->psikotestTool->name }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $test->created_at }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                <form action="{{ route('admin.test.showResult') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="name" value="{{ $test->psikotestTool->name }}">
                                    <input type="hidden" name="id" value="{{ $test->id }}">
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Show Result
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php    $i++ ?>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4 text-center">
            <a href="{{ route('psikotest-tools.index') }}"
                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
        </div>
    </div>

</body>

</html>