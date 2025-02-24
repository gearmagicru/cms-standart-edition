<?php
/**
 * Идентфикаторы (переменные) запроса.
 * 
 * Веб-приложения «GearMagic: Управление сайтом» (GM СMS).
 * Редакция «Старт» (GM CMS:STR).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    // идентфикаторы модулей
    'modules' => [
        'gm.fe.site',
        'gm.be.articles',
        'gm.be.article_categories',
        'gm.be.mediafiles'
    ],
    // идентфикаторы расширений модулей
    'extensions' => [
        'gm.be.references.articles',
        'gm.be.references.media_types',
        'gm.be.references.media_folders',
        'gm.be.references.media_dialogs',
        'gm.be.references.folder_profiles'
    ],
    // идентфикаторы виджетов
    'widgets' => [
        'gm.wd.article',
        'gm.wd.articles',
        'gm.wd.breadcrumbs',
        'gm.wd.fine_uploader'
    ],
    // идентфикаторы плагинов
    'plugins' => [],
    // идентфикаторы элементов Панели разделов
    'partitionbar' => [
        'site' // Сайт
    ]
];
