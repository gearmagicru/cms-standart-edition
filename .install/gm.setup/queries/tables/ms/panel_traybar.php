<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_traybar}}" (Панель уведомлений).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    [
        'id'           => $traybar['audit'],
        'index'        => 1,
        'icon'         => 'fal fa-calendar',
        'icon_type'    => 'font',
        'title'        => '#Audit Log',
        'handler'      => 'loadWidget',
        'handler_args' => 'route=@backend/audit-log',
        'visible'      => 1
    ],
    [
        'id'           => $traybar['debugger'],
        'index'        => 2,
        'icon'         => 'far fa-bug',
        'icon_type'    => 'font',
        'title'        => '#Debugger toolbar',
        'handler'      => 'loadWidget',
        'handler_args' => 'route=@backend/debugtoolbar',
        'visible'      => 1
    ],
    [
        'id'           => $traybar['dashboard'],
        'index'        => 3,
        'icon'         => 'fas fa-th-large',
        'icon_type'    => 'font',
        'title'        => '#Dashboard',
        'handler'      => 'loadWidget',
        'handler_args' => 'route=@backend/dashboard',
        'visible'      => 1
    ],
    [
        'id'           => $traybar['exit'],
        'index'        => 4,
        'icon'         => 'fas fa-sign-out',
        'icon_type'    => 'font',
        'title'        => '#Exit',
        'handler'      => 'signuotShow',
        'visible'      => 1
    ]
];