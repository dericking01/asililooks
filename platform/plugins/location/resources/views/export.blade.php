@extends('packages/data-synchronize::export')

@php
    $totalItems = 0;
    $counters = $exporter->getCounters();
    foreach ($counters as $counter) {
        if (str_contains(strtolower($counter->getLabel()), 'total')) {
            $value = str_replace(',', '', $counter->getValue());
            if (is_numeric($value) && $value > $totalItems) {
                $totalItems = (int) $value;
            }
        }
    }
    $isLargeExport = $totalItems > 10000;
    $isMediumExport = $totalItems > 1000 && $totalItems <= 10000;
@endphp

@push('header')
    <style>
        .export-recommendation-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin: 1rem 0;
        }

        .export-recommendation-item {
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 6px;
        }

        @media (max-width: 768px) {
            .export-recommendation-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endpush

@section('export_extra_filters_after')
    <div class="row mb-3">
        <div class="col-md-4">
            <x-core::form.select
                name="import_type"
                :label="trans('plugins/location::location.export.import_type')"
                :options="[
                    '' => trans('plugins/location::location.export.all_types'),
                    'country' => trans('plugins/location::location.import_type.country'),
                    'state' => trans('plugins/location::location.import_type.state'),
                    'city' => trans('plugins/location::location.import_type.city'),
                ]"
            />
        </div>
        <div class="col-md-4">
            <x-core::form.select
                name="status"
                :label="trans('core/base::forms.status')"
                :options="[
                    '' => trans('plugins/location::location.export.all_status'),
                    'published' => trans('core/base::enums.statuses.published'),
                    'draft' => trans('core/base::enums.statuses.draft'),
                    'pending' => trans('core/base::enums.statuses.pending'),
                ]"
            />
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <div class="mb-3">
                <x-core::form.checkbox
                    name="use_chunked_export"
                    :value="1"
                    :label="trans('plugins/location::location.export.use_chunked_export')"
                    :checked="true"
                    :helper-text="trans('plugins/location::location.export.use_chunked_export_helper')"
                />
            </div>

            <div class="mb-3">
                <x-core::form.checkbox
                    name="optimize_memory"
                    :value="1"
                    :label="trans('plugins/location::location.export.optimize_memory')"
                    :checked="true"
                    :helper-text="trans('plugins/location::location.export.optimize_memory_helper')"
                />
            </div>

            <div class="mb-3">
                <x-core::form.checkbox
                    name="use_streaming"
                    :value="1"
                    :label="trans('plugins/location::location.export.use_streaming')"
                    :checked="$isLargeExport"
                    :helper-text="trans('plugins/location::location.export.use_streaming_helper')"
                />
            </div>

            @if($isLargeExport)
                <div class="alert alert-success d-block">
                    <strong>{{ trans('plugins/location::location.export.streaming_enabled_title') }}</strong><br>
                    <small>{{ trans('plugins/location::location.export.streaming_enabled_message') }}</small>
                </div>
            @endif
        </div>

        <div class="col-md-6">
            <x-core::form-group>
                <x-core::form.label for="chunk_size">{{ trans('plugins/location::location.export.chunk_size') }}</x-core::form.label>
                <x-core::form.text-input
                    type="number"
                    name="chunk_size"
                    id="chunk_size"
                    value="{{ $isLargeExport ? 200 : 300 }}"
                    min="50"
                    max="1000"
                />
                <x-core::form.helper-text>
                    {{ trans('plugins/location::location.export.chunk_size_helper') }}
                </x-core::form.helper-text>

                <div class="mt-2">
                    <div class="d-flex justify-content-between small text-muted mb-1">
                        <span>{{ trans('plugins/location::location.export.recommended_range') }}</span>
                        <span id="chunk-recommendation">
                            @if($isLargeExport)
                                {{ trans('plugins/location::location.export.range_large_export') }}
                            @elseif($isMediumExport)
                                {{ trans('plugins/location::location.export.range_medium_export') }}
                            @else
                                {{ trans('plugins/location::location.export.range_small_export') }}
                            @endif
                        </span>
                    </div>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%"></div>
                    </div>
                </div>
            </x-core::form-group>
        </div>
    </div>

    @if($isLargeExport)
        <x-core::alert type="warning" class="mb-4">
            <div>
                <h5 class="mb-2">{{ trans('plugins/location::location.export.large_dataset_warning_title') }}</h5>
                <p class="mb-3">{{ trans('plugins/location::location.export.large_dataset_specific_message', ['count' => number_format($totalItems)]) }}</p>

                <div class="export-recommendation-grid">
                    <div class="export-recommendation-item bg-white">
                        <strong class="d-block">{{ trans('plugins/location::location.export.format_label') }}</strong>
                        <span class="text-muted small">{{ trans('plugins/location::location.export.csv_recommended') }}</span>
                    </div>

                    <div class="export-recommendation-item bg-white">
                        <strong class="d-block">{{ trans('plugins/location::location.export.chunk_label') }}</strong>
                        <span class="text-muted small">{{ trans('plugins/location::location.export.chunk_recommended') }}</span>
                    </div>

                    <div class="export-recommendation-item bg-white">
                        <strong class="d-block">{{ trans('plugins/location::location.export.time_label') }}</strong>
                        <span class="text-muted small">{{ trans('plugins/location::location.export.time_estimate') }}</span>
                    </div>
                </div>

                <div class="alert alert-warning mt-3 mb-0">
                    <strong>{{ trans('plugins/location::location.export.pro_tip') }}</strong>
                    {{ trans('plugins/location::location.export.pro_tip_message') }}
                </div>
            </div>
        </x-core::alert>
    @elseif($isMediumExport)
        <x-core::alert type="info" class="mb-4">
            <h6 class="mb-1">{{ trans('plugins/location::location.export.medium_dataset_detected') }}</h6>
            <p class="mb-0">{{ trans('plugins/location::location.export.medium_dataset_message', ['count' => number_format($totalItems)]) }}</p>
        </x-core::alert>
    @endif

