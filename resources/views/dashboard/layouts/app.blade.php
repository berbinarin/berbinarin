<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- Header --}}
        @include("dashboard.partials.header")

        {{-- Additional Style --}}
        @yield("style")
    </head>
    <body class="font-plusJakartaSans">
        <div class="flex h-screen w-full select-none">
            {{-- Sidebar --}}
            @include("dashboard.partials.sidebar")

            {{-- Main Content --}}
            <main class="my-1 flex-1 overflow-y-auto rounded-l-lg bg-gray-100 px-10 pb-2 pt-2 transition duration-500 ease-in-out">
                @yield("content")
            </main>
        </div>

        {{-- Script --}}
        @include("dashboard.partials.script")

        {{-- Additional Script --}}
        @yield("script")

        {{-- Alert Component --}}
        @include("components.alert")
    </body>
</html>
