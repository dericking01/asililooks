<?php

return [
    'product_specification' => 'Ürün Spesifikasyonu',
    'specification_groups' => [
        'title' => 'Spesifikasyon Grupları',
        'menu_name' => 'Gruplar',

        'create' => [
            'title' => 'Spesifikasyon Grubu Oluştur',
        ],

        'edit' => [
            'title' => 'Spesifikasyon Grubunu Düzenle ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Spesifikasyon Öznitelikleri',
        'menu_name' => 'Öznitelikler',

        'group' => 'İlişkili Grup',
        'group_placeholder' => 'Herhangi bir Grup seçin',
        'name_placeholder' => 'Öznitelik adını girin',
        'type' => 'Alan Türü',
        'type_placeholder' => 'Alan türünü seçin',
        'default_value' => 'Varsayılan Değer',
        'default_value_placeholder' => 'Varsayılan değeri girin (isteğe bağlı)',
        'options' => [
            'heading' => 'Seçenekler',

            'add' => [
                'label' => 'Yeni seçenek ekle',
            ],
        ],

        'create' => [
            'title' => 'Spesifikasyon Özniteliği Oluştur',
        ],

        'edit' => [
            'title' => 'Spesifikasyon Özniteliğini Düzenle ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Spesifikasyon Tabloları',
        'menu_name' => 'Tablolar',

        'create' => [
            'title' => 'Spesifikasyon Tablosu Oluştur',
        ],

        'edit' => [
            'title' => 'Spesifikasyon Tablosunu Düzenle ":name"',
        ],

        'fields' => [
            'groups' => 'Bu tabloda görüntülenecek grupları seçin',
            'name' => 'Grup adı',
            'assigned_groups' => 'Atanmış Gruplar',
            'sorting' => 'Sıralama',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Seçenekler',
            'title' => 'Spesifikasyon Tablosu',
            'select_none' => 'Yok',
            'description' => 'Bu üründe görüntülenecek spesifikasyon tablosunu seçin',
            'group' => 'Grup',
            'attribute' => 'Öznitelik',
            'value' => 'Öznitelik değeri',
            'hide' => 'Gizle',
            'sorting' => 'Sıralama',
            'enter_value' => 'Değer girin',
            'enter_translation' => 'Çeviri girin',
            'not_set' => 'Ayarlanmadı',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Metin',
            'textarea' => 'Metin alanı',
            'select' => 'Seçim',
            'checkbox' => 'Onay kutusu',
            'radio' => 'Radyo',
        ],
    ],
];