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

  @if(session('error'))
  <div class="alert alert-danger">
      {{ session('error') }}
  </div>
  @endif

    <div class="container">
        <br><br>
        <h1>Get All Data Position Job Decription</h1>
        <div class="card" style="margin-top: 40px">

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Position_id</th>
                    <th scope="col">job_description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($hiring_position_job_descriptions as $item)
                    <tr>
                      <th scope="row">{{ $item->id }}</th>
                      <td>{{ $item->position_id }}</td>
                      <td>{{ $item->job_description }}</td>
                      <td><a href="JobDescription/{{ $item->id }}/edit">Edit</a></td>
                      <td><a href="JobDescription/{{ $item->id }}">Read</a></td>
                      
                    </tr>
                        
                    @empty
                        
                    @endforelse
                 
                </tbody>
              </table>
              <br><br>
        </div>
        <br><br>
        <a href="/JobDescription/create" class="btn btn-success">Tambah data</a>
            <a href="/dashboard/admin" class="btn btn-success">Back</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>