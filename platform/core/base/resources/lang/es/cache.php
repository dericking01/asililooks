<?php

return  [
  'cache_management' => 'Gestión de caché',
  'cache_management_description' => 'Limpiar la caché para mantener tu sitio actualizado.',
  'cache_commands' => 'Comandos para limpieza de cache',
  'commands' =>
   [
    'clear_cms_cache' =>
     [
      'title' => 'Borrar cache del sistema',
      'description' => 'Ejecute este comando cuando no vea los cambios después de actualizar los datos.',
      'success_msg' => 'Cache Eliminado!',
    ],
    'refresh_compiled_views' =>
     [
      'title' => 'Actualizar vistas compiladas',
      'description' => 'Limpiar las vistas compiladas para mantener las vistas actualizadas.',
      'success_msg' => 'Las vistas se han eliminado!',
    ],
    'clear_config_cache' =>
     [
      'title' => 'Limpiar cache de configuración',
      'description' => 'Es posible que deba actualizar el almacenamiento en caché cuando cambie algo en la configuración.',
      'success_msg' => 'Se limpió el cache de configuración',
    ],
    'clear_route_cache' =>
     [
      'title' => 'Limpiar enrutamiento',
      'description' => 'Borrar enrutamiento de caché.',
      'success_msg' => 'Enrutamiento de cache',
    ],
    'clear_log' =>
     [
      'title' => 'Borrar registro',
      'description' => 'Limpiar archivos de registro del sistema',
      'success_msg' => 'Log de sistema eliminado!',
    ],
  ],
  'optimization' =>
   [
    'title' => 'Optimización de Rendimiento',
    'optimize' =>
     [
      'title' => 'Optimizar rendimiento del sitio',
      'description' => 'Cachear configuración, rutas y vistas para una velocidad de carga más rápida.',
      'button' => 'Optimizar',
      'success_msg' => 'Optimización completada exitosamente',
    ],
    'clear' =>
     [
      'title' => 'Limpiar caché de optimización',
      'description' => 'Eliminar caché de optimización para permitir cambios de configuración.',
      'button' => 'Limpiar',
      'success_msg' => 'Caché de optimización limpiado exitosamente',
    ],
    'messages' =>
     [
      'config_cached' => 'Configuración cacheada',
      'routes_cleared' => 'Rutas limpiadas (se requiere línea de comandos para cachear)',
      'views_compiled' => 'Vistas compiladas',
      'framework_cache_cleared' => 'Caché del framework limpiado',
      'optimization_completed' => 'Optimización completada: :details',
      'optimization_failed' => 'Optimización fallida: :error',
      'clear_failed' => 'Limpieza de optimización fallida: :error',
    ],
  ],
  'type' => 'Tipo',
  'description' => 'Descripción',
  'action' => 'Acción',
  'current_size' => 'Tamaño actual',
  'clear_button' => 'Limpiar',
  'refresh_button' => 'Actualizar',
  'cache_size_warning' => 'El tamaño del caché de su CMS es bastante grande (>50MB). Limpiarlo puede mejorar el rendimiento del sistema.',
  'footer_note' => 'Limpie el caché después de hacer cambios en su sitio para asegurarse de que aparezcan correctamente.',
];
