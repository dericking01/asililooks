<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => '설치',
    'next' => '다음 단계',
    'back' => '이전',
    'finish' => '설치',
    'installation' => '설치',
    'forms' => [
        'errorTitle' => '다음 오류가 발생했습니다:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => '환영합니다',
        'message' => '시작하기 전에 데이터베이스에 대한 몇 가지 정보가 필요합니다. 계속하기 전에 다음 항목을 알아야 합니다.',
        'language' => '언어',
        'next' => '시작하기',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => '서버 요구사항',
        'next' => '권한 확인',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => '환경 구성',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => '환경 설정',
            'form' => [
                'name_required' => '환경 이름이 필요합니다.',
                'app_name_label' => '사이트 제목',
                'app_name_placeholder' => '사이트 제목',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => '데이터베이스 연결',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => '데이터베이스 호스트',
                'db_host_placeholder' => '데이터베이스 호스트',
                'db_port_label' => '데이터베이스 포트',
                'db_port_placeholder' => '데이터베이스 포트',
                'db_name_label' => '데이터베이스 이름',
                'db_name_placeholder' => '데이터베이스 이름',
                'db_username_label' => '데이터베이스 사용자 이름',
                'db_username_placeholder' => '데이터베이스 사용자 이름',
                'db_password_label' => '데이터베이스 비밀번호',
                'db_password_placeholder' => '데이터베이스 비밀번호',
                'buttons' => [
                    'install' => '설치',
                ],
                'db_host_helper' => 'Laravel Sail을 사용하는 경우 DB_HOST를 DB_HOST=mysql로 변경하기만 하면 됩니다. 일부 호스팅에서는 DB_HOST가 127.0.0.1 대신 localhost일 수 있습니다',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => '.env 파일 설정이 저장되었습니다.',
        'errors' => '.env 파일을 저장할 수 없습니다. 수동으로 생성하십시오.',
    ],

    'theme' => [
        'title' => '테마 선택',
        'message' => '웹사이트의 모양을 개인화하려면 테마를 선택하십시오. 이 선택은 선택한 테마에 맞춤화된 샘플 데이터도 가져옵니다.',
    ],

    'theme_preset' => [
        'title' => '테마 프리셋 선택',
        'message' => '웹사이트의 모양을 개인화하려면 테마 프리셋을 선택하십시오. 이 선택은 선택한 테마에 맞춤화된 샘플 데이터도 가져옵니다.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => '계정 생성',
        'form' => [
            'first_name' => '이름',
            'last_name' => '성',
            'username' => '사용자 이름',
            'email' => '이메일',
            'password' => '비밀번호',
            'password_confirmation' => '비밀번호 확인',
            'create' => '생성',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => '라이선스 활성화',
        'skip' => '지금은 건너뛰기',
    ],

    'install' => '설치',

    'final' => [
        'pageTitle' => '설치 완료',
        'title' => '완료',
        'message' => '애플리케이션이 성공적으로 설치되었습니다.',
        'exit' => '관리자 대시보드로 이동',
    ],

    'install_success' => '성공적으로 설치되었습니다!',

    'install_step_title' => '설치 - 단계 :step: :title',
];
