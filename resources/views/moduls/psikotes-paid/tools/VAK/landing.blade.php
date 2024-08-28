<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VAK Psikotest</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        p {
            margin-bottom: 1rem;
        }

        .btn {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Instruksi Tes VAK</h1>
        <p>Bacalah setiap kalimat dengan hati-hati lalu pertimbangkan apakah pernyataan tersebut menggambarkan diri
            Anda. Setiap pernyataan akan tersedia tiga opsi pilihan jawaban, pilihlah salah satu opsi jawaban yang
            sesuai dengan gambaran diri Anda.</p>
        <p><strong>Keterangan pilihan jawaban:</strong></p>
        <ul>
            <li>1 : Jika pernyataan <strong>"TIDAK SESUAI"</strong> dengan gambaran diri Anda.</li>
            <li>2 : Jika pernyataan <strong>"CUKUP SESUAI"</strong> dengan gambaran diri Anda.</li>
            <li>3 : Jika pernyataan <strong>"SANGAT SESUAI"</strong> dengan gambaran diri Anda.</li>
        </ul>
        <p>Tidak ada benar atau salah dalam pengerjaan soal ini, jadi silakan Anda menjawab sejujur-jujurnya.</p>

        <div>
            <form action="{{ route('psikotest-paid.VAK.start') }}" method="POST">
                @csrf
                <button type="submit" class="btn">Selanjutnya</button>
            </form>
        </div>
    </div>
</body>

</html>
