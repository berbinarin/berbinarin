@php
    $videoId = null;
    $urlString = $url ?? '';
    if (preg_match('~youtu\.be/([^?\&]+)~', $urlString, $matches)) {
        $videoId = $matches[1];
    } elseif (preg_match('~v=([^&]+)~', $urlString, $matches)) {
        $videoId = $matches[1];
    } elseif (preg_match('~youtube\.com/shorts/([^?\&]+)~', $urlString, $matches)) {
        $videoId = $matches[1];
    }
@endphp

<div class="embed-box">
    @if ($videoId)
        <iframe
            src="https://www.youtube.com/embed/{{ $videoId }}"
            width="100%"
            height="100%"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"
            allowfullscreen>
        </iframe>
    @else
        <div class="flex h-full w-full items-center justify-center rounded-xl border border-gray-200 p-4 text-sm">
            <a href="{{ $urlString }}" class="text-primary underline" target="_blank" rel="noopener noreferrer">
                Buka video YouTube
            </a>
        </div>
    @endif
</div>
