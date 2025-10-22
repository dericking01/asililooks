<?php

return [
    'login' => [
        'username' => 'E-post/Användarnamn',
        'email' => 'E-post',
        'password' => 'Lösenord',
        'title' => 'Användarinloggning',
        'remember' => 'Kom ihåg mig?',
        'login' => 'Logga in',
        'placeholder' => [
            'username' => 'Ange ditt användarnamn eller e-postadress',
            'email' => 'Ange din e-postadress',
            'password' => 'Ange ditt lösenord',
        ],
        'success' => 'Inloggning lyckades!',
        'fail' => 'Fel användarnamn eller lösenord.',
        'not_active' => 'Ditt konto har inte aktiverats ännu!',
        'banned' => 'Detta konto är blockerat.',
        'logout_success' => 'Utloggning lyckades!',
        'dont_have_account' => 'Du har inget konto i detta system, kontakta administratören för mer information!',
    ],
    'forgot_password' => [
        'title' => 'Glömt lösenord',
        'message' => '<p>Har du glömt ditt lösenord?</p><p>Vänligen ange ditt e-postkonto. Systemet kommer att skicka ett e-postmeddelande med en aktiv länk för att återställa ditt lösenord.</p>',
        'submit' => 'Skicka',
    ],
    'reset' => [
        'new_password' => 'Nytt lösenord',
        'password_confirmation' => 'Bekräfta nytt lösenord',
        'email' => 'E-post',
        'title' => 'Återställ ditt lösenord',
        'update' => 'Uppdatera',
        'wrong_token' => 'Denna länk är ogiltig eller har löpt ut. Försök använda återställningsformuläret igen.',
        'user_not_found' => 'Detta användarnamn finns inte.',
        'success' => 'Lösenordet har återställts!',
        'fail' => 'Token är ogiltig, länken för återställning av lösenord har löpt ut!',
        'reset' => [
            'title' => 'E-post för återställning av lösenord',
        ],
        'send' => [
            'success' => 'Ett e-postmeddelande har skickats till ditt e-postkonto. Vänligen kontrollera och slutför denna åtgärd.',
            'fail' => 'Kan inte skicka e-post just nu. Försök igen senare.',
        ],
        'new-password' => 'Nytt lösenord',
        'placeholder' => [
            'new_password' => 'Ange ditt nya lösenord',
            'new_password_confirmation' => 'Bekräfta ditt nya lösenord',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'E-post för återställning av lösenord',
        ],
    ],
    'password_confirmation' => 'Lösenordsbekräftelse',
    'failed' => 'Misslyckades',
    'throttle' => 'Begränsning',
    'not_member' => 'Inte medlem än?',
    'register_now' => 'Registrera dig nu',
    'lost_your_password' => 'Tappat ditt lösenord?',
    'login_title' => 'Administratör',
    'login_via_social' => 'Logga in med sociala nätverk',
    'back_to_login' => 'Tillbaka till inloggningssidan',
    'sign_in_below' => 'Logga in nedan',
    'languages' => 'Språk',
    'reset_password' => 'Återställ lösenord',
    'deactivated_message' => 'Ditt konto har inaktiverats. Vänligen kontakta administratören.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL e-postkonfiguration',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Återställ lösenord',
                    'description' => 'Skicka e-post till användare vid begäran om återställning av lösenord',
                    'subject' => 'Återställ lösenord',
                    'reset_link' => 'Länk för återställning av lösenord',
                    'email_title' => 'Instruktioner för återställning av lösenord',
                    'email_message' => 'Du får detta e-postmeddelande eftersom vi fick en begäran om återställning av lösenord för ditt konto.',
                    'button_text' => 'Återställ lösenord',
                    'trouble_text' => 'Om du har problem med att klicka på knappen "Återställ lösenord", kopiera och klistra in webbadressen nedan i din webbläsare: <a href=":reset_link">:reset_link</a> och klistra in den i din webbläsare. Om du inte begärde en återställning av lösenord, vänligen ignorera detta meddelande eller kontakta oss om du har frågor.',
                ],
            ],
        ],
    ],
];
