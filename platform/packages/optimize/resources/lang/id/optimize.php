<?php

return [
    'settings' => [
        'title' => 'Optimalkan',
        'description' => 'Perkecil output HTML, inline CSS, hapus komentar...',
        'enable' => 'Aktifkan optimasi kecepatan halaman?',
    ],
    'collapse_white_space' => 'Padatkan spasi',
    'collapse_white_space_description' => 'Filter ini mengurangi byte yang ditransmisikan dalam file HTML dengan menghapus spasi yang tidak perlu.',
    'elide_attributes' => 'Hapus atribut',
    'elide_attributes_description' => 'Filter ini mengurangi ukuran transfer file HTML dengan menghapus atribut dari tag ketika nilai yang ditentukan sama dengan nilai default untuk atribut tersebut. Ini dapat menghemat sejumlah byte yang sederhana, dan dapat membuat dokumen lebih dapat dikompresi dengan mengkanonisasi tag yang terpengaruh.',
    'inline_css' => 'CSS Inline',
    'inline_css_description' => 'Filter ini mengubah atribut "style" inline dari tag menjadi kelas dengan memindahkan CSS ke header.',
    'insert_dns_prefetch' => 'Sisipkan DNS prefetch',
    'insert_dns_prefetch_description' => 'Filter ini menyisipkan tag di HEAD untuk memungkinkan browser melakukan DNS prefetching.',
    'remove_comments' => 'Hapus komentar',
    'remove_comments_description' => 'Filter ini menghilangkan komentar HTML, JS dan CSS. Filter mengurangi ukuran transfer file HTML dengan menghapus komentar. Tergantung pada file HTML, filter ini dapat secara signifikan mengurangi jumlah byte yang ditransmisikan di jaringan.',
    'remove_quotes' => 'Hapus tanda kutip',
    'remove_quotes_description' => 'Filter ini menghilangkan tanda kutip yang tidak perlu dari atribut HTML. Meskipun diperlukan oleh berbagai spesifikasi HTML, browser mengizinkan penghilangannya ketika nilai atribut terdiri dari subset karakter tertentu (alfanumerik dan beberapa karakter tanda baca).',
    'defer_javascript' => 'Tunda javascript',
    'defer_javascript_description' => 'Menunda eksekusi javascript dalam HTML. Jika perlu membatalkan penundaan di beberapa skrip, gunakan data-pagespeed-no-defer sebagai atribut skrip untuk membatalkan penundaan.',
];
