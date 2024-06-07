@extends('moduls.berbinar-plus.layouts.main',[
'title' => 'Dashboard User Berbinar+',
'active' => 'Success',
'page' => 'Success',
])

@section('content')
<section class="flex w-full">
  <div class="flex flex-col px-20 w-full bg-gray-100">
    <div class="w-full">
      <div class="py-4 md:pt-12 md:pb-7">
        <div>
          <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800">
            Dashboard
          </p>
        </div>
      </div>
      <div class="flex w-full space-x-4">
        <!-- Left Card -->
        <div class="flex-grow bg-white p-6 rounded-lg shadow-md">
          <div class="text-xl font-bold mb-2">User</div>
          <div class="overflow-x-auto">
            <table class="min-w-full">
              <thead>
                <tr>
                  <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-400 tracking-wider">Name</th>
                  <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-400 tracking-wider">Link</th>
                  <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-400 tracking-wider">Detail</th>
                  <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-400 tracking-wider">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <div class="flex items-center justify-center">
                      <img src="{{ asset('assets/images/berbinar-plus-icon/profil-dumy.jpg') }}" alt="" class="w-8 h-8 rounded-full mr-2">
                      John Doe
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center text-center"><a href="#" class="text-black hover:text-blue-700">https://bit.ly/3VgAQQC</a></td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center text-center">
                    <button class="bg-gray-100 text-black px-4 py-2 rounded">Detail</button>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center  text-center">
                    <button class="bg-primary-alt text-white px-4 py-2 rounded">Accept</button>
                  </td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <div class="flex items-center justify-center">
                      <img src="{{ asset('assets/images/berbinar-plus-icon/profil-dumy.jpg') }}" alt="" class="w-8 h-8 rounded-full mr-2">
                      John Doe
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center"><a href="#" class="text-black hover:text-blue-700">https://bit.ly/3VgAQQC</a></td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <button class="bg-gray-100 text-black px-4 py-2 rounded">Detail</button>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <button class="bg-red-500 text-white px-4 py-2 rounded">Decline</button>
                  </td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <div class="flex items-center justify-center">
                      <img src="{{ asset('assets/images/berbinar-plus-icon/profil-dumy.jpg') }}" alt="" class="w-8 h-8 rounded-full mr-2">
                      John Doe
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center"><a href="#" class="text-black hover:text-blue-700">https://bit.ly/3VgAQQC</a></td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <button class="bg-gray-100 text-black px-4 py-2 rounded">Detail</button>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <button class="bg-primary-alt text-white px-4 py-2 rounded">Accept</button>
                  </td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <div class="flex items-center justify-center">
                      <img src="{{ asset('assets/images/berbinar-plus-icon/profil-dumy.jpg') }}" alt="" class="w-8 h-8 rounded-full mr-2">
                      John Doe
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center"><a href="#" class="text-black hover:text-blue-700">https://bit.ly/3VgAQQC</a></td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <button class="bg-gray-100 text-black px-4 py-2 rounded">Detail</button>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <button class="bg-red-500 text-white px-4 py-2 rounded">Decline</button>
                  </td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <div class="flex items-center justify-center">
                      <img src="{{ asset('assets/images/berbinar-plus-icon/profil-dumy.jpg') }}" alt="" class="w-8 h-8 rounded-full mr-2">
                      John Doe
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center"><a href="#" class="text-black hover:text-blue-700">https://bit.ly/3VgAQQC</a></td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <button class="bg-gray-100 text-black px-4 py-2 rounded">Detail</button>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center  text-center">
                    <button class="bg-primary-alt text-white px-4 py-2 rounded">Accept</button>
                  </td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <div class="flex items-center justify-center">
                      <img src="{{ asset('assets/images/berbinar-plus-icon/profil-dumy.jpg') }}" alt="" class="w-8 h-8 rounded-full mr-2">
                      John Doe
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center"><a href="#" class="text-black hover:text-blue-700">https://bit.ly/3VgAQQC</a></td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <button class="bg-gray-100 text-black px-4 py-2 rounded">Detail</button>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center">
                    <button class="bg-red-500 text-white px-4 py-2 rounded">Decline</button>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="flex justify-center space-x-4 mt-4">
              <button class="px-2 py-2 rounded">
                <img src="{{ asset('assets/images/berbinar-plus-icon/before.jpg') }}" alt="" class="w-5 h-auto">
              </button>
              <button class="px-2 py-2 rounded">
                <img src="{{ asset('assets/images/berbinar-plus-icon/after.jpg') }}" alt="" class="w-5 h-auto">
              </button>
            </div>
          </div>

        </div>
        <!-- Right Card -->
        <div class="flex-none w-1/4 bg-white p-6 rounded-lg shadow-md">
          <div class="flex items-center justify-center pt-4">
            <img src="{{ asset('assets/images/berbinar-plus-icon/profil-induk.jpg') }}" alt="" class="w-40 h-40 rounded-full mr-2">
          </div>
          <div class="p-4 text-xl text-center font-bold mb-2">John Doe</div>
          <div class="text-base font-bold mb-2">Details</div>

          <!-- Additional Details -->
          <div class="flex flex-col text-sm">
            <div class="flex justify-between mb-1">
              <div class="font-bold text-gray-400">Name:</div>
              <div class="font-bold">John Doe</div>
            </div>
            <div class="flex justify-between mb-1">
              <div class="font-bold text-gray-400">Gender:</div>
              <div class="font-bold">Male</div>
            </div>
            <div class="flex justify-between mb-1">
              <div class="font-bold text-gray-400">Age:</div>
              <div class="font-bold">30</div>
            </div>
            <div class="flex justify-between mb-1">
              <div class="font-bold text-gray-400">Phone:</div>
              <div class="font-bold">123-456-7890</div>
            </div>
            <div class="flex justify-between mb-1">
              <div class="font-bold text-gray-400">Email:</div>
              <div class="font-bold">johndoe@example.com</div>
            </div>
            <div class="flex justify-between mb-1">
              <div class="font-bold text-gray-400">Education:</div>
              <div class="font-bold">Bachelor's Degree</div>
            </div>
            <div class="flex justify-between mb-1">
              <div class="font-bold text-gray-400">Class:</div>
              <div class="font-bold">Class A</div>
            </div>
            <div class="flex justify-between mb-1">
              <div class="font-bold text-gray-400">Service Package:</div>
              <div class="font-bold">Gold</div>
            </div>
          </div>

          <!-- Buttons -->
          <div class="flex justify-between mt-4">
            <button class="bg-primary-alt text-white px-4 py-2 rounded">Accept</button>
            <button class="bg-red-500 text-white px-4 py-2 rounded">Decline</button>
          </div>
        </div>

        <!-- Learning Materials -->
      </div>
      <div class="py-4 md:pt-4 md:pb-7">
        <div>
          <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800">
            Learning Materials
          </p>
        </div>
      </div>
      <div class="flex w-full space-x-4">
        <!-- Left Card -->
        <div class="flex-grow bg-white rounded-xl shadow-md">
          <div class="overflow-x-auto">
            <table class="min-w-full">
              <thead>
                <tr>
                  <td class="px-6 py-4 whitespace-no-wrap text-center font-bold">
                    <button class="bg-gray-100 text-black px-4 py-2 rounded">Product Management</button>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center font-bold">
                    <button class="bg-gray-100 text-black px-4 py-2 rounded">Graphic Designer</button>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center font-bold">
                    <button class="bg-gray-100 text-black px-4 py-2 rounded">Human Resource</button>
                  </td>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Baris Pertama -->
    <div class="flex justify-between space-x-4">
      <div class="flex w-1/2 bg-white p-2 mt-4 rounded-lg shadow-md items-center">
        <img src="{{ asset('assets/images/berbinar-plus-icon/satu.png') }}" alt="" class="w-20 h-20 rounded-l mr-2">
        <div class="flex flex-col">
          <p class="font-bold italic">"How to generate new ideas"</p>
          <img src="{{ asset('assets/images/berbinar-plus-icon/vectordua.png') }}" class="w-20 px-2 py-1">
        </div>
        <img src="{{ asset('assets/images/berbinar-plus-icon/vector.png') }}" class="w-10 px-2 py-1 ml-auto">
      </div>
      <div class="flex w-1/2 bg-white p-2 mt-4 rounded-lg shadow-md items-center">
        <img src="{{ asset('assets/images/berbinar-plus-icon/dua.png') }}" alt="" class="w-20 h-20 rounded-l mr-2">
        <div class="flex flex-col">
          <p class="font-bold italic">"How to generate new ideas"</p>
          <img src="{{ asset('assets/images/berbinar-plus-icon/vectordua.png') }}" class="w-20 px-2 py-1">
        </div>
        <img src="{{ asset('assets/images/berbinar-plus-icon/vector.png') }}" class="w-10 px-2 py-1 ml-auto">
      </div>
    </div>

    <!-- Baris Kedua -->
    <div class="flex justify-between space-x-4 mb-8">
      <div class="flex w-1/2 bg-white p-2 mt-4 rounded-lg shadow-md items-center">
        <img src="{{ asset('assets/images/berbinar-plus-icon/tiga.png') }}" alt="" class="w-20 h-20 rounded-l mr-2">
        <div class="flex flex-col">
          <p class="font-bold italic">"How to generate new ideas"</p>
          <img src="{{ asset('assets/images/berbinar-plus-icon/vectordua.png') }}" class="w-20 px-2 py-1">
        </div>
        <img src="{{ asset('assets/images/berbinar-plus-icon/vector.png') }}" class="w-10 px-2 py-1 ml-auto">
      </div>
      <div class="flex w-1/2 bg-white p-2 mt-4 rounded-lg shadow-md items-center">
        <img src="{{ asset('assets/images/berbinar-plus-icon/empat.png') }}" alt="" class="w-20 h-20 rounded-l mr-2">
        <div class="flex flex-col">
          <p class="font-bold italic">"How to generate new ideas"</p>
          <img src="{{ asset('assets/images/berbinar-plus-icon/vectordua.png') }}" class="w-20 px-2 py-1">
        </div>
        <img src="{{ asset('assets/images/berbinar-plus-icon/vector.png') }}" class="w-10 px-2 py-1 ml-auto">
      </div>
    </div>



  </div>
</section>
@endsection