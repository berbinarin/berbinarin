{{-- @extends('dashboard.layouts.app', [
    'title' => 'Dashboard VAK',
    'active' => 'Dashboard',
    'modul' => 'Dashboard VAK',
])

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:py-4">
                    <div>
                        <p tabindex="0"
                            class="focus:outline-none text-start text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Dashboard Alat Test VAK
                        </p>
                        <p class="text-start w-3/5 text-disabled">Dashboard ini memberikan informasi mengenai jumlah
                            pengguna yang telah menyelesaikan proses pengumpulan.</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row w-full gap-6">
                <!-- Card Container -->
                <div class="bg-white rounded-md p-4 border border-gray-200" style="width: 750px;">
                    <div class="flex flex-col md:flex-row gap-6">
                        <!-- Card 1 -->
                        <div class="w-full md:w-1/2 bg-[#68BC40] rounded-md p-4 text-white relative"
                            style="background-color: #68BC40;  height: 400px; width: 350px;">
                            <p class="font-bold text-lg mb-4">VAK</p>

                            <div class="flex items-center justify-center">
                                <div class="absolute bottom-4 left-4">
                                    <span class="text-white font-bold text-5xl ml-2">{{ $count }}</span>
                                    <p class="text-white font-bold text-md mt-2 ml-2">User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>{{ $respondens }} User</p>
</body>

</html>
