<?php

return [
    'product_specification' => 'Spesifikasi Produk',
    'specification_groups' => [
        'title' => 'Kumpulan Spesifikasi',
        'menu_name' => 'Kumpulan',

        'create' => [
            'title' => 'Cipta Kumpulan Spesifikasi',
        ],

        'edit' => [
            'title' => 'Sunting Kumpulan Spesifikasi ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Atribut Spesifikasi',
        'menu_name' => 'Atribut',

        'group' => 'Kumpulan Berkaitan',
        'group_placeholder' => 'Pilih mana-mana Kumpulan',
        'name_placeholder' => 'Masukkan nama atribut',
        'type' => 'Jenis Medan',
        'type_placeholder' => 'Pilih jenis medan',
        'default_value' => 'Nilai Piawai',
        'default_value_placeholder' => 'Masukkan nilai piawai (pilihan)',
        'options' => [
            'heading' => 'Pilihan',

            'add' => [
                'label' => 'Tambah pilihan baharu',
            ],
        ],

        'create' => [
            'title' => 'Cipta Atribut Spesifikasi',
        ],

        'edit' => [
            'title' => 'Sunting Atribut Spesifikasi ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Jadual Spesifikasi',
        'menu_name' => 'Jadual',

        'create' => [
            'title' => 'Cipta Jadual Spesifikasi',
        ],

        'edit' => [
            'title' => 'Sunting Jadual Spesifikasi ":name"',
        ],

        'fields' => [
            'groups' => 'Pilih kumpulan untuk dipaparkan dalam jadual ini',
            'name' => 'Nama kumpulan',
            'assigned_groups' => 'Kumpulan Ditugaskan',
            'sorting' => 'Penyusunan',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Pilihan',
            'title' => 'Jadual Spesifikasi',
            'select_none' => 'Tiada',
            'description' => 'Pilih jadual spesifikasi untuk dipaparkan dalam produk ini',
            'group' => 'Kumpulan',
            'attribute' => 'Atribut',
            'value' => 'Nilai atribut',
            'hide' => 'Sembunyikan',
            'sorting' => 'Penyusunan',
            'enter_value' => 'Masukkan nilai',
            'enter_translation' => 'Masukkan terjemahan',
            'not_set' => 'Tidak ditetapkan',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Teks',
            'textarea' => 'Kawasan Teks',
            'select' => 'Pilih',
            'checkbox' => 'Kotak semak',
            'radio' => 'Radio',
        ],
    ],
];
