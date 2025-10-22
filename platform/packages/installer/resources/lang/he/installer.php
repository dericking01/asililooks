<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'התקנה',
    'next' => 'השלב הבא',
    'back' => 'הקודם',
    'finish' => 'התקן',
    'installation' => 'התקנה',
    'forms' => [
        'errorTitle' => 'התרחשו השגיאות הבאות:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'ברוכים הבאים',
        'message' => 'לפני שמתחילים, אנחנו צריכים מידע על מסד הנתונים. תצטרך לדעת את הפריטים הבאים לפני שממשיכים.',
        'language' => 'שפה',
        'next' => 'בואו נתחיל',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'דרישות שרת',
        'next' => 'בדוק הרשאות',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'הגדר סביבה',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'הגדרות סביבה',
            'form' => [
                'name_required' => 'נדרש שם סביבה.',
                'app_name_label' => 'כותרת האתר',
                'app_name_placeholder' => 'כותרת האתר',
                'app_url_label' => 'כתובת URL',
                'app_url_placeholder' => 'כתובת URL',
                'db_connection_label' => 'חיבור למסד נתונים',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'מארח מסד נתונים',
                'db_host_placeholder' => 'מארח מסד נתונים',
                'db_port_label' => 'פורט מסד נתונים',
                'db_port_placeholder' => 'פורט מסד נתונים',
                'db_name_label' => 'שם מסד נתונים',
                'db_name_placeholder' => 'שם מסד נתונים',
                'db_username_label' => 'שם משתמש מסד נתונים',
                'db_username_placeholder' => 'שם משתמש מסד נתונים',
                'db_password_label' => 'סיסמת מסד נתונים',
                'db_password_placeholder' => 'סיסמת מסד נתונים',
                'buttons' => [
                    'install' => 'התקן',
                ],
                'db_host_helper' => 'אם אתה משתמש ב-Laravel Sail, פשוט שנה את DB_HOST ל-DB_HOST=mysql. בחלק מהאחסונים DB_HOST יכול להיות localhost במקום 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'הגדרות קובץ ה-.env שלך נשמרו.',
        'errors' => 'לא ניתן לשמור את קובץ ה-.env, אנא צור אותו באופן ידני.',
    ],

    'theme' => [
        'title' => 'בחר ערכת נושא',
        'message' => 'בחר ערכת נושא כדי להתאים אישית את המראה של האתר שלך. בחירה זו תייבא גם נתוני דוגמה המותאמים לערכת הנושא שנבחרה.',
    ],

    'theme_preset' => [
        'title' => 'בחר הגדרה מוקדמת של ערכת נושא',
        'message' => 'בחר הגדרה מוקדמת של ערכת נושא כדי להתאים אישית את המראה של האתר שלך. בחירה זו תייבא גם נתוני דוגמה המותאמים לערכת הנושא שנבחרה.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'צור חשבון',
        'form' => [
            'first_name' => 'שם פרטי',
            'last_name' => 'שם משפחה',
            'username' => 'שם משתמש',
            'email' => 'דוא"ל',
            'password' => 'סיסמה',
            'password_confirmation' => 'אישור סיסמה',
            'create' => 'צור',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'הפעל רישיון',
        'skip' => 'דלג לעת עתה',
    ],

    'install' => 'התקן',

    'final' => [
        'pageTitle' => 'ההתקנה הושלמה',
        'title' => 'סיים',
        'message' => 'האפליקציה הותקנה בהצלחה.',
        'exit' => 'עבור ללוח הבקרה של המנהל',
    ],

    'install_success' => 'הותקן בהצלחה!',

    'install_step_title' => 'התקנה - שלב :step: :title',
];
