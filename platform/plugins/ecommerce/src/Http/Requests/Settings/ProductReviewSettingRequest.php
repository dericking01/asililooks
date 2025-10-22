<?php

namespace Botble\Ecommerce\Http\Requests\Settings;

use Botble\Base\Rules\OnOffRule;
use Botble\Support\Http\Requests\Request;

class ProductReviewSettingRequest extends Request
{
    public function rules(): array
    {
        return [
            'review_enabled' => $onOffRule = new OnOffRule(),
            'allow_customer_upload_image_in_review' => $onOffRule,
            'review_max_file_size' => ['nullable', 'required_if:allow_customer_upload_image_in_review,1', 'numeric', 'min:1'],
            'review_max_file_number' => ['nullable', 'required_if:allow_customer_upload_image_in_review,1', 'integer', 'min:1'],
            'only_allow_customers_purchased_to_review' => $onOffRule,
            'review_need_to_be_approved' => $onOffRule,
            'show_customer_full_name' => $onOffRule,
            'hide_rating_when_no_reviews' => $onOffRule,
            'display_uploaded_customer_review_images_list' => $onOffRule,
        ];
    }
}
