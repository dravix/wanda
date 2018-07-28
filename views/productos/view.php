<?php
/**
 * /var/www/html/wanda/runtime/giiant/d4b4964a63cc95065fa0ae19074007ee
 *
 * @package default
 */


use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
 *
 * @var yii\web\View $this
 * @var app\models\Productos $model
 */
$copyParams = $model->attributes;

$this->title = Yii::t('models', 'Productos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Productos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->ref, 'url' => ['view', 'ref' => $model->ref]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud productos-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?php echo \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <h1>
        <?php echo Yii::t('models', 'Productos') ?>
        <small>
            <?php echo $model->ref ?>
        </small>
    </h1>


    <div class="clearfix crud-navigation">

        <!-- menu buttons -->
        <div class='pull-left'>
            <?php echo Html::a(
	'<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
	[ 'update', 'ref' => $model->ref],
	['class' => 'btn btn-info']) ?>

            <?php echo Html::a(
	'<span class="glyphicon glyphicon-copy"></span> ' . 'Copy',
	['create', 'ref' => $model->ref, 'Productos'=>$copyParams],
	['class' => 'btn btn-success']) ?>

            <?php echo Html::a(
	'<span class="glyphicon glyphicon-plus"></span> ' . 'New',
	['create'],
	['class' => 'btn btn-success']) ?>
        </div>

        <div class="pull-right">
            <?php echo Html::a('<span class="glyphicon glyphicon-list"></span> '
	. 'Full list', ['index'], ['class'=>'btn btn-default']) ?>
        </div>

    </div>

    <hr />

    <?php $this->beginBlock('app\models\Productos'); ?>


    <?php echo DetailView::widget([
		'model' => $model,
		'attributes' => [
			'codigo',
			'familia',
			'unidad',
			'impuesto',
			'descripcion',
			'costo',
			'ganancia',
			'precio',
			'stock',
			'vendidas',
			'ultima_modificacion',
		],
	]); ?>


    <hr/>

    <?php echo Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'ref' => $model->ref],
	[
		'class' => 'btn btn-danger',
		'data-confirm' => '' . 'Are you sure to delete this item?' . '',
		'data-method' => 'post',
	]); ?>
    <?php $this->endBlock(); ?>



    <?php echo Tabs::widget(
	[
		'id' => 'relation-tabs',
		'encodeLabels' => false,
		'items' => [
			[
				'label'   => '<b class=""># '.$model->ref.'</b>',
				'content' => $this->blocks['app\models\Productos'],
				'active'  => true,
			],
		]
	]
);
?>
</div>
