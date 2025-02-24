<?php
/**
 * Сайт.
 * 
 * Файл записей таблицы "{{reference_articles}}" (Типы материалов сайта).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

use Gm\Helper\Json;

$unescaped = JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES;

return [
    [
        'id'          => 1,
        'name'        => $isRu ? 'Все материалы' : 'All articles',
        'description' => $isRu ? 'Все материалы сайта' : 'All site articles',
        'icon'        => MODULE_BASE_URL . '/gm/gm.be.references.articles/assets/images/types/article.svg',
        'enabled'     => 1,
        'all'         => 1, // просмотреть все материалы
        'tab_attributes' => Json::encode([
            'title'        => '', // название вкладки
            'visible'      => 1, // показать вкладку
            'language'     => 0, // язык
            'template'     => '', // шаблон материала
            'pageTemplate' => '', // шаблон страницы
            'slugType'     => 0, // вид ярылка
            'category'     => 0, // категория
            'slugEnabled'  => 1, // отображать слаг
            'imageEnabled' => 1, // возможность добавить основное изображение
            'publishDateEnabled'  => 1, // отображать дату публикации
            'publishOnMain'       => 1, // опубликовать на главной странице
            'publishInCategories' => 1, // опубликовать в разделах сайта
            'publish' => 1, // опубликовать
        ], true, $unescaped),
        'tab_announce' => Json::encode([
            'title'   => '',
            'visible' => 1
        ], true, $unescaped),
        'tab_text' => Json::encode([
            'title'   => '',
            'visible' => 1
        ], true, $unescaped),
        'tab_seo' => Json::encode([
            'title'             => '',
            'visible'           => 1,
            'metatagEnabled'    => 1, // отображать раздел "Метатег материала"
            'sitemapEnabled'    => 1, // отображать раздел "Карта сайта"
            'feedEnabled'       => 1, // отображать раздел "Фид"
            'indexingEnabled'   => 1, // отображать раздел "Директивы индексирования"
            'directivesEnabled' => 1, // отображать раздел "Особые директивы"
        ], true, $unescaped),
        'tab_additionally' => Json::encode([
            'title'             => '',
            'visible'           => 1,
            'fldInSearchCheck'  => 1, // значение флажка "Поиск"
            'fldInSitemapCheck' => 1, // значение флажка "Карта сайта"
            'fldCachingCheck'   => 1, // значение флажка "Кэширование"
            'fldIndexShow'      => 1, // отображать поле "Порядок"
            'fldHitsShow'       => 1, // отображать поле "Кол. просмотров"
            'fldTagsShow'       => 1, // отображать поле "Метки"
            'fldInSearchShow'   => 1, // отображать флажок "Поиск"
            'fldInSitemapShow'  => 1, // отображать флажок "Карта сайта"
            'fldCachingShow'    => 1, // отображать флажок "Кэширование"
        ], true, $unescaped)
    ],

    [
        'id'          => 2,
        'name'        => $isRu ? 'Новости сайта' : 'News',
        'description' => $isRu ? 'Все новости сайта' : 'All site news',
        'icon'        => MODULE_BASE_URL . '/gm/gm.be.references.articles/assets/images/types/article.svg',
        'enabled'     => 1,
        'all'         => 0, // просмотреть все материалы
        'columns'     => Json::encode([
            'index'        => ['enabled' => false],
            'slugType'     => ['enabled' => false], // вид ярлыка
            'slug'         => ['enabled' => false], // ярлык
            'template'     => ['enabled' => false], // шаблон метериала
            'pageTemplate' => ['enabled' => false], // шаблон страницы
            'languageName' => ['enabled' => false], // язык
            'categoryName' => ['enabled' => false], // категория 
            'indexing'     => ['enabled' => false], // индексирование
            'hits'       => ['enabled' => false], // кол. посещений
            'caching'      => ['enabled' => false] // кэширование
        ], true, $unescaped),
        'tab_attributes' => Json::encode([
            'title'   => '', // название вкладки
            'visible' => 1, // показать вкладку
            'language'     => 570643, // язык русский
            'template'     => 'articles/news', // шаблон материала
            'pageTemplate' => 'pages/news', // шаблон страницы
            'slugType'     => 2, // вид ярылка
            'category'     => 1, // категория
            'slugEnabled'  => 0, // отображать слаг
            'imageEnabled' => 1, // возможность добавить основное изображение
            'publishDateEnabled'  => 1, // отображать дату публикации
            'publishOnMain'       => 1, // опубликовать на главной странице
            'publishInCategories' => 1, // опубликовать в разделах сайта
            'publish' => 1, // опубликовать
        ], true, $unescaped),
        'tab_announce' => Json::encode([
            'title'   => '',
            'visible' => 1
        ], true, $unescaped),
        'tab_text' => Json::encode([
            'title'   => '',
            'visible' => 1
        ], true, $unescaped),
        'tab_seo' => Json::encode([
            'title'             => '',
            'visible'           => 1,
            'metatagEnabled'    => 1, // отображать раздел "Метатег материала"
            'sitemapEnabled'    => 1, // отображать раздел "Карта сайта"
            'feedEnabled'       => 1, // отображать раздел "Фид"
            'indexingEnabled'   => 1, // отображать раздел "Директивы индексирования"
            'directivesEnabled' => 1, // отображать раздел "Особые директивы"
        ], true, $unescaped),
        'tab_additionally' => Json::encode([
            'title'             => '',
            'visible'           => 1,
            'fldInSearchCheck'  => 1, // значение флажка "Поиск"
            'fldInSitemapCheck' => 1, // значение флажка "Карта сайта"
            'fldCachingCheck'   => 1, // значение флажка "Кэширование"
            'fldIndexShow'      => 1, // отображать поле "Порядок"
            'fldHitsShow'       => 1, // отображать поле "Кол. просмотров"
            'fldTagsShow'       => 1, // отображать поле "Метки"
            'fldInSearchShow'   => 1, // отображать флажок "Поиск"
            'fldInSitemapShow'  => 1, // отображать флажок "Карта сайта"
            'fldCachingShow'    => 1, // отображать флажок "Кэширование"
        ], true, $unescaped)
    ]
];