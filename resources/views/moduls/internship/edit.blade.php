<div class="container">
    <h1>Edit User Internship</h1>
    <form action="{{ route('user_internships.update', $userInternship->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('moduls.internship.form')
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>