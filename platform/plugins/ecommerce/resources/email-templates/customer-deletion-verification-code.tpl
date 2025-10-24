{{ header }}

<div class="bb-main-content">
    <table class="bb-box" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td class="bb-content bb-pb-0" align="center">
                    <table class="bb-icon bb-icon-lg bb-bg-blue" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td valign="middle" align="center">
                                    <img src="{{ 'alert-triangle' | icon_url }}" class="bb-va-middle" width="40" height="40" alt="Icon">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h1 class="bb-text-center bb-m-0 bb-mt-md">Account deletion verification</h1>
                </td>
            </tr>
            <tr>
                <td class="bb-content">
                    <p>Dear {{ customer_name }},</p>
                    <div>We've received a request to delete the account associated with the email address <strong>{{ customer_email }}</strong>.</div>
                    <div>To confirm this action, please enter the following 6-digit verification code in the app:</div>
                </td>
            </tr>
            <tr>
                <td class="bb-content bb-text-center bb-pt-0">
                    <div style="font-size: 32px; font-weight: bold; letter-spacing: 8px; color: #e74c3c; padding: 20px 0; font-family: monospace;">
                        {{ verification_code }}
                    </div>
                    <div style="color: #7f8c8d; font-size: 14px; margin-top: 10px;">
                        This code will expire in 15 minutes.
                    </div>
                </td>
            </tr>
            <tr>
                <td class="bb-content bb-pb-xl">
                    <div>Once you've entered this code, your account deletion will be processed.</div>
                    <div class="bb-mt-md">Thank you for your cooperation. If you didn't initiate this request, please disregard this message.</div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

{{ footer }}
