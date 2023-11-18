@extends('layouts.main', [
    'title' => 'Konseling | Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Konseling',
])

@section('content')
<!--========== HOME ==========-->
<section class="w-full mt-[20vh] mb-[6rem]" id="home">
    <div class="max-w-7xl mx-auto">
        <div class="home__data flex flex-col items-center">
            <div class="mb-12">
                <h1 class="about__title text-center">Konseling</h1>
                <div class="share__img flex-2 mx-auto w-full flex items-center justify-center">
                    <img src="{{ asset('assets/images/conversation.svg') }}" alt="" class="w-[18rem]">
                </div>
            </div>
            
            <p class="home__description md:w-[70%] w-[92%] text-center -mt-10">
                Dapatkan konseling yang mengubah hidup dari para psikolog dan peer counselor untuk mencapai pertumbuhan pribadi yang luar biasa. Segera temukan solusi yang tepat untuk masalah yang Anda hadapi dan mulai menapaki jalan menuju hidup yang lebih baik.
            </p>

            <a href="https://bit.ly/CounselingWithBerbinar" class="button">Lakukan Konseling</a>
        </div>   
    </div>
</section>

<section class="py-6">
  <div class="container flex flex-col items-center justify-center p-4 mx-auto  sm:p-10">
    <h1 class="home__title md:w-full w-[25rem] md:text-[2.5rem] text-[2.3rem] text-center">Psikolog Kami</h1>
    <p class="max-w-2xl text-center">Tim kami terdiri dari psikolog berpengalaman, membantu Anda menavigasi hidup dengan bijaksana, memberikan dukungan emosional</p>

		<div class="grid w-full grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-4 items-center mt-10">
			<div class="space-y-4">
				<img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500" src="{{ asset('assets/images/konseling/psikolog1.jpg') }}">
				<div class="flex flex-col items-center">
					<h4 class="text-xl font-semibold text-center">Daniel Reyonald Bungaran, M.Psi.</h4>
					<p class="text-sm">S1 Unair, Mapro Unair</p>
				</div>
			</div>
			<div class="space-y-4">
				<img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500" src="{{ asset('assets/images/konseling/psikolog2.jpg') }}">
				<div class="flex flex-col items-center">
					<h4 class="text-xl font-semibold text-center">Danny Sanjaya Arfensia, M.Psi.</h4>
					<p class="text-sm">S1 Unair, Mapro Unair</p>
				</div>
			</div>
			<div class="space-y-4">
				<img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500" src="{{ asset('assets/images/konseling/psikolog7.jpg') }}">
				<div class="flex flex-col items-center">
					<h4 class="text-xl font-semibold text-center">Yeni Rahma Dwijayanti, M.Psi.</h4>
					<p class="text-sm"> S1 Unair, Mapro Unair</p>
				</div>
			</div>
			<div class="space-y-4">
				<img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500" src="{{ asset('assets/images/konseling/psikolog6.jpg') }}">
				<div class="flex flex-col items-center">
					<h4 class="text-xl font-semibold text-center">Putu Diana Wulandari, S.Psi., M.Psi.</h4>
					<p class="text-sm">S1 Udayana, Mapro Unair
          </p>
				</div>
			</div>
		</div>

    <div class="flex flex-col md:flex-row gap-16 mt-10 w-full items-center justify-center">
      <div class="space-y-4">
        <img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500" src="{{ asset('assets/images/konseling/psikolog4.jpg') }}">
        <div class="flex flex-col items-center">
          <h4 class="text-xl font-semibold text-center">Novia Solichah, M.Psi.</h4>
          <p class="text-sm">S1 Uinsa, Mapro Unair</p>
        </div>
      </div>
      <div class="space-y-4">
        <img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500" src="{{ asset('assets/images/konseling/psikolog5.jpg') }}">
        <div class="flex flex-col items-center">
          <h4 class="text-xl font-semibold text-center">Putri Maharani, M.Psi.</h4>
          <p class="text-sm">S1 Unair, Mapro Unair</p>
        </div>
      </div>
    </div>
	</div>
</section>

