<?php

return [
    'login' => [
        'username' => 'Email/Korisničko ime',
        'email' => 'Email',
        'password' => 'Lozinka',
        'title' => 'Prijava korisnika',
        'remember' => 'Zapamti me?',
        'login' => 'Prijavi se',
        'placeholder' => [
            'username' => 'Unesite svoje korisničko ime ili email adresu',
            'email' => 'Unesite svoju email adresu',
            'password' => 'Unesite svoju lozinku',
        ],
        'success' => 'Prijava uspešna!',
        'fail' => 'Pogrešno korisničko ime ili lozinka.',
        'not_active' => 'Vaš nalog još nije aktiviran!',
        'banned' => 'Ovaj nalog je blokiran.',
        'logout_success' => 'Odjava uspešna!',
        'dont_have_account' => 'Nemate nalog na ovom sistemu, molimo kontaktirajte administratora za više informacija!',
    ],
    'forgot_password' => [
        'title' => 'Zaboravljena lozinka',
        'message' => '<p>Da li ste zaboravili lozinku?</p><p>Molimo unesite svoj email nalog. Sistem će poslati email sa aktivnim linkom za resetovanje lozinke.</p>',
        'submit' => 'Pošalji',
    ],
    'reset' => [
        'new_password' => 'Nova lozinka',
        'password_confirmation' => 'Potvrdite novu lozinku',
        'email' => 'Email',
        'title' => 'Resetujte lozinku',
        'update' => 'Ažuriraj',
        'wrong_token' => 'Ovaj link je nevažeći ili je istekao. Molimo pokušajte ponovo da koristite formular za resetovanje.',
        'user_not_found' => 'Ovo korisničko ime ne postoji.',
        'success' => 'Lozinka je uspešno resetovana!',
        'fail' => 'Token je nevažeći, link za resetovanje lozinke je istekao!',
        'reset' => [
            'title' => 'Email resetovanje lozinke',
        ],
        'send' => [
            'success' => 'Email je poslat na vaš email nalog. Molimo proverite i završite ovu radnju.',
            'fail' => 'Ne može se poslati email u ovom trenutku. Molimo pokušajte ponovo kasnije.',
        ],
        'new-password' => 'Nova lozinka',
        'placeholder' => [
            'new_password' => 'Unesite svoju novu lozinku',
            'new_password_confirmation' => 'Potvrdite svoju novu lozinku',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'Email resetovanje lozinke',
        ],
    ],
    'password_confirmation' => 'Potvrda lozinke',
    'failed' => 'Neuspelo',
    'throttle' => 'Ograničenje',
    'not_member' => 'Još niste član?',
    'register_now' => 'Registrujte se sada',
    'lost_your_password' => 'Izgubili ste lozinku?',
    'login_title' => 'Administrator',
    'login_via_social' => 'Prijavite se putem društvenih mreža',
    'back_to_login' => 'Povratak na stranicu za prijavu',
    'sign_in_below' => 'Prijavite se ispod',
    'languages' => 'Jezici',
    'reset_password' => 'Resetuj lozinku',
    'deactivated_message' => 'Vaš nalog je deaktiviran. Molimo kontaktirajte administratora.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL email konfiguracija',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Resetuj lozinku',
                    'description' => 'Pošalji email korisniku pri zahtevu za resetovanje lozinke',
                    'subject' => 'Resetuj lozinku',
                    'reset_link' => 'Link za resetovanje lozinke',
                    'email_title' => 'Uputstvo za resetovanje lozinke',
                    'email_message' => 'Primate ovaj email jer smo primili zahtev za resetovanje lozinke za vaš nalog.',
                    'button_text' => 'Resetuj lozinku',
                    'trouble_text' => 'Ako imate problema sa klikom na dugme "Resetuj lozinku", kopirajte i nalepite donji URL u svoj veb pregledač: <a href=":reset_link">:reset_link</a> i nalepite ga u pregledač. Ako niste zatražili resetovanje lozinke, molimo zanemarite ovu poruku ili nas kontaktirajte ako imate pitanja.',
                ],
            ],
        ],
    ],
];
