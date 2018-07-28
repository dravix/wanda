<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "UnidadesController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class UnidadesController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Unidades';
}
