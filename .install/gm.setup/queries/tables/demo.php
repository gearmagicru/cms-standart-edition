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

/** @var bool $isRu Текущая установка в русской локализации*/
$isRu = $installer->isRu();

return [
  // роли пользователей
  '{{role}}' => require('demo/role.php'),
      // автозапуск модулей и расширений
      '{{panel_autorun}}' => require('demo/panel_autorun.php'),
      // права доступа к элементам панели разделов
      '{{panel_partitionbar_roles}}' => require('demo/panel_partitionbar_roles.php'),
      // права доступа к элементам панели уведомлений
      '{{panel_traybar_roles}}' => require('demo/panel_traybar_roles.php'),
      // права доступа к информационным панелям
      '{{panel_dashboard_roles}}' => require('demo/panel_dashboard_roles.php'),
      // права доступа к элементам меню панели управления
      '{{panel_menu_roles}}' => require('demo/panel_menu_roles.php'),
      // права доступа к модулям
      '{{module_permissions}}' => require('demo/module_permissions.php'),
      // права доступа к расширениям модулей
      '{{extension_permissions}}' => require('demo/extension_permissions.php'),
  // типы материалов
  '{{reference_articles}}' => require('demo/reference_articles.php'),
  // материалы сайта
  '{{article}}' => require('demo/article.php'),
      // категории материала сайта
      '{{article_category}}' => require('demo/article_category.php'),
  // метки материала
  '{{tag}}' => require('demo/tag.php'),
  // пользователи
  '{{user}}' => require('demo/user.php'),
      // профили пользователей
      '{{user_profile}}' => require('demo/user_profile.php'),
    // меню сайта
    '{{menu}}' => require('demo/menu.php'),
        // пункты меню сайта
        '{{menu_items}}' => require('demo/menu_items.php')
];