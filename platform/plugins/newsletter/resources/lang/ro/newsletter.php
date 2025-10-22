<?php

return [
    'name' => 'Buletine informative',
    'newsletter_form' => 'Formular buletin informativ',
    'description' => 'Vizualizați și ștergeți abonații la buletin informativ',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Buletin informativ',
                'description' => 'Configurați șabloanele de e-mail pentru buletin informativ',
                'to_admin' => [
                    'title' => 'E-mail trimis către administrator',
                    'description' => 'Șablon pentru trimiterea de e-mailuri către administrator',
                    'subject' => 'Un nou utilizator s-a abonat la buletinul dumneavoastră informativ',
                    'newsletter_email' => 'E-mailul utilizatorului care se abonează la buletin informativ',
                ],
                'to_user' => [
                    'title' => 'E-mail trimis către utilizator',
                    'description' => 'Șablon pentru trimiterea de e-mailuri către abonat',
                    'subject' => '{{ site_title }}: Abonare confirmată!',
                    'newsletter_name' => 'Numele complet al utilizatorului care se abonează la buletin informativ',
                    'newsletter_email' => 'E-mailul utilizatorului care se abonează la buletin informativ',
                    'newsletter_unsubscribe_link' => 'Link pentru dezabonarea de la buletin informativ',
                    'newsletter_unsubscribe_url' => 'URL pentru dezabonarea de la buletin informativ',
                ],
            ],
        ],
        'title' => 'Buletin informativ',
        'panel_description' => 'Vizualizați și actualizați setările buletinului informativ',
        'description' => 'Setări pentru buletin informativ (trimitere automată a e-mailului buletinului informativ către SendGrid, Mailchimp... când cineva se înregistrează pentru buletin informativ pe site).',
        'mailchimp_api_key' => 'Cheie API Mailchimp',
        'mailchimp_list_id' => 'ID listă Mailchimp',
        'mailchimp_list' => 'Listă Mailchimp',
        'sendgrid_api_key' => 'Cheie API Sendgrid',
        'sendgrid_list_id' => 'ID listă Sendgrid',
        'sendgrid_list' => 'Listă Sendgrid',
        'enable_newsletter_contacts_list_api' => 'Activați API-ul listei de contacte pentru buletin informativ?',
    ],
    'statuses' => [
        'subscribed' => 'Abonat',
        'unsubscribed' => 'Dezabonat',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Abonat nou',
        'admin_new_subscriber_message' => 'Un nou utilizator s-a abonat la buletinul dumneavoastră informativ:',

        // Subscriber email template
        'subscriber_success_title' => 'Abonare reușită',
        'subscriber_thank_you_message' => 'Vă mulțumim că v-ați abonat la buletinul nostru informativ!',
        'subscriber_unsubscribe_instruction' => 'Pentru a vă dezabona de la buletin informativ, faceți clic pe :newsletter_unsubscribe_link',
    ],
];
