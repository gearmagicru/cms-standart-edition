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
        'panel_id'  => $dashboards['desktop'],
        'column'    => 1,
        'index'     => 1,
        'options'   => Json::encode([
            'showModules'     => true,
            'showExtensions'  => true,
            'showTitle'       => true, 
            'showDescription' => true,
            'showSmall'       => false,
            'modules'         => [
                $modules['gm.be.traybar']       => true, 
                $modules['gm.be.partitionbar']  => true,  
                $modules['gm.be.users']         => true,  
                $modules['gm.be.user_roles']    => true, 
                $modules['gm.be.templates']     => true, 
                $modules['gm.be.languages']     => true, 
                $modules['gm.be.mp']            => true, 
                $modules['gm.be.config']        => true, 
                $modules['gm.be.guide']         => true,  
                $modules['gm.be.audit_log']     => true, 
                $modules['gm.be.debug_toolbar'] => true, 
                $modules['gm.be.references']    => true, 
                $modules['gm.be.filemanager']   => true,
            ],
            'extensions' => [
                $extensions['gm.be.config.license'] => true
            ]
        ])
    ]
];