<?php

return [
    'name' => 'Ενημερωτικά δελτία',
    'newsletter_form' => 'Φόρμα ενημερωτικού δελτίου',
    'description' => 'Προβολή και διαγραφή συνδρομητών ενημερωτικού δελτίου',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Ενημερωτικό δελτίο',
                'description' => 'Διαμόρφωση προτύπων email ενημερωτικού δελτίου',
                'to_admin' => [
                    'title' => 'Email αποστολής στον διαχειριστή',
                    'description' => 'Πρότυπο για αποστολή email στον διαχειριστή',
                    'subject' => 'Νέος χρήστης εγγράφηκε στο ενημερωτικό σας δελτίο',
                    'newsletter_email' => 'Email χρήστη που εγγράφηκε στο ενημερωτικό δελτίο',
                ],
                'to_user' => [
                    'title' => 'Email αποστολής στον χρήστη',
                    'description' => 'Πρότυπο για αποστολή email στον συνδρομητή',
                    'subject' => '{{ site_title }}: Η εγγραφή επιβεβαιώθηκε!',
                    'newsletter_name' => 'Πλήρες όνομα χρήστη που εγγράφηκε στο ενημερωτικό δελτίο',
                    'newsletter_email' => 'Email χρήστη που εγγράφηκε στο ενημερωτικό δελτίο',
                    'newsletter_unsubscribe_link' => 'Σύνδεσμος για διαγραφή από το ενημερωτικό δελτίο',
                    'newsletter_unsubscribe_url' => 'URL για διαγραφή από το ενημερωτικό δελτίο',
                ],
            ],
        ],
        'title' => 'Ενημερωτικό δελτίο',
        'panel_description' => 'Προβολή και ενημέρωση ρυθμίσεων ενημερωτικού δελτίου',
        'description' => 'Ρυθμίσεις για το ενημερωτικό δελτίο (αυτόματη αποστολή email ενημερωτικού δελτίου στο SendGrid, Mailchimp... όταν κάποιος εγγράφεται στο ενημερωτικό δελτίο στον ιστότοπο).',
        'mailchimp_api_key' => 'Κλειδί API Mailchimp',
        'mailchimp_list_id' => 'Αναγνωριστικό λίστας Mailchimp',
        'mailchimp_list' => 'Λίστα Mailchimp',
        'sendgrid_api_key' => 'Κλειδί API Sendgrid',
        'sendgrid_list_id' => 'Αναγνωριστικό λίστας Sendgrid',
        'sendgrid_list' => 'Λίστα Sendgrid',
        'enable_newsletter_contacts_list_api' => 'Ενεργοποίηση API λίστας επαφών ενημερωτικού δελτίου;',
    ],
    'statuses' => [
        'subscribed' => 'Εγγεγραμμένος',
        'unsubscribed' => 'Διαγραμμένος',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => 'Νέος συνδρομητής',
        'admin_new_subscriber_message' => 'Νέος χρήστης εγγράφηκε στο ενημερωτικό σας δελτίο:',

        // Subscriber email template
        'subscriber_success_title' => 'Επιτυχής εγγραφή',
        'subscriber_thank_you_message' => 'Σας ευχαριστούμε που εγγραφήκατε στο ενημερωτικό μας δελτίο!',
        'subscriber_unsubscribe_instruction' => 'Για να διαγραφείτε από το ενημερωτικό δελτίο, κάντε κλικ στο :newsletter_unsubscribe_link',
    ],
];
