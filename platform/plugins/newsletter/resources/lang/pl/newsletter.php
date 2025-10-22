<?php

return [
    'name' => 'Newslettery',
    'newsletter_form' => 'Formularz newslettera',
    'description' => 'Przeglądaj i usuwaj subskrybentów newslettera',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Newsletter',
                'description' => 'Konfiguracja szablonów e-maili newslettera',
                'to_admin' => [
                    'title' => 'E-mail wysłany do administratora',
                    'description' => 'Szablon do wysyłania e-maili do administratora',
                    'subject' => 'Nowy użytkownik zapisał się do Twojego newslettera',
                    'newsletter_email' => 'E-mail użytkownika, który zapisał się do newslettera',
                ],
                'to_user' => [
                    'title' => 'E-mail wysłany do użytkownika',
                    'description' => 'Szablon do wysyłania e-maili do subskrybenta',
                    'subject' => '{{ site_title }}: Subskrypcja potwierdzona!',
                    'newsletter_name' => 'Pełne imię i nazwisko użytkownika, który zapisał się do newslettera',
                    'newsletter_email' => 'E-mail użytkownika, który zapisał się do newslettera',
                    'newsletter_unsubscribe_link' => 'Link do wypisania się z newslettera',
                    'newsletter_unsubscribe_url' => 'URL do wypisania się z newslettera',
                ],
            ],
        ],
        'title' => 'Newsletter',
        'panel_description' => 'Przeglądaj i aktualizuj ustawienia newslettera',
        'description' => 'Ustawienia newslettera (automatyczne wysyłanie e-maili newslettera do SendGrid, Mailchimp... gdy ktoś zarejestruje się do newslettera na stronie internetowej).',
        'mailchimp_api_key' => 'Klucz API Mailchimp',
        'mailchimp_list_id' => 'Identyfikator listy Mailchimp',
        'mailchimp_list' => 'Lista Mailchimp',
        'sendgrid_api_key' => 'Klucz API Sendgrid',
        'sendgrid_list_id' => 'Identyfikator listy Sendgrid',
        'sendgrid_list' => 'Lista Sendgrid',
        'enable_newsletter_contacts_list_api' => 'Włączyć API listy kontaktów newslettera?',
    ],
    'statuses' => [
        'subscribed' => 'Zapisany',
        'unsubscribed' => 'Wypisany',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Nowy subskrybent',
        'admin_new_subscriber_message' => 'Nowy użytkownik zapisał się do Twojego newslettera:',

        // Subscriber email template
        'subscriber_success_title' => 'Pomyślnie zapisano',
        'subscriber_thank_you_message' => 'Dziękujemy za zapisanie się do naszego newslettera!',
        'subscriber_unsubscribe_instruction' => 'Aby wypisać się z newslettera, kliknij :newsletter_unsubscribe_link',
    ],
];
