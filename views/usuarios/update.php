<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Usuarios $model
*/

$this->title = Yii::t('models', 'Usuarios');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Usuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id_usuario, 'url' => ['view', 'id_usuario' => $model->id_usuario]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud usuarios-update">

    <h1>
        <?= Yii::t('models', 'Usuarios') ?>
        <small>
                        <?= Html::encode($model->id_usuario) ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . Yii::t('cruds', 'View'), ['view', 'id_usuario' => $model->id_usuario], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
