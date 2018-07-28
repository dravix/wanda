<?php
/**
 * /var/www/html/wanda/runtime/giiant/fccccf4deb34aed738291a9c38e87215
 *
 * @package default
 */


use yii\helpers\Html;

/**
 *
 * @var yii\web\View $this
 * @var app\models\Productos $model
 */
$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' =>  'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud productos-create">

    <h1>
        <?php echo  'Productos' ?>
        <small>
                        <?php echo $model->ref ?>
        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?php echo             Html::a(
	'Cancel',
	\yii\helpers\Url::previous(),
	['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
