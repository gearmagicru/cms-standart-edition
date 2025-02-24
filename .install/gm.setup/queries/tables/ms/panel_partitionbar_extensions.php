<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_partitionbar_extensions}}" (Расширения модулей Панели разделов).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    [
        'partition_id' => $partitionbar['logging'],
        'extension_id' => $extensions['gm.be.config.logger']
    ],
    [
        'partition_id' => $partitionbar['logging'],
        'extension_id' => $extensions['gm.be.config.audit']
    ],
    [
        'partition_id' => $partitionbar['workspace'], 
        'extension_id' => $extensions['gm.be.config.wspace']
    ],
    [
        'partition_id' => $partitionbar['region'], 
        'extension_id' => $extensions['gm.be.config.timezone']
    ],
    [
        'partition_id' => $partitionbar['region'], 
        'extension_id' => $extensions['gm.be.config.datetime']
    ],
    [
        'partition_id' => $partitionbar['appearance'], 
        'extension_id' => $extensions['gm.be.mp.themes']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['gm.be.config.api_routes']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['gm.be.config.services']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['gm.be.config.license']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['gm.be.config.cache']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['gm.be.config.mail']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['gm.be.config.session']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['gm.be.config.upload']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['gm.be.config.url']
    ],
    [
        'partition_id' => $partitionbar['defense'], 
        'extension_id' => $extensions['gm.be.config.ipblocklist']
    ],
    [
        'partition_id' => $partitionbar['defense'], 
        'extension_id' => $extensions['gm.be.config.ipblacklist']
    ],
    [
        'partition_id' => $partitionbar['defense'],  
        'extension_id' => $extensions['gm.be.config.defense']
    ],
    [
        'partition_id' => $partitionbar['defense'], 
        'extension_id' => $extensions['gm.be.config.ipwhitelist']
    ],
    [
        'partition_id' => $partitionbar['marketplace'], 
        'extension_id' => $extensions['gm.be.mp.catalog']
    ],
    [
        'partition_id' => $partitionbar['marketplace'], 
        'extension_id' => $extensions['gm.be.mp.mmanager']
    ],
    [
        'partition_id' => $partitionbar['marketplace'],  
        'extension_id' => $extensions['gm.be.mp.emanager']
    ],
    [
        'partition_id' => $partitionbar['marketplace'], 
        'extension_id' => $extensions['gm.be.mp.wmanager']
    ],
    [
        'partition_id' => $partitionbar['marketplace'], 
        'extension_id' => $extensions['gm.be.mp.pmanager']
    ],
    [
        'partition_id' => $partitionbar['marketplace'], 
        'extension_id' => $extensions['gm.be.mp.themes']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['gm.be.config.page']
    ]
];