<?php

return [
    'cache_management' => '캐시 관리',
    'cache_management_description' => '캐시를 지워 사이트를 최신 상태로 유지하세요.',
    'cache_commands' => '캐시 지우기 명령',
    'current_size' => '현재 크기',
    'clear_button' => '지우기',
    'refresh_button' => '새로고침',
    'cache_size_warning' => 'CMS 캐시 크기가 상당히 큽니다(>50MB). 캐시를 지우면 시스템 성능이 향상될 수 있습니다.',
    'footer_note' => '사이트 변경 사항이 올바르게 표시되도록 변경 후 캐시를 지우세요.',
    'type' => '유형',
    'description' => '설명',
    'action' => '작업',
    'commands' => [
        'clear_cms_cache' => [
            'title' => '모든 CMS 캐시 지우기',
            'description' => 'CMS 캐싱 지우기: 데이터베이스 캐싱, 정적 블록... 데이터 업데이트 후 변경 사항이 보이지 않을 때 이 명령을 실행하세요.',
            'success_msg' => '캐시가 지워졌습니다',
        ],
        'refresh_compiled_views' => [
            'title' => '컴파일된 뷰 새로고침',
            'description' => '컴파일된 뷰를 지워 뷰를 최신 상태로 만듭니다.',
            'success_msg' => '뷰 캐시가 새로고침되었습니다',
        ],
        'clear_config_cache' => [
            'title' => '설정 캐시 지우기',
            'description' => '프로덕션 환경에서 무언가 변경했을 때 설정 캐싱을 새로고침해야 할 수 있습니다.',
            'success_msg' => '설정 캐시가 지워졌습니다',
        ],
        'clear_route_cache' => [
            'title' => '라우트 캐시 지우기',
            'description' => '라우팅 캐시를 지웁니다.',
            'success_msg' => '라우트 캐시가 지워졌습니다',
        ],
        'clear_log' => [
            'title' => '로그 지우기',
            'description' => '시스템 로그 파일을 지웁니다',
            'success_msg' => '시스템 로그가 지워졌습니다',
        ],
    ],
    'optimization' => [
        'title' => '성능 최적화',
        'optimize' => [
            'title' => '사이트 성능 최적화',
            'description' => '더 빠른 로딩 속도를 위해 설정, 라우트 및 뷰를 캐시합니다.',
            'button' => '최적화',
            'success_msg' => '최적화가 성공적으로 완료되었습니다',
        ],
        'clear' => [
            'title' => '최적화 캐시 지우기',
            'description' => '설정 변경을 허용하기 위해 최적화 캐시를 제거합니다.',
            'button' => '지우기',
            'success_msg' => '최적화 캐시가 성공적으로 지워졌습니다',
        ],
        'messages' => [
            'config_cached' => '설정이 캐시되었습니다',
            'routes_cleared' => '라우트가 지워졌습니다 (캐싱을 위해 명령줄 필요)',
            'views_compiled' => '뷰가 컴파일되었습니다',
            'framework_cache_cleared' => '프레임워크 캐시가 지워졌습니다',
            'optimization_completed' => '최적화 완료: :details',
            'optimization_failed' => '최적화 실패: :error',
            'clear_failed' => '최적화 지우기 실패: :error',
        ],
    ],
];
