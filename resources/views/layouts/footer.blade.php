{{-- FOOTER --}}
<footer class="w-full font-plusJakartaSans mt-16 px-10 py-16 bg-blur-bg rounded-tl-3xl rounded-tr-3xl z-40">
    <div class="flex flex-col md:flex-row gap-4 border-b-primary border-b-2 pb-5 max-w-6xl mx-auto">
        <div class="flex-1 flex flex-col gap-5">
            <div class="flex gap-2 items-center">
                <img src="{{ asset('assets/images/logo-berbinar.png') }}" alt="Logo Berbinar Insightful Indonesia"
                    title="Logo Berbinar Insightful Indonesia" class="w-[40px]">
                <h5 class="text-lg text-primary font-bold">PT. Berbinar Insightful Indonesia</h5>
            </div>
            <p class="text-base text-disabled">Kami hadir untuk memberikan layanan psikologi terbaik di Indonesia</p>
        </div>
        <div class="flex-1 flex flex-col gap-5 md:ml-10">
            <div class="flex gap-2 items-center">
                <h5 class="text-lg text-primary font-bold">Produk Berbinar</h5>
            </div>
            <div class="flex flex-col gap-2">
                <a href="{{ route('counseling') }}" class="text-base text-disabled">Konseling</a>
                <a href="{{ route('psikotest') }}" class="text-base text-disabled">Tes Psikotes</a>
                <a href="{{ route('class') }}" class="text-base text-disabled">Kelas Berbinar</a>
            </div>
        </div>
        <div class="flex-1 flex flex-col gap-5">
            <div class="flex gap-2 items-center">
                <h5 class="text-lg text-primary font-bold">Layanan Berbinar</h5>
            </div>
            <div class="flex flex-col gap-2">
                <a href="{{ route('home') }}" class="text-base text-disabled">Home</a>
                <a href="{{ route('about') }}" class="text-base text-disabled">Tentang Kami</a>
                <a href="{{ route('products') }}" class="text-base text-disabled">Produk Berbinar</a>
                <a href="{{ route('contact') }}" class="text-base text-disabled">Kontak</a>
                <a href="{{ route('hiring') }}" class="text-base text-disabled">Berbinar Careers</a>
                <a href="{{ route('workWithUs') }}" class="text-base text-disabled">Work With Us</a>
            </div>
        </div>
        <div class="flex-1 flex flex-col gap-5">
            <div class="flex gap-2 items-center">
                <h5 class="text-lg text-primary font-bold">Sosial Media</h5>
            </div>
            <div class="flex flew-row gap-5 flex-wrap">
                <a href="https://www.instagram.com/berbinar.in/" class="flex items-center justify-center"
                    target="_blank">
                    <i class='bx bxl-instagram-alt text-primary text-[30px]'></i>
                </a>
                <a href="https://www.youtube.com/@berbinar" class="flex items-center justify-center" target="_blank">
                    <i class='bx bxl-youtube text-primary text-[30px]'></i>
                </a>
                <a href="https://www.tiktok.com/@berbinar.in?_t=8zrlrhuqnha&_r=1"
                    class="flex items-center justify-center" target="_blank">
                    <i class='bx bxl-tiktok text-primary text-[30px]'></i>
                </a>
                <a href="https://twitter.com/PsikologiDiri" class="flex items-center justify-center" target="_blank">
                    <i class='bx bxl-twitter text-primary text-[30px]'></i>
                </a>
                <a href="https://www.linkedin.com/company/berbinar/?lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3BH62OB4vFS7yp93D8kOV0oQ%3D%3D"
                    class="flex items-center justify-center" target="_blank">
                    <i class='bx bxl-linkedin text-primary text-[30px]'></i>
                </a>
                <a href="https://t.me/OfficialChannelBerbinar" class="flex items-center justify-center" target="_blank">
                    <i class='bx bxl-telegram text-primary text-[30px]'></i>
                </a>
            </div>
        </div>
    </div>
    <div class="flex gap-5 items-center justify-between mt-5 max-w-6xl mx-auto">
        <p class="text-base text-disabled"> Copyright © 2024 Berbinar Insightful Indonesia</p>
        <p class="text-disabled">
            <a href="https://berbinar.in/credit-web">Behind The Web</a> | All Rights Reserved | <a
                href="https://berbinar.in/term-condition">Terms and Conditions</a> | <a
                href="https://berbinar.in/privacy-policy">Privacy Policy</a>
        </p>
    </div>
</footer>