<?php

namespace brazhnikov\yii2cadastre;

use Yii;
use yii\base\BootstrapInterface;

/**
 * Bootstrap - Класс начальной загрузки
 * должен реализовывать интерфейс yii\base\BootstrapInterface
 *
 * @version 1.0.1
 * @package brazhnikov\yii2cadastre
 * @author  Vasya Brazhnikov
 * @copyright Copyright (c) 2020, Vasya Brazhnikov
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * bootstrap - метод, который вызывается автоматически при каждом запросе
     * @param $app -
     * @return void
     */
    public function bootstrap( $app ) {
        // Правила маршрутизации
        $app->getUrlManager()->addRules([
            'cadastre' => 'yii2cadastre/main/index',
        ], false);
        /*
         * Регистрация компонента
         */
        $app->setComponents(['curlAgent' => 'brazhnikov\yii2cadastre\components\SearchByCadastraNumbeComponent']);
        /*
         * Регистрация модуля в приложении
         * (вместо указания в файле frontend/config/main.php
         */
        $app->setModule('yii2cadastre', 'brazhnikov\yii2cadastre\Module');
    }
}
