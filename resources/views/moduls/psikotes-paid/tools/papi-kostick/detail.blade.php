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
        <h1>Respondent Details</h1>
        <div class="card">
            <div class="card-header">
                Respondent Information
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $responden->userPsikotestPaid->name }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $responden->userPsikotestPaid->email }}</p>
                <!-- Add other respondent details as needed -->
            </div>
        </div>

        <h2>Results</h2>
        @if ($result)
            <div class="card mt-4">
                <div class="card-header">
                    PAPI Kostick Results
                </div>
                <div class="card-body">
                    @foreach ($descriptions as $key => $description)
                        <p><strong>Description {{ $key }}:</strong> {{ $description }}</p>
                    @endforeach
                </div>
            </div>
        @else
            <p>No results found for this respondent.</p>
        @endif

        <h2>Answers</h2>
        @if ($answers->isNotEmpty())
            <div class="card mt-4">
                <div class="card-header">
                    User Answers
                </div>
                <div class="card-body">
                    @foreach ($answers as $answer)
                        <p>
                            {{-- <strong>Question 1:</strong> {{ $answer->questionPapiKostick->a }}
                            <br>
                            <strong>Question 2:</strong> {{ $answer->questionPapiKostick->b }}
                            <br> --}}
                            <strong>Question {{ $loop->iteration }}:</strong>
                            {{ $answer->questionPapiKostick->question }}
                            <strong>Answer:</strong>
                            {{ $answer->answer == 1 ? $answer->questionPapiKostick->a : $answer->questionPapiKostick->b }}
                        </p>
                    @endforeach
                </div>
            </div>
        @else
            <p>No answers found for this respondent.</p>
        @endif
    </div>
</body>

</html>
