<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "ClientesController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ClientesController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Clientes';
}
