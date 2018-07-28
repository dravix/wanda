<?php
/**
 * /var/www/html/wanda/runtime/giiant/49eb2de82346bc30092f584268252ed2
 *
 * @package default
 */


namespace app\controllers;

use yii\filters\AccessControl;
use yiister\gentelella\views;
/**
 * This is the class for controller "ArticulosController".
 */
class ArticulosController extends \app\controllers\base\ArticulosController
{

	public function beforeAction($action) {
		$this->layout = "@app/views/layouts/gentella.php";
		return parent::beforeAction($action);
	}

	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'actions' => ['login'],
						'allow' => true,
						'roles' => ['?'],
					],
					[
						'allow' => true,
						'roles' => ['@'],
					],
					[
						'allow' => false,
						'roles' => ['?'],
					],            
				],
			],
		];
	}
}
