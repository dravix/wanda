<?php
/* @var $this yii\web\View */
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
?>
<div class="row">	
	<div class="col-md-6">
	    <?= $this->render('buscador') ?>
	</div>
	<div class="col-md-6">
		<?= Html::a('Nuevo',['editor/reset'],['class'=>'btn btn-success', 'id'=>'new']) ?>
	</div>
</div>
<div class="col-md-12" id="basket">
	<?php 
        $session = Yii::$app->session;
        $provider = new ArrayDataProvider([
            'allModels' => $session->get('basket'),
            'pagination' => false,

        ]); 
	 echo $this->render('lista',compact('provider')) ?>
</div>
