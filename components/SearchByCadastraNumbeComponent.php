<?php

namespace brazhnikov\yii2cadastre\components;

use brazhnikov\yii2cadastre\components\CurlAgent\Agent;
use yii\base\Component;
use yii\helpers\Html;

class SearchByCadastraNumbeComponent extends Component {

    /**
     * @access public
     * @var $agent -
     */
    private $agent;

    /**
     * init - функция инициализации. Если данные не будут переданы в компонент,
     * то он выведет текст "Текст по умолчанию"
     */
    public function init() {
        parent::init();
        $this->agent = new Agent();
    }

    /**
     * display - функция отображения данных
     * @param null $content
     */
    public function display( $content = null ) {
        $result = $this->agent->init( "url" );
        return json_decode($result['agent_resp']);
        // вывод данных
        //echo Html::encode(json_decode($result['agent_resp']));
    }

}