@push('footer')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chunkSizeInput = document.getElementById('chunk_size');
            const totalItems = {{ $totalItems }};
            const isLargeExport = {{ $isLargeExport ? 'true' : 'false' }};

            if (chunkSizeInput) {
                chunkSizeInput.addEventListener('input', function() {
                    const value = parseInt(this.value);
                    const recommendation = document.getElementById('chunk-recommendation');
                    const progressBar = this.parentElement.querySelector('.progress-bar');

                    let recommendedMin, recommendedMax, color, width;

                    if (isLargeExport) {
                        recommendedMin = 150;
                        recommendedMax = 300;
                    } else if (totalItems > 1000) {
                        recommendedMin = 200;
                        recommendedMax = 500;
                    } else {
                        recommendedMin = 300;
                        recommendedMax = 700;
                    }

                    if (value >= recommendedMin && value <= recommendedMax) {
                        color = 'bg-success';
                        width = '80%';
                        recommendation.textContent = '{{ trans('plugins/location::location.export.optimal_range') }}';
                    } else if (value < recommendedMin) {
                        color = 'bg-warning';
                        width = '40%';
                        recommendation.textContent = '{{ trans('plugins/location::location.export.too_small_slow') }}';
                    } else {
                        color = 'bg-danger';
                        width = '20%';
                        recommendation.textContent = '{{ trans('plugins/location::location.export.too_large_timeouts') }}';
                    }

                    progressBar.className = `progress-bar ${color}`;
                    progressBar.style.width = width;
                });
            }

            @if($isLargeExport)
                const excelRadio = document.querySelector('input[name="format"][value="xlsx"]');
                const csvRadio = document.querySelector('input[name="format"][value="csv"]');

                if (excelRadio && csvRadio) {
                    excelRadio.disabled = true;

                    const excelLabel = excelRadio.closest('label');
                    if (excelLabel) {
                        excelLabel.style.opacity = '0.8';
                        excelLabel.style.cursor = 'not-allowed';

                        const warningText = document.createElement('small');
                        warningText.className = 'text-warning d-block mt-1';
                        warningText.innerHTML = '<i class="fas fa-exclamation-triangle me-1"></i>{{ trans('plugins/location::location.export.excel_disabled_warning', ['count' => number_format($totalItems)]) }}';
                        excelLabel.appendChild(warningText);
                    }

                    csvRadio.checked = true;
                    csvRadio.dispatchEvent(new Event('change', { bubbles: true }));

                    const streamingCheckbox = document.querySelector('input[name="use_streaming"]');
                    const chunkedCheckbox = document.querySelector('input[name="use_chunked_export"]');
                    const memoryCheckbox = document.querySelector('input[name="optimize_memory"]');

                    if (streamingCheckbox) streamingCheckbox.checked = true;
                    if (chunkedCheckbox) chunkedCheckbox.checked = true;
                    if (memoryCheckbox) memoryCheckbox.checked = true;
                }
            @endif
        });
    </script>
@endpush
@stop
