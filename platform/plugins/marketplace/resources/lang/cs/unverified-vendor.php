<?php

return [
    'name' => 'Neověření prodejci',
    'verify' => 'Ověřit prodejce ":name"',
    'forms' => [
        'email' => 'E-mail',
        'store_name' => 'Název obchodu',
        'store_phone' => 'Telefon obchodu',
        'vendor_phone' => 'Telefon',
        'verify_vendor' => 'Ověřit prodejce',
        'registered_at' => 'Registrováno dne',
        'certificate' => 'Certifikát',
        'government_id' => 'Průkaz totožnosti',
    ],
    'view_certificate' => 'Zobrazit certifikát',
    'view_government_id' => 'Zobrazit průkaz totožnosti',
    'approve' => 'Schválit',
    'reject' => 'Zamítnout',
    'approve_vendor_confirmation' => 'Potvrzení schválení prodejce',
    'approve_vendor_confirmation_description' => 'Opravdu chcete schválit :vendor pro prodej na tomto webu?',
    'reject_vendor_confirmation' => 'Potvrzení zamítnutí prodejce',
    'reject_vendor_confirmation_description' => 'Opravdu chcete zamítnout :vendor pro prodej na tomto webu?',
    'new_vendor_notifications' => [
        'new_vendor' => 'Nový prodejce',
        'view' => 'Zobrazit',
        'description' => ':customer se registroval, ale není ověřen.',
    ],
];