<?php
/* @var $this yii\web\View */
use himiklab\jqgrid\JqGridWidget;
use yii\helpers\Url;


?>

<?= JqGridWidget::widget([
    // 'requestUrl' => Url::to('jqgrid'),
    'gridSettings' => [
        'colNames' => ['Ref', 'Descripcion', 'Precio','Cantidad','Importe'],
        'colModel' => [
            ['name' => 'ref', 'index' => 'ref', 'editable' => true],
            ['name' => 'descripcion', 'index' => 'descripcion', 'editable' => true],
            ['name' => 'precio', 'index' => 'precio', 'editable' => true],
            ['name' => 'cantidad', 'index' => 'cantidad', 'editable' => true],
            ['name' => 'importe', 'index' => 'importe', 'editable' => true],
        ],
        'rowNum' => 15,
        'autowidth' => true,
        'height' => 'auto',
    ],
    'pagerSettings' => [
        'edit' => true,
        'add' => true,
        'del' => true,
        'search' => ['multipleSearch' => true]
    ],
    'enableFilterToolbar' => false,
]) ?>