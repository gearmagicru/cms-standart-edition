<?php
/**
 * Идентфикаторы (переменные) запроса.
 * 
 * Веб-приложения «GearMagic: Управление сайтом» (GM СMS).
 * Редакции «Стандарт» (GM CMS:STD).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    // идентфикаторы модулей
    'modules' => [
        'gm.be.site_menu',
        'gm.be.site_markup',
        'gm.be.media_gallery',
        'gm.fe.sitemap',
        'gm.fe.rss',
        'gm.be.rss_feeds',
        'gm.be.tags',
        'gm.fe.tags'
    ],
    // идентфикаторы виджетов
    'widgets' => [
        'gm.wd.menu',
        'gm.wd.yandexshare',
        'gm.wd.fancybox',
        'gm.wd.lightgallery',
        'gm.wd.tagcloud',
        'gm.wd.tags'
    ],
    // идентфикаторы плагинов
    'plugins' => [
        'gm.plg.image_album'
    ],
    // информационная панель
    'dashboards' => [
        'site'
    ],
    // идентфикаторы ролей пользователей
    'roles' => [
        'editor' // Редактор
    ]
];
