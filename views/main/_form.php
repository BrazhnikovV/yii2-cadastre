<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model brazhnikov\yii2cadastre\models\Cadastra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banknotes-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field( $model, 'cadastral_number')->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
