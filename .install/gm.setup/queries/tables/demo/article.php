<?php
/**
 * Сайт.
 * 
 * Файл записей таблицы "{{article}}" (Материалы сайта).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

use Gm\Filesystem\Filesystem as Fs;
use Gm\Helper\Json;

$rows = [];
$unescaped = JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES;
/** @var string $filename Имя файла шаблона материала */
$path = __DIR__ . '/article';

// статья
$text = Fs::get($path . '/article.html');
$rows[] = [
    'language_id'           => $isRu ? '570643' : null,
    'type_id'               => 1, // материал - статья 
    'category_id'           => null, 
    'index'                 => 1, 
    'template'              => 'articles/default', 
    'page_template'         => 'pages/article', 
    'publish'               => 1, 
    'publish_on_main'       => 1, 
    'publish_in_categories' => 0, 
    'publish_date'          => gmdate('Y-m-d H:i:s'),
    'header'                => $isRu ? 'Образец статьи' : 'Sample article', 
    'text'                  => $text, 
    'text_plain'            => strip_tags($text), 
    'announce'              => null, 
    'announce_plain'        => null,
    'slug_type'             => 1,
    'slug'                  => 'sample-article',
    'slug_hash'             => md5('sample-article')
];

// новость
$text = Fs::get($path . '/news.html');
$rows[] = [
    'language_id'           => $isRu ? '570643' : null,
    'type_id'               => 2, // материал - новость 
    'category_id'           => 1, // новости
    'index'                 => 1, 
    'template'              => 'articles/news', 
    'page_template'         => 'pages/news', 
    'publish'               => 1, 
    'publish_on_main'       => 1, 
    'publish_in_categories' => 1, 
    'publish_date'          => gmdate('Y-m-d H:i:s'),
    'header'                => $isRu ? 'Образец новости' : 'Sample news',
    'text'                  => $text, 
    'text_plain'            => strip_tags($text), 
    'announce'              => $announce, 
    'announce_plain'        => strip_tags($announce),
    'slug_type'             => 2, 
    'slug'                  => 'sample-news',
    'slug_hash'             => md5('sample-news')
];
return $rows;