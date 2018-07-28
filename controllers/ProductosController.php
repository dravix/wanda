<?php
/**
 * /var/www/html/wanda/runtime/giiant/49eb2de82346bc30092f584268252ed2
 *
 * @package default
 */


namespace app\controllers;

/**
 * This is the class for controller "ProductosController".
 */
class ProductosController extends \app\controllers\base\ProductosController
{
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
