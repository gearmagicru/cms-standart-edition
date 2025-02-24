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
        'module_id'    => $modules['gm.be.articles']
    ],
    [
        'partition_id' => $partitionbar['site'], 
        'module_id'    => $modules['gm.be.article_categories']
    ],
    [
        'partition_id' => $partitionbar['site'], 
        'module_id'    => $modules['gm.be.mediafiles']
    ]
];
