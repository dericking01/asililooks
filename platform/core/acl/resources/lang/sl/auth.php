<?php

return [
    'login' => [
        'username' => 'E-pošta/Uporabniško ime',
        'email' => 'E-pošta',
        'password' => 'Geslo',
        'title' => 'Prijava uporabnika',
        'remember' => 'Zapomni si me?',
        'login' => 'Prijava',
        'placeholder' => [
            'username' => 'Vnesite svoje uporabniško ime ali e-poštni naslov',
            'email' => 'Vnesite svoj e-poštni naslov',
            'password' => 'Vnesite svoje geslo',
        ],
        'success' => 'Prijava uspešna!',
        'fail' => 'Napačno uporabniško ime ali geslo.',
        'not_active' => 'Vaš račun še ni bil aktiviran!',
        'banned' => 'Ta račun je blokiran.',
        'logout_success' => 'Odjava uspešna!',
        'dont_have_account' => 'Nimate računa v tem sistemu, za več informacij se obrnite na skrbnika!',
    ],
    'forgot_password' => [
        'title' => 'Pozabljeno geslo',
        'message' => '<p>Ali ste pozabili geslo?</p><p>Vnesite svoj e-poštni račun. Sistem bo poslal e-poštno sporočilo z aktivno povezavo za ponastavitev gesla.</p>',
        'submit' => 'Pošlji',
    ],
    'reset' => [
        'new_password' => 'Novo geslo',
        'password_confirmation' => 'Potrdite novo geslo',
        'email' => 'E-pošta',
        'title' => 'Ponastavite geslo',
        'update' => 'Posodobi',
        'wrong_token' => 'Ta povezava je neveljavna ali potekla. Poskusite znova uporabiti obrazec za ponastavitev.',
        'user_not_found' => 'To uporabniško ime ne obstaja.',
        'success' => 'Geslo uspešno ponastavljeno!',
        'fail' => 'Žeton je neveljaven, povezava za ponastavitev gesla je potekla!',
        'reset' => [
            'title' => 'E-pošta za ponastavitev gesla',
        ],
        'send' => [
            'success' => 'E-poštno sporočilo je bilo poslano na vaš e-poštni račun. Preverite in dokončajte to dejanje.',
            'fail' => 'E-pošte trenutno ni mogoče poslati. Poskusite znova pozneje.',
        ],
        'new-password' => 'Novo geslo',
        'placeholder' => [
            'new_password' => 'Vnesite novo geslo',
            'new_password_confirmation' => 'Potrdite novo geslo',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'E-pošta za ponastavitev gesla',
        ],
    ],
    'password_confirmation' => 'Potrditev gesla',
    'failed' => 'Neuspešno',
    'throttle' => 'Omejitev',
    'not_member' => 'Še niste član?',
    'register_now' => 'Registrirajte se zdaj',
    'lost_your_password' => 'Izgubili ste geslo?',
    'login_title' => 'Skrbnik',
    'login_via_social' => 'Prijavite se s socialnimi omrežji',
    'back_to_login' => 'Nazaj na prijavno stran',
    'sign_in_below' => 'Prijavite se spodaj',
    'languages' => 'Jeziki',
    'reset_password' => 'Ponastavi geslo',
    'deactivated_message' => 'Vaš račun je bil deaktiviran. Obrnite se na skrbnika.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL konfiguracija e-pošte',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Ponastavi geslo',
                    'description' => 'Pošlji e-pošto uporabniku ob zahtevi za ponastavitev gesla',
                    'subject' => 'Ponastavi geslo',
                    'reset_link' => 'Povezava za ponastavitev gesla',
                    'email_title' => 'Navodila za ponastavitev gesla',
                    'email_message' => 'To e-pošto prejemate, ker smo prejeli zahtevo za ponastavitev gesla za vaš račun.',
                    'button_text' => 'Ponastavi geslo',
                    'trouble_text' => 'Če imate težave s klikom na gumb "Ponastavi geslo", kopirajte in prilepite spodnji URL v svoj spletni brskalnik: <a href=":reset_link">:reset_link</a> in ga prilepite v brskalnik. Če niste zahtevali ponastavitve gesla, prezrite to sporočilo ali nas kontaktirajte, če imate vprašanja.',
                ],
            ],
        ],
    ],
];
