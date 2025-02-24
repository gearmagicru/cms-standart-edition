<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_traybar_roles}}" (Доступ к элементам Панели уведомлений).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    [
        'traybar_id' => $traybar['dashboard'], 
        'role_id'    => $roles['editor']
    ],
    [
        'traybar_id' => $traybar['exit'], 
        'role_id'    => $roles['editor']
    ]
];