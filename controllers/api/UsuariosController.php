<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "UsuariosController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class UsuariosController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Usuarios';
}
