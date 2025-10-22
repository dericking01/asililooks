<?php

return [
    'product_specification' => 'পণ্য স্পেসিফিকেশন',
    'specification_groups' => [
        'title' => 'স্পেসিফিকেশন গ্রুপ',
        'menu_name' => 'গ্রুপ',

        'create' => [
            'title' => 'স্পেসিফিকেশন গ্রুপ তৈরি করুন',
        ],

        'edit' => [
            'title' => 'স্পেসিফিকেশন গ্রুপ ":name" সম্পাদনা করুন',
        ],
    ],

    'specification_attributes' => [
        'title' => 'স্পেসিফিকেশন বৈশিষ্ট্য',
        'menu_name' => 'বৈশিষ্ট্য',

        'group' => 'সংশ্লিষ্ট গ্রুপ',
        'group_placeholder' => 'যেকোনো গ্রুপ নির্বাচন করুন',
        'name_placeholder' => 'বৈশিষ্ট্যের নাম লিখুন',
        'type' => 'ফিল্ড টাইপ',
        'type_placeholder' => 'ফিল্ড টাইপ নির্বাচন করুন',
        'default_value' => 'ডিফল্ট মান',
        'default_value_placeholder' => 'ডিফল্ট মান লিখুন (ঐচ্ছিক)',
        'options' => [
            'heading' => 'অপশনসমূহ',

            'add' => [
                'label' => 'নতুন অপশন যোগ করুন',
            ],
        ],

        'create' => [
            'title' => 'স্পেসিফিকেশন বৈশিষ্ট্য তৈরি করুন',
        ],

        'edit' => [
            'title' => 'স্পেসিফিকেশন বৈশিষ্ট্য ":name" সম্পাদনা করুন',
        ],
    ],

    'specification_tables' => [
        'title' => 'স্পেসিফিকেশন টেবিল',
        'menu_name' => 'টেবিল',

        'create' => [
            'title' => 'স্পেসিফিকেশন টেবিল তৈরি করুন',
        ],

        'edit' => [
            'title' => 'স্পেসিফিকেশন টেবিল ":name" সম্পাদনা করুন',
        ],

        'fields' => [
            'groups' => 'এই টেবিলে প্রদর্শনের জন্য গ্রুপ নির্বাচন করুন',
            'name' => 'গ্রুপের নাম',
            'assigned_groups' => 'নির্ধারিত গ্রুপ',
            'sorting' => 'সাজানো',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'অপশনসমূহ',
            'title' => 'স্পেসিফিকেশন টেবিল',
            'select_none' => 'কোনটিই নয়',
            'description' => 'এই পণ্যে প্রদর্শনের জন্য স্পেসিফিকেশন টেবিল নির্বাচন করুন',
            'group' => 'গ্রুপ',
            'attribute' => 'বৈশিষ্ট্য',
            'value' => 'বৈশিষ্ট্যের মান',
            'hide' => 'লুকান',
            'sorting' => 'সাজানো',
            'enter_value' => 'মান লিখুন',
            'enter_translation' => 'অনুবাদ লিখুন',
            'not_set' => 'সেট করা হয়নি',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'টেক্সট',
            'textarea' => 'টেক্সটএরিয়া',
            'select' => 'সিলেক্ট',
            'checkbox' => 'চেকবক্স',
            'radio' => 'রেডিও',
        ],
    ],
];