<section class="py-6">
  <div class="container flex flex-col items-center justify-center p-4 mx-auto  sm:p-10">
    <h1 class="home__title md:w-full w-[25rem] md:text-[2.5rem] text-[2.3rem] text-center">Peer Counselor Kami</h1>
    <p class="max-w-2xl text-center">Tim kami terdiri dari peer counselor berpengalaman, membantu Anda menavigasi hidup dengan bijaksana, memberikan dukungan emosional</p>

		<div class="grid w-full grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-4 items-center mt-10">
			<div class="space-y-4">
				<img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500" src="{{ asset('assets/images/konseling/peer1.PNG') }}">
				<div class="flex flex-col items-center">
					<h4 class="text-xl font-semibold text-center">Sarah Hasanah Delonix R</h4>
					<p class="text-sm">Universitas Negeri Surabaya</p>
				</div>
			</div>
			<div class="space-y-4">
				<img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500" src="{{ asset('assets/images/konseling/peer2.jpg') }}">
				<div class="flex flex-col items-center">
					<h4 class="text-xl font-semibold text-center">Wulantika <br></h4>
					<p class="text-sm">Universitas Negeri Semarang</p>
				</div>
			</div>
			<div class="space-y-4">
				<img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500" src="{{ asset('assets/images/konseling/peer3.jpeg') }}">
				<div class="flex flex-col items-center">
					<h4 class="text-xl font-semibold text-center">Imtiyaaz Nahdiyant E</h4>
					<p class="text-sm">Universitas Diponegoro</p>
				</div>
			</div>
      <div class="space-y-4">
				<img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500" src="{{ asset('assets/images/konseling/peer4.jpeg') }}">
				<div class="flex flex-col items-center">
					<h4 class="text-xl font-semibold text-center">Marella Indira</h4>
					<p class="text-sm">Universitas Muhammadiyah Surakarta</p>
				</div>
			</div>
		</div>

    <div class="flex flex-col md:flex-row w-full gap-16 mt-10 items-center justify-center">
      <div class="space-y-4">
				<img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500" src="{{ asset('assets/images/konseling/psikolog3.jpeg') }}">
				<div class="flex flex-col items-center">
					<h4 class="text-xl font-semibold text-center">Karina Rae Bilqis</h4>
					<p class="text-sm">Universitas Airlangga </p>
				</div>
			</div>
    </div>
	</div>
</section>

