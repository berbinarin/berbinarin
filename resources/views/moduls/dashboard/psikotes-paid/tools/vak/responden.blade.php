<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th style="text-align: center">No</th>
                <th style="text-align: center">User</th>
                <th style="text-align: center">Date</th>
                <th style="text-align: center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($respondens as $user => $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->userPsikotestPaid->fullname }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                    <td>
                        {{-- <a href="">Lihat Jawaban</a> --}}
                        <a href="{{ route('dashboard.psikotespaid.vak.detail-answer', $item->id) }}"
                            class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-0 inline-flex items-start justify-start p-3 focus:outline-none rounded">
                            <p class="text-primary font-semibold">Lihat Jawaban</p>
                            <i class='bx bx-right-arrow-alt mt-1 text-primary'></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
