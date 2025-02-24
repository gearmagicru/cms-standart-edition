<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_partitionbar_roles}}" (Права доступа к элементам Панели разделов).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    [
        'partition_id' => $partitionbar['site'],
        'role_id'      => $roles['editor']
    ],
    [
        'partition_id' => $partitionbar['guide'],
        'role_id'      => $roles['editor']
    ],
    [
        'partition_id' => $partitionbar['settings'],
        'role_id'      => $roles['editor']
    ]
];