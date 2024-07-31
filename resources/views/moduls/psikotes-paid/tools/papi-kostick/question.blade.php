<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAPI Kostick Test</title>
    <!-- Link to Bootstrap CSS for styling (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>PAPI Kostick Test</h1>
        <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" style="width: {{ $progress }}%;"
                aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <form method="POST"
            action="{{ route('psikotest-paid.papi-kostick.submit', ['id' => $id, 'question_order' => $question_order]) }}">
            @csrf
            <div class="card mb-3">
                <div class="card-body">
                    <p>Pilih salah satu:</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer" id="answer_a_{{ $question->id }}"
                            value="a" required>
                        <label class="form-check-label" for="answer_a_{{ $question->id }}">
                            {{ $question->a }}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer" id="answer_b_{{ $question->id }}"
                            value="b">
                        <label class="form-check-label" for="answer_b_{{ $question->id }}">
                            {{ $question->b }}
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Link to Bootstrap JS for optional JavaScript (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
