<?php

return [
    'settings' => [
        'title' => 'Optimumkan',
        'description' => 'Kecilkan output HTML, inline CSS, buang komen...',
        'enable' => 'Dayakan pengoptimuman kelajuan halaman?',
    ],
    'collapse_white_space' => 'Padatkan ruang putih',
    'collapse_white_space_description' => 'Penapis ini mengurangkan bait yang dihantar dalam fail HTML dengan membuang ruang putih yang tidak perlu.',
    'elide_attributes' => 'Buang atribut',
    'elide_attributes_description' => 'Penapis ini mengurangkan saiz pemindahan fail HTML dengan membuang atribut daripada tag apabila nilai yang ditentukan sama dengan nilai lalai untuk atribut tersebut. Ini boleh menjimatkan sejumlah bait yang sederhana, dan boleh menjadikan dokumen lebih boleh dimampatkan dengan mengkanunkan tag yang terjejas.',
    'inline_css' => 'CSS inline',
    'inline_css_description' => 'Penapis ini mengubah atribut "style" inline tag kepada kelas dengan memindahkan CSS ke pengepala.',
    'insert_dns_prefetch' => 'Masukkan DNS prefetch',
    'insert_dns_prefetch_description' => 'Penapis ini menyuntik tag dalam HEAD untuk membolehkan penyemak imbas melakukan pengambilan awal DNS.',
    'remove_comments' => 'Buang komen',
    'remove_comments_description' => 'Penapis ini menghapuskan komen HTML, JS dan CSS. Penapis mengurangkan saiz pemindahan fail HTML dengan membuang komen. Bergantung pada fail HTML, penapis ini boleh mengurangkan dengan ketara bilangan bait yang dihantar pada rangkaian.',
    'remove_quotes' => 'Buang petikan',
    'remove_quotes_description' => 'Penapis ini menghapuskan petikan yang tidak perlu daripada atribut HTML. Walaupun diperlukan oleh pelbagai spesifikasi HTML, penyemak imbas membenarkan pengabaiannya apabila nilai atribut terdiri daripada subset aksara tertentu (alfanumerik dan beberapa aksara tanda baca).',
    'defer_javascript' => 'Tangguhkan javascript',
    'defer_javascript_description' => 'Menangguhkan pelaksanaan javascript dalam HTML. Jika perlu membatalkan penangguhan dalam sesetengah skrip, gunakan data-pagespeed-no-defer sebagai atribut skrip untuk membatalkan penangguhan.',
];
