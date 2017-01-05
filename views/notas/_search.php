<?php
/**
 * /var/www/html/wanda/runtime/giiant/eeda5c365686c9888dbc13dbc58f89a1
 *
 * @package default
 */


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 *
 * @var yii\web\View $this
 * @var app\models\NotasSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="notas-search">

    <?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

    		<?php echo $form->field($model, 'id') ?>

		<?php echo $form->field($model, 'cliente') ?>

		<?php echo $form->field($model, 'usuario') ?>

		<?php echo $form->field($model, 'caja') ?>

		<?php echo $form->field($model, 'total') ?>

		<?php // echo $form->field($model, 'fecha') ?>

		<?php // echo $form->field($model, 'tipo') ?>

		<?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
