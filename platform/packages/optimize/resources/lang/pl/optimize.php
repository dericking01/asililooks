<?php

return [
    'settings' => [
        'title' => 'Optymalizacja',
        'description' => 'Minifikuj wyjście HTML, inline CSS, usuń komentarze...',
        'enable' => 'Włączyć optymalizację szybkości strony?',
    ],
    'collapse_white_space' => 'Zwiń białe znaki',
    'collapse_white_space_description' => 'Ten filtr zmniejsza bajty przesyłane w pliku HTML, usuwając niepotrzebne białe znaki.',
    'elide_attributes' => 'Pomiń atrybuty',
    'elide_attributes_description' => 'Ten filtr zmniejsza rozmiar transferu plików HTML, usuwając atrybuty z tagów, gdy określona wartość jest równa wartości domyślnej dla tego atrybutu. Może to zaoszczędzić skromną liczbę bajtów i może uczynić dokument bardziej kompresjowalnym poprzez kanonizację dotkniętych tagów.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'Ten filtr przekształca atrybut inline "style" tagów w klasy, przenosząc CSS do nagłówka.',
    'insert_dns_prefetch' => 'Wstaw DNS prefetch',
    'insert_dns_prefetch_description' => 'Ten filtr wstrzykuje tagi w HEAD, aby umożliwić przeglądarce wykonywanie DNS prefetchingu.',
    'remove_comments' => 'Usuń komentarze',
    'remove_comments_description' => 'Ten filtr eliminuje komentarze HTML, JS i CSS. Filtr zmniejsza rozmiar transferu plików HTML poprzez usunięcie komentarzy. W zależności od pliku HTML, ten filtr może znacznie zmniejszyć liczbę bajtów przesyłanych w sieci.',
    'remove_quotes' => 'Usuń cudzysłowy',
    'remove_quotes_description' => 'Ten filtr eliminuje niepotrzebne cudzysłowy z atrybutów HTML. Chociaż są wymagane przez różne specyfikacje HTML, przeglądarki zezwalają na ich pominięcie, gdy wartość atrybutu składa się z określonego podzbioru znaków (alfanumerycznych i niektórych znaków interpunkcyjnych).',
    'defer_javascript' => 'Odrocz javascript',
    'defer_javascript_description' => 'Odkłada wykonanie javascriptu w HTML. Jeśli konieczne jest anulowanie odroczenia w jakimś skrypcie, użyj data-pagespeed-no-defer jako atrybutu skryptu, aby anulować odroczenie.',
];
