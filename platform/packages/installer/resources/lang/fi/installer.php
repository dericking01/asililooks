<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Asennus',
    'next' => 'Seuraava vaihe',
    'back' => 'Edellinen',
    'finish' => 'Asenna',
    'installation' => 'Asennus',
    'forms' => [
        'errorTitle' => 'Seuraavat virheet tapahtuivat:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Tervetuloa',
        'message' => 'Ennen aloittamista tarvitsemme tietoa tietokannasta. Sinun on tiedettävä seuraavat asiat ennen jatkamista.',
        'language' => 'Kieli',
        'next' => 'Aloitetaan',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Palvelimen vaatimukset',
        'next' => 'Tarkista käyttöoikeudet',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Määritä ympäristö',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Ympäristöasetukset',
            'form' => [
                'name_required' => 'Ympäristön nimi vaaditaan.',
                'app_name_label' => 'Sivuston otsikko',
                'app_name_placeholder' => 'Sivuston otsikko',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Tietokantayhteys',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Tietokannan isäntä',
                'db_host_placeholder' => 'Tietokannan isäntä',
                'db_port_label' => 'Tietokannan portti',
                'db_port_placeholder' => 'Tietokannan portti',
                'db_name_label' => 'Tietokannan nimi',
                'db_name_placeholder' => 'Tietokannan nimi',
                'db_username_label' => 'Tietokannan käyttäjänimi',
                'db_username_placeholder' => 'Tietokannan käyttäjänimi',
                'db_password_label' => 'Tietokannan salasana',
                'db_password_placeholder' => 'Tietokannan salasana',
                'buttons' => [
                    'install' => 'Asenna',
                ],
                'db_host_helper' => 'Jos käytät Laravel Sailia, vaihda vain DB_HOST arvoksi DB_HOST=mysql. Joissakin hosting-palveluissa DB_HOST voi olla localhost 127.0.0.1:n sijaan',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => '.env-tiedoston asetukset on tallennettu.',
        'errors' => '.env-tiedostoa ei voitu tallentaa, luo se manuaalisesti.',
    ],

    'theme' => [
        'title' => 'Valitse teema',
        'message' => 'Valitse teema mukauttaaksesi verkkosivustosi ulkoasua. Tämä valinta tuo myös valitulle teemalle räätälöidyt esimerkkitiedot.',
    ],

    'theme_preset' => [
        'title' => 'Valitse teeman esiasetus',
        'message' => 'Valitse teeman esiasetus mukauttaaksesi verkkosivustosi ulkoasua. Tämä valinta tuo myös valitulle teemalle räätälöidyt esimerkkitiedot.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Luo tili',
        'form' => [
            'first_name' => 'Etunimi',
            'last_name' => 'Sukunimi',
            'username' => 'Käyttäjänimi',
            'email' => 'Sähköposti',
            'password' => 'Salasana',
            'password_confirmation' => 'Salasanan vahvistus',
            'create' => 'Luo',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Aktivoi lisenssi',
        'skip' => 'Ohita toistaiseksi',
    ],

    'install' => 'Asenna',

    'final' => [
        'pageTitle' => 'Asennus valmis',
        'title' => 'Valmis',
        'message' => 'Sovellus on asennettu onnistuneesti.',
        'exit' => 'Siirry hallintapaneeliin',
    ],

    'install_success' => 'Asennettu onnistuneesti!',

    'install_step_title' => 'Asennus - Vaihe :step: :title',
];
