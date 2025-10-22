<?php

return [
    'name' => 'Nyhedsbreve',
    'newsletter_form' => 'Nyhedsbrevformular',
    'description' => 'Vis og slet nyhedsbrevabonnenter',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Nyhedsbrev',
                'description' => 'Konfigurer e-mailskabeloner til nyhedsbrev',
                'to_admin' => [
                    'title' => 'E-mail sendt til administrator',
                    'description' => 'Skabelon til afsendelse af e-mail til administrator',
                    'subject' => 'Ny bruger har abonneret på dit nyhedsbrev',
                    'newsletter_email' => 'E-mail for bruger, der abonnerer på nyhedsbrev',
                ],
                'to_user' => [
                    'title' => 'E-mail sendt til bruger',
                    'description' => 'Skabelon til afsendelse af e-mail til abonnent',
                    'subject' => '{{ site_title }}: Abonnement bekræftet!',
                    'newsletter_name' => 'Fulde navn på bruger, der abonnerer på nyhedsbrev',
                    'newsletter_email' => 'E-mail for bruger, der abonnerer på nyhedsbrev',
                    'newsletter_unsubscribe_link' => 'Link til afmelding af nyhedsbrev',
                    'newsletter_unsubscribe_url' => 'URL til afmelding af nyhedsbrev',
                ],
            ],
        ],
        'title' => 'Nyhedsbrev',
        'panel_description' => 'Vis og opdater nyhedsbrevindstillinger',
        'description' => 'Indstillinger for nyhedsbrev (automatisk afsendelse af nyhedsbrev-e-mail til SendGrid, Mailchimp... når nogen registrerer sig til nyhedsbrev på hjemmesiden).',
        'mailchimp_api_key' => 'Mailchimp API-nøgle',
        'mailchimp_list_id' => 'Mailchimp liste-ID',
        'mailchimp_list' => 'Mailchimp liste',
        'sendgrid_api_key' => 'Sendgrid API-nøgle',
        'sendgrid_list_id' => 'Sendgrid liste-ID',
        'sendgrid_list' => 'Sendgrid liste',
        'enable_newsletter_contacts_list_api' => 'Aktivér API for nyhedsbrevkontaktliste?',
    ],
    'statuses' => [
        'subscribed' => 'Abonneret',
        'unsubscribed' => 'Afmeldt',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Ny abonnent',
        'admin_new_subscriber_message' => 'Ny bruger har abonneret på dit nyhedsbrev:',

        // Subscriber email template
        'subscriber_success_title' => 'Abonneret med succes',
        'subscriber_thank_you_message' => 'Tak for at abonnere på vores nyhedsbrev!',
        'subscriber_unsubscribe_instruction' => 'For at afmelde nyhedsbrev, klik på :newsletter_unsubscribe_link',
    ],
];
