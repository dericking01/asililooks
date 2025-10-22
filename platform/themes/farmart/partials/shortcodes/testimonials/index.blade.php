@php
    $slick = [
        'rtl' => BaseHelper::siteLanguageDirection() == 'rtl',
        'appendArrows' => '.arrows-wrapper',
        'arrows' => true,
        'dots' => true,
        'autoplay' => $shortcode->is_autoplay == 'yes',
        'infinite' => $shortcode->infinite == 'yes' || $shortcode->is_infinite == 'yes',
        'autoplaySpeed' => in_array($shortcode->autoplay_speed, theme_get_autoplay_speed_options()) ? $shortcode->autoplay_speed : 3000,
        'speed' => 800,
        'slidesToShow' => $shortcode->slides_to_show ?: 3,
        'slidesToScroll' => 1,
        'responsive' => [
            [
                'breakpoint' => 1199,
                'settings' => [
                    'slidesToShow' => 2,
                ],
            ],
            [
                'breakpoint' => 767,
                'settings' => [
                    'arrows' => false,
                    'dots' => true,
                    'slidesToShow' => 1,
                    'slidesToScroll' => 1,
                ],
            ],
        ],
    ];
@endphp

<div {!! $shortcode->htmlAttributes() !!} class="widget-testimonials py-5">
    <div class="container-xxxl">
        <div class="row">
            <div class="col-12">
                @if($shortcode->title || $shortcode->subtitle)
                    <div class="align-items-center mb-2 widget-header">
                        <h2 class="mb-0 py-2">{{ $shortcode->title }}</h2>
                        @if ($shortcode->subtitle)
                            <p class="mb-0">{{ $shortcode->subtitle }}</p>
                        @endif
                    </div>
                @endif
                <div class="testimonials-body pb-4 arrows-top-right">
                    <div
                        class="testimonials-slider slick-slides-carousel"
                        data-slick="{{ json_encode($slick) }}"
                    >
                        @foreach($testimonials as $testimonial)
                            <div class="testimonial-item">
                                <div class="testimonial-item-body grey-bg-7 rounded h-100">
                                    <div class="testimonial-quote">
                                        <img src="{{ Theme::asset()->url('images/testimonial-quote.png') }}" alt="quote" />
                                    </div>
                                    <div class="testimonial-rating @if ($shortcode->filled_color === 'yes') text-warning @endif">
                                        @php
                                            $stars = $testimonial->shortcode_stars ?? 5;
                                        @endphp
                                        @for ($i = 1; $i <= 5; $i++)
                                            <span><x-core::icon name="{{ $i <= $stars ? 'ti ti-star-filled' : 'ti ti-star' }}" /></span>
                                        @endfor
                                    </div>
                                    <div class="testimonial-content">
                                        <p>
                                            {!! BaseHelper::clean($testimonial->content) !!}
                                        </p>
                                    </div>
                                    <div class="testimonial-user d-flex align-items-center">
                                        <div class="testimonial-avatar me-3">
                                            {{ RvMedia::image($testimonial->image, $testimonial->name, 'thumb') }}
                                        </div>
                                        <div class="testimonial-user-info">
                                            <h6>{{ $testimonial->name }}</h6>
                                            <span>{{ $testimonial->company }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="arrows-wrapper"></div>
                </div>
            </div>
        </div>
    </div>
</div>
