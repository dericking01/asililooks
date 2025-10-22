<?php

return [
    'name' => 'Mga Newsletter',
    'newsletter_form' => 'Form ng newsletter',
    'description' => 'Tingnan at tanggalin ang mga subscriber ng newsletter',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Newsletter',
                'description' => 'I-configure ang mga template ng email ng newsletter',
                'to_admin' => [
                    'title' => 'Email na ipinadala sa admin',
                    'description' => 'Template para sa pagpapadala ng email sa admin',
                    'subject' => 'May bagong user na nag-subscribe sa iyong newsletter',
                    'newsletter_email' => 'Email ng user na nag-subscribe sa newsletter',
                ],
                'to_user' => [
                    'title' => 'Email na ipinadala sa user',
                    'description' => 'Template para sa pagpapadala ng email sa subscriber',
                    'subject' => '{{ site_title }}: Nakumpirma ang Subscription!',
                    'newsletter_name' => 'Buong pangalan ng user na nag-subscribe sa newsletter',
                    'newsletter_email' => 'Email ng user na nag-subscribe sa newsletter',
                    'newsletter_unsubscribe_link' => 'Link para mag-unsubscribe sa newsletter',
                    'newsletter_unsubscribe_url' => 'URL para mag-unsubscribe sa newsletter',
                ],
            ],
        ],
        'title' => 'Newsletter',
        'panel_description' => 'Tingnan at i-update ang mga setting ng newsletter',
        'description' => 'Mga setting para sa newsletter (awtomatikong pagpapadala ng newsletter email sa SendGrid, Mailchimp... kapag may nag-register ng newsletter sa website).',
        'mailchimp_api_key' => 'Mailchimp API Key',
        'mailchimp_list_id' => 'Mailchimp List ID',
        'mailchimp_list' => 'Mailchimp List',
        'sendgrid_api_key' => 'Sendgrid API Key',
        'sendgrid_list_id' => 'Sendgrid List ID',
        'sendgrid_list' => 'Sendgrid List',
        'enable_newsletter_contacts_list_api' => 'I-enable ang newsletter contacts list API?',
    ],
    'statuses' => [
        'subscribed' => 'Naka-subscribe',
        'unsubscribed' => 'Nag-unsubscribe',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Bagong Subscriber',
        'admin_new_subscriber_message' => 'May bagong user na nag-subscribe sa iyong newsletter:',

        // Subscriber email template
        'subscriber_success_title' => 'Matagumpay na Nag-subscribe',
        'subscriber_thank_you_message' => 'Salamat sa pag-subscribe sa aming newsletter!',
        'subscriber_unsubscribe_instruction' => 'Para mag-unsubscribe sa newsletter, i-click ang :newsletter_unsubscribe_link',
    ],
];
