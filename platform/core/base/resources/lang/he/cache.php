<?php

return  [
  'cache_management' => 'ניהול מטמון',
  'cache_management_description' => 'נקה מטמון כדי לעדכן את האתר שלך.',
  'cache_commands' => 'פקודות ניקוי מטמון',
  'current_size' => 'גודל נוכחי',
  'clear_button' => 'נקה',
  'refresh_button' => 'רענן',
  'cache_size_warning' => 'גודל המטמון של ה-CMS שלך גדול למדי (>50MB). ניקויו עשוי לשפר את ביצועי המערכת.',
  'footer_note' => 'נקה את המטמון לאחר ביצוע שינויים באתר שלך כדי לוודא שהם מופיעים בצורה נכונה.',
  'type' => 'סוג',
  'description' => 'תיאור',
  'action' => 'פעולה',
  'commands' =>
   [
    'clear_cms_cache' =>
     [
      'title' => 'נקה את כל המטמון של CMS',
      'description' => 'נקה מטמון CMS: מטמון מסד נתונים, בלוקים סטטיים... הפעל פקודה זו כאשר אינך רואה את השינויים לאחר עדכון הנתונים.',
      'success_msg' => 'המטמון נוקה',
    ],
    'refresh_compiled_views' =>
     [
      'title' => 'רענן תצוגות מהודרות',
      'description' => 'נקה תצוגות מהודרות כדי לעדכן את התצוגות.',
      'success_msg' => 'תצוגת המטמון רוענן',
    ],
    'clear_config_cache' =>
     [
      'title' => 'נקה מטמון תצורה',
      'description' => 'ייתכן שתצטרך לרענן את מטמון התצורה כאשר אתה משנה משהו בסביבת הייצור.',
      'success_msg' => 'מטמון התצורה נוקה',
    ],
    'clear_route_cache' =>
     [
      'title' => 'נקה מטמון נתיב',
      'description' => 'נקה ניתוב מטמון.',
      'success_msg' => 'מטמון הנתיב נוקה',
    ],
    'clear_log' =>
     [
      'title' => 'נקה יומן',
      'description' => 'נקה קבצי יומן מערכת',
      'success_msg' => 'יומן המערכת נוקה',
    ],
  ],
  'optimization' =>
   [
    'title' => 'אופטימיזציית ביצועים',
    'optimize' =>
     [
      'title' => 'אופטימיזציה של ביצועי האתר',
      'description' => 'שמור במטמון הגדרות, נתיבים ותצוגות למהירות טעינה מהירה יותר.',
      'button' => 'בצע אופטימיזציה',
      'success_msg' => 'האופטימיזציה הושלמה בהצלחה',
    ],
    'clear' =>
     [
      'title' => 'נקה מטמון אופטימיזציה',
      'description' => 'הסר מטמון אופטימיזציה כדי לאפשר שינויי הגדרות.',
      'button' => 'נקה',
      'success_msg' => 'מטמון האופטימיזציה נוקה בהצלחה',
    ],
    'messages' =>
     [
      'config_cached' => 'ההגדרות נשמרו במטמון',
      'routes_cleared' => 'הנתיבים נוקו (נדרש שורת פקודה לשמירה במטמון)',
      'views_compiled' => 'התצוגות הידרו',
      'framework_cache_cleared' => 'מטמון המסגרת נוקה',
      'optimization_completed' => 'האופטימיזציה הושלמה: :details',
      'optimization_failed' => 'האופטימיזציה נכשלה: :error',
      'clear_failed' => 'ניקוי האופטימיזציה נכשל: :error',
    ],
  ],
];
