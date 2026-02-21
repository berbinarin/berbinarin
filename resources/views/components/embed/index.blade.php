        <div class="-mt-8 flex flex-row justify-evenly max-sm:flex-col max-sm:items-center">
            @foreach ($contents as $content)
                <div class="justify-center text-center">
                    @if ($content->platform == "instagram")
                        <x-embed.instagram :url="$content->url" />
                    @elseif ($content->platform == "tiktok")
                        <x-embed.tiktok :url="$content->url" />
                    @elseif ($content->platform == "spotify")
                        <x-embed.spotify :url="$content->url" />
                    @elseif ($content->platform == "youtube")
                        <x-embed.youtube :url="$content->url" />
                    @elseif ($content->platform == "linkedin")
                        <x-embed.linkedin :url="$content->url" />
                    @elseif ($content->platform == "twitter" || $content->platform == "x")
                        <x-embed.twitter :url="$content->url" />
                    @endif
                </div>
            @endforeach
        </div>
        <script async src="//www.instagram.com/embed.js"></script>
        <script async src="https://www.tiktok.com/embed.js"></script>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<!-- pastein di index, bagian konten sosmed, diatas <img src="{{ asset("assets/images/landing/asset-beranda/vector/lebaran-oranment.png") }}"   Soalnya error kalo gw taro situ-->
