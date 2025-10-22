<?php

return [
    'name' => 'Venditori non verificati',
    'verify' => 'Verifica venditore ":name"',
    'forms' => [
        'email' => 'Email',
        'store_name' => 'Nome negozio',
        'store_phone' => 'Telefono negozio',
        'vendor_phone' => 'Telefono',
        'verify_vendor' => 'Verifica venditore',
        'registered_at' => 'Registrato Il',
        'certificate' => 'Certificato',
        'government_id' => 'Documento Identità',
    ],
    'view_certificate' => 'Visualizza certificato',
    'view_government_id' => 'Visualizza documento identità',
    'approve' => 'Approva',
    'reject' => 'Rifiuta',
    'approve_vendor_confirmation' => 'Conferma approvazione venditore',
    'approve_vendor_confirmation_description' => 'Sei sicuro di voler approvare :vendor per vendere su questo sito?',
    'reject_vendor_confirmation' => 'Conferma rifiuto venditore',
    'reject_vendor_confirmation_description' => 'Sei sicuro di voler rifiutare :vendor per vendere su questo sito?',
    'new_vendor_notifications' => [
        'new_vendor' => 'Nuovo venditore',
        'view' => 'Visualizza',
        'description' => ':customer si è registrato ma non è stato verificato.',
    ],
];