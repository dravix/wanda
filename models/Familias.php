<?php

namespace app\models;

use Yii;
use \app\models\base\Familias as BaseFamilias;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "familias".
 */
class Familias extends BaseFamilias
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
