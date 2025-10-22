<?php

return [
    'name' => 'Newsletteri',
    'newsletter_form' => 'Obrazac newslettera',
    'description' => 'Pregledajte i izbrišite pretplatnike newslettera',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Newsletter',
                'description' => 'Konfigurirajte predloške e-pošte newslettera',
                'to_admin' => [
                    'title' => 'E-pošta poslana administratoru',
                    'description' => 'Predložak za slanje e-pošte administratoru',
                    'subject' => 'Novi korisnik se pretplatio na vaš newsletter',
                    'newsletter_email' => 'E-pošta korisnika koji se pretplatio na newsletter',
                ],
                'to_user' => [
                    'title' => 'E-pošta poslana korisniku',
                    'description' => 'Predložak za slanje e-pošte pretplatniku',
                    'subject' => '{{ site_title }}: Pretplata potvrđena!',
                    'newsletter_name' => 'Puno ime korisnika koji se pretplatio na newsletter',
                    'newsletter_email' => 'E-pošta korisnika koji se pretplatio na newsletter',
                    'newsletter_unsubscribe_link' => 'Poveznica za odjavu s newslettera',
                    'newsletter_unsubscribe_url' => 'URL za odjavu s newslettera',
                ],
            ],
        ],
        'title' => 'Newsletter',
        'panel_description' => 'Pregledajte i ažurirajte postavke newslettera',
        'description' => 'Postavke newslettera (automatsko slanje e-pošte newslettera na SendGrid, Mailchimp... kada se netko registrira za newsletter na web stranici).',
        'mailchimp_api_key' => 'Mailchimp API ključ',
        'mailchimp_list_id' => 'Mailchimp ID popisa',
        'mailchimp_list' => 'Mailchimp popis',
        'sendgrid_api_key' => 'Sendgrid API ključ',
        'sendgrid_list_id' => 'Sendgrid ID popisa',
        'sendgrid_list' => 'Sendgrid popis',
        'enable_newsletter_contacts_list_api' => 'Omogući API popisa kontakata newslettera?',
    ],
    'statuses' => [
        'subscribed' => 'Pretplaćen',
        'unsubscribed' => 'Odjavljen',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Novi pretplatnik',
        'admin_new_subscriber_message' => 'Novi korisnik se pretplatio na vaš newsletter:',

        // Subscriber email template
        'subscriber_success_title' => 'Uspješno pretplaćivanje',
        'subscriber_thank_you_message' => 'Hvala što ste se pretplatili na naš newsletter!',
        'subscriber_unsubscribe_instruction' => 'Za odjavu s newslettera kliknite na :newsletter_unsubscribe_link',
    ],
];
