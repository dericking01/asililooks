<?php

return [
    'login' => [
        'username' => 'Email/Používateľské meno',
        'email' => 'Email',
        'password' => 'Heslo',
        'title' => 'Prihlásenie používateľa',
        'remember' => 'Zapamätať si ma?',
        'login' => 'Prihlásiť sa',
        'placeholder' => [
            'username' => 'Zadajte svoje používateľské meno alebo e-mailovú adresu',
            'email' => 'Zadajte svoju e-mailovú adresu',
            'password' => 'Zadajte svoje heslo',
        ],
        'success' => 'Prihlásenie úspešné!',
        'fail' => 'Nesprávne používateľské meno alebo heslo.',
        'not_active' => 'Váš účet ešte nebol aktivovaný!',
        'banned' => 'Tento účet je zablokovaný.',
        'logout_success' => 'Odhlásenie úspešné!',
        'dont_have_account' => 'Nemáte účet v tomto systéme, kontaktujte prosím správcu pre viac informácií!',
    ],
    'forgot_password' => [
        'title' => 'Zabudnuté heslo',
        'message' => '<p>Zabudli ste svoje heslo?</p><p>Zadajte prosím svoj e-mailový účet. Systém vám pošle e-mail s aktívnym odkazom na obnovenie hesla.</p>',
        'submit' => 'Odoslať',
    ],
    'reset' => [
        'new_password' => 'Nové heslo',
        'password_confirmation' => 'Potvrďte nové heslo',
        'email' => 'Email',
        'title' => 'Obnoviť heslo',
        'update' => 'Aktualizovať',
        'wrong_token' => 'Tento odkaz je neplatný alebo vypršal. Skúste prosím znova použiť formulár na obnovenie.',
        'user_not_found' => 'Toto používateľské meno neexistuje.',
        'success' => 'Heslo bolo úspešne obnovené!',
        'fail' => 'Token je neplatný, odkaz na obnovenie hesla vypršal!',
        'reset' => [
            'title' => 'E-mail na obnovenie hesla',
        ],
        'send' => [
            'success' => 'E-mail bol odoslaný na váš e-mailový účet. Skontrolujte ho prosím a dokončite túto akciu.',
            'fail' => 'E-mail sa momentálne nedá odoslať. Skúste to prosím neskôr.',
        ],
        'new-password' => 'Nové heslo',
        'placeholder' => [
            'new_password' => 'Zadajte svoje nové heslo',
            'new_password_confirmation' => 'Potvrďte svoje nové heslo',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'E-mail na obnovenie hesla',
        ],
    ],
    'password_confirmation' => 'Potvrdenie hesla',
    'failed' => 'Zlyhalo',
    'throttle' => 'Obmedzenie',
    'not_member' => 'Ešte nie ste členom?',
    'register_now' => 'Zaregistrujte sa teraz',
    'lost_your_password' => 'Stratili ste heslo?',
    'login_title' => 'Správca',
    'login_via_social' => 'Prihlásiť sa cez sociálne siete',
    'back_to_login' => 'Späť na prihlasovaciu stránku',
    'sign_in_below' => 'Prihláste sa nižšie',
    'languages' => 'Jazyky',
    'reset_password' => 'Obnoviť heslo',
    'deactivated_message' => 'Váš účet bol deaktivovaný. Kontaktujte prosím správcu.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL konfigurácia e-mailu',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Obnoviť heslo',
                    'description' => 'Odoslať e-mail používateľovi pri žiadosti o obnovenie hesla',
                    'subject' => 'Obnoviť heslo',
                    'reset_link' => 'Odkaz na obnovenie hesla',
                    'email_title' => 'Pokyny na obnovenie hesla',
                    'email_message' => 'Tento e-mail dostávate, pretože sme dostali žiadosť o obnovenie hesla pre váš účet.',
                    'button_text' => 'Obnoviť heslo',
                    'trouble_text' => 'Ak máte problémy s kliknutím na tlačidlo "Obnoviť heslo", skopírujte a vložte nižšie uvedenú URL adresu do webového prehliadača: <a href=":reset_link">:reset_link</a> a vložte ju do prehliadača. Ak ste nežiadali o obnovenie hesla, ignorujte prosím túto správu alebo nás kontaktujte, ak máte akékoľvek otázky.',
                ],
            ],
        ],
    ],
];
