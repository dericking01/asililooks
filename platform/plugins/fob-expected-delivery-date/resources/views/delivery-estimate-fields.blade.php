<div class="form-group mb-3">
    <label class="control-label">{{ trans('plugins/fob-expected-delivery-date::expected-delivery-date.min_days') }}</label>
    <input type="number" 
           class="form-control" 
           name="min_days" 
           value="{{ $estimate ? $estimate->min_days : 3 }}"
           min="1">
</div>

<div class="form-group mb-3">
    <label class="control-label">{{ trans('plugins/fob-expected-delivery-date::expected-delivery-date.max_days') }}</label>
    <input type="number" 
           class="form-control" 
           name="max_days" 
           value="{{ $estimate ? $estimate->max_days : 7 }}"
           min="1">
</div>

<div class="form-group mb-3">
    <label class="control-label">
        <input type="checkbox" 
               name="delivery_estimate_active" 
               value="1" 
               {{ (!$estimate || $estimate->is_active) ? 'checked' : '' }}>
        {{ trans('plugins/fob-expected-delivery-date::expected-delivery-date.is_active') }}
    </label>
</div> 