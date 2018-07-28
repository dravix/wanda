<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var app\models\Clientes $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="clientes-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Clientes',
    'layout' => 'inline',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-danger',
    'fieldConfig' => [
             'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
             'horizontalCssClasses' => [
                 'label' => 'col-sm-2',
                 #'offset' => 'col-sm-offset-4',
                 'wrapper' => 'col-sm-8',
                 'error' => '',
                 'hint' => '',
             ],
         ],
    ]
    );
    ?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>
            

<!-- attribute nombre -->
			<?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

<!-- attribute rfc -->
			<?= $form->field($model, 'rfc')->textInput(['maxlength' => true]) ?>

<!-- attribute direccion -->
			<?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

<!-- attribute poblacion -->
			<?= $form->field($model, 'poblacion')->textInput(['maxlength' => true]) ?>

<!-- attribute estado -->
			<?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

<!-- attribute tel -->
			<?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

<!-- attribute correo -->
			<?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>

<!-- attribute tipo -->
			<?= $form->field($model, 'tipo')->textInput() ?>

<!-- attribute credito -->
			<?= $form->field($model, 'credito')->textInput() ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'Clientes'),
    'content' => $this->blocks['main'],
    'active'  => true,
],
                    ]
                 ]
    );
    ?>
        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton(
        '<span class="glyphicon glyphicon-check"></span> ' .
        ($model->isNewRecord ? Yii::t('cruds', 'Create') : Yii::t('cruds', 'Save')),
        [
        'id' => 'save-' . $model->formName(),
        'class' => 'btn btn-success'
        ]
        );
        ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>

