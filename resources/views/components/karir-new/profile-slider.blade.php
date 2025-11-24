{{-- filepath: c:\laragon\www\kerja\berbinarin\resources\views\components\karir-new\profile-slider.blade.php --}}
<div class="flex gap-4 profile-slide">
    {{-- Start first loop --}}
    @foreach($listImage as $image)
        <div class="bg-primary rounded-full size-14 lg:size-20 overflow-hidden">
            <img src="{{ $image }}" alt="profile image" class="object-cover" loading="lazy">
        </div>
    @endforeach

    {{-- Default fallback if there are not enough images --}}
    {{-- Minimum is 35 images --}}
    @for($i = count($listImage); $i < 35; $i++)
        <div class="bg-primary rounded-full size-14 lg:size-20 overflow-hidden">
            <img src="\assets\images\landing\keluarga-berbinar\dummy.webp" alt="default profile" class="object-cover" loading="lazy">
        </div>
    @endfor
    {{-- End first loop --}}
</div>
