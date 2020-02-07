<?php

namespace brazhnikov\yii2cadastre\controllers;

use Yii;
use yii\web\Controller;

class MainController extends Controller
{
    public $layout = 'main';
    public function actionIndex() {
        // регистрируем ресурсы:
        \brazhnikov\yii2cadastre\AppAssetsBundle::register($this->view);

        return $this->render('index',[
            'datas' => 'asasasasas'
        ]);
    }
}
