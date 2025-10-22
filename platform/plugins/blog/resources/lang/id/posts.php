<?php

return [
    'create' => 'Buat posting baru',
    'form' => [
        'name' => 'Nama',
        'name_placeholder' => 'Nama posting (Maksimal :c karakter)',
        'description' => 'Deskripsi',
        'description_placeholder' => 'Deskripsi singkat untuk posting (Maksimal :c karakter)',
        'categories' => 'Kategori',
        'tags' => 'Tag',
        'tags_placeholder' => 'Tag',
        'content' => 'Konten',
        'is_featured' => 'Jadikan posting unggulan',
        'note' => 'Catatan konten',
        'format_type' => 'Format',

    ],
    'cannot_delete' => 'Posting tidak dapat dihapus',
    'post_deleted' => 'Posting dihapus',
    'posts' => 'Posting',
    'post' => 'Posting',
    'edit_this_post' => 'Edit posting ini',
    'no_new_post_now' => 'Tidak ada posting baru sekarang!',
    'menu_name' => 'Posting',
    'widget_posts_recent' => 'Posting Terbaru',
    'categories' => 'Kategori',
    'category' => 'Kategori',
    'author' => 'Penulis',
    'is_featured' => 'Unggulan?',
    'export' => [
        'description' => 'Ekspor posting ke file CSV/Excel.',
        'total' => 'Total Posting',
        'limit' => 'Batas',
        'limit_placeholder' => 'Kosongkan untuk mengekspor semua',
        'all_status' => 'Semua Status',
        'all_featured' => 'Semua',
        'all_categories' => 'Semua Kategori',
        'start_date' => 'Tanggal Mulai',
        'start_date_placeholder' => 'Tanggal mulai',
        'end_date' => 'Tanggal Akhir',
        'end_date_placeholder' => 'Tanggal akhir',

    ],
    'import' => [
        'description' => 'Impor posting dari file CSV/Excel.',
        'done_message' => ':created posting dibuat dan :updated posting diperbarui.',
        'rules' => [
            'nullable_string_max' => 'Kolom :attribute menerima nilai string hingga :max karakter atau dapat dikosongkan.',
            'sometimes_array' => 'Kolom :attribute menerima nilai array atau dapat dikosongkan.',
            'in' => ':attribute harus salah satu dari nilai berikut: :values.',
            'nullable_string' => 'Kolom :attribute menerima nilai string atau dapat dikosongkan.',
            'nullable_string_max_in' => 'Kolom :attribute dapat dikosongkan, atau harus berupa string dengan panjang maksimal :max karakter jika diisi dan harus salah satu dari nilai berikut: :values.',
            'faq_schema_config' => 'Konfigurasi schema FAQ harus berupa string yang valid jika diisi.',
            'faq_ids' => 'ID FAQ harus berupa array yang valid jika diisi.',

        ],

    ],
    'post_translations' => 'Terjemahan Posting',
    'export_post_translations' => 'Ekspor Terjemahan Posting',
    'import_description' => 'Impor terjemahan untuk :name dari file CSV/Excel.',
    'export_description' => 'Ekspor terjemahan untuk :name ke file CSV/Excel.',
];
