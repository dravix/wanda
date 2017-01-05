<?php

namespace app\controllers;

class EditorController extends \yii\web\Controller
{
    public $layout="iris";

    public function actionBuscador()
    {
        return $this->render('buscador');
    }

    public function actionCheckout()
    {
        return $this->render('checkout');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLista()
    {
        return $this->render('lista');
    }

    public function actionResumen()
    {
        return $this->render('resumen');
    }

}
