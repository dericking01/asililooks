<?php

return [
    'name' => 'নিউজলেটার',
    'newsletter_form' => 'নিউজলেটার ফর্ম',
    'description' => 'নিউজলেটার সাবস্ক্রাইবার দেখুন এবং মুছুন',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'নিউজলেটার',
                'description' => 'নিউজলেটার ইমেইল টেমপ্লেট কনফিগার করুন',
                'to_admin' => [
                    'title' => 'অ্যাডমিনকে ইমেইল পাঠান',
                    'description' => 'অ্যাডমিনকে ইমেইল পাঠানোর টেমপ্লেট',
                    'subject' => 'নতুন ব্যবহারকারী আপনার নিউজলেটার সাবস্ক্রাইব করেছেন',
                    'newsletter_email' => 'নিউজলেটার সাবস্ক্রাইব করা ব্যবহারকারীর ইমেইল',
                ],
                'to_user' => [
                    'title' => 'ব্যবহারকারীকে ইমেইল পাঠান',
                    'description' => 'সাবস্ক্রাইবারকে ইমেইল পাঠানোর টেমপ্লেট',
                    'subject' => '{{ site_title }}: সাবস্ক্রিপশন নিশ্চিত করা হয়েছে!',
                    'newsletter_name' => 'নিউজলেটার সাবস্ক্রাইব করা ব্যবহারকারীর পূর্ণ নাম',
                    'newsletter_email' => 'নিউজলেটার সাবস্ক্রাইব করা ব্যবহারকারীর ইমেইল',
                    'newsletter_unsubscribe_link' => 'নিউজলেটার আনসাবস্ক্রাইব করার লিঙ্ক',
                    'newsletter_unsubscribe_url' => 'নিউজলেটার আনসাবস্ক্রাইব করার URL',
                ],
            ],
        ],
        'title' => 'নিউজলেটার',
        'panel_description' => 'নিউজলেটার সেটিংস দেখুন এবং আপডেট করুন',
        'description' => 'নিউজলেটারের সেটিংস (ওয়েবসাইটে কেউ নিউজলেটার নিবন্ধন করলে স্বয়ংক্রিয়ভাবে SendGrid, Mailchimp... এ নিউজলেটার ইমেইল পাঠান)।',
        'mailchimp_api_key' => 'Mailchimp API কী',
        'mailchimp_list_id' => 'Mailchimp তালিকা আইডি',
        'mailchimp_list' => 'Mailchimp তালিকা',
        'sendgrid_api_key' => 'Sendgrid API কী',
        'sendgrid_list_id' => 'Sendgrid তালিকা আইডি',
        'sendgrid_list' => 'Sendgrid তালিকা',
        'enable_newsletter_contacts_list_api' => 'নিউজলেটার পরিচিতি তালিকা API সক্ষম করবেন?',
    ],
    'statuses' => [
        'subscribed' => 'সাবস্ক্রাইব করা হয়েছে',
        'unsubscribed' => 'আনসাবস্ক্রাইব করা হয়েছে',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'নতুন সাবস্ক্রাইবার',
        'admin_new_subscriber_message' => 'নতুন ব্যবহারকারী আপনার নিউজলেটার সাবস্ক্রাইব করেছেন:',

        // Subscriber email template
        'subscriber_success_title' => 'সফলভাবে সাবস্ক্রাইব করা হয়েছে',
        'subscriber_thank_you_message' => 'আমাদের নিউজলেটার সাবস্ক্রাইব করার জন্য আপনাকে ধন্যবাদ!',
        'subscriber_unsubscribe_instruction' => 'নিউজলেটার আনসাবস্ক্রাইব করতে, :newsletter_unsubscribe_link ক্লিক করুন',
    ],
];
