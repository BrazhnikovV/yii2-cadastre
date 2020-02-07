<?php

namespace brazhnikov\yii2cadastre\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use brazhnikov\yii2cadastre\AppAssetsBundle;
use brazhnikov\yii2cadastre\models\Cadastra;

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
        $model = new Cadastra();

        if ( Yii::$app->request->isPost ) {
            $post = Yii::$app->request->post('Cadastra' );
            $dbResult = $model::find()->where( ['cadastral_number' => $post['cadastral_number']] )->one();
            if ( $dbResult === null ) {
                $searchResult = Yii::$app->curlAgent->display( $post['cadastral_number'] );
                $attrs = $searchResult->feature->attrs;
                //echo var_dump($searchResult->feature->attrs);
                //exit();

                if ( $searchResult ) {

                    $model->cadastral_number = $attrs->cn;
                    $model->address          = $attrs->address;
                    $model->price            = $attrs->cad_cost;
                    $model->area             = $attrs->area_value;

                    if ( $model->save() ) {
                        return $this->redirect(['index']);
                    } else {
                        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
                    }
                }
            }
        }

        return $this->render('index',[
            'model' => $model,
            'datas' => 'asasasasas'
        ]);
    }
}
