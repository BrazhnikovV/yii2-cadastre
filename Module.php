<?php

namespace brazhnikov\yii2cadastre;

use yii\base\Module as BaseModule;

/**
 * Module - класс модуля, чтобы расширение работало, как отдельный модуль
 *
 * @version 1.0.1
 * @package brazhnikov\yii2cadastre
 * @author  Vasya Brazhnikov
 * @copyright Copyright (c) 2020, Vasya Brazhnikov
 */
class Module extends BaseModule
{
    /**
     * @access public
     * @var $controllerNamespace - адрес пространства расположения контроллеров
     */
    public $controllerNamespace = 'brazhnikov\yii2cadastre\controllers';
}
