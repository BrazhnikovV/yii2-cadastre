<?php

namespace brazhnikov\yii2cadastre\controllers;

use Yii;
use yii\web\Controller;
use brazhnikov\yii2cadastre\AppAssetsBundle;

/**
 * MainController - класс контроллер(дефолтный) пакета модуля
 *
 * @version 1.0.1
 * @package brazhnikov\yii2cadastre\controllers
 * @author  Vasya Brazhnikov
 * @copyright Copyright (c) 2020, Vasya Brazhnikov
 */
class MainController extends Controller
{
    /**
     * @access public
     * @var $layout - родительская обертка представлений приложения
     */
    // используется обертка приложения использующего данное расширение
    // public $layout = 'main';

    /**
     * actionIndex
     * @return string
     */
    public function actionIndex() {
        // регистрируем ресурсы:
        AppAssetsBundle::register( $this->view );

        return $this->render('index',[
            'datas' => 'asasasasas'
        ]);
    }
}
