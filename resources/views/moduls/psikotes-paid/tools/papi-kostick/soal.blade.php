<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>All Questions</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Question A</th>
                    <th>Question B</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                    <tr>
                        <td>{{ $question->id }}</td>
                        <td>{{ $question->a }}</td>
                        <td>{{ $question->b }}</td>
                        <td>{{ $question->created_at }}</td>
                        <td>
                            <a href="{{ route('papi-kostick.edit-soal', $question->id) }}"
                                class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
