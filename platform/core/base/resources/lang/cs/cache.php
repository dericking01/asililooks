<?php

return [
    'cache_management' => 'Správa mezipaměti',
    'cache_management_description' => 'Vymazání mezipaměti pro aktualizaci vašeho webu.',
    'cache_commands' => 'Příkazy pro vymazání mezipaměti',
    'current_size' => 'Aktuální velikost',
    'clear_button' => 'Vymazat',
    'refresh_button' => 'Obnovit',
    'cache_size_warning' => 'Velikost mezipaměti CMS je poměrně velká (>50MB). Její vymazání může zlepšit výkon systému.',
    'footer_note' => 'Vymazejte mezipaměť po provedení změn na vašem webu, abyste zajistili jejich správné zobrazení.',
    'type' => 'Typ',
    'description' => 'Popis',
    'action' => 'Akce',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Vymazat veškerou mezipaměť CMS',
            'description' => 'Vymazat mezipaměť CMS: databázovou mezipaměť, statické bloky... Spusťte tento příkaz, když po aktualizaci dat nevidíte změny.',
            'success_msg' => 'Mezipaměť vymazána',
        ],
        'refresh_compiled_views' => [
            'title' => 'Obnovit zkompilované pohledy',
            'description' => 'Vymazat zkompilované pohledy pro jejich aktualizaci.',
            'success_msg' => 'Mezipaměť pohledů obnovena',
        ],
        'clear_config_cache' => [
            'title' => 'Vymazat mezipaměť konfigurace',
            'description' => 'Možná budete muset obnovit mezipaměť konfigurace, když změníte něco v produkčním prostředí.',
            'success_msg' => 'Mezipaměť konfigurace vymazána',
        ],
        'clear_route_cache' => [
            'title' => 'Vymazat mezipaměť tras',
            'description' => 'Vymazat mezipaměť směrování.',
            'success_msg' => 'Mezipaměť tras byla vymazána',
        ],
        'clear_log' => [
            'title' => 'Vymazat protokol',
            'description' => 'Vymazat soubory systémového protokolu',
            'success_msg' => 'Systémový protokol byl vymazán',
        ],
    ],
    'optimization' => [
        'title' => 'Optimalizace výkonu',
        'optimize' => [
            'title' => 'Optimalizovat výkon webu',
            'description' => 'Uložit do mezipaměti konfiguraci, trasy a pohledy pro rychlejší načítání.',
            'button' => 'Optimalizovat',
            'success_msg' => 'Optimalizace úspěšně dokončena',
        ],
        'clear' => [
            'title' => 'Vymazat mezipaměť optimalizace',
            'description' => 'Odstranit mezipaměť optimalizace pro povolení změn konfigurace.',
            'button' => 'Vymazat',
            'success_msg' => 'Mezipaměť optimalizace úspěšně vymazána',
        ],
        'messages' => [
            'config_cached' => 'Konfigurace uložena do mezipaměti',
            'routes_cleared' => 'Trasy vymazány (pro uložení do mezipaměti je nutný příkazový řádek)',
            'views_compiled' => 'Pohledy zkompilovány',
            'framework_cache_cleared' => 'Mezipaměť frameworku vymazána',
            'optimization_completed' => 'Optimalizace dokončena: :details',
            'optimization_failed' => 'Optimalizace selhala: :error',
            'clear_failed' => 'Vymazání optimalizace selhalo: :error',
        ],
    ],
];
