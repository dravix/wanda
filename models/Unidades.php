<?php

namespace app\models;

use Yii;
use \app\models\base\Unidades as BaseUnidades;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "unidades".
 */
class Unidades extends BaseUnidades
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
