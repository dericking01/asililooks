<?php

namespace Botble\Ecommerce\Http\Controllers\API;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Ecommerce\Facades\EcommerceHelper;
use Botble\Ecommerce\Http\Resources\API\FilterResource;
use Botble\Ecommerce\Models\ProductCategory;
use Botble\Ecommerce\Supports\RenderProductAttributeSetsOnSearchPageSupport;
use Botble\Slug\Facades\SlugHelper;
use Exception;
use Illuminate\Http\Request;

class FilterController extends BaseController
{
    /**
     * Get filter data for products
     *
     * @group Filters
     * @param Request $request
     * @queryParam category string Category slug to get filter data for a specific category. No-example
     *
     * @return mixed
     */
    public function getFilters(Request $request)
    {
        $category = null;
        $categorySlug = $request->input('category');

        if ($categorySlug) {
            $slug = SlugHelper::getSlug($categorySlug, SlugHelper::getPrefix(ProductCategory::class));

            if ($slug) {
                $category = ProductCategory::query()
                    ->wherePublished()
                    ->where('id', $slug->reference_id)
                    ->first();
            }
        }

        try {
            $filterData = EcommerceHelper::dataForFilter($category);

            // Get attribute sets for filtering
            $attributeSetsSupport = new RenderProductAttributeSetsOnSearchPageSupport($request);

            if (EcommerceHelper::isEnabledFilterProductsByAttributes()) {
                $attributeSets = $attributeSetsSupport->getAttributeSets();
                $selectedAttrs = $attributeSetsSupport->getSelectedAttributes($attributeSets);

                // Add attribute sets to filter data
                $filterData[] = $attributeSets;
                $filterData[] = $selectedAttrs;
            }

            return $this
                ->httpResponse()
                ->setData(new FilterResource($filterData))
                ->toApiResponse();
        } catch (Exception $e) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage($e->getMessage())
                ->toApiResponse();
        }
    }
}
