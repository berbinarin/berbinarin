@extends('moduls.dashboard.layouts.main', [
    'title' => 'Pendaftaran Psikotes',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid Data',
])

@section('content-dashboard')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-5">
                    <div class="flex flex-row">
                        <div class="">
                            <a href="{{ route('dashboard.psikotespaid.data') }}">
                                <i class='bx bx-arrow-back text-[35px] text-primary mr-6 mt-3 text-left'></i>
                            </a>
                        </div>
                        <div class="">
                            <p tabindex="0"
                                class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Data User</p>
                            <p class="text-disabled">Fitur ini menampilkan data responden yang telah mendaftar Psikotes
                                Berbinar.</p>
                            <button onclick="toggleModal('modal-id')" type="button" style="margin-right: 0.5rem"
                                class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                                <p class=" font-medium leading-none text-dark">Edit Data</p>
                            </button>
                            <button onclick="toggleModal('modal-delete')" type="button"
                                class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                                <p class=" font-medium leading-none text-dark">Delete Data</p>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white w-[1000px] py-4 px-5 ml-14 rounded-md">
                    <div class="w-full flex flex-row gap-5">
                        <div class="flex flex-col w-full">
                            <dl class="flex flex-col grow text-black">
                                <dt class="self-start font-bold">Nama</dt>
                                <dd class="px-2.5 py-2 mt-2.5 text-black bg-white rounded-md shadow-md max-md:pr-5">
                                    {{ $user->fullname }}</dd>
                                <dt class="self-start mt-3.5 font-bold">Usia</dt>
                                <dd
                                    class="px-2.5 py-2 mt-2.5 text-black whitespace-nowrap bg-white rounded-md shadow-md max-md:pr-5">
                                    {{ $user->age }}</dd>
                                <dt class="self-start mt-3.5 font-bold">Email</dt>
                                <dd
                                    class="px-2.5 py-2 mt-2.5 text-black whitespace-nowrap bg-white rounded-md shadow-md max-md:pr-5">
                                    {{ $user->email }}</dd>
                                <dt class="self-start mt-3.5 font-bold">Layanan Psikotes</dt>
                                <dd class="px-2.5 py-2 mt-2.5 text-black bg-white rounded-md shadow-md max-md:pr-5">
                                    {{ $user->service }}</dd>
                            </dl>
                        </div>
                        <div class="flex flex-col ml-5 w-full">
                            <dl class="flex flex-col grow text-black">
                                <dt class="self-start font-bold">Jenis Kelamin</dt>
                                <dd
                                    class="px-2.5 py-2 mt-2.5 text-black whitespace-nowrap bg-white rounded-md shadow-md max-md:pr-5">
                                    {{ $user->gender }}</dd>
                                <dt class="self-start mt-3.5 font-bold">Nomor Telepon</dt>
                                <dd
                                    class="px-2.5 py-2 mt-2.5 text-black whitespace-nowrap bg-white rounded-md shadow-md max-md:pr-5">
                                    {{ $user->phone_number }}</dd>
                                <dt class="self-start mt-3.5 font-bold">Kategori Psikotes</dt>
                                <dd
                                    class="px-2.5 py-2 mt-2.5 text-black whitespace-nowrap bg-white rounded-md shadow-md max-md:pr-5">
                                    {{ $user->psikotestType->categoryPsikotestType->name }}</dd>
                                <dt class="self-start mt-3.5 font-bold">Jenis Psikotes</dt>
                                <dd class="px-2.5 py-2 mt-2.5 text-black bg-white rounded-md shadow-md max-md:pr-5">
                                    {{ $user->psikotestType->name }}</dd>
                            </dl>
                        </div>
                    </div>
                    <h3 class="self-center mt-3.5 font-bold text-black">Alasan</h3>
                    <p
                        class="self-end px-3 pt-3 pb-14 mt-2.5 mr-28 max-w-full text-black bg-white rounded-md shadow-md w-full max-md:mr-2.5">
                        {{ $user->reason }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
