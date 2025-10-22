<script>
    window.addEventListener('load', function() {
        function pushEvent(eventName, eventData) {
            if (typeof gtag === 'function') {
                gtag('event', eventName, eventData);
            } else if (window.dataLayer && Array.isArray(window.dataLayer)) {
                var dataLayerEvent = {
                    event: eventName
                };
                for (var key in eventData) {
                    if (eventData.hasOwnProperty(key)) {
                        dataLayerEvent[key] = eventData[key];
                    }
                }
                window.dataLayer.push(dataLayerEvent);
            }
        }

        function formatItemCategories(categories) {
            if (!categories) {
                return {};
            }

            var formattedCategories = {};

            categories.split(',').forEach(function (key, index) {
                var keyName = index === 0 ? 'item_category': `item_category${index}`;
                formattedCategories[keyName] = key;
            });

            return formattedCategories;
        }

        function getProductDataFromElement($element) {
            var $productElement = $element.data('product-id') ? $element : $element.closest('[data-product-id]');

            if (!$productElement.length || !$productElement.data('product-id')) {
                return null;
            }

            var price = parseFloat($productElement.data('product-price')) || 0;
            var categories = formatItemCategories($productElement.data('product-categories'));

            return {
                item_id: $productElement.data('product-id'),
                item_name: $productElement.data('product-name') || '',
                price: price,
                item_brand: $productElement.data('product-brand') || '',
                ...categories,
            };
        }

        $(document).on('click', '[data-bb-toggle="add-to-cart-in-form"]', function (e) {
            var currentTarget = $(e.currentTarget);
            var form = currentTarget.closest('form');
            var price = currentTarget.data('product-price');
            var quantity = form.find('input[name="qty"]').val();
            var categories = formatItemCategories(currentTarget.data('product-categories'));

            pushEvent('add_to_cart', {
                currency: '{{ get_application_currency()->title }}',
                value: price * quantity,
                items: [
                    {
                        item_id: currentTarget.data('product-id'),
                        item_name: currentTarget.data('product-name'),
                        price: price,
                        quantity: quantity,
                        item_brand: currentTarget.data('product-brand'),
                        ...categories,
                    },
                ],
            });
        });

        document.addEventListener('ecommerce.cart.added', function(e) {
            var detail = e.detail;
            var productData = null;

            if (detail.extraData) {
                productData = detail.extraData;
            } else {
                var element = $(detail.element);
                productData = getProductDataFromElement(element);

                if (!productData) {
                    return;
                }

                var quantity = 1;
                var $form = element.closest('form');
                if ($form.length) {
                    var qtyInput = $form.find('input[name="qty"]');
                    if (qtyInput.length) {
                        quantity = parseInt(qtyInput.val()) || 1;
                    }
                }

                productData.quantity = quantity;
            }

            pushEvent('add_to_cart', {
                currency: '{{ get_application_currency()->title }}',
                value: productData.price * productData.quantity,
                items: [productData],
            });
        });

        document.addEventListener('ecommerce.cart.removed', function(e) {
            var detail = e.detail;
            var productData = null;

            if (detail.extraData) {
                productData = detail.extraData;
            } else {
                var element = $(detail.element);
                productData = getProductDataFromElement(element);

                if (!productData) {
                    return;
                }

                var quantity = parseInt(element.data('product-quantity')) || 1;
                productData.quantity = quantity;
            }

            pushEvent('remove_from_cart', {
                currency: '{{ get_application_currency()->title }}',
                value: productData.price * productData.quantity,
                items: [productData],
            });
        });

        document.addEventListener('ecommerce.wishlist.added', function(e) {
            var detail = e.detail;
            var productData = null;

            if (detail.extraData) {
                productData = detail.extraData;
            } else {
                var element = $(detail.element);
                productData = getProductDataFromElement(element);

                if (!productData) {
                    return;
                }

                productData.quantity = 1;
            }

            pushEvent('add_to_wishlist', {
                currency: '{{ get_application_currency()->title }}',
                value: productData.price,
                items: [productData],
            });
        });

        document.addEventListener('ecommerce.wishlist.removed', function(e) {
            var detail = e.detail;
            var productData = null;

            if (detail.extraData) {
                productData = detail.extraData;
            } else {
                var element = $(detail.element);
                productData = getProductDataFromElement(element);

                if (!productData) {
                    return;
                }

                productData.quantity = 1;
            }

            pushEvent('remove_from_wishlist', {
                currency: '{{ get_application_currency()->title }}',
                value: productData.price,
                items: [productData],
            });
        });

        document.addEventListener('ecommerce.compare.added', function(e) {
            var detail = e.detail;
            var productData = null;

            if (detail.extraData) {
                productData = detail.extraData;
            } else {
                var element = $(detail.element);
                productData = getProductDataFromElement(element);

                if (!productData) {
                    return;
                }

                productData.quantity = 1;
            }

            pushEvent('add_to_compare', {
                currency: '{{ get_application_currency()->title }}',
                value: productData.price,
                items: [productData],
            });
        });

        document.addEventListener('ecommerce.compare.removed', function(e) {
            var detail = e.detail;
            var productData = null;

            if (detail.extraData) {
                productData = detail.extraData;
            } else {
                var element = $(detail.element);
                productData = getProductDataFromElement(element);

                if (!productData) {
                    return;
                }

                productData.quantity = 1;
            }

            pushEvent('remove_from_compare', {
                currency: '{{ get_application_currency()->title }}',
                value: productData.price,
                items: [productData],
            });
        });

        $(document).on('click', '[data-bb-toggle="product-link"], .product-item a, .product-card a', function (e) {
            var currentTarget = $(e.currentTarget);
            var productElement = currentTarget.closest('[data-product-id]').length
                ? currentTarget.closest('[data-product-id]')
                : currentTarget;

            if (!productElement.data('product-id')) {
                return;
            }

            var price = productElement.data('product-price');
            var categories = formatItemCategories(productElement.data('product-categories'));
            var listName = productElement.data('product-list-name') || 'Product List';
            var listIndex = productElement.data('product-list-index') || 0;

            pushEvent('select_item', {
                item_list_id: listName.toLowerCase().replace(/\s+/g, '_'),
                item_list_name: listName,
                items: [
                    {
                        item_id: productElement.data('product-id'),
                        item_name: productElement.data('product-name'),
                        price: price,
                        index: listIndex,
                        item_brand: productElement.data('product-brand'),
                        ...categories,
                    },
                ],
            });
        });

        $(document).on('bb-promotion-view', function (e, promotionData) {
            if (!promotionData || !promotionData.items) {
                return;
            }

            pushEvent('view_promotion', {
                promotion_id: promotionData.id || '',
                promotion_name: promotionData.name || '',
                creative_name: promotionData.creative || '',
                creative_slot: promotionData.slot || '',
                location_id: promotionData.location || '',
                items: promotionData.items
            });
        });

        $(document).on('click', '[data-bb-toggle="promotion-link"]', function (e) {
            var currentTarget = $(e.currentTarget);

            pushEvent('select_promotion', {
                promotion_id: currentTarget.data('promotion-id') || '',
                promotion_name: currentTarget.data('promotion-name') || '',
                creative_name: currentTarget.data('promotion-creative') || '',
                creative_slot: currentTarget.data('promotion-slot') || '',
                location_id: currentTarget.data('promotion-location') || ''
            });
        });

        var scrollDepths = [25, 50, 75, 90];
        var scrolledDepths = [];

        $(window).on('scroll', function() {
            var scrollTop = $(window).scrollTop();
            var docHeight = $(document).height();
            var winHeight = $(window).height();
            var scrollPercent = Math.round((scrollTop / (docHeight - winHeight)) * 100);

            scrollDepths.forEach(function(depth) {
                if (scrollPercent >= depth && scrolledDepths.indexOf(depth) === -1) {
                    scrolledDepths.push(depth);

                    pushEvent('scroll', {
                        percent_scrolled: depth
                    });
                }
            });
        });

        var startTime = Date.now();
        var timeEngagementThresholds = [10, 30, 60, 120, 180];
        var firedThresholds = [];

        setInterval(function() {
            var timeOnPage = Math.round((Date.now() - startTime) / 1000);

            timeEngagementThresholds.forEach(function(threshold) {
                if (timeOnPage >= threshold && firedThresholds.indexOf(threshold) === -1) {
                    firedThresholds.push(threshold);

                    pushEvent('user_engagement', {
                        engagement_time_msec: threshold * 1000
                    });
                }
            });
        }, 5000);
    });
</script>
