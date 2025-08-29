<script>
    window.addEventListener('load', function() {
        if (typeof fbq !== 'function') {
            return;
        }

        function formatProductData(element) {
            return {
                content_ids: [element.data('product-id')],
                content_name: element.data('product-name'),
                content_type: 'product',
                value: parseFloat(element.data('product-price')) || 0,
                currency: '{{ get_application_currency()->title }}'
            };
        }

        $(document).on('click', '[data-bb-toggle="add-to-cart-in-form"]', function (e) {
            var currentTarget = $(e.currentTarget);
            var form = currentTarget.closest('form');
            var price = parseFloat(currentTarget.data('product-price')) || 0;
            var quantity = parseInt(form.find('input[name="qty"]').val()) || 1;

            fbq('track', 'AddToCart', {
                content_ids: [currentTarget.data('product-id')],
                content_name: currentTarget.data('product-name'),
                content_type: 'product',
                contents: [{
                    id: currentTarget.data('product-id'),
                    quantity: quantity
                }],
                value: price * quantity,
                currency: '{{ get_application_currency()->title }}'
            });
        });

        $(document).on('click', '[data-bb-toggle="add-to-cart"]', function (e) {
            var currentTarget = $(e.currentTarget);
            var productData = formatProductData(currentTarget);
            productData.contents = [{
                id: currentTarget.data('product-id'),
                quantity: 1
            }];
            
            fbq('track', 'AddToCart', productData);
        });

        $(document).on('click', '[data-bb-toggle="add-to-wishlist"]', function (e) {
            var currentTarget = $(e.currentTarget);
            var productData = formatProductData(currentTarget);
            
            fbq('track', 'AddToWishlist', productData);
        });

        $(document).on('click', '[data-bb-toggle="product-link"], .product-item a, .product-card a', function (e) {
            var currentTarget = $(e.currentTarget);
            var productElement = currentTarget.closest('[data-product-id]').length 
                ? currentTarget.closest('[data-product-id]') 
                : currentTarget;
            
            if (!productElement.data('product-id')) {
                return;
            }

            var productData = formatProductData(productElement);
            fbq('track', 'ViewContent', productData);
        });

        $(document).on('submit', 'form.products-filter-form, form[name="search-form"]', function(e) {
            var form = $(this);
            var searchQuery = form.find('input[name="q"], input[name="search"]').val();
            
            if (searchQuery) {
                fbq('track', 'Search', {
                    search_string: searchQuery,
                    content_type: 'product'
                });
            }
        });

        $(document).on('submit', 'form.newsletter-form, form.contact-form', function(e) {
            fbq('track', 'Lead', {
                content_name: 'Newsletter Signup',
                content_category: 'Lead Generation'
            });
        });

        $(document).on('ecommerce.category.viewed', function(e, categoryData) {
            if (categoryData && categoryData.name) {
                fbq('track', 'ViewCategory', {
                    content_category: categoryData.name,
                    content_type: 'product_group'
                });
            }
        });

        $(document).on('ecommerce.payment.selected', function(e, paymentData) {
            if (paymentData && paymentData.value) {
                fbq('track', 'AddPaymentInfo', {
                    value: paymentData.value,
                    currency: '{{ get_application_currency()->title }}',
                    payment_type: paymentData.method || ''
                });
            }
        });

        @if(get_ecommerce_setting('facebook_pixel_debug_mode'))
        console.log('%c Facebook Pixel Debug Mode Active ', 'background: #1877F2; color: white; padding: 2px 5px; border-radius: 3px;');
        
        var originalFbq = window.fbq;
        window.fbq = function() {
            if (arguments[0] === 'track' || arguments[0] === 'trackCustom') {
                console.log('%c FB Pixel Event ', 'background: #42b883; color: white; padding: 2px 5px; border-radius: 3px;', arguments[1], arguments[2] || {});
            }
            return originalFbq.apply(this, arguments);
        };
        @endif
    });
</script>