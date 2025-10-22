<div class="card mb-3">
    <div class="card-header">
        <strong>{{ trans('packages/theme::theme.settings.website_tracking.setup_instructions') }}</strong>
    </div>
    <div class="card-body">
        <ol class="mb-0">
            <li>
                <strong>{{ trans('packages/theme::theme.settings.website_tracking.gtm.create_account') }}</strong>
                {{ trans('packages/theme::theme.settings.website_tracking.gtm.go_to') }}
                <a href="https://tagmanager.google.com" target="_blank">tagmanager.google.com</a>
                {{ trans('packages/theme::theme.settings.website_tracking.gtm.create_container') }}
            </li>
            <li>
                <strong>{{ trans('packages/theme::theme.settings.website_tracking.gtm.find_container_id') }}</strong>
                {{ trans('packages/theme::theme.settings.website_tracking.gtm.copy_container_id') }}
            </li>
            <li>
                <strong>{{ trans('packages/theme::theme.settings.website_tracking.gtm.paste_id_below') }}</strong>
                {{ trans('packages/theme::theme.settings.website_tracking.gtm.enter_container_id') }}
            </li>
            <li>
                <strong>{{ trans('packages/theme::theme.settings.website_tracking.gtm.configure_tags') }}</strong>
                {{ trans('packages/theme::theme.settings.website_tracking.gtm.add_analytics_tags') }}
            </li>
            <li>
                <strong>{{ trans('packages/theme::theme.settings.website_tracking.gtm.publish_container') }}</strong>
                {{ trans('packages/theme::theme.settings.website_tracking.gtm.click_submit') }}
            </li>
        </ol>
    </div>
</div>