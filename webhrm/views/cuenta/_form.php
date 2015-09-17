<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Cuenta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuenta-form">

    <?php $listContactos = ArrayHelper::map(\app\models\Contacto::findAll(['baja' => 0]), 'id', 'nombres'); ?>
    <?php $listPlanes = ArrayHelper::map(\app\models\Plan::findAll(['baja' => 0]), 'id', 'nombre'); ?>

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'id_contacto')->dropDownList($listContactos, ['prompt' => '--SELECCIONE--']) ?>

    <?= $form->field($model, 'id_plan')->dropDownList($listPlanes, ['prompt' => '--SELECCIONE--']) ?>

    <?=
    $form->field($model, 'fecha_ini')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'es',
        'dateFormat' => 'dd-MM-yyyy',
    ])
    ?>

    <?= $form->field($model, 'fecha_fin')->textInput() ?>

    <?= $form->field($model, 'nombre_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clave')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'precio')->textInput() ?>

    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
