<?php
/**
 * Файл конфигурации модулей.
 * 
 * Здесь перечисляются модули (backend, frontend) с их параметрами конфигурации, только те, 
 * которые поставляются непосредственно с фреймворком и обеспечивают работоспособность приложения.
 * 
 * Модули добавленные через Панель управления "GM Panel", будут в файле 
 * конфигурации ".modules.so" (включая модули перечисленные ниже).
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */
 
return [
    /**
     * Модуль "Веб-сайт".
     */
    'gm.fe.site' => [
        'namespace' => 'Gm\Frontend\Site',
        'path'      => '/gm/gm.fe.site'
    ],

    /**
     * Модуль "Авторизация в Панели управления".
     */
    'gm.be.signin' => [
        'namespace' => 'Gm\Backend\Signin',
        'path'      => '/gm/gm.be.signin'
    ],

    /**
     * Модуль "Выход из Панели управления".
     */
    'gm.be.signout' => [
        'namespace' => 'Gm\Backend\Signout',
        'path'      => '/gm/gm.be.signout'
    ],

    /**
     * Модуль "Системные задачи".
     */
    'gm.be.task' => [
        'namespace' => 'Gm\Backend\Task',
        'path'      => '/gm/gm.be.task'
    ],

    /**
     * Модуль "Рабочее пространство".
     */
    'gm.be.workspace' => [
        'namespace' => 'Gm\Backend\Workspace',
        'path'      => '/gm/gm.be.workspace'
    ]
];
