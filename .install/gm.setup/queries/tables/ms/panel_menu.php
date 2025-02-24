<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_menu}}" (Меню Панели управления).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    [
        'id'        => 1,
        'name'      => '#File',
        'count'     => 1,
        'index'     => 1,
        'enabled'   => 1,
        'visible'   => 1
    ],
        [
            'id'        => 2,
            'parent_id' => 1,
            'name'      => '#Exit',
            'count'     => 0,
            'index'     => 1,
            'icon'      => 'g-icon_item-signout',
            'enabled'   => 1,
            'visible'   => 1,
            'handler'   => 'signuotShow',
        ],
    [
        'id'        => 3,
        'name'      => '#View',
        'count'     => 0,
        'index'     => 2,
        'menu_id'   => 'menu-view',
        'enabled'   => 1,
        'visible'   => 1,
        'handler'   => 'loadWidget',
        'handler_args' => 'route=@backend/config/wspace',
    ],
    [
        'id'        => 4,
        'name'      => '#Tabs',
        'count'     => 5,
        'index'     => 3,
        'item_id'   => 'menu-tabs',
        'enabled'   => 1,
        'visible'   => 1
    ],
        [
            'id'        => 5,
            'parent_id' => 4,
            'name'      => '#Next tab',
            'count'     => 0,
            'index'     => 1,
            'icon'      => 'g-icon_item-tab-next',
            'enabled'   => 1,
            'visible'   => 1,
            'handler'   => 'nextTabComponent'
        ],
        [
            'id'        => 6,
            'parent_id' => 4,
            'name'      => '#Previous tab',
            'count'     => 0,
            'index'     => 2,
            'icon'      => 'g-icon_item-tab-prev',
            'enabled'   => 1,
            'visible'   => 1,
            'handler'   => 'prevTabComponent'
        ],
        [
            'id'        => 7,
            'parent_id' => 4,
            'name'      => '-',
            'count'     => 0,
            'index'     => 3,
            'enabled'   => 1,
            'visible'   => 1
        ],
        [
            'id'        => 8,
            'parent_id' => 4,
            'name'      => '#Close',
            'count'     => 0,
            'index'     => 4,
            'icon'      => 'g-icon_item-tab-close',
            'enabled'   => 1,
            'visible'   => 1,
            'handler'   => 'closeTabComponent'
        ],
        [
            'id'        => 9,
            'parent_id' => 4,
            'name'      => '#Close all',
            'count'     => 0,
            'index'     => 5,
            'icon'      => 'g-icon_item-tabs-close',
            'enabled'   => 1,
            'visible'   => 1,
            'handler'   => 'closeTabsComponent'
        ],
    [
        'id'      => 10,
        'name'    => '#Add',
        'count'   => 0,
        'index'   => 4,
        'plugin'  => 'Append',
        'enabled' => 1,
        'visible' => 1
    ],
    [
        'id'      => 11,
        'name'    => '#Help',
        'count'   => 5,
        'index'   => 5,
        'enabled' => 1,
        'visible' => 1
    ],
        [
            'id'        => 12,
            'parent_id' => 11,
            'name'      => '#Guide',
            'count'     => 0,
            'index'     => 1,
            'icon'      => 'g-icon_item-help',
            'enabled'   => 1,
            'visible'   => 1,
            'handler'   => 'loadWidget',
            'handler_args' => 'route=@backend/guide',
        ],
        [
            'id'        => 13,
            'parent_id' => 11,
            'name'      => 'GearMagic',
            'count'     => 0,
            'index'     => 2,
            'enabled'   => 1,
            'visible'   => 1,
            'handler'   => 'openBrowserWindow',
            'handler_args' => 'url=https://gearmagic.ru/',
        ],
        [
            'id'        => 14,
            'parent_id' => 11,
            'name'      => '-',
            'count'     => 0,
            'index'     => 3,
            'enabled'   => 1,
            'visible'   => 1
        ],
        [
            'id'        => 15,
            'parent_id' => 11,
            'name'      => '#Marketplace panel',
            'count'     => 0,
            'index'     => 4,
            'icon'      => 'g-icon_item-mp',
            'enabled'   => 1,
            'visible'   => 1,
            'handler'   => 'loadWidget',
            'handler_args' => 'route=@backend/marketplace/desk',
        ],
        [
            'id'        => 16,
            'parent_id' => 11,
            'name'      => '#Marketplace catalog',
            'count'     => 0,
            'index'     => 5,
            'icon'      => 'g-icon_item-mp_catalog',
            'enabled'   => 1,
            'visible'   => 1,
            'handler'   => 'loadWidget',
            'handler_args' => 'route=@backend/marketplace/catalog',
        ],
        [
            'id'        => 17,
            'parent_id' => 11,
            'name'      => '-',
            'count'     => 0,
            'index'     => 6,
            'enabled'   => 1,
            'visible'   => 1
        ],
        [
            'id'        => 18,
            'parent_id' => 11,
            'name'      => '#Version',
            'count'     => 0,
            'index'     => 7,
            'icon'      => 'g-icon_item-info',
            'enabled'   => 1,
            'visible'   => 1,
            'handler'   => 'loadWidget',
            'handler_args' => 'route=@backend/config/version',
        ],
];