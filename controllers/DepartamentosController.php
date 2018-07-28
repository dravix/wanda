<?php

namespace app\controllers;

/**
* This is the class for controller "DepartamentosController".
*/
class DepartamentosController extends \app\controllers\base\DepartamentosController
{
	public function beforeAction($action) {
		$this->layout = "@app/views/layouts/gentella.php";
		return parent::beforeAction($action);
	}
}
