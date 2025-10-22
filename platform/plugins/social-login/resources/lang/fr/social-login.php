<?php

return [
    'settings' => [
        'title' => 'Paramètres de connexion sociale',
        'description' => 'Configurer les options de connexion sociale',
        'facebook' => [
            'enable' => 'Activer la connexion Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Veuillez vous rendre sur https://developers.facebook.com pour créer une nouvelle application et mettre à jour App ID, App Secret. L\'URL de rappel est :callback',
            'data_deletion_request_callback_url' => 'Définissez cette URL :url comme URL de demande de suppression de données dans les paramètres de votre application Facebook pour permettre aux utilisateurs de demander la suppression de leurs données.',
        ],
        'google' => [
            'enable' => 'Activer la connexion Google',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Veuillez vous rendre sur https://console.developers.google.com/apis/dashboard pour créer une nouvelle application et mettre à jour App ID, App Secret. L\'URL de rappel est :callback',
            'use_google_button' => 'Utiliser le bouton Google',
            'use_google_button_helper' => 'Si vous activez cette option, le bouton Google sera utilisé à la place du bouton par défaut.',
        ],
        'github' => [
            'enable' => 'Activer la connexion GitHub',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Veuillez vous rendre sur https://github.com/settings/developers pour créer une nouvelle application et mettre à jour App ID, App Secret. L\'URL de rappel est :callback',
        ],
        'linkedin' => [
            'enable' => 'Activer la connexion Linkedin',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Veuillez vous rendre sur https://www.linkedin.com/developers/apps/new pour créer une nouvelle application et mettre à jour App ID, App Secret. L\'URL de rappel est :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Activer la connexion Linkedin avec OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Veuillez vous rendre sur https://www.linkedin.com/developers/apps/new pour créer une nouvelle application et mettre à jour App ID, App Secret. L\'URL de rappel est :callback',
        ],
        'x' => [
            'enable' => 'Activer la connexion X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Veuillez vous rendre sur https://developer.x.com/en/portal/dashboard pour créer une nouvelle application et mettre à jour Client ID, Client Secret. L\'URL de rappel est :callback',
        ],
        'enable' => 'Activer la connexion sociale ?',
        'style' => 'Style',
        'minimal' => 'Minimal',
        'default' => 'Par défaut',
        'basic' => 'Basique',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Connexion sociale',
    'description' => 'Afficher et mettre à jour vos paramètres de connexion sociale',
    'sign_in_with' => 'Se connecter avec :provider',
];
