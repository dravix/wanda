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
 * @var app\models\ArticulosSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="articulos-search">

    <?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

    		<?php echo $form->field($model, 'codigo') ?>

		<?php echo $form->field($model, 'ref') ?>

		<?php echo $form->field($model, 'descripcion') ?>

		<?php echo $form->field($model, 'familia') ?>

		<?php echo $form->field($model, 'costo') ?>

		<?php // echo $form->field($model, 'ganancia') ?>

		<?php // echo $form->field($model, 'precio') ?>

		<?php // echo $form->field($model, 'stock') ?>

		<?php // echo $form->field($model, 'unidad') ?>

		<?php // echo $form->field($model, 'vendidas') ?>

		<?php // echo $form->field($model, 'impuesto') ?>

		<?php // echo $form->field($model, 'ultima_modificacion') ?>

    <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
