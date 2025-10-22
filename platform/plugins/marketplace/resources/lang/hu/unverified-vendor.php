<?php

return [
    'name' => 'Nem ellenőrzött eladók',
    'verify' => '":name" eladó ellenőrzése',
    'forms' => [
        'email' => 'E-mail',
        'store_name' => 'Üzlet neve',
        'store_phone' => 'Üzlet telefonszáma',
        'vendor_phone' => 'Telefon',
        'verify_vendor' => 'Eladó ellenőrzése',
        'registered_at' => 'Regisztráció dátuma',
        'certificate' => 'Tanúsítvány',
        'government_id' => 'Személyi igazolvány',
    ],
    'view_certificate' => 'Tanúsítvány megtekintése',
    'view_government_id' => 'Személyi igazolvány megtekintése',
    'approve' => 'Jóváhagyás',
    'reject' => 'Elutasítás',
    'approve_vendor_confirmation' => 'Eladó jóváhagyásának megerősítése',
    'approve_vendor_confirmation_description' => 'Biztosan jóvá szeretné hagyni :vendor eladót ezen az oldalon való értékesítésre?',
    'reject_vendor_confirmation' => 'Eladó elutasításának megerősítése',
    'reject_vendor_confirmation_description' => 'Biztosan el szeretné utasítani :vendor eladót ezen az oldalon való értékesítésre?',
    'new_vendor_notifications' => [
        'new_vendor' => 'Új eladó',
        'view' => 'Megtekintés',
        'description' => ':customer regisztrált, de még nincs ellenőrizve.',
    ],
];
