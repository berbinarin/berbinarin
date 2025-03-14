<div>
    <h2 class="text-3xl font-bold text-primary-alt">Data Diri</h2>
    <p class="pt-5 pb-2 text-gray-400 font-semibold">Foto Pribadi</p>
    <img src="/image/{{ $staff->photo }}" loading="lazy"
        class="max-h-28 max-w-28 w-28 h-28 object-cover object-center rounded-lg" />
    <ul class="font-semibold pt-5 grid grid-cols-3 gap-x-10 gap-y-5">
        <li>
            <p class="text-gray-400">Nama Lengkap</p>
            <p class="text-black">{{ $staff->name }}</p>
        </li>
        {{-- <li>
            <p class="text-gray-400">Asal Universitas</p>
            <p class="text-black">{{ $staff->university ?? '-' }}</p>
        </li>
        <li>
            <p class="text-gray-400">Email</p>
            <p class="text-black">{{ $staff->email ?? '-' }}</p>
        </li>
        <li>
            <p class="text-gray-400">No. Telp</p>
            <p class="text-black">{{ $staff->phone ?? '-' }}</p>
        </li> --}}
        <li>
            <p class="text-gray-400">LinkedIn</p>
            <p class="text-black">{{ $staff->linkedin }}</p>
        </li>
        {{-- <li>
            <p class="text-gray-400">Instagram</p>
            <p class="text-black">{{ $staff->instagram ?? '-' }}</p>
        </li> --}}
    </ul>
</div>