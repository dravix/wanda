<?php
/**
 * /var/www/html/wanda/runtime/giiant/f197ab8e55d1e29a2dea883e84983544
 *
 * @package default
 */


namespace app\controllers\api;

use app\models\Productos;
/**
 * This is the class for REST controller "ProductosController".
 */
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ProductosController extends \yii\rest\ActiveController
{
	public $modelClass = 'app\models\Productos';

	public function actions()
	{
	    $actions = parent::actions();

	    // disable the "delete" and "create" actions
	    unset($actions['delete'], $actions['create']);

	    // customize the data provider preparation with the "prepareDataProvider()" method
	    // $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

	    return $actions;
	}

	public function actionSearch($q='')
	{
		return Productos::search($q)->all();
	}
}
