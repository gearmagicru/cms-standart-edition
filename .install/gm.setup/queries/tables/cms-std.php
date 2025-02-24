<?php
/**
 * Таблицы используемые картой SQL запросов (раздел "insert").
 * 
 * Веб-приложения «GearMagic: Управление сайтом» (GM СMS).
 * Редакции «Стандарт» (GM CMS:STD).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    // модули панели разделов
    '{{panel_partitionbar_modules}}' => require('cms-std/panel_partitionbar_modules.php'),
    // информационная панель
    '{{panel_dashboard}}' => require('cms-std/panel_dashboard.php'),
        // виджеты информационных панелей
        '{{panel_dashboard_widgets}}' => require('cms-std/panel_dashboard_widgets.php')
];