<?php

namespace app\controllers;

/**
* This is the class for controller "UsuariosController".
*/
class UsuariosController extends \app\controllers\base\UsuariosController
{

	public function beforeAction($action) {
		$this->layout = "@app/views/layouts/gentella.php";
		return parent::beforeAction($action);
	}
	
}
