<?php

return [
    'login' => [
        'username' => '이메일/사용자명',
        'email' => '이메일',
        'password' => '비밀번호',
        'title' => '사용자 로그인',
        'remember' => '로그인 상태 유지',
        'login' => '로그인',
        'placeholder' => [
            'username' => '사용자명 또는 이메일 주소를 입력하세요',
            'email' => '이메일 주소를 입력하세요',
            'password' => '비밀번호를 입력하세요',
        ],
        'success' => '로그인 성공!',
        'fail' => '잘못된 사용자명 또는 비밀번호입니다.',
        'not_active' => '계정이 아직 활성화되지 않았습니다!',
        'banned' => '이 계정은 차단되었습니다.',
        'logout_success' => '로그아웃 성공!',
        'dont_have_account' => '이 시스템에 계정이 없습니다. 자세한 정보는 관리자에게 문의하세요!',
    ],
    'forgot_password' => [
        'title' => '비밀번호 찾기',
        'message' => '<p>비밀번호를 잊으셨나요?</p><p>이메일 계정을 입력하세요. 시스템에서 비밀번호를 재설정할 수 있는 활성 링크가 포함된 이메일을 보내드립니다.</p>',
        'submit' => '제출',
    ],
    'reset' => [
        'new_password' => '새 비밀번호',
        'password_confirmation' => '새 비밀번호 확인',
        'email' => '이메일',
        'title' => '비밀번호 재설정',
        'update' => '업데이트',
        'wrong_token' => '이 링크는 유효하지 않거나 만료되었습니다. 재설정 양식을 다시 사용해 보세요.',
        'user_not_found' => '이 사용자명은 존재하지 않습니다.',
        'success' => '비밀번호 재설정 성공!',
        'fail' => '토큰이 유효하지 않습니다. 비밀번호 재설정 링크가 만료되었습니다!',
        'reset' => [
            'title' => '비밀번호 재설정 이메일',
        ],
        'send' => [
            'success' => '이메일 계정으로 이메일이 전송되었습니다. 확인하고 이 작업을 완료하세요.',
            'fail' => '현재 이메일을 보낼 수 없습니다. 나중에 다시 시도하세요.',
        ],
        'new-password' => '새 비밀번호',
        'placeholder' => [
            'new_password' => '새 비밀번호를 입력하세요',
            'new_password_confirmation' => '새 비밀번호를 확인하세요',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => '비밀번호 재설정 이메일',
        ],
    ],
    'password_confirmation' => '비밀번호 확인',
    'failed' => '실패',
    'throttle' => '제한',
    'not_member' => '아직 회원이 아니신가요?',
    'register_now' => '지금 가입하기',
    'lost_your_password' => '비밀번호를 잊으셨나요?',
    'login_title' => '관리자',
    'login_via_social' => '소셜 네트워크로 로그인',
    'back_to_login' => '로그인 페이지로 돌아가기',
    'sign_in_below' => '아래에서 로그인',
    'languages' => '언어',
    'reset_password' => '비밀번호 재설정',
    'deactivated_message' => '계정이 비활성화되었습니다. 관리자에게 문의하세요.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL 이메일 구성',
            'templates' => [
                'password_reminder' => [
                    'title' => '비밀번호 재설정',
                    'description' => '비밀번호 재설정 요청 시 사용자에게 이메일 전송',
                    'subject' => '비밀번호 재설정',
                    'reset_link' => '비밀번호 재설정 링크',
                    'email_title' => '비밀번호 재설정 안내',
                    'email_message' => '귀하의 계정에 대한 비밀번호 재설정 요청을 받았기 때문에 이 이메일을 받고 있습니다.',
                    'button_text' => '비밀번호 재설정',
                    'trouble_text' => '"비밀번호 재설정" 버튼을 클릭하는 데 문제가 있는 경우 아래 URL을 복사하여 웹 브라우저에 붙여넣으세요: <a href=":reset_link">:reset_link</a> 브라우저에 붙여넣으세요. 비밀번호 재설정을 요청하지 않은 경우 이 메시지를 무시하거나 질문이 있으면 문의하세요.',
                ],
            ],
        ],
    ],
];
