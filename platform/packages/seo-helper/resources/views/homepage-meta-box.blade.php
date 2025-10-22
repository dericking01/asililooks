<x-core::alert type="info" class="mb-0">
    <div class="d-flex align-items-start">
        <div>
            <p class="mb-2">{{ trans('packages/seo-helper::seo-helper.homepage_seo_description') }}</p>
            <a href="{{ route('theme.options') }}" class="btn btn-primary btn-sm">
                {{ trans('packages/seo-helper::seo-helper.go_to_theme_options') }}
                <x-core::icon name="ti ti-arrow-right" class="ms-1" />
            </a>
        </div>
    </div>
</x-core::alert>
