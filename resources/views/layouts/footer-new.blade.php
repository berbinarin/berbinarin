<!-- Footer Section -->
<section class="footer">
    <img src="{{ asset('assets/images/landing/vector-wave.png') }}" alt="Wave Vector" class="w-full mb-0 lg:-mb-[80px] bg-[#F7F9FA]">
    <footer class="bg-[#EAF8FF] pt-1 pb-3 lg:py-10">
        <div class="mx-5 lg:mx-14 flex max-sm:flex-col flex-row justify-between items-start">
        
        <!-- Informasi Perusahaan -->
        <div class="text-left w-full lg:w-2/4 mb-4 lg:mb-0 space-y-4">
            <div class="flex items-center space-x-1">
                <img src="{{ asset('assets/images/landing/logo-berbinar.png') }}" alt="Logo Berbinar" class="w-auto h-8">
                <h4 class="text-[#3986A3] text-lg font-bold">PT. Berbinar Insightful Indonesia</h4>
            </div>
            <p class="text-[#6F6C90]">#SelaluAdaBuatKamu</p>
            <p class="text-[#6F6C90] w-2/3 max-sm:w-full">Jl. Kebonsari III No.1F, Kebonsari, Kec. Jambangan, Kota Surabaya, Jawa Timur, 60233</p>
        </div>
        
        <!-- Produk Berbinar -->
        <div class="text-left w-full lg:w-1/4 max-sm:mx-0 max-sm:mt-1 mx-4">
            <h4 class="text-[#75BADB] font-semibold max-sm:mb-2 mb-6">Produk Berbinar</h4>
            <ul class="space-y-2">
                <li><a href="{{ route('konseling-new') }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">Berbinar Konseling</a></li>
                <li><a href="{{ route('psikotest-new') }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">Berbinar Psikotes</a></li>
                <li><a href="{{ route('kelas-new') }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">Berbinar Class</a></li>
                <li><a href="{{ route('consulting-new') }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">Berbinar Consulting</a></li>
                <li><a href="https://tokopedia.link/gwgtSs9oUOb" target="_blank" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">MoodScan Tees</a></li>
                {{-- <li><a href="#" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">EmoShuffle</a></li> --}}
            </ul>
        </div>
        
        <!-- Lainnya -->
        <div class="text-left w-full lg:w-1/4 max-sm:mx-0 max-sm:mt-4 mx-4">
            <h4 class="text-[#75BADB] font-semibold max-sm:mb-2 mb-6">Lainnya</h4>
            <ul class="space-y-2">
                <li><a href="{{ route('faq-new') }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">FAQ</a></li>
                <li><a href="{{ route('term-condition-new') }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">Syarat & Ketentuan</a></li>
                <li><a href="{{ route('privacy-policy-new') }}" class="text-[16px] font-normal text-[#6F6C90] hover:text-gray-800">Kebijakan Privasi</a></li>
            </ul>
        </div>
        
        <!-- Sosial Media -->
        <div class="text-left w-full lg:w-1/4 max-sm:mx-0 max-sm:mt-4 mx-4">
            <h4 class="text-[#75BADB] font-semibold max-sm:mb-2 mb-6">Media Sosial</h4>
            <div class="flex flex-wrap -mx-2">
                <a href="https://x.com/PsikologiDiri?mx=2" class="px-2 mb-4" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/images/landing/asset-beranda/sosmed-icon/x.png') }}" alt="X" class="w-auto h-5 mx-auto">
                </a>
                <a href="https://www.instagram.com/berbinar.in/" class="px-2 mb-4" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/images/landing/asset-beranda/sosmed-icon/instagram.png') }}" alt="Instagram" class="w-auto h-6 mx-auto">
                </a>
                <a href="https://www.youtube.com/@berbinar" class="px-2 mb-4" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/images/landing/asset-beranda/sosmed-icon/youtube.png') }}" alt="Youtube" class="w-auto h-6 mx-auto">
                </a>
                <a href="https://www.linkedin.com/company/berbinar/?lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3BH62OB4vFS7yp93D8kOV0oQ%3D%3D" class="px-2 mb-4" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/images/landing/asset-beranda/sosmed-icon/linkedin.png') }}" alt="Linkedin" class="w-auto h-6 mx-auto">
                </a>
                <a href="https://wa.me/6282141869800" class="px-2 mb-4" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/images/landing/asset-beranda/sosmed-icon/whatsapp.png') }}" alt="Whatsapp" class="w-auto h-6 mx-auto">
                </a>
                <a href="https://www.tiktok.com/@berbinar.in?_t=8zrlrhuqnha&_r=1" class="px-2 mb-4" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/images/landing/asset-beranda/sosmed-icon/tiktok.png') }}" alt="TikTok" class="w-auto h-6 mx-auto">
                </a>
                <a href="https://www.facebook.com/berbinar.in" class="px-2 mb-4" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/images/landing/asset-beranda/sosmed-icon/facebook.png') }}" alt="Facebook" class="w-auto h-6 mx-auto">
                </a>
                <a href="https://open.spotify.com/user/31c274wo5o5x4tujcjrimf4kujhu?si=360d3bfa5b2742f4" class="px-2 mb-4" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/images/landing/asset-beranda/sosmed-icon/spotify.png') }}" alt="Spotify" class="w-auto h-6 mx-auto">
                </a>
                <a href="mailto:marketing.berbinar.in@gmail.com" class="px-2 mb-4" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/images/landing/asset-beranda/sosmed-icon/gmail.png') }}" alt="Gmail" class="w-auto h-6 mx-auto">
                </a>
                <a href="https://t.me/OfficialChannelBerbinar" class="px-2 mb-4" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/images/landing/asset-beranda/sosmed-icon/telegram.png') }}" alt="Telegram" class="w-auto h-6 mx-auto">
                </a>
            </div>
        </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="max-sm:mt-2 mt-8 mx-5 text-start lg:mx-14 border-t-2 border-[#3986A3] max-sm:pt-2 pt-4">
            <p class="text-md font-normal text-[#6F6C90]">Copyright ©2025 Berbinar Insightful Indonesia</p>
        </div>
    </footer>
</section>