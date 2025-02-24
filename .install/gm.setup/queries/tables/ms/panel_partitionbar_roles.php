<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_partitionbar_roles}}" (Права доступа к элементам Панели разделов).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

$rows = [];
// для роли "root" доступны все элементы Панели разделов
foreach ($partitionbar as $key => $partitionId) {
    $rows[] = [
        'partition_id' => $partitionId,
        'role_id'      => $roles['root']
    ];
}
return $rows;