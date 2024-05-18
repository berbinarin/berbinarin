<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Test Result</title>
</head>

<body>
    <h1>Test Result</h1>
    <p>Test ID: {{ $test->id }}</p>
    <p>User ID: {{ $user->id }}</p>

    <div class="progress mb-4">
        Agreeableness:
        <div class="progress-bar" role="progressbar" style="width: {{ $result->agreeableness }}%;"
            aria-valuenow="{{ $result->agreeableness }}" aria-valuemin="0" aria-valuemax="100">
            {{ round($result->agreeableness) }}%
        </div>
    </div>
    <div class="progress mb-4">
        Conscientiousness:
        <div class="progress-bar" role="progressbar" style="width: {{ $result->conscientiousness }}%;"
            aria-valuenow="{{ $result->conscientiousness }}" aria-valuemin="0" aria-valuemax="100">
            {{ round($result->conscientiousness) }}%
        </div>
    </div>
    <div class="progress mb-4">
        Extraversion:
        <div class="progress-bar" role="progressbar" style="width: {{ $result->extraversion }}%;"
            aria-valuenow="{{ $result->extraversion }}" aria-valuemin="0" aria-valuemax="100">
            {{ round($result->extraversion) }}%
        </div>
    </div>
    <div class="progress mb-4">
        Neuroticism:
        <div class="progress-bar" role="progressbar" style="width: {{ $result->neuroticism }}%;"
            aria-valuenow="{{ $result->neuroticism }}" aria-valuemin="0" aria-valuemax="100">
            {{ round($result->neuroticism) }}%
        </div>
    </div>
    <div class="progress mb-4">
        Openness:
        <div class="progress-bar" role="progressbar" style="width: {{ $result->openness }}%;"
            aria-valuenow="{{ $result->openness }}" aria-valuemin="0" aria-valuemax="100">
            {{ round($result->openness) }}%
        </div>
    </div>
    {{-- <p>Agreeableness: {{ $result->agreeableness }} %</p>
    <p>Conscientiousness: {{ $result->conscientiousness }} %</p>
    <p>Extraversion: {{ $result->extraversion }} %</p>
    <p>Neuroticism: {{ $result->neuroticism }} %</p>
    <p>Openness: {{ $result->openness }} %</p> --}}

    <form action="{{ route('feedback.show', ['test_id' => $test->id, 'user_id' => $user->id]) }}" method="GET">
        @csrf
        <button type="submit">Proceed to Feedback</button>
    </form>
</body>

</html>
