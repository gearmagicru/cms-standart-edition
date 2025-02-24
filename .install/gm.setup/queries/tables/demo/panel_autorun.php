<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_autorun}}" (Автозапуск модулей и расширений).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    [
        'role_id'  => $roles['editor'], 
        'index'    => 1,  
        'priority' => 1, 
        'enabled'  => 1,  
        'route'    => 'dashboard'
    ]
];