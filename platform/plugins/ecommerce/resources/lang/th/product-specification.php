<?php

return [
    'product_specification' => 'สเปคสินค้า',
    'specification_groups' => [
        'title' => 'กลุ่มสเปค',
        'menu_name' => 'กลุ่ม',

        'create' => [
            'title' => 'สร้างกลุ่มสเปค',
        ],

        'edit' => [
            'title' => 'แก้ไขกลุ่มสเปค ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'คุณสมบัติสเปค',
        'menu_name' => 'คุณสมบัติ',

        'group' => 'กลุ่มที่เกี่ยวข้อง',
        'group_placeholder' => 'เลือกกลุ่มใดก็ได้',
        'name_placeholder' => 'ใส่ชื่อคุณสมบัติ',
        'type' => 'ประเภทฟิลด์',
        'type_placeholder' => 'เลือกประเภทฟิลด์',
        'default_value' => 'ค่าเริ่มต้น',
        'default_value_placeholder' => 'ใส่ค่าเริ่มต้น (ไม่บังคับ)',
        'options' => [
            'heading' => 'ตัวเลือก',

            'add' => [
                'label' => 'เพิ่มตัวเลือกใหม่',
            ],
        ],

        'create' => [
            'title' => 'สร้างคุณสมบัติสเปค',
        ],

        'edit' => [
            'title' => 'แก้ไขคุณสมบัติสเปค ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'ตารางสเปค',
        'menu_name' => 'ตาราง',

        'create' => [
            'title' => 'สร้างตารางสเปค',
        ],

        'edit' => [
            'title' => 'แก้ไขตารางสเปค ":name"',
        ],

        'fields' => [
            'groups' => 'เลือกกลุ่มที่จะแสดงในตารางนี้',
            'name' => 'ชื่อกลุ่ม',
            'assigned_groups' => 'กลุ่มที่กำหนด',
            'sorting' => 'การเรียงลำดับ',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'ตัวเลือก',
            'title' => 'ตารางสเปค',
            'select_none' => 'ไม่มี',
            'description' => 'เลือกตารางสเปคที่จะแสดงในสินค้านี้',
            'group' => 'กลุ่ม',
            'attribute' => 'คุณสมบัติ',
            'value' => 'ค่าคุณสมบัติ',
            'hide' => 'ซ่อน',
            'sorting' => 'การเรียงลำดับ',
            'enter_value' => 'ใส่ค่า',
            'enter_translation' => 'ใส่การแปล',
            'not_set' => 'ไม่ได้กำหนด',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'ข้อความ',
            'textarea' => 'พื้นที่ข้อความ',
            'select' => 'เลือก',
            'checkbox' => 'ช่องติ๊ก',
            'radio' => 'ปุ่มวิทยุ',
        ],
    ],
];