<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container mx-auto mt-10">
        <div class="flex flex-col md:flex-row justify-around items-center">
            <div class="bg-white shadow-md rounded-lg p-5 m-5 w-full md:w-1/3">
                <h2 class="text-2xl font-bold text-center">Total User Psikotest</h2>
                <p class="text-center text-4xl mt-3">{{ $totalUserPsikotest }}</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-5 m-5 w-full md:w-1/3">
                <h2 class="text-2xl font-bold text-center">Total Questions</h2>
                <p class="text-center text-4xl mt-3">{{ $totalQuestion }}</p>
            </div>
        </div>
    </div>
</body>

</html>
