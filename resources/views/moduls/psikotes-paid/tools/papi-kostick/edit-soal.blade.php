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
        <h1>Edit Question</h1>
        <form action="{{ route('papi-kostick.update-soal', $question->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="a">Question A</label>
                <input type="text" class="form-control" id="a" name="a" value="{{ $question->a }}"
                    required>
            </div>
            <div class="form-group">
                <label for="b">Question B</label>
                <input type="text" class="form-control" id="b" name="b" value="{{ $question->b }}"
                    required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</body>

</html>
