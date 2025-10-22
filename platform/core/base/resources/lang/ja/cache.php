<?php

return  [
  'cache_management' => 'キャッシュ管理',
  'cache_management_description' => 'キャッシュをクリアしてサイトを最新の状態にします。',
  'cache_commands' => 'キャッシュのクリアコマンド',
  'commands' =>
   [
    'clear_cms_cache' =>
     [
      'title' => 'CMS キャッシュをすべてクリアする',
      'description' => 'CMS キャッシュのクリア: データベース キャッシュ、静的ブロック... データを更新した後に変更が表示されない場合は、このコマンドを実行します。',
      'success_msg' => 'キャッシュが消去されました',
    ],
    'refresh_compiled_views' =>
     [
      'title' => 'コンパイルされたビューを更新する',
      'description' => 'コンパイルされたビューをクリアしてビューを最新の状態にします。',
      'success_msg' => 'キャッシュビューが更新されました',
    ],
    'clear_config_cache' =>
     [
      'title' => '設定キャッシュをクリアする',
      'description' => '実稼働環境で何かを変更するときは、構成キャッシュの更新が必要になる場合があります。',
      'success_msg' => '構成キャッシュが消去されました',
    ],
    'clear_route_cache' =>
     [
      'title' => 'ルートキャッシュをクリアする',
      'description' => 'キャッシュルーティングをクリアします。',
      'success_msg' => 'ルートキャッシュが消去されました',
    ],
    'clear_log' =>
     [
      'title' => 'ログをクリアする',
      'description' => 'システムログファイルをクリアする',
      'success_msg' => 'システムログが消去されました',
    ],
  ],
  'optimization' =>
   [
    'title' => 'パフォーマンス最適化',
    'optimize' =>
     [
      'title' => 'サイトのパフォーマンスを最適化',
      'description' => '設定、ルート、ビューをキャッシュして読み込み速度を向上させます。',
      'button' => '最適化',
      'success_msg' => '最適化が正常に完了しました',
    ],
    'clear' =>
     [
      'title' => '最適化キャッシュをクリア',
      'description' => '設定変更を可能にするため最適化キャッシュを削除します。',
      'button' => 'クリア',
      'success_msg' => '最適化キャッシュが正常にクリアされました',
    ],
    'messages' =>
     [
      'config_cached' => '設定がキャッシュされました',
      'routes_cleared' => 'ルートがクリアされました（キャッシュにはコマンドラインが必要）',
      'views_compiled' => 'ビューがコンパイルされました',
      'framework_cache_cleared' => 'フレームワークキャッシュがクリアされました',
      'optimization_completed' => '最適化完了: :details',
      'optimization_failed' => '最適化失敗: :error',
      'clear_failed' => '最適化クリア失敗: :error',
    ],
  ],
  'type' => 'タイプ',
  'description' => '説明',
  'action' => 'アクション',
  'current_size' => '現在のサイズ',
  'clear_button' => 'クリア',
  'refresh_button' => '更新',
  'cache_size_warning' => 'CMSキャッシュのサイズがかなり大きくなっています（>50MB）。クリアするとシステムパフォーマンスが向上する可能性があります。',
  'footer_note' => 'サイトに変更を加えた後、正しく表示されるようにキャッシュをクリアしてください。',
];
