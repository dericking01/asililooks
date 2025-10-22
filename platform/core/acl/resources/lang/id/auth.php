<?php

return [
    'login' => [
        'username' => 'Email/Nama Pengguna',
        'email' => 'Email',
        'password' => 'Kata Sandi',
        'title' => 'Login Pengguna',
        'remember' => 'Ingat saya?',
        'login' => 'Masuk',
        'placeholder' => [
            'username' => 'Masukkan nama pengguna atau alamat email Anda',
            'email' => 'Masukkan alamat email Anda',
            'password' => 'Masukkan kata sandi Anda',
        ],
        'success' => 'Login berhasil!',
        'fail' => 'Nama pengguna atau kata sandi salah.',
        'not_active' => 'Akun Anda belum diaktifkan!',
        'banned' => 'Akun ini dilarang.',
        'logout_success' => 'Logout berhasil!',
        'dont_have_account' => 'Anda tidak memiliki akun di sistem ini, silakan hubungi administrator untuk informasi lebih lanjut!',
    ],
    'forgot_password' => [
        'title' => 'Lupa Kata Sandi',
        'message' => '<p>Apakah Anda lupa kata sandi Anda?</p><p>Silakan masukkan akun email Anda. Sistem akan mengirim email dengan tautan aktif untuk mengatur ulang kata sandi Anda.</p>',
        'submit' => 'Kirim',
    ],
    'reset' => [
        'new_password' => 'Kata sandi baru',
        'password_confirmation' => 'Konfirmasi kata sandi baru',
        'email' => 'Email',
        'title' => 'Atur ulang kata sandi Anda',
        'update' => 'Perbarui',
        'wrong_token' => 'Tautan ini tidak valid atau kedaluwarsa. Silakan coba gunakan formulir reset lagi.',
        'user_not_found' => 'Nama pengguna ini tidak ada.',
        'success' => 'Pengaturan ulang kata sandi berhasil!',
        'fail' => 'Token tidak valid, tautan pengaturan ulang kata sandi telah kedaluwarsa!',
        'reset' => [
            'title' => 'Email pengaturan ulang kata sandi',
        ],
        'send' => [
            'success' => 'Email telah dikirim ke akun email Anda. Silakan periksa dan selesaikan tindakan ini.',
            'fail' => 'Tidak dapat mengirim email saat ini. Silakan coba lagi nanti.',
        ],
        'new-password' => 'Kata sandi baru',
        'placeholder' => [
            'new_password' => 'Masukkan kata sandi baru Anda',
            'new_password_confirmation' => 'Konfirmasi kata sandi baru Anda',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'Email pengaturan ulang kata sandi',
        ],
    ],
    'password_confirmation' => 'Konfirmasi kata sandi',
    'failed' => 'Gagal',
    'throttle' => 'Pembatasan',
    'not_member' => 'Belum menjadi anggota?',
    'register_now' => 'Daftar sekarang',
    'lost_your_password' => 'Kehilangan kata sandi Anda?',
    'login_title' => 'Admin',
    'login_via_social' => 'Login dengan jejaring sosial',
    'back_to_login' => 'Kembali ke halaman login',
    'sign_in_below' => 'Masuk di Bawah',
    'languages' => 'Bahasa',
    'reset_password' => 'Atur Ulang Kata Sandi',
    'deactivated_message' => 'Akun Anda telah dinonaktifkan. Silakan hubungi administrator.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'Konfigurasi email ACL',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Atur ulang kata sandi',
                    'description' => 'Kirim email ke pengguna saat meminta pengaturan ulang kata sandi',
                    'subject' => 'Atur Ulang Kata Sandi',
                    'reset_link' => 'Tautan pengaturan ulang kata sandi',
                    'email_title' => 'Instruksi Pengaturan Ulang Kata Sandi',
                    'email_message' => 'Anda menerima email ini karena kami menerima permintaan pengaturan ulang kata sandi untuk akun Anda.',
                    'button_text' => 'Atur ulang kata sandi',
                    'trouble_text' => 'Jika Anda mengalami masalah mengklik tombol "Atur Ulang Kata Sandi", salin dan tempel URL di bawah ini ke browser web Anda: <a href=":reset_link">:reset_link</a> dan tempel ke browser Anda. Jika Anda tidak meminta pengaturan ulang kata sandi, abaikan pesan ini atau hubungi kami jika Anda memiliki pertanyaan.',
                ],
            ],
        ],
    ],
];
