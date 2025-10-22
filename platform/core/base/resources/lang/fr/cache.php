<?php

return  [
  'cache_management' => 'Gestion du cache',
  'cache_management_description' => 'Videz le cache pour mettre à jour votre site.',
  'cache_commands' => 'Commandes de vidage du cache',
  'commands' =>
   [
    'clear_cms_cache' =>
     [
      'title' => 'Vider tout le cache CMS',
      'description' => 'Vider le cache CMS : cache de la base de données, blocs statiques... Exécutez cette commande lorsque vous ne voyez pas les modifications après la mise à jour des données.',
      'success_msg' => 'Cache vidé',
    ],
    'refresh_compiled_views' =>
     [
      'title' => 'Actualiser les vues compilées',
      'description' => 'Vider les vues compilées pour mettre à jour les vues.',
      'success_msg' => 'Vue du cache actualisée',
    ],
    'clear_config_cache' =>
     [
      'title' => 'Vider le cache de configuration',
      'description' => 'Vous devrez peut-être actualiser le cache de configuration lorsque vous modifiez quelque chose dans l\'environnement de production.',
      'success_msg' => 'Cache de configuration vidé',
    ],
    'clear_route_cache' =>
     [
      'title' => 'Vider le cache des routes',
      'description' => 'Vider le cache de routage.',
      'success_msg' => 'Le cache des routes a été vidé',
    ],
    'clear_log' =>
     [
      'title' => 'Vider le journal',
      'description' => 'Vider les fichiers journaux système',
      'success_msg' => 'Le journal système a été vidé',
    ],
  ],
  'optimization' =>
   [
    'title' => 'Optimisation des Performances',
    'optimize' =>
     [
      'title' => 'Optimiser les performances du site',
      'description' => 'Mettre en cache la configuration, les routes et les vues pour une vitesse de chargement plus rapide.',
      'button' => 'Optimiser',
      'success_msg' => 'Optimisation terminée avec succès',
    ],
    'clear' =>
     [
      'title' => 'Vider le cache d\'optimisation',
      'description' => 'Supprimer le cache d\'optimisation pour permettre les modifications de configuration.',
      'button' => 'Vider',
      'success_msg' => 'Cache d\'optimisation vidé avec succès',
    ],
    'messages' =>
     [
      'config_cached' => 'Configuration mise en cache',
      'routes_cleared' => 'Routes effacées (ligne de commande requise pour la mise en cache)',
      'views_compiled' => 'Vues compilées',
      'framework_cache_cleared' => 'Cache du framework vidé',
      'optimization_completed' => 'Optimisation terminée : :details',
      'optimization_failed' => 'Échec de l\'optimisation : :error',
      'clear_failed' => 'Échec du vidage de l\'optimisation : :error',
    ],
  ],
  'type' => 'Type',
  'description' => 'Description',
  'action' => 'Action',
  'current_size' => 'Taille actuelle',
  'clear_button' => 'Effacer',
  'refresh_button' => 'Actualiser',
  'cache_size_warning' => 'La taille du cache de votre CMS est assez importante (>50 Mo). Le vider peut améliorer les performances du système.',
  'footer_note' => 'Videz le cache après avoir apporté des modifications à votre site pour vous assurer qu\'elles apparaissent correctement.',
];
