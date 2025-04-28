<div class="flex gap-4 profile-slide">
    {{-- Loop untuk menampilkan gambar dari database --}}
    @foreach($listImage as $image)
        <div class="bg-primary rounded-full size-14 lg:size-20 overflow-hidden">
            <img 
                src="{{ asset('storage/' . $image) }}" 
                alt="profile image"
                class="object-cover"
            />
        </div>
    @endforeach

    {{-- Fallback untuk menampilkan gambar default jika kurang dari 35 --}}
    @for($i = count($listImage); $i < 35; $i++)
        <div class="bg-primary rounded-full size-14 lg:size-20 overflow-hidden">
            <img
                src="{{ asset('assets/images/landing/karir/profile-dummy.jpeg') }}"
                alt="default profile"
                class="object-cover"
            />
        </div>
    @endfor
</div>