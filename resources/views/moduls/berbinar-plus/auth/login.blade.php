<!-- <form method="POST" action=" {{ route('berbinarplus.login.post') }} "> -->
@extends('moduls.berbinar-plus.layouts.main',[
'title' => 'Registrasi Berbinar+',
'active' => 'Berbinar+',
'page' => 'Berbinar+',
])

@section('content')

<div class="flex flex-wrap">
       <div class="hidden md:block md:w-1/3">
       <div class="w-96" style="transform: scale(1.12);">
              <img src="{{ asset('assets/images/berbinar-plus-icon/image-login.jpg') }}" alt="Berbinar+" style="width: 100%; height: auto;">
       </div>
       </div>
       <div class="w-full md:w-2/3 flex justify-center items-center">
              <div class="bg-white md:bg-white rounded-lg p-5 w-full md:max-w-[80%] mx-auto">
                     <h1 class="text-4xl font-bold text-center mb-4 mt-1">Welcome Back!</h1>
                     <p class="text-center mb-6">Login into your account</p>

                     <form method="POST" action="{{ route('berbinarplus.login.post') }}">
                            <div id="registrationForm1" class="max-w-md mx-auto">
                                   @csrf
                                   {{-- EMAIL --}}
                                   <div class="mb-4">
                                          <input type="email" class="form-input mt-1 block w-full h-10 pl-2 border border-gray-300 rounded-md shadow-sm" id="email" name="email" placeholder="Email" required>
                                   </div>
                                   {{-- PASSWORD --}}
                                   <div class="mb-4 relative">
                                          <input type="password" class="form-input mt-1 block w-full h-10 pl-2 border border-gray-300 rounded-md shadow-sm" id="password" name="password" placeholder="Password" required>
                                          <div class="text-right mt-2">
                                                 <a href="#" class="text-black text-sm font-bold">Forget Password</a>
                                          </div>
                                   </div>

                                   {{-- NEXT BUTTON --}}
                                   <div class="text-center">
                                          <button type="submit" id="login-button" class="bg-[#75C8EE] w-full text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">
                                                 Login
                                          </button>
                                   </div>
                                   {{-- Sign Up --}}
                                   <div class="mt-4 text-center">
                                          <span class="text-black text-sm font-bold">Don't have an account? </span><a href="{{ route('berbinarplus.register') }}" class="text-blue-400">Sign Up</a>
                                   </div>
                            </div>
                     </form>
              </div>
       </div>
</div>

<!-- Mobile view -->
<div class="md:hidden">
       <div class="w-full flex justify-center items-center p-4">
                            <!-- Insert form content here if needed -->
                     </div>
              </div>
       </div>
</div>


@endsection
