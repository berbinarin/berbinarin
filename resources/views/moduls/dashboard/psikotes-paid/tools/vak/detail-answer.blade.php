<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Jawaban VAK</title>
    <style>
        /* Style untuk menyembunyikan jawaban secara default */
        .answer-list {
            display: none;
            margin-left: 20px;
        }

        /* Style untuk membuat kategori menjadi link */
        .category-title {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>Hasil Psikotest</h1>
    <p>Visual: {{ $result->visual }}</p>
    <p>Auditori: {{ $result->auditori }}</p>
    <p>Kinestetik: {{ $result->kinestetik }}</p>
    <p>Kecenderungan Belajar: {{ $description }}</p>

    <h2>Jawaban Berdasarkan Kategori</h2>

    @foreach ($answers as $categoryId => $categoryAnswers)
        <h3 class="category-title" onclick="toggleAnswerList({{ $categoryId }})">
            Kategori {{ $categoryId }}
        </h3>
        <ul class="answer-list" id="answer-list-{{ $categoryId }}">
            @foreach ($categoryAnswers as $answer)
                {{-- <li>Pertanyaan: {{ $answer->questionVak->question_text }}</li> --}}
                <li>Jawaban: {{ $answer->answer }}</li>
            @endforeach
        </ul>
    @endforeach

    <script>
        function toggleAnswerList(categoryId) {
            const answerList = document.getElementById('answer-list-' + categoryId);
            // Toggle display block/none untuk memperlihatkan atau menyembunyikan jawaban
            if (answerList.style.display === 'none' || answerList.style.display === '') {
                answerList.style.display = 'block';
            } else {
                answerList.style.display = 'none';
            }
        }
    </script>
</body>

</html>
