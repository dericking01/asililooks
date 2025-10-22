<?php

return [
    'login' => [
        'username' => 'Email/Pangalan ng gumagamit',
        'email' => 'Email',
        'password' => 'Kontrasenyas',
        'title' => 'Login ng Gumagamit',
        'remember' => 'Tandaan ako?',
        'login' => 'Mag-sign in',
        'placeholder' => [
            'username' => 'Ilagay ang iyong pangalan ng gumagamit o email address',
            'email' => 'Ilagay ang iyong email address',
            'password' => 'Ilagay ang iyong kontrasenyas',
        ],
        'success' => 'Matagumpay na nag-login!',
        'fail' => 'Maling pangalan ng gumagamit o kontrasenyas.',
        'not_active' => 'Ang iyong account ay hindi pa na-activate!',
        'banned' => 'Ang account na ito ay ipinagbawal.',
        'logout_success' => 'Matagumpay na nag-logout!',
        'dont_have_account' => 'Wala kang account sa sistemang ito, mangyaring makipag-ugnayan sa administrator para sa karagdagang impormasyon!',
    ],
    'forgot_password' => [
        'title' => 'Nakalimutan ang Password',
        'message' => '<p>Nakalimutan mo ba ang iyong password?</p><p>Mangyaring ilagay ang iyong email account. Ang sistema ay magpapadala ng email na may aktibong link upang i-reset ang iyong password.</p>',
        'submit' => 'Isumite',
    ],
    'reset' => [
        'new_password' => 'Bagong kontrasenyas',
        'password_confirmation' => 'Kumpirmahin ang bagong kontrasenyas',
        'email' => 'Email',
        'title' => 'I-reset ang iyong kontrasenyas',
        'update' => 'I-update',
        'wrong_token' => 'Ang link na ito ay hindi wasto o nag-expire na. Mangyaring subukang gamitin muli ang reset form.',
        'user_not_found' => 'Ang pangalan ng gumagamit na ito ay hindi umiiral.',
        'success' => 'Matagumpay na na-reset ang kontrasenyas!',
        'fail' => 'Ang token ay hindi wasto, ang reset kontrasenyas link ay nag-expire na!',
        'reset' => [
            'title' => 'Email reset kontrasenyas',
        ],
        'send' => [
            'success' => 'Isang email ay naipadala sa iyong email account. Mangyaring suriin at kumpletuhin ang aksyon na ito.',
            'fail' => 'Hindi makapadala ng email sa ngayon. Mangyaring subukan muli mamaya.',
        ],
        'new-password' => 'Bagong kontrasenyas',
        'placeholder' => [
            'new_password' => 'Ilagay ang iyong bagong kontrasenyas',
            'new_password_confirmation' => 'Kumpirmahin ang iyong bagong kontrasenyas',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'Email reset kontrasenyas',
        ],
    ],
    'password_confirmation' => 'Pagkumpirma ng kontrasenyas',
    'failed' => 'Nabigo',
    'throttle' => 'Paghihigpit',
    'not_member' => 'Hindi ka pa miyembro?',
    'register_now' => 'Magrehistro ngayon',
    'lost_your_password' => 'Nawala ang iyong kontrasenyas?',
    'login_title' => 'Admin',
    'login_via_social' => 'Mag-login gamit ang social networks',
    'back_to_login' => 'Bumalik sa login page',
    'sign_in_below' => 'Mag-sign In sa Ibaba',
    'languages' => 'Mga Wika',
    'reset_password' => 'I-reset ang Kontrasenyas',
    'deactivated_message' => 'Ang iyong account ay na-deactivate. Mangyaring makipag-ugnayan sa administrator.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL email configuration',
            'templates' => [
                'password_reminder' => [
                    'title' => 'I-reset ang kontrasenyas',
                    'description' => 'Magpadala ng email sa user kapag humihiling ng reset kontrasenyas',
                    'subject' => 'I-reset ang Kontrasenyas',
                    'reset_link' => 'Reset kontrasenyas link',
                    'email_title' => 'Panuto sa Pag-reset ng Kontrasenyas',
                    'email_message' => 'Nakatanggap ka ng email na ito dahil nakatanggap kami ng kahilingan sa pag-reset ng kontrasenyas para sa iyong account.',
                    'button_text' => 'I-reset ang kontrasenyas',
                    'trouble_text' => 'Kung may problema ka sa pag-click sa "I-reset ang Kontrasenyas" button, kopyahin at i-paste ang URL sa ibaba sa iyong web browser: <a href=":reset_link">:reset_link</a> at i-paste ito sa iyong browser. Kung hindi ka humiling ng pag-reset ng kontrasenyas, mangyaring huwag pansinin ang mensaheng ito o makipag-ugnayan sa amin kung mayroon kang mga katanungan.',
                ],
            ],
        ],
    ],
];
