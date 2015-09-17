<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CuentaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuenta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fecha_ini') ?>

    <?= $form->field($model, 'fecha_fin') ?>

    <?= $form->field($model, 'nombre_usuario') ?>

    <?= $form->field($model, 'clave') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'baja') ?>

    <?php // echo $form->field($model, 'id_contacto') ?>

    <?php // echo $form->field($model, 'id_plan') ?>

    <?php // echo $form->field($model, 'precio') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
