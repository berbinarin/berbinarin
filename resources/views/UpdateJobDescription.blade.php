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
        <h1>Update Job Descriptions</h1>
        <div class="card" style="margin-top: 40px">

            <form method="POST" action="/JobDecription/{{ $hiring_position_job_descriptions->id }}" style="padding: 50px">
                @csrf
                @method('put')
                <div class="mb-3">
                  <label for="position_id">Position_id:</label>
                  <select name="position_id" id="position_id">
                    @forelse ($HiringPositions as $item)
                    <option value="{{ $item->id }}" @if($item->id == $hiring_position_job_descriptions->position_id) selected @endif>
                        {{ $item->name }}
                    </option>
                @empty
                    <!-- You can add a default option or handle the empty case as needed -->
                @endforelse
                      
                  </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">JobDecription</label>
                    <textarea name="job_description" id=""  class="form-control" cols="30" rows="10">{{ $hiring_position_job_descriptions->job_description }}</textarea>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
               
              </form>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>