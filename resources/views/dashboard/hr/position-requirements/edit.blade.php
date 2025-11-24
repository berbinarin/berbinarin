@extends(
    "dashboard.layouts.app",
    [
        "title" => "Edit - Position Requirements Management",
    ]
)

@section("content")
<section class="flex w-full">
    <div class="flex w-full flex-col">
        <div class="py-4 md:pb-7 md:pt-12">
            <div class="">
                <div class="mb-2 flex items-center gap-2">
                    <a href="{{ route('dashboard.position-requirements.index') }}">
                        <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.webp') }}" alt="Back Btn" />
                    </a>
                    <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Edit Persyaratan Posisi</p>
                </div>
                <p class="w-full text-disabled">
                    Admin dapat mengubah persyaratan posisi yang akan ditampilkan pada situs karir Berbinarin.
                </p>
            </div>
        </div>
        <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
            <form action="{{ route('dashboard.position-requirements.update', $HiringPosisitonsRequirement->id) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-4 mt-4 overflow-x-auto">
                    <div class="mb-8">
                        <h1 class="text-2xl font-bold">Data Persyaratan Posisi</h1>
                        <div class="grid grid-cols-1 gap-6 pt-5 md:grid-cols-2">
                            <!-- Nama Posisi -->
                            <div class="flex flex-col gap-2 md:col-span-2">
                                <p class="flex gap-1 text-lg font-semibold">
                                    Nama Posisi
                                    <i class="bx bxs-star text-xs text-red-600"></i>
                                </p>
                                <select id="position_id" name="position_id" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                    <option value="" disabled>Pilih Posisi</option>
                                    @foreach ($HiringPosisitons as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == $HiringPosisitonsRequirement->position_id ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Requirement -->
                            <div class="flex flex-col gap-2 md:col-span-2">
                                <p class="flex gap-1 text-lg font-semibold">
                                    Persyaratan
                                    <i class="bx bxs-star text-xs text-red-600"></i>
                                </p>
                                <textarea id="requirement" name="requirement" rows="5" placeholder="Persyaratan" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required>{{ old('requirement', $HiringPosisitonsRequirement->requirement) }}</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Tombol Submit -->
                    <div class="mt-8 flex justify-end border-t-2 border-t-gray-400 pt-5">
                        <button type="submit" class="flex items-center gap-2 rounded-xl bg-blue-500 px-3 py-2 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">Simpan Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
