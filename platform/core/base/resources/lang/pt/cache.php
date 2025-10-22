<?php

return  [
  'cache_management' => 'Gerenciamento de Cache',
  'cache_management_description' => 'Limpe o cache para atualizar seu site.',
  'cache_commands' => 'Limpar comandos de cache',
  'commands' =>
   [
    'clear_cms_cache' =>
     [
      'title' => 'Limpe todo o cache do CMS',
      'description' => 'Limpe o cache do CMS: cache do banco de dados, blocos estáticos... Execute este comando quando não vir as alterações após atualizar os dados.',
      'success_msg' => 'Cache limpo',
    ],
    'refresh_compiled_views' =>
     [
      'title' => 'Atualizar visualizações compiladas',
      'description' => 'Limpe as visualizações compiladas para atualizá-las.',
      'success_msg' => 'Visualização de cache atualizada',
    ],
    'clear_config_cache' =>
     [
      'title' => 'Limpar cache de configuração',
      'description' => 'Pode ser necessário atualizar o cache de configuração ao alterar algo no ambiente de produção.',
      'success_msg' => 'Cache de configuração limpo',
    ],
    'clear_route_cache' =>
     [
      'title' => 'Limpar cache de rota',
      'description' => 'Limpar roteamento de cache.',
      'success_msg' => 'O cache de rota foi limpo',
    ],
    'clear_log' =>
     [
      'title' => 'Limpar registro',
      'description' => 'Limpar arquivos de log do sistema',
      'success_msg' => 'O log do sistema foi limpo',
    ],
  ],
  'optimization' =>
   [
    'title' => 'Otimização de Desempenho',
    'optimize' =>
     [
      'title' => 'Otimizar desempenho do site',
      'description' => 'Armazenar em cache configuração, rotas e visualizações para velocidade de carregamento mais rápida.',
      'button' => 'Otimizar',
      'success_msg' => 'Otimização concluída com sucesso',
    ],
    'clear' =>
     [
      'title' => 'Limpar cache de otimização',
      'description' => 'Remover cache de otimização para permitir mudanças de configuração.',
      'button' => 'Limpar',
      'success_msg' => 'Cache de otimização limpo com sucesso',
    ],
    'messages' =>
     [
      'config_cached' => 'Configuração armazenada em cache',
      'routes_cleared' => 'Rotas limpas (linha de comando necessária para cache)',
      'views_compiled' => 'Visualizações compiladas',
      'framework_cache_cleared' => 'Cache do framework limpo',
      'optimization_completed' => 'Otimização concluída: :details',
      'optimization_failed' => 'Otimização falhou: :error',
      'clear_failed' => 'Limpeza de otimização falhou: :error',
    ],
  ],
  'type' => 'Tipo',
  'description' => 'Descrição',
  'action' => 'Ação',
  'current_size' => 'Tamanho atual',
  'clear_button' => 'Limpar',
  'refresh_button' => 'Atualizar',
  'cache_size_warning' => 'O tamanho do cache do seu CMS é bastante grande (>50MB). Limpá-lo pode melhorar o desempenho do sistema.',
  'footer_note' => 'Limpe o cache após fazer alterações no seu site para garantir que elas apareçam corretamente.',
];
