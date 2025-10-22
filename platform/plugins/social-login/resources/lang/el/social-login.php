<?php

return [
    'settings' => [
        'title' => 'Ρυθμίσεις κοινωνικής σύνδεσης',
        'description' => 'Διαμόρφωση επιλογών κοινωνικής σύνδεσης',
        'facebook' => [
            'enable' => 'Ενεργοποίηση σύνδεσης μέσω Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Μεταβείτε στο https://developers.facebook.com για να δημιουργήσετε νέα εφαρμογή και να ενημερώσετε το App ID, App Secret. Το Callback URL είναι :callback',
            'data_deletion_request_callback_url' => 'Ορίστε αυτό το URL :url ως URL αιτήματος διαγραφής δεδομένων στις ρυθμίσεις της εφαρμογής σας στο Facebook για να επιτρέψετε στους χρήστες να ζητήσουν τη διαγραφή των δεδομένων τους.',
        ],
        'google' => [
            'enable' => 'Ενεργοποίηση σύνδεσης μέσω Google',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Μεταβείτε στο https://console.developers.google.com/apis/dashboard για να δημιουργήσετε νέα εφαρμογή και να ενημερώσετε το App ID, App Secret. Το Callback URL είναι :callback',
            'use_google_button' => 'Χρήση κουμπιού Google',
            'use_google_button_helper' => 'Εάν ενεργοποιήσετε αυτήν την επιλογή, θα χρησιμοποιηθεί το κουμπί Google αντί για το προεπιλεγμένο κουμπί.',
        ],
        'github' => [
            'enable' => 'Ενεργοποίηση σύνδεσης μέσω GitHub',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Μεταβείτε στο https://github.com/settings/developers για να δημιουργήσετε νέα εφαρμογή και να ενημερώσετε το App ID, App Secret. Το Callback URL είναι :callback',
        ],
        'linkedin' => [
            'enable' => 'Ενεργοποίηση σύνδεσης μέσω Linkedin',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Μεταβείτε στο https://www.linkedin.com/developers/apps/new για να δημιουργήσετε νέα εφαρμογή και να ενημερώσετε το App ID, App Secret. Το Callback URL είναι :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Ενεργοποίηση σύνδεσης μέσω Linkedin με χρήση OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Μεταβείτε στο https://www.linkedin.com/developers/apps/new για να δημιουργήσετε νέα εφαρμογή και να ενημερώσετε το App ID, App Secret. Το Callback URL είναι :callback',
        ],
        'x' => [
            'enable' => 'Ενεργοποίηση σύνδεσης μέσω X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Μεταβείτε στο https://developer.x.com/en/portal/dashboard για να δημιουργήσετε νέα εφαρμογή και να ενημερώσετε το Client ID, Client Secret. Το Callback URL είναι :callback',
        ],
        'enable' => 'Ενεργοποίηση κοινωνικής σύνδεσης;',
        'style' => 'Στυλ',
        'minimal' => 'Ελάχιστο',
        'default' => 'Προεπιλογή',
        'basic' => 'Βασικό',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Κοινωνική σύνδεση',
    'description' => 'Προβολή και ενημέρωση των ρυθμίσεων κοινωνικής σύνδεσης',
    'sign_in_with' => 'Σύνδεση με :provider',
];
