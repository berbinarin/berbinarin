@extends('moduls.dashboard.layouts.main', [
    'title' => 'Edit - Position Job Descriptions Management',
    'active' => 'Dashboard',
    'modul' => 'Positions Descriptions',
])

@section('content-dashboard')
    <section>
        <div class="flex">
            <div class="sm:px-6 w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="">
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Edit Data Position Job Descriptions </p>
                        <p class="w-2/4 text-disabled">Dashboard > <a
                                href="{{ route('dashboard.positions.descriptions') }}">Positions Descriptions</a>
                            > Edit</p>
                    </div>
                </div>
                <form action="{{ route('JobDecription.update', $HiringPosisitonsJobDescriptionment->id) }}"
                    class="flex flex-col gap-1" method="post">
                    @csrf
                    @method('PUT')
                    <div class="flex gap-1">
                        <div class="mb-1 pt-0 flex-1">
                            <label for="position_id" class="text-blueGray-600 text-base">Nama Posisi</label>
                            <select id="position_id" name="position_id" placeholder="Placeholder"
                                class="px-3 py-3 appearance-none placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                <option value="Default">Pilih Posisi</option>
                                @forelse ($HiringPosisitons as $item)
                                    @if ($item->id === $HiringPosisitonsJobDescriptionment->position_id)
                                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                @empty
                                    <option>Tidak ada position lain di table </option>
                                @endforelse

                            </select>
                        </div>

                    </div>

                    <div class="mb-1 pt-0 w-full">
                        <label for="job_description" class="text-blueGray-600 text-base">Job Description</label>
                        <input id="job_description" name="job_description" type="text" placeholder="Job Description"
                            value="{{ $HiringPosisitonsJobDescriptionment->job_description }}"
                            class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                    </div>

                    <!--footer-->
                    <div class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">

                        <button type="submit" name="submit"
                            class="focus:ring-2  mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class="text-base font-semibold leading-none text-white">Simpan Data</p>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
