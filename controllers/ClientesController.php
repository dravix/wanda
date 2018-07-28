<?php

namespace app\controllers;

/**
* This is the class for controller "ClientesController".
*/
class ClientesController extends \app\controllers\base\ClientesController
{

	public function beforeAction($action) {
		$this->layout = "@app/views/layouts/gentella.php";
		return parent::beforeAction($action);
	}
}
