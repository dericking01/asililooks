<?php

return [
    'name' => 'Uudiskirjad',
    'newsletter_form' => 'Uudiskirja vorm',
    'description' => 'Vaata ja kustuta uudiskirja tellijaid',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Uudiskiri',
                'description' => 'Konfigureeri uudiskirja e-posti malle',
                'to_admin' => [
                    'title' => 'E-kiri administraatorile',
                    'description' => 'Mall e-kirja saatmiseks administraatorile',
                    'subject' => 'Uus kasutaja tellis teie uudiskirja',
                    'newsletter_email' => 'Uudiskirja tellinud kasutaja e-post',
                ],
                'to_user' => [
                    'title' => 'E-kiri kasutajale',
                    'description' => 'Mall e-kirja saatmiseks tellijale',
                    'subject' => '{{ site_title }}: Tellimus kinnitatud!',
                    'newsletter_name' => 'Uudiskirja tellinud kasutaja täisnimi',
                    'newsletter_email' => 'Uudiskirja tellinud kasutaja e-post',
                    'newsletter_unsubscribe_link' => 'Link uudiskirjast loobumisel',
                    'newsletter_unsubscribe_url' => 'URL uudiskirjast loobumisel',
                ],
            ],
        ],
        'title' => 'Uudiskiri',
        'panel_description' => 'Vaata ja uuenda uudiskirja seadeid',
        'description' => 'Uudiskirja seaded (automaatne uudiskirja e-kirja saatmine SendGrid, Mailchimp... kui keegi registreerub veebisaidil uudiskirja).',
        'mailchimp_api_key' => 'Mailchimp API võti',
        'mailchimp_list_id' => 'Mailchimp loendi ID',
        'mailchimp_list' => 'Mailchimp loend',
        'sendgrid_api_key' => 'Sendgrid API võti',
        'sendgrid_list_id' => 'Sendgrid loendi ID',
        'sendgrid_list' => 'Sendgrid loend',
        'enable_newsletter_contacts_list_api' => 'Luba uudiskirja kontaktide loendi API?',
    ],
    'statuses' => [
        'subscribed' => 'Tellitud',
        'unsubscribed' => 'Loobunud',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Uus tellija',
        'admin_new_subscriber_message' => 'Uus kasutaja on tellinud teie uudiskirja:',

        // Subscriber email template
        'subscriber_success_title' => 'Edukalt tellitud',
        'subscriber_thank_you_message' => 'Täname, et tellisite meie uudiskirja!',
        'subscriber_unsubscribe_instruction' => 'Uudiskirjast loobumiseks klõpsake :newsletter_unsubscribe_link',
    ],
];
