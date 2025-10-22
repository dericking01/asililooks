<?php

return [
    'product_specification' => 'Tuotteen tekniset tiedot',
    'specification_groups' => [
        'title' => 'Tekniset tiedot ryhmät',
        'menu_name' => 'Ryhmät',

        'create' => [
            'title' => 'Luo teknisten tietojen ryhmä',
        ],

        'edit' => [
            'title' => 'Muokkaa teknisten tietojen ryhmää ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Teknisten tietojen ominaisuudet',
        'menu_name' => 'Ominaisuudet',

        'group' => 'Liittyvä ryhmä',
        'group_placeholder' => 'Valitse mikä tahansa ryhmä',
        'name_placeholder' => 'Syötä ominaisuuden nimi',
        'type' => 'Kentän tyyppi',
        'type_placeholder' => 'Valitse kentän tyyppi',
        'default_value' => 'Oletusarvo',
        'default_value_placeholder' => 'Syötä oletusarvo (valinnainen)',
        'options' => [
            'heading' => 'Vaihtoehdot',

            'add' => [
                'label' => 'Lisää uusi vaihtoehto',
            ],
        ],

        'create' => [
            'title' => 'Luo teknisten tietojen ominaisuus',
        ],

        'edit' => [
            'title' => 'Muokkaa teknisten tietojen ominaisuutta ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Teknisten tietojen taulukot',
        'menu_name' => 'Taulukot',

        'create' => [
            'title' => 'Luo teknisten tietojen taulukko',
        ],

        'edit' => [
            'title' => 'Muokkaa teknisten tietojen taulukkoa ":name"',
        ],

        'fields' => [
            'groups' => 'Valitse ryhmät näytettäväksi tässä taulukossa',
            'name' => 'Ryhmän nimi',
            'assigned_groups' => 'Määritetyt ryhmät',
            'sorting' => 'Järjestys',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Vaihtoehdot',
            'title' => 'Teknisten tietojen taulukko',
            'select_none' => 'Ei mitään',
            'description' => 'Valitse teknisten tietojen taulukko näytettäväksi tässä tuotteessa',
            'group' => 'Ryhmä',
            'attribute' => 'Ominaisuus',
            'value' => 'Ominaisuuden arvo',
            'hide' => 'Piilota',
            'sorting' => 'Järjestys',
            'enter_value' => 'Syötä arvo',
            'enter_translation' => 'Syötä käännös',
            'not_set' => 'Ei asetettu',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Teksti',
            'textarea' => 'Tekstialue',
            'select' => 'Valitse',
            'checkbox' => 'Valintaruutu',
            'radio' => 'Radiopainike',
        ],
    ],
];
