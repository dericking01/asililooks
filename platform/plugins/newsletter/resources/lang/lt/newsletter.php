<?php

return [
    'name' => 'Naujienlaiškiai',
    'newsletter_form' => 'Naujienlaiškio forma',
    'description' => 'Peržiūrėti ir ištrinti naujienlaiškio prenumeratorius',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Naujienlaiškis',
                'description' => 'Konfigūruoti naujienlaiškio el. pašto šablonus',
                'to_admin' => [
                    'title' => 'El. laiškas administratoriui',
                    'description' => 'Šablonas el. laiško siuntimui administratoriui',
                    'subject' => 'Naujas vartotojas užsisakė jūsų naujienlaiškį',
                    'newsletter_email' => 'Naujienlaiškį užsisakiusio vartotojo el. paštas',
                ],
                'to_user' => [
                    'title' => 'El. laiškas vartotojui',
                    'description' => 'Šablonas el. laiško siuntimui prenumeratoriui',
                    'subject' => '{{ site_title }}: Prenumerata patvirtinta!',
                    'newsletter_name' => 'Naujienlaiškį užsisakiusio vartotojo pilnas vardas',
                    'newsletter_email' => 'Naujienlaiškį užsisakiusio vartotojo el. paštas',
                    'newsletter_unsubscribe_link' => 'Nuoroda atsisakyti naujienlaiškio',
                    'newsletter_unsubscribe_url' => 'URL atsisakyti naujienlaiškio',
                ],
            ],
        ],
        'title' => 'Naujienlaiškis',
        'panel_description' => 'Peržiūrėti ir atnaujinti naujienlaiškio nustatymus',
        'description' => 'Naujienlaiškio nustatymai (automatinis naujienlaiškio el. laiško siuntimas į SendGrid, Mailchimp... kai kas nors užsiregistruoja naujienlaiškiui svetainėje).',
        'mailchimp_api_key' => 'Mailchimp API raktas',
        'mailchimp_list_id' => 'Mailchimp sąrašo ID',
        'mailchimp_list' => 'Mailchimp sąrašas',
        'sendgrid_api_key' => 'Sendgrid API raktas',
        'sendgrid_list_id' => 'Sendgrid sąrašo ID',
        'sendgrid_list' => 'Sendgrid sąrašas',
        'enable_newsletter_contacts_list_api' => 'Įjungti naujienlaiškio kontaktų sąrašo API?',
    ],
    'statuses' => [
        'subscribed' => 'Užsisakyta',
        'unsubscribed' => 'Atsisakyta',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Naujas prenumeratorius',
        'admin_new_subscriber_message' => 'Naujas vartotojas užsisakė jūsų naujienlaiškį:',

        // Subscriber email template
        'subscriber_success_title' => 'Sėkmingai užsisakyta',
        'subscriber_thank_you_message' => 'Dėkojame, kad užsisakėte mūsų naujienlaiškį!',
        'subscriber_unsubscribe_instruction' => 'Norėdami atsisakyti naujienlaiškio, spustelėkite :newsletter_unsubscribe_link',
    ],
];
