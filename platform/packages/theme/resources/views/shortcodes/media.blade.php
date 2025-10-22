@php
    $url = $data['url'];
    $width = $data['width'] ?? null;
    $height = $data['height'] ?? null;
    $centered = $data['centered'] ?? false;
    $marginTop = $data['margin_top'] ?? 0;
    $marginBottom = $data['margin_bottom'] ?? 20;
    $marginStart = $data['margin_start'] ?? 0;
    $marginEnd = $data['margin_end'] ?? 0;

    $marginStyle = "margin-top: {$marginTop}px; margin-bottom: {$marginBottom}px; margin-inline-start: {$marginStart}px; margin-inline-end: {$marginEnd}px;";
@endphp

@switch($type)
    @case('youtube')
    @case('vimeo')
        <div
            class="{{ $type }}-iframe"
            @if(! $width && ! $height)
                style="position: relative; display: block; height: 0; padding-bottom: 56.25%; overflow: hidden; {{ $marginStyle }}{{ $centered ? ' margin-left: auto; margin-right: auto;' : '' }}"
            @else
                style="{{ $marginStyle }}{{ $centered ? ' display: flex; justify-content: center;' : '' }}"
            @endif
        >
            <iframe
                src="{{ $url }}"
                allowfullscreen
                frameborder="0"
                @style([
                    'position: absolute; top: 0; bottom: 0; left: 0; width: 100%; height: 100%; border: 0;' => ! $width && ! $height,
                    "height: {$height}px !important;" => $height,
                    "width: {$width}px !important;" => $width,
                    'max-width: 100%',
                ])
                title="Video"
            ></iframe>
        </div>
        @break
    @case('tiktok')
        <div class="{{ $type }}-iframe" style="{{ $marginStyle }}{{ $centered ? ' display: flex; justify-content: center;' : '' }}">
            <blockquote
                class="tiktok-embed"
                cite="{{ $data['url'] }}"
                data-video-id="{{ $data['video_id'] }}"
                style="max-width: 605px; min-width: 325px; margin-bottom: 20px; border: none !important;">
                <section></section>
            </blockquote>
        </div>
        @break
    @case('twitter')
        <div class="{{ $type }}-iframe" style="{{ $marginStyle }} display: flex; justify-content: center">
            <blockquote class="twitter-tweet" style="border: none !important;"><a href="{{ $data['url'] }}"></a></blockquote>
        </div>
        @break
    @case('video')
        <div class="{{ $type }}-iframe" style="{{ $marginStyle }}{{ $centered ? ' display: flex; justify-content: center;' : '' }}">
            <video @style(["height: {$height}px !important;" => $height, "width: {$width}px !important;" => $width, 'max-width: 100%',]) controls>
                <source src="{{ $data['url'] }}" type="video/{{ $data['extension'] }}">
            </video>
        </div>
@endswitch
