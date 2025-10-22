<?php

return [
    'name' => 'Бюлетини',
    'newsletter_form' => 'Формуляр за бюлетини',
    'description' => 'Преглед и изтриване на абонати на бюлетини',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Бюлетин',
                'description' => 'Конфигуриране на шаблони за имейли на бюлетини',
                'to_admin' => [
                    'title' => 'Имейл до администратор',
                    'description' => 'Шаблон за изпращане на имейл до администратор',
                    'subject' => 'Нов потребител се абонира за вашия бюлетин',
                    'newsletter_email' => 'Имейл на потребителя, който се абонира за бюлетин',
                ],
                'to_user' => [
                    'title' => 'Имейл до потребител',
                    'description' => 'Шаблон за изпращане на имейл до абонат',
                    'subject' => '{{ site_title }}: Абонаментът е потвърден!',
                    'newsletter_name' => 'Пълно име на потребителя, който се абонира за бюлетин',
                    'newsletter_email' => 'Имейл на потребителя, който се абонира за бюлетин',
                    'newsletter_unsubscribe_link' => 'Линк за отписване от бюлетин',
                    'newsletter_unsubscribe_url' => 'URL за отписване от бюлетин',
                ],
            ],
        ],
        'title' => 'Бюлетин',
        'panel_description' => 'Преглед и актуализиране на настройките на бюлетина',
        'description' => 'Настройки за бюлетин (автоматично изпращане на имейли на бюлетин до SendGrid, Mailchimp... когато някой се регистрира за бюлетин на уебсайта).',
        'mailchimp_api_key' => 'Mailchimp API ключ',
        'mailchimp_list_id' => 'Mailchimp идентификатор на списък',
        'mailchimp_list' => 'Mailchimp списък',
        'sendgrid_api_key' => 'Sendgrid API ключ',
        'sendgrid_list_id' => 'Sendgrid идентификатор на списък',
        'sendgrid_list' => 'Sendgrid списък',
        'enable_newsletter_contacts_list_api' => 'Активиране на API за списък с контакти на бюлетин?',
    ],
    'statuses' => [
        'subscribed' => 'Абониран',
        'unsubscribed' => 'Отписан',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Нов абонат',
        'admin_new_subscriber_message' => 'Нов потребител се абонира за вашия бюлетин:',

        // Subscriber email template
        'subscriber_success_title' => 'Успешен абонамент',
        'subscriber_thank_you_message' => 'Благодарим ви, че се абонирахте за нашия бюлетин!',
        'subscriber_unsubscribe_instruction' => 'За да се отпишете от бюлетина, кликнете :newsletter_unsubscribe_link',
    ],
];
