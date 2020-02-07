<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model brazhnikov\yii2cadastre\models\Cadastra */

?>
<div class="banknotes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
