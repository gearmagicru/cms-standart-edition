<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_partitionbar_modules}}" (Модули Панели разделов).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    [
        'partition_id' => $partitionbar['system'], 
        'module_id'    => $modules['gm.be.references']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'module_id'    => $modules['gm.be.terms']
    ],
    [
        'partition_id' => $partitionbar['appearance'], 
        'module_id'    => $modules['gm.be.templates']
    ],
    [
        'partition_id' => $partitionbar['guide'], 
        'module_id'    => $modules['gm.be.guide']
    ],
    [
        'partition_id' => $partitionbar['users'], 
        'module_id'    => $modules['gm.be.users']
    ],
    [
        'partition_id' => $partitionbar['users'], 
        'module_id'    => $modules['gm.be.user_roles']
    ],
    [
        'partition_id' => $partitionbar['region'], 
        'module_id'    => $modules['gm.be.languages']
    ],
    [
        'partition_id' => $partitionbar['logging'], 
        'module_id'    => $modules['gm.be.audit_log']
    ],
    [
        'partition_id' => $partitionbar['debug'], 
        'module_id'    => $modules['gm.be.debug_toolbar']
    ],
    [
        'partition_id' => $partitionbar['workspace'], 
        'module_id'    => $modules['gm.be.partitionbar']
    ],
    [
        'partition_id' => $partitionbar['workspace'], 
        'module_id'    => $modules['gm.be.traybar']
    ],
    [
        'partition_id' => $partitionbar['workspace'], 
        'module_id'    => $modules['gm.be.menu']
    ],
    [
        'partition_id' => $partitionbar['tools'], 
        'module_id'    => $modules['gm.be.filemanager']
    ]
];