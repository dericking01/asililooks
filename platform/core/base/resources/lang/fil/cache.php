<?php

return [
    'cache_management' => 'Pamamahala ng Cache',
    'cache_management_description' => 'I-clear ang cache upang gawing up to date ang iyong site.',
    'cache_commands' => 'Mga utos sa pag-clear ng cache',
    'current_size' => 'Kasalukuyang Laki',
    'clear_button' => 'I-clear',
    'refresh_button' => 'I-refresh',
    'cache_size_warning' => 'Ang laki ng iyong CMS cache ay medyo malaki (>50MB). Ang pag-clear nito ay maaaring mapabuti ang performance ng sistema.',
    'footer_note' => 'I-clear ang cache pagkatapos gumawa ng mga pagbabago sa iyong site upang masiguro na lumilitaw ito nang tama.',
    'type' => 'Uri',
    'description' => 'Paglalarawan',
    'action' => 'Aksyon',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'I-clear ang lahat ng CMS cache',
            'description' => 'I-clear ang CMS caching: database caching, static blocks... Patakbuhin ang utos na ito kapag hindi mo nakikita ang mga pagbabago pagkatapos mag-update ng data.',
            'success_msg' => 'Nalinis ang cache',
        ],
        'refresh_compiled_views' => [
            'title' => 'I-refresh ang mga compiled views',
            'description' => 'I-clear ang mga compiled views upang gawing up to date ang mga views.',
            'success_msg' => 'Na-refresh ang cache view',
        ],
        'clear_config_cache' => [
            'title' => 'I-clear ang config cache',
            'description' => 'Maaaring kailangan mong i-refresh ang config caching kapag may binago ka sa production environment.',
            'success_msg' => 'Nalinis ang config cache',
        ],
        'clear_route_cache' => [
            'title' => 'I-clear ang route cache',
            'description' => 'I-clear ang cache routing.',
            'success_msg' => 'Nalinis ang route cache',
        ],
        'clear_log' => [
            'title' => 'I-clear ang log',
            'description' => 'I-clear ang mga log files ng sistema',
            'success_msg' => 'Nalinis ang system log',
        ],
    ],
    'optimization' => [
        'title' => 'Pag-optimize ng Performance',
        'optimize' => [
            'title' => 'I-optimize ang performance ng site',
            'description' => 'I-cache ang configuration, routes, at views para sa mas mabilis na loading speed.',
            'button' => 'I-optimize',
            'success_msg' => 'Matagumpay na nakumpleto ang optimization',
        ],
        'clear' => [
            'title' => 'I-clear ang optimization cache',
            'description' => 'Alisin ang mga optimization cache upang payagan ang mga pagbabago sa configuration.',
            'button' => 'I-clear',
            'success_msg' => 'Matagumpay na na-clear ang optimization cache',
        ],
        'messages' => [
            'config_cached' => 'Na-cache ang configuration',
            'routes_cleared' => 'Na-clear ang routes (kailangan ang command line para sa caching)',
            'views_compiled' => 'Na-compile ang views',
            'framework_cache_cleared' => 'Na-clear ang framework cache',
            'optimization_completed' => 'Nakumpleto ang optimization: :details',
            'optimization_failed' => 'Nabigo ang optimization: :error',
            'clear_failed' => 'Nabigo ang pag-clear ng optimization: :error',
        ],
    ],
];
