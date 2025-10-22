<?php

return [
    'login' => [
        'username' => 'Email/Nazwa użytkownika',
        'email' => 'Email',
        'password' => 'Hasło',
        'title' => 'Logowanie użytkownika',
        'remember' => 'Zapamiętaj mnie?',
        'login' => 'Zaloguj się',
        'placeholder' => [
            'username' => 'Wprowadź swoją nazwę użytkownika lub adres email',
            'email' => 'Wprowadź swój adres email',
            'password' => 'Wprowadź swoje hasło',
        ],
        'success' => 'Logowanie pomyślne!',
        'fail' => 'Nieprawidłowa nazwa użytkownika lub hasło.',
        'not_active' => 'Twoje konto nie zostało jeszcze aktywowane!',
        'banned' => 'To konto zostało zbanowane.',
        'logout_success' => 'Wylogowanie pomyślne!',
        'dont_have_account' => 'Nie masz konta w tym systemie, skontaktuj się z administratorem po więcej informacji!',
    ],
    'forgot_password' => [
        'title' => 'Zapomniałeś hasła',
        'message' => '<p>Czy zapomniałeś hasła?</p><p>Wprowadź swój adres email. System wyśle email z aktywnym linkiem do zresetowania hasła.</p>',
        'submit' => 'Wyślij',
    ],
    'reset' => [
        'new_password' => 'Nowe hasło',
        'password_confirmation' => 'Potwierdź nowe hasło',
        'email' => 'Email',
        'title' => 'Zresetuj swoje hasło',
        'update' => 'Aktualizuj',
        'wrong_token' => 'Ten link jest nieprawidłowy lub wygasł. Spróbuj ponownie użyć formularza resetowania.',
        'user_not_found' => 'Ta nazwa użytkownika nie istnieje.',
        'success' => 'Hasło zostało pomyślnie zresetowane!',
        'fail' => 'Token jest nieprawidłowy, link do resetowania hasła wygasł!',
        'reset' => [
            'title' => 'Email resetowania hasła',
        ],
        'send' => [
            'success' => 'Email został wysłany na Twoje konto email. Sprawdź i dokończ tę czynność.',
            'fail' => 'Nie można wysłać emaila w tej chwili. Spróbuj ponownie później.',
        ],
        'new-password' => 'Nowe hasło',
        'placeholder' => [
            'new_password' => 'Wprowadź swoje nowe hasło',
            'new_password_confirmation' => 'Potwierdź swoje nowe hasło',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'Email resetowania hasła',
        ],
    ],
    'password_confirmation' => 'Potwierdzenie hasła',
    'failed' => 'Niepowodzenie',
    'throttle' => 'Ograniczenie',
    'not_member' => 'Nie jesteś jeszcze członkiem?',
    'register_now' => 'Zarejestruj się teraz',
    'lost_your_password' => 'Zgubiłeś hasło?',
    'login_title' => 'Administrator',
    'login_via_social' => 'Zaloguj się przez sieci społecznościowe',
    'back_to_login' => 'Powrót do strony logowania',
    'sign_in_below' => 'Zaloguj się poniżej',
    'languages' => 'Języki',
    'reset_password' => 'Zresetuj hasło',
    'deactivated_message' => 'Twoje konto zostało dezaktywowane. Skontaktuj się z administratorem.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'Konfiguracja email ACL',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Zresetuj hasło',
                    'description' => 'Wyślij email do użytkownika podczas żądania resetowania hasła',
                    'subject' => 'Zresetuj hasło',
                    'reset_link' => 'Link do resetowania hasła',
                    'email_title' => 'Instrukcje resetowania hasła',
                    'email_message' => 'Otrzymujesz ten email, ponieważ otrzymaliśmy prośbę o zresetowanie hasła do Twojego konta.',
                    'button_text' => 'Zresetuj hasło',
                    'trouble_text' => 'Jeśli masz problem z kliknięciem przycisku "Zresetuj hasło", skopiuj i wklej poniższy adres URL do swojej przeglądarki: <a href=":reset_link">:reset_link</a> i wklej go do przeglądarki. Jeśli nie prosiłeś o zresetowanie hasła, zignoruj tę wiadomość lub skontaktuj się z nami, jeśli masz pytania.',
                ],
            ],
        ],
    ],
];
