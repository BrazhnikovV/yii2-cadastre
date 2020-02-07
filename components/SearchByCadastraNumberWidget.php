<?php

namespace brazhnikov\yii2cadastre\components;

use yii\base\Widget;
use yii\helpers\Html;
use yii\base\Component;

/**
 * SearchByCadastraNumberWidget - класс виджет выполняющий поиск данных по кадастровому номеру
 *
 * @version 1.0.1
 * @package brazhnikov\yii2cadastre\components
 * @author  Vasya Brazhnikov
 * @copyright Copyright (c) 2020, Vasya Brazhnikov
 */
class SearchByCadastraNumberWidget extends Widget
{

    /**
     * @access public
     * @var $cssClass -
     */
    public $cssClass;

    /**
     * init
     * @return void
     */
    public function init() {
        parent::init();

    }

    /**
     * run
     * @return mixed
     */
    public function run() {
        return $this->render('index');
    }

}
