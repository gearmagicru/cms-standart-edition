<?php
/**
 * Сайт.
 * 
 * Файл записей таблицы "{{article_category}}" (Категории материалов сайта).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    [
        'id'        => 1, 
        'index'     => 1, 
        'name'      => $isRu ? 'Новости' : 'News', 
        'publish'   => 1, 
        'slug'      => 'news', 
        'slug_path' => 'news', 
        'slug_hash' => md5('news'), 
        'ns_left'   => 1, 
        'ns_right'  => 2
    ]
];