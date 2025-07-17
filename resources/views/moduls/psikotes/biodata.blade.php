@extends('landing.layouts.app', [
    'title' => 'Psikotest Berbinar',
    'active' => 'Test',
    'page' => 'Biodata',
])

@section('content')
    <sections>
        <div class="min-h-screen flex justify-center items-center bg-gray-100">
            <div class="flex flex-col w-full md:max-w-[90%] mb-10 mt-28 md:mt-36 justify-center shadow-xl bg-white rounded-3xl p-7 sm:p-10 relative">
                <div>
                    <div class="flex flex-row justify-between mb-8">
                        <!-- Tombol Kembali -->
                        <a href="{{ route('product.psikotest.index') }}">
                            <div class="flex cursor-pointer items-center space-x-2 lg:order-1">
                                <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.svg") }}" alt="Left Arrow" class="h-3 w-auto lg:h-5" />
                                <p class="text-[15px] font-semibold text-[#3986A3] xl:text-lg">Kembali</p>
                            </div>
                        </a>

                    </div>


                <h2 class="text-center mb-8 bg-gradient-to-r from-[#F7B23B] to-[#916823] bg-clip-text text-transparent text-4xl font-bold">Isi Biodata</h2>
                </div>
                <form action="{{ route('psikotest-free.start') }}" method="GET"
                    class="w-full justify-center content-center" onsubmit="formatDateOfBirth()">
                    @csrf
                    <div class="border-gray-900/10 pb-2 flex flex-col justify-center items-center">
                        <div class="w-full flex flex-col gap-5 justify-center">
                            <div class="mb-3">
                                <label for="name" class="block text-sm xl:text-base font-medium text-gray-700">Nama</label>
                                <input type="text" id="name" name="name" placeholder="Budi Berbinar" class="mt-1 block w-full md:w-full px-2.5 py-1.5 lg:py-3 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm lg:text-lg" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="block text-sm xl:text-base font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email" autocomplete="email" placeholder="berbinar@gmail.com" class="mt-1 block w-full md:w-full px-2.5 py-1.5 lg:py-3 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm lg:text-lg" required>
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="block text-sm xl:text-base font-medium text-gray-700">Jenis Kelamin</label>
                                <div class="mt-2">
                                    <select required id="gender" name="gender" autocomplete="gender"
                                        class="mt-1 block w-full md:w-full px-2.5 py-1.5 lg:py-3 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm lg:text-lg" required>
                                        <option class="text-gray-400" value="default" selected disabled>Jenis Kelamin
                                        </option>
                                        <option class="text-black" value="Male">Laki-laki</option>
                                        <option class="text-black" value="Female">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label for="date_of_birth"
                                    class="block text-sm xl:text-base font-medium text-gray-700">Tanggal Lahir</label>
                                <div class="relative mt-2">
                                    <input required type="text" name="date_of_birth" id="date_of_birth"
                                        autocomplete="bday"
                                        placeholder="dd/mm/yyyy"
                                        class="mt-1 block w-full md:w-full px-2.5 py-1.5 lg:py-3 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm lg:text-lg placeholder:text-gray-700" />
                                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/date.png') }}"
                                        id="date_of_birth_icon"
                                        class="absolute max-sm:hidden right-3 top-1/2 -translate-y-1/2 h-5 w-5 object-contain cursor-pointer" />
                                </div>
                            </div>

                            <div>
                                <label for="date_of_test"
                                    class="block text-sm xl:text-base font-medium text-gray-700">Tanggal Mengikuti Tes</label>
                                <div class="relative mt-2">
                                    <input required type="text" name="date_of_test" id="date_of_test"
                                        autocomplete="today"
                                        placeholder="dd/mm/yyyy"
                                        class="mt-1 block w-full md:w-full px-2.5 py-1.5 lg:py-3 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-sm lg:text-lg placeholder:text-gray-700" />
                                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/date.png') }}"
                                        id="date_of_test_icon"
                                        class="absolute max-sm:hidden right-3 top-1/2 -translate-y-1/2 h-5 w-5 object-contain cursor-pointer" />
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="flex flex-col w-full md:flex-row gap-5 justify-center items-center pt-8">
                        <button type="submit" class="rounded-lg bg-gradient-to-r mb-5 lg:mx-2 from-[#3986A3] to-[#225062] px-10 lg:w-1/3 py-1.5 font-medium text-white text-lg max-sm:text-[15px]">Mulai</button>
                    </div>
                </form>
            </div>
        </div>
    </sections>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        flatpickr("#date_of_birth", {
            dateFormat: "d/m/Y",
            allowInput: true
        });
        flatpickr("#date_of_test", {
            dateFormat: "d/m/Y",
            allowInput: true
        });

        function formatDateInputs(e) {
            // Tanggal Lahir
            const dobInput = document.getElementById('date_of_birth');
            if (dobInput && dobInput.value) {
                const [year, month, day] = dobInput.value.split('-');
                dobInput.value = `${day}/${month}/${year}`;
            }
            // Tanggal Tes
            const dotInput = document.getElementById('date_of_test');
            if (dotInput && dotInput.value) {
                const [year, month, day] = dotInput.value.split('-');
                dotInput.value = `${day}/${month}/${year}`;
            }
        }
        document.querySelector('form').addEventListener('submit', formatDateInputs);

        document.getElementById('openModal').addEventListener('click', function() {
            document.getElementById('modal').classList.remove('hidden');
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('modal').classList.add('hidden');
        });

        const genderSelect = document.getElementById('gender');
        function updateGenderColor() {
            if (genderSelect.value === 'default') {
                genderSelect.classList.add('text-gray-700');
            } else {
                genderSelect.classList.remove('text-gray-700');
            }
        }
        genderSelect.addEventListener('change', updateGenderColor);
        // Jalankan saat halaman pertama kali load
        updateGenderColor();
    </script>
@endsection
