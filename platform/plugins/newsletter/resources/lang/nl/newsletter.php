<?php

return [
    'name' => 'Nieuwsbrieven',
    'newsletter_form' => 'Nieuwsbrief formulier',
    'description' => 'Bekijk en verwijder nieuwsbrief abonnees',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Nieuwsbrief',
                'description' => 'Configureer nieuwsbrief e-mailsjablonen',
                'to_admin' => [
                    'title' => 'E-mail verzonden naar beheerder',
                    'description' => 'Sjabloon voor het verzenden van e-mail naar beheerder',
                    'subject' => 'Nieuwe gebruiker heeft zich geabonneerd op uw nieuwsbrief',
                    'newsletter_email' => 'E-mail van gebruiker die zich abonneert op nieuwsbrief',
                ],
                'to_user' => [
                    'title' => 'E-mail verzonden naar gebruiker',
                    'description' => 'Sjabloon voor het verzenden van e-mail naar abonnee',
                    'subject' => '{{ site_title }}: Abonnement bevestigd!',
                    'newsletter_name' => 'Volledige naam van gebruiker die zich abonneert op nieuwsbrief',
                    'newsletter_email' => 'E-mail van gebruiker die zich abonneert op nieuwsbrief',
                    'newsletter_unsubscribe_link' => 'Link om nieuwsbrief op te zeggen',
                    'newsletter_unsubscribe_url' => 'URL om nieuwsbrief op te zeggen',
                ],
            ],
        ],
        'title' => 'Nieuwsbrief',
        'panel_description' => 'Bekijk en update nieuwsbrief instellingen',
        'description' => 'Instellingen voor nieuwsbrief (automatisch nieuwsbrief e-mail verzenden naar SendGrid, Mailchimp... wanneer iemand zich registreert voor nieuwsbrief op website).',
        'mailchimp_api_key' => 'Mailchimp API-sleutel',
        'mailchimp_list_id' => 'Mailchimp lijst-ID',
        'mailchimp_list' => 'Mailchimp lijst',
        'sendgrid_api_key' => 'Sendgrid API-sleutel',
        'sendgrid_list_id' => 'Sendgrid lijst-ID',
        'sendgrid_list' => 'Sendgrid lijst',
        'enable_newsletter_contacts_list_api' => 'Nieuwsbrief contactenlijst API inschakelen?',
    ],
    'statuses' => [
        'subscribed' => 'Geabonneerd',
        'unsubscribed' => 'Uitgeschreven',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Nieuwe abonnee',
        'admin_new_subscriber_message' => 'Nieuwe gebruiker heeft zich geabonneerd op uw nieuwsbrief:',

        // Subscriber email template
        'subscriber_success_title' => 'Succesvol geabonneerd',
        'subscriber_thank_you_message' => 'Bedankt voor het abonneren op onze nieuwsbrief!',
        'subscriber_unsubscribe_instruction' => 'Om de nieuwsbrief op te zeggen, klik op :newsletter_unsubscribe_link',
    ],
];
