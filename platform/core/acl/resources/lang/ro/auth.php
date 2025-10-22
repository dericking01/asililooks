<?php

return [
    'login' => [
        'username' => 'Email/Nume utilizator',
        'email' => 'Email',
        'password' => 'Parolă',
        'title' => 'Autentificare utilizator',
        'remember' => 'Ține-mă minte?',
        'login' => 'Autentificare',
        'placeholder' => [
            'username' => 'Introduceți numele de utilizator sau adresa de email',
            'email' => 'Introduceți adresa de email',
            'password' => 'Introduceți parola',
        ],
        'success' => 'Autentificare reușită!',
        'fail' => 'Nume utilizator sau parolă greșite.',
        'not_active' => 'Contul dvs. nu a fost activat încă!',
        'banned' => 'Acest cont este blocat.',
        'logout_success' => 'Deconectare reușită!',
        'dont_have_account' => 'Nu aveți cont în acest sistem, vă rugăm să contactați administratorul pentru mai multe informații!',
    ],
    'forgot_password' => [
        'title' => 'Parolă uitată',
        'message' => '<p>Ați uitat parola?</p><p>Vă rugăm să introduceți contul de email. Sistemul va trimite un email cu un link activ pentru resetarea parolei.</p>',
        'submit' => 'Trimite',
    ],
    'reset' => [
        'new_password' => 'Parolă nouă',
        'password_confirmation' => 'Confirmă parola nouă',
        'email' => 'Email',
        'title' => 'Resetează parola',
        'update' => 'Actualizează',
        'wrong_token' => 'Acest link este invalid sau a expirat. Vă rugăm să încercați din nou formularul de resetare.',
        'user_not_found' => 'Acest nume de utilizator nu există.',
        'success' => 'Parolă resetată cu succes!',
        'fail' => 'Token-ul este invalid, linkul de resetare a parolei a expirat!',
        'reset' => [
            'title' => 'Email resetare parolă',
        ],
        'send' => [
            'success' => 'Un email a fost trimis la contul dvs. de email. Vă rugăm să verificați și să completați această acțiune.',
            'fail' => 'Nu se poate trimite email în acest moment. Vă rugăm să încercați din nou mai târziu.',
        ],
        'new-password' => 'Parolă nouă',
        'placeholder' => [
            'new_password' => 'Introduceți parola nouă',
            'new_password_confirmation' => 'Confirmați parola nouă',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'Email resetare parolă',
        ],
    ],
    'password_confirmation' => 'Confirmare parolă',
    'failed' => 'Eșuat',
    'throttle' => 'Limitare',
    'not_member' => 'Nu ești încă membru?',
    'register_now' => 'Înregistrează-te acum',
    'lost_your_password' => 'Ai pierdut parola?',
    'login_title' => 'Administrator',
    'login_via_social' => 'Autentificare cu rețele sociale',
    'back_to_login' => 'Înapoi la pagina de autentificare',
    'sign_in_below' => 'Autentifică-te mai jos',
    'languages' => 'Limbi',
    'reset_password' => 'Resetează parola',
    'deactivated_message' => 'Contul dvs. a fost dezactivat. Vă rugăm să contactați administratorul.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'Configurare email ACL',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Resetează parola',
                    'description' => 'Trimite email utilizatorului la solicitarea resetării parolei',
                    'subject' => 'Resetează parola',
                    'reset_link' => 'Link resetare parolă',
                    'email_title' => 'Instrucțiuni resetare parolă',
                    'email_message' => 'Primiți acest email deoarece am primit o solicitare de resetare a parolei pentru contul dvs.',
                    'button_text' => 'Resetează parola',
                    'trouble_text' => 'Dacă aveți probleme cu apăsarea butonului "Resetează parola", copiați și lipiți URL-ul de mai jos în browserul dvs. web: <a href=":reset_link">:reset_link</a> și lipiți-l în browser. Dacă nu ați solicitat resetarea parolei, vă rugăm să ignorați acest mesaj sau să ne contactați dacă aveți întrebări.',
                ],
            ],
        ],
    ],
];
