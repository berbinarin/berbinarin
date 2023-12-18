@extends('moduls.dashboard.layouts.main', [
    'title' => 'Login Dashboard',
    'active' => 'Login',
])

@section('content')
    <section class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 h-screen">
        <div class="mx-auto max-w-2xl text-center flex items-center justify-center flex-col">
            <img src="{{ asset('assets/images/logo-berbinar.png') }}" alt="Logo Berbinar Insightful Indonesia"
                title="Logo Berbinar Insightful Indonesia" class="w-24">
            <h1 class="text-4xl text-dark font-bold mt-2">Welcome to Dashboard <br> Admin Berbinarin</h1>
            <p class="mt-4 text-gray-500">
                Masuk ke dashboard dan lakukan manajemen data mulai dari sisi admin dan HR
                untuk konten dan informasi pada website Berbinarin
            </p>
        </div>

        <form action="/login" method="POST" class="mx-auto mb-0 mt-5 max-w-md space-y-4">
            @csrf
            <div>
                <label for="username" class="sr-only">Username</label>

                <div class="relative">
                    <input type="text" name="username"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-base shadow-sm"
                        placeholder="Enter username" />

                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                    </span>
                </div>
            </div>

            <div>
                <label for="password" class="sr-only">Password</label>

                <div class="relative">
                    <input type="password" name="password"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-base shadow-sm"
                        placeholder="Enter password" />

                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </span>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="inline-block rounded-lg bg-primary px-5 py-3 text-base font-medium text-white">
                    Sign in
                </button>
            </div>
        </form>
        </s>
    @endsection
