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

    .skeleton-brands-wrapper {
        display: flex;
        gap: 20px;
        overflow: hidden;
    }

    .skeleton-brand-item {
        flex: 0 0 calc(25% - 15px); /* Default 4 items */
        min-width: 200px;
    }

    .skeleton-brand-body {
        padding: 24px 8px;
        margin: 0 8px;
        background: #fff;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .skeleton-brand-image {
        width: 100%;
        height: 120px;
        border-radius: 4px;
        margin-bottom: 12px;
        background: #f5f5f5;
        position: relative;
    }

    .skeleton-brand-name {
        height: 18px;
        width: 70%;
        margin: 0 auto 10px;
        border-radius: 4px;
    }

    .skeleton-brand-desc {
        height: 14px;
        width: 90%;
        margin: 5px auto;
        border-radius: 4px;
    }

    .skeleton-subtitle {
        height: 14px;
        width: 150px;
        border-radius: 4px;
        margin-top: 8px;
        display: inline-block;
    }

    /* Image placeholder aspect ratio */
    .img-fluid-eq {
        position: relative;
        overflow: hidden;
    }

    .img-fluid-eq__dummy {
        padding-top: 60%; /* Aspect ratio for brand logos */
    }

    .img-fluid-eq__wrap {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Responsive adjustments */
    @media (max-width: 1024px) {
        .skeleton-brand-item {
            flex: 0 0 calc(50% - 10px); /* 2 items on tablet */
        }
    }

    @media (max-width: 767px) {
        .skeleton-brand-item {
            flex: 0 0 calc(50% - 10px); /* 2 items on mobile */
            min-width: 140px;
        }

        .skeleton-brand-image {
            height: 80px;
        }
    }
</style>

<div class="widget-featured-brands py-5 skeleton-container">
    <div class="container-xxxl">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center mb-2 widget-header">
                    <div class="col-auto">
                        <h2 class="mb-0 py-2">
                            <span class="skeleton-loading" style="height: 28px; width: 180px; border-radius: 4px; display: inline-block;"></span>
                        </h2>
                        <p class="mb-0">
                            <span class="skeleton-subtitle skeleton-loading"></span>
                        </p>
                    </div>
                </div>
                <div class="featured-brands__body arrows-top-right">
                    <div class="featured-brands-body" style="position: relative;">
                        <div class="skeleton-brands-wrapper">
                            @for ($i = 0; $i < 4; $i++)
                                <div class="skeleton-brand-item">
                                    <div class="brand-item-body skeleton-brand-body">
                                        <div class="brand__thumb mb-3 img-fluid-eq">
                                            <div class="img-fluid-eq__dummy"></div>
                                            <div class="img-fluid-eq__wrap">
                                                <div class="skeleton-brand-image skeleton-loading" style="width: 100%; height: 100%; position: absolute; top: 0; left: 0;"></div>
                                            </div>
                                        </div>
                                        <div class="brand__text py-3 text-center">
                                            <div class="skeleton-brand-name skeleton-loading"></div>
                                            <div class="mt-2">
                                                <div class="skeleton-brand-desc skeleton-loading"></div>
                                                <div class="skeleton-brand-desc skeleton-loading" style="width: 75%; margin: 5px auto;"></div>
                                            </div>
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