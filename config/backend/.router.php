<?php
/**
 * Файл конфигурации маршрутизатора запросов.
 * 
 * Здесь перечисляются параметры маршрутизации модулей,
 * которые поставляются непосредственно с фреймворком и обеспечивают работоспособность 
 * панели управления "GM Panel".
 * 
 * Маршрутизация модулей (backend) добавленных через Панель управления "GM Panel", будут в файле 
 * конфигурации ".router.so" (включая маршрутизацию модулей перечисленных ниже).
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    /** Префиксы маршрутизации модулей */
    /*
     * Префикс состоит из пары (имя - маршрут).
     * Сюда приложение автоматически добавит префикс "backend", как базовый 
     * маршрут к Панели управления "GM Panel".
     */
    'prefixes' => [],

    /** Параметры маршрутизации модулей */
    'routes' => [
        /*
         * Модуль "Планировщик заданий".
         */
        'gm.be.task' => [
            'type'    => 'literal',
            'options' => [
                'module'   => 'gm.be.task',
                'route'    => 'task',
                'prefix'   => BACKEND,
                'defaults' => ['action' => 'status']
            ]
        ],

        /*
         * Модуль "Авторизация в панели управления".
         */
        'gm.be.signin.index' => [
            'type'    => 'literal',
            'options' => [
                'module' => 'gm.be.signin',
                'route'  => '/',
                'prefix' => BACKEND
            ]
        ],
        'gm.be.signin' => [
            'type'    => 'crudSegments',
            'options' => [
                'module'      => 'gm.be.signin',
                'route'       => 'signin',
                'prefix'      => BACKEND,
                'childRoutes' => [
                    'verify' => [
                        'route'    => 'verify',
                        'defaults' => ['action' => 'verify']
                    ]
                ]
            ]
        ],

        /*
         * Модуль "Рабочее пространство".
         */
        'gm.be.workspace' => [
            'type'    => 'crudSegments',
            'options' => [
                'module'      => 'gm.be.workspace',
                'route'       => 'workspace',
                'prefix'      => BACKEND,
                'childRoutes' => [
                    'data' => [
                        'route'    => 'data',
                        'defaults' => ['action' => 'data']
                    ],
                    'ctree' => [
                        'route'    => 'widgetstree',
                        'defaults' => ['controller' => 'Navigation\WidgetsTree']
                    ]
                ]
            ]
        ],

        /*
         * Модуль "Журнал аудита действий пользователей".
         */
        'gm.be.audit_log' => [
            'type'    => 'crudSegments',
            'options' => [
                  'module'      => 'gm.be.audit_log',
                  'route'       => 'audit-log',
                  'prefix'      => BACKEND,
                  'constraints' => ['id'],
                  'defaults'    => [
                      'controller' => 'Grid'
                  ]
            ]
        ]
    ]
];
