<?php

return [
    'cache_management' => 'Manajemen Cache',
    'cache_management_description' => 'Hapus cache untuk membuat situs Anda tetap terkini.',
    'cache_commands' => 'Perintah hapus cache',
    'current_size' => 'Ukuran Saat Ini',
    'clear_button' => 'Hapus',
    'refresh_button' => 'Muat Ulang',
    'cache_size_warning' => 'Ukuran cache CMS Anda cukup besar (>50MB). Menghapusnya dapat meningkatkan kinerja sistem.',
    'footer_note' => 'Hapus cache setelah melakukan perubahan pada situs Anda untuk memastikan perubahan tampil dengan benar.',
    'type' => 'Tipe',
    'description' => 'Deskripsi',
    'action' => 'Aksi',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Hapus semua cache CMS',
            'description' => 'Hapus cache CMS: cache database, blok statis... Jalankan perintah ini ketika Anda tidak melihat perubahan setelah memperbarui data.',
            'success_msg' => 'Cache dibersihkan',
        ],
        'refresh_compiled_views' => [
            'title' => 'Muat ulang tampilan terkompilasi',
            'description' => 'Hapus tampilan terkompilasi untuk membuat tampilan tetap terkini.',
            'success_msg' => 'Cache tampilan dimuat ulang',
        ],
        'clear_config_cache' => [
            'title' => 'Hapus cache konfigurasi',
            'description' => 'Anda mungkin perlu memuat ulang cache konfigurasi ketika Anda mengubah sesuatu di lingkungan produksi.',
            'success_msg' => 'Cache konfigurasi dibersihkan',
        ],
        'clear_route_cache' => [
            'title' => 'Hapus cache rute',
            'description' => 'Hapus cache routing.',
            'success_msg' => 'Cache rute telah dibersihkan',
        ],
        'clear_log' => [
            'title' => 'Hapus log',
            'description' => 'Hapus file log sistem',
            'success_msg' => 'Log sistem telah dibersihkan',
        ],
    ],
    'optimization' => [
        'title' => 'Optimasi Kinerja',
        'optimize' => [
            'title' => 'Optimalkan kinerja situs',
            'description' => 'Cache konfigurasi, rute, dan tampilan untuk kecepatan pemuatan lebih cepat.',
            'button' => 'Optimalkan',
            'success_msg' => 'Optimasi berhasil diselesaikan',
        ],
        'clear' => [
            'title' => 'Hapus cache optimasi',
            'description' => 'Hapus cache optimasi untuk mengizinkan perubahan konfigurasi.',
            'button' => 'Hapus',
            'success_msg' => 'Cache optimasi berhasil dihapus',
        ],
        'messages' => [
            'config_cached' => 'Konfigurasi di-cache',
            'routes_cleared' => 'Rute dibersihkan (diperlukan command line untuk caching)',
            'views_compiled' => 'Tampilan dikompilasi',
            'framework_cache_cleared' => 'Cache framework dibersihkan',
            'optimization_completed' => 'Optimasi selesai: :details',
            'optimization_failed' => 'Optimasi gagal: :error',
            'clear_failed' => 'Hapus optimasi gagal: :error',
        ],
    ],
];
