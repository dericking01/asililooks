<?php

return [
    'login' => [
        'username' => 'Sähköposti/Käyttäjänimi',
        'email' => 'Sähköposti',
        'password' => 'Salasana',
        'title' => 'Käyttäjän kirjautuminen',
        'remember' => 'Muista minut?',
        'login' => 'Kirjaudu sisään',
        'placeholder' => [
            'username' => 'Syötä käyttäjänimesi tai sähköpostiosoitteesi',
            'email' => 'Syötä sähköpostiosoitteesi',
            'password' => 'Syötä salasanasi',
        ],
        'success' => 'Kirjautuminen onnistui!',
        'fail' => 'Väärä käyttäjänimi tai salasana.',
        'not_active' => 'Tiliäsi ei ole vielä aktivoitu!',
        'banned' => 'Tämä tili on estetty.',
        'logout_success' => 'Uloskirjautuminen onnistui!',
        'dont_have_account' => 'Sinulla ei ole tiliä tässä järjestelmässä, ota yhteyttä järjestelmänvalvojaan saadaksesi lisätietoja!',
    ],
    'forgot_password' => [
        'title' => 'Unohtunut salasana',
        'message' => '<p>Oletko unohtanut salasanasi?</p><p>Anna sähköpostitilisi. Järjestelmä lähettää sinulle sähköpostin, jossa on aktiivinen linkki salasanan nollaamiseen.</p>',
        'submit' => 'Lähetä',
    ],
    'reset' => [
        'new_password' => 'Uusi salasana',
        'password_confirmation' => 'Vahvista uusi salasana',
        'email' => 'Sähköposti',
        'title' => 'Nollaa salasanasi',
        'update' => 'Päivitä',
        'wrong_token' => 'Tämä linkki on virheellinen tai vanhentunut. Yritä käyttää nollauslomaketta uudelleen.',
        'user_not_found' => 'Tätä käyttäjänimeä ei ole olemassa.',
        'success' => 'Salasanan nollaus onnistui!',
        'fail' => 'Tunnus on virheellinen, salasanan nollauslinkki on vanhentunut!',
        'reset' => [
            'title' => 'Salasanan nollaussähköposti',
        ],
        'send' => [
            'success' => 'Sähköposti lähetettiin sähköpostitilillesi. Tarkista se ja suorita tämä toiminto.',
            'fail' => 'Sähköpostia ei voi lähettää tällä hetkellä. Yritä myöhemmin uudelleen.',
        ],
        'new-password' => 'Uusi salasana',
        'placeholder' => [
            'new_password' => 'Syötä uusi salasanasi',
            'new_password_confirmation' => 'Vahvista uusi salasanasi',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'Salasanan nollaussähköposti',
        ],
    ],
    'password_confirmation' => 'Salasanan vahvistus',
    'failed' => 'Epäonnistui',
    'throttle' => 'Rajoitus',
    'not_member' => 'Etkö ole vielä jäsen?',
    'register_now' => 'Rekisteröidy nyt',
    'lost_your_password' => 'Unohditko salasanasi?',
    'login_title' => 'Ylläpitäjä',
    'login_via_social' => 'Kirjaudu sisään sosiaalisten verkostojen kautta',
    'back_to_login' => 'Takaisin kirjautumissivulle',
    'sign_in_below' => 'Kirjaudu sisään alla',
    'languages' => 'Kielet',
    'reset_password' => 'Nollaa salasana',
    'deactivated_message' => 'Tilisi on poistettu käytöstä. Ota yhteyttä järjestelmänvalvojaan.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL sähköpostikonfiguraatio',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Nollaa salasana',
                    'description' => 'Lähetä käyttäjälle sähköposti salasanan nollauksen pyytämisen yhteydessä',
                    'subject' => 'Nollaa salasana',
                    'reset_link' => 'Salasanan nollauslinkki',
                    'email_title' => 'Salasanan nollausohjeet',
                    'email_message' => 'Saat tämän sähköpostin, koska saimme tilillesi salasanan nollauspyynnön.',
                    'button_text' => 'Nollaa salasana',
                    'trouble_text' => 'Jos sinulla on vaikeuksia napsauttaa "Nollaa salasana" -painiketta, kopioi ja liitä alla oleva URL-osoite verkkoselaimesi: <a href=":reset_link">:reset_link</a> ja liitä se selaimeesi. Jos et pyytänyt salasanan nollausta, ohita tämä viesti tai ota meihin yhteyttä, jos sinulla on kysyttävää.',
                ],
            ],
        ],
    ],
];
