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

    .skeleton-categories-wrapper {
        display: flex;
        gap: 15px;
        overflow: hidden;
    }

    .skeleton-category-item {
        flex: 0 0 calc(12.5% - 13.125px); /* 100% / 8 items - gap adjustment */
        min-width: 140px;
        padding: 15px;
        text-align: center;
    }

    .skeleton-category-body {
        background: #fff;
        border-radius: 8px;
        padding: 15px;
        transition: all 0.3s ease;
    }

    .skeleton-category-image {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: 0 auto 10px;
        background: #f5f5f5;
    }

    .skeleton-category-title {
        height: 16px;
        width: 80%;
        margin: 10px auto 0;
        border-radius: 4px;
    }

    .skeleton-subtitle {
        height: 14px;
        width: 150px;
        border-radius: 4px;
        margin-top: 8px;
        display: inline-block;
    }

    /* Responsive adjustments */
    @media (max-width: 1700px) {
        .skeleton-category-item {
            flex: 0 0 calc(14.285% - 12.857px); /* 100% / 7 items */
        }
    }

    @media (max-width: 1500px) {
        .skeleton-category-item {
            flex: 0 0 calc(16.666% - 12.5px); /* 100% / 6 items */
        }
    }

    @media (max-width: 1199px) {
        .skeleton-category-item {
            flex: 0 0 calc(20% - 12px); /* 100% / 5 items */
        }
    }

    @media (max-width: 1024px) {
        .skeleton-category-item {
            flex: 0 0 calc(25% - 11.25px); /* 100% / 4 items */
        }
    }

    @media (max-width: 767px) {
        .skeleton-category-item {
            flex: 0 0 calc(50% - 7.5px); /* 100% / 2 items */
            min-width: 120px;
        }

        .skeleton-category-image {
            width: 80px;
            height: 80px;
        }
    }
</style>

<div class="widget-product-categories pt-5 pb-2 skeleton-container">
    <div class="container-xxxl">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center mb-2 widget-header">
                    <div class="col-auto">
                        <h2 class="mb-0 py-2">
                            <span class="skeleton-loading" style="height: 28px; width: 200px; border-radius: 4px; display: inline-block;"></span>
                        </h2>
                        <p class="mb-0">
                            <span class="skeleton-subtitle skeleton-loading"></span>
                        </p>
                    </div>
                </div>
                <div class="product-categories-body pb-4 arrows-top-right">
                    <div class="product-categories-box" style="position: relative;">
                        <div class="skeleton-categories-wrapper">
                            @for ($i = 0; $i < 8; $i++)
                                <div class="skeleton-category-item">
                                    <div class="category-item-body skeleton-category-body p-3">
                                        <div class="category__thumb">
                                            <div class="skeleton-category-image skeleton-loading"></div>
                                        </div>
                                        <div class="category__text text-center py-2">
                                            <div class="skeleton-category-title skeleton-loading"></div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="arrows-wrapper" style="opacity: 0.3;">
                            <span class="slick-prev-arrow svg-icon skeleton-loading" style="width: 30px; height: 30px; border-radius: 50%; display: inline-block; position: absolute; right: 40px; top: -50px;"></span>
                            <span class="slick-next-arrow svg-icon skeleton-loading" style="width: 30px; height: 30px; border-radius: 50%; display: inline-block; position: absolute; right: 0; top: -50px;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>