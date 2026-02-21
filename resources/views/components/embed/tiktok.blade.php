@php
    $cleanUrl = strtok($url, '?') ?: $url;
    $videoId = null;
    if (preg_match('~/(video|photo)/(\d+)~', $cleanUrl, $matches)) {
        $videoId = $matches[2];
    } else {
        $videoId = basename($cleanUrl);
    }
@endphp

<div class="embed-box">
    <blockquote class="tiktok-embed"
        cite="{{ $cleanUrl }}"
        data-video-id="{{ $videoId }}"
        style="max-width: 100%;">
        <a href="{{ $cleanUrl }}" target="_blank" rel="noopener noreferrer"></a>
    </blockquote>
</div>
