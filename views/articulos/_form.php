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
use yii\helpers\ArrayHelper;

/**
 *
 * @var yii\web\View $this
 * @var app\models\Articulos $model
 * @var yii\widgets\ActiveForm $form
 */
 $unidades=ArrayHelper::map(\app\models\Unidades::find()->asArray()->all(), 'id', 'nombre');
 $familias=ArrayHelper::map(\app\models\Familias::find()->asArray()->all(), 'id', 'nombre');
 $impuestos=ArrayHelper::map(\app\models\Impuestos::find()->asArray()->all(), 'id', 'nombre');
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

		<!-- attribute descripcion -->
			<?php echo $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

<div class="row">
	<div class="col-md-4">
<!-- attribute familia -->
			<?php echo $form->field($model, 'familia')->dropDownList($familias) ?>		
	</div>
	<div class="col-md-4">
		<!-- attribute unidad -->
			<?php echo $form->field($model, 'unidad')->dropDownList($unidades) ?>
	</div>
	<div class="col-md-4">
		
<!-- attribute impuesto -->
			<?php echo $form->field($model, 'impuesto')->dropDownList($impuestos) ?>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		


<!-- attribute costo -->
			<?php echo $form->field($model, 'costo')->textInput() ?>
	</div>
	<div class="col-md-4">
<!-- attribute ganancia -->
			<?php echo $form->field($model, 'ganancia')->textInput() ?>
	</div>	
	<div class="col-md-4">
<!-- attribute precio -->
			<?php echo $form->field($model, 'precio')->textInput() ?>
	</div>

</div>
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
	($model->isNewRecord ? 'Crear' : 'Guardar'),
	[
		'id' => 'save-' . $model->formName(),
		'class' => 'btn btn-success'
	]
);
?>

        <?php ActiveForm::end(); ?>

    </div>

</div>
