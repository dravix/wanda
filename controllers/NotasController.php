<?php
/**
 * /var/www/html/wanda/runtime/giiant/49eb2de82346bc30092f584268252ed2
 *
 * @package default
 */

namespace app\controllers;
use yii\filters\AccessControl;

/**
 * This is the class for controller "NotasController".
 */
class NotasController extends \app\controllers\base\NotasController
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
