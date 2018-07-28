<?php

namespace app\controllers;

/**
* This is the class for controller "UnidadesController".
*/
class UnidadesController extends \app\controllers\base\UnidadesController
{
	public function beforeAction($action) {
		$this->layout = "@app/views/layouts/gentella.php";
		return parent::beforeAction($action);
	}

}
