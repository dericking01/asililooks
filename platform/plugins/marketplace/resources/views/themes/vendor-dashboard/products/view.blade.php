@extends('plugins/marketplace::themes.vendor-dashboard.layouts.master')

@section('content')
    <div class="row mb-3 g-2">
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <span class="bg-blue text-white avatar me-3">
                            <x-core::icon name="ti ti-eye" />
                        </span>
                        <div>
                            <div class="text-muted small">{{ trans('plugins/ecommerce::products.total_views') }}</div>
                            <div class="h3 m-0">{{ number_format($totalViews) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <span class="bg-green text-white avatar me-3">
                            <x-core::icon name="ti ti-shopping-cart" />
                        </span>
                        <div>
                            <div class="text-muted small">{{ trans('plugins/ecommerce::products.total_orders') }}</div>
                            <div class="h3 m-0">{{ number_format($totalOrders) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <span class="bg-cyan text-white avatar me-3">
                            <x-core::icon name="ti ti-package" />
                        </span>
                        <div>
                            <div class="text-muted small">{{ trans('plugins/ecommerce::products.total_sold') }}</div>
                            <div class="h3 m-0">{{ number_format($totalSold) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <span class="bg-orange text-white avatar me-3">
                            <x-core::icon name="ti ti-cash" />
                        </span>
                        <div>
                            <div class="text-muted small">{{ trans('plugins/ecommerce::products.total_revenue') }}</div>
                            <div class="h3 m-0">{{ format_price($totalRevenue) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(EcommerceHelper::isReviewEnabled())
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                            <span class="bg-pink text-white avatar me-3">
                                <x-core::icon name="ti ti-message-star" />
                            </span>
                            <div>
                                <div class="text-muted small">{{ trans('plugins/ecommerce::products.total_reviews') }}</div>
                                <div class="h3 m-0">{{ number_format($totalReviews) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                            <span class="bg-yellow text-white avatar me-3">
                                <x-core::icon name="ti ti-star" />
                            </span>
                            <div>
                                <div class="text-muted small">{{ trans('plugins/ecommerce::products.average_rating') }}</div>
                                <div class="h3 m-0">{{ number_format($averageRating, 2) }} / 5.0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div class="row row-cards">
        <div class="col-md-4">
            <x-core::card>
                <x-core::card.header>
                    <x-core::card.title>
                        {{ trans('plugins/ecommerce::products.product_information') }}
                    </x-core::card.title>
                </x-core::card.header>

                <x-core::card.body class="p-0">
                    <div class="text-center p-3 border-bottom">
                        <div class="mb-2">
                            <img
                                src="{{ RvMedia::getImageUrl($product->image, 'thumb', default: RvMedia::getDefaultImage()) }}"
                                alt="{{ $product->name }}"
                                class="img-fluid rounded"
                                style="max-width: 200px;"
                            />
                        </div>

                        <h3 class="m-0">{{ $product->name }}</h3>
                        <p class="text-muted mb-2">{{ $product->sku }}</p>

                        <div class="mt-2">
                            {!! BaseHelper::clean($product->status->toHtml()) !!}
                        </div>
                    </div>

                    <div class="p-3">
                        <x-core::datagrid>
                            <x-core::datagrid.item>
                                <x-slot:title>{{ trans('plugins/ecommerce::products.price') }}</x-slot:title>
                                @if($product->sale_price)
                                    {{ format_price($product->sale_price) }}
                                    <del class="text-danger ms-1">{{ format_price($product->price) }}</del>
                                @else
                                    {{ format_price($product->price) }}
                                @endif
                            </x-core::datagrid.item>

                            <x-core::datagrid.item>
                                <x-slot:title>{{ trans('plugins/ecommerce::products.quantity') }}</x-slot:title>
                                {{ number_format($product->quantity) }}
                            </x-core::datagrid.item>

                            <x-core::datagrid.item>
                                <x-slot:title>{{ trans('plugins/ecommerce::products.stock_status') }}</x-slot:title>
                                {!! BaseHelper::clean($product->stock_status_html) !!}
                            </x-core::datagrid.item>

                            @if($product->brand)
                                <x-core::datagrid.item>
                                    <x-slot:title>{{ trans('plugins/ecommerce::products.brand') }}</x-slot:title>
                                    {{ $product->brand->name }}
                                </x-core::datagrid.item>
                            @endif

                            @if($product->categories->isNotEmpty())
                                <x-core::datagrid.item>
                                    <x-slot:title>{{ trans('plugins/ecommerce::products.category') }}</x-slot:title>
                                    {{ $product->categories->pluck('name')->join(', ') }}
                                </x-core::datagrid.item>
                            @endif

                            <x-core::datagrid.item>
                                <x-slot:title>{{ trans('core/base::tables.created_at') }}</x-slot:title>
                                {{ $product->created_at->format('Y-m-d H:i') }}
                            </x-core::datagrid.item>
                        </x-core::datagrid>
                    </div>

                    <div class="p-3 border-top">
                        <a href="{{ route('marketplace.vendor.products.edit', $product->id) }}" class="btn btn-primary w-100 mb-2">
                            <x-core::icon name="ti ti-edit" />
                            {{ trans('core/base::forms.edit') }}
                        </a>

                        <a href="{{ $product->url }}" target="_blank" class="btn btn-secondary w-100">
                            <x-core::icon name="ti ti-external-link" />
                            {{ trans('plugins/ecommerce::products.view_on_frontend') }}
                        </a>
                    </div>
                </x-core::card.body>
            </x-core::card>
        </div>

        <div class="col-md-8">
            <x-core::card>
                <x-core::card.header>
                    <x-core::card.title>
                        <x-core::icon name="ti ti-chart-line" />
                        {{ trans('plugins/ecommerce::products.views_by_date') }}
                    </x-core::card.title>
                </x-core::card.header>

                <x-core::card.body>
                    @if($viewsByDate->isEmpty())
                        <div class="empty">
                            <div class="empty-icon">
                                <x-core::icon name="ti ti-eye-off" style="--bb-icon-size: 3rem;" />
                            </div>
                            <p class="empty-title">{{ trans('plugins/ecommerce::products.no_views_data') }}</p>
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table table-striped">
                                <thead>
                                    <tr>
                                        <th>{{ trans('plugins/ecommerce::products.date') }}</th>
                                        <th class="text-end">{{ trans('plugins/ecommerce::products.views') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($viewsByDate as $view)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <x-core::icon name="ti ti-calendar" class="me-2" />
                                                    {{ $view->date->format('D, M j, Y') }}
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge bg-blue text-blue-fg">{{ number_format($view->views) }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>{{ trans('plugins/ecommerce::products.total') }}</th>
                                        <th class="text-end">
                                            <span class="badge bg-green text-green-fg">{{ number_format($viewsByDate->sum('views')) }}</span>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    @endif
                </x-core::card.body>
            </x-core::card>

            <x-core::card class="mt-3">
                <x-core::card.header>
                    <x-core::card.title>
                        <x-core::icon name="ti ti-shopping-bag" />
                        {{ trans('plugins/ecommerce::products.recent_orders') }}
                    </x-core::card.title>
                </x-core::card.header>

                <x-core::card.body>
                    @if($recentOrders->isEmpty())
                        <div class="empty">
                            <div class="empty-icon">
                                <x-core::icon name="ti ti-shopping-cart-off" style="--bb-icon-size: 3rem;" />
                            </div>
                            <p class="empty-title">{{ trans('plugins/ecommerce::products.no_orders') }}</p>
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>{{ trans('plugins/ecommerce::order.order') }}</th>
                                        <th>{{ trans('plugins/ecommerce::order.customer') }}</th>
                                        <th>{{ trans('core/base::tables.status') }}</th>
                                        <th class="text-end">{{ trans('plugins/ecommerce::products.quantity') }}</th>
                                        <th class="text-end">{{ trans('plugins/ecommerce::products.price') }}</th>
                                        <th class="text-end">{{ trans('plugins/ecommerce::products.total') }}</th>
                                        <th>{{ trans('core/base::tables.created_at') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentOrders as $orderProduct)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <x-core::icon name="ti ti-file-invoice" class="me-2 text-muted" />
                                                    <a href="{{ route('marketplace.vendor.orders.edit', $orderProduct->order->id) }}">
                                                        {{ $orderProduct->order->code }}
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <x-core::icon name="ti ti-user" class="me-2 text-muted" />
                                                    {{ $orderProduct->order->user->name ?? $orderProduct->order->address->name }}
                                                </div>
                                            </td>
                                            <td>
                                                {!! BaseHelper::clean($orderProduct->order->status->toHtml()) !!}
                                            </td>
                                            <td class="text-end">
                                                <span class="badge bg-azure text-azure-fg">{{ number_format($orderProduct->qty) }}</span>
                                            </td>
                                            <td class="text-end">{{ format_price($orderProduct->price) }}</td>
                                            <td class="text-end">
                                                <strong>{{ format_price($orderProduct->price * $orderProduct->qty) }}</strong>
                                            </td>
                                            <td>
                                                <div class="text-muted">
                                                    <x-core::icon name="ti ti-clock" class="me-1" />
                                                    {{ $orderProduct->created_at->format('M j, Y') }}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </x-core::card.body>
            </x-core::card>
        </div>
    </div>
@endsection
