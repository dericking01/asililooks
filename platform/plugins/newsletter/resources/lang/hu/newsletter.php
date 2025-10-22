<?php

return [
    'name' => 'Hírlevelek',
    'newsletter_form' => 'Hírlevél űrlap',
    'description' => 'Hírlevél feliratkozók megtekintése és törlése',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Hírlevél',
                'description' => 'Hírlevél e-mail sablonok konfigurálása',
                'to_admin' => [
                    'title' => 'Adminisztrátornak küldött e-mail',
                    'description' => 'Sablon adminisztrátornak küldött e-mailhez',
                    'subject' => 'Új felhasználó feliratkozott a hírlevelére',
                    'newsletter_email' => 'A hírlevélre feliratkozott felhasználó e-mail címe',
                ],
                'to_user' => [
                    'title' => 'Felhasználónak küldött e-mail',
                    'description' => 'Sablon feliratkozónak küldött e-mailhez',
                    'subject' => '{{ site_title }}: Feliratkozás megerősítve!',
                    'newsletter_name' => 'A hírlevélre feliratkozott felhasználó teljes neve',
                    'newsletter_email' => 'A hírlevélre feliratkozott felhasználó e-mail címe',
                    'newsletter_unsubscribe_link' => 'Hírlevél leiratkozási link',
                    'newsletter_unsubscribe_url' => 'Hírlevél leiratkozási URL',
                ],
            ],
        ],
        'title' => 'Hírlevél',
        'panel_description' => 'Hírlevél beállítások megtekintése és frissítése',
        'description' => 'Hírlevél beállításai (automatikus hírlevél e-mail küldése SendGrid, Mailchimp... szolgáltatásoknak, amikor valaki feliratkozik a hírlevelére a weboldalon).',
        'mailchimp_api_key' => 'Mailchimp API kulcs',
        'mailchimp_list_id' => 'Mailchimp lista azonosító',
        'mailchimp_list' => 'Mailchimp lista',
        'sendgrid_api_key' => 'Sendgrid API kulcs',
        'sendgrid_list_id' => 'Sendgrid lista azonosító',
        'sendgrid_list' => 'Sendgrid lista',
        'enable_newsletter_contacts_list_api' => 'Hírlevél kapcsolatok lista API engedélyezése?',
    ],
    'statuses' => [
        'subscribed' => 'Feliratkozott',
        'unsubscribed' => 'Leiratkozott',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Új feliratkozó',
        'admin_new_subscriber_message' => 'Új felhasználó feliratkozott a hírlevelére:',

        // Subscriber email template
        'subscriber_success_title' => 'Sikeres feliratkozás',
        'subscriber_thank_you_message' => 'Köszönjük, hogy feliratkozott hírlevelünkre!',
        'subscriber_unsubscribe_instruction' => 'A hírlevélről való leiratkozáshoz kattintson a :newsletter_unsubscribe_link linkre',
    ],
];
