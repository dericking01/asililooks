<?php

return [
    'name' => 'Nyhetsbrev',
    'newsletter_form' => 'Nyhetsbrevskjema',
    'description' => 'Vis og slett nyhetsbrevabonnenter',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Nyhetsbrev',
                'description' => 'Konfigurer e-postmaler for nyhetsbrev',
                'to_admin' => [
                    'title' => 'E-post sendt til administrator',
                    'description' => 'Mal for sending av e-post til administrator',
                    'subject' => 'Ny bruker har abonnert på nyhetsbrevet ditt',
                    'newsletter_email' => 'E-post til bruker som abonnerer på nyhetsbrev',
                ],
                'to_user' => [
                    'title' => 'E-post sendt til bruker',
                    'description' => 'Mal for sending av e-post til abonnent',
                    'subject' => '{{ site_title }}: Abonnement bekreftet!',
                    'newsletter_name' => 'Fullt navn på bruker som abonnerer på nyhetsbrev',
                    'newsletter_email' => 'E-post til bruker som abonnerer på nyhetsbrev',
                    'newsletter_unsubscribe_link' => 'Lenke for å melde av nyhetsbrev',
                    'newsletter_unsubscribe_url' => 'URL for å melde av nyhetsbrev',
                ],
            ],
        ],
        'title' => 'Nyhetsbrev',
        'panel_description' => 'Vis og oppdater nyhetsbrevinnstillinger',
        'description' => 'Innstillinger for nyhetsbrev (automatisk sending av nyhetsbrev e-post til SendGrid, Mailchimp... når noen registrerer seg for nyhetsbrev på nettstedet).',
        'mailchimp_api_key' => 'Mailchimp API-nøkkel',
        'mailchimp_list_id' => 'Mailchimp liste-ID',
        'mailchimp_list' => 'Mailchimp liste',
        'sendgrid_api_key' => 'Sendgrid API-nøkkel',
        'sendgrid_list_id' => 'Sendgrid liste-ID',
        'sendgrid_list' => 'Sendgrid liste',
        'enable_newsletter_contacts_list_api' => 'Aktiver API for nyhetsbrevkontaktliste?',
    ],
    'statuses' => [
        'subscribed' => 'Abonnert',
        'unsubscribed' => 'Avmeldt',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Ny abonnent',
        'admin_new_subscriber_message' => 'Ny bruker har abonnert på nyhetsbrevet ditt:',

        // Subscriber email template
        'subscriber_success_title' => 'Abonnement vellykket',
        'subscriber_thank_you_message' => 'Takk for at du abonnerer på vårt nyhetsbrev!',
        'subscriber_unsubscribe_instruction' => 'For å melde av nyhetsbrev, klikk på :newsletter_unsubscribe_link',
    ],
];
