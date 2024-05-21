<!-- resources/views/feedback/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Feedback</h2>
        <form action="{{ route('feedback.store', ['test_id' => $test_id, 'user_id' => $user_id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="experience">Pengalaman Anda:</label>
                <textarea id="experience" name="experience" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="opinion">Pendapat Anda:</label>
                <textarea id="opinion" name="opinion" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="suggestion">Saran Anda:</label>
                <textarea id="suggestion" name="suggestion" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="social_share">Bagikan di Media Sosial:</label>
                <textarea id="social_share" name="social_share" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Feedback</button>
        </form>
    </div>
@endsection
