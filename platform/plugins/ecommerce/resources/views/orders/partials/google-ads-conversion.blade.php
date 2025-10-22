@if ($googleAdsConversionId = get_ecommerce_setting('google_ads_conversion_id'))
    <script>
        window.addEventListener('load', function() {
            @foreach ($orders as $order)
                var conversionData{{ $loop->index }} = {
                    'send_to': '{{ $googleAdsConversionId }}',
                    'value': {{ number_format($order->amount, 2, '.', '') }},
                    'currency': '{{ get_application_currency()->title }}',
                    'transaction_id': '{{ $order->code }}'
                };

                if (typeof gtag === 'function') {
                    gtag('event', 'conversion', conversionData{{ $loop->index }});
                } else if (window.dataLayer && Array.isArray(window.dataLayer)) {
                    window.dataLayer.push({
                        event: 'conversion',
                        ...conversionData{{ $loop->index }}
                    });
                }
            @endforeach
        });
    </script>
@endif
