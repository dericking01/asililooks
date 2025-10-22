<?php

return [
    'login' => [
        'username' => 'E-post/Brukernavn',
        'email' => 'E-post',
        'password' => 'Passord',
        'title' => 'Brukerinnlogging',
        'remember' => 'Husk meg?',
        'login' => 'Logg inn',
        'placeholder' => [
            'username' => 'Skriv inn brukernavnet eller e-postadressen din',
            'email' => 'Skriv inn e-postadressen din',
            'password' => 'Skriv inn passordet ditt',
        ],
        'success' => 'Innlogging vellykket!',
        'fail' => 'Feil brukernavn eller passord.',
        'not_active' => 'Kontoen din er ikke aktivert ennå!',
        'banned' => 'Denne kontoen er utestengt.',
        'logout_success' => 'Utlogging vellykket!',
        'dont_have_account' => 'Du har ingen konto på dette systemet, vennligst kontakt administrator for mer informasjon!',
    ],
    'forgot_password' => [
        'title' => 'Glemt passord',
        'message' => '<p>Har du glemt passordet ditt?</p><p>Vennligst skriv inn e-postkontoen din. Systemet vil sende en e-post med aktiv lenke for å tilbakestille passordet ditt.</p>',
        'submit' => 'Send inn',
    ],
    'reset' => [
        'new_password' => 'Nytt passord',
        'password_confirmation' => 'Bekreft nytt passord',
        'email' => 'E-post',
        'title' => 'Tilbakestill passordet ditt',
        'update' => 'Oppdater',
        'wrong_token' => 'Denne lenken er ugyldig eller utløpt. Vennligst prøv å bruke tilbakestillingsskjemaet igjen.',
        'user_not_found' => 'Dette brukernavnet eksisterer ikke.',
        'success' => 'Passordet ble tilbakestilt!',
        'fail' => 'Token er ugyldig, lenken for tilbakestilling av passord har utløpt!',
        'reset' => [
            'title' => 'E-post tilbakestilling av passord',
        ],
        'send' => [
            'success' => 'En e-post ble sendt til e-postkontoen din. Vennligst sjekk og fullfør denne handlingen.',
            'fail' => 'Kan ikke sende e-post nå. Vennligst prøv igjen senere.',
        ],
        'new-password' => 'Nytt passord',
        'placeholder' => [
            'new_password' => 'Skriv inn ditt nye passord',
            'new_password_confirmation' => 'Bekreft ditt nye passord',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'E-post tilbakestilling av passord',
        ],
    ],
    'password_confirmation' => 'Passordbekreftelse',
    'failed' => 'Mislyktes',
    'throttle' => 'Begrensning',
    'not_member' => 'Ikke medlem ennå?',
    'register_now' => 'Registrer deg nå',
    'lost_your_password' => 'Mistet passordet ditt?',
    'login_title' => 'Administrator',
    'login_via_social' => 'Logg inn med sosiale nettverk',
    'back_to_login' => 'Tilbake til innloggingssiden',
    'sign_in_below' => 'Logg inn nedenfor',
    'languages' => 'Språk',
    'reset_password' => 'Tilbakestill passord',
    'deactivated_message' => 'Kontoen din har blitt deaktivert. Vennligst kontakt administratoren.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL e-postkonfigurasjon',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Tilbakestill passord',
                    'description' => 'Send e-post til bruker ved forespørsel om tilbakestilling av passord',
                    'subject' => 'Tilbakestill passord',
                    'reset_link' => 'Lenke for tilbakestilling av passord',
                    'email_title' => 'Instruksjon for tilbakestilling av passord',
                    'email_message' => 'Du mottar denne e-posten fordi vi mottok en forespørsel om tilbakestilling av passord for kontoen din.',
                    'button_text' => 'Tilbakestill passord',
                    'trouble_text' => 'Hvis du har problemer med å klikke på "Tilbakestill passord"-knappen, kopier og lim inn URL-en nedenfor i nettleseren din: <a href=":reset_link">:reset_link</a> og lim den inn i nettleseren din. Hvis du ikke ba om tilbakestilling av passord, vennligst ignorer denne meldingen eller kontakt oss hvis du har spørsmål.',
                ],
            ],
        ],
    ],
];
