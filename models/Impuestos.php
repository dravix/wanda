<?php

namespace app\models;

use Yii;
use \app\models\base\Impuestos as BaseImpuestos;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "impuestos".
 */
class Impuestos extends BaseImpuestos
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
