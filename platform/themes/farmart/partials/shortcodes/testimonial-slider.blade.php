<div class="testimonial-section" style="margin-top: 40px; padding: 50px 0; background-color: #fffdf7; position: relative;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <h2 class="text-center mb-4" style="color: #FFBA00; font-size: 32px; font-weight: bold;">
            Our Customers, <span style="color: #1b3e6f;">Our Priority</span>
        </h2>
        <p class="text-center mb-5" style="color: #666; max-width: 700px; margin-left: auto; margin-right: auto; font-size: 16px; line-height: 1.6;">
            Delivering exceptional service and support to help you stay beautiful, confident, and satisfied.
        </p>

        <div style="position: relative;">
            <button class="testimonial-prev" style="position: absolute; left: -20px; top: 50%; transform: translateY(-50%); background: #fff; border: none; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 2px 10px rgba(0,0,0,0.2); font-size: 20px; cursor: pointer; z-index: 10; display: flex; align-items: center; justify-content: center; color: #FFBA00;">&#10094;</button>
            <button class="testimonial-next" style="position: absolute; right: -20px; top: 50%; transform: translateY(-50%); background: #fff; border: none; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 2px 10px rgba(0,0,0,0.2); font-size: 20px; cursor: pointer; z-index: 10; display: flex; align-items: center; justify-content: center; color: #FFBA00;">&#10095;</button>

            <div class="testimonial-scroll-wrapper" style="overflow-x: hidden; white-space: nowrap; position: relative; padding: 10px 0;">
                <div class="testimonial-scroll-inner" style="display: inline-block; transition: transform 0.5s ease;">
                    @foreach([
                        ['text' => 'Asili Looks gave my hair life again! The staff were kind and the treatment was top notch. I\'ll definitely be back.', 'name' => 'Rehema A.', 'avatar' => '/storage/brands/asilibg-brand-390x250.png'],
                        ['text' => 'I love the skincare bundle I got — smells amazing and made my skin glow within a week.', 'name' => 'Asha K.', 'avatar' => '/storage/brands/asilibg-brand-390x250.png'],
                        ['text' => 'The salon service is very professional. They did my twists and I was amazed at the finish and durability.', 'name' => 'Miriam M.', 'avatar' => '/storage/brands/asilibg-brand-390x250.png'],
                        ['text' => 'Asili Looks products are magical. My daughter\'s hair is much more manageable now.', 'name' => 'Zainabu D.', 'avatar' => '/storage/brands/asilibg-brand-390x250.png'],
                        ['text' => 'Best braiding experience ever! They were gentle with my edges and the style lasted 6 weeks.', 'name' => 'Neema S.', 'avatar' => '/storage/brands/asilibg-brand-390x250.png'],
                        ['text' => 'The pre-poo treatment transformed my dry hair. Now it\'s soft and shiny!', 'name' => 'Fatuma J.', 'avatar' => '/storage/brands/asilibg-brand-390x250.png'],
                    ] as $review)
                        <div class="testimonial-card" style="display: inline-block; width: 360px; height: 280px; margin: 0 15px; vertical-align: top; background: #fff; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); white-space: normal; position: relative; padding: 30px; overflow: hidden;">
                            <div style="display: flex; align-items: center; margin-bottom: 20px;">
                                <div style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; margin-right: 15px; border: 2px solid #FFBA00;">
                                    <img src="{{ $review['avatar'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div>
                                    <strong style="font-size: 16px; color: #333;">{{ $review['name'] }}</strong>
                                    <div style="display: flex; margin-top: 3px;">
                                        <span style="color: #FFBA00; font-size: 14px;">★★★★★</span>
                                    </div>
                                </div>
                            </div>
                            <p style="font-size: 15px; line-height: 1.6; color: #555; margin-bottom: 0; position: relative;">
                                <svg style="position: absolute; top: -15px; left: -15px; opacity: 0.1; width: 40px; height: 40px; fill: #FFBA00;" viewBox="0 0 24 24">
                                    <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/>
                                </svg>
                                {{ $review['text'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const wrapper = document.querySelector('.testimonial-scroll-wrapper');
    const inner = document.querySelector('.testimonial-scroll-inner');
    const nextBtn = document.querySelector('.testimonial-next');
    const prevBtn = document.querySelector('.testimonial-prev');
    const cards = document.querySelectorAll('.testimonial-card');
    
    // Calculate card width including margin
    const cardWidth = cards[0].offsetWidth + 30;
    let currentPosition = 0;
    let autoScrollInterval;
    let isHovering = false;
    
    // Set initial inner width
    inner.style.width = `${cardWidth * cards.length}px`;
    
    // Auto-scroll function
    function startAutoScroll() {
        autoScrollInterval = setInterval(() => {
            if (!isHovering) {
                currentPosition -= 1;
                
                // Check if we've scrolled all the way
                if (currentPosition < -inner.offsetWidth + wrapper.offsetWidth) {
                    currentPosition = 0;
                }
                
                inner.style.transform = `translateX(${currentPosition}px)`;
            }
        }, 30);
    }
    
    // Manual navigation
    nextBtn.addEventListener('click', () => {
        currentPosition -= cardWidth;
        if (currentPosition < -inner.offsetWidth + wrapper.offsetWidth) {
            currentPosition = 0;
        }
        inner.style.transform = `translateX(${currentPosition}px)`;
        resetAutoScroll();
    });
    
    prevBtn.addEventListener('click', () => {
        currentPosition += cardWidth;
        if (currentPosition > 0) {
            currentPosition = -inner.offsetWidth + wrapper.offsetWidth + cardWidth;
        }
        inner.style.transform = `translateX(${currentPosition}px)`;
        resetAutoScroll();
    });
    
    // Pause on hover
    wrapper.addEventListener('mouseenter', () => {
        isHovering = true;
    });
    
    wrapper.addEventListener('mouseleave', () => {
        isHovering = false;
    });
    
    // Reset auto-scroll timer after manual interaction
    function resetAutoScroll() {
        clearInterval(autoScrollInterval);
        startAutoScroll();
    }
    
    // Start auto-scroll initially
    startAutoScroll();
    
    // Handle window resize
    window.addEventListener('resize', () => {
        inner.style.width = `${cardWidth * cards.length}px`;
    });
});
</script>

<style>
    /* Responsive adjustments */
    @media (max-width: 992px) {
        .testimonial-card {
            width: 320px !important;
            height: 260px !important;
            margin: 0 10px !important;
        }
    }
    
    @media (max-width: 768px) {
        .testimonial-card {
            width: 280px !important;
            height: 240px !important;
            padding: 20px !important;
        }
        
        .testimonial-prev {
            left: -10px !important;
        }
        
        .testimonial-next {
            right: -10px !important;
        }
    }
    
    @media (max-width: 480px) {
        .testimonial-card {
            width: 260px !important;
        }
        
        h2.text-center {
            font-size: 28px !important;
        }
    }
    
    /* Hide scrollbar */
    .testimonial-scroll-wrapper::-webkit-scrollbar {
        display: none;
    }
    
    .testimonial-scroll-wrapper {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    
    /* Testimonial quote styling */
    .testimonial-card p {
        position: relative;
        padding-left: 20px;
    }
    
    .testimonial-card p::before {
        content: '"';
        position: absolute;
        left: 0;
        top: -5px;
        font-size: 40px;
        color: #FFBA00;
        opacity: 0.2;
        font-family: Georgia, serif;
        line-height: 1;
    }
</style>