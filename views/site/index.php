<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Pyventa Web';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Pyventa web</h1>

        <p class="lead">Bienvenido</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Productos</h2>

                <p>
                    <?= Html::a('Administracion de productos',['articulos/index'],['class'=>'btn btn-success']) ?>

                </p>
            </div>
            <div class="col-lg-4">
                <h2>Notas</h2>

                <p>
                    <?= Html::a('Administracion de Notas',['notas/index'],['class'=>'btn btn-primary']) ?>

                </p>
            </div>
            <div class="col-lg-4">
                <h2>Editor</h2>
                <p>
                    <?= Html::a('Editor',['editor/index'],['class'=>'btn btn-default']) ?>

                </p>
            </div>
        </div>

    </div>
</div>
