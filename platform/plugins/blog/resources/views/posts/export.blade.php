@extends('packages/data-synchronize::export')

@section('export_extra_filters_after')
    @php
        use Botble\Base\Enums\BaseStatusEnum;
        use Botble\Blog\Models\Category;

        $statuses = BaseStatusEnum::labels();
        $categories = Category::query()->pluck('name', 'id')->toArray();
    @endphp

    <div class="row mb-3">
        <div class="col-md-3">
            <x-core::form.text-input
                name="limit"
                type="number"
                :label="trans('plugins/blog::posts.export.limit')"
                :placeholder="trans('plugins/blog::posts.export.limit_placeholder')"
                min="1"
            />
        </div>
        <div class="col-md-3">
            <x-core::form.select
                name="status"
                :label="trans('core/base::forms.status')"
                :options="['' => trans('plugins/blog::posts.export.all_status')] + $statuses"
            />
        </div>
        <div class="col-md-3">
            <x-core::form.select
                name="is_featured"
                :label="trans('plugins/blog::posts.is_featured')"
                :options="[
                    '' => trans('plugins/blog::posts.export.all_featured'),
                    '1' => trans('core/base::base.yes'),
                    '0' => trans('core/base::base.no'),
                ]"
            />
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <x-core::form.select
                name="category_id"
                :label="trans('plugins/blog::posts.category')"
                :options="['' => trans('plugins/blog::posts.export.all_categories')] + $categories"
            />
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <label for="start_date" class="form-label">{{ trans('plugins/blog::posts.export.start_date') }}</label>

            {!! Form::datePicker('start_date', null, ['placeholder' => trans('plugins/blog::posts.export.start_date_placeholder')]) !!}
        </div>
        <div class="col-md-3">
            <label for="end_date" class="form-label">{{ trans('plugins/blog::posts.export.end_date') }}</label>

            {!! Form::datePicker('end_date', null, ['placeholder' => trans('plugins/blog::posts.export.end_date_placeholder')]) !!}
        </div>
    </div>
@stop