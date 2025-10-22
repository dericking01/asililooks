<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Εγκατάσταση',
    'next' => 'Επόμενο βήμα',
    'back' => 'Προηγούμενο',
    'finish' => 'Εγκατάσταση',
    'installation' => 'Εγκατάσταση',
    'forms' => [
        'errorTitle' => 'Προέκυψαν τα ακόλουθα σφάλματα:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Καλώς ήρθατε',
        'message' => 'Πριν ξεκινήσουμε, χρειαζόμαστε μερικές πληροφορίες σχετικά με τη βάση δεδομένων. Θα πρέπει να γνωρίζετε τα ακόλουθα στοιχεία πριν προχωρήσετε.',
        'language' => 'Γλώσσα',
        'next' => 'Ας ξεκινήσουμε',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Απαιτήσεις διακομιστή',
        'next' => 'Έλεγχος δικαιωμάτων',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Διαμόρφωση περιβάλλοντος',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Ρυθμίσεις περιβάλλοντος',
            'form' => [
                'name_required' => 'Απαιτείται όνομα περιβάλλοντος.',
                'app_name_label' => 'Τίτλος ιστότοπου',
                'app_name_placeholder' => 'Τίτλος ιστότοπου',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Σύνδεση βάσης δεδομένων',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Διακομιστής βάσης δεδομένων',
                'db_host_placeholder' => 'Διακομιστής βάσης δεδομένων',
                'db_port_label' => 'Θύρα βάσης δεδομένων',
                'db_port_placeholder' => 'Θύρα βάσης δεδομένων',
                'db_name_label' => 'Όνομα βάσης δεδομένων',
                'db_name_placeholder' => 'Όνομα βάσης δεδομένων',
                'db_username_label' => 'Όνομα χρήστη βάσης δεδομένων',
                'db_username_placeholder' => 'Όνομα χρήστη βάσης δεδομένων',
                'db_password_label' => 'Κωδικός πρόσβασης βάσης δεδομένων',
                'db_password_placeholder' => 'Κωδικός πρόσβασης βάσης δεδομένων',
                'buttons' => [
                    'install' => 'Εγκατάσταση',
                ],
                'db_host_helper' => 'Εάν χρησιμοποιείτε το Laravel Sail, απλά αλλάξτε το DB_HOST σε DB_HOST=mysql. Σε ορισμένες υπηρεσίες φιλοξενίας, το DB_HOST μπορεί να είναι localhost αντί για 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Οι ρυθμίσεις του αρχείου .env αποθηκεύτηκαν.',
        'errors' => 'Δεν είναι δυνατή η αποθήκευση του αρχείου .env, Δημιουργήστε το χειροκίνητα.',
    ],

    'theme' => [
        'title' => 'Επιλέξτε θέμα',
        'message' => 'Επιλέξτε ένα θέμα για να προσαρμόσετε την εμφάνιση του ιστότοπού σας. Αυτή η επιλογή θα εισαγάγει επίσης δείγματα δεδομένων προσαρμοσμένα στο επιλεγμένο θέμα.',
    ],

    'theme_preset' => [
        'title' => 'Επιλέξτε προεπιλογή θέματος',
        'message' => 'Επιλέξτε μια προεπιλογή θέματος για να προσαρμόσετε την εμφάνιση του ιστότοπού σας. Αυτή η επιλογή θα εισαγάγει επίσης δείγματα δεδομένων προσαρμοσμένα στο επιλεγμένο θέμα.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Δημιουργία λογαριασμού',
        'form' => [
            'first_name' => 'Όνομα',
            'last_name' => 'Επώνυμο',
            'username' => 'Όνομα χρήστη',
            'email' => 'Email',
            'password' => 'Κωδικός πρόσβασης',
            'password_confirmation' => 'Επιβεβαίωση κωδικού πρόσβασης',
            'create' => 'Δημιουργία',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Ενεργοποίηση άδειας',
        'skip' => 'Παράλειψη προς το παρόν',
    ],

    'install' => 'Εγκατάσταση',

    'final' => [
        'pageTitle' => 'Η εγκατάσταση ολοκληρώθηκε',
        'title' => 'Ολοκληρώθηκε',
        'message' => 'Η εφαρμογή εγκαταστάθηκε με επιτυχία.',
        'exit' => 'Μετάβαση στον πίνακα διαχείρισης',
    ],

    'install_success' => 'Εγκαταστάθηκε με επιτυχία!',

    'install_step_title' => 'Εγκατάσταση - Βήμα :step: :title',
];
