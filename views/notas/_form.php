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
 * @var app\models\Notas $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="notas-form">

    <?php $form = ActiveForm::begin([
		'id' => 'Notas',
		'layout' => 'default',
		'enableClientValidation' => true,
		'errorSummaryCssClass' => 'error-summary alert alert-error'
	]
);
?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>


<!-- attribute cliente -->
			<?php echo $form->field($model, 'cliente')->textInput() ?>

<!-- attribute usuario -->
			<?php echo $form->field($model, 'usuario')->textInput() ?>

<!-- attribute caja -->
			<?php echo $form->field($model, 'caja')->textInput() ?>

<!-- attribute total -->
			<?php echo $form->field($model, 'total')->textInput() ?>

<!-- attribute fecha -->
			<?php echo $form->field($model, 'fecha')->textInput() ?>

<!-- attribute tipo -->
			<?php echo $form->field($model, 'tipo')->textInput() ?>

<!-- attribute status -->
			<?php echo $form->field($model, 'status')->textInput() ?>
        </p>
        <?php $this->endBlock(); ?>

        <?php echo
Tabs::widget(
	[
		'encodeLabels' => false,
		'items' => [
			[
				'label'   =>  'Notas',
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
