<?php
/**
 * Файл конфигурации языков.
 * 
 * Здесь перечисляются локализации с их параметрами конфигурации, только те, 
 * которые поставляются непосредственно с фреймворком.

 * Локализации добавленные через Панель управления "GM Panel", будут в файле 
 * конфигурации ".language.so" (включая локализации перечисленные ниже).
 * 
 * @link https://gearmagic.ru/
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */
 
return [
    /*
     * Русская локализация.
     */
    'ru_RU' => [
        'tag'       => 'ru-RU',
        'code'      => 570643,
        'name'      => 'Русский язык',
        'shortName' => 'Русский',
        'country'   => 'Россия',
        'slug'      => 'ru',
        'locale'    => 'ru_RU',
        'alternative' => 'en_GB',
        FRONTEND    => true,
        BACKEND     => true
    ],

    /*
     * Английская (британская) локализация.
     */
    'en_GB' => [
        'tag'       => 'en-GB',
        'code'      => 45826,
        'name'      => 'English language',
        'shortName' => 'English',
        'country'   => 'United Kingdom',
        'slug'      => 'en',
        'locale'    => 'en_GB',
        'alternative' => 'en_GB',
        FRONTEND    => true,
        BACKEND     => true
    ]
];
