<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Inventarios $model
*/

$this->title = Yii::t('models', 'Inventarios');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Inventarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id_inventario, 'url' => ['view', 'id_inventario' => $model->id_inventario]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud inventarios-update">

    <h1>
        <?= Yii::t('models', 'Inventarios') ?>
        <small>
                        <?= Html::encode($model->id_inventario) ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . Yii::t('cruds', 'View'), ['view', 'id_inventario' => $model->id_inventario], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
