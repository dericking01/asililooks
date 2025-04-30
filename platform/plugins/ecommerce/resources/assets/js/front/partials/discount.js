import sanitizeHTML from 'sanitize-html'

export class DiscountManagement {
    init() {
        $(document).on('click', '.btn-open-coupon-form', (event) => {
            event.preventDefault()
            $(document).find('.coupon-wrapper').toggle()
        })

        $('.coupon-wrapper .coupon-code').keypress((event) => {
            if (event.keyCode === 13) {
                $('.apply-coupon-code').trigger('click')
                event.preventDefault()
                event.stopPropagation()
                return false
            }
        })

        // Define targets for both desktop and mobile layouts
        let target = '.checkout-order-info'
        let mobileTarget = '.cart-item-wrapper'
        let couponWrapperTarget = '.coupon-wrapper.mt-2'
        let couponItemTarget = '.checkout__coupon-item'
        let couponSectionTarget = '.checkout__coupon-section'

        $(document).on('click', '.apply-coupon-code', (event) => {
            event.preventDefault()

            const currentTarget = $(event.currentTarget)

            $.ajax({
                url: currentTarget.data('url'),
                type: 'POST',
                data: {
                    coupon_code: currentTarget.closest('.coupon-wrapper').find('.coupon-code').val(),
                    token: $('#checkout-token').val(),
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                beforeSend: () => {
                    currentTarget.find('i').remove()
                    currentTarget.html(`<i class="fa fa-spin fa-spinner"></i> ${currentTarget.html()}`)
                },
                success: ({ error, message }) => {
                    if (!error) {
                        // Use a more reliable approach for both desktop and mobile
                        $.ajax({
                            url: window.location.href + '?applied_coupon=1',
                            type: 'GET',
                            success: (response) => {
                                // Extract the target content from the response
                                const tempDiv = document.createElement('div');
                                tempDiv.innerHTML = response;

                                // Update desktop layout if it exists
                                const desktopContent = $(tempDiv).find(target);
                                if (desktopContent.length && $(target).length) {
                                    $(target).html(desktopContent.html());
                                }

                                // Update mobile layout
                                const mobileContent = $(tempDiv).find(mobileTarget);
                                if (mobileContent.length && $(mobileTarget).length) {
                                    $(mobileTarget).html(mobileContent.html());
                                }

                                // Update coupon wrapper section for mobile
                                const couponWrapperContent = $(tempDiv).find(couponWrapperTarget);
                                if (couponWrapperContent.length && $(couponWrapperTarget).length) {
                                    $(couponWrapperTarget).html(couponWrapperContent.html());
                                } else if (couponWrapperContent.length) {
                                    // If coupon wrapper doesn't exist yet, append it after the cart-item-wrapper
                                    $(mobileTarget).after(couponWrapperContent);
                                }

                                // Update coupon items
                                const couponItemsContent = $(tempDiv).find(couponItemTarget);
                                if (couponItemsContent.length) {
                                    // Update each coupon item or the entire section
                                    const couponSection = $(tempDiv).find(couponSectionTarget);
                                    if (couponSection.length && $(couponSectionTarget).length) {
                                        $(couponSectionTarget).html(couponSection.html());
                                    } else {
                                        // Update individual coupon items
                                        $(couponItemTarget).each(function(index) {
                                            if (couponItemsContent[index]) {
                                                $(this).replaceWith(couponItemsContent[index]);
                                            }
                                        });
                                    }
                                }

                                // If nothing was updated, reload the page
                                if ((!desktopContent.length && !mobileContent.length && !couponWrapperContent.length) ||
                                    ($(target).length === 0 && $(mobileTarget).length === 0)) {
                                    window.location.reload();
                                }

                                currentTarget.find('i').remove();
                            },
                            error: () => {
                                // Fallback to page reload if AJAX extraction fails
                                window.location.reload();
                            }
                        });
                    } else {
                        $('.coupon-error-msg .text-danger').html(sanitizeHTML(message))
                        currentTarget.find('i').remove()
                    }

                    $('html, body').animate({
                        scrollTop: $('.coupon-wrapper').offset().top
                    });
                },
                error: (data) => {
                    if (typeof data.responseJSON !== 'undefined') {
                        if (data.responseJSON.errors !== 'undefined') {
                            $.each(data.responseJSON.errors, (index, el) => {
                                $.each(el, (key, item) => {
                                    $('.coupon-error-msg .text-danger').text(item)
                                })
                            })
                        } else if (typeof data.responseJSON.message !== 'undefined') {
                            $('.coupon-error-msg .text-danger').text(data.responseJSON.message)
                        }
                    } else {
                        $('.coupon-error-msg .text-danger').text(data.status.text)
                    }
                    currentTarget.find('i').remove()
                },
            })
        })

        $(document).on('click', '.remove-coupon-code', (event) => {
            event.preventDefault()
            let _self = $(event.currentTarget)
            _self.find('i').remove()
            _self.html('<i class="fa fa-spin fa-spinner"></i> ' + _self.html())

            $.ajax({
                url: _self.data('url'),
                type: 'POST',
                data: {
                    token: $('#checkout-token').val(),
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                success: (res) => {
                    if (!res.error) {
                        // Use a more reliable approach for both desktop and mobile
                        $.ajax({
                            url: window.location.href,
                            type: 'GET',
                            success: (response) => {
                                // Extract the target content from the response
                                const tempDiv = document.createElement('div');
                                tempDiv.innerHTML = response;

                                // Update desktop layout if it exists
                                const desktopContent = $(tempDiv).find(target);
                                if (desktopContent.length && $(target).length) {
                                    $(target).html(desktopContent.html());
                                }

                                // Update mobile layout
                                const mobileContent = $(tempDiv).find(mobileTarget);
                                if (mobileContent.length && $(mobileTarget).length) {
                                    $(mobileTarget).html(mobileContent.html());
                                }

                                // Update or remove coupon wrapper section for mobile
                                const couponWrapperContent = $(tempDiv).find(couponWrapperTarget);
                                if (couponWrapperContent.length && $(couponWrapperTarget).length) {
                                    $(couponWrapperTarget).html(couponWrapperContent.html());
                                } else {
                                    // If coupon was removed, remove the wrapper
                                    $(couponWrapperTarget).remove();
                                }

                                // Update coupon items
                                const couponItemsContent = $(tempDiv).find(couponItemTarget);
                                if (couponItemsContent.length) {
                                    // Update each coupon item or the entire section
                                    const couponSection = $(tempDiv).find(couponSectionTarget);
                                    if (couponSection.length && $(couponSectionTarget).length) {
                                        $(couponSectionTarget).html(couponSection.html());
                                    } else {
                                        // Update individual coupon items
                                        $(couponItemTarget).each(function(index) {
                                            if (couponItemsContent[index]) {
                                                $(this).replaceWith(couponItemsContent[index]);
                                            }
                                        });
                                    }
                                }

                                // If nothing was updated, reload the page
                                if ((!desktopContent.length && !mobileContent.length) ||
                                    ($(target).length === 0 && $(mobileTarget).length === 0)) {
                                    window.location.reload();
                                }

                                _self.find('i').remove();
                            },
                            error: () => {
                                // Fallback to page reload if AJAX extraction fails
                                window.location.reload();
                            }
                        });
                    } else {
                        $('.coupon-error-msg .text-danger').text(res.message)
                        _self.find('i').remove()
                    }
                },
                error: (data) => {
                    if (typeof data.responseJSON !== 'undefined') {
                        if (data.responseJSON.errors !== 'undefined') {
                            $.each(data.responseJSON.errors, (index, el) => {
                                $.each(el, (key, item) => {
                                    $('.coupon-error-msg .text-danger').text(item)
                                })
                            })
                        } else if (typeof data.responseJSON.message !== 'undefined') {
                            $('.coupon-error-msg .text-danger').text(data.responseJSON.message)
                        }
                    } else {
                        $('.coupon-error-msg .text-danger').text(data.status.text)
                    }
                    _self.find('i').remove()
                },
            })
        })


        $(document).on('click', '[data-bb-toggle="apply-coupon-code"]', async function (e) {
            e.preventDefault();

            $(this).find('i').remove();
            $(this).html(`<i class="fa fa-spin fa-spinner"></i> ${$(this).html()}`);

            if ($(document).find('.remove-coupon-code').length) {
                $(document).find('.remove-coupon-code').trigger('click');
            }

            const discountCode = $(this).data('discount-code');

            $(document).find('.coupon-wrapper').show();
            $('.coupon-wrapper .coupon-code').val(discountCode);

            $('.apply-coupon-code').trigger('click');

            $(this).find('i').remove();
        });
    }
}
