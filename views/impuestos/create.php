<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Impuestos $model
*/

$this->title = Yii::t('models', 'Impuestos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Impuestos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud impuestos-create">

    <h1>
        <?= Yii::t('models', 'Impuestos') ?>
        <small>
                        <?= Html::encode($model->id) ?>
        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?=             Html::a(
            Yii::t('cruds', 'Cancel'),
            \yii\helpers\Url::previous(),
            ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
