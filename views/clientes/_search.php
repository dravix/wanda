<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var app\models\ClientesSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="clientes-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'nombre') ?>

		<?= $form->field($model, 'rfc') ?>

		<?= $form->field($model, 'direccion') ?>

		<?= $form->field($model, 'poblacion') ?>

		<?php // echo $form->field($model, 'estado') ?>

		<?php // echo $form->field($model, 'tel') ?>

		<?php // echo $form->field($model, 'correo') ?>

		<?php // echo $form->field($model, 'tipo') ?>

		<?php // echo $form->field($model, 'credito') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('cruds', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('cruds', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
