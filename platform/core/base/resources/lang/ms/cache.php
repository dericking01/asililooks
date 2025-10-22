<?php

return [
    'cache_management' => 'Pengurusan Cache',
    'cache_management_description' => 'Kosongkan cache untuk memastikan laman anda terkini.',
    'cache_commands' => 'Arahan kosongkan cache',
    'current_size' => 'Saiz Semasa',
    'clear_button' => 'Kosongkan',
    'refresh_button' => 'Muat Semula',
    'cache_size_warning' => 'Saiz cache CMS anda agak besar (>50MB). Mengosongkannya mungkin meningkatkan prestasi sistem.',
    'footer_note' => 'Kosongkan cache selepas membuat perubahan pada laman anda untuk memastikan ia muncul dengan betul.',
    'type' => 'Jenis',
    'description' => 'Penerangan',
    'action' => 'Tindakan',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Kosongkan semua cache CMS',
            'description' => 'Kosongkan caching CMS: caching pangkalan data, blok statik... Jalankan arahan ini apabila anda tidak melihat perubahan selepas mengemas kini data.',
            'success_msg' => 'Cache dikosongkan',
        ],
        'refresh_compiled_views' => [
            'title' => 'Muat semula paparan yang dikompil',
            'description' => 'Kosongkan paparan yang dikompil untuk memastikan paparan adalah terkini.',
            'success_msg' => 'Paparan cache dimuat semula',
        ],
        'clear_config_cache' => [
            'title' => 'Kosongkan cache konfigurasi',
            'description' => 'Anda mungkin perlu muat semula caching konfigurasi apabila anda mengubah sesuatu pada persekitaran pengeluaran.',
            'success_msg' => 'Cache konfigurasi dikosongkan',
        ],
        'clear_route_cache' => [
            'title' => 'Kosongkan cache laluan',
            'description' => 'Kosongkan caching laluan.',
            'success_msg' => 'Cache laluan telah dikosongkan',
        ],
        'clear_log' => [
            'title' => 'Kosongkan log',
            'description' => 'Kosongkan fail log sistem',
            'success_msg' => 'Log sistem telah dikosongkan',
        ],
    ],
    'optimization' => [
        'title' => 'Pengoptimuman Prestasi',
        'optimize' => [
            'title' => 'Optimumkan prestasi laman',
            'description' => 'Cache konfigurasi, laluan, dan paparan untuk kelajuan pemuatan yang lebih pantas.',
            'button' => 'Optimumkan',
            'success_msg' => 'Pengoptimuman selesai dengan jayanya',
        ],
        'clear' => [
            'title' => 'Kosongkan cache pengoptimuman',
            'description' => 'Buang cache pengoptimuman untuk membolehkan perubahan konfigurasi.',
            'button' => 'Kosongkan',
            'success_msg' => 'Cache pengoptimuman dikosongkan dengan jayanya',
        ],
        'messages' => [
            'config_cached' => 'Konfigurasi di-cache',
            'routes_cleared' => 'Laluan dikosongkan (baris arahan diperlukan untuk caching)',
            'views_compiled' => 'Paparan dikompil',
            'framework_cache_cleared' => 'Cache framework dikosongkan',
            'optimization_completed' => 'Pengoptimuman selesai: :details',
            'optimization_failed' => 'Pengoptimuman gagal: :error',
            'clear_failed' => 'Pengoptimuman kosongkan gagal: :error',
        ],
    ],
];
