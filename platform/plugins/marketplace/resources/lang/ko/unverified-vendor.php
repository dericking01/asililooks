<?php

return [
    'name' => '미인증 판매자',
    'verify' => '판매자 ":name" 인증',
    'forms' => [
        'email' => '이메일',
        'store_name' => '스토어명',
        'store_phone' => '스토어 전화번호',
        'vendor_phone' => '전화번호',
        'verify_vendor' => '판매자 인증',
        'registered_at' => '등록일',
        'certificate' => '인증서',
        'government_id' => '신분증',
    ],
    'view_certificate' => '인증서 보기',
    'view_government_id' => '신분증 보기',
    'approve' => '승인',
    'reject' => '거절',
    'approve_vendor_confirmation' => '판매자 승인 확인',
    'approve_vendor_confirmation_description' => '정말로 :vendor를 이 사이트에서 판매할 수 있도록 승인하시겠습니까?',
    'reject_vendor_confirmation' => '판매자 거절 확인',
    'reject_vendor_confirmation_description' => '정말로 :vendor의 이 사이트에서의 판매를 거절하시겠습니까?',
    'new_vendor_notifications' => [
        'new_vendor' => '새로운 판매자',
        'view' => '보기',
        'description' => ':customer가 등록했지만 인증되지 않았습니다.',
    ],
];