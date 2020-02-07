<?php

namespace brazhnikov\yii2cadastre;

use Yii;
use yii\base\BootstrapInterface;

/**
 * This is just an example.
 */
class Bootstrap implements BootstrapInterface
{
    //Метод, который вызывается автоматически при каждом запросе
    public function bootstrap($app)
    {
        //Правила маршрутизации
        $app->getUrlManager()->addRules([
            'cadastre' => 'yii2cadastre/main/index',
        ], false);
        /*
         * Регистрация модуля в приложении
         * (вместо указания в файле frontend/config/main.php
         */
        $app->setModule('yii2cadastre', 'brazhnikov\yii2cadastre\Module');
    }
}
