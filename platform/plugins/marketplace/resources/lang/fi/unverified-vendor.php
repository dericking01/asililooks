<?php

return [
    'name' => 'Vahvistamattomat myyjät',
    'verify' => 'Vahvista myyjä ":name"',
    'forms' => [
        'email' => 'Sähköposti',
        'store_name' => 'Kaupan nimi',
        'store_phone' => 'Kaupan puhelin',
        'vendor_phone' => 'Puhelin',
        'verify_vendor' => 'Vahvista myyjä',
        'registered_at' => 'Rekisteröity',
        'certificate' => 'Sertifikaatti',
        'government_id' => 'Henkilötodistus',
    ],
    'view_certificate' => 'Näytä sertifikaatti',
    'view_government_id' => 'Näytä henkilötodistus',
    'approve' => 'Hyväksy',
    'reject' => 'Hylkää',
    'approve_vendor_confirmation' => 'Hyväksy myyjä -vahvistus',
    'approve_vendor_confirmation_description' => 'Haluatko varmasti hyväksyä myyjän :vendor myymään tällä sivustolla?',
    'reject_vendor_confirmation' => 'Hylkää myyjä -vahvistus',
    'reject_vendor_confirmation_description' => 'Haluatko varmasti hylätä myyjän :vendor myymästä tällä sivustolla?',
    'new_vendor_notifications' => [
        'new_vendor' => 'Uusi myyjä',
        'view' => 'Näytä',
        'description' => ':customer on rekisteröitynyt, mutta ei vahvistettu.',
    ],
];
