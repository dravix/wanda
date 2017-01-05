<?php
/**
 * /var/www/html/wanda/runtime/giiant/4b7e79a8340461fe629a6ac612644d03
 *
 * @package default
 */


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
 *
 * @var yii\web\View $this
 * @var app\models\Articulos $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="articulos-form">

    <?php $form = ActiveForm::begin([
		'id' => 'Articulos',
		'layout' => 'default',
		'enableClientValidation' => true,
		'errorSummaryCssClass' => 'error-summary alert alert-error'
	]
);
?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>


<!-- attribute codigo -->
			<?php echo $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>

<!-- attribute familia -->
			<?php echo $form->field($model, 'familia')->textInput() ?>

<!-- attribute unidad -->
			<?php echo $form->field($model, 'unidad')->textInput() ?>

<!-- attribute impuesto -->
			<?php echo $form->field($model, 'impuesto')->textInput() ?>

<!-- attribute descripcion -->
			<?php echo $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

<!-- attribute costo -->
			<?php echo $form->field($model, 'costo')->textInput() ?>

<!-- attribute ganancia -->
			<?php echo $form->field($model, 'ganancia')->textInput() ?>

<!-- attribute precio -->
			<?php echo $form->field($model, 'precio')->textInput() ?>

<!-- attribute stock -->
			<?php echo $form->field($model, 'stock')->textInput() ?>

<!-- attribute vendidas -->
			<?php echo $form->field($model, 'vendidas')->textInput() ?>

<!-- attribute ultima_modificacion -->
			<?php echo $form->field($model, 'ultima_modificacion')->textInput() ?>
        </p>
        <?php $this->endBlock(); ?>

        <?php echo
Tabs::widget(
	[
		'encodeLabels' => false,
		'items' => [
			[
				'label'   =>  'Articulos',
				'content' => $this->blocks['main'],
				'active'  => true,
			],
		]
	]
);
?>
        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?php echo Html::submitButton(
	'<span class="glyphicon glyphicon-check"></span> ' .
	($model->isNewRecord ? 'Create' : 'Save'),
	[
		'id' => 'save-' . $model->formName(),
		'class' => 'btn btn-success'
	]
);
?>

        <?php ActiveForm::end(); ?>

    </div>

</div>
