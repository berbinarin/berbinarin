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
        <h1>Update HiringPositions</h1>
        <div class="card" style="margin-top: 40px">

            <form method="POST" action="/HiringPositions/{{ $Hiring_Positions->id }}" style="padding: 50px">
                @csrf
                @method("Put")
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{ $Hiring_Positions->name }}">
                  </div>
                <div class="mb-3">
                <label for="Type">Type:</label>
                <select name="type" id="Type">
                    
                        <option value="Internship">Internship</option>
                        <option value="Fulltime">Fulltime</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Contract">Contract</option> 
                        <option value="Freelance">Freelance</option>
                     
                     
                </select>
                </div>
                <div class="mb-3">
                    <label for="positions">Positions:</label>
                    <select name="positions" id="positions">
                        <option value="Staff">Staff</option>
                        <option value="Manajer">Manajer</option>
                        <option value="Researcher">Researcher</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="location">Location:</label>
                        <select name="location" id="location">
                            <option value="Remote">Remote</option>
                            <option value="Surabaya">Surabaya</option>
                                
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="link" aria-describedby="emailHelp" value="{{ $Hiring_Positions->link }}">
                      </div>

                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>