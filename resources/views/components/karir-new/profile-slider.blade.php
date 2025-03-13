<div class="flex gap-4 profile-slide">
    {{--start first loop--}}
    @foreach($listImage as $image)
        <div class="bg-primary rounded-full size-14 lg:size-20 overflow-hidden">
            <img src="{{ asset("storage/".$image)}}" alt="profile image"
                 class="object-cover">
        </div>
    @endforeach
    {{--for defualt fallback if there is not enough motm --}}
    {{--minimum is 35 images--}}
    @for($i = count($listImage); $i <= 35; $i++)
        <div class="bg-primary rounded-full size-14 lg:size-20 overflow-hidden">
            <img
                src="{{ asset("assets/images/landing/karir/profile-dummy.jpeg") }}"
                alt="default profile" class="object-cover">
        </div>
    @endfor
    {{--end first loop--}}
    {{--start first loop--}}
    @foreach($listImage as $image)
        <div class="bg-primary rounded-full size-14 lg:size-20 overflow-hidden">
            <img src="{{ asset("storage/".$image)}}" alt="profile image"
                 class="object-cover">
        </div>
    @endforeach
    @for($i = count($listImage); $i <= 35; $i++)
        <div class="bg-primary rounded-full size-14 lg:size-20 overflow-hidden">
            <img
                src="{{ asset("assets/images/landing/karir/profile-dummy.jpeg") }}"
                alt="defualt profile" class="object-cover">
        </div>
    @endfor
</div>
