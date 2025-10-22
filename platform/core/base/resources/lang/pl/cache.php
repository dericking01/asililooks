<?php

return [
    'cache_management' => 'Zarządzanie pamięcią podręczną',
    'cache_management_description' => 'Wyczyść pamięć podręczną, aby zaktualizować swoją stronę.',
    'cache_commands' => 'Polecenia czyszczenia pamięci podręcznej',
    'current_size' => 'Aktualny rozmiar',
    'clear_button' => 'Wyczyść',
    'refresh_button' => 'Odśwież',
    'cache_size_warning' => 'Rozmiar pamięci podręcznej CMS jest dość duży (>50MB). Wyczyszczenie jej może poprawić wydajność systemu.',
    'footer_note' => 'Wyczyść pamięć podręczną po wprowadzeniu zmian w witrynie, aby upewnić się, że są poprawnie wyświetlane.',
    'type' => 'Typ',
    'description' => 'Opis',
    'action' => 'Akcja',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Wyczyść całą pamięć podręczną CMS',
            'description' => 'Wyczyść buforowanie CMS: buforowanie bazy danych, bloki statyczne... Uruchom to polecenie, gdy nie widzisz zmian po aktualizacji danych.',
            'success_msg' => 'Pamięć podręczna wyczyszczona',
        ],
        'refresh_compiled_views' => [
            'title' => 'Odśwież skompilowane widoki',
            'description' => 'Wyczyść skompilowane widoki, aby zaktualizować widoki.',
            'success_msg' => 'Pamięć podręczna widoków odświeżona',
        ],
        'clear_config_cache' => [
            'title' => 'Wyczyść pamięć podręczną konfiguracji',
            'description' => 'Może być konieczne odświeżenie buforowania konfiguracji po zmianie czegoś w środowisku produkcyjnym.',
            'success_msg' => 'Pamięć podręczna konfiguracji wyczyszczona',
        ],
        'clear_route_cache' => [
            'title' => 'Wyczyść pamięć podręczną tras',
            'description' => 'Wyczyść buforowanie routingu.',
            'success_msg' => 'Pamięć podręczna tras została wyczyszczona',
        ],
        'clear_log' => [
            'title' => 'Wyczyść logi',
            'description' => 'Wyczyść pliki dziennika systemowego',
            'success_msg' => 'Dziennik systemowy został wyczyszczony',
        ],
    ],
    'optimization' => [
        'title' => 'Optymalizacja wydajności',
        'optimize' => [
            'title' => 'Optymalizuj wydajność witryny',
            'description' => 'Buforuj konfigurację, trasy i widoki dla szybszego ładowania.',
            'button' => 'Optymalizuj',
            'success_msg' => 'Optymalizacja zakończona pomyślnie',
        ],
        'clear' => [
            'title' => 'Wyczyść pamięć podręczną optymalizacji',
            'description' => 'Usuń pamięć podręczną optymalizacji, aby umożliwić zmiany konfiguracji.',
            'button' => 'Wyczyść',
            'success_msg' => 'Pamięć podręczna optymalizacji wyczyszczona pomyślnie',
        ],
        'messages' => [
            'config_cached' => 'Konfiguracja zbuforowana',
            'routes_cleared' => 'Trasy wyczyszczone (wymagana linia poleceń do buforowania)',
            'views_compiled' => 'Widoki skompilowane',
            'framework_cache_cleared' => 'Pamięć podręczna frameworka wyczyszczona',
            'optimization_completed' => 'Optymalizacja zakończona: :details',
            'optimization_failed' => 'Optymalizacja nie powiodła się: :error',
            'clear_failed' => 'Czyszczenie optymalizacji nie powiodło się: :error',
        ],
    ],
];
