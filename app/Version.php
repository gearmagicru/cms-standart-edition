<?php
/**
 * Этот файл является частью приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace App;

/**
 * Версия веб-приложения GearMagic.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package App
 */
class Version extends \Gm\Version\AppVersion
{
    /**
     * {@inheritdoc}
     */
    public string $code = 'GM CMS';

    /**
     * {@inheritdoc}
     */
    public string $name = 'GearMagic: Site management';

    /**
     * {@inheritdoc}
     */
    public string $originalName = 'GearMagic: Управление сайтом';

    /**
     * {@inheritdoc}
     */
    public string $number = '1.0.1';

    /**
     * {@inheritdoc}
     */
    public string $date = '12/06/2025';

    /**
     * {@inheritdoc}
     */
    public string $resource = 'https://apps.gearmagic.ru/cms';

    /**
     * {@inheritdoc}
     */
    public string $docsResource = 'https://docs.gearmagic.ru/cms/1.x';

    /**
     * {@inheritdoc}
     * 
     * Здесь свойству будут указаны параметры обновленной версии редакции веб-приложения.
     */
    protected mixed $edition = null;
}
