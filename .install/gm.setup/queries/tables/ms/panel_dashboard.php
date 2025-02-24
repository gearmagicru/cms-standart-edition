<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_dashboard}}" (Информационная панель).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    [
        'id'             => $dashboards['desktop'],
        'index'          => 1, 
        'name'           => $installer->isRu() ? 'Рабочий стол' : 'Desktop', 
        'columns_count'  => 1, 
        'columns_widths' => '100|0|0|0', 
        'enabled'        => 1
    ]
];