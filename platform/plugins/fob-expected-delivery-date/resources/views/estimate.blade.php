<div class="delivery-estimate-box">
    {!! BaseHelper::renderIcon(setting('expected_delivery_date_icon', 'ti ti-truck-delivery')) !!}
    <div class="delivery-estimate-content">
        <span class="delivery-estimate-label">{!! BaseHelper::clean($estimate['label']) !!}:</span>
        <span class="delivery-estimate-value">{!! BaseHelper::clean($estimate['value']) !!}</span>
    </div>
</div>

<style>
.delivery-estimate-box {
    padding: 10px 15px;
    border: 1px solid {{ setting('expected_delivery_date_border_color', '#e0e0e0') }};
    border-radius: {{ setting('expected_delivery_date_border_radius', 4) }}px;
    margin: 15px 0;
    display: flex;
    align-items: center;
    gap: 10px;
    background-color: {{ setting('expected_delivery_date_background_color', '#f9f9f9') }};
}

.delivery-estimate-content {
    display: flex;
    align-items: center;
    gap: 5px;
    flex-wrap: wrap;
}

.delivery-estimate-label {
    color: {{ setting('expected_delivery_date_label_color', '#000000') }};
    font-weight: {{ setting('expected_delivery_date_label_font_weight', 'normal') }};
}

.delivery-estimate-value {
    color: {{ setting('expected_delivery_date_value_color', '#000000') }};
    font-weight: {{ setting('expected_delivery_date_value_font_weight', 'bold') }};
}

.delivery-estimate-box svg {
    color: {{ setting('expected_delivery_date_icon_color', '#4CAF50') }};
    width: 20px;
    height: 20px;
    flex-shrink: 0;
}
</style>