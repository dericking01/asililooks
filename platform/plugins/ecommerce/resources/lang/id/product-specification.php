<?php

return [
    'product_specification' => 'Spesifikasi Produk',
    'specification_groups' => [
        'title' => 'Grup Spesifikasi',
        'menu_name' => 'Grup',

        'create' => [
            'title' => 'Buat Grup Spesifikasi',
        ],

        'edit' => [
            'title' => 'Edit Grup Spesifikasi ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Atribut Spesifikasi',
        'menu_name' => 'Atribut',

        'group' => 'Grup Terkait',
        'group_placeholder' => 'Pilih Grup',
        'name_placeholder' => 'Masukkan nama atribut',
        'type' => 'Tipe Field',
        'type_placeholder' => 'Pilih tipe field',
        'default_value' => 'Nilai Default',
        'default_value_placeholder' => 'Masukkan nilai default (opsional)',
        'options' => [
            'heading' => 'Opsi',

            'add' => [
                'label' => 'Tambah opsi baru',
            ],
        ],

        'create' => [
            'title' => 'Buat Atribut Spesifikasi',
        ],

        'edit' => [
            'title' => 'Edit Atribut Spesifikasi ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Tabel Spesifikasi',
        'menu_name' => 'Tabel',

        'create' => [
            'title' => 'Buat Tabel Spesifikasi',
        ],

        'edit' => [
            'title' => 'Edit Tabel Spesifikasi ":name"',
        ],

        'fields' => [
            'groups' => 'Pilih grup yang akan ditampilkan dalam tabel ini',
            'name' => 'Nama grup',
            'assigned_groups' => 'Grup yang Ditetapkan',
            'sorting' => 'Pengurutan',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Opsi',
            'title' => 'Tabel Spesifikasi',
            'select_none' => 'Tidak ada',
            'description' => 'Pilih tabel spesifikasi yang akan ditampilkan dalam produk ini',
            'group' => 'Grup',
            'attribute' => 'Atribut',
            'value' => 'Nilai atribut',
            'hide' => 'Sembunyikan',
            'sorting' => 'Pengurutan',
            'enter_value' => 'Masukkan nilai',
            'enter_translation' => 'Masukkan terjemahan',
            'not_set' => 'Belum diatur',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Teks',
            'textarea' => 'Textarea',
            'select' => 'Select',
            'checkbox' => 'Checkbox',
            'radio' => 'Radio',
        ],
    ],
];