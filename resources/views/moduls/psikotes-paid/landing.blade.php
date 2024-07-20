<!-- resources/views/moduls/psikotes-paid/landing.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Haloo bro, {{ $user->fullname }}</h3>
                    </div>
                    <div class="card-body">
                        <p>Email: {{ $user->email }}</p>
                        <p>Gender: {{ $user->gender }}</p>
                        <p>Psikotest Type: {{ $user->psikotest_type_id }}</p>
                        <form method="POST" action="{{ route('psikotest-paid.logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
</body>
</html>
