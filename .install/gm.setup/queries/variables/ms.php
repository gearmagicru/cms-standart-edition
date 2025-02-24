<?php
/**
 * Идентфикаторы (переменные) запроса.
 * 
 * Веб-приложения «GearMagic: Система управления» (GM MS).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    // идентфикаторы модулей
    'modules' => [
        'gm.be.terms',
        'gm.be.workspace',
        'gm.be.menu',
        'gm.be.dashboard',
        'gm.be.traybar',
        'gm.be.partitionbar',
        'gm.be.recovery',
        'gm.be.signin',
        'gm.be.users',
        'gm.be.user_roles',
        'gm.be.templates',
        'gm.be.languages',
        'gm.be.mp',
        'gm.be.config',
        'gm.be.guide',
        'gm.be.audit_log',
        'gm.be.debug_toolbar',
        'gm.be.error_report',
        'gm.be.task',
        'gm.be.references',
        'gm.be.filemanager',
        'gm.fe.api'
    ],
    // идентфикаторы расширений модулей
    'extensions' => [
        'gm.be.config.desk',
        'gm.be.config.api_routes',
        'gm.be.config.autorun',
        'gm.be.config.cache',
        'gm.be.config.datetime',
        'gm.be.config.defense',
        'gm.be.config.ipblacklist',
        'gm.be.config.ipblocklist',
        'gm.be.config.ipwhitelist',
        'gm.be.config.license',
        'gm.be.config.logger',
        'gm.be.config.mail',
        'gm.be.config.services',
        'gm.be.config.session',
        'gm.be.config.timezone',
        'gm.be.config.upload',
        'gm.be.config.url',
        'gm.be.config.version',
        'gm.be.config.wspace',
        'gm.be.config.audit',
        'gm.be.mp.desk',
        'gm.be.mp.catalog',
        'gm.be.mp.mmanager',
        'gm.be.mp.emanager',
        'gm.be.mp.wmanager',
        'gm.be.mp.pmanager',
        'gm.be.mp.themes',
        'gm.be.references.desk',
        'gm.be.references.elements',
        'gm.be.references.properties',
        'gm.be.config.page'
    ],
    // идентфикаторы виджетов
    'widgets' => [
        'gm.ds.shortcuts',
        'gm.ds.version',
        'gm.ds.license',
        'gm.wd.codemirror',
        'gm.wd.tinymce',
        'gm.wd.kcaptcha'
    ],
    // идентфикаторы плагинов
    'plugins' => [],
    // идентфикаторы элементов Панели разделов
    'partitionbar' => [
        'guide', 
        'settings', 
        'users', 
        'region',
        'logging',
        'debug',
        'workspace',
        'system',
        'appearance',
        'tools',
        'defense',
        'other',
        'marketplace'
    ],
    // информационная панель
    'dashboards' => [
        'desktop'
    ],
    // панель уведомлений
    'traybar' => [
        'audit',
        'debugger',
        'dashboard',
        'exit'
    ],
    // идентфикаторы ролей пользователей
    'roles' => [
        'root'
    ]
];
