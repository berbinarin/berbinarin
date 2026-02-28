        <div class="-mt-8 flex flex-row justify-evenly max-sm:flex-col max-sm:items-center">
            @foreach ($contents as $content)
                <div class="justify-center text-center">
                    @if ($content->platform == "instagram")
                        <x-embed.instagram :url="$content->url" />
                    @elseif ($content->platform == "tiktok")
                        <x-embed.tiktok :url="$content->url" />
                    @elseif ($content->platform == "spotify")
                        <x-embed.spotify :url="$content->url" />
                    @endif
                </div>
            @endforeach
        </div>
        <script async src="//www.instagram.com/embed.js"></script>
        <script async src="https://www.tiktok.com/embed.js"></script>


<!-- pastein di index, bagian konten sosmed, diatas <img src="{{ asset("assets/images/landing/asset-beranda/vector/lebaran-oranment.png") }}"   Soalnya error kalo gw taro situ-->