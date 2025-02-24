<?php
/**
 * Файл конфигурации менеджера шорткодов (shortcodes).
 * 
 * Здесь перечисляются основные шорткоды, которые используются в шаблонах 
 * компонентов (backend, frontend).
* 
 * Компоненты, которые имеют шорткоды и добавленны через Панель управления "GM Panel", будут в файле 
 * конфигурации ".shortcodes.so" (включая шорткоды перечисленные ниже).
 * 
 * Пример записи шорткода в параметре 'shortcodes':
 * 1) короткая запись `['tagName' => 'moduleId']`, 
 * результат: `module->tagNameShortcode(attributes)`;
 * 2) полная запись `['tagName' => ['componentType' => 'componentId', 'func' => 'componentMethod']`,
 * результат: `component->componentMethod(attributes)`.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    /** Шаблон метода компонента (модуль, расширение, виджет) возвращающий шорткод */
    'patternFunc' => '%sShortcode',

    /** Теги шорткодов */
    'shortcodes' => [
        'html-title' => 'gm.fe.site',
        'html-meta'  => 'gm.fe.site',
        'html-begin' => 'gm.fe.site',
        'html-end'   => 'gm.fe.site',
        'html-load'  => 'gm.fe.site',
        'html-ready' => 'gm.fe.site',
        'html-head'  => 'gm.fe.site',
        'widget'     => 'gm.fe.site',
        'if'         => 'gm.fe.site'
    ]
];
