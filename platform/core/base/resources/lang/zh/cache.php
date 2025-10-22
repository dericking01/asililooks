<?php

return  [
  'cache_management' => '缓存管理',
  'cache_management_description' => '清除缓存以使您的网站保持最新。',
  'cache_commands' => '清除缓存命令',
  'commands' =>
   [
    'clear_cms_cache' =>
     [
      'title' => '清除所有CMS缓存',
      'description' => '清除CMS缓存：数据库缓存、静态块... 当您在更新数据后未看到更改时，请运行此命令。',
      'success_msg' => '缓存已清理',
    ],
    'refresh_compiled_views' =>
     [
      'title' => '刷新编译视图',
      'description' => '清除编译的视图以使视图保持最新。',
      'success_msg' => '缓存视图已刷新',
    ],
    'clear_config_cache' =>
     [
      'title' => '清除配置缓存',
      'description' => '您在生产环境中更改某些内容时，可能需要刷新配置缓存。',
      'success_msg' => '配置缓存已清理',
    ],
    'clear_route_cache' =>
     [
      'title' => '清除路由缓存',
      'description' => '清除缓存路由。',
      'success_msg' => '路由缓存已被清除',
    ],
    'clear_log' =>
     [
      'title' => '清除日志',
      'description' => '清除系统日志文件',
      'success_msg' => '系统日志已被清理',
    ],
  ],
  'optimization' =>
   [
    'title' => '性能优化',
    'optimize' =>
     [
      'title' => '优化网站性能',
      'description' => '缓存配置、路由和视图以提高加载速度。',
      'button' => '优化',
      'success_msg' => '优化成功完成',
    ],
    'clear' =>
     [
      'title' => '清除优化缓存',
      'description' => '删除优化缓存以允许配置更改。',
      'button' => '清除',
      'success_msg' => '优化缓存清除成功',
    ],
    'messages' =>
     [
      'config_cached' => '配置已缓存',
      'routes_cleared' => '路由已清除（需要命令行进行缓存）',
      'views_compiled' => '视图已编译',
      'framework_cache_cleared' => '框架缓存已清除',
      'optimization_completed' => '优化完成：:details',
      'optimization_failed' => '优化失败：:error',
      'clear_failed' => '清除优化失败：:error',
    ],
  ],
  'type' => '类型',
  'description' => '描述',
  'action' => '操作',
  'current_size' => '当前大小',
  'clear_button' => '清除',
  'refresh_button' => '刷新',
  'cache_size_warning' => '您的CMS缓存大小相当大（>50MB）。清除它可能会提高系统性能。',
  'footer_note' => '在对您的网站进行更改后清除缓存，以确保它们正确显示。',
];
