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
        'success' => 'Prijava uspješna!',
        'fail' => 'Pogrešno korisničko ime ili lozinka.',
        'not_active' => 'Vaš račun još nije aktiviran!',
        'banned' => 'Ovaj račun je blokiran.',
        'logout_success' => 'Odjava uspješna!',
        'dont_have_account' => 'Nemate račun na ovom sustavu, molimo kontaktirajte administratora za više informacija!',
    ],
    'forgot_password' => [
        'title' => 'Zaboravljena lozinka',
        'message' => '<p>Jeste li zaboravili lozinku?</p><p>Molimo unesite svoj email račun. Sustav će poslati email s aktivnom vezom za ponovno postavljanje lozinke.</p>',
        'submit' => 'Pošalji',
    ],
    'reset' => [
        'new_password' => 'Nova lozinka',
        'password_confirmation' => 'Potvrdite novu lozinku',
        'email' => 'Email',
        'title' => 'Ponovno postavite lozinku',
        'update' => 'Ažuriraj',
        'wrong_token' => 'Ova veza je nevažeća ili je istekla. Molimo pokušajte ponovno koristiti obrazac za ponovno postavljanje.',
        'user_not_found' => 'Ovo korisničko ime ne postoji.',
        'success' => 'Lozinka je uspješno ponovno postavljena!',
        'fail' => 'Token je nevažeći, veza za ponovno postavljanje lozinke je istekla!',
        'reset' => [
            'title' => 'Email za ponovno postavljanje lozinke',
        ],
        'send' => [
            'success' => 'Email je poslan na vaš email račun. Molimo provjerite i dovršite ovu radnju.',
            'fail' => 'Ne može se poslati email u ovom trenutku. Molimo pokušajte ponovno kasnije.',
        ],
        'new-password' => 'Nova lozinka',
        'placeholder' => [
            'new_password' => 'Unesite svoju novu lozinku',
            'new_password_confirmation' => 'Potvrdite svoju novu lozinku',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'Email za ponovno postavljanje lozinke',
        ],
    ],
    'password_confirmation' => 'Potvrda lozinke',
    'failed' => 'Neuspjelo',
    'throttle' => 'Ograničenje',
    'not_member' => 'Još niste član?',
    'register_now' => 'Registrirajte se sada',
    'lost_your_password' => 'Izgubili ste lozinku?',
    'login_title' => 'Administrator',
    'login_via_social' => 'Prijavite se putem društvenih mreža',
    'back_to_login' => 'Povratak na stranicu za prijavu',
    'sign_in_below' => 'Prijavite se ispod',
    'languages' => 'Jezici',
    'reset_password' => 'Ponovno postavi lozinku',
    'deactivated_message' => 'Vaš račun je deaktiviran. Molimo kontaktirajte administratora.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL email konfiguracija',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Ponovno postavi lozinku',
                    'description' => 'Pošalji email korisniku pri zahtjevu za ponovno postavljanje lozinke',
                    'subject' => 'Ponovno postavi lozinku',
                    'reset_link' => 'Veza za ponovno postavljanje lozinke',
                    'email_title' => 'Upute za ponovno postavljanje lozinke',
                    'email_message' => 'Primili ste ovaj email jer smo zaprimili zahtjev za ponovno postavljanje lozinke za vaš račun.',
                    'button_text' => 'Ponovno postavi lozinku',
                    'trouble_text' => 'Ako imate problema s klikom na gumb "Ponovno postavi lozinku", kopirajte i zalijepite donji URL u svoj web preglednik: <a href=":reset_link">:reset_link</a> i zalijepite ga u svoj preglednik. Ako niste zatražili ponovno postavljanje lozinke, molimo zanemarite ovu poruku ili nas kontaktirajte ako imate pitanja.',
                ],
            ],
        ],
    ],
];
