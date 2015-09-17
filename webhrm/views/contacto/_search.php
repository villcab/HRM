<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContactoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombres') ?>

    <?= $form->field($model, 'correo') ?>

    <?= $form->field($model, 'telefono') ?>

    <?= $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'baja') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
