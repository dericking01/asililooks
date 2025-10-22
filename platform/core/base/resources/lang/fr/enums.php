<?php

return [
    'statuses' => [
        'draft' => 'Projet',
        'pending' => 'En attente',
        'published' => 'Publié',
    ],
    'system_updater_steps' => [
        'download' => 'Télécharger les fichiers de mise à jour',
        'update_files' => 'Mettre à jour les fichiers système',
        'update_database' => 'Mettre à jour les bases de données',
        'publish_core_assets' => 'Publier les assets principaux',
        'publish_packages_assets' => 'Publier les assets des packages',
        'clean_up' => 'Nettoyer les fichiers de mise à jour système',
        'done' => 'Système mis à jour avec succès',

        'messages' => [
            'download' => 'Téléchargement des fichiers de mise à jour...',
            'update_files' => 'Mise à jour des fichiers système...',
            'update_database' => 'Mise à jour des bases de données...',
            'publish_core_assets' => 'Publication des assets principaux...',
            'publish_packages_assets' => 'Publication des assets des packages...',
            'clean_up' => 'Nettoyage des fichiers de mise à jour système...',
            'done' => 'Terminé ! Votre navigateur sera actualisé dans 30 secondes.',
        ],

        'failed_messages' => [
            'download' => 'Impossible de télécharger les fichiers de mise à jour',
            'update_files' => 'Impossible de mettre à jour les fichiers système',
            'update_database' => 'Impossible de mettre à jour les bases de données',
            'publish_core_assets' => 'Impossible de publier les assets principaux',
            'publish_packages_assets' => 'Impossible de publier les assets des packages',
            'clean_up' => 'Impossible de nettoyer les fichiers de mise à jour système',
        ],

        'success_messages' => [
            'download' => 'Fichiers de mise à jour téléchargés avec succès.',
            'update_files' => 'Fichiers système mis à jour avec succès.',
            'update_database' => 'Bases de données mises à jour avec succès.',
            'publish_core_assets' => 'Assets principaux publiés avec succès.',
            'publish_packages_assets' => 'Assets des packages publiés avec succès.',
            'clean_up' => 'Fichiers de mise à jour système nettoyés avec succès.',
        ],
    ],
];
