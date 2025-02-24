<?php
/**
 * Файл конфигурации менеджера служб.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    /** Cлужба "HTTP-ответ" */
    'response' => [
        'class'      => '\Gm\Panel\Http\Response',
        'formatters' => [
            'jsong' => '\Gm\Panel\Http\Response\JsongResponseFormatter',
        ]
    ],

    /** Cлужба "Пользователь" */
    'user' => [
        'class'         => '\Gm\Panel\User\User',
        'identityClass' => '\Gm\Panel\User\UserIdentity',
        'storageClass'  => '\Gm\User\UserSessionStorage'
    ],

    /** Cлужба "Таблицы кэша" */
    'tables' => [
        'class'    => '\Gm\Cache\CacheTable',
        'patterns' => [
        ]
    ]
];
