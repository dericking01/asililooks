<?php

return [
    'login' => [
        'username' => 'E-post/Kasutajanimi',
        'email' => 'E-post',
        'password' => 'Parool',
        'title' => 'Kasutaja sisselogimine',
        'remember' => 'Jäta mind meelde?',
        'login' => 'Logi sisse',
        'placeholder' => [
            'username' => 'Sisestage oma kasutajanimi või e-posti aadress',
            'email' => 'Sisestage oma e-posti aadress',
            'password' => 'Sisestage oma parool',
        ],
        'success' => 'Sisselogimine õnnestus!',
        'fail' => 'Vale kasutajanimi või parool.',
        'not_active' => 'Teie kontot pole veel aktiveeritud!',
        'banned' => 'See konto on blokeeritud.',
        'logout_success' => 'Väljalogimine õnnestus!',
        'dont_have_account' => 'Teil pole selles süsteemis kontot, võtke lisateabe saamiseks ühendust administraatoriga!',
    ],
    'forgot_password' => [
        'title' => 'Unustatud parool',
        'message' => '<p>Kas olete parooli unustanud?</p><p>Palun sisestage oma e-posti konto. Süsteem saadab teile e-kirja aktiivse lingiga parooli lähtestamiseks.</p>',
        'submit' => 'Esita',
    ],
    'reset' => [
        'new_password' => 'Uus parool',
        'password_confirmation' => 'Kinnitage uus parool',
        'email' => 'E-post',
        'title' => 'Lähtestage oma parool',
        'update' => 'Uuenda',
        'wrong_token' => 'See link on kehtetu või aegunud. Palun proovige lähtestamisvormi uuesti kasutada.',
        'user_not_found' => 'Seda kasutajanime pole olemas.',
        'success' => 'Parooli lähtestamine õnnestus!',
        'fail' => 'Token on kehtetu, parooli lähtestamise link on aegunud!',
        'reset' => [
            'title' => 'E-kiri parooli lähtestamiseks',
        ],
        'send' => [
            'success' => 'Teie e-posti kontole saadeti e-kiri. Palun kontrollige ja lõpetage see tegevus.',
            'fail' => 'Praegu ei saa e-kirja saata. Palun proovige hiljem uuesti.',
        ],
        'new-password' => 'Uus parool',
        'placeholder' => [
            'new_password' => 'Sisestage oma uus parool',
            'new_password_confirmation' => 'Kinnitage oma uus parool',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'E-kiri parooli lähtestamiseks',
        ],
    ],
    'password_confirmation' => 'Parooli kinnitamine',
    'failed' => 'Ebaõnnestus',
    'throttle' => 'Piirang',
    'not_member' => 'Pole veel liige?',
    'register_now' => 'Registreeru kohe',
    'lost_your_password' => 'Kaotasite parooli?',
    'login_title' => 'Administraator',
    'login_via_social' => 'Logi sisse sotsiaalsete võrgustike kaudu',
    'back_to_login' => 'Tagasi sisselogimise lehele',
    'sign_in_below' => 'Logige sisse allpool',
    'languages' => 'Keeled',
    'reset_password' => 'Lähtesta parool',
    'deactivated_message' => 'Teie konto on deaktiveeritud. Palun võtke ühendust administraatoriga.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL e-posti konfiguratsioon',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Lähtesta parool',
                    'description' => 'Saada kasutajale e-kiri parooli lähtestamise taotlemisel',
                    'subject' => 'Lähtesta parool',
                    'reset_link' => 'Parooli lähtestamise link',
                    'email_title' => 'Parooli lähtestamise juhised',
                    'email_message' => 'Te saate seda e-kirja, kuna me saime teie konto jaoks parooli lähtestamise taotluse.',
                    'button_text' => 'Lähtesta parool',
                    'trouble_text' => 'Kui teil on probleeme nupule "Lähtesta parool" klõpsamisega, kopeerige ja kleepige allolev URL oma veebibrauserisse: <a href=":reset_link">:reset_link</a> ja kleepige see oma brauserisse. Kui te ei taotlenud parooli lähtestamist, eirake seda sõnumit või võtke meiega ühendust, kui teil on küsimusi.',
                ],
            ],
        ],
    ],
];
