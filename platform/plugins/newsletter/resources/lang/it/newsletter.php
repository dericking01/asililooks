<?php

return [
    'name' => 'Newsletter',
    'newsletter_form' => 'Modulo newsletter',
    'description' => 'Visualizza ed elimina gli iscritti alla newsletter',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Newsletter',
                'description' => 'Configura i modelli email della newsletter',
                'to_admin' => [
                    'title' => 'Email inviata all\'amministratore',
                    'description' => 'Modello per l\'invio di email all\'amministratore',
                    'subject' => 'Un nuovo utente si è iscritto alla tua newsletter',
                    'newsletter_email' => 'Email dell\'utente che si è iscritto alla newsletter',
                ],
                'to_user' => [
                    'title' => 'Email inviata all\'utente',
                    'description' => 'Modello per l\'invio di email all\'iscritto',
                    'subject' => '{{ site_title }}: Iscrizione confermata!',
                    'newsletter_name' => 'Nome completo dell\'utente che si è iscritto alla newsletter',
                    'newsletter_email' => 'Email dell\'utente che si è iscritto alla newsletter',
                    'newsletter_unsubscribe_link' => 'Link per annullare l\'iscrizione alla newsletter',
                    'newsletter_unsubscribe_url' => 'URL per annullare l\'iscrizione alla newsletter',
                ],
            ],
        ],
        'title' => 'Newsletter',
        'panel_description' => 'Visualizza e aggiorna le impostazioni della newsletter',
        'description' => 'Impostazioni per la newsletter (invio automatico di email della newsletter a SendGrid, Mailchimp... quando qualcuno si iscrive alla newsletter sul sito web).',
        'mailchimp_api_key' => 'Chiave API Mailchimp',
        'mailchimp_list_id' => 'ID elenco Mailchimp',
        'mailchimp_list' => 'Elenco Mailchimp',
        'sendgrid_api_key' => 'Chiave API Sendgrid',
        'sendgrid_list_id' => 'ID elenco Sendgrid',
        'sendgrid_list' => 'Elenco Sendgrid',
        'enable_newsletter_contacts_list_api' => 'Abilitare l\'API dell\'elenco contatti della newsletter?',
    ],
    'statuses' => [
        'subscribed' => 'Iscritto',
        'unsubscribed' => 'Disiscritto',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Nuovo iscritto',
        'admin_new_subscriber_message' => 'Un nuovo utente si è iscritto alla tua newsletter:',

        // Subscriber email template
        'subscriber_success_title' => 'Iscrizione riuscita',
        'subscriber_thank_you_message' => 'Grazie per esserti iscritto alla nostra newsletter!',
        'subscriber_unsubscribe_instruction' => 'Per annullare l\'iscrizione alla newsletter, clicca su :newsletter_unsubscribe_link',
    ],
];
