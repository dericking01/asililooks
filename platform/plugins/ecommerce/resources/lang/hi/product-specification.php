<?php

return [
    'product_specification' => 'उत्पाद विनिर्देश',
    'specification_groups' => [
        'title' => 'विनिर्देश समूह',
        'menu_name' => 'समूह',

        'create' => [
            'title' => 'विनिर्देश समूह बनाएं',
        ],

        'edit' => [
            'title' => 'विनिर्देश समूह ":name" संपादित करें',
        ],
    ],

    'specification_attributes' => [
        'title' => 'विनिर्देश एट्रिब्यूट्स',
        'menu_name' => 'एट्रिब्यूट्स',

        'group' => 'संबद्ध समूह',
        'group_placeholder' => 'कोई समूह चुनें',
        'name_placeholder' => 'एट्रिब्यूट नाम दर्ज करें',
        'type' => 'फ़ील्ड प्रकार',
        'type_placeholder' => 'फ़ील्ड प्रकार चुनें',
        'default_value' => 'डिफॉल्ट मान',
        'default_value_placeholder' => 'डिफॉल्ट मान दर्ज करें (वैकल्पिक)',
        'options' => [
            'heading' => 'विकल्प',

            'add' => [
                'label' => 'नया विकल्प जोड़ें',
            ],
        ],

        'create' => [
            'title' => 'विनिर्देश एट्रिब्यूट बनाएं',
        ],

        'edit' => [
            'title' => 'विनिर्देश एट्रिब्यूट ":name" संपादित करें',
        ],
    ],

    'specification_tables' => [
        'title' => 'विनिर्देश तालिकाएं',
        'menu_name' => 'तालिकाएं',

        'create' => [
            'title' => 'विनिर्देश तालिका बनाएं',
        ],

        'edit' => [
            'title' => 'विनिर्देश तालिका ":name" संपादित करें',
        ],

        'fields' => [
            'groups' => 'इस तालिका में प्रदर्शित करने के लिए समूह चुनें',
            'name' => 'समूह नाम',
            'assigned_groups' => 'असाइन किए गए समूह',
            'sorting' => 'क्रमबद्ध करना',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'विकल्प',
            'title' => 'विनिर्देश तालिका',
            'select_none' => 'कोई नहीं',
            'description' => 'इस उत्पाद में प्रदर्शित करने के लिए विनिर्देश तालिका चुनें',
            'group' => 'समूह',
            'attribute' => 'एट्रिब्यूट',
            'value' => 'एट्रिब्यूट मान',
            'hide' => 'छुपाएं',
            'sorting' => 'क्रमबद्ध करना',
            'enter_value' => 'मान दर्ज करें',
            'enter_translation' => 'अनुवाद दर्ज करें',
            'not_set' => 'सेट नहीं',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'टेक्स्ट',
            'textarea' => 'टेक्स्टएरिया',
            'select' => 'चुनें',
            'checkbox' => 'चेकबॉक्स',
            'radio' => 'रेडियो',
        ],
    ],
];