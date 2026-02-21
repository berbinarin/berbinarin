@php
    $urlString = trim($url ?? '');
    $cleanUrl = strtok($urlString, '?') ?: $urlString;
    $parseUrl = preg_replace('~^https?://(www\.)?x\.com/~i', 'https://twitter.com/', $cleanUrl);
    $parseUrl = preg_replace('~^https?://mobile\.twitter\.com/~i', 'https://twitter.com/', $parseUrl);
    $xUrl = preg_replace('~^https?://(www\.)?twitter\.com/~i', 'https://x.com/', $cleanUrl);
    $xUrl = preg_replace('~^https?://mobile\.twitter\.com/~i', 'https://x.com/', $xUrl);

    $tweetId = null;
    if (preg_match('~twitter\.com/.+/status(?:es)?/(\d+)~i', $parseUrl, $matches)) {
        $tweetId = $matches[1];
    }

    $embedUrl = $tweetId ? "https://platform.twitter.com/embed/Tweet.html?id={$tweetId}&dnt=true" : null;
@endphp

<div class="embed-box">
    @if ($embedUrl)
        <iframe
            src="{{ $embedUrl }}"
            width="100%"
            height="100%"
            frameborder="0"
            scrolling="no"
            title="X Post"
            loading="lazy">
        </iframe>
    @else
        <div class="flex h-full w-full flex-col items-center justify-center gap-2 rounded-xl border border-gray-200 bg-white p-4 text-sm">
            <p class="text-center text-gray-600">Post X tidak bisa di-embed dari URL ini.</p>
            <a href="{{ $xUrl }}" class="text-primary underline" target="_blank" rel="noopener noreferrer">
                Buka post X
            </a>
        </div>
    @endif
</div>
