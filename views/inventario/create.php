<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Inventarios $model
*/

$this->title = Yii::t('models', 'Inventarios');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Inventarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud inventarios-create">

    <h1>
        <?= Yii::t('models', 'Inventarios') ?>
        <small>
                        <?= Html::encode($model->id_inventario) ?>
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
