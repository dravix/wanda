<?php

namespace app\controllers;
use yii\data\ArrayDataProvider;
use Yii;

class EditorController extends \yii\web\Controller
{
    public $layout="gentella";

    public function actionBuscador()
    {
        return $this->render('buscador');
    }

    public function actionAdd() {
        $request = Yii::$app->request;
        $post = $request->post();
        if(array_key_exists('producto',$post)){
            $producto=$post['producto'];
            $producto['cantidad']=$post['cantidad'];
            $producto['total'] = $producto['cantidad']*$producto['precio'];
            $session = Yii::$app->session;
            // if ($session->isActive){
            $basket = $session->get('basket') ? $session->get('basket') : [] ;
            array_push($basket,$producto);
            $session->set('basket',$basket);
            // }
        }
        $provider = new ArrayDataProvider([
            'allModels' => $session->get('basket'),
            'pagination' => false,

        ]);        
         return $this->renderPartial('lista',['provider'=>$provider]);        
         // return json_encode($session->get('basket'));
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
        $session = Yii::$app->session;
        $provider = new ArrayDataProvider([
            'allModels' => $session->get('basket'),
            'pagination' => false,

        ]);        
         return $this->render('lista',['provider'=>$provider]);
    }

    public function actionResumen()
    {
        $session = Yii::$app->session;
        $basket = $session->get('basket') ? $session->get('basket') : [] ;
        $resumen = ['total'=>0];
        foreach ($basket as &$item){
            $item['total'] = $item['cantidad'] * $item['precio'];
            $resumen['total'] += $item['total'];
        }
        $session->set('resumen',$resumen);
        $session->set('basket',$basket);
        return $this->actionLista();
    }

    public function actionReset()
    {
        #clears session values
        $session = Yii::$app->session;
        $session->set('basket',[]);
        $session->set('resumen',[]);
        $this->redirect(['editor/index']);
    }

}
