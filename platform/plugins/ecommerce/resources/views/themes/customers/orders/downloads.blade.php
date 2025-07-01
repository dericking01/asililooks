@extends(EcommerceHelper::viewPath('customers.master'))

@section('title', SeoHelper::getTitle())

@section('content')
    @if($orderProducts->isNotEmpty())
        <div class="bb-customer-card-list">
            @foreach ($orderProducts as $orderProduct)
                @php
                    $product = get_products([
                        'condition' => [
                            'ec_products.id' => $orderProduct->product_id,
                        ],
                        'take'   => 1,
                        'select' => [
                            'ec_products.id',
                            'ec_products.images',
                            'ec_products.name',
                            'ec_products.price',
                            'ec_products.sale_price',
                            'ec_products.sale_type',
                            'ec_products.start_date',
                            'ec_products.end_date',
                            'ec_products.sku',
                            'ec_products.is_variation',
                            'ec_products.status',
                            'ec_products.order',
                            'ec_products.created_at',
                        ],
                    ]);
                @endphp
                <div class="bb-customer-card">
                    <div class="bb-customer-card-header">
                        <div class="bb-customer-card-title">
                            <span class="value">{{ __('Digital Product') }}</span>
                        </div>
                        <div class="bb-customer-card-status">
                            <span>{{ __('Downloaded') }}: {{ $orderProduct->times_downloaded }} {{ __('times') }}</span>
                        </div>
                    </div>
                    <div class="bb-customer-card-body">
                        <div class="bb-customer-card-content">
                            <div class="bb-customer-card-image">
                                <img
                                    src="{{ RvMedia::getImageUrl($orderProduct->product_image, 'thumb', false, RvMedia::getDefaultImage()) }}"
                                    alt="{{ $orderProduct->product_name }}"
                                >
                            </div>
                            <div class="bb-customer-card-details">
                                <div class="bb-customer-card-name">
                                    @if($product && $product->original_product?->url)
                                        <a href="{{ $product->original_product->url }}">{!! BaseHelper::clean($orderProduct->product_name) !!}</a>
                                    @else
                                        {!! BaseHelper::clean($orderProduct->product_name) !!}
                                    @endif
                                </div>

                                <div class="bb-customer-card-meta">
                                    @if ($sku = Arr::get($orderProduct->options, 'sku'))
                                        <span>({{ $sku }})</span>
                                    @endif

                                    @if ($attributes = Arr::get($orderProduct->options, 'attributes'))
                                        <span class="d-block">{{ $attributes }}</span>
                                    @elseif ($product && $product->is_variation)
                                        <span class="d-block">
                                            @php $attributes = get_product_attributes($product->id) @endphp
                                            @if ($attributes->isNotEmpty())
                                                @foreach ($attributes as $attribute)
                                                    {{ $attribute->attribute_set_title }}: {{ $attribute->title }}@if (!$loop->last), @endif
                                                @endforeach
                                            @endif
                                        </span>
                                    @endif

                                    @if (is_plugin_active('marketplace') && ($product = $orderProduct->product) && $product->original_product->store?->id)
                                        <span class="d-block">{{ __('Sold by') }}: <a href="{{ $product->original_product->store->url }}" class="text-primary">{{ $product->original_product->store->name }}</a></span>
                                    @endif

                                    <span class="d-block">{{ __('Ordered at') }}: {{ $orderProduct->created_at->translatedFormat('M d, Y h:m') }}</span>
                                </div>

                                @include(
                                    EcommerceHelper::viewPath('includes.cart-item-options-extras'),
                                    ['options' => $orderProduct->options]
                                )

                                @if (!empty($orderProduct->product_options) && is_array($orderProduct->product_options))
                                    {!! render_product_options_html($orderProduct->product_options, $orderProduct->price) !!}
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="bb-customer-card-footer">
                        @if ($orderProduct->product_file_internal_count)
                            <a
                                class="btn btn-primary"
                                href="{{ route('customer.downloads.product', $orderProduct->id) }}"
                            >
                                <x-core::icon name="ti ti-download" class="me-1" />
                                <span>{{ __('Download all files') }}</span>
                            </a>
                        @endif
                        @if ($orderProduct->product_file_external_count)
                            <a
                                class="btn btn-info"
                                href="{{ route('customer.downloads.product', [$orderProduct->id, 'external' => true]) }}"
                            >
                                <x-core::icon name="ti ti-link" class="me-1" />
                                <span>{{ __('External link downloads') }}</span>
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <div class="tp-pagination">
            {!! $orderProducts->links() !!}
        </div>
    @else
        @include(EcommerceHelper::viewPath('customers.partials.empty-state'), [
            'title' => __('No digital products!'),
            'subtitle' => __('You have not purchased any digital products yet.'),
        ])
    @endif
@stop
