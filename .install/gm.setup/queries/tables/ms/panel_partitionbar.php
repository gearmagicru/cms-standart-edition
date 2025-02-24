<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_partitionbar}}" (Панель разделов).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    [
        'id'        => $partitionbar['guide'],
        'count'     => 0,
        'index'     => 1,
        'code'      => 'guide',
        'icon'      => 'far fa-info-circle',
        'icon_type' => 'font',
        'name'      => '#Guide',
        'visible'   => 1
    ],
    [
        'id'        => $partitionbar['settings'],
        'count'     => 10,
        'index'     => 2,
        'code'      => 'settings',
        'icon'      => 'far fa-cog',
        'icon_type' => 'font',
        'name'      => '#Configuration',
        'visible'   => 1
    ],
        [
            'id'        => $partitionbar['users'],
            'parent_id' => $partitionbar['settings'],
            'count'     => 0,
            'index'     => 1,
            'code'      => 'users',
            'icon'      => 'fas fa-user-shield',
            'icon_type' => 'fcss',
            'name'      => '#Users and permissions',
            'visible'   => 1
        ],
        [
            'id'        => $partitionbar['region'],
            'parent_id' => $partitionbar['settings'],
            'count'     => 0,
            'index'     => 2,
            'code'      => 'regionAndLanguages',
            'icon'      => 'fas fa-globe',
            'icon_type' => 'fcss',
            'name'      => '#Region and languages',
            'visible'   => 1
        ],
        [
            'id'        => $partitionbar['logging'],
            'parent_id' => $partitionbar['settings'],
            'count'     => 0,
            'index'     => 3,
            'code'      => 'loggingAndErrors',
            'icon'      => 'fas fa-feather',
            'icon_type' => 'fcss',
            'name'      => '#Logging and errors',
            'visible'   => 1
        ],
        [
            'id'        => $partitionbar['debug'],
            'parent_id' => $partitionbar['settings'],
            'count'     => 0,
            'index'     => 4,
            'code'      => 'debug',
            'icon'      => 'fal fa-bug',
            'icon_type' => 'fcss',
            'name'      => '#Debug',
            'visible'   => 1
        ],

        [
            'id'        => $partitionbar['workspace'],
            'parent_id' => $partitionbar['settings'],
            'count'     => 0,
            'index'     => 5,
            'code'      => 'workspace',
            'icon'      => 'far fa-desktop-alt',
            'icon_type' => 'fcss',
            'name'      => '#Workspace',
            'visible'   => 1
        ],
        [
            'id'        => $partitionbar['system'],
            'parent_id' => $partitionbar['settings'],
            'count'     => 0,
            'index'     => 6,
            'code'      => 'system',
            'icon'      => 'far fa-cog',
            'icon_type' => 'fcss',
            'name'      => '#System',
            'visible'   => 1
        ],
        [
            'id'        => $partitionbar['appearance'],
            'parent_id' => $partitionbar['settings'],
            'count'     => 0,
            'index'     => 7,
            'code'      => 'appearance',
            'icon'      => 'fas fa-palette',
            'icon_type' => 'fcss',
            'name'      => '#Appearance',
            'visible'   => 1
        ],
        [
            'id'        => $partitionbar['tools'],
            'parent_id' => $partitionbar['settings'],
            'count'     => 0,
            'index'     => 8,
            'code'      => 'tools',
            'icon'      => 'far fa-tools',
            'icon_type' => 'fcss',
            'name'      => '#Tools',
            'visible'   => 1
        ],
        [
            'id'        => $partitionbar['defense'],
            'parent_id' => $partitionbar['settings'],
            'count'     => 0,
            'index'     => 9,
            'code'      => 'proactiveDefense',
            'icon'      => 'far fa-shield-alt',
            'icon_type' => 'fcss',
            'name'      => '#Proactive defense',
            'visible'   => 1
        ],
        [
            'id'        => $partitionbar['other'],
            'parent_id' => $partitionbar['settings'],
            'count'     => 0,
            'index'     => 10,
            'code'      => 'other',
            'icon'      => 'far fa-info-circle',
            'icon_type' => 'fcss',
            'name'      => '#Other settings',
            'visible'   => 1
        ],
    [
        'id'        => $partitionbar['marketplace'],
        'count'     => 0,
        'index'     => 3,
        'code'      => 'marketplace',
        'icon'      => 'fas fa-cloud-download',
        'icon_type' => 'font',
        'name'      => '#Marketplace',
        'visible'   => 1
    ]
];