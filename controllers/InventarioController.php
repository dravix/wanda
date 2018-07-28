<?php

namespace app\controllers;

/**
* This is the class for controller "InventarioController".
*/
class InventarioController extends \app\controllers\base\InventarioController
{
	public function beforeAction($action) {
		$this->layout = "@app/views/layouts/gentella.php";
		return parent::beforeAction($action);
	}
}
