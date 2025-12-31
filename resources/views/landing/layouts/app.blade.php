<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- Header --}}
        @include("landing.partials.header")

        {{-- Meta --}}
        @yield("meta")

        {{-- Additional Style --}}
        @yield("style")
    </head>
    <body class="relative w-full overflow-x-hidden">
        {{-- Navbar --}}
        @include("landing.partials.navbar")

        <main class="relative flex w-full flex-col bg-[#F7F9FA] font-plusJakartaSans">
            {{-- Main Content --}}
            <div id="lottie-snow-wrapper" style="position: fixed; inset: 0; width: 100vw; height: 100vh; z-index: 50; pointer-events: none" class="lottie-container-mobile">
                <div id="lottie-snow-1" class="lottie-segment"></div>
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
</html>
