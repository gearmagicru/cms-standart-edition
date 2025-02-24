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
        'partition_id' => $partitionbar['site'], 
        'module_id'    => $modules['gm.be.site_menu']
    ],
    [
        'partition_id' => $partitionbar['site'], 
        'module_id'    => $modules['gm.be.site_markup']
    ],
    [
        'partition_id' => $partitionbar['site'], 
        'module_id'    => $modules['gm.be.media_gallery']
    ],
    [
        'partition_id' => $partitionbar['site'], 
        'module_id'    => $modules['gm.be.rss_feeds']
    ],
    [
        'partition_id' => $partitionbar['site'], 
        'module_id'    => $modules['gm.be.tags']
    ]
];