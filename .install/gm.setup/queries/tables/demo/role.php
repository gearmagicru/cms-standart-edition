<?php
/**
 * Файл записей таблицы "{{role}}" Роли пользователей.
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    [
        'id'            => $roles['editor'],
        'name'          => $isRu ? 'Редактор' : 'Editor',
        'shortname'     => 'editor',
        'description'   => $isRu ? 'Редактор' : 'Editor',
        '_created_date' => gmdate('Y-m-d H:i:s'),
        '_created_user' => 1,
        '_lock'         => 0
    ]
];