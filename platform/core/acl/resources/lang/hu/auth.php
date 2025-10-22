<?php

return [
    'login' => [
        'username' => 'Email/Felhasználónév',
        'email' => 'Email',
        'password' => 'Jelszó',
        'title' => 'Felhasználói bejelentkezés',
        'remember' => 'Emlékezz rám?',
        'login' => 'Bejelentkezés',
        'placeholder' => [
            'username' => 'Add meg a felhasználóneved vagy email címed',
            'email' => 'Add meg az email címed',
            'password' => 'Add meg a jelszavad',
        ],
        'success' => 'Sikeres bejelentkezés!',
        'fail' => 'Helytelen felhasználónév vagy jelszó.',
        'not_active' => 'A fiókod még nem lett aktiválva!',
        'banned' => 'Ez a fiók le van tiltva.',
        'logout_success' => 'Sikeres kijelentkezés!',
        'dont_have_account' => 'Nincs fiókod ebben a rendszerben, kérlek lépj kapcsolatba az adminisztrátorral további információkért!',
    ],
    'forgot_password' => [
        'title' => 'Elfelejtett jelszó',
        'message' => '<p>Elfelejtetted a jelszavad?</p><p>Kérlek add meg az email fiókodat. A rendszer küld egy emailt egy aktív linkkel a jelszavad visszaállításához.</p>',
        'submit' => 'Elküld',
    ],
    'reset' => [
        'new_password' => 'Új jelszó',
        'password_confirmation' => 'Új jelszó megerősítése',
        'email' => 'Email',
        'title' => 'Jelszó visszaállítása',
        'update' => 'Frissítés',
        'wrong_token' => 'Ez a link érvénytelen vagy lejárt. Kérlek próbáld újra a visszaállítási űrlapot használni.',
        'user_not_found' => 'Ez a felhasználónév nem létezik.',
        'success' => 'Jelszó sikeresen visszaállítva!',
        'fail' => 'A token érvénytelen, a jelszó visszaállítási link lejárt!',
        'reset' => [
            'title' => 'Email jelszó visszaállítás',
        ],
        'send' => [
            'success' => 'Egy email elküldésre került az email fiókodba. Kérlek ellenőrizd és fejezd be ezt a műveletet.',
            'fail' => 'Nem lehet emailt küldeni jelenleg. Kérlek próbáld újra később.',
        ],
        'new-password' => 'Új jelszó',
        'placeholder' => [
            'new_password' => 'Add meg az új jelszavad',
            'new_password_confirmation' => 'Erősítsd meg az új jelszavad',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'Email jelszó visszaállítás',
        ],
    ],
    'password_confirmation' => 'Jelszó megerősítés',
    'failed' => 'Sikertelen',
    'throttle' => 'Korlátozás',
    'not_member' => 'Még nem vagy tag?',
    'register_now' => 'Regisztrálj most',
    'lost_your_password' => 'Elvesztetted a jelszavad?',
    'login_title' => 'Adminisztrátor',
    'login_via_social' => 'Bejelentkezés közösségi hálózatokkal',
    'back_to_login' => 'Vissza a bejelentkezési oldalra',
    'sign_in_below' => 'Jelentkezz be lent',
    'languages' => 'Nyelvek',
    'reset_password' => 'Jelszó visszaállítása',
    'deactivated_message' => 'A fiókod deaktiválva lett. Kérlek lépj kapcsolatba az adminisztrátorral.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL email konfiguráció',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Jelszó visszaállítása',
                    'description' => 'Email küldése a felhasználónak jelszó visszaállítás kérésekor',
                    'subject' => 'Jelszó visszaállítása',
                    'reset_link' => 'Jelszó visszaállítási link',
                    'email_title' => 'Jelszó visszaállítási útmutató',
                    'email_message' => 'Azért kapod ezt az emailt, mert jelszó visszaállítási kérést kaptunk a fiókodhoz.',
                    'button_text' => 'Jelszó visszaállítása',
                    'trouble_text' => 'Ha problémád van a "Jelszó visszaállítása" gombra kattintással, másold és illeszd be az alábbi URL-t a böngésződbe: <a href=":reset_link">:reset_link</a> és illeszd be a böngésződbe. Ha nem kértél jelszó visszaállítást, kérlek figyelmen kívül hagyhatod ezt az üzenetet, vagy lépj velünk kapcsolatba, ha kérdésed van.',
                ],
            ],
        ],
    ],
];
