<?php

namespace app\controllers;
use app\models\Notas;
use Yii;
use yii\data\SqlDataProvider;

class ReportesController extends \yii\web\Controller
{

    public function beforeAction($action) {
        $this->layout = "@app/views/layouts/gentella.php";
        return parent::beforeAction($action);
    }

    public function actionAcumulado()
    {
        return $this->render('acumulado');
    }

    public function actionAnual()
    {
        return $this->render('anual');
    }

    public function actionArticulos()
    {
        return $this->render('articulos');
    }

    public function actionComparativa()
    {
        return $this->render('comparativa');
    }

    public function actionDiarias()
    {
        $fecha=date("Y-m-d")
        $count = Yii::$app->db->createCommand('
            SELECT count(*) FROM notas WHERE status=:status and DATE(fecha)=:fecha
        ', [':status' => 1,':fecha'=>$fecha])->queryScalar();

        $provider = new SqlDataProvider([
            'sql' => 'SELECT sum(total) as total,fecha FROM notas WHERE status=:status 
                group by YEAR(fecha),MONTH(fecha) ',
            'params' => [':status' => 1],
            'totalCount' => $count,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'attributes' => [
                    'total',
                    'fecha',
                ],
            ],
        ]);

        return print_r($provider->getModels());
        // return $this->render('diarias');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

}
