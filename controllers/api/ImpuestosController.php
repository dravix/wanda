<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "ImpuestosController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ImpuestosController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Impuestos';
}
