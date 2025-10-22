<div class="card mb-3">
    <div class="card-header">
        <strong>{{ trans('packages/theme::theme.settings.website_tracking.setup_instructions') }}</strong>
    </div>
    <div class="card-body">
        <ol class="mb-0">
            <li>
                <strong>{{ trans('packages/theme::theme.settings.website_tracking.ga.create_property') }}</strong>
                {{ trans('packages/theme::theme.settings.website_tracking.ga.go_to') }}
                <a href="https://analytics.google.com" target="_blank">{{ trans('packages/theme::theme.settings.website_tracking.ga.google_analytics') }}</a>
                {{ trans('packages/theme::theme.settings.website_tracking.ga.create_new_property') }}
            </li>
            <li>
                <strong>{{ trans('packages/theme::theme.settings.website_tracking.ga.find_measurement_id') }}</strong>
                {{ trans('packages/theme::theme.settings.website_tracking.ga.navigate_to_streams') }}
            </li>
            <li>
                <strong>{{ trans('packages/theme::theme.settings.website_tracking.ga.paste_id_below') }}</strong>
                {{ trans('packages/theme::theme.settings.website_tracking.ga.enter_measurement_id') }}
            </li>
            <li>
                <strong>{{ trans('packages/theme::theme.settings.website_tracking.ga.verify_setup') }}</strong>
                {{ trans('packages/theme::theme.settings.website_tracking.ga.check_realtime') }}
            </li>
        </ol>
        <div class="alert alert-warning mt-3 mb-0 d-block">
            <p><strong>{{ trans('packages/theme::theme.settings.website_tracking.common_mistakes') }}</strong></p>
            <ul class="mb-0 mt-2">
                <li>{{ trans('packages/theme::theme.settings.website_tracking.ga.mistake_property_id') }}</li>
                <li>{{ trans('packages/theme::theme.settings.website_tracking.ga.mistake_ua_id') }}</li>
                <li>{{ trans('packages/theme::theme.settings.website_tracking.ga.mistake_data_delay') }}</li>
            </ul>
        </div>
    </div>
</div>
