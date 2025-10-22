<?php

return [
    'name' => 'Uutiskirjeet',
    'newsletter_form' => 'Uutiskirjelomake',
    'description' => 'Näytä ja poista uutiskirjeen tilaajia',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Uutiskirje',
                'description' => 'Määritä uutiskirjeen sähköpostimallit',
                'to_admin' => [
                    'title' => 'Ylläpitäjälle lähetetty sähköposti',
                    'description' => 'Malli sähköpostin lähettämiseen ylläpitäjälle',
                    'subject' => 'Uusi käyttäjä tilasi uutiskirjeesi',
                    'newsletter_email' => 'Uutiskirjeen tilanneen käyttäjän sähköposti',
                ],
                'to_user' => [
                    'title' => 'Käyttäjälle lähetetty sähköposti',
                    'description' => 'Malli sähköpostin lähettämiseen tilaajalle',
                    'subject' => '{{ site_title }}: Tilaus vahvistettu!',
                    'newsletter_name' => 'Uutiskirjeen tilanneen käyttäjän koko nimi',
                    'newsletter_email' => 'Uutiskirjeen tilanneen käyttäjän sähköposti',
                    'newsletter_unsubscribe_link' => 'Linkki uutiskirjeen peruuttamiseen',
                    'newsletter_unsubscribe_url' => 'URL uutiskirjeen peruuttamiseen',
                ],
            ],
        ],
        'title' => 'Uutiskirje',
        'panel_description' => 'Näytä ja päivitä uutiskirjeen asetuksia',
        'description' => 'Uutiskirjeen asetukset (lähetä automaattisesti uutiskirje sähköpostilla SendGridiin, Mailchimpiin... kun joku rekisteröityy uutiskirjeeseen verkkosivustolla).',
        'mailchimp_api_key' => 'Mailchimp API-avain',
        'mailchimp_list_id' => 'Mailchimp-luettelon tunnus',
        'mailchimp_list' => 'Mailchimp-luettelo',
        'sendgrid_api_key' => 'Sendgrid API-avain',
        'sendgrid_list_id' => 'Sendgrid-luettelon tunnus',
        'sendgrid_list' => 'Sendgrid-luettelo',
        'enable_newsletter_contacts_list_api' => 'Ota käyttöön uutiskirjeen yhteystietoluettelon API?',
    ],
    'statuses' => [
        'subscribed' => 'Tilattu',
        'unsubscribed' => 'Peruttu',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Uusi tilaaja',
        'admin_new_subscriber_message' => 'Uusi käyttäjä on tilannut uutiskirjeesi:',

        // Subscriber email template
        'subscriber_success_title' => 'Tilaus onnistui',
        'subscriber_thank_you_message' => 'Kiitos uutiskirjeemme tilaamisesta!',
        'subscriber_unsubscribe_instruction' => 'Peruuttaaksesi uutiskirjeen tilauksen, klikkaa :newsletter_unsubscribe_link',
    ],
];
