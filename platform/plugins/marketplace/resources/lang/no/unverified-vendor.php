<?php

return [
    'name' => 'Uverifiserte leverandører',
    'verify' => 'Verifiser leverandør ":name"',
    'forms' => [
        'email' => 'E-post',
        'store_name' => 'Butikknavn',
        'store_phone' => 'Butikktelefon',
        'vendor_phone' => 'Telefon',
        'verify_vendor' => 'Verifiser leverandør',
        'registered_at' => 'Registrert den',
        'certificate' => 'Sertifikat',
        'government_id' => 'ID-dokument',
    ],
    'view_certificate' => 'Se sertifikat',
    'view_government_id' => 'Se ID-dokument',
    'approve' => 'Godkjenn',
    'reject' => 'Avvis',
    'approve_vendor_confirmation' => 'Bekreft godkjenning av leverandør',
    'approve_vendor_confirmation_description' => 'Er du sikker på at du vil godkjenne :vendor for salg på dette nettstedet?',
    'reject_vendor_confirmation' => 'Bekreft avvisning av leverandør',
    'reject_vendor_confirmation_description' => 'Er du sikker på at du vil avvise :vendor for salg på dette nettstedet?',
    'new_vendor_notifications' => [
        'new_vendor' => 'Ny leverandør',
        'view' => 'Vis',
        'description' => ':customer har registrert seg, men er ikke verifisert.',
    ],
];
