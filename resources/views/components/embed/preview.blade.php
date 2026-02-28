@props([
    'content' => null,
])

@if ($content)
    @php
        $platform = \Illuminate\Support\Str::lower($content->platform);
    @endphp
    <div class="smc-preview-embed h-full w-full overflow-hidden rounded-xl">
        @if ($platform === 'instagram')
            <x-embed.instagram :url="$content->url" />
        @elseif ($platform === 'tiktok')
            <x-embed.tiktok :url="$content->url" />
        @elseif ($platform === 'spotify')
            <x-embed.spotify :url="$content->url" />
        @elseif ($platform === 'youtube')
            <x-embed.youtube :url="$content->url" />
        @elseif ($platform === 'linkedin')
            <x-embed.linkedin :url="$content->url" />
        @elseif ($platform === 'twitter' || $platform === 'x')
            <x-embed.twitter :url="$content->url" />
        @else
            <div class="flex h-full w-full flex-col items-start justify-center gap-2 rounded-xl border border-gray-200 p-4 text-sm">
                <p class="text-[14px] font-semibold">{{ $content->title }}</p>
                <p class="text-[12px] text-gray-500">
                    Platform: {{ \Illuminate\Support\Str::ucfirst($content->platform) }}
                </p>
                <a href="{{ $content->url }}" class="text-primary underline" target="_blank" rel="noopener noreferrer">
                    {{ $content->url }}
                </a>
            </div>
        @endif
    </div>
@else
    <div class="flex h-full w-full items-center justify-center rounded-xl border border-dashed border-gray-300 text-sm text-gray-500">
        Belum ada konten aktif.
    </div>
@endif
