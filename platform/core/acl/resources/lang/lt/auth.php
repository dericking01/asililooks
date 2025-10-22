<?php

return [
    'login' => [
        'username' => 'El. paštas/Vartotojo vardas',
        'email' => 'El. paštas',
        'password' => 'Slaptažodis',
        'title' => 'Vartotojo prisijungimas',
        'remember' => 'Prisiminti mane?',
        'login' => 'Prisijungti',
        'placeholder' => [
            'username' => 'Įveskite savo vartotojo vardą arba el. pašto adresą',
            'email' => 'Įveskite savo el. pašto adresą',
            'password' => 'Įveskite savo slaptažodį',
        ],
        'success' => 'Prisijungimas sėkmingas!',
        'fail' => 'Neteisingas vartotojo vardas arba slaptažodis.',
        'not_active' => 'Jūsų paskyra dar nebuvo suaktyvinta!',
        'banned' => 'Ši paskyra užblokuota.',
        'logout_success' => 'Atsijungimas sėkmingas!',
        'dont_have_account' => 'Neturite paskyros šioje sistemoje, daugiau informacijos kreipkitės į administratorių!',
    ],
    'forgot_password' => [
        'title' => 'Pamirštas slaptažodis',
        'message' => '<p>Ar pamiršote savo slaptažodį?</p><p>Prašome įvesti savo el. pašto paskyrą. Sistema išsiųs el. laišką su aktyvia nuoroda slaptažodžio atkūrimui.</p>',
        'submit' => 'Pateikti',
    ],
    'reset' => [
        'new_password' => 'Naujas slaptažodis',
        'password_confirmation' => 'Patvirtinti naują slaptažodį',
        'email' => 'El. paštas',
        'title' => 'Atkurti slaptažodį',
        'update' => 'Atnaujinti',
        'wrong_token' => 'Ši nuoroda yra negaliojanti arba pasibaigė. Prašome bandyti naudoti atkūrimo formą dar kartą.',
        'user_not_found' => 'Šis vartotojo vardas neegzistuoja.',
        'success' => 'Slaptažodis sėkmingai atkurtas!',
        'fail' => 'Prieigos raktas negaliojantis, slaptažodžio atkūrimo nuoroda pasibaigė!',
        'reset' => [
            'title' => 'El. pašto slaptažodžio atkūrimas',
        ],
        'send' => [
            'success' => 'El. laiškas buvo išsiųstas į jūsų el. pašto paskyrą. Prašome patikrinti ir užbaigti šį veiksmą.',
            'fail' => 'Šiuo metu negalima išsiųsti el. laiško. Prašome bandyti vėliau.',
        ],
        'new-password' => 'Naujas slaptažodis',
        'placeholder' => [
            'new_password' => 'Įveskite savo naują slaptažodį',
            'new_password_confirmation' => 'Patvirtinkite savo naują slaptažodį',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'El. pašto slaptažodžio atkūrimas',
        ],
    ],
    'password_confirmation' => 'Slaptažodžio patvirtinimas',
    'failed' => 'Nepavyko',
    'throttle' => 'Apribojimas',
    'not_member' => 'Dar ne narys?',
    'register_now' => 'Registruotis dabar',
    'lost_your_password' => 'Praradote slaptažodį?',
    'login_title' => 'Administratorius',
    'login_via_social' => 'Prisijungti su socialiniais tinklais',
    'back_to_login' => 'Grįžti į prisijungimo puslapį',
    'sign_in_below' => 'Prisijunkite žemiau',
    'languages' => 'Kalbos',
    'reset_password' => 'Atkurti slaptažodį',
    'deactivated_message' => 'Jūsų paskyra buvo išjungta. Prašome susisiekti su administratoriumi.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL el. pašto konfigūracija',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Atkurti slaptažodį',
                    'description' => 'Siųsti el. laišką vartotojui prašant atkurti slaptažodį',
                    'subject' => 'Atkurti slaptažodį',
                    'reset_link' => 'Slaptažodžio atkūrimo nuoroda',
                    'email_title' => 'Slaptažodžio atkūrimo instrukcijos',
                    'email_message' => 'Gaunate šį el. laišką, nes gavome slaptažodžio atkūrimo užklausą jūsų paskyrai.',
                    'button_text' => 'Atkurti slaptažodį',
                    'trouble_text' => 'Jei kyla problemų spustelėjant mygtuką "Atkurti slaptažodį", nukopijuokite ir įklijuokite toliau pateiktą URL į savo interneto naršyklę: <a href=":reset_link">:reset_link</a> ir įklijuokite į savo naršyklę. Jei neprašėte atkurti slaptažodžio, nepaisykite šio pranešimo arba susisiekite su mumis, jei turite klausimų.',
                ],
            ],
        ],
    ],
];
