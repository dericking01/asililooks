<div class="testimonial-section" style="margin-top: 40px; padding: 50px 0; background-color: #f9fbfd;">
    <div class="container">
        <h2 class="text-center mb-4" style="color: #2d6aa3; font-weight: bold;">
            Our Customers, <span style="color: #1b3e6f;">Our Priority</span>
        </h2>
        <p class="text-center mb-5" style="color: #666;">
            Delivering exceptional service and support to help you stay beautiful, confident, and satisfied.
        </p>

        <div class="testimonial-slider owl-carousel" data-loop="true" data-autoplay="true" data-autoplay-timeout="2000" data-dots="true" data-margin="20" data-responsive='{"0":{"items":1},"768":{"items":2},"992":{"items":3}}'>
            @foreach([
                ['text' => 'Asili Looks gave my hair life again! The staff were kind and the treatment was top notch. I’ll definitely be back.', 'name' => 'Rehema A.'],
                ['text' => 'I love the skincare bundle I got — smells amazing and made my skin glow within a week.', 'name' => 'Asha K.'],
                ['text' => 'The salon service is very professional. They did my twists and I was amazed at the finish and durability.', 'name' => 'Miriam M.'],
                ['text' => 'Asili Looks products are magical. My daughter’s hair is much more manageable now.', 'name' => 'Zainabu D.'],
            ] as $review)
                <div class="testimonial-item" style="background: #fff; border-radius: 10px; padding: 25px; box-shadow: 0 2px 12px rgba(0,0,0,0.05); margin: 10px;">
                    <p style="font-size: 16px; line-height: 1.6;">{{ $review['text'] }}</p>
                    <strong style="display: block; margin-top: 15px;">- {{ $review['name'] }}</strong>
                </div>
            @endforeach
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.testimonial-slider').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                dots: true,
                margin: 20,
                responsive: {
                    0: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 }
                }
            });
        });
    </script>
@endpush
