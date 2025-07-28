<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- Header --}}
        @include("landing.partials.header")

        {{-- Additional Style --}}
        @yield("style")
    </head>
    <body class="relative w-full overflow-x-hidden">

        <main class="relative flex w-full flex-col bg-[#F7F9FA] font-plusJakartaSans">
            {{-- Main Content --}}
            @yield("content")
        </main>


        {{-- Script --}}
        @include("landing.partials.script")

        {{-- Additional Script --}}
        @yield("script")
    </body>
</html>
