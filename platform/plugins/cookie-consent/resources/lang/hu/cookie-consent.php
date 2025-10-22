<?php

return [
    'theme_options' => [
        'name' => 'Cookie beleegyezés',
        'description' => 'Cookie beleegyezés beállításai',
        'enable' => 'Cookie beleegyezés engedélyezése',
        'message' => 'Üzenet',
        'button_text' => 'Gomb szövege',
        'max_width' => 'Maximális szélesség (px)',
        'background_color' => 'Háttérszín',
        'text_color' => 'Szöveg színe',
        'learn_more_url' => 'További információ URL',
        'learn_more_text' => 'További információ szövege',
        'style' => 'Stílus',
        'full_width' => 'Teljes szélesség',
        'minimal' => 'Minimális',
        'show_reject_button' => 'Elutasítás gomb megjelenítése',
        'show_reject_button_helper' => 'Ha engedélyezve van, a felhasználók látni fognak egy gombot az összes cookie elutasításához.',
        'show_customize_button' => 'Beállítások testreszabása gomb megjelenítése',
        'show_customize_button_helper' => 'Ha engedélyezve van, a felhasználók látni fognak egy gombot a cookie beállításaik testreszabásához, így GDPR-kompatibilis lesz.',
    ],
    'message' => 'Az oldalon szerzett élménye javulni fog a cookie-k engedélyezésével.',
    'button_text' => 'Cookie-k elfogadása',
    'reject_text' => 'Elutasítás',
    'customize_text' => 'Beállítások testreszabása',
    'save_text' => 'Beállítások mentése',
    'cookie_categories' => [
        'essential' => [
            'name' => 'Alapvető',
            'description' => 'Ezek a cookie-k elengedhetetlenek a weboldal megfelelő működéséhez.',
        ],
        'analytics' => [
            'name' => 'Analitika',
            'description' => 'Ezek a cookie-k segítenek megérteni, hogyan lépnek interakcióba a látogatók a weboldallal.',
        ],
        'marketing' => [
            'name' => 'Marketing',
            'description' => 'Ezek a cookie-k személyre szabott hirdetések megjelenítésére szolgálnak.',
        ],
    ],
];
