<?php

return [
    'statuses' => [
        'draft' => 'Draf',
        'pending' => 'Tertunda',
        'published' => 'Diterbitkan',
    ],
    'system_updater_steps' => [
        'download' => 'Unduh file pembaruan',
        'update_files' => 'Perbarui file sistem',
        'update_database' => 'Perbarui database',
        'publish_core_assets' => 'Publikasikan aset inti',
        'publish_packages_assets' => 'Publikasikan aset paket',
        'clean_up' => 'Bersihkan file pembaruan sistem',
        'done' => 'Sistem berhasil diperbarui',

        'messages' => [
            'download' => 'Mengunduh file pembaruan...',
            'update_files' => 'Memperbarui file sistem...',
            'update_database' => 'Memperbarui database...',
            'publish_core_assets' => 'Mempublikasikan aset inti...',
            'publish_packages_assets' => 'Mempublikasikan aset paket...',
            'clean_up' => 'Membersihkan file pembaruan sistem...',
            'done' => 'Selesai! Browser Anda akan dimuat ulang dalam 30 detik.',
        ],

        'failed_messages' => [
            'download' => 'Tidak dapat mengunduh file pembaruan',
            'update_files' => 'Tidak dapat memperbarui file sistem',
            'update_database' => 'Tidak dapat memperbarui database',
            'publish_core_assets' => 'Tidak dapat mempublikasikan aset inti',
            'publish_packages_assets' => 'Tidak dapat mempublikasikan aset paket',
            'clean_up' => 'Tidak dapat membersihkan file pembaruan sistem',
        ],

        'success_messages' => [
            'download' => 'File pembaruan berhasil diunduh.',
            'update_files' => 'File sistem berhasil diperbarui.',
            'update_database' => 'Database berhasil diperbarui.',
            'publish_core_assets' => 'Aset inti berhasil dipublikasikan.',
            'publish_packages_assets' => 'Aset paket berhasil dipublikasikan.',
            'clean_up' => 'File pembaruan sistem berhasil dibersihkan.',
        ],
    ],
];