<section class="">
    <div class="container px-6 py-8 mx-auto">
        <p class="text-base text-center">
            Pilihan Jenis Konseling
        </p>

        <h1 class="mt-2 text-[1.25rem] font-semibold text-center capitalize lg:text-3xl">Konseling Bersama Psikolog</h1>

        <div class="mt-3 space-y-8 xl:mt-8">
            <div class="flex items-center justify-between max-w-2xl px-10 py-6 mx-auto border cursor-pointer rounded-xl dark:border-gray-700">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>

                    <div class="flex flex-col items-start mx-5 space-y-1">
                        <h2 class="text-lg font-medium sm:text-[1.2rem]">Online</h2>
                        <div class="flex md:flex-row flex-col gap-2">
                            <div class="px-2 text-xs text-[#3986a3] bg-gray-100 md:rounded-full rounded-lg sm:px-4 md:py-1 py-2">
                                Weekday 150k/jam
                            </div>
                            
                            <div class="px-2 text-xs text-[#3986a3] bg-gray-100 md:rounded-full rounded-lg sm:px-4 md:py-1 py-2">
                                Weekend 200k/jam
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <h2 class="text-2xl font-semibold sm:text-3xl">IDR 250k <span class="text-base font-medium"></span></h2> -->
            </div>

            <div class="flex items-center justify-between max-w-2xl px-10 py-6 mx-auto border border-[#3986a3] cursor-pointer rounded-xl">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3] sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>

                    <div class="flex flex-col items-start mx-5 space-y-1">
                        <h2 class="text-lg font-medium sm:text-[1.2rem]">Offline</h2>
                        <div class="flex gap-2">
                            <div class="px-2 text-xs text-[#3986a3] bg-gray-100 md:rounded-full rounded-lg sm:px-4 md:py-1 py-2">
                                Weekday 175k/jam
                            </div>
                            
                            <div class="px-2 text-xs text-[#3986a3] bg-gray-100 md:rounded-full rounded-lg sm:px-4 md:py-1 py-2">
                                Weekend 225k/jam
                            </div>

                            <div class="px-2 text-xs text-[#3986a3] bg-gray-100 md:rounded-full rounded-lg sm:px-4 md:py-1 py-2">
                                Khusus Wilayah Surabaya
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <h2 class="text-2xl font-semibold text-[#3986a3] sm:text-3xl">IDR 350k <span class="text-base font-medium"></span></h2> -->
            </div>
        </div>

        <h1 class="mt-2 text-[1.25rem] font-semibold text-center capitalize lg:text-3xl mt-20">Konseling Bersama <br>Peer Counselor</h1>

        <div class="mt-3 space-y-8 xl:mt-8">

            <div class="flex items-center justify-between max-w-2xl px-10 py-6 mx-auto border cursor-pointer rounded-xl dark:border-gray-700">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>

                    <div class="flex flex-col items-start mx-5 space-y-1">
                        <h2 class="text-lg font-medium sm:text-[1.2rem]">Online</h2>
                        <div class="flex md:flex-row flex-col gap-2">
                            <div class="px-2 text-xs text-[#3986a3] bg-gray-100 md:rounded-full rounded-lg sm:px-4 md:py-1 py-2">
                                45k/jam
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <h2 class="text-2xl font-semibold sm:text-3xl">IDR 250k <span class="text-base font-medium"></span></h2> -->
            </div>
            
            <div class="flex items-center justify-between max-w-2xl px-10 py-6 mx-auto border border-[#3986a3] cursor-pointer rounded-xl">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3] sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>

                    <div class="flex flex-col items-start mx-5 space-y-1">
                        <h2 class="text-lg font-medium sm:text-[1.2rem]">Offline</h2>
                        <div class="flex gap-2">
                            
                            <div class="px-2 text-xs text-[#3986a3] bg-gray-100 md:rounded-full rounded-lg sm:px-4 md:py-1 py-2">
                                55k/jam
                            </div>

                            <div class="px-2 text-xs text-[#3986a3] bg-gray-100 md:rounded-full rounded-lg sm:px-4 md:py-1 py-2">
                                Khusus Wilayah Surabaya & Semarang
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <h2 class="text-2xl font-semibold text-[#3986a3] sm:text-3xl">IDR 350k <span class="text-base font-medium"></span></h2> -->
            </div>
        </div>
    </div>
</section>

<section class="my-8">
    <div class="container flex flex-col items-center p-4 mx-auto space-y-6 md:p-8">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#3986a3" class="w-16 h-16 dark:text-violet-400">
            <polygon points="328.375 384 332.073 458.999 256.211 406.28 179.924 459.049 183.625 384 151.586 384 146.064 496 182.756 496 256.169 445.22 329.242 496 365.936 496 360.414 384 328.375 384"></polygon>
            <path d="M415.409,154.914l-2.194-48.054L372.7,80.933,346.768,40.414l-48.055-2.2L256,16.093,213.287,38.219l-48.055,2.2L139.3,80.933,98.785,106.86l-2.194,48.054L74.464,197.628l22.127,42.715,2.2,48.053L139.3,314.323l25.928,40.52,48.055,2.195L256,379.164l42.713-22.126,48.055-2.195,25.928-40.52L413.214,288.4l2.195-48.053,22.127-42.715Zm-31.646,76.949L382,270.377l-32.475,20.78-20.78,32.475-38.515,1.76L256,343.125l-34.234-17.733-38.515-1.76-20.78-32.475L130,270.377l-1.759-38.514L110.5,197.628,128.237,163.4,130,124.88,162.471,104.1l20.78-32.474,38.515-1.76L256,52.132l34.234,17.733,38.515,1.76,20.78,32.474L382,124.88l1.759,38.515L401.5,197.628Z"></path>
        </svg>
        <p class="px-6 py-2 text-2xl font-semibold text-center sm:font-sembold sm:text-3xl md:text-4xl lg:max-w-2xl xl:max-w-4xl">"Saya senang dapat melakukan layanan konseling ini, mendapat seorang konselor sebaya membuat saya lebih nyaman untuk bercerita dan banyak pengaruh positif yang saya dapatkan setelahnya."</p>
        <div class="flex justify-center items-center space-x-3">
            <img src="https://source.unsplash.com/80x80/?portrait?1" alt="" class="w-20 h-20 bg-center bg-cover rounded-md dark:bg-gray-500 dark:bg-gray-700">
            <div>
                <p class="leading-tight">Anonymous</p>
                <p class="text-sm leading-tight">Klien Konseling Berbinar</p>
            </div>
        </div>
    </div>
