<ul class="products-layout mb-0 p-0">
    <li @if (request()->input('layout') != 'list') class="active" @endif>
        <a
            href="#"
            data-layout="grid"
            data-target=".shop-products-listing"
            data-class-remove="row-cols-1 shop-products-listing__list"
            data-class-add="row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2"
        >
            <span class="svg-icon">
                <svg>
                    <use
                        href="#svg-icon-grid"
                        xlink:href="#svg-icon-grid"
                    ></use>
                </svg>
            </span>
        </a>
    </li>
    <li @if (request()->input('layout') == 'list') class="active" @endif>
        <a
            href="#"
            data-layout="list"
            data-target=".shop-products-listing"
            data-class-add="row-cols-1 shop-products-listing__list"
            data-class-remove="row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2"
        >
            <span class="svg-icon">
                <svg>
                    <use
                        href="#svg-icon-list"
                        xlink:href="#svg-icon-list"
                    ></use>
                </svg>
            </span>
        </a>
    </li>
</ul>
