<?php

return [
    'name' => 'จดหมายข่าว',
    'newsletter_form' => 'แบบฟอร์มจดหมายข่าว',
    'description' => 'ดูและลบผู้สมัครรับจดหมายข่าว',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'จดหมายข่าว',
                'description' => 'กำหนดค่าเทมเพลตอีเมลจดหมายข่าว',
                'to_admin' => [
                    'title' => 'อีเมลส่งถึงผู้ดูแลระบบ',
                    'description' => 'เทมเพลตสำหรับการส่งอีเมลถึงผู้ดูแลระบบ',
                    'subject' => 'ผู้ใช้ใหม่ได้สมัครรับจดหมายข่าวของคุณ',
                    'newsletter_email' => 'อีเมลของผู้ใช้ที่สมัครรับจดหมายข่าว',
                ],
                'to_user' => [
                    'title' => 'อีเมลส่งถึงผู้ใช้',
                    'description' => 'เทมเพลตสำหรับการส่งอีเมลถึงผู้สมัคร',
                    'subject' => '{{ site_title }}: ยืนยันการสมัครรับแล้ว!',
                    'newsletter_name' => 'ชื่อเต็มของผู้ใช้ที่สมัครรับจดหมายข่าว',
                    'newsletter_email' => 'อีเมลของผู้ใช้ที่สมัครรับจดหมายข่าว',
                    'newsletter_unsubscribe_link' => 'ลิงก์สำหรับยกเลิกการสมัครรับจดหมายข่าว',
                    'newsletter_unsubscribe_url' => 'URL สำหรับยกเลิกการสมัครรับจดหมายข่าว',
                ],
            ],
        ],
        'title' => 'จดหมายข่าว',
        'panel_description' => 'ดูและอัปเดตการตั้งค่าจดหมายข่าว',
        'description' => 'การตั้งค่าสำหรับจดหมายข่าว (ส่งอีเมลจดหมายข่าวอัตโนมัติไปยัง SendGrid, Mailchimp... เมื่อมีคนลงทะเบียนจดหมายข่าวบนเว็บไซต์)',
        'mailchimp_api_key' => 'คีย์ API ของ Mailchimp',
        'mailchimp_list_id' => 'รหัสรายชื่อของ Mailchimp',
        'mailchimp_list' => 'รายชื่อของ Mailchimp',
        'sendgrid_api_key' => 'คีย์ API ของ Sendgrid',
        'sendgrid_list_id' => 'รหัสรายชื่อของ Sendgrid',
        'sendgrid_list' => 'รายชื่อของ Sendgrid',
        'enable_newsletter_contacts_list_api' => 'เปิดใช้งาน API รายชื่อผู้ติดต่อของจดหมายข่าวหรือไม่?',
    ],
    'statuses' => [
        'subscribed' => 'สมัครรับแล้ว',
        'unsubscribed' => 'ยกเลิกการสมัครแล้ว',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'ผู้สมัครใหม่',
        'admin_new_subscriber_message' => 'ผู้ใช้ใหม่ได้สมัครรับจดหมายข่าวของคุณ:',

        // Subscriber email template
        'subscriber_success_title' => 'สมัครรับสำเร็จ',
        'subscriber_thank_you_message' => 'ขอบคุณที่สมัครรับจดหมายข่าวของเรา!',
        'subscriber_unsubscribe_instruction' => 'หากต้องการยกเลิกการสมัครรับจดหมายข่าว คลิก :newsletter_unsubscribe_link',
    ],
];
