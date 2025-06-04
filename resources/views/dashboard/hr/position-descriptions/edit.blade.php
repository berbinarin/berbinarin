@extends(
    "dashboard.layouts.app",
    [
        "title" => "Edit - Position Job Descriptions Management",
    ]
)

@section("content")
    <section>
        <div class="flex">
            <div class="w-full sm:px-6">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="">
                        <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Edit Data Position Job Descriptions</p>
                        <p class="w-2/4 text-disabled">
                            Dashboard >
                            <a href="{{ route("dashboard.position-descriptions.index") }}">Positions Descriptions</a>
                            > Edit
                        </p>
                    </div>
                </div>
                <form action="{{ route("dashboard.position-descriptions.update", $HiringPosisitonsJobDescriptionment->id) }}" class="flex flex-col gap-1" method="post">
                    @csrf
                    @method("PUT")
                    <div class="flex gap-1">
                        <div class="mb-1 flex-1 pt-0">
                            <label for="position_id" class="text-blueGray-600 text-base">Nama Posisi</label>
                            <select id="position_id" name="position_id" placeholder="Placeholder" class="placeholder-blueGray-300 text-blueGray-600 relative w-full appearance-none rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                <option value="Default">Pilih Posisi</option>
                                @forelse ($HiringPosisitons as $item)
                                    @if ($item->id === $HiringPosisitonsJobDescriptionment->position_id)
                                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                @empty
                                    <option>Tidak ada position lain di table</option>
                                @endforelse
                            </select>
                        </div>
                    </div>

                    <div class="mb-1 w-full pt-0">
                        <label for="job_description" class="text-blueGray-600 text-base">Job Description</label>
                        <textarea id="job_description" name="job_description" placeholder="Job Description" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-12 text-base shadow outline-none focus:outline-none focus:ring">{{ $HiringPosisitonsJobDescriptionment->job_description }}</textarea>
                    </div>

                    <!--footer-->
                    <div class="border-blueGray-200 flex items-center justify-end rounded-b border-t border-solid pt-3">
                        <button type="submit" name="submit" class="mt-4 inline-flex items-start justify-start rounded bg-primary px-6 py-3 hover:bg-primary focus:outline-none focus:ring-2 sm:mt-0">
                            <p class="text-base font-semibold leading-none text-white">Simpan Data</p>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
