<?php

return [
    'name' => 'न्यूज़लेटर',
    'newsletter_form' => 'न्यूज़लेटर फॉर्म',
    'description' => 'न्यूज़लेटर सब्सक्राइबर देखें और हटाएं',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'न्यूज़लेटर',
                'description' => 'न्यूज़लेटर ईमेल टेम्पलेट कॉन्फ़िगर करें',
                'to_admin' => [
                    'title' => 'एडमिन को ईमेल भेजें',
                    'description' => 'एडमिन को ईमेल भेजने के लिए टेम्पलेट',
                    'subject' => 'नए उपयोगकर्ता ने आपके न्यूज़लेटर को सब्सक्राइब किया',
                    'newsletter_email' => 'न्यूज़लेटर सब्सक्राइब करने वाले उपयोगकर्ता का ईमेल',
                ],
                'to_user' => [
                    'title' => 'उपयोगकर्ता को ईमेल भेजें',
                    'description' => 'सब्सक्राइबर को ईमेल भेजने के लिए टेम्पलेट',
                    'subject' => '{{ site_title }}: सब्सक्रिप्शन की पुष्टि हो गई!',
                    'newsletter_name' => 'न्यूज़लेटर सब्सक्राइब करने वाले उपयोगकर्ता का पूरा नाम',
                    'newsletter_email' => 'न्यूज़लेटर सब्सक्राइब करने वाले उपयोगकर्ता का ईमेल',
                    'newsletter_unsubscribe_link' => 'न्यूज़लेटर अनसब्सक्राइब करने के लिए लिंक',
                    'newsletter_unsubscribe_url' => 'न्यूज़लेटर अनसब्सक्राइब करने के लिए URL',
                ],
            ],
        ],
        'title' => 'न्यूज़लेटर',
        'panel_description' => 'न्यूज़लेटर सेटिंग्स देखें और अपडेट करें',
        'description' => 'न्यूज़लेटर के लिए सेटिंग्स (वेबसाइट पर कोई न्यूज़लेटर रजिस्टर करता है तो SendGrid, Mailchimp... को स्वचालित रूप से न्यूज़लेटर ईमेल भेजें)।',
        'mailchimp_api_key' => 'Mailchimp API कुंजी',
        'mailchimp_list_id' => 'Mailchimp सूची ID',
        'mailchimp_list' => 'Mailchimp सूची',
        'sendgrid_api_key' => 'Sendgrid API कुंजी',
        'sendgrid_list_id' => 'Sendgrid सूची ID',
        'sendgrid_list' => 'Sendgrid सूची',
        'enable_newsletter_contacts_list_api' => 'न्यूज़लेटर संपर्क सूची API सक्षम करें?',
    ],
    'statuses' => [
        'subscribed' => 'सब्सक्राइब किया गया',
        'unsubscribed' => 'अनसब्सक्राइब किया गया',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'नया सब्सक्राइबर',
        'admin_new_subscriber_message' => 'नए उपयोगकर्ता ने आपके न्यूज़लेटर को सब्सक्राइब किया है:',

        // Subscriber email template
        'subscriber_success_title' => 'सफलतापूर्वक सब्सक्राइब किया गया',
        'subscriber_thank_you_message' => 'हमारे न्यूज़लेटर को सब्सक्राइब करने के लिए धन्यवाद!',
        'subscriber_unsubscribe_instruction' => 'न्यूज़लेटर अनसब्सक्राइब करने के लिए, :newsletter_unsubscribe_link पर क्लिक करें',
    ],
];
