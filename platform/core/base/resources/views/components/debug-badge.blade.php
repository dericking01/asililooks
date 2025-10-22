<div
    class="debug-badge"
    role="button"
    data-bs-toggle="modal"
    data-bs-target="#debug-mode-modal"
>{{ trans('core/base::system.debug_mode_badge') }}</div>

<x-core::modal.action
    id="debug-mode-modal"
    type="info"
    :title="trans('core/base::system.debug_mode_badge')"
    size="md"
    :submit-button-label="trans('core/base::system.fix_it_for_me')"
    :submit-button-attrs="['data-bs-toggle' => 'modal', 'data-bs-target' => '#debug-mode-turn-off-confirmation-modal']"
    submit-button-color="warning"
>
    <div class="text-start">
        <p>
            {!! trans('core/base::system.debug_mode_description_1') !!}
        </p>
        <p>
            {!! trans('core/base::system.debug_mode_description_2') !!}
        </p>
    </div>
</x-core::modal.action>

<x-core::modal.action
    id="debug-mode-turn-off-confirmation-modal"
    type="warning"
    :title="trans('core/base::system.are_you_sure')"
    :description="trans('core/base::system.turn_off_debug_confirmation')"
    :submit-button-label="trans('core/base::system.yes_turn_off')"
    :submit-button-attrs="['id' => 'debug-mode-turn-off-form-submit', 'data-url' => route('system.debug-mode.turn-off')]"
    :cancel-button="true"
></x-core::modal.action>
