<?php

return [
    'settings' => [
        'title' => 'אופטימיזציה',
        'description' => 'מזעור פלט HTML, CSS מוטמע, הסרת הערות...',
        'enable' => 'הפעל אופטימיזציה של מהירות עמוד?',
    ],
    'collapse_white_space' => 'כווץ רווחים לבנים',
    'collapse_white_space_description' => 'מסנן זה מפחית את הבתים המועברים בקובץ HTML על ידי הסרת רווחים לבנים מיותרים.',
    'elide_attributes' => 'השמט תכונות',
    'elide_attributes_description' => 'מסנן זה מפחית את גודל ההעברה של קבצי HTML על ידי הסרת תכונות מתגיות כאשר הערך שצוין שווה לערך ברירת המחדל של תכונה זו. זה יכול לחסוך מספר צנוע של בתים, ועשוי להפוך את המסמך לדחיס יותר על ידי קנוניזציה של התגיות המושפעות.',
    'inline_css' => 'CSS מוטמע',
    'inline_css_description' => 'מסנן זה הופך את תכונת ה-"style" המוטמעת של תגיות למחלקות על ידי העברת ה-CSS לכותרת.',
    'insert_dns_prefetch' => 'הכנס DNS prefetch',
    'insert_dns_prefetch_description' => 'מסנן זה מזריק תגיות ב-HEAD כדי לאפשר לדפדפן לבצע DNS prefetching.',
    'remove_comments' => 'הסר הערות',
    'remove_comments_description' => 'מסנן זה מסיר הערות HTML, JS ו-CSS. המסנן מפחית את גודל ההעברה של קבצי HTML על ידי הסרת ההערות. בהתאם לקובץ ה-HTML, מסנן זה יכול להפחית משמעותית את מספר הבתים המועברים ברשת.',
    'remove_quotes' => 'הסר גרשיים',
    'remove_quotes_description' => 'מסנן זה מסיר גרשיים מיותרים מתכונות HTML. למרות שנדרשים על ידי מפרטי ה-HTML השונים, דפדפנים מאפשרים השמטתם כאשר ערך התכונה מורכב מתת-קבוצה מסוימת של תווים (אלפאנומריים וכמה תווי פיסוק).',
    'defer_javascript' => 'דחה javascript',
    'defer_javascript_description' => 'דוחה את ביצוע ה-javascript ב-HTML. אם יש צורך לבטל דחייה בסקריפט מסוים, השתמש ב-data-pagespeed-no-defer כתכונת סקריפט כדי לבטל את הדחייה.',
];
