<link
    href="{{ rtrim(Language::getLocalizedURL(Language::getDefaultLocale(), url()->current(), [], false), '/') }}"
    hreflang="x-default"
    rel="alternate"
/>

@foreach ($hreflangUrls as $hreflangCode => $url)
    <link
        href="{{ $url }}"
        hreflang="{{ $hreflangCode }}"
        rel="alternate"
    />
@endforeach
