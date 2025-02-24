<?php
/**
 * Файл конфигурации подключений к базе данных.
 * 
 * Здесь указываются подключения в виде пары (имя подключения - параметры).
 * Где имя "default", является подключением по умолчанию. Можно дополнительно 
 * указать подключения, который будет будет использовать адаптер подключения к 
 * базе данных.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    'default'     => [
        'driver'      => '{driver}',
        'host'        => '{host}',
        'password'    => '{password}',
        'username'    => '{username}',
        'schema'      => '{schema}',
        'charset'     => '{charset}',
        'collate'     => '{collate}',
        'port'        => '{port}',
        'engine'      => 'InnoDB',
        'tablePrefix' => '{tablePrefix}'
    ]
];
