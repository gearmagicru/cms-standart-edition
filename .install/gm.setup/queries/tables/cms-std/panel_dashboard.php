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
        'id'             => $dashboards['site'],
        'index'          => 1, 
        'name'           => $installer->isRu() ? 'Сайт' : 'Site', 
        'columns_count'  => 2, 
        'columns_widths' => '75|25|0|0', 
        'enabled'        => 1
    ]
];