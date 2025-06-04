@extends(
    "dashboard.layouts.app",
    [
        "title" => "Edit - Positions Management",
    ]
)

@section("content")
    <section>
        <div class="flex">
            <div class="w-full sm:px-6">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="">
                        <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Edit Data Position</p>
                        <p class="w-2/4 text-disabled">
                            Dashboard >
                            <a href="{{ route("dashboard.positions.index") }}">Positions</a>
                            > Edit
                        </p>
                    </div>
                </div>
                <form action="{{ route("dashboard.positions.update", $position->id) }}" class="flex flex-col gap-1" method="post">
                    @csrf
                    @method("PUT")
                    <div class="flex gap-1">
                        <div class="mb-1 w-full pt-0">
                            <label for="name" class="text-blueGray-600 text-base">Nama Posisi</label>
                            <input id="name" name="name" type="text" placeholder="Human Resource Development" value="{{ $position->name }}" class="placeholder-blueGray-300 text-blueGray-600 relative w-full rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring" />
                        </div>
                    </div>

                    <div class="flex gap-1">
                        <div class="mb-1 flex-1 pt-0">
                            <label for="type" class="text-blueGray-600 text-base">Tipe Pekerjaan</label>
                            <select id="type" name="type" placeholder="Placeholder" class="placeholder-blueGray-300 text-blueGray-600 relative mt-2 w-full appearance-none rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                <option value="Default">Pilih Tipe Pekerjaan</option>
                                <option value="Internship" @if(isset($position) && $position->type == "Internship") selected @endif>Internship</option>
                                <option value="Fulltime" @if(isset($position) && $position->type == "Fulltime") selected @endif>Fulltime</option>
                                <option value="Part Time" @if(isset($position) && $position->type == "Part Time") selected @endif>Part Time</option>
                                <option value="Contract" @if(isset($position) && $position->type == "Contract") selected @endif>Contract</option>
                                <option value="Freelancer" @if(isset($position) && $position->type == "Freelancer") selected @endif>Freelancer</option>
                            </select>
                        </div>
                        <div class="mb-1 flex-1 pt-0">
                            <label for="positions" class="text-blueGray-600 text-base">Jabatan</label>
                            <select id="positions" name="positions" placeholder="Placeholder" class="placeholder-blueGray-300 text-blueGray-600 relative mt-2 w-full appearance-none rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                <option value="Default">Pilih Jenis Jabatan</option>
                                <option value="Staff" @if(isset($position) && $position->positions == "Staff") selected @endif>Staff</option>
                                <option value="Manager" @if(isset($position) && $position->positions == "Manager") selected @endif>Manager</option>
                                <option value="Researcher" @if(isset($position) && $position->positions == "Researcher") selected @endif>Researcher</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex gap-1">
                        <div class="mb-1 flex-1 pt-0">
                            <label for="location" class="text-blueGray-600 text-base">Lokasi</label>
                            <select id="location" name="location" placeholder="Placeholder" class="placeholder-blueGray-300 text-blueGray-600 relative mt-2 w-full appearance-none rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                <option value="Default">Pilih Lokasi</option>
                                <option value="Remote" @if(isset($position) && $position->location == "Remote") selected @endif>Remote</option>
                                <option value="Surabaya" @if(isset($position) && $position->location == "Surabaya") selected @endif>Surabaya</option>
                            </select>
                        </div>
                        <div class="mb-1 flex-1 pt-0">
                            <label for="divisi" class="text-blueGray-600 text-base">Divisi</label>
                            <select id="divisi" name="divisi" placeholder="Placeholder" required class="placeholder-blueGray-300 text-blueGray-600 relative mt-2 w-full appearance-none rounded border-0 bg-white px-3 py-3 text-base shadow outline-none focus:outline-none focus:ring">
                                <option value="Web and Mobile Apps Developer" @if(isset($position) && $position->divisi == "Web and Mobile Apps Developer") selected @endif>Web and Mobile Apps Developer</option>
                                <option value="TikTok Creator" @if(isset($position) && $position->divisi == "TikTok Creator") selected @endif>TikTok Creator</option>
                                <option value="Secretary n Finance" @if(isset($position) && $position->divisi == "Secretary n Finance") selected @endif>Secretary n Finance</option>
                                <option value="Psychological Testing Product Management" @if(isset($position) && $position->divisi == "Psychological Testing Product Management") selected @endif>Psychological Testing Product Management</option>
                                <option value="Marketing Strategist dan Sales" @if(isset($position) && $position->divisi == "Marketing Strategist dan Sales") selected @endif>Marketing Strategist dan Sales</option>
                                <option value="IG Creator" @if(isset($position) && $position->divisi == "IG Creator") selected @endif>IG Creator</option>
                                <option value="Human Resource" @if(isset($position) && $position->divisi == "Human Resource") selected @endif>Human Resource</option>
                                <option value="Graphic Designer" @if(isset($position) && $position->divisi == "Graphic Designer") selected @endif>Graphic Designer</option>
                                <option value="Class Product Management" @if(isset($position) && $position->divisi == "Class Product Management") selected @endif>Class Product Management</option>
                                <option value="Counseling Product Management" @if(isset($position) && $position->divisi == "Counseling Product Management") selected @endif>Counseling Product Management</option>
                            </select>
                        </div>
                    </div>
                    {{--
                        <div class="mb-1 pt-0 w-full">
                        <label for="link" class="text-blueGray-600 text-base">Link Registrasi</label>
                        <input id="link" name="link" type="text" placeholder="Link Registrasi" value="{{ $position->link }}"
                        class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                        </div>
                    --}}

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
