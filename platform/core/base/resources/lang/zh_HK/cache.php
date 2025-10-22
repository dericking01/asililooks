<?php

return  [
  'cache_management' => '快取管理',
  'cache_management_description' => '清除快取以使您的網站保持最新。',
  'cache_commands' => '清除快取命令',
  'commands' =>
   [
    'clear_cms_cache' =>
     [
      'title' => '清除所有CMS快取',
      'description' => '清除CMS緩存：數據庫緩存、靜態區塊……當你在更新數據後看不到變更時，運行這個命令。',
      'success_msg' => '快取已清除',
    ],
    'refresh_compiled_views' =>
     [
      'title' => '刷新已編譯的視圖',
      'description' => '清除已編譯的視圖以使視圖保持最新。',
      'success_msg' => '快取視圖已更新',
    ],
    'clear_config_cache' =>
     [
      'title' => '清除配置快取',
      'description' => '你可能需要在生產環境中更改某些東西時刷新配置緩存。',
      'success_msg' => '配置快取已清除',
    ],
    'clear_route_cache' =>
     [
      'title' => '清除路由緩存',
      'description' => '清除快取路由。',
      'success_msg' => '路由緩存已經清理。',
    ],
    'clear_log' =>
     [
      'title' => '清除日誌',
      'description' => '清除系統日誌文件',
      'success_msg' => '系統日誌已經清理。',
    ],
  ],
  'optimization' =>
   [
    'title' => '性能優化',
    'optimize' =>
     [
      'title' => '優化網站性能',
      'description' => '緩存配置、路由和視圖以提高加載速度。',
      'button' => '優化',
      'success_msg' => '優化成功完成',
    ],
    'clear' =>
     [
      'title' => '清除優化緩存',
      'description' => '刪除優化緩存以允許配置更改。',
      'button' => '清除',
      'success_msg' => '優化緩存清除成功',
    ],
    'messages' =>
     [
      'config_cached' => '配置已緩存',
      'routes_cleared' => '路由已清除（需要命令行進行緩存）',
      'views_compiled' => '視圖已編譯',
      'framework_cache_cleared' => '框架緩存已清除',
      'optimization_completed' => '優化完成：:details',
      'optimization_failed' => '優化失敗：:error',
      'clear_failed' => '清除優化失敗：:error',
    ],
  ],
  'type' => '類型',
  'description' => '描述',
  'action' => '操作',
  'current_size' => '當前大小',
  'clear_button' => '清除',
  'refresh_button' => '刷新',
  'cache_size_warning' => '您的CMS緩存大小相當大（>50MB）。清除它可能會提高系統性能。',
  'footer_note' => '在對您的網站進行更改後清除緩存，以確保它們正確顯示。',
];
