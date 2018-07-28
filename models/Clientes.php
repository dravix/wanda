<?php

namespace app\models;

use Yii;
use \app\models\base\Clientes as BaseClientes;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "clientes".
 */
class Clientes extends BaseClientes
{

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
            ]
        );
    }
}
