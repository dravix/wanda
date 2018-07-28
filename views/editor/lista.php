<?php
/* @var $this yii\web\View */
// use himiklab\jqgrid\JqGridWidget;
use yii\helpers\Url;
use yii\console\widgets\Table;
use yii\grid\GridView;
?>

<?php 
echo GridView::widget([
        'dataProvider' => $provider,

        'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
        'headerRowOptions' => ['class'=>'x'],
        'columns' => [
            'cantidad',
            'codigo',
            'descripcion',
            'precio:currency',
            'total:currency',
            // 'impuesto',`
            // 'ganancia',
            /*'precio',*/
            /*'stock',*/
            /*'vendidas',*/
            /*'ultima_modificacion',*/
        ],
    ]); 

// JqGridWidget::widget([
//     // 'requestUrl' => Url::to('jqgrid'),
//     'gridSettings' => [
//         'colNames' => ['Ref', 'Descripcion', 'Precio','Cantidad','Importe'],
//         'colModel' => [
//             ['name' => 'ref', 'index' => 'ref', 'editable' => true],
//             ['name' => 'descripcion', 'index' => 'descripcion', 'editable' => true],
//             ['name' => 'precio', 'index' => 'precio', 'editable' => true],
//             ['name' => 'cantidad', 'index' => 'cantidad', 'editable' => true],
//             ['name' => 'importe', 'index' => 'importe', 'editable' => true],
//         ],
//         'rowNum' => 15,
//         'autowidth' => true,
//         'height' => 'auto',
//     ],
//     'pagerSettings' => [
//         'edit' => true,
//         'add' => true,
//         'del' => true,
//         'search' => ['multipleSearch' => true]
//     ],
//     'enableFilterToolbar' => false,
// ]) 
?>