<div class="container">
    <h1>Create User Internship</h1>
    <form action="{{ route('user_internships.store') }}" method="POST">
        @csrf
        @include('moduls.internship.form')
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>