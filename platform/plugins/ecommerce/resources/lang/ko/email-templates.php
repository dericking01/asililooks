<?php

return [
    'name' => '이메일 템플릿',
    'description' => '이커머스용 이메일 템플릿 관리',
    'welcome' => [
        'title' => '환영 이메일',
        'description' => '사용자가 등록할 때 전송되는 환영 이메일',
        'subject' => '{{ site_title }}에 오신 것을 환영합니다!',
        'content' => '안녕하세요 {{ customer_name }}님,\n\n{{ site_title }}에 가입해 주셔서 감사합니다!\n\n저희 플랫폼에서 최고의 쇼핑 경험을 누리시기 바랍니다.',
    ],
    'order_confirmation' => [
        'title' => '주문 확인',
        'description' => '주문이 확정되었을 때 고객에게 전송',
        'subject' => '주문 확인 - {{ order_id }}',
        'content' => '안녕하세요 {{ customer_name }}님,\n\n주문 {{ order_id }}이 확인되었습니다.\n\n주문 정보:\n{{ order_detail }}\n\n감사합니다.',
    ],
    'payment_confirmation' => [
        'title' => '결제 확인',
        'description' => '결제가 확인되었을 때 고객에게 전송',
        'subject' => '결제 확인 - {{ order_id }}',
        'content' => '안녕하세요 {{ customer_name }}님,\n\n주문 {{ order_id }}의 결제가 확인되었습니다.\n\n곧 배송 준비에 들어가겠습니다.\n\n감사합니다.',
    ],
    'shipping_confirmation' => [
        'title' => '배송 확인',
        'description' => '제품이 배송 시작되었을 때 고객에게 전송',
        'subject' => '배송 시작 - {{ order_id }}',
        'content' => '안녕하세요 {{ customer_name }}님,\n\n주문 {{ order_id }}이 배송 시작되었습니다.\n\n배송 추적: {{ tracking_link }}\n\n감사합니다.',
    ],
    'order_delivered' => [
        'title' => '배송 완료',
        'description' => '제품이 배송 완료되었을 때 고객에게 전송',
        'subject' => '배송 완료 - {{ order_id }}',
        'content' => '안녕하세요 {{ customer_name }}님,\n\n주문 {{ order_id }}이 성공적으로 배송 완료되었습니다.\n\n구매해 주셔서 감사합니다!',
    ],
    'order_cancellation' => [
        'title' => '주문 취소',
        'description' => '주문이 취소되었을 때 고객에게 전송',
        'subject' => '주문 취소 - {{ order_id }}',
        'content' => '안녕하세요 {{ customer_name }}님,\n\n주문 {{ order_id }}이 취소되었습니다.\n\n궁금한 사항이 있으시면 언제든 연락해 주세요.',
    ],
    'password_reset' => [
        'title' => '비밀번호 재설정',
        'description' => '비밀번호 재설정 요청 시 전송',
        'subject' => '비밀번호 재설정 요청',
        'content' => '안녕하세요,\n\n비밀번호 재설정을 요청하셨습니다.\n\n다음 링크를 클릭하여 새 비밀번호를 설정하세요:\n{{ reset_link }}',
    ],
    // 기본 이메일 템플릿들
];