@extends('moduls.psikotes.layouts.main', [
'title' => 'Psikotest Berbinar',
'active' => 'Registrasi',
'page' => 'Schedule'])

@section('content')
<section class="bg-[#F5F7F9]">
    <div class="flex bg-[#F5F7F9] mt-0 md:mt-[72px]">
        <div class="flex flex-col justify-center items-center">
            <div class="flex justify-center">
                <img src="{{ asset('assets/images/logo-psikotes.png') }}" alt="" title="" class="w-fit absolute ml-0 md:-ml-60 top-5">
            </div>
            <form action="{{ route('psikotest-paid.postRegPage2') }}" method="POST">
                @csrf
                <div class="flex p-5">

                    <div class="flex flex-col px-5 md:px-20">
                        <div class="mt-10 hidden md:block">
                            <h1 class="text-5xl text-black font-extrabold">Registrasi</h1>
                        </div>

                        {{-- IMG MOBILE --}}
                        <div class="flex w-fit mx-auto mt-16 block md:hidden">
                            <img src="{{ asset('assets/images/psikotes/signup.png') }}" alt="" title="" class="w-[300px] h-fit">
                        </div>

                        <div class="flex flex-col md:flex-row w-screen mt-5">
                            <h1 class="flex md:hidden text-5xl text-black font-extrabold mb-5">Registrasi</h1>
                            <div class="w-full md:w-1/2 pr-0 md:pr-10">
                                <div class="mt-5 md:mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                    <div class="col-span-full">
                                        <label for="method" class="block text-lg font-semibold leading-6 text-black">Layanan
                                            Psikotes</label>
                                        <div class="mt-2">
                                            <select id="method" name="method" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                                <option value="staff">Online</option>
                                                <option value="supervisor">Offline (Surabaya)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-full">
                                        <label for="psikotest_category_id" class="block text-lg font-semibold leading-6 text-black">Kategori
                                            Psikotes</label>
                                        <div class="mt-2">
                                            <select id="psikotest_category_id" name="psikotest_category_id" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-bas sm:leading-6">
                                                @foreach ($psikotestCategoryTypes as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>


                                    <div class="col-span-full">
                                        <label for="psikotest_type_id" class="block text-lg font-semibold leading-6 text-black">Jenis
                                            Psikotes</label>
                                        <div class="mt-2">
                                            <select name="psikotest_type_id" id="psikotest_type_id" required class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                                <option value="staff">Tes Kesiapan Pernikahan</option>
                                                <option value="supervisor">Tes Kesiapan menjadi Orangtua</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-full">
                                        <label for="preference_schedule" class="block text-lg font-semibold leading-6 text-black">Jadwal
                                            Psikotes</label>
                                        <div class="mt-2">
                                            <input type="datetime-local" name="preference_schedule" id="preference_schedule" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                        </div>
                                    </div>

                                    <!-- <div class="sm:col-span-3">
                                        <label for="time" class="block text-lg font-semibold leading-6 text-black">Jam
                                            Psikotes</label>
                                        <div class="mt-2">
                                            <input type="time" name="time" id="time"
                                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                        </div>
                                    </div> -->


                                    <div class="col-span-full">
                                        <label for="type" class="block text-lg font-semibold leading-6 text-black">Harga
                                            Psikotes</label>
                                        <div class="mt-2">
                                            <input type="text" name="price" id="price" readonly class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                        </div>
                                    </div>


                                </div>
                                <div class="flex flex-row w-full gap-5 mt-[32px]">
                                    <div class="flex flex-row px-5 py-2 w-auto bg-primary hover:shadow-lg hover:shadow-cyan-300/80 rounded-full">
                                        <button type="submit" class="flex flex-row text-base text-white font-semibold duration-500">Selanjutnya
                                            <span class="py-[5px] pl-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
                                                    <path fill="white" d="M8.6 3.4L14.2 9H2v2h12.2l-5.6 5.6L10 18l8-8l-8-8z" />
                                                </svg></span>
                                        </button>
                                    </div>
                                </div>


                            </div>
                            {{-- IMG DESKTOP --}}
                            <div class="w-1/2 pl-10">
                                <img src="{{ asset('assets/images/psikotes/signup.png') }}" alt="" title="" class="w-fit h-fit hidden md:block">
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const psikotestTypes = @json($psikotestTypes);
        const categorySelect = document.getElementById('psikotest_category_id');
        const typeSelect = document.getElementById('psikotest_type_id');
        const priceInput = document.getElementById('price');

        categorySelect.addEventListener('change', function() {
            const selectedCategoryId = this.value;
            const filteredTypes = psikotestTypes.filter(type => type.category_psikotest_type_id ==
                selectedCategoryId);

            typeSelect.innerHTML = '<option value="" disabled selected>Select Psikotest Type</option>';
            filteredTypes.forEach(function(type) {
                typeSelect.innerHTML +=
                    `<option value="${type.id}" data-price="${type.price}">${type.name}</option>`;
            });
        });

        typeSelect.addEventListener('change', function() {
            const selectedType = typeSelect.options[typeSelect.selectedIndex];
            const price = selectedType.getAttribute('data-price');
            priceInput.value = price ? `Rp ${price}` : '';
        });
    });
</script>

@endsection