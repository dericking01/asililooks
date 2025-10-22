<?php

return [
    'name' => 'Newslettery',
    'newsletter_form' => 'Formulář newsletteru',
    'description' => 'Zobrazit a smazat odběratele newsletteru',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Newsletter',
                'description' => 'Konfigurace šablon e-mailů newsletteru',
                'to_admin' => [
                    'title' => 'E-mail odeslaný administrátorovi',
                    'description' => 'Šablona pro odeslání e-mailu administrátorovi',
                    'subject' => 'Nový uživatel se přihlásil k odběru vašeho newsletteru',
                    'newsletter_email' => 'E-mail uživatele, který se přihlásil k odběru newsletteru',
                ],
                'to_user' => [
                    'title' => 'E-mail odeslaný uživateli',
                    'description' => 'Šablona pro odeslání e-mailu odběrateli',
                    'subject' => '{{ site_title }}: Odběr potvrzen!',
                    'newsletter_name' => 'Celé jméno uživatele, který se přihlásil k odběru newsletteru',
                    'newsletter_email' => 'E-mail uživatele, který se přihlásil k odběru newsletteru',
                    'newsletter_unsubscribe_link' => 'Odkaz pro odhlášení z newsletteru',
                    'newsletter_unsubscribe_url' => 'URL pro odhlášení z newsletteru',
                ],
            ],
        ],
        'title' => 'Newsletter',
        'panel_description' => 'Zobrazit a aktualizovat nastavení newsletteru',
        'description' => 'Nastavení newsletteru (automatické odesílání newsletteru do SendGrid, Mailchimp... když se někdo zaregistruje k odběru newsletteru na webu).',
        'mailchimp_api_key' => 'Mailchimp API klíč',
        'mailchimp_list_id' => 'Mailchimp ID seznamu',
        'mailchimp_list' => 'Mailchimp seznam',
        'sendgrid_api_key' => 'Sendgrid API klíč',
        'sendgrid_list_id' => 'Sendgrid ID seznamu',
        'sendgrid_list' => 'Sendgrid seznam',
        'enable_newsletter_contacts_list_api' => 'Povolit API seznamu kontaktů newsletteru?',
    ],
    'statuses' => [
        'subscribed' => 'Přihlášen k odběru',
        'unsubscribed' => 'Odhlášen z odběru',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Nový odběratel',
        'admin_new_subscriber_message' => 'Nový uživatel se přihlásil k odběru vašeho newsletteru:',

        // Subscriber email template
        'subscriber_success_title' => 'Úspěšně přihlášeno k odběru',
        'subscriber_thank_you_message' => 'Děkujeme za přihlášení k odběru našeho newsletteru!',
        'subscriber_unsubscribe_instruction' => 'Pro odhlášení z newsletteru klikněte na :newsletter_unsubscribe_link',
    ],
];
