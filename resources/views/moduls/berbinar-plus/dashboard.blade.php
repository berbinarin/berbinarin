<h1>hallo anda login!</h1>
<form action=" {{ route('berbinarplus.logout.post') }} " method="POST">
    @csrf
    <a href=" {{ route('berbinarplus.logout.post') }} " class=" flex flex-col items-center">
        <button type="submit" class="items-center flex gap-2">
            <i class='bx bx-log-out text-lg'></i>
            <span class="text-base text-center">Logout</span>
        </button>
    </a>

</form>