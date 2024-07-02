@extends('moduls.dashboard.layouts.main', [
    'title' => 'Edit - Positions Management',
    'active' => 'Dashboard',
    'modul' => 'Positions',
])

@section('content-dashboard')
    <section>
        <div class="flex">
            <div class="sm:px-6 w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="">
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Edit Data Position </p>
                        <p class="w-2/4 text-disabled">Dashboard > <a href="{{ route('dashboard.positions') }}">Positions</a>
                            > Edit</p>
                    </div>
                </div>
                <form action="{{ route('HiringPositions.update', $HiringPosisitons->id) }}" class="flex flex-col gap-1" method="post">
                    @csrf
                    @method('PUT')
                    <div class="flex gap-1">
                        <div class="mb-1 pt-0 w-full">
                            <label for="name" class="text-blueGray-600 text-base">Nama Posisi</label>
                            <input id="name" name="name" type="text" placeholder="Human Resource Development" value="{{ $HiringPosisitons->name }}"
                                class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                        </div>
                    </div>

                    <div class="flex gap-1">
                        <div class="mb-1 pt-0 flex-1">
                            <label for="type" class="text-blueGray-600 text-base">Tipe Pekerjaan</label>
                            <select id="type" name="type" placeholder="Placeholder" 
                                class="px-3 py-3 appearance-none mt-2  placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full" >
                                <option value="Default" >Pilih Tipe Pekerjaan</option>
                                <option value="Internship" @if(isset($HiringPosisitons) && $HiringPosisitons->type == "Internship") selected @endif>Internship</option>
                                <option value="Fulltime" @if(isset($HiringPosisitons) && $HiringPosisitons->type == "Fulltime") selected @endif>Fulltime</option>
                                <option value="Part Time" @if(isset($HiringPosisitons) && $HiringPosisitons->type == "Part Time") selected @endif >Part Time</option>
                                <option value="Contract" @if(isset($HiringPosisitons) && $HiringPosisitons->type == "Contract") selected @endif >Contract</option>
                                <option value="Freelancer" @if(isset($HiringPosisitons) && $HiringPosisitons->type == "Freelancer") selected @endif>Freelancer</option>
                            </select>
                        </div>
                        <div class="mb-1 pt-0 flex-1">
                            <label for="positions" class="text-blueGray-600 text-base">Jabatan</label>
                            <select id="positions" name="positions" placeholder="Placeholder"
                                class="px-3 py-3 appearance-none mt-2  placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                <option value="Default">Pilih Jenis Jabatan</option>
                                <option value="Staff" @if(isset($HiringPosisitons) && $HiringPosisitons->positions == "Staff") selected @endif>Staff</option>
                                <option value="Manager"@if(isset($HiringPosisitons) && $HiringPosisitons->positions == "Manager") selected @endif>Manager</option>
                                <option value="Researcher" @if(isset($HiringPosisitons) && $HiringPosisitons->positions == "Researcher") selected @endif>Researcher</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex gap-1">
                        <div class="mb-1 pt-0 flex-1">
                            <label for="location" class="text-blueGray-600 text-base">Lokasi</label>
                            <select id="location" name="location" placeholder="Placeholder"
                                class="px-3 py-3 appearance-none mt-2  placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                <option value="Default">Pilih Lokasi</option>
                                <option value="Remote" @if(isset($HiringPosisitons) && $HiringPosisitons->location == "Remote") selected @endif>Remote</option>
                                <option value="Surabaya" @if(isset($HiringPosisitons) && $HiringPosisitons->location == "Surabaya") selected @endif>Surabaya</option>
                            </select>
                        </div>
                        <div class="mb-1 pt-0 flex-1">
                            <label for="divisi" class="text-blueGray-600 text-base">Divisi</label>
                            <select id="divisi" name="divisi" placeholder="Placeholder" required class="px-3 py-3 appearance-none mt-2  placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                <option value="Web and Mobile Apps Developer" @if(isset($HiringPosisitons) && $HiringPosisitons->divisi == "Web and Mobile Apps Developer") selected @endif>Web and Mobile Apps Developer</option>
                                <option value="TikTok Creator" @if(isset($HiringPosisitons) && $HiringPosisitons->divisi == "TikTok Creator") selected @endif>TikTok Creator</option>
                                <option value="Secretary n Finance" @if(isset($HiringPosisitons) && $HiringPosisitons->divisi == "Secretary n Finance") selected @endif>Secretary n Finance</option>
                                <option value="Psychological Testing Product Management" @if(isset($HiringPosisitons) && $HiringPosisitons->divisi == "Psychological Testing Product Management") selected @endif>Psychological Testing Product Management</option>
                                <option value="Marketing Strategist dan Sales" @if(isset($HiringPosisitons) && $HiringPosisitons->divisi == "Marketing Strategist dan Sales") selected @endif>Marketing Strategist dan Sales</option>
                                <option value="IG Creator" @if(isset($HiringPosisitons) && $HiringPosisitons->divisi == "IG Creator") selected @endif>IG Creator</option>
                                <option value="Human Resource" @if(isset($HiringPosisitons) && $HiringPosisitons->divisi == "Human Resource") selected @endif>Human Resource</option>
                                <option value="Graphic Designer" @if(isset($HiringPosisitons) && $HiringPosisitons->divisi == "Graphic Designer") selected @endif>Graphic Designer</option>
                                <option value="Class Product Management" @if(isset($HiringPosisitons) && $HiringPosisitons->divisi == "Class Product Management") selected @endif>Class Product Management</option>
                                <option value="Counseling Product Management" @if(isset($HiringPosisitons) && $HiringPosisitons->divisi == "Counseling Product Management") selected @endif>Counseling Product Management</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-1 pt-0 w-full">
                        <label for="link" class="text-blueGray-600 text-base">Link Registrasi</label>
                        <input id="link" name="link" type="text" placeholder="Link Registrasi" value="{{ $HiringPosisitons->link }}"
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
