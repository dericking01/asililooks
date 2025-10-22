@php
    Theme::layout('full-width');
    $products->loadMissing('defaultVariation');
@endphp

{!! $widgets = dynamic_sidebar('products_list_sidebar') !!}

@if (empty($widgets))
    {!! Theme::partial('page-header', ['size' => 'xxxl', 'withTitle' => false]) !!}
@endif

<div class="container-xxxl">
    <div class="ps-layout--shop my-5">
        @if (EcommerceHelper::hasAnyProductFilters())
            <div class="ps-layout__left">
                <div class="ps-layout__left-container">
                    <div class="ps-filter__header d-block d-xl-none">
                        <h3>{{ __('Filter Products') }}</h3>
                        <a class="ps-btn--close ps-btn--no-border" href="#"></a>
                    </div>
                    <div class="ps-layout__left-content">
                        @include(EcommerceHelper::viewPath('includes.filters'))
                    </div>
                </div>
            </div>
            <div class="screen-darken"></div>
        @endif

        <div class="ps-layout__right">
            <div class="bb-product-listing-page-description">
                @include(Theme::getThemeNamespace('views.ecommerce.includes.product-listing-page-description'))
            </div>

            <div class="bg-light py-2 mb-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-md-3 d-xl-none px-2 px-sm-3">
                            @if (EcommerceHelper::hasAnyProductFilters())
                                <div class="header__filter d-xl-none mb-0">
                                    <button id="products-filter-sidebar" type="button" class="sidebar-filter-mobile">
                                        <span class="svg-icon me-2">
                                            <svg>
                                                <use
                                                    href="#svg-icon-filter"
                                                    xlink:href="#svg-icon-filter"
                                                ></use>
                                            </svg>
                                        </span>
                                        <span>{{ __('Filter') }}</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="col-12 col-md-3 col-xl-6 d-none d-md-block">
                            <div class="products-found pt-2">
                                <strong>{{ $products->total() }}</strong><span class="ms-1">{{ __('Products found') }}</span>
                            </div>
                        </div>
                        <div class="col-6 px-2 px-sm-3">
                            <div class="d-flex justify-content-end">
                                @include(Theme::getThemeNamespace('views.ecommerce.includes.sort'))
                                <div class="ps-shopping__view ms-2">
                                    @include(Theme::getThemeNamespace('views.ecommerce.includes.layout'))
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="products-listing position-relative bb-product-items-wrapper">
                @include(Theme::getThemeNamespace('views.ecommerce.includes.product-items'))
            </div>
        </div>
    </div>
</div>
