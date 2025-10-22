<?php

return [
    'cache_management' => 'Välimuistin hallinta',
    'cache_management_description' => 'Tyhjennä välimuisti pitääksesi sivustosi ajan tasalla.',
    'cache_commands' => 'Välimuistin tyhjennyskomennot',
    'current_size' => 'Nykyinen koko',
    'clear_button' => 'Tyhjennä',
    'refresh_button' => 'Päivitä',
    'cache_size_warning' => 'CMS-välimuistisi koko on melko suuri (>50 Mt). Sen tyhjentäminen voi parantaa järjestelmän suorituskykyä.',
    'footer_note' => 'Tyhjennä välimuisti sivustosi muutosten jälkeen varmistaaksesi niiden näkymisen oikein.',
    'type' => 'Tyyppi',
    'description' => 'Kuvaus',
    'action' => 'Toiminto',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Tyhjennä kaikki CMS-välimuisti',
            'description' => 'Tyhjennä CMS-välimuisti: tietokantavälimuisti, staattiset lohkot... Suorita tämä komento, kun et näe muutoksia tietojen päivittämisen jälkeen.',
            'success_msg' => 'Välimuisti tyhjennetty',
        ],
        'refresh_compiled_views' => [
            'title' => 'Päivitä käännetyt näkymät',
            'description' => 'Tyhjennä käännetyt näkymät pitääksesi näkymät ajan tasalla.',
            'success_msg' => 'Näkymävälimuisti päivitetty',
        ],
        'clear_config_cache' => [
            'title' => 'Tyhjennä konfiguraatiovälimuisti',
            'description' => 'Saatat joutua päivittämään konfiguraatiovälimuistin, kun muutat jotain tuotantoympäristössä.',
            'success_msg' => 'Konfiguraatiovälimuisti tyhjennetty',
        ],
        'clear_route_cache' => [
            'title' => 'Tyhjennä reittivälimuisti',
            'description' => 'Tyhjennä reititysten välimuisti.',
            'success_msg' => 'Reittivälimuisti on tyhjennetty',
        ],
        'clear_log' => [
            'title' => 'Tyhjennä loki',
            'description' => 'Tyhjennä järjestelmän lokitiedostot',
            'success_msg' => 'Järjestelmäloki on tyhjennetty',
        ],
    ],
    'optimization' => [
        'title' => 'Suorituskyvyn optimointi',
        'optimize' => [
            'title' => 'Optimoi sivuston suorituskyky',
            'description' => 'Tallenna välimuistiin konfiguraatio, reitit ja näkymät nopeampaa latausaikaa varten.',
            'button' => 'Optimoi',
            'success_msg' => 'Optimointi suoritettu onnistuneesti',
        ],
        'clear' => [
            'title' => 'Tyhjennä optimointivälimuisti',
            'description' => 'Poista optimointivälimuistit salliaksesi konfiguraatiomuutokset.',
            'button' => 'Tyhjennä',
            'success_msg' => 'Optimointivälimuisti tyhjennetty onnistuneesti',
        ],
        'messages' => [
            'config_cached' => 'Konfiguraatio tallennettu välimuistiin',
            'routes_cleared' => 'Reitit tyhjennetty (komentoriviltä vaaditaan välimuistiin tallentamista varten)',
            'views_compiled' => 'Näkymät käännetty',
            'framework_cache_cleared' => 'Kehysvälimuisti tyhjennetty',
            'optimization_completed' => 'Optimointi valmis: :details',
            'optimization_failed' => 'Optimointi epäonnistui: :error',
            'clear_failed' => 'Optimoinnin tyhjennys epäonnistui: :error',
        ],
    ],
];
