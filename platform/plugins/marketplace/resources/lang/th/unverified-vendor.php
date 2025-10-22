<?php

return [
    'name' => 'ผู้ขายที่ยังไม่ได้รับการยืนยัน',
    'verify' => 'ยืนยันผู้ขาย ":name"',
    'forms' => [
        'email' => 'อีเมล',
        'store_name' => 'ชื่อร้านค้า',
        'store_phone' => 'โทรศัพท์ร้านค้า',
        'vendor_phone' => 'โทรศัพท์',
        'verify_vendor' => 'ยืนยันผู้ขาย',
        'registered_at' => 'ลงทะเบียนเมื่อ',
        'certificate' => 'ใบรับรอง',
        'government_id' => 'บัตรประชาชน',
    ],
    'view_certificate' => 'ดูใบรับรอง',
    'view_government_id' => 'ดูบัตรประชาชน',
    'approve' => 'อนุมัติ',
    'reject' => 'ปฏิเสธ',
    'approve_vendor_confirmation' => 'ยืนยันการอนุมัติผู้ขาย',
    'approve_vendor_confirmation_description' => 'คุณแน่ใจหรือไม่ว่าต้องการอนุมัติ :vendor สำหรับการขายบนเว็บไซต์นี้?',
    'reject_vendor_confirmation' => 'ยืนยันการปฏิเสธผู้ขาย',
    'reject_vendor_confirmation_description' => 'คุณแน่ใจหรือไม่ว่าต้องการปฏิเสธ :vendor สำหรับการขายบนเว็บไซต์นี้?',
    'new_vendor_notifications' => [
        'new_vendor' => 'ผู้ขายใหม่',
        'view' => 'ดู',
        'description' => ':customer ได้ลงทะเบียนแต่ยังไม่ได้รับการยืนยัน',
    ],
];