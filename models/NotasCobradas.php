<?php

namespace app\models;

use Yii;
use \app\models\base\NotasCobradas as BaseNotasCobradas;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "notas_cobradas".
 */
class NotasCobradas extends BaseNotasCobradas
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
