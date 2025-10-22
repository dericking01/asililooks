@if (!empty($url))
    <div
        class="youtube-iframe"
        @if(! $width && ! $height)
            style="position: relative; display: block; height: 0; padding-bottom: 56.25%; overflow: hidden;"
        @else
            style="margin-bottom: 20px;"
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
@endif
