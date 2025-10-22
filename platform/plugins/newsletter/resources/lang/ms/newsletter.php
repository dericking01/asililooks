<?php

return [
    'name' => 'Surat Berita',
    'newsletter_form' => 'Borang surat berita',
    'description' => 'Lihat dan padam pelanggan surat berita',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Surat Berita',
                'description' => 'Konfigurasi templat e-mel surat berita',
                'to_admin' => [
                    'title' => 'E-mel dihantar kepada pentadbir',
                    'description' => 'Templat untuk menghantar e-mel kepada pentadbir',
                    'subject' => 'Pengguna baru melanggan surat berita anda',
                    'newsletter_email' => 'E-mel pengguna yang melanggan surat berita',
                ],
                'to_user' => [
                    'title' => 'E-mel dihantar kepada pengguna',
                    'description' => 'Templat untuk menghantar e-mel kepada pelanggan',
                    'subject' => '{{ site_title }}: Langganan Disahkan!',
                    'newsletter_name' => 'Nama penuh pengguna yang melanggan surat berita',
                    'newsletter_email' => 'E-mel pengguna yang melanggan surat berita',
                    'newsletter_unsubscribe_link' => 'Pautan untuk berhenti melanggan surat berita',
                    'newsletter_unsubscribe_url' => 'URL untuk berhenti melanggan surat berita',
                ],
            ],
        ],
        'title' => 'Surat Berita',
        'panel_description' => 'Lihat dan kemas kini tetapan surat berita',
        'description' => 'Tetapan untuk surat berita (hantar e-mel surat berita secara automatik ke SendGrid, Mailchimp... apabila seseorang mendaftar surat berita di laman web).',
        'mailchimp_api_key' => 'Kunci API Mailchimp',
        'mailchimp_list_id' => 'ID Senarai Mailchimp',
        'mailchimp_list' => 'Senarai Mailchimp',
        'sendgrid_api_key' => 'Kunci API Sendgrid',
        'sendgrid_list_id' => 'ID Senarai Sendgrid',
        'sendgrid_list' => 'Senarai Sendgrid',
        'enable_newsletter_contacts_list_api' => 'Dayakan API senarai kenalan surat berita?',
    ],
    'statuses' => [
        'subscribed' => 'Dilanggan',
        'unsubscribed' => 'Berhenti langganan',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Pelanggan Baru',
        'admin_new_subscriber_message' => 'Pengguna baru telah melanggan surat berita anda:',

        // Subscriber email template
        'subscriber_success_title' => 'Berjaya Melanggan',
        'subscriber_thank_you_message' => 'Terima kasih kerana melanggan surat berita kami!',
        'subscriber_unsubscribe_instruction' => 'Untuk berhenti melanggan surat berita, klik :newsletter_unsubscribe_link',
    ],
];
