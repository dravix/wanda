<?php

namespace app\controllers;

/**
* This is the class for controller "ImpuestosController".
*/
class ImpuestosController extends \app\controllers\base\ImpuestosController
{
	public function beforeAction($action) {
		$this->layout = "@app/views/layouts/gentella.php";
		return parent::beforeAction($action);
	}
}
