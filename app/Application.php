<?php
/**
 * Этот файл является частью приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace App;

use Gm;
use Gm\Exception;

/**
 * Веб-приложение "GearMagic: Управление сайтом" (GM CMS).
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package App
 */
class Application extends \Gm\Mvc\Application
{
    /**
     * {@inheritdoc}
     */
    public array $viewConfig = [
        'useTheme'    => true,
        'useLocalize' => true
    ];

    /**
     * {@inheritdoc}
     */
    public function routeNotFound(): void
    {
        // если запрос относится к веб-сайту
        if (IS_FRONTEND) {
            $module = $this->modules->get('gm.fe.site');
            if ($module) {
                $module->findController();
                $module->run();
                $this->response->send();
            }
            return;
        }
        throw new Exception\PageNotFoundException();
    }
}
