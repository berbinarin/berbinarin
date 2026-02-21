@php
    $urlString = trim($url ?? '');
    $cleanUrl = strtok($urlString, '?') ?: $urlString;
    $embedUrl = null;

    if (preg_match('~open\.spotify\.com/(track|album|playlist|episode|show|artist)/([A-Za-z0-9]+)~i', $cleanUrl, $matches)) {
        $contentType = strtolower($matches[1]);
        $contentId = $matches[2];
        $embedUrl = "https://open.spotify.com/embed/{$contentType}/{$contentId}?utm_source=generator";
    }
@endphp

<div class="embed-box">
    @if ($embedUrl)
        <iframe
            src="{{ $embedUrl }}"
            width="100%"
            height="100%"
            frameborder="0"
            loading="lazy"
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture">
        </iframe>
    @else
        <div class="flex h-full w-full flex-col items-center justify-center gap-2 rounded-xl border border-gray-200 bg-white p-4 text-sm">
            <p class="text-center text-gray-600">Konten Spotify tidak bisa di-embed dari URL ini.</p>
            <a href="{{ $cleanUrl }}" class="text-primary underline" target="_blank" rel="noopener noreferrer">
                Buka konten Spotify
            </a>
        </div>
    @endif
</div>
