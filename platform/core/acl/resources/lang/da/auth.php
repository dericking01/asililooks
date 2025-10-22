<?php

return [
    'login' => [
        'username' => 'E-mail/Brugernavn',
        'email' => 'E-mail',
        'password' => 'Adgangskode',
        'title' => 'Brugerlogin',
        'remember' => 'Husk mig?',
        'login' => 'Log ind',
        'placeholder' => [
            'username' => 'Indtast dit brugernavn eller e-mailadresse',
            'email' => 'Indtast din e-mailadresse',
            'password' => 'Indtast din adgangskode',
        ],
        'success' => 'Login lykkedes!',
        'fail' => 'Forkert brugernavn eller adgangskode.',
        'not_active' => 'Din konto er endnu ikke blevet aktiveret!',
        'banned' => 'Denne konto er blokeret.',
        'logout_success' => 'Logud lykkedes!',
        'dont_have_account' => 'Du har ikke en konto på dette system, kontakt venligst administrator for mere information!',
    ],
    'forgot_password' => [
        'title' => 'Glemt adgangskode',
        'message' => '<p>Har du glemt din adgangskode?</p><p>Indtast venligst din e-mailkonto. Systemet vil sende en e-mail med et aktivt link til at nulstille din adgangskode.</p>',
        'submit' => 'Send',
    ],
    'reset' => [
        'new_password' => 'Ny adgangskode',
        'password_confirmation' => 'Bekræft ny adgangskode',
        'email' => 'E-mail',
        'title' => 'Nulstil din adgangskode',
        'update' => 'Opdater',
        'wrong_token' => 'Dette link er ugyldigt eller udløbet. Prøv venligst at bruge nulstillingsformularen igen.',
        'user_not_found' => 'Dette brugernavn eksisterer ikke.',
        'success' => 'Adgangskode nulstillet med succes!',
        'fail' => 'Token er ugyldig, linket til nulstilling af adgangskode er udløbet!',
        'reset' => [
            'title' => 'E-mail til nulstilling af adgangskode',
        ],
        'send' => [
            'success' => 'En e-mail blev sendt til din e-mailkonto. Tjek venligst og fuldfør denne handling.',
            'fail' => 'Kan ikke sende e-mail på dette tidspunkt. Prøv venligst igen senere.',
        ],
        'new-password' => 'Ny adgangskode',
        'placeholder' => [
            'new_password' => 'Indtast din nye adgangskode',
            'new_password_confirmation' => 'Bekræft din nye adgangskode',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'E-mail til nulstilling af adgangskode',
        ],
    ],
    'password_confirmation' => 'Bekræftelse af adgangskode',
    'failed' => 'Mislykkedes',
    'throttle' => 'Begrænsning',
    'not_member' => 'Ikke medlem endnu?',
    'register_now' => 'Tilmeld dig nu',
    'lost_your_password' => 'Mistet din adgangskode?',
    'login_title' => 'Administrator',
    'login_via_social' => 'Log ind med sociale netværk',
    'back_to_login' => 'Tilbage til login side',
    'sign_in_below' => 'Log ind nedenfor',
    'languages' => 'Sprog',
    'reset_password' => 'Nulstil adgangskode',
    'deactivated_message' => 'Din konto er blevet deaktiveret. Kontakt venligst administratoren.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL e-mail konfiguration',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Nulstil adgangskode',
                    'description' => 'Send e-mail til bruger ved anmodning om nulstilling af adgangskode',
                    'subject' => 'Nulstil adgangskode',
                    'reset_link' => 'Link til nulstilling af adgangskode',
                    'email_title' => 'Instruktion til nulstilling af adgangskode',
                    'email_message' => 'Du modtager denne e-mail, fordi vi har modtaget en anmodning om nulstilling af adgangskode til din konto.',
                    'button_text' => 'Nulstil adgangskode',
                    'trouble_text' => 'Hvis du har problemer med at klikke på knappen "Nulstil adgangskode", skal du kopiere og indsætte URL\'en nedenfor i din webbrowser: <a href=":reset_link">:reset_link</a> og indsætte den i din browser. Hvis du ikke har anmodet om en nulstilling af adgangskoden, skal du ignorere denne besked eller kontakte os, hvis du har spørgsmål.',
                ],
            ],
        ],
    ],
];
