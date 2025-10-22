<?php

return [
    'name' => 'ניוזלטרים',
    'newsletter_form' => 'טופס ניוזלטר',
    'description' => 'צפייה ומחיקה של מנויים לניוזלטר',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'ניוזלטר',
                'description' => 'הגדרת תבניות דוא"ל לניוזלטר',
                'to_admin' => [
                    'title' => 'דוא"ל שנשלח למנהל',
                    'description' => 'תבנית לשליחת דוא"ל למנהל',
                    'subject' => 'משתמש חדש נרשם לניוזלטר שלך',
                    'newsletter_email' => 'דוא"ל של משתמש שנרשם לניוזלטר',
                ],
                'to_user' => [
                    'title' => 'דוא"ל שנשלח למשתמש',
                    'description' => 'תבנית לשליחת דוא"ל למנוי',
                    'subject' => '{{ site_title }}: המנוי אושר!',
                    'newsletter_name' => 'שם מלא של משתמש שנרשם לניוזלטר',
                    'newsletter_email' => 'דוא"ל של משתמש שנרשם לניוזלטר',
                    'newsletter_unsubscribe_link' => 'קישור לביטול המנוי לניוזלטר',
                    'newsletter_unsubscribe_url' => 'כתובת URL לביטול המנוי לניוזלטר',
                ],
            ],
        ],
        'title' => 'ניוזלטר',
        'panel_description' => 'צפייה ועדכון הגדרות ניוזלטר',
        'description' => 'הגדרות לניוזלטר (שליחה אוטומטית של דוא"ל ניוזלטר ל-SendGrid, Mailchimp... כאשר מישהו נרשם לניוזלטר באתר).',
        'mailchimp_api_key' => 'מפתח API של Mailchimp',
        'mailchimp_list_id' => 'מזהה רשימת Mailchimp',
        'mailchimp_list' => 'רשימת Mailchimp',
        'sendgrid_api_key' => 'מפתח API של Sendgrid',
        'sendgrid_list_id' => 'מזהה רשימת Sendgrid',
        'sendgrid_list' => 'רשימת Sendgrid',
        'enable_newsletter_contacts_list_api' => 'הפעלת API של רשימת אנשי קשר לניוזלטר?',
    ],
    'statuses' => [
        'subscribed' => 'נרשם',
        'unsubscribed' => 'ביטל מנוי',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'מנוי חדש',
        'admin_new_subscriber_message' => 'משתמש חדש נרשם לניוזלטר שלך:',

        // Subscriber email template
        'subscriber_success_title' => 'ההרשמה הצליחה',
        'subscriber_thank_you_message' => 'תודה שנרשמת לניוזלטר שלנו!',
        'subscriber_unsubscribe_instruction' => 'כדי לבטל את המנוי לניוזלטר, לחץ על :newsletter_unsubscribe_link',
    ],
];
