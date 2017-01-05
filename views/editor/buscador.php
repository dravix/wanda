<?php
/* @var $this yii\web\View */
use kartik\typeahead\TypeaheadBasic;
use kartik\typeahead\Typeahead;
use yii\helpers\Url;
use yii\helpers\Html;
$url=Url::to(['/api/productos/search']);
$template = '<div><p class="repo-language">{{codigo}}</p>' .
    '<p class="repo-name">{{ref}}</p>' .
    '<p class="repo-description">{{descripcion}}</p></div>';

?>
<div class="clearfix">
    <div class="col-xs-9">
        <?= 
    Typeahead::widget([
        'name' => 'productos',
        'options' => ['placeholder' => 'Ref, codigo de barras o descripcion'],
        'pluginOptions' => ['highlight'=>true],
        'pluginEvents'=>[
            "typeahead:select" => "function(ev,selected) {
                current=selected;
                var source   = $('#producto-seleccionado').html();
                var template = Handlebars.compile(source);
                var html    = template(current);
                $('#actual').html(html);
                let cant=$('#cantidad');
                cant.val(1);
                cant.focus();
                cant.select();
                console.log(\"typeahead:select\"+current.ref); }",
        ],
        'dataset' => [
            [
                'datumTokenizer' => "Bloodhound.tokenizers.obj.whitespace('descripcion')",
                'display' => 'descripcion',
                // 'prefetch' => $url,
                'remote' => [
                    'url' => $url. '?q=%QUERY',
                    'wildcard' => '%QUERY'
                ]
            ]
        ]
    ]);
         ?>
    </div>
    <div class="col-xs-3">
        <?= Html::input('numeric','cantidad',1,['class'=>'form-control', 'id'=>'cantidad']) ?>
    </div>

</div>
<br>
<div id="actual">

</div>

<script id="producto-seleccionado" type="text/x-handlebars-template">
    <div class="panel panel-warning">
      <div class="panel-heading">{{descripcion}}</div>
      <div class="panel-body">
        <h2> Precio: ${{precio}} </h2>
        Ref: #{{ref}}
      </div>
    </div>
</script>
