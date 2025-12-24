<!-- Footer Section -->
<section class="footer">
    <img src="{{ asset("assets/images/landing/logo/vector-wave-natal.webp") }}" alt="Wave Vector" class="mb-0 w-full bg-[#F7F9FA] lg:-mb-[80px]" />
    <!-- dibawah yang biasa ini -->
    <!-- <img src="{{ asset("assets/images/landing/logo/vector-wave.webp") }}" alt="Wave Vector" class="mb-0 w-full bg-[#F7F9FA] lg:-mb-[80px]" /> -->

    <!-- #FFEAEA untuk natal, untuk default web warna #EAF8FF -->
    <footer class="bg-[#FFEAEA] pb-3 pt-1 lg:py-10">
        <div class="mx-5 flex flex-row items-start justify-between max-sm:flex-col lg:mx-14">
            <!-- Informasi Perusahaan -->
            <div class="mb-4 w-full space-y-4 text-left lg:mb-0 lg:w-2/4">
                <div class="flex items-center space-x-1">
                    <img src="{{ asset("assets/images/landing/logo/logo-berbinar.webp") }}" alt="Logo Berbinar" class="h-8 w-auto" />
                    <h4 class="text-lg font-bold text-[#FF060A]">PT. Berbinar Insightful Indonesia</h4>
                    <!-- <h4 class="text-lg font-bold text-[#3986A3]">PT. Berbinar Insightful Indonesia</h4> -->
                </div>
                <p class="text-[#6F6C90]">#SelaluAdaBuatKamu</p>
                <p class="w-2/3 text-[#6F6C90] max-sm:w-full">Jl. Kebonsari III No.1F, Kebonsari, Kec. Jambangan, Kota Surabaya, Jawa Timur, 60233</p>
            </div>

            <!-- Produk Berbinar -->
            <div class="mx-4 w-full text-left max-sm:mx-0 max-sm:mt-1 lg:w-1/4">
                <h4 class="mb-6 font-semibold text-[#FF060A] max-sm:mb-2">Produk Berbinar</h4>
                <!-- <h4 class="mb-6 font-semibold text-[#75BADB] max-sm:mb-2">Produk Berbinar</h4> -->
                <ul class="space-y-2">
                    <li><a href="{{ route("product.counseling.index") }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">Berbinar Konseling</a></li>
                    <li><a href="{{ route("product.psikotest.index") }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">Berbinar Psikotes</a></li>
                    <li><a href="{{ route("product.class.index") }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">Berbinar Class</a></li>
                    <li><a href="{{ route("product.consulting.index") }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">Berbinar Consulting</a></li>
                    <li><a href="https://tokopedia.link/gwgtSs9oUOb" target="_blank" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">MoodScan Tees</a></li>
                    <li><a href="{{ route("product.emo-shuffle.index") }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">EmoShuffle</a></li>
                </ul>
            </div>

            <!-- Lainnya -->
            <div class="mx-4 w-full text-left max-sm:mx-0 max-sm:mt-4 lg:w-1/4">
                <h4 class="mb-6 font-semibold text-[#FF060A] max-sm:mb-2">Lainnya</h4>
                <!-- <h4 class="mb-6 font-semibold text-[#75BADB] max-sm:mb-2">Lainnya</h4> -->
                <ul class="space-y-2">
                    <li><a href="{{ route("home.faq") }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">FAQ</a></li>
                    <li><a href="{{ route("home.term-condition") }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">Syarat & Ketentuan</a></li>
                    <li><a href="{{ route("home.privacy-policy") }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">Kebijakan Privasi</a></li>
                </ul>
            </div>

            <!-- Sosial Media -->
            <div class="mx-4 w-full text-left max-sm:mx-0 max-sm:mt-4 lg:w-1/4">
                <h4 class="mb-6 font-semibold text-[#FF060A] max-sm:mb-2">Media Sosial</h4>
                <!-- <h4 class="mb-6 font-semibold text-[#75BADB] max-sm:mb-2">Media Sosial</h4> -->
                <div class="-mx-2 flex flex-wrap">
                    <a href="https://x.com/PsikologiDiri?mx=2" class="mb-4 px-2" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset("assets/images/landing/logo/sosmed-icon/x.webp") }}" alt="X" class="mx-auto h-5 w-auto" />
                    </a>
                    <a href="https://www.instagram.com/berbinar.in/" class="mb-4 px-2" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset("assets/images/landing/logo/sosmed-icon/instagram.webp") }}" alt="Instagram" class="mx-auto h-6 w-auto" />
                    </a>
                    <a href="https://www.youtube.com/@berbinar" class="mb-4 px-2" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset("assets/images/landing/logo/sosmed-icon/youtube.webp") }}" alt="Youtube" class="mx-auto h-6 w-auto" />
                    </a>
                    <a href="https://www.linkedin.com/company/berbinar/?lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3BH62OB4vFS7yp93D8kOV0oQ%3D%3D" class="mb-4 px-2" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset("assets/images/landing/logo/sosmed-icon/linkedin.webp") }}" alt="Linkedin" class="mx-auto h-6 w-auto" />
                    </a>
                    <a href="https://wa.me/6282141869800" class="mb-4 px-2" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset("assets/images/landing/logo/sosmed-icon/whatsapp.webp") }}" alt="Whatsapp" class="mx-auto h-6 w-auto" />
                    </a>
                    <a href="https://www.tiktok.com/@berbinar.in?_t=8zrlrhuqnha&_r=1" class="mb-4 px-2" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset("assets/images/landing/logo/sosmed-icon/tiktok.webp") }}" alt="TikTok" class="mx-auto h-6 w-auto" />
                    </a>
                    <a href="https://www.facebook.com/berbinar.in" class="mb-4 px-2" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset("assets/images/landing/logo/sosmed-icon/facebook.webp") }}" alt="Facebook" class="mx-auto h-6 w-auto" />
                    </a>
                    <a href="https://open.spotify.com/user/31c274wo5o5x4tujcjrimf4kujhu?si=360d3bfa5b2742f4" class="mb-4 px-2" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset("assets/images/landing/logo/sosmed-icon/spotify.webp") }}" alt="Spotify" class="mx-auto h-6 w-auto" />
                    </a>
                    <a href="mailto:marketing.berbinar.in@gmail.com" class="mb-4 px-2" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset("assets/images/landing/logo/sosmed-icon/gmail.webp") }}" alt="Gmail" class="mx-auto h-6 w-auto" />
                    </a>
                    <a href="https://t.me/OfficialChannelBerbinar" class="mb-4 px-2" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset("assets/images/landing/logo/sosmed-icon/telegram.webp") }}" alt="Telegram" class="mx-auto h-6 w-auto" />
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mx-5 mt-8 border-t-2 border-[#3986A3] pt-4 text-start max-sm:mt-2 max-sm:pt-2 lg:mx-14">
            <p class="text-md font-normal text-[#6F6C90]">Copyright ©2025 Berbinar Insightful Indonesia</p>
        </div>
    </footer>
</section>
