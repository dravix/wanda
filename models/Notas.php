<?php

namespace app\models;

use Yii;
use \app\models\base\Notas as BaseNotas;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "notas".
 */
class Notas extends BaseNotas
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
