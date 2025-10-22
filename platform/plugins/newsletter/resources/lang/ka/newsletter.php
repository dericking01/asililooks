<?php

return [
    'name' => 'ინფორმაციული ბიულეტენები',
    'newsletter_form' => 'ინფორმაციული ბიულეტენის ფორმა',
    'description' => 'ნახეთ და წაშალეთ ინფორმაციული ბიულეტენის გამომწერები',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'ინფორმაციული ბიულეტენი',
                'description' => 'კონფიგურაცია ინფორმაციული ბიულეტენის ელფოსტის შაბლონები',
                'to_admin' => [
                    'title' => 'ელფოსტა ადმინისტრატორისთვის',
                    'description' => 'შაბლონი ადმინისტრატორისთვის ელფოსტის გაგზავნისთვის',
                    'subject' => 'ახალი მომხმარებელი გამოიწერა თქვენს ინფორმაციულ ბიულეტენს',
                    'newsletter_email' => 'მომხმარებლის ელფოსტა, რომელიც გამოიწერა ბიულეტენს',
                ],
                'to_user' => [
                    'title' => 'ელფოსტა მომხმარებლისთვის',
                    'description' => 'შაბლონი გამომწერისთვის ელფოსტის გაგზავნისთვის',
                    'subject' => '{{ site_title }}: გამოწერა დადასტურებულია!',
                    'newsletter_name' => 'მომხმარებლის სრული სახელი, რომელიც გამოიწერა ბიულეტენს',
                    'newsletter_email' => 'მომხმარებლის ელფოსტა, რომელიც გამოიწერა ბიულეტენს',
                    'newsletter_unsubscribe_link' => 'ბმული ბიულეტენის გამოწერის გასაუქმებლად',
                    'newsletter_unsubscribe_url' => 'URL ბიულეტენის გამოწერის გასაუქმებლად',
                ],
            ],
        ],
        'title' => 'ინფორმაციული ბიულეტენი',
        'panel_description' => 'ნახეთ და განაახლეთ ინფორმაციული ბიულეტენის პარამეტრები',
        'description' => 'პარამეტრები ინფორმაციული ბიულეტენისთვის (ავტომატურად გაგზავნეთ ბიულეტენის ელფოსტა SendGrid-ზე, Mailchimp-ზე... როდესაც ვიღაც რეგისტრირდება ბიულეტენზე ვებსაიტზე).',
        'mailchimp_api_key' => 'Mailchimp API გასაღები',
        'mailchimp_list_id' => 'Mailchimp სიის ID',
        'mailchimp_list' => 'Mailchimp სია',
        'sendgrid_api_key' => 'Sendgrid API გასაღები',
        'sendgrid_list_id' => 'Sendgrid სიის ID',
        'sendgrid_list' => 'Sendgrid სია',
        'enable_newsletter_contacts_list_api' => 'ჩართეთ ბიულეტენის კონტაქტების სიის API?',
    ],
    'statuses' => [
        'subscribed' => 'გამოწერილი',
        'unsubscribed' => 'გამოწერა გაუქმებული',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'ახალი გამომწერი',
        'admin_new_subscriber_message' => 'ახალი მომხმარებელი გამოიწერა თქვენს ბიულეტენს:',

        // Subscriber email template
        'subscriber_success_title' => 'გამოწერა წარმატებულია',
        'subscriber_thank_you_message' => 'გმადლობთ ჩვენი ბიულეტენის გამოწერისთვის!',
        'subscriber_unsubscribe_instruction' => 'ბიულეტენის გამოწერის გასაუქმებლად დააჭირეთ :newsletter_unsubscribe_link',
    ],
];
