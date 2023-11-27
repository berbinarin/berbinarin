<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
  <div class="alert alert-danger">
      {{ session('error') }}
  </div>
  @endif
  

    <div class="container">
        <br><br>
        <h1>Register Fags</h1>
        <div class="card" style="margin-top: 40px">

            <form method="POST" action="/Fags" style="padding: 50px">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Question</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="question" aria-describedby="emailHelp">
                </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Answer</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="answer" aria-describedby="emailHelp">
                  </div>
               
                <div class="mb-3">
                <label for="service">Service:</label>
                <select name="service" id="service">
                    <option value="konseling">Konseling</option>
                    <option value="psikotes">Psikotes</option>
                    <option value="kelas">Kelas</option>
                    <option value="careers">Careers</option>
                    <option value="webinar">Webinar</option>
                    <option value="bisikan">Bisikan</option>
                    <option value="berbinar plus">Berbinar Plus</option>
                </select>
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>