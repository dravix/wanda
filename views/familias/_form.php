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
 * @var app\models\Familias $model
 * @var yii\widgets\ActiveForm $form
 */

 $departamentos=ArrayHelper::map(\app\models\Departamentos::find()->asArray()->all(), 'id', 'nombre');
 ?>
<div class="familias-form">

    <?php $form = ActiveForm::begin([
		'id' => 'Familias',
		'layout' => 'horizontal',
		'enableClientValidation' => true,
		'errorSummaryCssClass' => 'error-summary alert alert-error'
	]
);
?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>


<!-- attribute nombre -->
			<?php echo $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

<!-- attribute departamento -->

			<?php echo $form->field($model, 'departamento')->dropDownList($departamentos) ?>


        </p>
        <?php $this->endBlock(); ?>

        <?php echo
Tabs::widget(
	[
		'encodeLabels' => false,
		'items' => [
			[
				'label'   => 'Familias',
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
