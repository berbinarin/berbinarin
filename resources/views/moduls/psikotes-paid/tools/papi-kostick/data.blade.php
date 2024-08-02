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
        <h1>Respondents List</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($respondens as $responden)
                    <tr>
                        <td>{{ $responden->userPsikotestPaid->id }}</td>
                        <td>{{ $responden->userPsikotestPaid->name }}</td>
                        <td>{{ $responden->userPsikotestPaid->email }}</td>
                        <td>
                            <a href="{{ route('psikotest-paid.papi-kostick.detail', $responden->id) }}"
                                class="btn btn-primary">View
                                Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
