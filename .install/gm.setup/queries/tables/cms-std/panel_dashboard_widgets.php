<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_dashboard_widgets}}" (Виджеты на информационных панелях).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

use Gm\Helper\Json;

return [
    [
        'widget_id' => $widgets['gm.ds.shortcuts'],
        'panel_id'  => $dashboards['site'],
        'column'    => 1,
        'index'     => 1,
        'options'   => Json::encode([
            'showModules'     => true,
            'showExtensions'  => true,
            'showTitle'       => true, 
            'showDescription' => true,
            'showSmall'       => false,
            'modules'         => [
                $modules['gm.be.site_menu']          => true, 
                $modules['gm.be.site_markup']        => true, 
                $modules['gm.be.media_gallery']      => true, 
                $modules['gm.be.rss_feeds']          => true, 
                $modules['gm.be.articles']           => true, 
                $modules['gm.be.article_categories'] => true,
                $modules['gm.be.mediafiles']         => true,
                $modules['gm.be.tags']               => true
            ],
            'extensions' => [
                $extensions['gm.be.references.articles']        => true,
                $extensions['gm.be.references.media_types']     => true,
                $extensions['gm.be.references.media_folders']   => true,
                $extensions['gm.be.references.media_dialogs']   => true,
                $extensions['gm.be.references.folder_profiles'] => true
            ]
        ])
    ],
    [
        'widget_id' => $widgets['gm.ds.version'],
        'panel_id'  => $dashboards['site'],
        'column'    => 2,
        'index'     => 1,
        'options'   => Json::encode([
            'showAppVersion'     => true,
            'showEditionVersion' => true,
            'showVersions'       => true, 
            'showReleaseDate'    => true,
            'showPanelVersion'   => false,
            'showFwVersion'      => false,
            'showDetails'        => false
        ])
    ],
    [
        'widget_id' => $widgets['gm.ds.license'],
        'panel_id'  => $dashboards['site'],
        'column'    => 2,
        'index'     => 2
    ]
];