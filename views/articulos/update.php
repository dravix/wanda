<?php
/**
 * /var/www/html/wanda/runtime/giiant/fcd70a9bfdf8de75128d795dfc948a74
 *
 * @package default
 */


use yii\helpers\Html;

/**
 *
 * @var yii\web\View $this
 * @var app\models\Articulos $model
 */
$this->title = 'Articulos' . " " . $model->ref . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Articulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->ref, 'url' => ['view', 'ref' => $model->ref]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud articulos-update">

    <h1>
        <?php echo 'Articulos' ?>
        <small>
                        <?php echo $model->ref ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?php echo Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'ref' => $model->ref], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
