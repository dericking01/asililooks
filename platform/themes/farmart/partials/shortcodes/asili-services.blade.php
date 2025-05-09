<div class="asili-services-section" style="background: #fffdf7; padding: 50px 0; position: relative;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px; position: relative;">
        <h2 class="text-center mb-4" style="color: rgb(255,186,0); font-size: 32px; font-weight: bold;">Our Services</h2>
        <p class="text-center" style="max-width: 700px; margin: 0 auto 30px; color: #555; font-size: 16px; line-height: 1.6;">
            Explore the beauty experience with our professional services designed to make you glow from root to crown.
        </p>

        <div style="position: relative;">
            <button class="asili-prev" style="position: absolute; left: -20px; top: 50%; transform: translateY(-50%); background: #fff; border: none; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 2px 10px rgba(0,0,0,0.2); font-size: 20px; cursor: pointer; z-index: 10; display: flex; align-items: center; justify-content: center; color: #FFBA00;">&#10094;</button>
            <button class="asili-next" style="position: absolute; right: -20px; top: 50%; transform: translateY(-50%); background: #fff; border: none; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 2px 10px rgba(0,0,0,0.2); font-size: 20px; cursor: pointer; z-index: 10; display: flex; align-items: center; justify-content: center; color: #FFBA00;">&#10095;</button>

            <div class="asili-scroll-wrapper" style="overflow-x: hidden; white-space: nowrap; position: relative; padding: 10px 0;">
                <div class="asili-scroll-inner" style="display: inline-block; transition: transform 0.5s ease;">
                    @foreach ([
                        ['title' => 'Hair Washing & Treatment', 'desc' => 'Nourishing wash + restorative treatment.', 'img' => '/storage/services/hair-care-in-salon-relaxation.png'],
                        ['title' => 'Natural Hair Styles', 'desc' => 'Twists, coils, and faux locs styled with love.', 'img' => '/storage/services/natural-hair-styles.png'],
                        ['title' => 'Threading', 'desc' => 'Precise, gentle hair removal technique.', 'img' => '/storage/services/hair-threading.png'],
                        ['title' => 'Braiding', 'desc' => 'Intricate protective styles with an African touch.', 'img' => '/storage/services/braids2.png'],
                        ['title' => 'Pre Poo', 'desc' => 'Pre-wash care to reduce breakage.', 'img' => '/storage/services/pree-poo.png'],
                        ['title' => 'Hair Trimming', 'desc' => 'Promotes healthy, even hair growth.', 'img' => '/storage/services/treaming.png'],
                        ['title' => 'Protective Styles', 'desc' => 'Helps retain length and moisture.', 'img' => '/storage/services/natural-one.png'],
                    ] as $service)
                        <div class="asili-card" style="display: inline-block; width: 280px; height: 380px; margin: 0 10px; vertical-align: top; background: #fff; border-radius: 10px; box-shadow: 0 2px 15px rgba(0,0,0,0.1); white-space: normal; position: relative; overflow: hidden;">
                            <div style="width: 100%; height: 200px; overflow: hidden;">
                                <img src="{{ $service['img'] }}" style="width: 100%; height: 100%; object-fit: cover; object-position: center; transition: transform 0.3s ease;">
                            </div>
                            <div style="padding: 20px; height: 180px; display: flex; flex-direction: column; justify-content: space-between;">
                                <div>
                                    <h4 style="font-size: 18px; margin-bottom: 10px; color: #333; font-weight: 600;">{{ $service['title'] }}</h4>
                                    <p style="font-size: 14px; color: #666; line-height: 1.5; margin-bottom: 0;">{{ $service['desc'] }}</p>
                                </div>
                                <a href="#" style="display: inline-block; margin-top: 15px; color: #FFBA00; text-decoration: none; font-weight: 600; font-size: 14px;">Learn more →</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const wrapper = document.querySelector('.asili-scroll-wrapper');
    const inner = document.querySelector('.asili-scroll-inner');
    const nextBtn = document.querySelector('.asili-next');
    const prevBtn = document.querySelector('.asili-prev');
    const cards = document.querySelectorAll('.asili-card');
    
    // Calculate card width including margin
    const cardWidth = cards[0].offsetWidth + 20;
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
        currentPosition -= cardWidth * 2;
        if (currentPosition < -inner.offsetWidth + wrapper.offsetWidth) {
            currentPosition = 0;
        }
        inner.style.transform = `translateX(${currentPosition}px)`;
        resetAutoScroll();
    });
    
    prevBtn.addEventListener('click', () => {
        currentPosition += cardWidth * 2;
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
    
    // Image hover effect
    cards.forEach(card => {
        const img = card.querySelector('img');
        card.addEventListener('mouseenter', () => {
            img.style.transform = 'scale(1.05)';
        });
        card.addEventListener('mouseleave', () => {
            img.style.transform = 'scale(1)';
        });
    });
    
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
    @media (max-width: 768px) {
        .asili-card {
            width: 240px !important;
            height: 360px !important;
        }
        
        .asili-prev {
            left: -10px !important;
        }
        
        .asili-next {
            right: -10px !important;
        }
    }
    
    @media (max-width: 480px) {
        .asili-card {
            width: 220px !important;
            height: 340px !important;
        }
        
        h2.text-center {
            font-size: 28px !important;
        }
        
        .asili-services-section {
            padding: 30px 0 !important;
        }
    }
    
    /* Hide scrollbar */
    .asili-scroll-wrapper::-webkit-scrollbar {
        display: none;
    }
    
    .asili-scroll-wrapper {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    
    /* Image quality enhancement */
    .asili-card img {
        image-rendering: -webkit-optimize-contrast;
        image-rendering: crisp-edges;
    }
</style>