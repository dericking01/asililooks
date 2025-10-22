<?php

return [
    'login' => [
        'username' => 'E-pasts/Lietotājvārds',
        'email' => 'E-pasts',
        'password' => 'Parole',
        'title' => 'Lietotāja pieteikšanās',
        'remember' => 'Atcerēties mani?',
        'login' => 'Pierakstīties',
        'placeholder' => [
            'username' => 'Ievadiet savu lietotājvārdu vai e-pasta adresi',
            'email' => 'Ievadiet savu e-pasta adresi',
            'password' => 'Ievadiet savu paroli',
        ],
        'success' => 'Pieteikšanās veiksmīga!',
        'fail' => 'Nepareizs lietotājvārds vai parole.',
        'not_active' => 'Jūsu konts vēl nav aktivizēts!',
        'banned' => 'Šis konts ir bloķēts.',
        'logout_success' => 'Izrakstīšanās veiksmīga!',
        'dont_have_account' => 'Jums nav konta šajā sistēmā, lūdzu, sazinieties ar administratoru, lai iegūtu papildinformāciju!',
    ],
    'forgot_password' => [
        'title' => 'Aizmirsta parole',
        'message' => '<p>Vai esat aizmirsis savu paroli?</p><p>Lūdzu, ievadiet savu e-pasta kontu. Sistēma nosūtīs e-pastu ar aktīvu saiti paroles atiestatīšanai.</p>',
        'submit' => 'Iesniegt',
    ],
    'reset' => [
        'new_password' => 'Jauna parole',
        'password_confirmation' => 'Apstipriniet jauno paroli',
        'email' => 'E-pasts',
        'title' => 'Atiestatīt paroli',
        'update' => 'Atjaunināt',
        'wrong_token' => 'Šī saite nav derīga vai ir beigusies. Lūdzu, mēģiniet vēlreiz izmantot atiestatīšanas formu.',
        'user_not_found' => 'Šis lietotājvārds neeksistē.',
        'success' => 'Parole veiksmīgi atiestatīta!',
        'fail' => 'Žetons nav derīgs, paroles atiestatīšanas saite ir beigusies!',
        'reset' => [
            'title' => 'E-pasta paroles atiestatīšana',
        ],
        'send' => [
            'success' => 'E-pasts tika nosūtīts uz jūsu e-pasta kontu. Lūdzu, pārbaudiet un pabeidziet šo darbību.',
            'fail' => 'Pašlaik nevar nosūtīt e-pastu. Lūdzu, mēģiniet vēlāk.',
        ],
        'new-password' => 'Jauna parole',
        'placeholder' => [
            'new_password' => 'Ievadiet savu jauno paroli',
            'new_password_confirmation' => 'Apstipriniet savu jauno paroli',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'E-pasta paroles atiestatīšana',
        ],
    ],
    'password_confirmation' => 'Paroles apstiprinājums',
    'failed' => 'Neizdevās',
    'throttle' => 'Ierobežojums',
    'not_member' => 'Vēl neesat biedrs?',
    'register_now' => 'Reģistrējieties tagad',
    'lost_your_password' => 'Zaudējāt paroli?',
    'login_title' => 'Administrators',
    'login_via_social' => 'Pierakstīties ar sociālajiem tīkliem',
    'back_to_login' => 'Atpakaļ uz pieteikšanās lapu',
    'sign_in_below' => 'Pierakstieties zemāk',
    'languages' => 'Valodas',
    'reset_password' => 'Atiestatīt paroli',
    'deactivated_message' => 'Jūsu konts ir deaktivizēts. Lūdzu, sazinieties ar administratoru.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL e-pasta konfigurācija',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Atiestatīt paroli',
                    'description' => 'Nosūtīt e-pastu lietotājam, pieprasot paroles atiestatīšanu',
                    'subject' => 'Atiestatīt paroli',
                    'reset_link' => 'Paroles atiestatīšanas saite',
                    'email_title' => 'Paroles atiestatīšanas instrukcijas',
                    'email_message' => 'Jūs saņemat šo e-pastu, jo saņēmām paroles atiestatīšanas pieprasījumu jūsu kontam.',
                    'button_text' => 'Atiestatīt paroli',
                    'trouble_text' => 'Ja jums ir problēmas ar pogas "Atiestatīt paroli" klikšķināšanu, kopējiet un ielīmējiet zemāk esošo URL sava tīmekļa pārlūkā: <a href=":reset_link">:reset_link</a> un ielīmējiet to savā pārlūkā. Ja jūs nepieprasījāt paroles atiestatīšanu, lūdzu, ignorējiet šo ziņojumu vai sazinieties ar mums, ja jums ir jautājumi.',
                ],
            ],
        ],
    ],
];
