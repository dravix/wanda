<?php

namespace app\models;

use Yii;
use \app\models\base\Existencia as BaseExistencia;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "existencia".
 */
class Existencia extends BaseExistencia
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
