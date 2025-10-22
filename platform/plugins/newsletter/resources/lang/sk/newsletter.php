<?php

return [
    'name' => 'Newslettery',
    'newsletter_form' => 'Formulár newslettera',
    'description' => 'Zobraziť a odstrániť odberateľov newslettera',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Newsletter',
                'description' => 'Konfigurácia šablón e-mailov newslettera',
                'to_admin' => [
                    'title' => 'E-mail odoslaný administrátorovi',
                    'description' => 'Šablóna na odoslanie e-mailu administrátorovi',
                    'subject' => 'Nový používateľ sa prihlásil na odber vášho newslettera',
                    'newsletter_email' => 'E-mail používateľa, ktorý sa prihlásil na odber newslettera',
                ],
                'to_user' => [
                    'title' => 'E-mail odoslaný používateľovi',
                    'description' => 'Šablóna na odoslanie e-mailu odberateľovi',
                    'subject' => '{{ site_title }}: Odber potvrdený!',
                    'newsletter_name' => 'Celé meno používateľa, ktorý sa prihlásil na odber newslettera',
                    'newsletter_email' => 'E-mail používateľa, ktorý sa prihlásil na odber newslettera',
                    'newsletter_unsubscribe_link' => 'Odkaz na zrušenie odberu newslettera',
                    'newsletter_unsubscribe_url' => 'URL na zrušenie odberu newslettera',
                ],
            ],
        ],
        'title' => 'Newsletter',
        'panel_description' => 'Zobraziť a aktualizovať nastavenia newslettera',
        'description' => 'Nastavenia newslettera (automatické odosielanie newslettera do SendGrid, Mailchimp... keď sa niekto zaregistruje na odber newslettera na webovej stránke).',
        'mailchimp_api_key' => 'Mailchimp API kľúč',
        'mailchimp_list_id' => 'Mailchimp ID zoznamu',
        'mailchimp_list' => 'Mailchimp zoznam',
        'sendgrid_api_key' => 'Sendgrid API kľúč',
        'sendgrid_list_id' => 'Sendgrid ID zoznamu',
        'sendgrid_list' => 'Sendgrid zoznam',
        'enable_newsletter_contacts_list_api' => 'Povoliť API zoznamu kontaktov newslettera?',
    ],
    'statuses' => [
        'subscribed' => 'Prihlásený na odber',
        'unsubscribed' => 'Odhlásený z odberu',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Nový odberateľ',
        'admin_new_subscriber_message' => 'Nový používateľ sa prihlásil na odber vášho newslettera:',

        // Subscriber email template
        'subscriber_success_title' => 'Úspešne prihlásené na odber',
        'subscriber_thank_you_message' => 'Ďakujeme za prihlásenie na odber nášho newslettera!',
        'subscriber_unsubscribe_instruction' => 'Pre zrušenie odberu newslettera kliknite na :newsletter_unsubscribe_link',
    ],
];
