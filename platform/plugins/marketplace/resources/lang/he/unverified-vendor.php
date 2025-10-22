<?php

return [
    'name' => 'ספקים לא מאומתים',
    'verify' => 'אמת ספק ":name"',
    'forms' => [
        'email' => 'אימייל',
        'store_name' => 'שם חנות',
        'store_phone' => 'טלפון חנות',
        'vendor_phone' => 'טלפון',
        'verify_vendor' => 'אמת ספק',
        'registered_at' => 'נרשם ב',
        'certificate' => 'תעודה',
        'government_id' => 'תעודת זהות ממשלתית',
    ],
    'view_certificate' => 'הצג תעודה',
    'view_government_id' => 'הצג תעודת זהות ממשלתית',
    'approve' => 'אשר',
    'reject' => 'דחה',
    'approve_vendor_confirmation' => 'אישור אישור ספק',
    'approve_vendor_confirmation_description' => 'האם אתה בטוח שברצונך לאשר את :vendor למכירה באתר זה?',
    'reject_vendor_confirmation' => 'אישור דחיית ספק',
    'reject_vendor_confirmation_description' => 'האם אתה בטוח שברצונך לדחות את :vendor למכירה באתר זה?',
    'new_vendor_notifications' => [
        'new_vendor' => 'ספק חדש',
        'view' => 'הצג',
        'description' => ':customer נרשם אך לא אומת.',
    ],
];
