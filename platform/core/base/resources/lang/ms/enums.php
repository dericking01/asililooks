<?php

return [
    'statuses' => [
        'draft' => 'Draf',
        'pending' => 'Menunggu',
        'published' => 'Diterbitkan',
    ],
    'system_updater_steps' => [
        'download' => 'Muat turun fail kemas kini',
        'update_files' => 'Kemas kini fail sistem',
        'update_database' => 'Kemas kini pangkalan data',
        'publish_core_assets' => 'Terbitkan aset teras',
        'publish_packages_assets' => 'Terbitkan aset pakej',
        'clean_up' => 'Bersihkan fail kemas kini sistem',
        'done' => 'Sistem berjaya dikemas kini',

        'messages' => [
            'download' => 'Memuat turun fail kemas kini...',
            'update_files' => 'Mengemas kini fail sistem...',
            'update_database' => 'Mengemas kini pangkalan data...',
            'publish_core_assets' => 'Menerbitkan aset teras...',
            'publish_packages_assets' => 'Menerbitkan aset pakej...',
            'clean_up' => 'Membersihkan fail kemas kini sistem...',
            'done' => 'Selesai! Pelayar anda akan dimuat semula dalam 30 saat.',
        ],

        'failed_messages' => [
            'download' => 'Tidak dapat memuat turun fail kemas kini',
            'update_files' => 'Tidak dapat mengemas kini fail sistem',
            'update_database' => 'Tidak dapat mengemas kini pangkalan data',
            'publish_core_assets' => 'Tidak dapat menerbitkan aset teras',
            'publish_packages_assets' => 'Tidak dapat menerbitkan aset pakej',
            'clean_up' => 'Tidak dapat membersihkan fail kemas kini sistem',
        ],

        'success_messages' => [
            'download' => 'Fail kemas kini berjaya dimuat turun.',
            'update_files' => 'Fail sistem berjaya dikemas kini.',
            'update_database' => 'Pangkalan data berjaya dikemas kini.',
            'publish_core_assets' => 'Aset teras berjaya diterbitkan.',
            'publish_packages_assets' => 'Aset pakej berjaya diterbitkan.',
            'clean_up' => 'Fail kemas kini sistem berjaya dibersihkan.',
        ],
    ],
];
