@extends('moduls.psikotes.layouts.main', [
'title' => 'Psikotest Berbinar',
'active' => 'Test',
'page' => 'Biodata'
])


@section('content')
<sections>
    <div class="h-screen flex justify-center">
        <div class="w-full md:max-w-3xl flex flex-col bg-primary items-center z-38 py-16 px-10">
            <div class="flex flex-col w-full justify-center bg-white rounded-3xl p-7 sm:p-10">

                <div>
                    <h2 class="text-center text-4xl font-bold mb-1">Biodata</h2>
                    <p class="text-center text-disabled text-base mt-5 mb-5">Isi biodata dibawah ini dengan benar
                        untuk melihat hasil psikotes</p>
                </div>
                <form action="{{ route('biodata.store', ['test_id' => $test_id]) }}" method="POST" class="w-full justify-center content-center">
                    @csrf
                    <div class=" border-gray-900/10 pb-2 flex flex-col justify-center items-center">

                        <div class="w-64 sm:w-96 flex flex-col gap-5 justify-center">
                            <div>
                                <label for="name" class="block text-base font-medium leading-6 text-gray-900"></label>
                                <div class="mt-2">
                                    <input required type="text" name="name" id="name" autocomplete="given-name" class="block w-full h-11 rounded-full border-0 px-5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-base focus:ring-2 focus:ring-inset focus:ring-primary sm:leading-6" placeholder="Nama">
                                </div>
                            </div>

                            <div>
                                <label for="gender" class="block text-sm font-medium leading-6 text-gray-900"></label>
                                <div class="mt-2">
                                    <select required id="gender" name="gender" autocomplete="gender" class="block w-full h-11 rounded-full border-0 px-5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-base focus:ring-2 focus:ring-inset focus:ring-primary sm:leading-6">
                                        <option class="text-gray-400" value="default" selected disabled>Jenis Kelamin
                                        </option>
                                        <option class="text-black" value="Male">Laki-laki</option>
                                        <option class="text-black" value="Female">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label for="date_of_birth" class="block text-sm font-medium leading-6 text-gray-900"></label>
                                <div class="mt-2">
                                    <input required type="text" name="date_of_birth" id="date_of_birth" autocomplete="given-name" class="block w-full h-11 rounded-full border-0 px-5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 justify-center placeholder:text-gray-400 placeholder:text-base focus:ring-2 focus:ring-inset focus:ring-primary sm:leading-6" onfocus="(this.type='date')" placeholder="Tanggal Lahir">
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900"></label>
                                <div class="mt-2">
                                    <input required id="email" name="email" type="email" autocomplete="email" class="block w-full h-11 rounded-full border-0 px-5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-base focus:ring-2 focus:ring-inset focus:ring-primary sm:leading-6" placeholder="Email">
                                </div>
                            </div>

                            <!-- <div>
                                <label for="test_date" class="block text-sm font-medium leading-6 text-gray-900"></label>
                                <div class="datekons mt-2">
                                    <input required type="text" name="test_date" id="test_date" autocomplete="test_date" e class="block w-full h-11 rounded-full border-0 px-5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-base focus:ring-2 focus:ring-inset focus:ring-primary sm:leading-6" onfocus="(this.type='date')" placeholder="Tanggal Mengikuti Tes">
                                </div>
                            </div> -->
                        </div>
                </form>
                <div class="flex flex-col w-full md:flex-row gap-5 justify-center items-center pt-8">
                    <button type="submit" class="text-lg text-white bg-primary rounded-full font-semibold hover:bg-amber-300 hover:text-primary hover:font-semibold duration-500 px-10 py-2.5 w-auto">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</sections>

<script>
    // Get the current date 
    const currentDate = new Date().toISOString().slice(0, 10);

    // Set the value of the input field to the current date 
    document.getElementById('tgl_tes').value = currentDate;
</script>
@endsection