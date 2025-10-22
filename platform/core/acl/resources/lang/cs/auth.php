<?php

return [
    'login' => [
        'username' => 'Email/Uživatelské jméno',
        'email' => 'Email',
        'password' => 'Heslo',
        'title' => 'Přihlášení uživatele',
        'remember' => 'Zapamatovat si mě?',
        'login' => 'Přihlásit se',
        'placeholder' => [
            'username' => 'Zadejte své uživatelské jméno nebo e-mailovou adresu',
            'email' => 'Zadejte svou e-mailovou adresu',
            'password' => 'Zadejte své heslo',
        ],
        'success' => 'Přihlášení úspěšné!',
        'fail' => 'Nesprávné uživatelské jméno nebo heslo.',
        'not_active' => 'Váš účet ještě nebyl aktivován!',
        'banned' => 'Tento účet je zablokován.',
        'logout_success' => 'Odhlášení úspěšné!',
        'dont_have_account' => 'Nemáte účet v tomto systému, kontaktujte prosím správce pro více informací!',
    ],
    'forgot_password' => [
        'title' => 'Zapomenuté heslo',
        'message' => '<p>Zapomněli jste heslo?</p><p>Zadejte prosím svůj e-mailový účet. Systém vám pošle e-mail s aktivním odkazem pro obnovení hesla.</p>',
        'submit' => 'Odeslat',
    ],
    'reset' => [
        'new_password' => 'Nové heslo',
        'password_confirmation' => 'Potvrďte nové heslo',
        'email' => 'Email',
        'title' => 'Obnovit heslo',
        'update' => 'Aktualizovat',
        'wrong_token' => 'Tento odkaz je neplatný nebo vypršel. Zkuste prosím znovu použít formulář pro obnovení.',
        'user_not_found' => 'Toto uživatelské jméno neexistuje.',
        'success' => 'Heslo bylo úspěšně obnoveno!',
        'fail' => 'Token je neplatný, odkaz pro obnovení hesla vypršel!',
        'reset' => [
            'title' => 'E-mail pro obnovení hesla',
        ],
        'send' => [
            'success' => 'E-mail byl odeslán na váš e-mailový účet. Zkontrolujte jej prosím a dokončete tuto akci.',
            'fail' => 'E-mail nelze v tuto chvíli odeslat. Zkuste to prosím později.',
        ],
        'new-password' => 'Nové heslo',
        'placeholder' => [
            'new_password' => 'Zadejte své nové heslo',
            'new_password_confirmation' => 'Potvrďte své nové heslo',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'E-mail pro obnovení hesla',
        ],
    ],
    'password_confirmation' => 'Potvrzení hesla',
    'failed' => 'Selhalo',
    'throttle' => 'Omezení',
    'not_member' => 'Ještě nejste členem?',
    'register_now' => 'Zaregistrovat se nyní',
    'lost_your_password' => 'Ztratili jste heslo?',
    'login_title' => 'Správce',
    'login_via_social' => 'Přihlásit se přes sociální sítě',
    'back_to_login' => 'Zpět na přihlašovací stránku',
    'sign_in_below' => 'Přihlaste se níže',
    'languages' => 'Jazyky',
    'reset_password' => 'Obnovit heslo',
    'deactivated_message' => 'Váš účet byl deaktivován. Kontaktujte prosím správce.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL konfigurace e-mailu',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Obnovit heslo',
                    'description' => 'Odeslat e-mail uživateli při žádosti o obnovení hesla',
                    'subject' => 'Obnovit heslo',
                    'reset_link' => 'Odkaz pro obnovení hesla',
                    'email_title' => 'Instrukce pro obnovení hesla',
                    'email_message' => 'Tento e-mail dostávate, protože jsme obdrželi žádost o obnovení hesla pro váš účet.',
                    'button_text' => 'Obnovit heslo',
                    'trouble_text' => 'Pokud máte problémy s kliknutím na tlačítko "Obnovit heslo", zkopírujte a vložte níže uvedenou URL adresu do webového prohlížeče: <a href=":reset_link">:reset_link</a> a vložte ji do prohlížeče. Pokud jste o obnovení hesla nežádali, ignorujte prosím tuto zprávu nebo nás kontaktujte, pokud máte jakékoli dotazy.',
                ],
            ],
        ],
    ],
];
