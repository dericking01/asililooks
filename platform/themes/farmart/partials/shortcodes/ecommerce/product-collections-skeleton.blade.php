<style>
    @keyframes skeleton-loading {
        0% {
            background-position: -200% 0;
        }
        100% {
            background-position: 200% 0;
        }
    }

    .skeleton-loading {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: skeleton-loading 1.5s infinite;
    }

    .skeleton-container {
        overflow: hidden !important;
        max-width: 100% !important;
    }

    .skeleton-container .row {
        margin-left: 0 !important;
        margin-right: 0 !important;
    }

    .skeleton-container [class*="col-"] {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }

    .skeleton-product-item {
        padding: 15px;
    }

    .skeleton-product-image {
        width: 100%;
        padding-bottom: 100%;
        position: relative;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .skeleton-product-title {
        height: 40px;
        border-radius: 4px;
        margin-bottom: 8px;
    }

    .skeleton-product-price {
        height: 24px;
        width: 60%;
        border-radius: 4px;
    }
</style>

<div class="ps-product-list skeleton-container">
    <div class="ps-container">
        <div class="ps-section__header">
            <h3 class="skeleton-loading" style="height: 30px; width: 200px; border-radius: 4px; display: inline-block;"></h3>
        </div>
        <div class="ps-section__content">
            <div class="ps-carousel--responsive" style="overflow: hidden;">
                <div class="row" style="flex-wrap: wrap;">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="col-xl-2-4 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="ps-product skeleton-product-item">
                                <div class="skeleton-product-image skeleton-loading"></div>
                                <div class="skeleton-product-title skeleton-loading"></div>
                                <div class="skeleton-product-price skeleton-loading"></div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>