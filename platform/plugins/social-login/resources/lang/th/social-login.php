<?php

return [
    'settings' => [
        'title' => 'การตั้งค่าการเข้าสู่ระบบผ่านโซเชียล',
        'description' => 'กำหนดค่าตัวเลือกการเข้าสู่ระบบผ่านโซเชียล',
        'facebook' => [
            'enable' => 'เปิดใช้งานการเข้าสู่ระบบผ่าน Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'โปรดไปที่ https://developers.facebook.com เพื่อสร้างแอปใหม่และอัปเดต App ID, App Secret URL เรียกกลับคือ :callback',
            'data_deletion_request_callback_url' => 'ตั้งค่า URL นี้ :url เป็น URL คำขอลบข้อมูลในการตั้งค่าแอป Facebook ของคุณเพื่ออนุญาตให้ผู้ใช้ขอลบข้อมูลของพวกเขา',
        ],
        'google' => [
            'enable' => 'เปิดใช้งานการเข้าสู่ระบบผ่าน Google',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'โปรดไปที่ https://console.developers.google.com/apis/dashboard เพื่อสร้างแอปใหม่และอัปเดต App ID, App Secret URL เรียกกลับคือ :callback',
            'use_google_button' => 'ใช้ปุ่ม Google',
            'use_google_button_helper' => 'หากคุณเปิดใช้งานตัวเลือกนี้ จะใช้ปุ่ม Google แทนปุ่มเริ่มต้น',
        ],
        'github' => [
            'enable' => 'เปิดใช้งานการเข้าสู่ระบบผ่าน GitHub',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'โปรดไปที่ https://github.com/settings/developers เพื่อสร้างแอปใหม่และอัปเดต App ID, App Secret URL เรียกกลับคือ :callback',
        ],
        'linkedin' => [
            'enable' => 'เปิดใช้งานการเข้าสู่ระบบผ่าน Linkedin',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'โปรดไปที่ https://www.linkedin.com/developers/apps/new เพื่อสร้างแอปใหม่และอัปเดต App ID, App Secret URL เรียกกลับคือ :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'เปิดใช้งานการเข้าสู่ระบบผ่าน Linkedin โดยใช้ OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'โปรดไปที่ https://www.linkedin.com/developers/apps/new เพื่อสร้างแอปใหม่และอัปเดต App ID, App Secret URL เรียกกลับคือ :callback',
        ],
        'x' => [
            'enable' => 'เปิดใช้งานการเข้าสู่ระบบผ่าน X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'โปรดไปที่ https://developer.x.com/en/portal/dashboard เพื่อสร้างแอปใหม่และอัปเดต Client ID, Client Secret URL เรียกกลับคือ :callback',
        ],
        'enable' => 'เปิดใช้งานการเข้าสู่ระบบผ่านโซเชียล?',
        'style' => 'รูปแบบ',
        'minimal' => 'น้อยที่สุด',
        'default' => 'ค่าเริ่มต้น',
        'basic' => 'พื้นฐาน',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'การเข้าสู่ระบบผ่านโซเชียล',
    'description' => 'ดูและอัปเดตการตั้งค่าการเข้าสู่ระบบผ่านโซเชียลของคุณ',
    'sign_in_with' => 'เข้าสู่ระบบด้วย :provider',
];
