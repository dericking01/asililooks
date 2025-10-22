<?php

return [
    'cache_management' => 'Vahemälu haldus',
    'cache_management_description' => 'Tühjendage vahemälu, et teie sait oleks ajakohane.',
    'cache_commands' => 'Vahemälu tühjendamise käsud',
    'current_size' => 'Praegune suurus',
    'clear_button' => 'Tühjenda',
    'refresh_button' => 'Värskenda',
    'cache_size_warning' => 'Teie CMS-i vahemälu suurus on üsna suur (>50MB). Selle tühjendamine võib parandada süsteemi jõudlust.',
    'footer_note' => 'Tühjendage vahemälu pärast oma saidil muudatuste tegemist, et tagada nende korrektne kuvamine.',
    'type' => 'Tüüp',
    'description' => 'Kirjeldus',
    'action' => 'Toiming',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Tühjenda kogu CMS-i vahemälu',
            'description' => 'Tühjendage CMS-i vahemälu: andmebaasi vahemälu, staatilised plokid... Käivitage see käsk, kui te ei näe muudatusi pärast andmete uuendamist.',
            'success_msg' => 'Vahemälu tühjendatud',
        ],
        'refresh_compiled_views' => [
            'title' => 'Värskenda kompileeritud vaateid',
            'description' => 'Tühjendage kompileeritud vaated, et vaated oleksid ajakohased.',
            'success_msg' => 'Vaadete vahemälu värskendatud',
        ],
        'clear_config_cache' => [
            'title' => 'Tühjenda konfiguratsioonivahemälu',
            'description' => 'Võib-olla peate konfiguratsioonivahemälu värskendama, kui muudate midagi tootmiskeskkonnas.',
            'success_msg' => 'Konfiguratsioonivahemälu tühjendatud',
        ],
        'clear_route_cache' => [
            'title' => 'Tühjenda marsruutide vahemälu',
            'description' => 'Tühjendage marsruutide vahemälu.',
            'success_msg' => 'Marsruutide vahemälu on tühjendatud',
        ],
        'clear_log' => [
            'title' => 'Tühjenda logi',
            'description' => 'Tühjendage süsteemi logifailid',
            'success_msg' => 'Süsteemilogi on tühjendatud',
        ],
    ],
    'optimization' => [
        'title' => 'Jõudluse optimeerimine',
        'optimize' => [
            'title' => 'Optimeeri saidi jõudlust',
            'description' => 'Vahemälusta konfiguratsioon, marsruudid ja vaated kiirema laadimiskiiruse saavutamiseks.',
            'button' => 'Optimeeri',
            'success_msg' => 'Optimeerimine lõpetatud edukalt',
        ],
        'clear' => [
            'title' => 'Tühjenda optimeerimise vahemälu',
            'description' => 'Eemaldage optimeerimise vahemälu, et võimaldada konfiguratsiooni muudatusi.',
            'button' => 'Tühjenda',
            'success_msg' => 'Optimeerimise vahemälu edukalt tühjendatud',
        ],
        'messages' => [
            'config_cached' => 'Konfiguratsioon vahemälus',
            'routes_cleared' => 'Marsruudid tühjendatud (käsurea kaudu vahemälustamiseks)',
            'views_compiled' => 'Vaated kompileeritud',
            'framework_cache_cleared' => 'Raamistiku vahemälu tühjendatud',
            'optimization_completed' => 'Optimeerimine lõpetatud: :details',
            'optimization_failed' => 'Optimeerimine ebaõnnestus: :error',
            'clear_failed' => 'Optimeerimise tühjendamine ebaõnnestus: :error',
        ],
    ],
];
