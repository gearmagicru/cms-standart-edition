<?php
/**
 * Файл записей таблицы "{{extension_permissions}}" (Права доступа к расширениям модулей).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    // доступ к панели справочников для роли "Редактор"
    [
        'extension_id' => $extensions['gm.be.references.desk'],
        'role_id'      => $roles['editor'],
        'permissions'  => 'any'
    ],
    // доступ к панели конфигурации для роли "Редактор"
    [
        'extension_id' => $extensions['gm.be.config.desk'],
        'role_id'      => $roles['editor'],
        'permissions'  => 'any'
    ],
    // доступ к настройке страницы для роли "Редактор"
    [
        'extension_id' => $extensions['gm.be.config.page'],
        'role_id'      => $roles['editor'],
        'permissions'  => 'any'
    ],
    // доступ к версии веб-приложения для роли "Редактор"
    [
        'extension_id' => $extensions['gm.be.config.version'],
        'role_id'      => $roles['editor'],
        'permissions'  => 'any'
    ]
];