</section>

<section class="w-full mb-[6rem]" id="home">
    <div class="max-w-3xl mx-auto">
        <div class="home__data flex flex-col items-center">
            <div class="">
                <h2 class="section-title-center font-semibold">Frequently Asked Question (FAQ)</h2>
            </div>
            
            <ul class="flex flex-col">
                <li class="border rounded-lg my-2" x-data="accordion(1)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Apa perbedaan Psikolog dan Peer Counselor?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    x-ref="tab"
                    :style="handleToggle()"
                    class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all"
                  >
                    <p class="p-3 text-gray-900">
                        Psikolog merupakan tenaga profesional yang telah menyelesaikan pendidikan S1 Psikologi dan melanjutkan kuliah di program studi profesi untuk mendapatkan gelar Psikolog dan M.Psi. Sedangkan Peer Counselor merupakan individu yang telah mendapatkan pelatihan dari psikolog sehingga mempunyai kemampuan dasar untuk melakukan konseling termasuk dalam mengidentifikasi permasalahan dengan usia sebaya.
                    </p>
                  </div>
                </li>

                <li class="border border-[#3986a3] rounded-lg my-2" x-data="accordion(2)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Apabila sesi konseling telah berakhir, dan saya ingin menambah durasi sesi konseling apalah boleh?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                        Menambah durasi konseling sangat diperbolehkan. Namun, durasi konseling ditentukan berdasarkan kebutuhan dalam penanganan suatu masalah. Sehingga, yang dapat merekomendasikan adalah psikolog dan keputusan dibuat bersama antara klien dengan psikolog atau peer counselor. Jika klien bersedia, maka durasi konseling akan dilanjutkan.
                    </p>
                  </div>
                </li>

                <li class="border rounded-lg my-2" x-data="accordion(3)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Apakah privasi saya akan terjamin?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                        Tentu saja, seluruh hal yang akan kamu sampaikan saat sesi konseling akan dijaga kerahasiaannya oleh psikolog/peer counsellor kami. Selain itu, psikolog serta peer counsellor kami sangat menjunjung tinggi kode etik psikologi, sehingga kamu dapat bebas dalam menyampaikan sesuatu saat sesi konseling berlangsung. 
                    </p>
                  </div>
                </li>

                <li class="border border-[#3986a3] rounded-lg my-2" x-data="accordion(4)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Apakah ada batasan usia untuk konseling?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                        Tidak ada batasan usia dalam konseling, sehingga konseling bisa digunakan untuk berbagai usia. 
                    </p>
                  </div>
                </li>

                <li class="border rounded-lg my-2" x-data="accordion(5)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Apakah saya bisa memilih psikolog yang menangani?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                        SobatBinar tidak dapat memilih psikolog dengan nama tertentu. Namun demi kenyamanan SobatBinar, SobatBinar diperbolehkan mengajukan karakter psikolog yang diinginkan (Seperti: Jenis kelamin tertentu, agama tertentu, usia tertentu, maupun psikolog yang sudah menikah ataupun belum)
                    </p>
                  </div>
                </li>
              </ul>
        </div>   
    </div>
</section>

<!--========== SEND GIFT ==========-->
<section class="send section">
    <div class="send__container bd-container bd-grid">
        <div class="send__content">
            <h2 class="section-title-center send__title font-semibold">Hubungi Kami Sekarang</h2>
            <p class="send__description">Buat janji dan lakukan konseling dengan tim Berbinar Insightful Indonesia untuk layanan konseling online ataupun offline.</p>
            <form action="">
                <div class="send__direction">
                    <input type="text" placeholder="Email address" class="send__input">
                    <a href="#" class="button">Kirim</a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection