<?php

namespace brazhnikov\yii2cadastre;
use yii\web\AssetBundle;

/**
 * AppAssetsBundle - конфигурационный класс для подключения ресурсов.
 *
 * @version 1.0.1
 * @package brazhnikov\yii2cadastre
 * @author  Vasya Brazhnikov
 * @copyright Copyright (c) 2020, Vasya Brazhnikov
 */
class AppAssetsBundle extends AssetBundle
{
    /**
     * @access public
     * @var $sourcePath - путь к папке с ресурсами
     */
    public $sourcePath = '@vendor/brazhnikov/yii2-cadastre/assets';

    /**
     * @access public
     * @var $css - массив путей к файлам таблиц стилей
     */
    public $css = [
        'css/style.css'
    ];
}
