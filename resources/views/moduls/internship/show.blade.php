<div class="container">
    <h1>Show User Internship</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $userInternship->nama_lengkap }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $userInternship->email }}</p>
            <p class="card-text"><strong>Nama Panggilan:</strong> {{ $userInternship->nama_panggilan }}</p>
            <p class="card-text"><strong>Tanggal Lahir:</strong> {{ $userInternship->tanggal_lahir }}</p>
            <p class="card-text"><strong>No WhatsApp:</strong> {{ $userInternship->no_whatsapp }}</p>
            <!-- Add other fields as needed -->
            <a href="{{ route('user_internships.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>