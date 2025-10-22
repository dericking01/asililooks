<?php

return [
    'name' => 'Newsletter',
    'newsletter_form' => 'Formulir newsletter',
    'description' => 'Lihat dan hapus pelanggan newsletter',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Newsletter',
                'description' => 'Konfigurasi template email newsletter',
                'to_admin' => [
                    'title' => 'Email dikirim ke admin',
                    'description' => 'Template untuk mengirim email ke admin',
                    'subject' => 'Pengguna baru berlangganan newsletter Anda',
                    'newsletter_email' => 'Email pengguna yang berlangganan newsletter',
                ],
                'to_user' => [
                    'title' => 'Email dikirim ke pengguna',
                    'description' => 'Template untuk mengirim email ke pelanggan',
                    'subject' => '{{ site_title }}: Langganan Dikonfirmasi!',
                    'newsletter_name' => 'Nama lengkap pengguna yang berlangganan newsletter',
                    'newsletter_email' => 'Email pengguna yang berlangganan newsletter',
                    'newsletter_unsubscribe_link' => 'Tautan untuk berhenti berlangganan newsletter',
                    'newsletter_unsubscribe_url' => 'URL untuk berhenti berlangganan newsletter',
                ],
            ],
        ],
        'title' => 'Newsletter',
        'panel_description' => 'Lihat dan perbarui pengaturan newsletter',
        'description' => 'Pengaturan untuk newsletter (otomatis mengirim email newsletter ke SendGrid, Mailchimp... saat seseorang mendaftar newsletter di situs web).',
        'mailchimp_api_key' => 'Kunci API Mailchimp',
        'mailchimp_list_id' => 'ID Daftar Mailchimp',
        'mailchimp_list' => 'Daftar Mailchimp',
        'sendgrid_api_key' => 'Kunci API Sendgrid',
        'sendgrid_list_id' => 'ID Daftar Sendgrid',
        'sendgrid_list' => 'Daftar Sendgrid',
        'enable_newsletter_contacts_list_api' => 'Aktifkan API daftar kontak newsletter?',
    ],
    'statuses' => [
        'subscribed' => 'Berlangganan',
        'unsubscribed' => 'Berhenti berlangganan',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Pelanggan Baru',
        'admin_new_subscriber_message' => 'Pengguna baru telah berlangganan newsletter Anda:',

        // Subscriber email template
        'subscriber_success_title' => 'Berhasil Berlangganan',
        'subscriber_thank_you_message' => 'Terima kasih telah berlangganan newsletter kami!',
        'subscriber_unsubscribe_instruction' => 'Untuk berhenti berlangganan newsletter, klik :newsletter_unsubscribe_link',
    ],
];
