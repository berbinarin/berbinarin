@extends('moduls.berbinar-plus.layouts.main',[
'title' => 'Dashboard User Berbinar+',
'active' => 'Success',
'page' => 'Success',
])

@section('content')
<section class="flex w-full bg-gwhite">
    <div class="flex flex-col bg-gray-100 w-full pr-10 pt-10">

        <!-- sidebar fixed -->
        <div class="w-full sidebar-active">
            <div class="flex">

                <!-- halaman dengan sidebar aktif -->
                <div class="w-2/12 bg-white rounded-lg shadow-md mr-1 h-[650px] fixed overflow-y-hidden" style="top: 1px">
                    <div class="h-full w-full bg-white text-black flex flex-col">
                        <!-- Logo -->
                        <div class="h-40 bg-white flex items-center justify-center">
                            <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/berbinar-logo.png') }}" alt="" class="w-30 h-20 mr-2">
                            <span class="text-lg font-bold"></span>
                        </div>

                        <!-- Navigasi -->
                        <nav class="px-4">
                            <ul>
                                <li class="pt-2">
                                    <a href="#" class="flex items-center text-gray-600 hover:text-gray-900">
                                        <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/icon-home.png') }}" alt="" class="w-4 h-5 mr-2">
                                        <span class="ml-2">Home</span>
                                    </a>
                                </li>
                                <li class="pt-2">
                                    <a href="#" class="flex items-center text-gray-600 hover:text-gray-900">
                                        <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/icon-dashboard.png') }}" alt="" class="w-5 h-4 mr-2">
                                        <span class="ml-2">Dashboard</span>
                                    </a>
                                </li>
                                <li class="pt-2">
                                    <a href="#" class="flex items-center text-gray-600 hover:text-gray-900">
                                        <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/icon-course.png') }}" alt="" class="w-4 h-5 mr-2">
                                        <span class="ml-2">Course</span>
                                    </a>
                                </li>
                                <li class="pt-2">
                                    <a href="#" class="flex items-center text-gray-600 hover:text-gray-900">
                                        <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/icon-account.png') }}" alt="" class="w-4 h-5 mr-2">
                                        <span class="ml-2">Account</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <!-- Footer -->
                        <div class="h-80 bg-white flex items-center justify-start p-4 -mb-14" style="margin-top: 80px;">
                            <div class="bg-gray-100 shadow rounded flex flex-col items-start p-4">
                                <div class="flex items-center mb-2">
                                    <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/icon-need-help.png') }}" alt="" class="w-8 h-8 rounded-full mr-2">
                                    <span class="text-sm">Need Help?</span>
                                </div>
                                <p class="text-sm">Get in touch with one of our experts or visit our FAQ.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-10/12 ml-64 bg-none rounded-lg"> <!-- Adjusted margin to accommodate fixed sidebar -->
                    <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/banner.png') }}" alt="banner" class="icon-banner w-full h-auto">

                    <!-- Kartu baru dimulai di sini -->
                    <div class="p-6 mt-4 bg-white rounded-lg shadow-inner">
                        <div class="flex justify-between items-center mb-2">
                            <h2 class="text-lg font-bold">Recently assigned materials</h2>
                            <div class="flex items-center">
                                <span class="mr-4 cursor-pointer text-primary font-bold" onclick="seeAllClicked()">See All</span>
                                <div class="mr-2" onclick="previousClicked()">
                                    <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/previous.png') }}" alt="banner" class="icon-banner cursor-pointer">
                                </div>
                                <div onclick="nextClicked()">
                                    <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/nexts.png') }}" alt="banner" class="icon-banner cursor-pointer">
                                </div>
                            </div>

                            <script>
                                function seeAllClicked() {
                                    // Tambahkan kode untuk aksi ketika "See All" diklik
                                    console.log("See All clicked");
                                }

                                function previousClicked() {
                                    // Tambahkan kode untuk aksi ketika ikon sebelumnya diklik
                                    console.log("Previous icon clicked");
                                }

                                function nextClicked() {
                                    // Tambahkan kode untuk aksi ketika ikon selanjutnya diklik
                                    console.log("Next icon clicked");
                                }
                            </script>
                        </div>

                        <!-- RECENTLY ASSIGNED MATERIALS -->
                        <div class="flex space-x-4">
                            <div class="flex mt-0 items-start bg-gray-100 rounded-lg shadow w-1/3 relative h-[140px]">
                                <div class="w-1/2">
                                    <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/graphic-designer.png') }}" alt="banner" class="icon-banner h-[140px] w-[140px]">
                                </div>
                                <div class="w-2/3">
                                    <h3 class="text-md font-semibold my-2 mx-2">Graphic Designer</h3>
                                    <p class="text-gray-700 text-xs flex text-justify px-2 mr-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, rerum aliquid esse laboriosam odit quibusdam!</p>
                                    <p class="text-gray-700 text-xs flex text-justify px-2 absolute bottom-0 left-0 pl-14 ml-20 mb-1">Video (3 of 20)</p>
                                    <p class="text-gray-700 text-xs flex text-justify px-2 absolute bottom-0 right-0 mr-2 mb-1">3%</p>
                                </div>
                            </div>

                            <div class="flex mt-0 items-start bg-gray-100 rounded-lg shadow w-1/3 relative h-[140px]">
                                <div class="w-1/2">
                                    <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/graphic-designer.png') }}" alt="banner" class="icon-banner h-[140px] w-[140px]">
                                </div>
                                <div class="w-2/3">
                                    <h3 class="text-md font-semibold my-2 mx-2">Graphic Designer</h3>
                                    <p class="text-gray-700 text-xs flex text-justify px-2 mr-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, rerum aliquid esse laboriosam odit quibusdam!</p>
                                    <p class="text-gray-700 text-xs flex text-justify px-2 absolute bottom-0 left-0 pl-14 ml-20 mb-1">Video (3 of 20)</p>
                                    <p class="text-gray-700 text-xs flex text-justify px-2 absolute bottom-0 right-0 mr-2 mb-1">3%</p>
                                </div>
                            </div>

                            <div class="flex mt-0 items-start bg-gray-100 rounded-lg shadow w-1/3 relative h-[140px]">
                                <div class="w-1/2">
                                    <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/graphic-designer.png') }}" alt="banner" class="icon-banner h-[140px] w-[140px]">
                                </div>
                                <div class="w-2/3">
                                    <h3 class="text-md font-semibold my-2 mx-2">Graphic Designer</h3>
                                    <p class="text-gray-700 text-xs flex text-justify px-2 mr-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, rerum aliquid esse laboriosam odit quibusdam!</p>
                                    <p class="text-gray-700 text-xs flex text-justify px-2 absolute bottom-0 left-0 pl-14 ml-20 mb-1">Video (3 of 20)</p>
                                    <p class="text-gray-700 text-xs flex text-justify px-2 absolute bottom-0 right-0 mr-2 mb-1">3%</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MODULE LIBRARY -->
                    <div class="p-6 mt-4 bg-white rounded-lg shadow-inner">
                        <div class="flex justify-between items-center mb-2">
                            <h2 class="text-lg font-bold">Module Library</h2>
                            <div class="flex items-center">
                                <span class="mr-4 cursor-pointer text-primary font-bold" onclick="seeAllClicked()">See All</span>
                                <div class="mr-2" onclick="previousClicked()">
                                    <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/previous.png') }}" alt="banner" class="icon-banner cursor-pointer">
                                </div>
                                <div onclick="nextClicked()">
                                    <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/nexts.png') }}" alt="banner" class="icon-banner cursor-pointer">
                                </div>
                            </div>

                            <script>
                                function seeAllClicked() {
                                    // Tambahkan kode untuk aksi ketika "See All" diklik
                                    console.log("See All clicked");
                                }

                                function previousClicked() {
                                    // Tambahkan kode untuk aksi ketika ikon sebelumnya diklik
                                    console.log("Previous icon clicked");
                                }

                                function nextClicked() {
                                    // Tambahkan kode untuk aksi ketika ikon selanjutnya diklik
                                    console.log("Next icon clicked");
                                }
                            </script>
                        </div>

                        <div class="flex space-x-4">

                            <div class="flex bg-gray-100 rounded-lg flex-col h-full">
                                <div class="h-1/3 py-2">
                                    <h3 class="text-md text-center font-semibold my-2 mx-1">Graphic Designer</h3>
                                </div>
                                <div class="h-2/3">
                                    <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/graphic-design.png') }}" alt="banner" class="icon-banner w-[350px] h-[140px]">
                                </div>
                            </div>

                            <div class="flex bg-gray-100 rounded-lg flex-col h-full">
                                <div class="h-1/3 py-2">
                                    <h3 class="text-md text-center font-semibold my-2 mx-1">Jobseekers</h3>
                                </div>
                                <div class="h-2/3">
                                    <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/graphic-design.png') }}" alt="banner" class="icon-banner w-[350px] h-[140px]">
                                </div>
                            </div>

                            <div class="flex bg-gray-100 rounded-lg flex-col h-full">
                                <div class="h-1/3 py-2">
                                    <h3 class="text-md text-center font-semibold my-2 mx-1">Product Management</h3>
                                </div>
                                <div class="h-2/3">
                                    <img src="{{ asset('assets/images/berbinar-plus-icon/dashboard-user/product-management.png') }}" alt="banner" class="icon-banner w-[350px] h-[140px]">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- TIME TRACKING MODULES -->
                    <div class="p-6 mt-4 bg-white rounded-lg shadow-inner">
                        <div class="flex justify-between items-center mb-2">
                            <h2 class="text-lg font-bold">Time Tracking Modules</h2>
                        </div>
                        <div class="flex space-x-4">
                            <table class="border-collapse w-full">
                                <thead>
                                    <tr>
                                        <th class="px-2 py-2 w-1/2 text-start text-gray-300">Nama</th>
                                        <th class="px-2 py-2 w-1/2 text-start">Work Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="h-[70px]">
                                        <td class="px-2 py-2 bg-gray-100 rounded-l-lg font-bold pl-4">Graphic Designer</td>
                                        <td class="px-2 py-2 bg-gray-100 rounded-r-lg">
                                            <div class="flex items-center">
                                                <div class="bg-white h-6 w-full rounded-full">
                                                    <div class="bg-primary-alt h-6 rounded-full" style="width: 40%;"></div>
                                                </div>
                                                <span class="ml-2 px-2 font-bold">40%</span>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="bg-white h-[20px]">
                                        <td>

                                        </td>
                                    </tr>
                                    <tr class="bg-gray-100 h-[70px]">
                                        <td class="px-2 py-2 bg-gray-100 rounded-l-lg font-bold pl-4">Job Seekers</td>
                                        <td class="px-2 py-2 bg-gray-100 rounded-r-lg">
                                            <div class="flex items-center">
                                                <div class="bg-white h-6 w-full rounded-full">
                                                    <div class="bg-primary-alt h-6 rounded-full" style="width: 50%;"></div>
                                                </div>
                                                <span class="ml-2 px-2 font-bold">50%</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bg-white h-[20px]">
                                        <td>

                                        </td>
                                    </tr>
                                    <tr class="bg-gray-100 h-[70px]">
                                        <td class="px-2 py-2 bg-gray-100 rounded-l-lg font-bold pl-4">Product Management</td>
                                        <td class="px-2 py-2 bg-gray-100 rounded-r-lg">
                                            <div class="flex items-center">
                                                <div class="bg-white h-6 w-full rounded-full">
                                                    <div class="bg-primary-alt h-6 rounded-full" style="width: 20%;"></div>
                                                </div>
                                                <span class="ml-2 px-2 font-bold">20%</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bg-white h-[20px]">
                                        <td>

                                        </td>
                                    </tr>
                                    <tr class="bg-gray-100 h-[70px]">
                                        <td class="px-2 py-2 bg-gray-100 rounded-l-lg font-bold pl-4">Graphic Designer</td>
                                        <td class="px-2 py-2 bg-gray-100 rounded-r-lg">
                                            <div class="flex items-center">
                                                <div class="bg-white h-6 w-full rounded-full">
                                                    <div class="bg-primary-alt h-6 rounded-full" style="width: 80%;"></div>
                                                </div>
                                                <span class="ml-2 px-2 font-bold">80%</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
@endsection