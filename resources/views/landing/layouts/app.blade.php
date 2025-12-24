<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- Header --}}
        @include("landing.partials.header")

        {{-- Meta --}}
        @yield("meta")

        {{-- Additional Style --}}
        @yield("style")
        <style>
            /* Styling buat salju, bisa dihapus kalo periode event udahan */
            .lottie-segment {
                width: 100%;
                height: 100%;
                display: none;
            }

            @media screen and (max-width: 768px) {
                .lottie-container-mobile {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-around;
                }

                .lottie-container-mobile .lottie-segment {
                    display: block;
                    height: calc(100vh / 3);
                }
            }

            @media screen and (min-width: 769px) {
                #lottie-snow-1 {
                    display: block;
                    height: 100vh;
                }
            }
        </style>
    </head>
    <body class="relative w-full overflow-x-hidden">
        {{-- Navbar --}}
        @include("landing.partials.navbar")

        <main class="relative flex w-full flex-col bg-[#F7F9FA] font-plusJakartaSans">
            {{-- Main Content --}}
            <div id="lottie-snow-wrapper" style="position: fixed; inset: 0; width: 100vw; height: 100vh; z-index: 50; pointer-events: none" class="lottie-container-mobile">
                <div id="lottie-snow-1" class="lottie-segment"></div>
                <div id="lottie-snow-2" class="lottie-segment"></div>
                <div id="lottie-snow-3" class="lottie-segment"></div>
            </div>
            @yield("content")
        </main>

        {{-- Footer --}}
        @include("landing.partials.footer")

        {{-- Script --}}
        @include("landing.partials.script")

        {{-- Additional Script --}}
        @yield("script")

        {{-- Alert Component --}}
        @include("components.alert")
    </body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const animationPath = '/let-it-snow.json';
            const isMobile = window.matchMedia('(max-width: 768px)').matches;

            if (isMobile) {
                const segments = ['lottie-snow-1', 'lottie-snow-2', 'lottie-snow-3'];

                segments.forEach((id) => {
                    lottie.loadAnimation({
                        container: document.getElementById(id),
                        renderer: 'svg',
                        loop: true,
                        autoplay: true,
                        path: animationPath,
                        // preserveAspectRatio: 'xMidYMid slice',
                    });
                });
            } else {
                lottie.loadAnimation({
                    container: document.getElementById('lottie-snow-1'),
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: animationPath,
                });
            }
        });
    </script>   
</html>
