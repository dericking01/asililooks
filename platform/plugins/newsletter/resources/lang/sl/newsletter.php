<?php

return [
    'name' => 'Novice',
    'newsletter_form' => 'Obrazec za novice',
    'description' => 'Ogled in brisanje naročnikov na novice',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Novice',
                'description' => 'Konfigurirajte predloge e-pošte za novice',
                'to_admin' => [
                    'title' => 'E-pošta poslana skrbniku',
                    'description' => 'Predloga za pošiljanje e-pošte skrbniku',
                    'subject' => 'Nov uporabnik se je naročil na vaše novice',
                    'newsletter_email' => 'E-pošta uporabnika, ki se naroči na novice',
                ],
                'to_user' => [
                    'title' => 'E-pošta poslana uporabniku',
                    'description' => 'Predloga za pošiljanje e-pošte naročniku',
                    'subject' => '{{ site_title }}: Naročnina potrjena!',
                    'newsletter_name' => 'Polno ime uporabnika, ki se naroči na novice',
                    'newsletter_email' => 'E-pošta uporabnika, ki se naroči na novice',
                    'newsletter_unsubscribe_link' => 'Povezava za odjavo od novic',
                    'newsletter_unsubscribe_url' => 'URL za odjavo od novic',
                ],
            ],
        ],
        'title' => 'Novice',
        'panel_description' => 'Ogled in posodobitev nastavitev novic',
        'description' => 'Nastavitve za novice (samodejno pošiljanje e-pošte novic v SendGrid, Mailchimp... ko se nekdo registrira za novice na spletni strani).',
        'mailchimp_api_key' => 'Mailchimp API ključ',
        'mailchimp_list_id' => 'Mailchimp ID seznama',
        'mailchimp_list' => 'Mailchimp seznam',
        'sendgrid_api_key' => 'Sendgrid API ključ',
        'sendgrid_list_id' => 'Sendgrid ID seznama',
        'sendgrid_list' => 'Sendgrid seznam',
        'enable_newsletter_contacts_list_api' => 'Omogoči API za seznam stikov novic?',
    ],
    'statuses' => [
        'subscribed' => 'Naročen',
        'unsubscribed' => 'Odjavljen',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Nov naročnik',
        'admin_new_subscriber_message' => 'Nov uporabnik se je naročil na vaše novice:',

        // Subscriber email template
        'subscriber_success_title' => 'Uspešno naročen',
        'subscriber_thank_you_message' => 'Hvala, ker ste se naročili na naše novice!',
        'subscriber_unsubscribe_instruction' => 'Za odjavo od novic kliknite :newsletter_unsubscribe_link',
    ],
];
