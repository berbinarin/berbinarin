@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
    ]
)

@section('style')
<style>
    .card:hover {
        scale: 105%;
        transition-duration: 0.3s;
    }

    .card {
        transition-duration: 0.3s;
    }

    .card:hover img.grayscale {
        filter: grayscale(0%);
        transition: filter 0.3s ease-in-out;
    }

    img.grayscale {
        transition: filter 0.3s ease-in-out;
    }

    /* Email Modal Styles */
    .email-modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .email-modal.show {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .email-modal-content {
        background: white;
        padding: 40px;
        border-radius: 20px;
        max-width: 400px;
        width: 90%;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        animation: slideUp 0.3s ease-in-out;
        text-align: center;
    }

    @keyframes slideUp {
        from {
            transform: translateY(50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .email-modal-content h3 {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #333;
    }

    .email-modal-content p {
        color: #666;
        margin-bottom: 30px;
        font-size: 14px;
    }

    .email-modal-content input {
        width: 100%;
        padding: 12px 16px;
        border: 2px solid #E0E0E0;
        border-radius: 10px;
        font-size: 14px;
        margin-bottom: 20px;
        box-sizing: border-box;
        transition: border-color 0.3s ease;
    }

    .email-modal-content input:focus {
        outline: none;
        border-color: #F7B23B;
    }

    .email-info {
        margin-bottom: 30px;
    }

    .email-company-name {
        font-size: 20px;
        font-weight: 600;
        color: #333;
        margin-bottom: 15px;
    }

    .email-address {
        font-size: 16px;
        color: #666;
        word-break: break-all;
        font-family: monospace;
        background: #f5f5f5;
        padding: 12px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .email-logo {
        text-align: center;
        margin-bottom: 20px;
    }

    .email-logo img {
        width: 60px;
        height: 60px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .email-modal-content button {
        width: 100%;
        padding: 12px;
        background: linear-gradient(to right, #F7B23B, #56A0BA);
        color: white;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: transform 0.2s ease;
        margin-bottom: 10px;
    }

    .email-modal-content button:hover {
        transform: translateY(-2px);
    }

    .email-modal-content .btn-secondary {
        background: #f0f0f0;
        color: #333;
        margin-top: 10px;
    }

    .email-modal-content .btn-secondary:hover {
        background: #e0e0e0;
    }

    .email-close-btn {
        position: absolute;
        right: 20px;
        top: 20px;
        font-size: 28px;
        font-weight: bold;
        color: #999;
        cursor: pointer;
        background: none;
        border: none;
        padding: 0;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: color 0.3s ease;
    }

    .email-close-btn:hover {
        color: #333;
    }

    .email-modal-content.relative {
        position: relative;
    }

    .success-message {
        color: #4CAF50;
        font-size: 14px;
        margin-top: 10px;
        display: none;
    }

    .success-message.show {
        display: block;
    }
</style>
@endsection

@section("content")
<section class="pt-32 lg:pt-40 px-5 lg:px-14 overflow-x-hidden">
    <!-- BLUR -->
    <div class="relative z-0 h-0 lg:hidden">
        <div class="absolute -left-32 z-0 md:-left-40" style="width: 400px; height: 400px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #F7B23B; filter: blur(60px); opacity: 0.6; top: -275px"></div>
        <div class="absolute -right-32 z-0 md:-right-40" style="width: 250px; height: 400px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #56A0BA; filter: blur(60px); opacity: 0.5; top: -300px"></div>
    </div>

    <div class="relative z-0 h-0 hidden lg:block">
        <div class="absolute -left-32 z-0 md:-left-40" style="width: 600px; height: 400px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #F7B23B; filter: blur(60px); opacity: 0.5; top: -250px"></div>
        <div class="absolute left-72 z-0 xl:left-80" style="width: 600px; height: 500px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #56A0BA; filter: blur(60px); opacity: 0.5; top: -425px"></div>
        <div class="absolute right-20 z-0 md:right-12" style="width: 500px; height: 500px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #2F586F; filter: blur(60px); opacity: 0.4; top: -300px"></div>
        <div class="absolute -right-0 z-0 md:-right-0" style="width: 700px; height: 400px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #FADA8D; filter: blur(60px); opacity: 0.5; top: -400px"></div>
    </div>

    <div class="flex flex-col gap-6 z-10 pb-10">
        <h1 class="text-3xl lg:text-4xl font-semibold text-center z-10">Ajukan Kolaborasi</h1>

        <div class="grid grid-cols-1 gap-3 z-10">
            <h2 class="font-semibold lg:text-xl xl:text-2xl">Informasi</h2>

            <div class="grid lg:grid-cols-3 gap-3 lg:gap-5 z-10">
                <!-- Card -->
                <a href="https://berbinar.in/produk" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/informasi/produk-berbinar.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">Produk Berbinar</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

                <a href="https://docs.google.com/forms/d/e/1FAIpQLScPYSF-eZmMBLxNGukMjtxUvQGF5lrp-BoKTfhLVbCjfoCzIw/viewform" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/informasi/pendaftaran-berbinar-consulting.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">Pendaftaran Berbinar Consulting</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

                <a href="https://linktr.ee/BerbinarPlus" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/informasi/berbinar-plus.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">Berbinar+</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

                <a href="https://berbinar.in/produk/konseling/daftar-konseling" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/informasi/pendaftaran-konseling.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">Pendaftaran Konseling</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

                <a href="http://bit.ly/DaftarPsikotesBerbinar" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/informasi/pendaftaran-psikotes.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">Pendaftaran Psikotes</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

                <a href="https://tokopedia.link/gwgtSs9oUOb" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/informasi/moodscan-tees.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">MoodScan Tees</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

            </div>

        </div>

        <div class="grid grid-cols-1 gap-3 z-10">
            <h2 class="font-semibold lg:text-xl xl:text-2xl">Media Sosial</h2>

            <div class="grid lg:grid-cols-3 gap-3 lg:gap-5 z-10">
                <!-- Card -->
                <a href="https://instagram.com/berbinar.in" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/media-sosial/instagram.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">Instagram</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

                <a href="https://www.tiktok.com/@berbinar.in" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/media-sosial/tiktok.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">Tiktok</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

                <a href="https://twitter.com/PsikologiDiri" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/media-sosial/x.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">X</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

                <a href="https://www.youtube.com/channel/UCYVFoTowxzsAFT86emL336Q" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/media-sosial/youtube.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">Youtube</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

                <a href="https://www.linkedin.com/company/berbinar/mycompany/" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/media-sosial/linkedin.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">Linkedin</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

                <a href="https://open.spotify.com/user/31c274wo5o5x4tujcjrimf4kujhu?si=360d3bfa5b2742f4" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/media-sosial/spotify.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">Spotify</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

                <a href="https://open.spotify.com/show/4JeQ0oSXaWBgaUj4MguPrl?si=eabc3f6dcb814b9b" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/media-sosial/podcast.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">Podcast</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

                <a href="https://t.me/OfficialChannelBerbinar" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/media-sosial/telegram.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">Telegram</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

            </div>

        </div>

        <div class="grid grid-cols-1 gap-3 z-10">
            <h2 class="font-semibold lg:text-xl xl:text-2xl">Kontak</h2>

            <div class="grid lg:grid-cols-3 gap-3 lg:gap-5 z-10">
                <!-- Card -->
                <button onclick="openEmailModal()" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box; border: none; cursor: pointer; width: 100%; text-align: left;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/kontak/gmail.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">Email</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </button>

                <a href="https://wa.me/6282141869800" target="_blank" class="bg-white card lg:h-[80px] rounded-xl shadow-lg px-5 py-6 flex flex-row items-center justify-between gap-4" style="background: linear-gradient(to right, #F7B23B, #56A0BA) top/100% 5px no-repeat, white; border-radius: 13px; background-clip: padding-box, border-box;">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('assets/images/landing/kolaborasi/kontak/whatsapp.webp') }}" class="w-[24px] h-auto" alt="">
                        <p class="font-semibold text-xs lg:text-sm xl:text-base">WhatsApp</p>
                    </div>
                    <img src="{{ asset('assets/images/landing/kolaborasi/external-link-active.webp')}}" alt="" class="w-[21px] h-[21px] link grayscale justify-self-end">
                </a>

            </div>

        </div>
    </div>
</section>

<!-- Email Modal -->
<div id="emailModal" class="email-modal">
    <div class="email-modal-content relative">
        <button class="email-close-btn" onclick="closeEmailModal()">&times;</button>

        <div class="email-logo">
            <img src="https://mail.google.com/mail/u/0/images/logo.png" alt="Gmail Logo">
        </div>

        <div class="email-info">
            <div class="email-company-name">Berbinar Insightful Indonesia</div>
            <div class="email-address">marketing.berbinar.in@gmail.com</div>
        </div>

        <button onclick="saveToContacts()">Save to Contacts</button>
        <button class="btn-secondary" onclick="closeEmailModal()">Close</button>
    </div>
</div>

<script>
    function openEmailModal() {
        document.getElementById('emailModal').classList.add('show');
    }

    function closeEmailModal() {
        document.getElementById('emailModal').classList.remove('show');
    }

    function saveToContacts() {
        // Generate vCard format with photo
        const vcard = `BEGIN:VCARD
        VERSION:3.0
        FN:Berbinar Insightful Indonesia
        ORG:Berbinar Insightful Indonesia
        PHOTO;VALUE=URI:https://mail.google.com/mail/u/0/images/logo.png
        END:VCARD`;

        // Create blob and download
        const blob = new Blob([vcard], { type: 'text/vcard;charset=utf-8' });
        const url = URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.href = url;
        link.download = 'Berbinar_Insightful_Indonesia.vcf';
        link.click();
        URL.revokeObjectURL(url);

        // Show success message
        alert('Contact downloaded! Silakan buka dengan Microsoft Outlook untuk menyimpan ke Contacts.');
        closeEmailModal();
    }

    // Close modal when clicking outside
    document.getElementById('emailModal').addEventListener('click', function(event) {
        if (event.target == this) {
            closeEmailModal();
        }
    });
</script>

@endsection
