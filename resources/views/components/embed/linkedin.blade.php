@php
    $urlString = trim($url ?? '');
    $cleanUrl = strtok($urlString, '?') ?: $urlString;
    $decodedUrl = urldecode($urlString);
    $embedUrl = null;
    $linkedinType = null;
    $linkedinId = null;

    // Direct URN format: /feed/update/urn:li:share:123 or /feed/update/urn:li:activity:123
    if (preg_match('~urn:li:(share|activity):(\d+)~i', $decodedUrl, $matches)) {
        $linkedinType = strtolower($matches[1]);
        $linkedinId = $matches[2];
    }

    // Public post URL format: /posts/...activity-123456789...
    if (!$linkedinId && preg_match('~linkedin\.com/posts/[^?\s]*?activity-(\d+)~i', $decodedUrl, $matches)) {
        $linkedinType = 'activity';
        $linkedinId = $matches[1];
    }

    // Some feeds carry activity id in the path
    if (!$linkedinId && preg_match('~linkedin\.com/feed/update/[^?\s]*?activity-(\d+)~i', $decodedUrl, $matches)) {
        $linkedinType = 'activity';
        $linkedinId = $matches[1];
    }

    if ($linkedinId) {
        $embedUrl = "https://www.linkedin.com/embed/feed/update/urn:li:{$linkedinType}:{$linkedinId}";
    }
@endphp

<div class="embed-box">
    @if ($embedUrl)
        <iframe
            src="{{ $embedUrl }}"
            width="100%"
            height="100%"
            frameborder="0"
            title="LinkedIn Post"
            loading="lazy"
            allowfullscreen>
        </iframe>
    @else
        <div class="flex h-full w-full flex-col items-center justify-center gap-2 rounded-xl border border-gray-200 bg-white p-4 text-sm">
            <p class="text-center text-gray-600">Post LinkedIn tidak bisa di-embed dari URL ini.</p>
            <a href="{{ $cleanUrl }}" class="text-primary underline" target="_blank" rel="noopener noreferrer">
                Buka post LinkedIn
            </a>
        </div>
    @endif
</div>
