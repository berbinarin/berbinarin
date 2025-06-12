@extends(
    "dashboard.layouts.app",
    [
        "title" => "Edit - Positions Management",
    ]
)

@section("content")
<section class="flex w-full">
    <div class="flex w-full flex-col">
        <div class="py-4 md:pb-7 md:pt-12">
            <div class="">
                <div class="mb-2 flex items-center gap-2">
                    <a href="{{ route('dashboard.positions.index') }}">
                        <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                    </a>
                    <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Edit Data Positions</p>
                </div>
                <p class="w-3/4 text-disabled">
                    Admin dapat mengubah data posisi hiring yang akan ditampilkan pada website careers Berbinarin.
                </p>
            </div>
        </div>
        <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
            <form action="{{ route('dashboard.positions.update', $position->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4 mt-4 overflow-x-auto">
                    <div class="mb-8">
                        <h1 class="text-2xl font-bold">Data Posisi</h1>
                        <div class="grid grid-cols-1 gap-6 pt-5 md:grid-cols-2">
                            <!-- Nama Posisi -->
                            <div class="flex flex-col gap-2">
                                <p class="flex gap-1 text-lg font-semibold">
                                    Nama Posisi
                                    <i class="bx bxs-star text-xs text-red-600"></i>
                                </p>
                                <input id="name" name="name" type="text" placeholder="Human Resource Development" value="{{ old('name', $position->name) }}" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required />
                            </div>
                            <!-- Tipe Pekerjaan -->
                            <div class="flex flex-col gap-2">
                                <p class="flex gap-1 text-lg font-semibold">
                                    Tipe Pekerjaan
                                    <i class="bx bxs-star text-xs text-red-600"></i>
                                </p>
                                <select id="type" name="type" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                    <option value="" disabled {{ !$position->type ? 'selected' : '' }}>Pilih Tipe Pekerjaan</option>
                                    <option value="Internship" {{ $position->type == "Internship" ? 'selected' : '' }}>Internship</option>
                                    <option value="Fulltime" {{ $position->type == "Fulltime" ? 'selected' : '' }}>Fulltime</option>
                                    <option value="Part Time" {{ $position->type == "Part Time" ? 'selected' : '' }}>Part Time</option>
                                    <option value="Contract" {{ $position->type == "Contract" ? 'selected' : '' }}>Contract</option>
                                    <option value="Freelancer" {{ $position->type == "Freelancer" ? 'selected' : '' }}>Freelancer</option>
                                </select>
                            </div>
                            <!-- Jabatan -->
                            <div class="flex flex-col gap-2">
                                <p class="flex gap-1 text-lg font-semibold">
                                    Jabatan
                                    <i class="bx bxs-star text-xs text-red-600"></i>
                                </p>
                                <select id="positions" name="positions" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                    <option value="" disabled {{ !$position->positions ? 'selected' : '' }}>Pilih Jenis Jabatan</option>
                                    <option value="Staff" {{ $position->positions == "Staff" ? 'selected' : '' }}>Staff</option>
                                    <option value="Manager" {{ $position->positions == "Manager" ? 'selected' : '' }}>Manager</option>
                                    <option value="Researcher" {{ $position->positions == "Researcher" ? 'selected' : '' }}>Researcher</option>
                                </select>
                            </div>
                            <!-- Lokasi -->
                            <div class="flex flex-col gap-2">
                                <p class="flex gap-1 text-lg font-semibold">
                                    Lokasi
                                    <i class="bx bxs-star text-xs text-red-600"></i>
                                </p>
                                <select id="location" name="location" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                    <option value="" disabled {{ !$position->location ? 'selected' : '' }}>Pilih Lokasi</option>
                                    <option value="Remote" {{ $position->location == "Remote" ? 'selected' : '' }}>Remote</option>
                                    <option value="Surabaya" {{ $position->location == "Surabaya" ? 'selected' : '' }}>Surabaya</option>
                                </select>
                            </div>
                            <!-- Divisi -->
                            <div class="flex flex-col gap-2 md:col-span-2">
                                <p class="flex gap-1 text-lg font-semibold">
                                    Divisi
                                    <i class="bx bxs-star text-xs text-red-600"></i>
                                </p>
                                <select id="divisi" name="divisi" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                    <option value="" disabled {{ !$position->divisi ? 'selected' : '' }}>Pilih Divisi</option>
                                    <option value="Web and Mobile Apps Developer" {{ $position->divisi == "Web and Mobile Apps Developer" ? 'selected' : '' }}>Web and Mobile Apps Developer</option>
                                    <option value="TikTok Creator" {{ $position->divisi == "TikTok Creator" ? 'selected' : '' }}>TikTok Creator</option>
                                    <option value="Secretary n Finance" {{ $position->divisi == "Secretary n Finance" ? 'selected' : '' }}>Secretary n Finance</option>
                                    <option value="Psychological Testing Product Management" {{ $position->divisi == "Psychological Testing Product Management" ? 'selected' : '' }}>Psychological Testing Product Management</option>
                                    <option value="Marketing Strategist dan Sales" {{ $position->divisi == "Marketing Strategist dan Sales" ? 'selected' : '' }}>Marketing Strategist dan Sales</option>
                                    <option value="IG Creator" {{ $position->divisi == "IG Creator" ? 'selected' : '' }}>IG Creator</option>
                                    <option value="Human Resource" {{ $position->divisi == "Human Resource" ? 'selected' : '' }}>Human Resource</option>
                                    <option value="Graphic Designer" {{ $position->divisi == "Graphic Designer" ? 'selected' : '' }}>Graphic Designer</option>
                                    <option value="Class Product Management" {{ $position->divisi == "Class Product Management" ? 'selected' : '' }}>Class Product Management</option>
                                    <option value="Counseling Product Management" {{ $position->divisi == "Counseling Product Management" ? 'selected' : '' }}>Counseling Product Management</option>
                                </select>
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
