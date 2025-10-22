<?php

return [
    'cache_management' => 'Διαχείριση Cache',
    'cache_management_description' => 'Εκκαθαρίστε την cache για να ενημερώσετε τον ιστότοπό σας.',
    'cache_commands' => 'Εντολές εκκαθάρισης cache',
    'current_size' => 'Τρέχον Μέγεθος',
    'clear_button' => 'Εκκαθάριση',
    'refresh_button' => 'Ανανέωση',
    'cache_size_warning' => 'Το μέγεθος της cache του CMS σας είναι αρκετά μεγάλο (>50MB). Η εκκαθάρισή της μπορεί να βελτιώσει την απόδοση του συστήματος.',
    'footer_note' => 'Εκκαθαρίστε την cache μετά από αλλαγές στον ιστότοπό σας για να εμφανιστούν σωστά.',
    'type' => 'Τύπος',
    'description' => 'Περιγραφή',
    'action' => 'Ενέργεια',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Εκκαθάριση όλης της cache του CMS',
            'description' => 'Εκκαθάριση cache του CMS: cache βάσης δεδομένων, στατικά blocks... Εκτελέστε αυτή την εντολή όταν δεν βλέπετε τις αλλαγές μετά την ενημέρωση δεδομένων.',
            'success_msg' => 'Η cache εκκαθαρίστηκε',
        ],
        'refresh_compiled_views' => [
            'title' => 'Ανανέωση μεταγλωττισμένων views',
            'description' => 'Εκκαθαρίστε τα μεταγλωττισμένα views για να ενημερωθούν.',
            'success_msg' => 'Η cache των views ανανεώθηκε',
        ],
        'clear_config_cache' => [
            'title' => 'Εκκαθάριση cache ρυθμίσεων',
            'description' => 'Μπορεί να χρειαστεί να ανανεώσετε την cache ρυθμίσεων όταν αλλάζετε κάτι στο περιβάλλον παραγωγής.',
            'success_msg' => 'Η cache ρυθμίσεων εκκαθαρίστηκε',
        ],
        'clear_route_cache' => [
            'title' => 'Εκκαθάριση cache διαδρομών',
            'description' => 'Εκκαθάριση cache δρομολόγησης.',
            'success_msg' => 'Η cache διαδρομών εκκαθαρίστηκε',
        ],
        'clear_log' => [
            'title' => 'Εκκαθάριση αρχείου καταγραφής',
            'description' => 'Εκκαθάριση αρχείων καταγραφής συστήματος',
            'success_msg' => 'Το αρχείο καταγραφής συστήματος εκκαθαρίστηκε',
        ],
    ],
    'optimization' => [
        'title' => 'Βελτιστοποίηση Απόδοσης',
        'optimize' => [
            'title' => 'Βελτιστοποίηση απόδοσης ιστότοπου',
            'description' => 'Cache ρυθμίσεων, διαδρομών και views για ταχύτερη φόρτωση.',
            'button' => 'Βελτιστοποίηση',
            'success_msg' => 'Η βελτιστοποίηση ολοκληρώθηκε επιτυχώς',
        ],
        'clear' => [
            'title' => 'Εκκαθάριση cache βελτιστοποίησης',
            'description' => 'Αφαίρεση cache βελτιστοποίησης για να επιτρέψετε αλλαγές ρυθμίσεων.',
            'button' => 'Εκκαθάριση',
            'success_msg' => 'Η cache βελτιστοποίησης εκκαθαρίστηκε επιτυχώς',
        ],
        'messages' => [
            'config_cached' => 'Οι ρυθμίσεις αποθηκεύτηκαν στην cache',
            'routes_cleared' => 'Οι διαδρομές εκκαθαρίστηκαν (απαιτείται γραμμή εντολών για caching)',
            'views_compiled' => 'Τα views μεταγλωττίστηκαν',
            'framework_cache_cleared' => 'Η cache του framework εκκαθαρίστηκε',
            'optimization_completed' => 'Η βελτιστοποίηση ολοκληρώθηκε: :details',
            'optimization_failed' => 'Η βελτιστοποίηση απέτυχε: :error',
            'clear_failed' => 'Η εκκαθάριση βελτιστοποίησης απέτυχε: :error',
        ],
    ],
];
