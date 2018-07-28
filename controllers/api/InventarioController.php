<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "InventarioController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class InventarioController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Inventarios';
}
