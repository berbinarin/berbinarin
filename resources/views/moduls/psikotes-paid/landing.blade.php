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

                        <hr>

                        <h4 class="text-center mt-4">Available Tools</h4>
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                            @foreach($tools as $tool)
                                <div class="col">
                                    <div class="card h-100">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $tool->name }}</h5>
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tokenModal" data-tool-id="{{ $tool->id }}">Use Tool</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Token Modal -->
    <div class="modal fade" id="tokenModal" tabindex="-1" aria-labelledby="tokenModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tokenModalLabel">Enter Tool Token</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="tokenForm" method="POST" action="{{ route('psikotest-tools.verify-token') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="token" class="form-label">Token</label>
                            <input type="text" class="form-control" id="token" name="token" required>
                            <input type="hidden" id="toolId" name="tool_id">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var tokenModal = document.getElementById('tokenModal');
            tokenModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget;
                var toolId = button.getAttribute('data-tool-id');
                var modalToolIdInput = tokenModal.querySelector('#toolId');
                modalToolIdInput.value = toolId;
            });
        });
    </script>
</body>
</html>
