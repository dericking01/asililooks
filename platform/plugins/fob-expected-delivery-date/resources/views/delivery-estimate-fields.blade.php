<div class="mb-3">
    <label class="form-label">{{ trans('plugins/fob-expected-delivery-date::expected-delivery-date.min_days') }}</label>
    <input type="number"
           class="form-control"
           name="min_days"
           value="{{ $estimate ? $estimate->min_days : setting('expected_delivery_date_default_min_days', 3) }}"
           min="1">
</div>

<div class="mb-3">
    <label class="form-label">{{ trans('plugins/fob-expected-delivery-date::expected-delivery-date.max_days') }}</label>
    <input type="number"
           class="form-control"
           name="max_days"
           value="{{ $estimate ? $estimate->max_days : setting('expected_delivery_date_default_max_days', 7) }}"
           min="1">
</div>

<div class="mb-3">
    <div class="form-check">
        <input type="hidden" name="delivery_estimate_active" value="0">
        <input type="checkbox"
               class="form-check-input"
               id="delivery_estimate_active"
               name="delivery_estimate_active"
               value="1"
               {{ (!$estimate || $estimate->is_active) ? 'checked' : '' }}>
        <label class="form-check-label" for="delivery_estimate_active">
            {{ trans('plugins/fob-expected-delivery-date::expected-delivery-date.is_active') }}
        </label>
    </div>
</div>