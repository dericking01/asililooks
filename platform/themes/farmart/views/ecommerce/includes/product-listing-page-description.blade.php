<div class="catalog-header-title-wrapper">
    <h1 class="h2 catalog-header__title d-none d-lg-block">{{ $pageName ?? SeoHelper::getTitleOnly() }}</h1>
</div>

@if ($pageDescription ?? Theme::get('pageDescription'))
    <div class="ps-block__content">
        <div class="ps-section__content">
            {!! BaseHelper::clean($pageDescription ?? Theme::get('pageDescription')) !!}
        </div>
    </div>
@endif
