<?php

return [
    'name' => '뉴스레터',
    'newsletter_form' => '뉴스레터 양식',
    'description' => '뉴스레터 구독자 보기 및 삭제',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => '뉴스레터',
                'description' => '뉴스레터 이메일 템플릿 구성',
                'to_admin' => [
                    'title' => '관리자에게 전송된 이메일',
                    'description' => '관리자에게 이메일을 전송하기 위한 템플릿',
                    'subject' => '새 사용자가 귀하의 뉴스레터를 구독했습니다',
                    'newsletter_email' => '뉴스레터를 구독한 사용자의 이메일',
                ],
                'to_user' => [
                    'title' => '사용자에게 전송된 이메일',
                    'description' => '구독자에게 이메일을 전송하기 위한 템플릿',
                    'subject' => '{{ site_title }}: 구독이 확인되었습니다!',
                    'newsletter_name' => '뉴스레터를 구독한 사용자의 전체 이름',
                    'newsletter_email' => '뉴스레터를 구독한 사용자의 이메일',
                    'newsletter_unsubscribe_link' => '뉴스레터 구독 취소 링크',
                    'newsletter_unsubscribe_url' => '뉴스레터 구독 취소 URL',
                ],
            ],
        ],
        'title' => '뉴스레터',
        'panel_description' => '뉴스레터 설정 보기 및 업데이트',
        'description' => '뉴스레터 설정 (웹사이트에서 누군가 뉴스레터를 등록하면 SendGrid, Mailchimp... 로 뉴스레터 이메일을 자동으로 전송합니다).',
        'mailchimp_api_key' => 'Mailchimp API 키',
        'mailchimp_list_id' => 'Mailchimp 목록 ID',
        'mailchimp_list' => 'Mailchimp 목록',
        'sendgrid_api_key' => 'Sendgrid API 키',
        'sendgrid_list_id' => 'Sendgrid 목록 ID',
        'sendgrid_list' => 'Sendgrid 목록',
        'enable_newsletter_contacts_list_api' => '뉴스레터 연락처 목록 API를 활성화하시겠습니까?',
    ],
    'statuses' => [
        'subscribed' => '구독됨',
        'unsubscribed' => '구독 취소됨',
    ],
    'email_templates' => [
        // Admin email template
        'admin_new_subscriber_title' => '새로운 구독자',
        'admin_new_subscriber_message' => '새 사용자가 귀하의 뉴스레터를 구독했습니다:',

        // Subscriber email template
        'subscriber_success_title' => '구독 성공',
        'subscriber_thank_you_message' => '뉴스레터를 구독해 주셔서 감사합니다!',
        'subscriber_unsubscribe_instruction' => '뉴스레터 구독을 취소하려면 :newsletter_unsubscribe_link 를 클릭하세요',
    ],
];
