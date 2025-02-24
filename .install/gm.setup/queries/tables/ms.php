<?php
/**
 * Таблицы используемые картой SQL запросов (раздел "insert").
 * 
 * Веб-приложения «GearMagic: Система управления» (GM MS).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    // api
    '{{api}}' => require('ms/api.php'),
    // роли пользователей
    '{{role}}' => require('ms/role.php'),
        // автозапуск модулей и расширений
        '{{panel_autorun}}' => require('ms/panel_autorun.php'),
        // права доступа к элементам панели разделов
        '{{panel_partitionbar_roles}}' => require('ms/panel_partitionbar_roles.php'),
        // права доступа к элементам панели уведомлений
        '{{panel_traybar_roles}}' => require('ms/panel_traybar_roles.php'),
        // права доступа к информарционным панелям
        '{{panel_dashboard_roles}}' => require('ms/panel_dashboard_roles.php'),
        // права доступа к элементам меню панели управления
        '{{panel_menu_roles}}' => require('ms/panel_menu_roles.php'),
    // панель разделов
    '{{panel_partitionbar}}' => require('ms/panel_partitionbar.php'),
        // модули панели разделов
        '{{panel_partitionbar_modules}}' => require('ms/panel_partitionbar_modules.php'),
        // расширения модулей панели разделов
        '{{panel_partitionbar_extensions}}' => require('ms/panel_partitionbar_extensions.php'),
    // информационная панель
    '{{panel_dashboard}}' => require('ms/panel_dashboard.php'),
        // виджеты информационных панелей
        '{{panel_dashboard_widgets}}' => require('ms/panel_dashboard_widgets.php'),
    // меню панели управления
    '{{panel_menu}}' => require('ms/panel_menu.php'),
    // панель уведомлений
    '{{panel_traybar}}' => require('ms/panel_traybar.php')
];
