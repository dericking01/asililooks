<?php

return [
    'create' => 'Cipta catatan baharu',
    'form' => [
        'name' => 'Nama',
        'name_placeholder' => 'Nama catatan (Maksimum :c aksara)',
        'description' => 'Penerangan',
        'description_placeholder' => 'Penerangan ringkas untuk catatan (Maksimum :c aksara)',
        'categories' => 'Kategori',
        'tags' => 'Tag',
        'tags_placeholder' => 'Tag',
        'content' => 'Kandungan',
        'is_featured' => 'Tampilkan catatan ini',
        'note' => 'Kandungan nota',
        'format_type' => 'Format',

    ],
    'cannot_delete' => 'Catatan tidak dapat dihapus',
    'post_deleted' => 'Catatan dihapus',
    'posts' => 'Catatan',
    'post' => 'Catatan',
    'edit_this_post' => 'Sunting catatan ini',
    'no_new_post_now' => 'Tiada catatan baharu sekarang!',
    'menu_name' => 'Catatan',
    'widget_posts_recent' => 'Catatan Terkini',
    'categories' => 'Kategori',
    'category' => 'Kategori',
    'author' => 'Penulis',
    'is_featured' => 'Ditampilkan?',
    'export' => [
        'description' => 'Eksport catatan ke fail CSV/Excel.',
        'total' => 'Jumlah Catatan',
        'limit' => 'Had',
        'limit_placeholder' => 'Biarkan kosong untuk eksport semua',
        'all_status' => 'Semua Status',
        'all_featured' => 'Semua',
        'all_categories' => 'Semua Kategori',
        'start_date' => 'Tarikh Mula',
        'start_date_placeholder' => 'Tarikh mula',
        'end_date' => 'Tarikh Akhir',
        'end_date_placeholder' => 'Tarikh akhir',

    ],
    'import' => [
        'description' => 'Import catatan dari fail CSV/Excel.',
        'done_message' => ':created catatan dicipta dan :updated catatan dikemas kini.',
        'rules' => [
            'nullable_string_max' => 'Medan :attribute menerima nilai rentetan sehingga :max aksara atau boleh dibiarkan kosong.',
            'sometimes_array' => 'Medan :attribute menerima nilai tatasusunan atau boleh dibiarkan kosong.',
            'in' => ':attribute mestilah salah satu daripada nilai berikut: :values.',
            'nullable_string' => 'Medan :attribute menerima nilai rentetan atau boleh dibiarkan kosong.',
            'nullable_string_max_in' => 'Medan :attribute boleh dibiarkan kosong, atau mestilah rentetan dengan panjang maksimum :max aksara jika diisi dan mestilah salah satu daripada nilai berikut: :values.',
            'faq_schema_config' => 'Konfigurasi skema FAQ mestilah rentetan yang sah jika diisi.',
            'faq_ids' => 'ID FAQ mestilah tatasusunan yang sah jika diisi.',

        ],

    ],
    'post_translations' => 'Terjemahan Catatan',
    'export_post_translations' => 'Eksport Terjemahan Catatan',
    'import_description' => 'Import terjemahan untuk :name dari fail CSV/Excel.',
    'export_description' => 'Eksport terjemahan untuk :name ke fail CSV/Excel.',
];
