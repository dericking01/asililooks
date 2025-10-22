<?php

return [
    'name' => 'Билтени',
    'newsletter_form' => 'Формулар за билтен',
    'description' => 'Преглед и брисање претплатника на билтен',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Билтен',
                'description' => 'Конфигурисање шаблона е-поште за билтен',
                'to_admin' => [
                    'title' => 'Е-пошта послата администратору',
                    'description' => 'Шаблон за слање е-поште администратору',
                    'subject' => 'Нови корисник се претплатио на ваш билтен',
                    'newsletter_email' => 'Е-пошта корисника који се претплаћује на билтен',
                ],
                'to_user' => [
                    'title' => 'Е-пошта послата кориснику',
                    'description' => 'Шаблон за слање е-поште претплатнику',
                    'subject' => '{{ site_title }}: Претплата потврђена!',
                    'newsletter_name' => 'Пуно име корисника који се претплаћује на билтен',
                    'newsletter_email' => 'Е-пошта корисника који се претплаћује на билтен',
                    'newsletter_unsubscribe_link' => 'Веза за одјаву са билтена',
                    'newsletter_unsubscribe_url' => 'URL за одјаву са билтена',
                ],
            ],
        ],
        'title' => 'Билтен',
        'panel_description' => 'Преглед и ажурирање подешавања билтена',
        'description' => 'Подешавања за билтен (автоматско слање е-поште билтена на SendGrid, Mailchimp... када се неко региструје за билтен на веб сајту).',
        'mailchimp_api_key' => 'Mailchimp API кључ',
        'mailchimp_list_id' => 'Mailchimp ID листе',
        'mailchimp_list' => 'Mailchimp листа',
        'sendgrid_api_key' => 'Sendgrid API кључ',
        'sendgrid_list_id' => 'Sendgrid ID листе',
        'sendgrid_list' => 'Sendgrid листа',
        'enable_newsletter_contacts_list_api' => 'Омогућити API листе контаката билтена?',
    ],
    'statuses' => [
        'subscribed' => 'Претплаћен',
        'unsubscribed' => 'Одјављен',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Нови претплатник',
        'admin_new_subscriber_message' => 'Нови корисник се претплатио на ваш билтен:',

        // Subscriber email template
        'subscriber_success_title' => 'Успешна претплата',
        'subscriber_thank_you_message' => 'Хвала што сте се претплатили на наш билтен!',
        'subscriber_unsubscribe_instruction' => 'Да бисте се одјавили са билтена, кликните на :newsletter_unsubscribe_link',
    ],
];
