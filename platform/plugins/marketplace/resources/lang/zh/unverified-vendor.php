<?php

return [
    'name' => '未验证卖家',
    'verify' => '验证卖家 ":name"',
    'forms' => [
        'email' => '邮箱',
        'store_name' => '店铺名称',
        'store_phone' => '店铺电话',
        'vendor_phone' => '电话',
        'verify_vendor' => '验证卖家',
        'registered_at' => '注册时间',
        'certificate' => '证书',
        'government_id' => '身份证',
    ],
    'view_certificate' => '查看证书',
    'view_government_id' => '查看身份证',
    'approve' => '批准',
    'reject' => '拒绝',
    'approve_vendor_confirmation' => '批准卖家确认',
    'approve_vendor_confirmation_description' => '您确定要批准 :vendor 在此网站上销售吗？',
    'reject_vendor_confirmation' => '拒绝卖家确认',
    'reject_vendor_confirmation_description' => '您确定要拒绝 :vendor 在此网站上销售吗？',
    'new_vendor_notifications' => [
        'new_vendor' => '新卖家',
        'view' => '查看',
        'description' => ':customer 已注册但未验证。',
    ],
];