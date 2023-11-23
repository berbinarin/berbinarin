<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>

    <div class="container">
        <br><br>
        <h1>Get User By id</h1>
        <div class="card" style="margin-top: 40px">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">email</th>
                    <th scope="col">role</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <tr>
                      <th scope="row">{{ $user->id }}</th>
                      <td>{{ $user->username }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->role }}</td>
                    </tr>
                        
                    
                 
                </tbody>
              </table>

            </div>
            <br><br>
            
            <form action="/user/{{ $user->id }}"  method="POST" >
                @csrf
                @method('Delete')

                <input type="submit" value="Delete" class="btn btn-danger">

            </form>
            
    </div>
    

</body>
</html>
