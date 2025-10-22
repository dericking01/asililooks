<?php

return [
    'name' => 'Jaunumi',
    'newsletter_form' => 'Jaunumu forma',
    'description' => 'Skatīt un dzēst jaunumu abonentus',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Jaunumi',
                'description' => 'Konfigurēt jaunumu e-pasta veidnes',
                'to_admin' => [
                    'title' => 'E-pasts nosūtīts administratoram',
                    'description' => 'Veidne e-pasta nosūtīšanai administratoram',
                    'subject' => 'Jauns lietotājs ir abonējis jūsu jaunumus',
                    'newsletter_email' => 'Lietotāja, kas abonē jaunumus, e-pasts',
                ],
                'to_user' => [
                    'title' => 'E-pasts nosūtīts lietotājam',
                    'description' => 'Veidne e-pasta nosūtīšanai abonentam',
                    'subject' => '{{ site_title }}: Abonēšana apstiprināta!',
                    'newsletter_name' => 'Lietotāja, kas abonē jaunumus, pilns vārds',
                    'newsletter_email' => 'Lietotāja, kas abonē jaunumus, e-pasts',
                    'newsletter_unsubscribe_link' => 'Saite jaunumu atcelšanai',
                    'newsletter_unsubscribe_url' => 'URL jaunumu atcelšanai',
                ],
            ],
        ],
        'title' => 'Jaunumi',
        'panel_description' => 'Skatīt un atjaunināt jaunumu iestatījumus',
        'description' => 'Jaunumu iestatījumi (automātiska jaunumu e-pasta nosūtīšana uz SendGrid, Mailchimp... kad kāds reģistrējas jaunumiem vietnē).',
        'mailchimp_api_key' => 'Mailchimp API atslēga',
        'mailchimp_list_id' => 'Mailchimp saraksta ID',
        'mailchimp_list' => 'Mailchimp saraksts',
        'sendgrid_api_key' => 'Sendgrid API atslēga',
        'sendgrid_list_id' => 'Sendgrid saraksta ID',
        'sendgrid_list' => 'Sendgrid saraksts',
        'enable_newsletter_contacts_list_api' => 'Iespējot jaunumu kontaktu saraksta API?',
    ],
    'statuses' => [
        'subscribed' => 'Abonēts',
        'unsubscribed' => 'Atcelta abonēšana',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Jauns abonents',
        'admin_new_subscriber_message' => 'Jauns lietotājs ir abonējis jūsu jaunumus:',

        // Subscriber email template
        'subscriber_success_title' => 'Veiksmīgi abonēts',
        'subscriber_thank_you_message' => 'Paldies, ka abonējāt mūsu jaunumus!',
        'subscriber_unsubscribe_instruction' => 'Lai atceltu jaunumu abonēšanu, noklikšķiniet uz :newsletter_unsubscribe_link',
    ],
];
