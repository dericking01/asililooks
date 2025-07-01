<ol>
    <li>
        <p>
            <a
                href="https://razorpay.com"
                target="_blank"
            >
                {{ __('Register an account on :name', ['name' => 'Razorpay']) }}
            </a>
        </p>
    </li>
    <li>
        <p>
            {{ __('After registration at :name, you will have Client ID, Client Secret', ['name' => 'Razorpay']) }}
        </p>
    </li>
    <li>
        <p>
            {{ __('Enter Client ID, Secret into the box in right hand') }}
        </p>
    </li>
    <li>
        <p>
            {!!
                BaseHelper::clean(__('Then you need to create a new webhook. To create a webhook, go to <strong>Account Settings</strong>-><strong>API keys</strong>-><strong>Webhooks</strong> and paste the below url to <strong>Webhook URL</strong> field.'))
            !!}
        </p>

        <code>{{ route('payments.razorpay.webhook') }}</code>

        <p class="mt-2">
            {!!
                BaseHelper::clean(__('At <strong>Active Events</strong> field, make sure to enable the following events:'))
            !!}
        </p>

        <ul class="ps-3 mt-2">
            <li><strong>payment.authorized</strong> - {{ __('When a payment is authorized') }}</li>
            <li><strong>payment.captured</strong> - {{ __('When a payment is captured') }}</li>
            <li><strong>payment.failed</strong> - {{ __('When a payment fails') }}</li>
            <li><strong>payment.pending</strong> - {{ __('When a payment is pending') }}</li>
            <li><strong>order.paid</strong> - {{ __('When an order is paid') }}</li>
        </ul>

        <p class="mt-2">
            {!!
                BaseHelper::clean(__('It is important to enable <strong>ALL</strong> these events to ensure your system captures all payment statuses correctly. Missing events may result in payments not being recorded in your system.'))
            !!}
        </p>

        <p class="mt-2">
            {!!
                BaseHelper::clean(__('After creating the webhook, Razorpay will generate a <strong>Webhook Secret</strong>. Copy this secret and paste it into the <strong>Webhook Secret</strong> field in the settings form. This is required for secure webhook verification.'))
            !!}
        </p>
    </li>
</ol>
