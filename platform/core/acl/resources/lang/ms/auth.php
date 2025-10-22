<?php

return [
    'login' => [
        'username' => 'E-mel/Nama Pengguna',
        'email' => 'E-mel',
        'password' => 'Kata Laluan',
        'title' => 'Log Masuk Pengguna',
        'remember' => 'Ingat saya?',
        'login' => 'Log masuk',
        'placeholder' => [
            'username' => 'Masukkan nama pengguna atau alamat e-mel anda',
            'email' => 'Masukkan alamat e-mel anda',
            'password' => 'Masukkan kata laluan anda',
        ],
        'success' => 'Log masuk berjaya!',
        'fail' => 'Nama pengguna atau kata laluan salah.',
        'not_active' => 'Akaun anda belum diaktifkan lagi!',
        'banned' => 'Akaun ini disekat.',
        'logout_success' => 'Log keluar berjaya!',
        'dont_have_account' => 'Anda tidak mempunyai akaun pada sistem ini, sila hubungi pentadbir untuk maklumat lanjut!',
    ],
    'forgot_password' => [
        'title' => 'Lupa Kata Laluan',
        'message' => '<p>Adakah anda terlupa kata laluan anda?</p><p>Sila masukkan akaun e-mel anda. Sistem akan menghantar e-mel dengan pautan aktif untuk menetapkan semula kata laluan anda.</p>',
        'submit' => 'Hantar',
    ],
    'reset' => [
        'new_password' => 'Kata laluan baharu',
        'password_confirmation' => 'Sahkan kata laluan baharu',
        'email' => 'E-mel',
        'title' => 'Tetapkan semula kata laluan anda',
        'update' => 'Kemas kini',
        'wrong_token' => 'Pautan ini tidak sah atau tamat tempoh. Sila cuba gunakan borang tetapkan semula lagi.',
        'user_not_found' => 'Nama pengguna ini tidak wujud.',
        'success' => 'Kata laluan berjaya ditetapkan semula!',
        'fail' => 'Token tidak sah, pautan tetapkan semula kata laluan telah tamat tempoh!',
        'reset' => [
            'title' => 'E-mel tetapkan semula kata laluan',
        ],
        'send' => [
            'success' => 'E-mel telah dihantar ke akaun e-mel anda. Sila semak dan lengkapkan tindakan ini.',
            'fail' => 'Tidak dapat menghantar e-mel pada masa ini. Sila cuba lagi kemudian.',
        ],
        'new-password' => 'Kata laluan baharu',
        'placeholder' => [
            'new_password' => 'Masukkan kata laluan baharu anda',
            'new_password_confirmation' => 'Sahkan kata laluan baharu anda',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'E-mel tetapkan semula kata laluan',
        ],
    ],
    'password_confirmation' => 'Pengesahan kata laluan',
    'failed' => 'Gagal',
    'throttle' => 'Sekatan',
    'not_member' => 'Belum menjadi ahli?',
    'register_now' => 'Daftar sekarang',
    'lost_your_password' => 'Kehilangan kata laluan anda?',
    'login_title' => 'Pentadbir',
    'login_via_social' => 'Log masuk dengan rangkaian sosial',
    'back_to_login' => 'Kembali ke halaman log masuk',
    'sign_in_below' => 'Log Masuk Di Bawah',
    'languages' => 'Bahasa',
    'reset_password' => 'Tetapkan Semula Kata Laluan',
    'deactivated_message' => 'Akaun anda telah dinyahaktifkan. Sila hubungi pentadbir.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'Konfigurasi e-mel ACL',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Tetapkan semula kata laluan',
                    'description' => 'Hantar e-mel kepada pengguna apabila meminta tetapkan semula kata laluan',
                    'subject' => 'Tetapkan Semula Kata Laluan',
                    'reset_link' => 'Pautan tetapkan semula kata laluan',
                    'email_title' => 'Arahan Tetapkan Semula Kata Laluan',
                    'email_message' => 'Anda menerima e-mel ini kerana kami menerima permintaan tetapkan semula kata laluan untuk akaun anda.',
                    'button_text' => 'Tetapkan semula kata laluan',
                    'trouble_text' => 'Jika anda menghadapi masalah mengklik butang "Tetapkan Semula Kata Laluan", salin dan tampal URL di bawah ke dalam penyemak imbas web anda: <a href=":reset_link">:reset_link</a> dan tampalkannya ke dalam penyemak imbas anda. Jika anda tidak meminta tetapkan semula kata laluan, sila abaikan mesej ini atau hubungi kami jika anda mempunyai sebarang pertanyaan.',
                ],
            ],
        ],
    ],
];
