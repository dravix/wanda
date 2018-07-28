<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "DepartamentosController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class DepartamentosController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Departamentos';
}
