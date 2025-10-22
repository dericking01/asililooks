<?php

return [
    'statuses' => [
        'draft' => '임시저장',
        'pending' => '대기 중',
        'published' => '게시됨',
    ],
    'system_updater_steps' => [
        'download' => '업데이트 파일 다운로드',
        'update_files' => '시스템 파일 업데이트',
        'update_database' => '데이터베이스 업데이트',
        'publish_core_assets' => '코어 에셋 게시',
        'publish_packages_assets' => '패키지 에셋 게시',
        'clean_up' => '시스템 업데이트 파일 정리',
        'done' => '시스템이 성공적으로 업데이트되었습니다',

        'messages' => [
            'download' => '업데이트 파일 다운로드 중...',
            'update_files' => '시스템 파일 업데이트 중...',
            'update_database' => '데이터베이스 업데이트 중...',
            'publish_core_assets' => '코어 에셋 게시 중...',
            'publish_packages_assets' => '패키지 에셋 게시 중...',
            'clean_up' => '시스템 업데이트 파일 정리 중...',
            'done' => '완료! 30초 후 브라우저가 새로고침됩니다.',
        ],

        'failed_messages' => [
            'download' => '업데이트 파일을 다운로드할 수 없습니다',
            'update_files' => '시스템 파일을 업데이트할 수 없습니다',
            'update_database' => '데이터베이스를 업데이트할 수 없습니다',
            'publish_core_assets' => '코어 에셋을 게시할 수 없습니다',
            'publish_packages_assets' => '패키지 에셋을 게시할 수 없습니다',
            'clean_up' => '시스템 업데이트 파일을 정리할 수 없습니다',
        ],

        'success_messages' => [
            'download' => '업데이트 파일이 성공적으로 다운로드되었습니다.',
            'update_files' => '시스템 파일이 성공적으로 업데이트되었습니다.',
            'update_database' => '데이터베이스가 성공적으로 업데이트되었습니다.',
            'publish_core_assets' => '코어 에셋이 성공적으로 게시되었습니다.',
            'publish_packages_assets' => '패키지 에셋이 성공적으로 게시되었습니다.',
            'clean_up' => '시스템 업데이트 파일이 성공적으로 정리되었습니다.',
        ],
    ],
];
