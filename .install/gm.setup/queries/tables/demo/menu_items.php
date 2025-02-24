<?php
/**
 * Сайт.
 * 
 * Файл записей таблицы "{{menu_items}}" (Пункты меню сайта).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    [
        'id'        => 1,
        'parent_id' => 0,
        'menu_id'   => 1,
        'count'     => 0,
        'index'     => 1,
        'type'      => 'anchor',
        'name'      => $isRu ? 'Пункт-1' : 'Item-1',
        'url'       => '/sample-article.html',
        'visible'   => 1,
        'description' => $isRu ? 'Пункт-1' : 'Item-1',
        'language_id' => null
    ],
    [
        'id'        => 2,
        'parent_id' => 0,
        'menu_id'   => 1,
        'count'     => 0,
        'index'     => 2,
        'type'      => 'anchor',
        'name'      => $isRu ? 'Пункт-2' : 'Item-2',
        'url'       => '/sample-article.html',
        'visible'   => 1,
        'description' => $isRu ? 'Пункт-2' : 'Item-2',
        'language_id' => null
    ],
    [
        'id'        => 3,
        'parent_id' => 0,
        'menu_id'   => 1,
        'count'     => 0,
        'index'     => 3,
        'type'      => 'anchor',
        'name'      => $isRu ? 'Пункт-3' : 'Item-3',
        'url'       => '/sample-article.html',
        'visible'   => 1,
        'description' => $isRu ? 'Пункт-3' : 'Item-3',
        'language_id' => null
    ]
];