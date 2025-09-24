@extends(
    "auth.layout.main",
    [
        "title" => "Login Dashboard",
        "active" => "Login",
    ]
)

@section("content")
    <section class="fixed inset-0 flex h-full w-full flex-col bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset("assets/images/dashboard/loginbg.png") }}')">
        <!-- icon -->
        <div class="ml-[36px] mt-[35px] flex flex-row items-center justify-start gap-4">
            <img src="{{ asset("assets/images/dashboard/logo-berbinar.png") }}" alt="Logo Berbinar" class="h-[67px] w-[67px]" />
            <h1 class="font-plusJakartaSans text-[13px] font-bold text-[#3986A3]">PT Berbinar Insightful Indonesia</h1>
        </div>

        <form action="{{ route('auth.authenticated') }}" method="POST">
            @csrf
            <input type="hidden" name="login_type" value="admin">
            <!-- Login Form -->
            <div class="-mt-16 flex min-h-screen items-center justify-center bg-none">
                <div class="flex w-[467.33px] flex-col items-center justify-center gap-5 rounded-2xl bg-white p-9 font-plusJakartaSans shadow-[0px_1px_4px_0px_rgba(12,12,13,0.05)]">
                    <!-- Title -->
                    <div class="flex w-full flex-col items-center justify-start gap-5">
                        <div class="flex w-full flex-col items-start justify-start gap-2">
                            <div class="flex w-full flex-col items-start justify-start gap-2.5">
                                <div class="w-full text-center text-2xl font-bold text-stone-900">
                                    Welcome to
                                    <br />
                                    Dashboard Admin Berbinarin
                                </div>
                                <div class="w-full text-center text-sm font-normal text-stone-500">Masuk ke dashboard dan lakukan manajemen data secara menyeluruh untuk keperluan admin, konten, dan informasi di website Berbinarin.</div>
                            </div>
                            <div class="w-full border-t border-[#CCCCCC]"></div>
                        </div>
                    </div>

                    <!-- Form -->
                    <div class="flex w-full flex-col items-start justify-start gap-3">
                        <!-- Username -->
                        <div class="flex w-full flex-col items-start justify-start gap-2">
                            <label>Username</label>
                            <div class="flex h-[47px] w-full items-center justify-start gap-3 rounded-lg bg-white outline outline-[0.67px] outline-offset-[-0.67px] outline-stone-300/80">
                                <img src="{{ asset("assets/images/dashboard/Circled Envelope.png") }}" alt="Username" class="mx-3 size-8" />
                                <input type="text" name="username" placeholder="Username" class="flex-1 border-none bg-transparent text-[13px] text-[#A9A7A7] outline-none placeholder:translate-y-[1px] placeholder:text-[13px] focus:border-none focus:outline-none focus:ring-0" />
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="flex w-full flex-col items-start justify-start gap-2">
                            <label>Password</label>
                            <div class="flex h-[47px] w-full items-center justify-start gap-3 rounded-lg bg-white outline outline-[0.67px] outline-offset-[-0.67px] outline-stone-300/80">
                                <img src="{{ asset("assets/images/dashboard/Secure.png") }}" alt="Username" class="mx-3 size-8" />
                                <input type="password" name="password" placeholder="Password" class="flex-1 border-none bg-transparent text-[13px] text-[#A9A7A7] outline-none placeholder:translate-y-[1px] placeholder:text-[13px] focus:border-none focus:outline-none focus:ring-0" />
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <button type="submit" class="relative h-12 w-full cursor-pointer overflow-hidden rounded-lg bg-cyan-700 hover:bg-cyan-800">
                        <div class="absolute left-[176.67px] top-[14.67px] text-center text-sm font-bold text-white">Sign in</div>
                    </button>
                </div>
            </div>
        </form>
        <!-- Copyright -->
        <div class="-mt-14 mr-24 pb-[57px] text-end text-[13px] font-bold text-[#3986A3]">
            <h4>© 2025, Berbinar.in</h4>
        </div>
    </section>
@endsection
