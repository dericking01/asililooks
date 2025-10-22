<?php

return [
    'name' => 'Nyhetsbrev',
    'newsletter_form' => 'Nyhetsbrevformulär',
    'description' => 'Visa och ta bort nyhetsbrevprenumeranter',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Nyhetsbrev',
                'description' => 'Konfigurera e-postmallar för nyhetsbrev',
                'to_admin' => [
                    'title' => 'E-post skickat till administratör',
                    'description' => 'Mall för att skicka e-post till administratör',
                    'subject' => 'Ny användare har prenumererat på ditt nyhetsbrev',
                    'newsletter_email' => 'E-post för användare som prenumererar på nyhetsbrev',
                ],
                'to_user' => [
                    'title' => 'E-post skickat till användare',
                    'description' => 'Mall för att skicka e-post till prenumerant',
                    'subject' => '{{ site_title }}: Prenumeration bekräftad!',
                    'newsletter_name' => 'Fullständigt namn på användare som prenumererar på nyhetsbrev',
                    'newsletter_email' => 'E-post för användare som prenumererar på nyhetsbrev',
                    'newsletter_unsubscribe_link' => 'Länk för att avsluta prenumeration på nyhetsbrev',
                    'newsletter_unsubscribe_url' => 'URL för att avsluta prenumeration på nyhetsbrev',
                ],
            ],
        ],
        'title' => 'Nyhetsbrev',
        'panel_description' => 'Visa och uppdatera nyhetsbrevsinställningar',
        'description' => 'Inställningar för nyhetsbrev (automatisk sändning av nyhetsbrev via e-post till SendGrid, Mailchimp... när någon registrerar sig för nyhetsbrev på webbplatsen).',
        'mailchimp_api_key' => 'Mailchimp API-nyckel',
        'mailchimp_list_id' => 'Mailchimp list-ID',
        'mailchimp_list' => 'Mailchimp-lista',
        'sendgrid_api_key' => 'Sendgrid API-nyckel',
        'sendgrid_list_id' => 'Sendgrid list-ID',
        'sendgrid_list' => 'Sendgrid-lista',
        'enable_newsletter_contacts_list_api' => 'Aktivera API för nyhetsbrevskontaktlista?',
    ],
    'statuses' => [
        'subscribed' => 'Prenumererad',
        'unsubscribed' => 'Avprenumererad',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Ny prenumerant',
        'admin_new_subscriber_message' => 'Ny användare har prenumererat på ditt nyhetsbrev:',

        // Subscriber email template
        'subscriber_success_title' => 'Prenumeration lyckades',
        'subscriber_thank_you_message' => 'Tack för att du prenumererar på vårt nyhetsbrev!',
        'subscriber_unsubscribe_instruction' => 'För att avsluta prenumeration på nyhetsbrev, klicka på :newsletter_unsubscribe_link',
    ],
];
