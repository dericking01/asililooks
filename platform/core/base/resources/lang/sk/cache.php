<?php

return [
    'cache_management' => 'Správa vyrovnávacej pamäte',
    'cache_management_description' => 'Vyčistite vyrovnávaciu pamäť, aby bola vaša stránka aktuálna.',
    'cache_commands' => 'Príkazy na vyčistenie vyrovnávacej pamäte',
    'current_size' => 'Aktuálna veľkosť',
    'clear_button' => 'Vyčistiť',
    'refresh_button' => 'Obnoviť',
    'cache_size_warning' => 'Veľkosť vyrovnávacej pamäte vášho CMS je pomerne veľká (>50MB). Jej vyčistenie môže zlepšiť výkon systému.',
    'footer_note' => 'Vyčistite vyrovnávaciu pamäť po vykonaní zmien na vašej stránke, aby sa zobrazovali správne.',
    'type' => 'Typ',
    'description' => 'Popis',
    'action' => 'Akcia',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Vyčistiť všetku CMS vyrovnávaciu pamäť',
            'description' => 'Vyčistiť CMS vyrovnávaciu pamäť: databázovú vyrovnávaciu pamäť, statické bloky... Spustite tento príkaz, keď nevidíte zmeny po aktualizácii údajov.',
            'success_msg' => 'Vyrovnávacia pamäť vyčistená',
        ],
        'refresh_compiled_views' => [
            'title' => 'Obnoviť skompilované zobrazenia',
            'description' => 'Vyčistiť skompilované zobrazenia, aby boli zobrazenia aktuálne.',
            'success_msg' => 'Vyrovnávacia pamäť zobrazení obnovená',
        ],
        'clear_config_cache' => [
            'title' => 'Vyčistiť vyrovnávaciu pamäť konfigurácie',
            'description' => 'Možno budete musieť obnoviť vyrovnávaciu pamäť konfigurácie, keď niečo zmeníte v produkčnom prostredí.',
            'success_msg' => 'Vyrovnávacia pamäť konfigurácie vyčistená',
        ],
        'clear_route_cache' => [
            'title' => 'Vyčistiť vyrovnávaciu pamäť trás',
            'description' => 'Vyčistiť vyrovnávaciu pamäť smerovania.',
            'success_msg' => 'Vyrovnávacia pamäť trás bola vyčistená',
        ],
        'clear_log' => [
            'title' => 'Vyčistiť denník',
            'description' => 'Vyčistiť súbory systémového denníka',
            'success_msg' => 'Systémový denník bol vyčistený',
        ],
    ],
    'optimization' => [
        'title' => 'Optimalizácia výkonu',
        'optimize' => [
            'title' => 'Optimalizovať výkon stránky',
            'description' => 'Uložiť do vyrovnávacej pamäte konfiguráciu, trasy a zobrazenia pre rýchlejšie načítanie.',
            'button' => 'Optimalizovať',
            'success_msg' => 'Optimalizácia úspešne dokončená',
        ],
        'clear' => [
            'title' => 'Vyčistiť vyrovnávaciu pamäť optimalizácie',
            'description' => 'Odstrániť vyrovnávaciu pamäť optimalizácie, aby boli povolené zmeny konfigurácie.',
            'button' => 'Vyčistiť',
            'success_msg' => 'Vyrovnávacia pamäť optimalizácie úspešne vyčistená',
        ],
        'messages' => [
            'config_cached' => 'Konfigurácia uložená vo vyrovnávacej pamäti',
            'routes_cleared' => 'Trasy vyčistené (príkazový riadok vyžadovaný pre uloženie do vyrovnávacej pamäte)',
            'views_compiled' => 'Zobrazenia skompilované',
            'framework_cache_cleared' => 'Vyrovnávacia pamäť frameworku vyčistená',
            'optimization_completed' => 'Optimalizácia dokončená: :details',
            'optimization_failed' => 'Optimalizácia zlyhala: :error',
            'clear_failed' => 'Vyčistenie optimalizácie zlyhalo: :error',
        ],
    ],
];
