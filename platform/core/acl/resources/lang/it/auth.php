<?php

return [
    'login' => [
        'username' => 'Email/Nome utente',
        'email' => 'Email',
        'password' => 'Password',
        'title' => 'Login utente',
        'remember' => 'Ricordami?',
        'login' => 'Accedi',
        'placeholder' => [
            'username' => 'Inserisci il tuo nome utente o indirizzo email',
            'email' => 'Inserisci il tuo indirizzo email',
            'password' => 'Inserisci la tua password',
        ],
        'success' => 'Accesso riuscito!',
        'fail' => 'Nome utente o password errati.',
        'not_active' => 'Il tuo account non è ancora stato attivato!',
        'banned' => 'Questo account è stato bannato.',
        'logout_success' => 'Disconnessione riuscita!',
        'dont_have_account' => 'Non hai un account su questo sistema, contatta l\'amministratore per maggiori informazioni!',
    ],
    'forgot_password' => [
        'title' => 'Password dimenticata',
        'message' => '<p>Hai dimenticato la tua password?</p><p>Inserisci il tuo account email. Il sistema invierà un\'email con un link attivo per reimpostare la tua password.</p>',
        'submit' => 'Invia',
    ],
    'reset' => [
        'new_password' => 'Nuova password',
        'password_confirmation' => 'Conferma nuova password',
        'email' => 'Email',
        'title' => 'Reimposta la tua password',
        'update' => 'Aggiorna',
        'wrong_token' => 'Questo link non è valido o è scaduto. Prova a utilizzare di nuovo il modulo di reimpostazione.',
        'user_not_found' => 'Questo nome utente non esiste.',
        'success' => 'Password reimpostata con successo!',
        'fail' => 'Il token non è valido, il link di reimpostazione password è scaduto!',
        'reset' => [
            'title' => 'Email reimpostazione password',
        ],
        'send' => [
            'success' => 'Un\'email è stata inviata al tuo account email. Controlla e completa questa azione.',
            'fail' => 'Non è possibile inviare l\'email in questo momento. Riprova più tardi.',
        ],
        'new-password' => 'Nuova password',
        'placeholder' => [
            'new_password' => 'Inserisci la tua nuova password',
            'new_password_confirmation' => 'Conferma la tua nuova password',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'Email reimpostazione password',
        ],
    ],
    'password_confirmation' => 'Conferma password',
    'failed' => 'Fallito',
    'throttle' => 'Limitazione',
    'not_member' => 'Non sei ancora un membro?',
    'register_now' => 'Registrati ora',
    'lost_your_password' => 'Hai perso la tua password?',
    'login_title' => 'Amministratore',
    'login_via_social' => 'Accedi con i social network',
    'back_to_login' => 'Torna alla pagina di login',
    'sign_in_below' => 'Accedi qui sotto',
    'languages' => 'Lingue',
    'reset_password' => 'Reimposta password',
    'deactivated_message' => 'Il tuo account è stato disattivato. Contatta l\'amministratore.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'Configurazione email ACL',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Reimposta password',
                    'description' => 'Invia email all\'utente quando richiede la reimpostazione della password',
                    'subject' => 'Reimposta password',
                    'reset_link' => 'Link di reimpostazione password',
                    'email_title' => 'Istruzioni per la reimpostazione della password',
                    'email_message' => 'Stai ricevendo questa email perché abbiamo ricevuto una richiesta di reimpostazione password per il tuo account.',
                    'button_text' => 'Reimposta password',
                    'trouble_text' => 'Se hai problemi a fare clic sul pulsante "Reimposta password", copia e incolla l\'URL qui sotto nel tuo browser web: <a href=":reset_link">:reset_link</a> e incollalo nel tuo browser. Se non hai richiesto una reimpostazione della password, ignora questo messaggio o contattaci se hai domande.',
                ],
            ],
        ],
    ],
];
